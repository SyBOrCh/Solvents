<br>
Dear {{ env('SOLVENT_BOSS_NAME') }},
<br><br>
There {{ $solvent->stock == 1 ? 'is' : 'are' }} only {{ $solvent->stock }} {{ $solvent->stock == 1 ? 'bottle' : 'bottles' }} of {{ $solvent->name }} left.
<br><br>
<a href="http://solvents.syborchserver.nl/">Go to solvents page</a>
