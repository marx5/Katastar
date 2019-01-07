@extends('layouts.app')

@section('content')
<a class="btn btn-primary float-right" href="/owners/new">New</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">City</th>
      
    </tr>
  </thead>
  <tbody>
  @foreach ($owners as $owner)
    <tr>
      <td><?= $owner->id ?></td>
      <td><?= $owner->name ?></td>
      <td><?= $owner->city->city_name ?></td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection