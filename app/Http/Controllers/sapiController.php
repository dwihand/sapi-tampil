<?php

namespace App\Http\Controllers;
use Yajra\Datatables\Datatables;
use Validator;
use \App\Helper\Alert;
use \App\Model\Sapi;
use Illuminate\Http\Request;

class sapiController extends Controller
{
    //
    public function index()
    {
        # code...

        return Datatables::of(Sapi::all())
                ->setRowId(function(Sapi $sapi){
                    return $sapi->id;
                })->addColumn('aksi','admin.sapi.action-button')
                ->rawColumns(['aksi'])
                ->make(true);
         }

    public function delete(Request $request){
        $validator = Validator::make($request->all(),[
            "id"=> "required|numeric|exists:sapi,id"
        ]);
        $response = ['ok'=>true];
        if($validator->fails()){
            $response['ok'] = false;
            $response['msg'] = "Id tidak valid";
        }else{
            Sapi::find($request->input('id'))->delete();
            $response['msg'] = "berhasil menghapus data";
        }
        return response()->json($response, 200);
    }
    public function store(Request $request)
    {
        # code...
        $res = ['stored'=>true];
        $validator = Validator::make($request->all(),[
            "keterangan" => "required",
            'merksapi' => 'required',
            'susu' => 'required|numeric',
            'bobot' => 'required',
            'umur' => 'required',
            'konsumsi' => 'required',
            'prices' => 'required|min:3|numeric',
        ]);
        if($validator->fails()){
            $res['msg'] = Alert::errorList($validator->errors());
            $res['stored'] = false;
        }else{
            $sapi = new Sapi();
            $sapi->merksapi = $request->input("merksapi");
            $sapi->keterangan = $request->input('keterangan');
            $sapi->susu = $request->input('susu');
            $sapi->bobot = $request->input('bobot');
            $sapi->umur = $request->input('umur');
            $sapi->konsumsi = $request->input('konsumsi');
            $sapi->Price_rupiah = $request->input('prices');
            $sapi->save();
            $res['msg'] = Alert::success("Berhasil Menambahkan Data");
        }

        return response()->json($res, 200);
    }
    public function update(Request $request)
    {
        # code...
        $validator = Validator::make($request->all(),[
            "name" => "required|min:3",
            'email' => 'required|email|max:60',
            'role' => 'required'
        ]);

        $response = ["stored"=>true];
        
        if($validator->fails()){
            $response['stored'] = false;
            $response['msg']    = Alert::errorList($validator->errors());
        }else{
            $user = User::find($request->input('id'));
            if($user){

                
                $user->name = $request->input("name");
                $user->email = $request->input('email');
                $user->save();
                $user->role()->sync($request->input('role'));
                $response['msg'] = Alert::success("Berhasil Memperbarui Data Portofolio");
            }else{
                $response['stored'] = false;
                $response['msg']    = Alert::errorList("Data tidak ditemukan");
            }
        }
        return response()->json($response, 200);
    }
}
