@extends ('layouts.master')

@section ('content')

@include('layouts.navbar')

@include('layouts.flash')

<div class="container">
    <div class="panel panel-default" style="padding:15px;">
        <center>
            <h2>Registered checkout</h2>
            <h2>{{ $solvent->name }} </h2>
            <strong> {{ $solvent->grade }} </strong>
            <br><br>
            <h4>Remaining: {{ $solvent->stock }} bottle(s)</h4>
            <br><hr>
            <h4 style="color: red;">Incorrect?</h4>
            <div class="row">
                <form method="POST" action="/checkout/{{ $solvent->id }}">
                    {{ csrf_field() }}
                    {{ method_field('patch') }}
                <div class="col-md-2 col-md-offset-5">
                       <div class="form-group">
                           <label for="stock">Actual:</label>
                           <input type="number" class="form-control" id="stock" name="stock" style="text-align:center;">
                       </div>
                </div>
                <div class="col-md-1">
                    <div class="form-group"><br>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
                </form>
            </div>

        </center>
    </div>
</div>

@endsection
