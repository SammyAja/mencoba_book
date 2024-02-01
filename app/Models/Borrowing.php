<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Borrowing extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'book_id', 'borrow_date', 'return_date',
    ];
    public static $rules = [
        'id_user' => 'required|integer',
        'id_buku' => 'required|integer',
        'tanggal_pinjam' => 'required|date',
        'tanggal_kembali' => 'required|date',
    ];
}
