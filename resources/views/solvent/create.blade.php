@extends ('layouts.master')

@section ('content')

@include('layouts.navbar')

<div class="container">
    <center>

        @include('layouts.errors')

            <h1>Add new solvent</h1>

            <div class="panel panel-default" style="padding: 15px; max-width: 450px;">
                <form method="POST" action="/solvent">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name">Solvent name:</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Acetone" autofocus>
                    </div>
                    <div class="form-group">
                        <label for="grade">Solvent grade:</label>
                        <input type="text" class="form-control" id="grade" name="grade" placeholder="HPLC (5 L)">
                    </div>
                    <div class="form-group">
                        <label for="warning">Warn me when there are:</label>
                        <select name="warning" id="warning" class="form-control">
                            <option value="">Select one...</option>
                            <option value="0">0 bottles left</option>
                            <option value="1">1 bottle left</option>
                            <option value="2">2 bottles left</option>
                            <option value="3">3 bottles left</option>
                            <option value="4">4 bottles left</option>
                            <option value="5">5 bottles left</option>
                            <option value="6">6 bottles left</option>
                            <option value="7">7 bottles left</option>
                            <option value="8">8 bottles left</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="priority">This is a:</label>
                        <select name="priority" id="priority" class="form-control">
                            <option value="">Select one...</option>
                            <option value="2">Common used solvent</option>
                            <option value="1">Medium used solvent</option>
                            <option value="0">Rarely used solvent</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="stock">Current stock:</label>
                        <input type="text" class="form-control" id="stock" name="stock" placeholder="5">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Save new solvent</button>
                    </div>
                </form>
            </div>
</center>
</div>

@endsection
