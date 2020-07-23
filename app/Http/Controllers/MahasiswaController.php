<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;
use Validator;
class MahasiswaController extends Controller
{
    public function input_mahasiswa(){
        $halaman = 'input_mahasiswa';
        return view('mahasiswas/input_mahasiswa', compact('halaman'));
    }
    public function store(Request $request){
        $input = $request->all();
        $validator = Validator::make($input,[
            'nim'=>'required|string|size:4|unique:mahasiswa,nim',
            'nama'=>'required|string|max:100',
            'tanggal_lahir'=>'required|date',
            'jenis_kelamin'=>'required|in:L,P',
        ]);
        if($validator->fails()){
            return redirect('create');
        }
        Mahasiswa::create($input);
        return redirect('lihat_data_mahasiswa');
    }
    protected $request;
    public function __construct(Request $req)
    {
        $this->request=$req;
    }
    public function lihat_data_mahasiswa(){
        $halaman = 'lihat_data_mahasiswa';
        $mahasiswa_list = Mahasiswa::orderBy('nim','asc')->Paginate(5);
        $jumlah_mahasiswa = $mahasiswa_list->count();
        return view('mahasiswas/lihat_data_mahasiswa', compact('halaman','mahasiswa_list', 'jumlah_mahasiswa'));
    }
    public function show ($id){
        $halaman = 'mahasiswa';
        $mahasiswa = Mahasiswa::findOrFail($id);
        return view('mahasiswas.show', compact('halaman', 'mahasiswa'));
    }
    public function create(){
        $halaman = 'create';
        return view ('mahasiswas/create', compact('halaman'));
    }
    public function edit($id){
        $mahasiswa = Mahasiswa::findOrFail($id);
        return view ('mahasiswas/edit', compact('mahasiswa'));
    }
    public function update($id, Request $request){
        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->update($request->all());
        return redirect('lihat_data_mahasiswa');
    }
    public function destroy($id){
        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->delete();
        return redirect('lihat_data_mahasiswa');
    }
    public function date_mutator(){
        $mahasiswa = Mahasiswa::findOrFail(8);
        $nama = $mahasiswa->nama;
        $tanggal_lahir = $mahasiswa->tanggal_lahir->format('d-m-y');
        $ulang_tahun = $mahasiswa->tanggal_lahir->addYears(25)->format('d-m-y');
        return "Mahasiswa {$nama} lahir pada tanggal {$tanggal_lahir}.<br>Ulang tahun ke-25 akan jatuh pada {$ulang_tahun}.";
    }
}

