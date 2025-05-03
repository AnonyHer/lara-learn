<?php

namespace App\Http\Controllers;

use App\Models\Pertemuan6;
use Illuminate\Http\Request;
use Illuminate\View\View;
Use Illuminate\Http\RedirectResponse;

class Pertemuan6Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $dataArray = Pertemuan6::latest()->paginate(10);
        return view('crud/index', compact('dataArray'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view(view: 'crud.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'nim' => 'required|min:5',
            'nama' => 'required|min:10',
            'jurusan' => 'required|min:10'
        ]);

        Pertemuan6::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'jurusan' => $request->jurusan
        ]);

        return redirect()->route('crud.index')->with(['success' => 'Data berhasil disimpan']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Pertemuan6::findOrFail($id);
        return view('crud/show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Pertemuan6::findOrFail($id);
        return view('crud/edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nim' => 'required|min:5',
            'nama' => 'required|min:10',
            'jurusan' => 'required|min:10'
        ]);

        $data = Pertemuan6::findOrFail($id);

        $data->update([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'jurusan' => $request->jurusan
        ]);

        return redirect()->route('crud.index')->with(['success' => 'Data berhasil diubah']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Pertemuan6::findOrFail($id);

        $data->delete();

        return redirect()->route('crud.index')->with(['success' => 'Data berhasil dihapus']);
    }
}
