@extends('layout')

@section('content')
<div class="container">
 @foreach ($posts as $post)
 <div class="card mb-4">
 <div class="card-header">
 {{ $post->title }}
 </div>
 <div class="card-body">
 <p class="card-text">{{ $post->body }}</p>
 </div>
 </div>
 @endforeach
 {!! $posts->render('pagination::bootstrap-5') !!}
</div>
@endsection