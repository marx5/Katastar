@extends('layouts.app')

@section('content')

<form method="post" action="/counties">
@csrf

<div class="form-group">
    <select class="form-control" name="continent_id">
        @foreach($continents as $continent)
        <option value="{{ $continent->id }}">{{ $continent->continent_name }}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <input class="form-control" name="county_name" type="text" placeholder="County name">
</div>

<button type="submit" class="btn btn-success">Submit</button>
</form>

@endsection