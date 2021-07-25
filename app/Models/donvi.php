<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class donvi extends Model
{
    use HasFactory;
    protected  $table = 'donvi';
    protected $fillable = ['madonvi','tendonvi','donvicha','mota','ngaytao','nguoitao','ngaycapnhat','nguoicapnhat'];
    public $timestamps = FALSE;
}
