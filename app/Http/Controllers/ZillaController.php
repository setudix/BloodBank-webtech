<?php

namespace App\Http\Controllers;

use App\Models\Thana;
use Illuminate\Http\Request;

class ZillaController extends Controller
{
    public function getThanas(Request $request)
{
    $zilla_id = $request->input('zilla_id');
    $thanas = Thana::where('zilla_id', $zilla_id)->orderBy('name')->get();
    return response()->json(['thanas' => $thanas]);
}
}
