@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <form action="{{ route('blog.store')}}" method="post" enctype="multipart/form-data">
        @csrf
            <input class="col-md-12" type="text" name="title" placeholder="title">
            <input type="file" name="image" class="col-md-12" id="">
            <textarea  class="col-md-12" name="value"></textarea>
            <button type="submit">Kirim</button>
        </form>

    </div>
</div>
@endsection
