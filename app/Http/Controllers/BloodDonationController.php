<?php

namespace App\Http\Controllers;

use App\Models\BloodDonation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class BloodDonationController extends Controller
{
    public function create(Request $request)
    {
        $validatedData = $request->validate(
            [
                'donation_date' => ['required', 'date', 'before_or_equal:today'],
            ],
            [
                'donation_date.before_or_equal' => 'The donation date cannot be in the future.',
            ]
        );

        $existingDonation = BloodDonation::where('user_id', Auth::id())
            ->where('donation_date', $validatedData['donation_date'])
            ->first();

        if ($existingDonation) {
            // If blood donation date already exists, return error message
            return redirect()->back()->with('error', 'You have already donated blood on this date.');
        }

        $user = $request->user();
        $donation = new BloodDonation();
        $donation->user_id = $user->id;
        $donation->donation_date = $validatedData['donation_date'];
        $donation->save();

        return redirect()->back()->with('success', 'Blood donation added successfully.');
    }

    public function edit(BloodDonation $bloodDonation)
    {
        return view('bdedit', compact('bloodDonation'));
    }

    public function destroy(BloodDonation $bloodDonation)
    {
        $bloodDonation->delete();

        return redirect()->route('dashboard')
            ->with('success', 'Blood donation entry deleted successfully.');
    }

    public function index()
    {

        $bloodDonations = BloodDonation::where('user_id', Auth::id())->orderBy('donation_date', 'desc')->get();

        return view('dashboard', ['bloodDonations' => $bloodDonations]);
    }

    public function update(Request $request, $id)
    {
        $bloodDonation = BloodDonation::findOrFail($id);

  
        // $validatedData = $request->validate(
        //     [
        //         'donation_date' => 'required|date|unique:blood_donations,donation_date,NULL,id,user_id,' . auth()->id(),

        //     ],

        // );

        $validatedData = $request->validate([
            'donation_date' => [
                'required',
                'date',
                function ($attribute, $value, $fail) use ($bloodDonation) {
                    if (strtotime($value) > time()) {
                        $fail('The ' . $attribute . ' cannot be a future date.');
                    }
                },
                Rule::unique('blood_donations', 'donation_date')->where(function ($query) {
                    return $query->where('user_id', auth()->id());
                })->ignore($bloodDonation->id),
            ],
        ]);

    
        $bloodDonation->donation_date = $validatedData['donation_date'];
        $bloodDonation->save();

        return redirect()->route('dashboard')->with('success', 'Blood donation updated successfully.');
    }





}