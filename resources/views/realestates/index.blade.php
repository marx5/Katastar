@extends('layouts.app')

@section('content')
<a class="btn btn-primary float-right" href="/realestates/new">New</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Order</th>
      <th scope="col">Name</th>
      <th scope="col">Type</th>
      <th scope="col">City</th>
      <th scope="col">Owner</th>
      <th scope="col">LandRegister</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($realestates as $realestate)
    <tr>
      <td><?= $realestate->id ?></td>
      <td><?= $realestate->name ?></td>
      <td><?= $realestate->realestateType->name ?></td>
      <td><?= $realestate->city->city_name ?></td>
      <td><?= $realestate->owner->name ?></td>
      <td><?= $realestate->landRegister->name ?></td>
      <td><a href="/realestates/delete/{{ $realestate->id }}" class="btn btn-sm btn-danger">X</a></td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection