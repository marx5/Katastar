@extends('layouts.app')

@section('content')
<a class="btn btn-primary float-right" href="/realestate_types/new">New</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      
    </tr>
  </thead>
  <tbody>
  @foreach ($realestate_types as $realestate_type)
    <tr>
      <td><?= $realestate_type->id ?></td>
      <td><?= $realestate_type->realestate_type_name ?></td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection