@extends('layouts.app')

@section('content')

<form method="post" action="/realestatetypes">
@csrf

<div class="form-group">
    <input class="form-control" name="name" type="text" placeholder="Realestate type name">
</div>

<button type="submit" class="btn btn-success">Submit</button>
</form>

@endsection