@extends ('layouts.master')

@section ('content')

@include('layouts.navbar')

@include('layouts.errors')
@include('layouts.flash')

<form method="POST" action="/solvent">
{{ csrf_field() }}
{{ method_field('patch') }}
<input type="hidden" name="solvent_id" value="{{ $solvent->id }}">

<div class="container">
    <div class="panel panel-default" style="padding:15px; margin-top:10px; margin-bottom:20px;">
        <h2 style="margin-top:-5px;">Update solvent properties</h2>
        <br><br>
        <div class="row">
            <div class="col-md-2">
                <div class="form-group">
                    <label for="name">Solvent name:</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $solvent->name }}">
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label for="grade">Grade:</label>
                    <input type="text" class="form-control" id="grade" name="grade" value="{{ $solvent->grade }}">
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label for="priority">Usage:</label>
                    <select id="priority" name="priority" class="form-control">
                        <option value="2" {{ $solvent->priority == 2 ? 'selected' : '' }}>Commonly used</option>
                        <option value="1" {{ $solvent->priority == 1 ? 'selected' : '' }}>Medium used</option>
                        <option value="0" {{ $solvent->priority == 0 ? 'selected' : '' }}>Rarely used</option>
                    </select>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label for="warning">Warning:</label>
                    <select id="warning" name="warning" class="form-control">
                        @for($i = 0; $i <= 8; $i++)
                            @if($i == $solvent->warning)
                                <option value="{{ $i }}" selected>{{ $i }} {{ $i == 1 ? 'bottle' : 'bottles' }} left</option>
                            @else
                                <option value="{{ $i }}">{{ $i }} {{ $i == 1 ? 'bottle' : 'bottles' }} left</option>
                            @endif
                        @endfor
                    </select>
                </div>
            </div>
            <div class="col-md-1">
                <div class="form-group"><br>
                    <button type="submit" class="btn btn-primary">Update properties</button>
                </div>
            </div>
        </div>
    </div>
</div>

</form>

@endsection
