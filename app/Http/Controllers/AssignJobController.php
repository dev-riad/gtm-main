<?php

namespace App\Http\Controllers;

use App\Models\AssignJobModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AssignJobController extends Controller
{
    public function index()
    {
        if (Auth::user()->role_id == 1) {
            $users = User::all();
        }else{
            $users = User::where('role_id', Auth::user()->role_id)->get();
        }

        return view('assignJob.index', compact('users'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        // Validate the request
        $request->validate([
            'job_offer_id' => 'required|exists:job_offers,id',
            'user_id' => 'required|exists:users,id',
        ]);

        // Create a new assignment
        AssignJobModel::create([
            'job_offer_id' => $request->job_offer_id,
            'user_id' => $request->user_id,
        ]);

        return redirect()->back()->with('success', 'Job assigned successfully.');
    }
}
