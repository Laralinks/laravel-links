<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paste;

class PasteController extends Controller
{
    public function index()
    {
        $totalPastes = Paste::count();
        $pastes = Paste::where(['private' => false, 'password' => null])->with('pastelanguage', 'user')->latest()->paginate(10);
        return view('pastes.index', ['pastes' => $pastes, 'totalPastes' => $totalPastes]);
    }

    public function show(Paste $paste)
    {
        $paste = $paste->where('id', $paste->id)->with('pastelanguage', 'user')->get();

        return $paste;
    }
}
