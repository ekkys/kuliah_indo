<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GlobalController extends Controller
{
    public static function deleteFile($picture){ 
        if(\Storage::exists($picture)){
            \Storage::delete($picture);
        }
    }
}
