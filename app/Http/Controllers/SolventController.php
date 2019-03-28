<?php

namespace App\Http\Controllers;

use App\Solvent;
use Illuminate\Http\Request;

class SolventController extends Controller
{

    public function index()
    {
        $solvents = Solvent::orderBy('priority', 'DESC')->get();
        return view('solvent.index', compact('solvents'));
    }

    public function create()
    {
        return view('solvent.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'      => 'required',
            'grade'     => 'required',
            'warning'   => 'required'
        ]);

        Solvent::create($request->all());

        session()->flash('success', 'Added solvent.');

        return redirect('/');

    }

    public function editStock()
    {
        $solvents = Solvent::orderBy('priority', 'DESC')->get();

        return view('solvent.updatestock', compact('solvents'));
    }

    public function updateStock(Request $request)
    {

        foreach($request->stock as $solventId => $newStock) {
            Solvent::find($solventId)->update(['stock' => $newStock]);
        }

        session()->flash('success', 'Solvent stock updated.');
        return redirect('/solvent/stock');

    }

    public function addBatch()
    {
        $solvents = Solvent::orderBy('priority', 'DESC')->get();
        return view('solvent.batchupdate', compact('solvents'));
    }

    public function batchUpdate(Request $request)
    {

        foreach($request->stock as $solventId => $batch) {
            if($batch == null) {
                continue;
            }

            Solvent::find($solventId)->increment('stock', $batch);
        }

        session()->flash('success', 'Solvent stock updated.');

        return redirect('/');

    }

    public function edit(Solvent $solvent)
    {
        return view('solvent.edit', compact('solvent'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name'      => 'required',
            'grade'     => 'required',
        ]);

        $solvent = Solvent::find($request->solvent_id);

        $solvent->name = $request->name;
        $solvent->grade = $request->grade;
        $solvent->priority = $request->priority;
        $solvent->warning = $request->warning;

        $solvent->save();

        session()->flash('success', 'Succesfully updated the solvent properties.');

        return redirect('/');
    }

}
