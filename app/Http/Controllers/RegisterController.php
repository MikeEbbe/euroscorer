<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\Participant;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Display register page.
     * 
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('auth.register');
    }

    /**
     * Handle account registration request.
     * 
     * @param RegisterRequest $request
     * 
     * @return \Illuminate\Http\Response
     */
    public function register(RegisterRequest $request)
    {
        $user = User::create($request->validated());

        $participants = Participant::whereHas('edition', function ($query) {
            $query->where('year', 2023);
        })
        ->get();

        // Create a user score for each participant
        $participants->each(function ($participant) use ($user) {
            $user->scores()->create([
                'participant_id' => $participant->id,
                'performance' => 0,
                'song' => 0,
                'total' => 0,
            ]);
        });

        auth()->login($user);

        return redirect('/')->with('success', "Account aangemaakt");
    }
}
