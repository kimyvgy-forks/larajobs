<?php

namespace App\Http\Controllers;

use App\Models\CongViec;
use Illuminate\Http\Request;
use Illuminate\Support\Number;

class CongViecController extends Controller
{
    public function testdb(Request $request)
    {
        // http://localhost:8000?limit=10
        $limit = $request->query('limit', 10);
        $limit = Number::clamp($limit, 1, 100);
        $congViecList = CongViec::orderBy('id', 'desc')->paginate($limit);

        return view('home', compact('congViecList'));
    }
}
