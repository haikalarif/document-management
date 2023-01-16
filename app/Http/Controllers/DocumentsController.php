<?php

namespace App\Http\Controllers;

use App\Models\Documents;
use Illuminate\Http\Request;

class DocumentsController extends Controller
{
    public function index() {
        $documents = Documents::all();
        
        return view('documents.index', [
            'documents' => $documents
        ]);
    }

    public function create() {
        return view('documents.tambah');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
        ]);

        Documents::create($validatedData);

        return redirect('/documents')->with('success','Dokumen Berhasil Ditambahkan!');
    }

    public function edit($id)
    {
        $documents = Documents::findOrFail($id);
        return view('documents.edit', compact('documents'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama' => 'required',
        ]);

        $documents = Documents::findOrFail($id);
        $documents->nama = $request->nama;
        $documents->save();
        return redirect()->route('documents.index')
            ->with('success', 'Dokumen berhasil diupdate!');
    }

    public function destroy($id)
    {
        $documents = Documents::findOrFail($id);
        $documents->delete();
        return redirect()->route('documents.index')
            ->with('success', 'Dokumen berhasil dihapus!');
    }
}
