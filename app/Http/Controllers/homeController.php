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
        $datas = DB::table('quotes')->get();
        return view('dashboard',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function reset()
    {
        //
        $quotes=quotes::truncate();
        $datas = DB::table('quotes')->get();
        return view('dashboard',compact('datas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
			'file' => 'required|mimes:txt|max:200'
		]);

		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('file');
            //ambil nama fle
		$nama_file = $file->getClientOriginalName();

        //upload
		$tujuan_upload = 'download';
		$file->move($tujuan_upload,"1.txt");

        //buat array arr
        $arr=array();

        // $url=URL::to('/')."/download/quotes.txt";
        $namefile="download/1.txt";

        //open file txt
        $fp = @fopen($namefile, 'r');

        //get text 1 baris
        // $line=fgets($fp);

        //feof cek endoffile
        // $feof=feof(($fp));

        // ketika bukan end-of-file
            while (!feof($fp))
            {
                $arr_temp=fgets($fp);
                //hapus karakter selain text
                $arr_temp=trim($arr_temp);
                //masukkan ke dalam array
                array_push($arr,$arr_temp);
            }
            //ambil data quotes di database
            $datas = DB::table('quotes')
            ->get();
            $count = DB::table('quotes')
            ->count();
            $arr_awal=$arr;
            foreach($arr_awal as $ar){

                $find = DB::table('quotes')
                ->where('isi',$ar)
                ->count();
                // dd($find);

                //jika ditemukan di database hapus dari $arr
                if($find>0){

                    if (($key = array_search($ar, $arr)) !== false) {
                        unset($arr[$key]);
                    }
                }
            }

            if($count==0){
                foreach($arr as $ar){
                    if($ar!=''){

                        //simpan data tiap baris ke dalam database
                        DB::table('quotes')->insert(
                            array(
                                   'isi'     =>   $ar,
                                   'created_at'=>date("Y-m-d H:i:s"),
                                   'updated_at'=>date("Y-m-d H:i:s")
                            ));

                            }

           }
         }else{

            foreach($arr as $ar){
                if($ar!=''){

                    //simpan data tiap baris ke dalam database
                    DB::table('quotes')->insert(
                        array(
                               'isi'     =>   $ar,
                               'created_at'=>date("Y-m-d H:i:s"),
                               'updated_at'=>date("Y-m-d H:i:s")
                        ));

                        }

       }
            }

            // dd($datas);

            $datas = DB::table('quotes')->get();
            return view('dashboard',compact('datas'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
