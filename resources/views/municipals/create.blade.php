@extends('layouts.app')

@section('content')

<form method="post" action="/municipals">
@csrf

<div class="form-group">
    <input class="form-control" name="county_id" type="text" placeholder="county_id">
</div>
<div class="form-group">
    <input class="form-control" name="municipal_name" type="text" placeholder="Municipal name">
</div>

<button type="submit" class="btn btn-success">Submit</button>
</form>

@endsection