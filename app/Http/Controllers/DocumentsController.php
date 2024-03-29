<?php

namespace App\Http\Controllers;

use App\Models\Documents;
use Illuminate\Http\Request;

class DocumentsController extends Controller
{
    public function index()
    {
        $documents = Documents::all();

        return view('documents.index', [
            'documents' => $documents
        ]);
    }

    public function create()
    {
        return view('documents.tambah');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'deskripsi' => 'required|max:255',
        ]);

        $existingDocument = Documents::where('name', $request->name)
            ->where('deskripsi', $request->deskripsi)
            ->first();
        if ($existingDocument) {
            return redirect()->route('documents.index')->with('error', 'Document sudah ada!');
        }

        $documents = Documents::create($validatedData);
        if ($documents) {
            $message = 'Dokumen Berhasil Ditambahkan!';
        } else {
            $message = 'Dokumen Gagal Ditambahkan!';
        }

        return redirect('/documents')->with('success', $message);
    }

    public function edit($id)
    {
        $documents = Documents::findOrFail($id);
        return view('documents.edit', compact('documents'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required',
            'deskripsi' => 'required',
        ]);

        $documents = Documents::findOrFail($id);
        $documents->name = $request->name;
        $documents->deskripsi = $request->deskripsi;
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