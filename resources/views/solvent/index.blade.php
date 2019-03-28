@extends ('layouts.master')

@section ('content')

@include('layouts.navbar')

@include('layouts.flash')

<div class="container" style="margin-top:-30px;">
    <h1>Solvents</h1>

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default" style="overflow:hidden;" >

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Solvent</th>
                            <th>Grade</th>
                            <th>Stock</th>
                            <th>Checkout</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($solvents as $solvent)
                        <tr>
                            <td><a href="/solvent/{{ $solvent->id }}"> {{ $solvent->name }} </a></td>
                            <td>{{ $solvent->grade }}</td>
                            <td>{{ $solvent->stock }}</td>
                            <td style="vertical-align: middle;">
                                <a class="btn btn-lg btn-default" href="/checkout/{{ $solvent->id }}">
                                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>



</div>

@endsection
