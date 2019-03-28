@extends ('layouts.master')

@section ('content')

@include('layouts.navbar')

<div class="container">
    <div class="panel panel-default" style="padding:15px;">
        <center>
            <h2>Thank you!</h2>
            <h2>{{ $solvent->name }} </h2>
            <strong> {{ $solvent->grade }} </strong>
            <br><br>
            <h4>Adjusted the amount to:</h4>
            <h3> {{ $solvent->stock }} bottle(s)</h3>
            <br>
        </center>
    </div>
</div>

@endsection
