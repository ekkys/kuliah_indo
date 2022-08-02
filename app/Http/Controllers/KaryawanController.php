<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use App\Models\Jabatan;
use App\Http\Requests\StoreKaryawanRequest;
use App\Http\Requests\UpdateKaryawanRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(empty(Auth::user())) {
            return redirect('/login');
        }

        return view('admin.karyawan.index', [
            // 'karyawans' => Karyawan::orderBy('updated_at', 'DESC')->get()
            'karyawans' => Karyawan::join('jabatans', 'karyawans.jabatan_id', '=', 'jabatans.id')->select("karyawans.*", "jabatans.name as jabatan_name")->orderBy('updated_at', 'DESC')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(empty(Auth::user())) {
            return redirect('/login');
        }

        return view('admin.karyawan.create',[
            'jabatans' => Jabatan::orderBy('updated_at', 'DESC')->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreKaryawanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreKaryawanRequest $request)
    {

        $dataInput = [
            'name' => $request->name,
            'gender' => $request->gender,
            'address' => $request->address,
            'email' => $request->email,
            'contact' => $request->contact,
            'jabatan_id' => $request->jabatan,
            'description' => $request->description,
        ];
    
        if ($request->file('foto')) {
            $request->file('foto')->store('karyawan-images');
        }
    
        DB::table('karyawans')->insert($dataInput);
        return redirect(route('karyawan.index'))->with('success', 'New Karyawan has been Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function show(Karyawan $karyawan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function edit(Karyawan $karyawan)
    {
        if(empty(Auth::user())) {
            return redirect('/login');
        }

        return view('admin.karyawan.edit',
         ['karyawan' => $karyawan],
         ['jabatans' => Jabatan::orderBy('updated_at', 'DESC')->get()]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKaryawanRequest  $request
     * @param  \App\Models\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateKaryawanRequest $request, Karyawan $karyawan)
    {
        // if ($request->file('foto')) {
        //     $request->file('foto')->store('karyawan-images');
        //  }

         $query = [
            'name' => $request->name,
            'gender' => $request->gender,
            'jabatan'=> $request->jabatan,
            'email' => $request->email,
            'address' => $request->address,
            'contact' =>$request->contact,
            'description' =>$request->description,
         ];

        if ($request->file('foto')) {
            $data = Karyawan::where('id', $request->input('id'))->first();
            GlobalController::deleteFile($data['foto']);
            $query['foto'] = $request->file('foto')->store('karyawan-images');
        }
        
        $karyawan->update($query);
        return redirect(route('karyawan.index'))->with('success', 'New post has been Added!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Karyawan $karyawan)
    {
        $karyawan->delete();
        return redirect('karyawan');
    }
}
