<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use App\Models\Project;
use App\Models\Certificate;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index(){
        $projects = Project::all();
        $blogs = Blog::all();
        $certificates = Certificate::all();
        $user = User::where('name', 'Indriawan Muhammad Akbar')->first();
        // $user = User::find(1);
        // dd($user);
        
        return view('tester', [
            'projects' => $projects,
            'blogs' => $blogs,
            'certificates' => $certificates,
            'user' => $user,
        ]);
    }

    public function detailproject($id){
        $project = Project::find($id);

        return view('detail-project', [
            'project' => $project,
        ]);
    }
    
    public function detailblog($id){
        $blog = Blog::find($id);

        return view('detail-blog', [
            'blog' => $blog,
        ]);
    }

    public function detailcertif($id){
        $certificate = Certificate::find($id);

        return view('detail-cer$certificate', [
            'cer$certificate' => $certificate,
        ]);
    }
}
