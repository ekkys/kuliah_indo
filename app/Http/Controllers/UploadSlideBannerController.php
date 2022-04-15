<?php

namespace App\Http\Controllers;

use App\Models\UploadSlideBanner;
use Illuminate\Http\Request;

class UploadSlideBannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.infografis.slideBanner.index',[
            'slidebanners' => UploadSlideBanner::orderBy('updated_at', 'DESC')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.infografis.slideBanner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $upload = $request->file('image_banner')->store('banner-images');
   
        UploadSlideBanner::create([
            'image_banner' => $upload,
            'description' =>  $request->description
        ]);

        return redirect(route('slidebanner.index'))->with('success', 'New banner has been Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UploadSlideBanner  $uploadSlideBanner
     * @return \Illuminate\Http\Response
     */
    public function show(UploadSlideBanner $uploadSlideBanner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UploadSlideBanner  $uploadSlideBanner
     * @return \Illuminate\Http\Response
     */
    public function edit(UploadSlideBanner $uploadSlideBanner, $id)
    {

        $data = UploadSlideBanner::where('id', $id)->first();
        return view('admin.infografis.slideBanner.edit',[
            'slidebanner' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UploadSlideBanner  $uploadSlideBanner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UploadSlideBanner $uploadSlideBanner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UploadSlideBanner  $uploadSlideBanner
     * @return \Illuminate\Http\Response
     */
    public function destroy(UploadSlideBanner $uploadSlideBanner,  $id)
    {
       $data = UploadSlideBanner::where('id', $id)->first();
    
       $data->delete();
        return redirect('slidebanner');
    }
}
