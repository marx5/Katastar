@extends('layouts.app')

@section('content')

<form method="post" action="/counties">
@csrf

<div class="form-group">
    <input class="form-control" name="county_name" type="text" placeholder="County name">
</div>

<div class="form-group">
    <input class="form-control" name="continent_id" type="number" placeholder="Contintet name">
</div>

<button type="submit" class="btn btn-success">Submit</button>
</form>

@endsection