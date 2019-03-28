@extends ('layouts.master')

@section ('content')

@include('layouts.navbar')

@include('layouts.flash')

<form method="POST" action="/solvent/stock/update">
{{ csrf_field() }}

<div class="container" style="margin-top:-30px;">
    <h1>Update stock</h1>

    <div class="row">
        <div class="col-md-12">
            <center><button type="submit" class="btn btn-default">Update all</button></center>
            <br>
            <div class="panel panel-default">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Solvent</th>
                            <th>Grade</th>
                            <th>Stock</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($solvents as $solvent)
                        <tr>
                            <td>{{ $solvent->name }}</td>
                            <td>{{ $solvent->grade }}</td>
                            <td>
                                <input type="number" class="form-control" id="stock" name="stock[{{ $solvent->id }}]" value="{{ $solvent->stock }}" style="max-width:100px; text-align:center;">
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <center><button type="submit" class="btn btn-default">Update all</button></center>
        </div>
    </div>

</div>
</form>

@endsection
