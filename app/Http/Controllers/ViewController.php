<?php

namespace App\Http\Controllers;

use App\Models\forminput;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function main()
    {
        return view('main');
    }

    public function add_pasien(Request $request)
    {
        $newData = new forminput();

        $newData->nama_pasien= $request->nama_form;
        $newData->umur_pasien= $request->umur_form;
        $newData->wa_pasien= $request->wa_form;
        $newData->keluhan_pasien= $request->keluhan_form;
        $newData->save();
        
        return redirect('/');

    }
}
