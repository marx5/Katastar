@extends('layouts.app')

@section('content')

<form method="post" action="/ownerships">
@csrf

<div class="form-group">
    <input class="form-control" name="ownership_id" type="text" placeholder="ownership_id">
</div>
<div class="form-group">
    <input class="form-control" name="ownership_name" type="text" placeholder="Ownership name">
</div>

<button type="submit" class="btn btn-success">Submit</button>
</form>

@endsection