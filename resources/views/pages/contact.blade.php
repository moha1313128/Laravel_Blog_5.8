@extends('main')
@section('title', ' | Contact')
@section('content')
<div class="row">
    <div class="col-md-8 offset-2">
        <h1 class="text-center">Contact me</h1>
        <hr>
        <form action="{{ url('contact') }}" method="post">
            {{ csrf_field() }}
            <div class="form-group">    
                <input type="email" name="email" placeholder="Email" class="form-control" id="email">
            </div>
            <div class="form-group">
                
                <input type="subject" placeholder="Subject" name="subject" class="form-control" id="subject">
            </div>
            <div class="form-group">
               
                <textarea type="message" name="message" class="form-control" id="message">Type your message here ...</textarea> 
            </div>
            <input type="submit" value="Send Message" class="btn btn-success btn-block" >
        </form>
    </div>      
</div>
@endsection