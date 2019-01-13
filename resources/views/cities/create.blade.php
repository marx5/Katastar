@extends('layouts.app')

@section('content')

<form method="post" action="/cities">
@csrf


<div class="form-group">
    <input class="form-control" name="city_name" type="text" placeholder="City name">
</div>

<div class="form-group">
    <select class="form-control" name="municipal_id">
        @foreach($municipals as $municipal)
        <option value="{{ $municipal->id }}">{{ $municipal->municipal_name }}</option>
        @endforeach
    </select>
</div>

<button type="submit" class="btn btn-success">Submit</button>
</form>

@endsection