<?php

namespace App\Http\Controllers\Api;

use App\Models\Kamar;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller; 
use App\Http\Resources\KamarResource;
use Illuminate\Support\Facades\Validator;

class KamarController extends Controller
{
    public function index()
    {
        // get post
        $kamar = Kamar::latest()->paginate(5);

        //return collection of posts as a resource
        return new KamarResource(true, 'List Data Posts', $kamar);
    }

    public function store(Request $request)
    {
        // define validation rules
        $validator = Validator::make($request->all(),[
            'no_kamar'     => 'required',
            'harga'   => 'required',
            'kapasitas'   => 'required',
            'tipe'   => 'required',
        ]);

        // check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //create post
        $kamar = Kamar::create([
            'no_kamar'     => $request->no_kamar,
            'harga'     => $request->harga,
            'kapasitas'   => $request->kapasitas,
            'tipe'   => $request->tipe,
        ]);

        //return response
        return new KamarResource(true, 'Data Post Berhasil Ditambahkan!', $kamar);
    }
}
