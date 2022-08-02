<?php

namespace App\Http\Controllers;

use App\Models\UploadTestimoni;
use App\Http\Requests\StoreUploadTestimoniRequest;
use App\Http\Requests\UpdateUploadTestimoniRequest;
use Illuminate\Support\Facades\Auth;

class UploadTestimoniController extends Controller
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

        return view('admin.infografis.testimoni.index', [
            "testimonis" => UploadTestimoni::orderBy('updated_at', 'DESC')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.infografis.testimoni.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUploadTestimoniRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUploadTestimoniRequest $request)
    {
        // dd($request->all());
        $upload = $request->file('image_testimoni')->store('testimoni-image');

        $test = UploadTestimoni::create([
            'image_testimoni' => $upload,
            'name' => $request->name,
            'description' =>  $request->description
        ]);
        return redirect(route('testimoni.index'))->with('success', 'New tetimoni has been Added!');
    } 

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UploadTestimoni  $uploadTestimoni
     * @return \Illuminate\Http\Response
     */
    public function show(UploadTestimoni $uploadTestimoni)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UploadTestimoni  $uploadTestimoni
     * @return \Illuminate\Http\Response
     */
    public function edit(UploadTestimoni $uploadTestimoni)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUploadTestimoniRequest  $request
     * @param  \App\Models\UploadTestimoni  $uploadTestimoni
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUploadTestimoniRequest $request, UploadTestimoni $uploadTestimoni)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UploadTestimoni  $uploadTestimoni
     * @return \Illuminate\Http\Response
     */
    public function destroy(UploadTestimoni $uploadTestimoni, $id)
    {
        $data = UploadTestimoni::where('id', $id)->first();
       
        $data->delete();
         return redirect('testimoni');
    }
}
