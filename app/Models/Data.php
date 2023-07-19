<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'file_path', 'user_id'];

    function user()
    {
        return $this->belongsTo(User::class);
    }
}
