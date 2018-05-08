<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Response;
use App\Http\Requests;
use Illuminate\Http\Request;
use Carbon\Carbon;

class SubmitController extends Controller
{
    public function save(Request $request)
    {
        $datetime = Carbon::now()->format('dmYHis');
        $myfile = fopen($request->nama."-".$datetime.".txt", "w") or die("Unable to open file!");
        $nama = "Nama : ".$request->nama;
        $email = "\nEmail : ".$request->email;
        $dob = "\nDate of Birth : ".$request->dob;
        $alamat = "\nAlamat : ".$request->alamat;
        fwrite($myfile, $nama);
        fwrite($myfile, $email);
        fwrite($myfile, $dob);
        fwrite($myfile, $alamat);
        fclose($myfile);
        return view('thanks');
    }
}
