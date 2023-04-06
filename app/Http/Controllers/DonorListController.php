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


    // public function filterUsers(Request $request)
    // {
    //     dd($request);

    //     $allZilla = Zilla::orderBy('name')->get();
    //     $allThana = Thana::all();

    //     $selectedZilla = $request->input('zilla');
    //     $selectedThana = $request->input('thana');

    //     $users = $this->getUsers($selectedZilla, $selectedThana);


    //     // if (!$selectedThana && !$selectedThana){
    //     //     $users = User::with(['zilla', 'thana'])->get();
    //     // }

    //     return view('donors', compact('users','allZilla','allThana'));
    // }

    private function getUsers($selectedZilla = null, $selectedThana = null)
    {
        $query = User::with(['zilla', 'thana']);

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

    public function filterUsers(Request $request)
    {
        $allZilla = Zilla::orderBy('name')->get();
        $allThana = Thana::all();
        $selectedZilla = $request->input('zilla_id');

        $query = User::with(['zilla', 'thana']);

        if ($selectedZilla) {
            $query->where('zilla_id', $selectedZilla);
        }

        $selectedThana = $request->input('thana_id');

        if ($selectedThana) {
            $query->where('thana_id', $selectedThana);
        }

        $users = $query->get();

        return view('donors', compact('users', 'allZilla', 'allThana','selectedZilla', 'selectedThana'));
    }
}