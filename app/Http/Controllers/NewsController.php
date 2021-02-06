<?php

namespace App\Http\Controllers;

use Mail;
use App\Mail\Welcome;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\News;
use App\GalleryNews;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::all();
        return view('admin.news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = [
            'title' => $request->get('title'),
            'publish' => $request->get('publish'),
            'content' => $request->get('content'),
            'galery' => $request->get('galery'),
        ];

        $url = preg_replace('/\s+/', '-', trim($data['title']));

        $news = new News([
            'title' => $data['title'],
            'activated' => $data['publish'],
            'content' => $data['content'],
            'url' => $url
        ]);

        $news->save();
        $news_id = $news->id;
            
        error_log("Se guardo la noticia con el id:" . strval($news_id));

        $count = 0;
        foreach($data['galery'] as $image) {
            $gallery = new GalleryNews([
                'news_id' => $news_id,
                'image_name' => $image,
                'order' => ++$count
            ]);

            $gallery->save();
        }

        error_log("Se guardo la galeria.");

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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = News::find($id);
        $gallery = GalleryNews::where('news_id', '=', $news->id)->get();
        return view('admin.news.edit', compact('news', 'gallery')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $data = [
            'id' => $request->get('id'),
            'title' => $request->get('title'),
            'publish' => $request->get('publish'),
            'content' => $request->get('content'),
            'galery' => $request->get('galery'),
        ];

        $url = strtolower(preg_replace('/\s+/', '-', trim($date['title'])));

        $news = News::find($data['id']);
        $news->title = $data['title'];
        $news->activated = $data['publish'];
        $news->content =  $data['content'];
        $news->url =  $data['url'];
        $news->save();

        error_log("Actualizado.");

        $count = 0;
        foreach($data['galery'] as $image) {
            $gallery = new GalleryNews([
                'news_id' => $data['id'],
                'image_name' => $image,
                'order' => ++$count
            ]);

            $gallery->save();
        }

        error_log("Se guardo la galeria.");

        return response()->json([
            'success'=> 'updated'
        ]); 

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
