<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class HomeImg extends Model
{
    use HasFactory;


    public function homeimg() {
        return $this->belongsTo(Homepage::class, 'home_id');
    }
}
