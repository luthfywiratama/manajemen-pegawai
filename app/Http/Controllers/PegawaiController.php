<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Pegawai::all();
        return view('admin.pages.pegawai.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_lengkap' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
            'email' => 'required|email|unique:pegawai,email',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($validator->fails()) {
            return back()
            ->withErrors($validator)
            ->withInput();
        }

        $path = $request->file('photo')->store('public/photo');
        $photo = env('APP_URL') . '' . Storage::url($path);

        Pegawai::create([
            'nama_lengkap' => $request->nama_lengkap,
            'alamat' => $request->alamat,
            'telepon' => $request->telepon,
            'email' => $request->email,
            'photo' => $photo,
        ]);

        return redirect()->route('pegawai.index')->with('success', 'Data berhasil ditambahkan');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'nama_lengkap' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
            'email' => 'required|email|unique:pegawai,email,' . $id,
            'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($validator->fails()) {
            return back()
            ->withErrors($validator)
            ->withInput();
        }

        $payload = [
            'nama_lengkap' => $request->nama_lengkap,
            'alamat' => $request->alamat,
            'telepon' => $request->telepon,
            'email' => $request->email,
        ];

        if($request->photo){
            $path = $request->file('photo')->store('public/photo');
            $photo = env('APP_URL') . '' . Storage::url($path);
            $payload['photo'] = $photo;
        }

        Pegawai::where('id', $id)->update($payload);
        return redirect()->route('pegawai.index')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Pegawai::find($id);
        $data->delete();
        return redirect()->route('pegawai.index')->with('success', 'Data berhasil dihapus');
    }
}
