<?php

namespace App\Http\Controllers;

use App\Models\quotes;
use Illuminate\Contracts\Session\Session as SessionSession;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;

class homeController extends Controller
{

    public function index()
    {
        Session::forget('tampiltxt');
        Session::put('tampiltxt', []);


         //buat array arr
         $arr=array();

         // $url=URL::to('/')."/download/quotes.txt";
         $namefile="download/1.txt";

         //open file txt
         $fp = @fopen($namefile, 'r');

        //  get text 1 baris
         $line=fgets($fp);

        //  feof cek endoffile
         $feof=feof(($fp));

        //  ketika bukan end-of-file
             while (!feof($fp))
             {
                 $arr_temp=fgets($fp);
                 //hapus karakter selain text
                 $arr_temp=trim($arr_temp);
                 //masukkan ke dalam array
                 array_push($arr,$arr_temp);
             }

        $datas=$arr;

        $datas=array();
        return view('dashboard',compact('datas'));
    }

    public function reset()
    {
        return redirect('/');

    }

    public function show()
    {
        $datas=array();
        $i=0;
        //buat array arr
        $arr=array();

        $namefile="download/1.txt";

        //open file txt
        $fp = @fopen($namefile, 'r');

       //  get text 1 baris
        $line=fgets($fp);

       //  feof cek endoffile
        $feof=feof(($fp));

       //  ketika bukan end-of-file
            while (!feof($fp))
            {
                $i++;
                $arr_temp=fgets($fp);
                //hapus karakter selain text
                $arr_temp=trim($arr_temp);
                //masukkan ke dalam array
                array_push($arr,$arr_temp);
            }
//cari nilai acak
            $random=rand(0,$i-1);

    $tampil=$arr[$random];

array_push($datas,$arr[$random]);

session()->put('tampiltxt', []);
Session::push('tampiltxt', [$tampil]);
// dd(Session::get('tampiltxt'));
            // dd($tampil);

    //    $datas=$tampil;

       // $datas=array();
       return view('dashboard',compact('datas'));
       return view('dashboard',compact('datas'));
    }

}
