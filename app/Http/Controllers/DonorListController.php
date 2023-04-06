<?php

namespace App\Http\Controllers;

use App\Models\Thana;
use App\Models\User;
use App\Models\Zilla;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DonorListController extends Controller
{
    public function index()
    {
        return view('donors');
    }

    public function view(Request $request)
    {
        // $users = DB::table('users')
        //     ->join('zillas', 'zillas.id', '=', 'zilla_id')
        //     ->join('thanas', 'thanas.id', '=', 'thana_id')
        //     ->select('users.*', 'zillas.name as zilla', 'thanas.name as thana' )
        //     ->get();

        $users = User::query();

        $zillaId = $request->input('zilla_id');
        $thanaId = $request->input('thana_id');
    
        if (!empty($zillaId)) {
            $users->whereHas('thana', function ($query) use ($zillaId) {
                $query->where('zilla_id', $zillaId);
            });
        }
    
        if (!empty($thanaId)) {
            $users->where('thana_id', $thanaId);
        }

        // $users = User::with(['zilla', 'thana'])->get();

        return view('donors', compact('users'));
    }

    public function filter(Request $request)
    {
        $zillas = Zilla::query();

        $zillaId = $request->input('zilla_id');
        $thanaId = $request->input('thana_id');

        if (!empty($zillaId)) {
            $zillas->where('zilla_id', $zillaId);
        }

        if (!empty($thanaId)) {
            $zillas->where('thana_id', $thanaId);
        }

        $zillas = $zillas->with(['thana'])->get();

        return view('donors', compact('zillas'));
    }

    public function filterUsers(Request $request)
    {
        $allZilla = Zilla::orderBy('name')->get();
        $allThana = Thana::all();

        $selectedZilla = $request->input('zilla');
        $selectedThana = $request->input('thana');
        
        $users = $this->getUsers($selectedZilla, $selectedThana);
        
        
        // if (!$selectedThana && !$selectedThana){
        //     $users = User::with(['zilla', 'thana'])->get();
        // }

        return view('donors', compact('users','allZilla','allThana'));
    }

    private function getUsers($selectedZilla = null, $selectedThana = null)
    {
        $query = User::with(['zilla','thana']);
        
        if ($selectedZilla && $selectedThana) {
            $query->where('zilla_id', $selectedZilla)
                  ->where('thana_id', $selectedThana);
        } else if ($selectedZilla) {
            $query->where('zilla_id', $selectedZilla);
        } else if ($selectedThana) {
            $query->where('thana_id', $selectedThana);
        }
        
        return $query->get();
    }
}