<?php

namespace App\Http\Controllers;

use App\Prediction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WelcomeController extends Controller
{
    public function welcome()
    {
        $predictions = Prediction::latest()->where([
                ['isPremium', false], ['isEndded', true]
            ])->paginate(5);
        $prediction = Prediction::latest()->where([
            ['isPremium', false], ['isEndded', false]
        ])->paginate(5);
        return view('welcome', compact('predictions','prediction'));
    }

    public function strategy()
    {
        $id = Auth::user()->id;
        $user = Auth::user();
       
        return view('strategy');
    }

    public function terms()
    {
        return view('terms');
    }
}
