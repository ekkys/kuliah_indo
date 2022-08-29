<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Http\Requests\StoreSettingRequest;
use App\Http\Requests\UpdateSettingRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SettingController extends Controller
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

        return view('admin.infografis.profileSetting.index',[
            'settings' => Setting::orderBy('updated_at', 'DESC')->first(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.infografis.profileSetting.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSettingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSettingRequest $request)
    {
        // dd($request);
        $upload = $request->file('image_profile')->store('profile-images');

       Setting::create([
            'contact' => $request->contact,
            'gmaps' => $request->gmaps,
            'email' => $request->email,
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'linkedin' => $request->linkedin,
            'twitter' => $request->twitter,
            'youtube' => $request->youtube,
            'address' => $request->address,
            'image_profile' => $upload,
            'description' => $request->description
        ]);

        return redirect(route('setting.index'))->with('success', 'New banner has been Added!');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function show(Setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function edit(Setting $setting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSettingRequest  $request
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        if(empty(Auth::user())) {
            return redirect('/login');
        };

        $detail = [
            'contact' => $request->input('contact'),
            'maps' => $request->input('maps'),
            'twitter' => $request->input('twitter'),
            'facebook' => $request->input('facebook'),
            'instagram' => $request->input('instagram'),
            'youtube' => $request->input('youtube'),
            'linkedin' => $request->input('linkedin'),
            'email' => $request->input('email'),
            'address' => $request->input('address'),
        ];

        DB::table('settings')->update($detail);

        return view('admin.infografis.profileSetting.index',[
            'settings' => Setting::orderBy('updated_at', 'DESC')->first(),
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Setting $setting)
    {
        //
    }
}
