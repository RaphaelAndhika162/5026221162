<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TasController extends Controller
{
    public function index(Request $request)
    {
		$cari = $request->cari;

        $pagination = $request->query('pagination', 10);

        if($cari == null) {
            $tas = DB::table('tas')->paginate($pagination);
        } else {
            $tas = DB::table('tas')
            ->where('merektas','like',"%".$cari."%")
            ->paginate($pagination);
        }

		return view('datatas',['tas' => $tas]);
    }

    public function tambah()
    {
        return view('tambahtas');
    }

    public function store(Request $request)
    {

        DB::table('tas')->insert([
            'merektas' => $request->merektas,
            'stocktas' => $request->stocktas,
            'tersedia' => $request->tersedia
        ]);

        return redirect('/tas');
    }

    public function editGet($kodetas)
    {

        $tas = DB::table('tas')->where('kodetas', $kodetas)->first();

        return view('edittas', ['tas' => $tas]);
    }

    public function editPost(Request $request, $kodetas)
    {

        DB::table('tas')->where('kodetas', $request->kodetas)->update([
            'merektas' => $request->merektas,
            'stocktas' => $request->stocktas,
            'tersedia' => $request->tersedia
        ]);

        return redirect('/tas');
    }

    public function delete($kodetas)
    {
        DB::table('tas')->where('kodetas', $kodetas)->delete();

        return redirect('/tas');
    }
}
