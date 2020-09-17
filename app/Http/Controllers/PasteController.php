<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paste;

class PasteController extends Controller
{
    public function show(Paste $paste)
    {
        return $paste;
    }
}
