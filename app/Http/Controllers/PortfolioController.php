<?php

namespace App\Http\Controllers;

// use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

use App\Project;
use App\Post;

class PortfolioController extends Controller
{

    public function Project()
    {
        $projecten = Project::all();
        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', 'https://api.github.com/users/Ojansen/repos', [
            'auth' => [env('GITHUB_USERNAME'), env('GITHUB_PASSWORD')],
            // 'Accept' => 'application/vnd.github.nightshade-preview+json'
        ]);
        $repos = json_decode($res->getBody());
		return view('projects', ['projecten' => $projecten, 'repos' => $repos]);
    }

    public function Blog()
    {
        $posts = Post::all();
        return view('blog', ['posts' => $posts]);
    }
	public function Like(Request $request)
	{
		$post = Post::find($request->input('post'));
		$post->likes = $post->likes + 1;
		$post->save();
		return redirect()->route('blog');
	}
}
