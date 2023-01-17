<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Product;
use App\Models\Project;
use App\Models\ProjectDocument;
use App\Models\Documents;

class ProjectController extends Controller
{
    public function index()
    {
        return view('project.index', [
            'project' => Project::all(),
            'documents' => Documents::all(),
            'product' => Product::all(),
            'client' => Client::all()
        ]);
    }

    public function create()
    {
        return view('project.index', [
            'product' => Product::all(),
            'client' => Client::all(),
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'client_id' => 'required',
            'product_id' => 'required',
        ]);

        $project = Project::create($validated);
        if ($project) {
            $message = 'Project berhasil dibuat!';
        } else {
            $message = 'Project gagal dibuat!';
        }

        return redirect()->route('projects.index')
            ->with('success', $message);
    }

    public function uploadFile(Request $request)
    {
        $validated = $request->validate([
            'file' => 'required|mimes:doc,docx,pdf|max:2048'
        ]);

        if($request->file('file')){
            $validated['file'] = $request->file('file')->store('surat');
        }

        ProjectDocument::create($validated);

        return redirect()->route('project.index')
            ->with('success', 'File Berhasil Di Upload!');
    }

    public function destroy(Project $project)
    {
        $project = Project::findOrFail($project);

        Project::destroy($project->id);
        return redirect('/projects')->with('success','Data Telah Berhasil Di Hapus!!');
    }
}
