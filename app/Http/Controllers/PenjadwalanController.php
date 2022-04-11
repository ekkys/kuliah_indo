<?php

namespace App\Http\Controllers;

use App\Models\Penjadwalan;
use Illuminate\Http\Request;
use App\Models\Jabatan;
use App\Models\Tutor;
use App\Models\Topic;

class PenjadwalanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.penjadwalan.index',[
            'penjadwalans' => Penjadwalan::orderBy('updated_at', 'DESC')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.penjadwalan.create',[
            'jabatans' => Jabatan::orderBy('updated_at', 'DESC')->get(),
            'tutors' => Tutor::orderBy('updated_at', 'DESC')->get(),
            'topics' => Topic::orderBy('updated_at', 'DESC')->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        if ($request->file('foto')) {
            $request->file('foto')->store('class-images');
         }

     Penjadwalan::create([
         'title'=> $request->title,
         'date'=> $request->date,
         'timestart'=> $request->timestart,
         'timeend'=> $request->timeend,
         'tutor'=> $request->tutor,
         'topic'=> $request->topic,
         'jabatan'=> $request->jabatan,
         'price'=> $request->price,
         'foto'=> $request->file('foto')->store('class-images'),
         'description'=> $request->description,
    ]);

       
         return redirect(route('penjadwalan.index'))->with('success', 'New Jadwal has been Added!');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Penjadwalan  $penjadwalan
     * @return \Illuminate\Http\Response
     */
    public function show(Penjadwalan $penjadwalan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Penjadwalan  $penjadwalan
     * @return \Illuminate\Http\Response
     */
    public function edit(Penjadwalan $penjadwalan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Penjadwalan  $penjadwalan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Penjadwalan $penjadwalan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Penjadwalan  $penjadwalan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penjadwalan $penjadwalan)
    {
        $penjadwalan->delete();
        return redirect('penjadwalan');
    }
}
