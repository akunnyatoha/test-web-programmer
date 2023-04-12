<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PemesananController extends Controller
{
    public function index()
    {
        $getPemesanan = Pemesanan::latest()->get();
        $data = [
            "title" => "Master Pemesanan",
            "data" => $getPemesanan,
            "url" => url('/assets')
        ];
        return view('admin.index', $data);
    }

    public function create()
    {
        $query = DB::table('pemesanans')->select(DB::raw('MAX(RIGHT(id, 4)) as kode'));
        $code = "";
        if ($query->count() > 0) {
            foreach ($query->get() as $data) {
                $tmp = ((int)$data->kode) + 1;
                $code = sprintf('%04s', $tmp);
            }
        } else {
            $code = "0001";
        }
        $data = [
            "title" => "Buat Pesanan",
            "url" => url('/assets'),
            "code" => $code
        ];
        return view('public.create',$data);
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            "kode_tiket" => "required",
            "name_pemesan" => "required",
            "email" => "required",
            "no_telepone" => "required",
            "kelas_tiket" => "required",
        ]);
        // dd($validate);
            Pemesanan::create($validate);
            return view('public.output', ["title" => "Output Tiket", "data" => $validate]);
    }

    // public function showTiket()
    // {
    //     $data = [
    //         "title" => "Output Tiket"
    //     ];
    //     return view('public.output',$data);
    // }

    public function edit($id)
    {
        $find = Pemesanan::where('id',$id)->first();
        $data = [
            "title" => "Update Pesanan",
            "url" => url('/assets'),
            "data" => $find
        ];
        return view('admin.edit', $data);
    }

    public function update($id, Request $request)
    {
        $validate = $request->validate([
            "kode_tiket" => 'required',
            "name_pemesan" => 'required',
            "email" => 'required',
            "no_telepone" => 'required',
            "kelas_tiket" => 'required',
        ]);

        // dd($validate);

        $find = Pemesanan::find($id);
        $find->update($validate);

        return redirect('/master-pemesan')->with('success', 'Data berhasil di update!');
    }

    public function destroy($id)
    {
        $find = Pemesanan::find($id);
        $find->delete();

        return redirect('/master-pemesan')->with('success', 'Data berhasil di hapus!');
    }

    public function chekin()
    {
        $getPemesanan = Pemesanan::latest()->get();
        $data = [
            "title" => "Master Pemesanan",
            "data" => $getPemesanan,
            "url" => url('/assets')
        ];
        return view('admin.chekin', $data);
    }

    public function updateStatus($id)
    {
        $find = Pemesanan::find($id);
        $find->update(["status" => 1]);

        return redirect('/chekin');
    }
}
