<?php

namespace App\Http\Controllers;

use App\Models\Mattress;
use Illuminate\Http\Request;

class MattressController extends Controller
{
    public function index()
    {
        return view('mattresses/mattressindex', [
            'mattresses' => Mattress::all(),
        ]);
    }
}
