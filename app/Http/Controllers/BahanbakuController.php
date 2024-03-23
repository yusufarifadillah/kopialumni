<?php

namespace App\Http\Controllers;

use App\Models\Bahanbaku;
use App\Http\Requests\StoreBahanbakuRequest;
use App\Http\Requests\UpdateBahanbakuRequest;

class BahanbakuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bahanbaku = Bahanbaku::all();
        return view('bahanbaku.view',
                    [
                        'bahanbaku' => $bahanbaku
                    ]
                    );
    }

    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bahanbaku/create',
                    [
                        'kode_bahanbaku'=> Bahanbaku::getKodeBahanbaku()
                    ]
                    );
    }

    /**
     * Store a newly created resource in storage.
     * @param  \App\Http\Requests\StoreBahanbakuRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBahanbakuRequest $request)
    {
        $validated = $request->validate([
            'kode_bahanbaku' => 'required',
            'nama_bahanbaku' => 'required',
            'jenis_bahanbaku' => 'required',
            'harga_satuan' => 'required',
            'kuantitas' => 'required',
        ]);
        Bahanbaku::create($request->all());
        return redirect()->route('bahanbaku.index')->with('success','Data Berhasil di Input');
    }
        
    /**
     * Display the specified resource.
     * @param  \App\Models\Bahanbaku  $bahanbaku
     * @return \Illuminate\Http\Response
     */
    public function show(Bahanbaku $bahanbaku)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * @param  \App\Models\Bahanbaku  $bahanbaku
     * @return \Illuminate\Http\Response
     */
    public function edit(Bahanbaku $bahanbaku)
    {
        return view('bahanbaku.edit', compact('bahanbaku'));
    }

    /**
     * Update the specified resource in storage.
     * @param  \App\Http\Requests\UpdateBahanbakuRequest  $request
     * @param  \App\Models\Bahanbaku  $bahanbaku
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBahanbakuRequest $request, Bahanbaku $bahanbaku)
    {
        $validated = $request->validate([
            'kode_bahanbaku' => 'required',
            'nama_bahanbaku' => 'required',
            'jenis_bahanbaku' => 'required',
            'harga_satuan' => 'required',
            'kuantitas' => 'required',
        ]);
    
        $bahanbaku->update($validated);

        return redirect()->route('bahanbaku.index')->with('success','Data Berhasil di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     * @param  \App\Models\Bahanbaku  $bahanbaku
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bahanbaku = Bahanbaku::findOrFail($id);
        $bahanbaku->delete();

        return redirect()->route('bahanbaku.index')->with('success','Data Berhasil di Hapus');
    }
}