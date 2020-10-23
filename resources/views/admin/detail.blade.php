@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">title</th>
        <th scope="col">Image</th>
      <th scope="col">value</th>
      <th scope="col">post_at</th>
      <th scope="col">writer</th>

    </tr>
  </thead>
  <tbody>

    <tr>
      <th scope="row">1</th>
      <td>{{$blog->title}}</td>
      <td>{{ $blog->value }}</td>
      <td>{{ $blog->created_at}}</td>
      <td>{{ $blog->user->name }}</td>
      </tr>
  </tbody>
</table>

    </div>
</div>
@endsection
