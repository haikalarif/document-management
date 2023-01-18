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
            'projectdocuments' => ProjectDocument::first(),
            'documents' => Documents::all(),
            'product' => Product::all(),
            'client' => Client::all(),
            'project' => Project::all()
        ]);
    }

    public function create()
    {
        return view('project.index', [
            'project' => Project::all()
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

    public function upload(Request $request)
    {
        $validated = $request->validate([
            'file' => 'required|mimes:doc,docx,pdf|max:2048'
        ]);

        // $project = Project::FindOrFail($project_id);
        // $documents = Documents::FindOrFail($document_id);
        // $project_id = $project->id;
        // $document_id = $documents->id;

        if($request->file('file')){
            $validated['file'] = $request->file('file')->store('documents');
        }

        // ProjectDocument::create($validated);
        $pdf = new ProjectDocument;
        $pdf->file = $validated['file'];
        $pdf->project_id = $request->project_id;
        $pdf->document_id = $request->document_id;
        $pdf->save();


        return redirect()->route('projects.index')
            ->with('success', 'File Berhasil Di Upload!');
    }

    public function destroy(Project $project)
    {
        $project = Project::findOrFail($project);

        Project::destroy($project->id);
        return redirect('/projects')->with('success','Data Telah Berhasil Di Hapus!!');
    }
}
