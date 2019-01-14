@extends('layouts.app')

@section('content')

@if($errors->count() > 0)
    <div class="alert alert-danger" role="alert">
        @foreach($errors->all() as $message)
            <?= $message ?>
        @endforeach
    </div>
@endif

<form method="post" action="/municipals" class="col-md-5 mx-auto">

<form method="post" action="/municipals">
@csrf

<div class="form-group">
    <select class="form-control" name="county_id">
        @foreach($counties as $county)
        <option value="{{ $county->id }}">{{ $county->county_name }}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <input class="form-control" name="municipal_name" type="text" placeholder="Municipal name">
</div>

<button type="submit" class="btn btn-success">Submit</button>
</form>

@endsection




