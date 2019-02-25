<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client;

class PortfolioController extends Controller
{

    public function Project()
    {
        $projecten = DB::select('select * from projects');
        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', 'https://api.github.com/users/Ojansen/repos', [
            'auth' => [env('GITHUB_USERNAME'), env('GITHUB_PASSWORD')],
            'Accept' => 'application/vnd.github.nightshade-preview+json'
        ]);
        $repos = json_decode($res->getBody());
		return view('projects', ['projecten' => $projecten, 'repos' => $repos]);
    }

    public function Blog()
    {

        // return view('blog', ['posts' => $posts]);
    }
}
