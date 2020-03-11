@extends('main')
@section('title', ' | Home')
@section('content')

<!-- jumbotron -->
<div class="row">
    <div class="col-md-12">
        <div class="jumbotron">
          <h1 class="">Welcome To WebDev Blog</h1>
          <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
          <a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a>
        </div>      
    </div>
</div> <!--  end row -->
<div class="row">
    <div class="col-md-8">
        @foreach($post as $post)
        <div class="post">
            <h3>{{ $post->title }}</h3>
            <p>{{ substr(strip_tags($post->body), 0, 300) }}{{ strlen(strip_tags($post->body)) > 300 ? "..." : "" }}</p>
            <a href="{{ url('blog/'.$post->slug) }}" class="btn btn-primary">Read More</a>
            <hr>
        </div>
        @endforeach
    </div>
    <div class="col-md-3 col-md-offset-1">
        <h2>Sidebar</h2>
        <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
    </div>    
</div>   
@endsection