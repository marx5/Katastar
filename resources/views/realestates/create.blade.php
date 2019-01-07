@extends('layouts.app')

@section('content')

<form method="post" action="/realestates">
@csrf

<div class="form-group">
    <input class="form-control" name="realestate_id" type="text" placeholder="realestate_id">
</div>
<div class="form-group">
    <input class="form-control" name="realestate_name" type="text" placeholder="Realestate name">
</div>

<button type="submit" class="btn btn-success">Submit</button>
</form>

@endsection