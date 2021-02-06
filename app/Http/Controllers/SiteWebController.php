<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\News;
use App\Testimonials;

class SiteWebController extends Controller
{
    public function home()
    {
        //count categories
        $adoption = Project::where('category', '=', 'adoption')
                            ->where('activated', '=', true)->count();
        $advisory = Project::where('category', '=', 'adoption')
                            ->where('activated', '=', true)->count();
        $nutriment = Project::where('category', '=', 'nutriment')
                            ->where('activated', '=', true)->count();
        $education = Project::where('category', '=', 'education')
                            ->where('activated', '=', true)->count();
        $objects = Project::where('category', '=', 'objects')
                            ->where('activated', '=', true)->count();
        $health = Project::where('category', '=', 'health')
                            ->where('activated', '=', true)->count();
        $hostels = Project::where('category', '=', 'hostels')
                            ->where('activated', '=', true)->count();
        $volunteering = Project::where('category', '=', 'volunteering')
                            ->where('activated', '=', true)->count(); 

        $categories = [
            'adoption' => $adoption,
            'advisory' => $advisory,
            'nutriment' => $nutriment,
            'education' => $education,
            'objects' => $objects,
            'health' => $health,
            'hostels' => $hostels,
            'volunteering' => $volunteering
        ];

        // projects
        $projects = Project::where('activated', '=', true)
                            ->orderBy('publication_date', 'DESC')                    
                            ->limit(6)
                            ->get();

        // news
        $news = News::where('activated', '=', true)
                    ->orderBy('created_at', 'DESC')                    
                    ->limit(6)
                    ->get();

        // testimonials
        $testimonials = Testimonials::where('activated', '=', true)
                                    ->orderBy('created_at', 'DESC')                    
                                    ->limit(6)
                                    ->get();
        
        return view('index', compact('categories', 'projects', 'news', 'testimonials'));
    }

    public function all_projects() {
        $projects = Project::where('activated', '=', true)->get();
        return view('projects-all', compact('projects'));
    }

    public function project($url) {
        $project = Project::where('url', 'like', $url)->first();
        return view('project', compact('project'));
    }

    public function apply($url) {
        $project = Project::where('url', 'like', $url)->first();
        return view('project-registry', compact('project'));
    }

    public function all_news() {
        $news = News::all();
        return view('news-all', compact('news'));
    }

    public function news_item($url) {
        $news = News::where('url', 'like', $url)->first();
        return view('news-item', compact('news'));
    }
}
