<?php

namespace App\Http\Controllers;

use Mail;
use Auth;
use Illuminate\Http\Request;
use App\Project;
use App\Beneficiary;
use App\DocumentBeneficiaries;
use App\Mail\NewBeneficiaryEmail;
use App\Mail\NewBeneficiaryClientEmail;
use App\Mail\ContactBeneficiaryEmail;
use App\Mail\AttendedBeneficiaryEmail;

class BeneficiaryController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        // 
    }

    public function store(Request $request)
    {
        $data = [
            'project_id' => $request->get('project_id'),
            'phone' => $request->get('phone'),
            'type' => $request->get('type'),
            'documentslist' => $request->get('documentslist')
        ];

        $beneficiary = new Beneficiary([
            'project_id' => $data['project_id'],
            'user_id' => Auth::user()->id,
            'type' => $data['type'],
            'phone' => '',
            'commentary' => '',
            'attended' => false,
            'status' => 'pending'
        ]);

        $beneficiary->save();
        $beneficiary_id = $beneficiary->id;
        
        error_log("Se guardo el beneficiario con el id:" . strval($beneficiary_id));

        $count = 0;
        foreach($data['documentslist'] as $document) {
            if($document['file'] != "none") {
                $doc = new DocumentBeneficiaries([
                    'beneficiary_id' => $beneficiary_id,
                    'type' => $document['type'],
                    'file_name' => $document['file'],
                    'order' => ++$count
                ]);

                $doc->save();
            }
        }

        error_log("Se guardaron los documentos.");

        if(Auth::user()->type == 'BRAZO') {
            $url_site = env('APP_URL');
            $admin_email = env('APP_USER_ADMIN_EMAIL');

            $data = [
                'user' => Auth::user()->name,
                'url' => $url_site . '/admin',
                'url_base' => $url_site
            ];
            Mail::to($admin_email)->send(new NewBeneficiaryEmail($data));
        }

        return response()->json([
            'success'=> 'Saved'
        ]); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $beneficiary = Beneficiary::find($id);
        return view('admin.beneficiaries.validate', compact('beneficiary'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function publish(Request $request)
    {
        //
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list_pending()
    {
        $beneficiaries = Beneficiary::where('status', '=', 'pending')->get();
        return view('admin.beneficiaries.list-pending', compact('beneficiaries'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list_rejected()
    {
        $beneficiaries = Beneficiary::where('status', '=', 'rejected')->get();
        return view('admin.beneficiaries.list-rejected', compact('beneficiaries'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list_accepted()
    {
        $beneficiaries = Beneficiary::orwhere('status', '=', 'accepted')
                                      ->orwhere('status', '=', 'contacted')
                                      ->orwhere('attended', '=', true)->get();
        return view('admin.beneficiaries.list-accepted', compact('beneficiaries'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list_contacting()
    {
        $beneficiaries = Beneficiary::where('status', '=', 'accepted')->get();
        return view('admin.beneficiaries.list-contacting', compact('beneficiaries'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list_attending()
    {
        $beneficiaries = Beneficiary::where('status', '=', 'contacted')->get();
        return view('admin.beneficiaries.list-attending', compact('beneficiaries'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list_attended()
    {
        $beneficiaries = Beneficiary::where('attended', '=', true)->get();
        return view('admin.beneficiaries.list-attended', compact('beneficiaries'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list_by_user()
    {
        $beneficiaries = Beneficiary::where('user_id', '=', Auth::user()->id)->get();
        return view('admin.beneficiaries.index', compact('beneficiaries'));
    }

     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function check(Request $request)
    {
        $beneficiary_id = $request->get('beneficiary_id');
        $action = $request->get('action');

        if($action == "reject") {
            $beneficiary = Beneficiary::find($beneficiary_id);
            $beneficiary->status = "rejected";
            $beneficiary->save();
        } else if($action == "accept") {
            $beneficiary = Beneficiary::find($beneficiary_id);
            $beneficiary->status = "accepted";
            $beneficiary->save();

            $project = Project::find($beneficiary->project_id);

            if($beneficiary->user->type != "ADMIN") {
                $url_site = env('APP_URL');
                $data = [
                    'user' => $project->user->name,
                    'url_base' => $url_site,
                    'url' => $url_site . '/beneficiary/list-contacting'
                ];
                Mail::to($project->user->email)->send(new NewBeneficiaryClientEmail($data));
            }
        } else if($action == "attending") {
            $beneficiary = Beneficiary::find($beneficiary_id);
            $beneficiary->status = "attending";
            $beneficiary->attended = true;
            $beneficiary->save();

            $url_site = env('APP_URL');
            $admin_email = env('APP_USER_ADMIN_EMAIL');
            $data = [
                'user-client' => $beneficiary->user->name,
                'user' => Auth::user()->name,
                'url' => $url_site . '/admin',
                'url_base' => $url_site 
            ];
            Mail::to($admin_email)->send(new AttendedBeneficiaryEmail($data));
        }

        return response()->json([
            'success'=> 'Checked'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function contact(Request $request)
    {
        $beneficiary_id = $request->get('beneficiary_id');
        $action = $request->get('action');
        $message = $request->get('message');

        $beneficiary = Beneficiary::find($beneficiary_id);
        $beneficiary->status = "contacted";
        $beneficiary->commentary = $request->get('message');
        $beneficiary->save();

        $is_online_message = '';
        if($beneficiary->project->online_or_in_person == 'on-line') {
            $is_online_message = $beneficiary->project->zoom_url;
        }

        $url_site = env('APP_URL');
        $data = [
            'user' => $beneficiary->user->name,
            'url_base' => $url_site,
            'message' => $beneficiary->commentary,
            'zoom' => $is_online_message
        ];
        Mail::to($beneficiary->user->email)->send(new ContactBeneficiaryEmail($data));

        return response()->json([
            'success'=> 'Checked'
        ]);
    }

    public function confirm_contact()
    {
        return view('admin.beneficiaries.confirm-conected');
    }

    public function confirm_attending()
    {
        return view('admin.beneficiaries.confirm-attending');
    }
}
