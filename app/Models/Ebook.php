<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ebook extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul','pengarang','penerbit','tahun_terbit','kode_buku','isbn','sinopsis','no_rak','jumlah_copy',

    ];
    public static $rules = [
        'judul'=> 'required|string|max:225',
        'pengarang'=> 'required|string|max:225',
        'penerbit'=> 'required|string|max:225',
        'tahun_terbit'=> 'required|integer',
        'kode_buku'=> 'required|integer',
        'isbn'=> 'required|integer|min:6|max:15',
        'sinopsis'=> 'required|string|max:225',
        'no_rak'=> 'required|integer',
        'jumlah_copy'=> 'required|integer',
    ];
}
