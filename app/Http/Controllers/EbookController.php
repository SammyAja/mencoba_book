<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ebook;

class EbookController extends Controller
{
    public function create(Request $request)
    {
        $request->validate(EBook::$rules);

        $eBook = EBook::create($request->all());

        return response()->json($eBook, 201);
    }
}
