<?php

namespace App\Http\Controllers;

use App\Models\quotes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;

class homeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //  //buat array arr
        //  $arr=array();

        //  // $url=URL::to('/')."/download/quotes.txt";
        //  $namefile="download/1.txt";

        //  //open file txt
        //  $fp = @fopen($namefile, 'r');

         //get text 1 baris
         // $line=fgets($fp);

         //feof cek endoffile
         // $feof=feof(($fp));

         // ketika bukan end-of-file
        //      while (!feof($fp))
        //      {
        //          $arr_temp=fgets($fp);
        //          //hapus karakter selain text
        //          $arr_temp=trim($arr_temp);
        //          //masukkan ke dalam array
        //          array_push($arr,$arr_temp);
        //      }

        // $datas=$arr;

        $datas=array();
        return view('dashboard',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function reset()
    {
        return redirect('/');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        dd($i);
        //ambil jumlah array txt
         $namefile="download/1.txt";

         //open file txt
         $fp = @fopen($namefile, 'r');
        $i=0;

        while (!feof($fp))
        {
            $i++;
        }
dd($i);

        //random diantara jml

        //array push to datas
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
