<?php

namespace App\Http\Controllers;

use App\Models\Province;
use App\Models\Regency;
use App\Models\District;
use App\Models\Village;
use App\Models\Tutor;
use App\Http\Requests\StoreTutorRequest;
use App\Http\Requests\UpdateTutorRequest;

class TutorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.tutor.index', [
            'tutors' => Tutor::orderBy('updated_at', 'DESC')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
        return view('admin.tutor.create', [
            'provinces' =>  Province::all(),
            'regencies' =>  Regency::all(),
            'districts' =>  District::all(),
            'villages' => Village::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTutorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTutorRequest $request)
    {
        // dd($request->all());
       
        
         $data = [
            'name' => $request->name,
            'gender' => $request->gender,
            'address' => $request->address,
            'email' => $request->email,
            'contact' =>$request->contact,
            'description' =>$request->description
         ];

         if (!empty($request->file('foto'))) {
            $data['foto'] = $request->file('foto')->store('tutor-images');
         }

        Tutor::create($data);
        return redirect(route('tutor.index'))->with('success', 'New post has been Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tutor  $tutor
     * @return \Illuminate\Http\Response
     */
    public function show(Tutor $tutor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tutor  $tutor
     * @return \Illuminate\Http\Response
     */
    public function edit(Tutor $tutor)
    {
        // dd($tutor);
        return view('admin.tutor.edit', ['tutor' => $tutor],
        [
            'provinces' =>  Province::all(),
            'regencies' =>  Regency::all(),
            'districts' =>  District::all(),
            'villages ' => Village::all(),
        ],
    );
    }

    // public function deleteFile($picture){ 
    //     if(\Storage::exists($picture)){
    //         \Storage::delete($picture);
    //     }
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTutorRequest  $request
     * @param  \App\Models\Tutor  $tutor
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTutorRequest $request, Tutor $tutor)
    {
        // dd($request->all());
        $query = [
            'name' => $request->name,
            'gender' => $request->gender,
            'address' => $request->address,
            'email' => $request->email,
            'contact' =>$request->contact,
            'description' =>$request->description
         ];

         if (!empty($request->file('foto'))) {
            $data = Tutor::where('id', $request->input('id'))->first();
            GlobalController::deleteFile($data['foto']);
            $query['foto'] = $request->file('foto')->store('tutor-images');
         }

        $tutor->update($query);
        return redirect(route('tutor.index'))->with('success', 'New post has been Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tutor  $tutor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tutor $tutor)
    {
        $tutor->delete();
        return redirect('tutor');
    }
}
