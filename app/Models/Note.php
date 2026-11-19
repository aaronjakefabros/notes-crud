<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    // Ito ang nagpapahintulot sa Laravel na i-save ang title at content
    protected $fillable = ['title', 'content'];
}