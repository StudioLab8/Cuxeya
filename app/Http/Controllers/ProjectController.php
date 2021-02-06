<?php

namespace App\Http\Controllers;

use Mail;
use Auth;
use Illuminate\Http\Request;
use App\Project;
use App\Gallery;
use App\Donation;
use App\DocumentProject;
use App\Mail\NewProjectEmail;
use App\Mail\ValidatedProjectEmail;

class ProjectController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();
        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        return view('admin.projects.create-admin');
    }

    public function store(Request $request)
    {
        $data = [
            'project_name' => $request->get('project_name'),
            'project_type' => $request->get('project_type'),
            'category' => $request->get('category'),
            'modality_project' => $request->get('modality_project'),
            'link_zoom' => $request->get('link_zoom'),
            'country' => $request->get('country'),
            'city' => $request->get('city'),
            'address' => $request->get('address'),
            'state' => $request->get('state'),
            'zip_code' => $request->get('zip_code'),
            'galery' => $request->get('galery'),
            'youtube_link' => $request->get('youtube_link'),
            'description' => $request->get('description'),
            'phone' => $request->get('phone'),
            'web_site' => $request->get('web_site'),
            'email' => $request->get('email'),
            'facebook' => $request->get('facebook'),
            'twitter' => $request->get('twitter'),
            'instagram' => $request->get('instagram'),
            'receive_donations' => $request->get('receive_donations'),
            'donations' => $request->get('donations'),
            'personalized_donation' => $request->get('personalized_donation'),
            'documentslist' => $request->get('documentslist')
        ];

        $url = strtolower(preg_replace('/\s+/', '-', trim($data['project_name'])));

        $project = new Project([
            'user_id' => Auth::user()->id,
            'name' => $data['project_name'],
            'category' => $data['category'],
            'type' => $data['project_type'],
            'online_or_in_person' => $data['modality_project'],
            'country' => $data['country'],
            'city' => $data['city'],
            'address' => $data['address'],
            'state' => $data['state'],
            'zip_code' => $data['zip_code'],
            'zoom_url' => $data['link_zoom'],
            'description' => $data['description'],
            'youtube_url' => $data['youtube_link'],
            'phone' => $data['phone'],
            'email' => $data['project_name'],
            'web' => $data['web_site'],
            'account_fb' => $data['facebook'],
            'account_tw' => $data['twitter'],
            'account_ins' => $data['instagram'],
            'accept_donations' => $data['receive_donations'],
            'personalized_donation' => $data['personalized_donation'],
            'activated' => false,
            'url' => $url,
            'status' => 'pending'
        ]);

        $project->save();
        $project_id = $project->id;
        
        error_log("Se guardo el proyecto con el id:" . strval($project_id));
        
        $count = 0;
        foreach($data['galery'] as $image) {
            $gallery = new Gallery([
                'project_id' => $project_id,
                'image_name' => $image,
                'order' => ++$count
            ]);

            $gallery->save();
        }

        error_log("Se guardo la galeria.");

        $count = 0;
        foreach($data['documentslist'] as $document) {
            if($document['file'] != "none") {
                $doc = new DocumentProject([
                    'project_id' => $project_id,
                    'type' => $document['type'],
                    'file_name' => $document['file'],
                    'order' => ++$count
                ]);

                $doc->save();
            }
        }

        error_log("Se guardaron los documentos.");

        if($data['receive_donations'] == "1") {
            foreach($data['donations'] AS $donation) {
                $donation = new Donation([
                    'project_id' => $project_id,
                    'concept' => $donation['concept'],
                    'description' => $donation['description'],
                    'amount' => $donation['amount']
                ]);

                $donation->save();
            }
        }

        if(Auth::user()->type == 'BRAZO') {
            $url_site = env('APP_URL');
            $admin_email = env('APP_USER_ADMIN_EMAIL');
            $data = [
                'user' => Auth::user()->name,
                'url_base' => $url_site,
                'url' => $url_site . '/admin'
            ];
            Mail::to($admin_email)->send(new NewProjectEmail($data));
        }

        error_log("Se guardaron las donaciones. FIN.......");

        return response()->json([
            'success'=> 'Oooohhhh Yeahhhh God is Good!!!! <3'
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
        $project = Project::find($id);
        $gallery = Gallery::where('project_id', '=', $project->id)->get();
        $donations = Donation::where('project_id', '=', $project->id)->get();
        $documents = DocumentProject::where('project_id', '=', $project->id)->get();

        return view('admin.projects.validate-admin', compact('project', 'gallery', 'donations', 'documents'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function publish(Request $request)
    {
        $project_id = $request->get('project_id');

        $project = Project::find($project_id);
        if($project->activated == true) {
            $project->activated = false;    
        } else {
            $project->activated = true;
        }
        $project->save();

        return response()->json([
            'success'=> 'Oooohhhh Yeahhhh God is Good!!!! <3'
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list_pending()
    {
        $projects = Project::where('status', '=', 'pending')->get();
        return view('admin.projects.list-pending', compact('projects'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list_rejected()
    {
        $projects = Project::where('status', '=', 'rejected')->get();
        return view('admin.projects.list-rejected', compact('projects'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list_accepted()
    {
        $projects = Project::where('status', '=', 'accepted')->get();
        return view('admin.projects.list-accepted', compact('projects'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list_by_user()
    {
        $projects = Project::where('user_id', '=', Auth::user()->id)->get();
        return view('admin.projects.index', compact('projects'));
    }

     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function check(Request $request)
    {
        $project_id = $request->get('project_id');
        $action = $request->get('action');

        if($action == "reject") {
            $project = Project::find($project_id);
            $project->status = "rejected";
            $project->save();
        } else if($action == "accept") {
            $project = Project::find($project_id);
            $project->status = "accepted";
            $project->activated = true;
            $project->publication_date = now();
            $project->save();

            if($project->user->type != "ADMIN") {
                $url_site = env('APP_URL');
                
                $data = [
                    'user' => $project->user->name,
                    'url_base' => $url_site,
                    'url' => $url_site . "/proyecto/" . $project->url
                ];
                Mail::to($project->user->email)->send(new ValidatedProjectEmail($data));
            }
        }

        return response()->json([
            'success'=> 'Checked'
        ]);
    }
}
