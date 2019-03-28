<?php

namespace App\Http\Controllers;

use App\Solvent;
use App\Mail\SolventWarning;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CheckoutController extends Controller
{
    public function store(Solvent $solvent)
    {
        if($solvent->stock == 0) {
		session()->flash('success', 'There should be no bottles left. Please update below.');
		return view('solvent.checkout', compact('solvent'));
        }

        $solvent->stock -= 1;

        $solvent->save();

        if($solvent->stock == $solvent->warning) {
            // send an e-mail containing the warning
            session()->flash('success', 'The responsible PhD student was informed by e-mail.');

            Mail::to(env('SOLVENT_BOSS_EMAIL'))
                ->queue(new SolventWarning($solvent));
        }

        return view('solvent.checkout', compact('solvent'));

    }

    public function update(Solvent $solvent, Request $request)
    {
        $request->validate(['stock' => 'required']);

        $solvent->stock = $request->stock;
        $solvent->save();

        return view('solvent.adjustedstock', compact('solvent'));
    }
}
