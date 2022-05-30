<?php

namespace App\Http\Controllers;

use App\Models\Penjadwalan;
use Illuminate\Http\Request;
use App\Models\Jabatan;
use App\Models\Tutor;
use App\Models\Topic;
use App\Models\Karyawan;
use Illuminate\Support\Facades\Auth;

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
            'penjadwalans' => Penjadwalan::join('topics', 'penjadwalans.topic_id', '=', 'topics.id')
            ->join('tutors', 'penjadwalans.tutor_id', '=', 'tutors.id')
            ->join('jabatans', 'penjadwalans.jabatan_id', '=', 'jabatans.id')
            ->select("penjadwalans.*", "topics.name as topic_name","tutors.name as tutor_name", "jabatans.name as jabatan_name")   
            ->orderBy('updated_at', 'DESC')->get(),
            'user' => Auth::user(),
            
            // SELECT nama_tabel.fields FROM tabel_utama 
            // JOIN tabel_pertama ON parameter_join1 
            // JOIN tabel_kedua ON parameter_join2 
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

        $storePenjadwalan = [
            'title'=> $request->title,
            'date'=> $request->date,
            'timestart'=> $request->timestart,
            'timeend'=> $request->timeend,
            'tutor_id'=> $request->tutor,
            'topic_id'=> $request->topic,
            'jabatan_id'=> $request->jabatan,
            'price'=> $request->price,
            'link_zoom'=> $request->link_zoom,
            'foto'=> $request->file('foto')->store('class-images'),
            'description'=> $request->description,
        ];

     Penjadwalan::create($storePenjadwalan);

       
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
        return view('admin.penjadwalan.edit',[
            'penjadwalan'=> $penjadwalan,
            'jabatans' => Jabatan::orderBy('updated_at', 'DESC')->get(),
            'tutors' => Tutor::orderBy('updated_at', 'DESC')->get(),
            'topics' => Topic::orderBy('updated_at', 'DESC')->get()
        ]);
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
        $query = [
            'title'=> $request->title,
            'date'=> $request->date,
            'timestart'=> $request->timestart,
            'timeend'=> $request->timeend,
            'tutor'=> $request->tutor,
            'topic'=> $request->topic,
            'jabatan'=> $request->jabatan,
            'price'=> $request->price,
            'link_zoom'=> $request->link_zoom,
            'description'=> $request->description,
        ];

        // dd($request);
        if ($request->file('foto')) {
            $data = Penjadwalan::where('id', $request->input('id'))->first();
            GlobalController::deleteFile($data['foto']);
            $query['foto'] = $request->file('foto')->store('class-images');
         }

        $penjadwalan->update($query);
        return redirect(route('penjadwalan.index'))->with('success', 'New Jadwal has been Added!');
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
