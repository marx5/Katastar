@extends('layouts.app')

@section('content')

@if($errors->count() > 0)
    <div class="alert alert-danger" role="alert">
        @foreach($errors->all() as $message)
            <?= $message ?>
        @endforeach
    </div>
@endif

<form method="post" action="/realestates" class="col-md-5 mx-auto">
@csrf


<div class="form-group">
    <input class="form-control" name="name" type="text" placeholder="Realestate name">
</div>
<div class="form-group">
    <select class="form-control" name="realestate_type_id">
        @foreach($data['realestate_types'] as $realestate_type)
        <option value="{{ $realestate_type->id }}">{{ $realestate_type->name }}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <select class="form-control" name="city_id">
        @foreach($data['cities'] as $city)
        <option value="{{ $city->id }}">{{ $city->city_name }}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <select class="form-control" name="owner_id">
        @foreach($data['owners'] as $owner)
        <option value="{{ $owner->id }}">{{ $owner->name }}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <select class="form-control" name="land_register_id">
        @foreach($data['land_registers'] as $land_register)
        <option value="{{ $land_register->id }}">{{ $land_register->name }}</option>
        @endforeach
    </select>
</div>

<button type="submit" class="btn btn-success">Submit</button>
</form>

@endsection