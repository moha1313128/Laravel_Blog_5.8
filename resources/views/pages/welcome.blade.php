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
                <p>{{ substr($post->body, 0, 50) }}{{ strlen($post->body)>300 ? " ..." : " " }}</p>
                <a href="#" class="btn btn-primary">Read more</a>
            </div>
            <hr>
        @endforeach
    <div class="col-md-3 col-md-offset-1">
        <h2>Side bar</h2>
        This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.
        <hr>
    </div>

</div>   
@endsection