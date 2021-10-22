<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class KuisionerController extends Controller
{
  public function kuisionerAlumni(request $request)
  {
    
}
protected function validator(array $data)
    {

       
    }
    public function kuisioner(Request $request)
    {
        
       $validator =  Validator::make($request->all(), [
            'pindah' => 'required|max:2',
            'alasan_pindah' => 'required|max:255',
            'bidangkerja' => 'required|max:255',
            'gaji_sekarang' => 'required|max:255',
            'gajipertama' => 'required|max:255',
            'kerja_pertama' => 'required|max:255',
            'sesuaikah' => 'required|max:255',
            'syaratipk' => 'required|max:255',
            'kuisioner1' => 'required|max:255',
            'kuisioner2' => 'required|max:255',
            'kuisioner3' => 'required|max:255',
            'kuisioner4' => 'required|max:255',
            'kuisioner5' => 'required|max:255',
            'kuisioner6' => 'required|max:255',
            'kuisioner7' => 'required|max:255',
            'kuisioner8' => 'required|max:255',
            
        ]);
        if ($validator->fails()) {
            return redirect('')
                        ->withErrors($validator)
                        ->withInput();
        }

    }
    
}


