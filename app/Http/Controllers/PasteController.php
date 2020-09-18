<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paste;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class PasteController extends Controller
{
    public function index()
    {

        $totals = DB::table('pastes')
            ->selectRaw('count(*) as total')
            ->selectRaw('count(case when fork IS NOT null then 1 end) as forks')
            ->selectRaw('count(case when private = false AND password is null then 1 end) as public')
            ->first();


        //$totalPastes = Paste::count();
        //$forks = Paste::whereNotNull('fork')->count();
        $pastes = Paste::where(['private' => false, 'password' => null])->latest()->paginate(5);
        return view('pastes.index', ['pastes' => $pastes, 'totals' => $totals]);
    }

    public function show(Paste $paste)
    {
        $paste = $paste->where('id', $paste->id)->with('pastelanguage', 'user')->get();

        return $paste;
    }
}
