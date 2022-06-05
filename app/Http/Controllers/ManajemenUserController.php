<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class ManajemenUserController extends Controller
{
    public function index() {
        $user = Auth::user();
        return view('admin.user.index', [
            'usersList' => DB::table('users')
                           ->where('users.role', '!=', '1')
                           ->join('roles', 'users.role', '=', 'roles.id')
                           ->select('users.*', 'roles.name as roles_name')
                           ->orderBy('updated_at', 'DESC')
                           ->get(),
        ]);
    }

    public function edit($id) {
        return view('admin.user.edit', [
            'userList' => DB::table('users')
                          ->where('users.id', $id)
                          ->join('roles', 'users.role', '=', 'roles.id')
                          ->select('users.*', 'roles.name as roles_name')
                          ->first(),
            'roleList' => DB::table('roles')
                          ->where('roles.id', '!=', '1')
                          ->get(),
        ]);
    }

    public function deleteFile($picture){ 
        if(\Storage::exists($picture)){
            \Storage::delete($picture);
        }
    }

    public function updateUser(Request $request) {
        $role = ['role' => $request->input('roles')];
        $dataUser = User::where('id', $request->input('id'))->first();

        if($request->input('delete') == true) {
            $this->deleteFile($request->input('picture'));
            $picture = ['picture' => NULL];
            $upload = User::where('id', $request->input('id'))->update($picture);
        }

        $update = User::where('id', $request->input('id'))->update($role);
        return redirect('/manajemenuser');
    }

    public function deleteUser($id) {
        User::where('id', $id)->delete();
        return redirect('/manajemenuser');
    }
}
