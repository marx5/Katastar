@extends('layouts.app')

@section('content')
<a class="btn btn-primary float-right" href="/realestate/new">New</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      
    </tr>
  </thead>
  <tbody>
  @foreach ($realestates as $realestate)
    <tr>
      <td><?= $realestate->id ?></td>
      <td><?= $realestate->realestate_name ?></td>
      <td><?= $realestate_type->realestate_type->realestate_type_name?></td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection