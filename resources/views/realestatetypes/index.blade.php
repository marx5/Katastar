@extends('layouts.app')

@section('content')
<a class="btn btn-primary float-right" href="/realestatetypes/new">New</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Rbr</th>
      <th scope="col">Type name</th>
      
    </tr>
  </thead>
  <tbody>
  @foreach ($realestatetypes as $realestate_type)
    <tr>
      <td><?= $realestate_type->id ?></td>
      <td><?= $realestate_type->name ?></td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection