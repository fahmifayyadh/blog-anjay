@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">title</th>
        <th>Image</th>
      <th scope="col">value</th>
      <th scope="col">post_at</th>
      <th>action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($blog as $i=>$b)
    <tr>
      <th scope="row">{{ $i+1 }}</th>
      <td>{{$b->title}}</td>
        <td><img src="{{ asset(Storage::url($b->image)) }}" alt="" style="width: 100px"></td>
      <td>{{ $b->value }}</td>
      <td>{{ $b->created_at}}</td>
      <td><a href="{{route('blog.show', $b->created_at)}}" class="btn btn-primary">Detail</a></td>
    </tr>
    @endforeach
  </tbody>
</table>

    </div>
</div>
@endsection
