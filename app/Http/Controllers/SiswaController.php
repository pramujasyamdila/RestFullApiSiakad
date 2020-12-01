<?php

namespace App\Http\Controllers;

use App\Siwa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
    public function get()
    {
        $data = DB::table('siswa')->get();
        return response()->json(
            [// variable name dan temenya
                "message" => "Success get data Siswa",
                "data"=>$data
            ]
            );
    }

    public function post(Request $request){
        $data = new Siwa();
        $data->nama_siswa=$request->nama_siswa;
        $data->alamat_siswa=$request->alamat_siswa;
        $data->no_telpon=$request->no_telpon;
        $data->jurusan=$request->jurusan;
        $data->save();
        return response()->json(
            [// variable name dan temenya
                "message" => "Success menambah data Siswa",
                "data"=>$data
            ]
            );
    }


    function getById($id){
        $data=Siwa::where('id_siswa',$id)->get();
        return response()->json(
            [// variable name dan temenya
                "message" => "Success getById Siswa",
                "data"=>$data
            ]
            );

    }

    function put($id,Request $request){
        $data=Siwa::where('id_siswa',$id)->first();
        if ($data) {
            $data->nama_siswa=$request->nama_siswa ? $request->nama_siswa : $data->nama_siswa;
            $data->alamat_siswa=$request->alamat_siswa ? $request->alamat_siswa : $data->alamat_siswa;
            $data->no_telpon=$request->no_telpon ? $request->no_telpon : $data->no_telpon;
            $data->jurusan=$request->jurusan ? $request->jurusan : $data->jurusan;
            $data->save();

            return response()->json(
                [// variable name dan temenya
                    "message" => "Success put data Siswa",
                    "data"=>$data
                ]
                );
        }
        return response()->json(
            [// variable name dan temenya
                "message" => "Mohon Maaf untuk ID ".$id." Tidak Dapat Di temukan"
            ],400
            );
    }

    function delete($id)
    {
        $data=Siwa::where('id_siswa',$id)->first();
        if ($data) {
            $data->delete();
            return response()->json(
                [// variable name dan temenya
                    "message" => "Success Data Dengan ID " .$id." Berhasil Di Delete"
                ]
                );

         }
        return response()->json(
                [// variable name dan temenya
                    "message" => "Delete Data Dengan ID " .$id." Tidak Berhasil Karna Id Tidak Di temukan"
                ],400

                );
    }
}
