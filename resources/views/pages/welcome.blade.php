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
        <div class="post">
            <h3>Post Title</h3>
            <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
            <a href="#" class="btn btn-primary">Read more</a>
        </div>
        <hr>
        <div class="post">
            <h3>Post Title</h3>
            <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
            <a href="#" class="btn btn-primary">Read more</a>
        </div>
        <hr>
        <div class="post">
            <h3>Post Title</h3>
            <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
            <a href="#" class="btn btn-primary">Read more</a>
        </div>
        <hr>
        <div class="post">
            <h3>Post Title</h3>
            <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
            <a href="#" class="btn btn-primary">Read more</a>
        </div>
        <hr>
        <div class="post">
            <h3>Post Title</h3>
            <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
            <a href="#" class="btn btn-primary">Read more</a>
        </div>
    </div>
    <div class="col-md-3 col-md-offset-1">
        <h2>Side bar</h2>
        This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.
        <hr>
        <h2>Side bar</h2>
        This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.
        <hr>
        <h2>Side bar</h2>
        This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.
        <hr>
        <h2>Side bar</h2>
        This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.
    </div>

</div>   
@endsection