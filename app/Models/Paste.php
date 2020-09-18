<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paste extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $with = [
        'user',
        'pastelanguage'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function pastelanguage()
    {
        return $this->belongsTo(PasteLanguage::class, 'paste_language_id');
    }
}
