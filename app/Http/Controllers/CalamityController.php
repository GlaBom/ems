<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Calamity;

class CalamityController extends Controller
{
    public function viewCalamity()
    {
        $data = Calamity::get();
        return view('admin.body.calamity.manage_calamity',compact('data'));
    }
}
