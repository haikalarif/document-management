<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Documents;
use App\Models\Product;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        if ($user->role === 'client') {
            $project = Project::where('client_id', $user->client_id)->with('client', 'product', 'documents')->get();
        } else {
            $project = Project::with('client', 'product', 'documents')->get();
        }

        return view('dashboard', [
            'jml_client' => Client::all(),
            'jml_product' => Product::all(),
            'jml_project' => $project,
            'jml_user' => User::all(),
            'jml_doc' => Documents::all(),
        ]);
    }
}
