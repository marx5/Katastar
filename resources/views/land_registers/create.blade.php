@extends('layouts.app')

@section('content')

<form method="post" action="/landregisters">
@csrf

<div class="form-group">
    <input class="form-control" name="city_id" type="text" placeholder="City id">
</div>
<div class="form-group">
    <input class="form-control" name="name" type="text" placeholder="Land Register name">
</div>

<button type="submit" class="btn btn-success">Submit</button>
</form>

@endsection