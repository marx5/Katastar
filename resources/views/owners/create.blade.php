@extends('layouts.app')

@section('content')

<form method="post" action="/owners">
@csrf

<div class="form-group">
    <input class="form-control" name="name" type="text" placeholder="Owner name">
</div>
<div class="form-group">
    <input class="form-control" name="city_id" type="number" placeholder="City ID">
</div>
<button type="submit" class="btn btn-success">Submit</button>
</form>

@endsection