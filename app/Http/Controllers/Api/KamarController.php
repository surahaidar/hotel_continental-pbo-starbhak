<?php

namespace App\Http\Controllers\Api;

use App\Models\Kamar;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller; 
use App\Http\Resources\KamarResource;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class KamarController extends Controller
{
    public function index()
    {
        // get post
        $kamar = Kamar::first()->get();

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

    public function show(Kamar $kamar)
    {
        //return single post as a resource
        return new KamarResource(true, 'Data Post Ditemukan!', $kamar);
    }

    // update
    public function update(Request $request, Kamar $kamar)
    {
        //define validation rules
        $validator = Validator::make($request->all(), [
            'no_kamar'     => 'required',
            'harga'   => 'required',
            'kapasitas'   => 'required',
            'tipe'   => 'required',
        ]);

         //check if validation fails
         if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        } 

        //check if image is not empty
        if ($request->hasFile('image')) {

            //upload image
            // $image = $request->file('image');
            // $image->storeAs('public/posts', $image->hashName());

            // delete old image
            // Storage::delete('public/posts/'.$post->image);

            //update post with new image
            // $post->update([
            //     'no_kamar'     => $request->no_kamar,
            //     'harga'   => $request->harga,
            //     'kapasitas'   => $request->kapasitas,
            //     'tipe'   => $request->tipe,
            // ]);

        } else {

            //update post without image
            $kamar->update([
                'no_kamar'     => $request->no_kamar,
                'harga'   => $request->harga,
                'kapasitas'   => $request->kapasitas,
                'tipe'   => $request->tipe,
            ]);
        }

         //return response
         return new KamarResource(true, 'Data Post Berhasil Diubah!', $kamar);
    }

    // destroy
    public function destroy(Kamar $kamar)
    {
        //delete image
        // Storage::delete('public/posts/'.$post->image);

        //delete post
        $kamar->delete();

        //return response
        return new KamarResource(true, 'Data Post Berhasil Dihapus!', null);
    }
    
    
}
