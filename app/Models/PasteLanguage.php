<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PasteLanguage extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function paste()
    {
        return $this->belongsTo(Paste::class, 'paste_language_id');
    }

}
