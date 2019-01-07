@extends('layouts.app')

@section('content')
<a class="btn btn-primary float-right" href="/land_registers/new">New</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($land_registers as $land_register)
    <tr>
      <td><?= $land_register->id ?></td>
      <td><?= $land_register->name ?></td>
      <td><?= $land_register->city->city_name ?></td>

    </tr>
  @endforeach
  </tbody>
</table>

@endsection