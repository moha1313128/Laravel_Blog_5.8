@extends('main')
@section('title', ' | Contact')
@section('content')
<div class="row">
    <div class="col-md-12">
        <h1 class="">Contact me</h1>
        <hr>
        <form>
            <div class="form-group">
                <label name="email">Email</label>
                <input type="email" name="email" class="form-control" id="email">
            </div>
            <div class="form-group">
                <label name="subject">Subject</label>
                <input type="subject" name="esubject" class="form-control" id="subject">
            </div>
            <div class="form-group">
                <label name="message">Message</label>
                <textarea type="message" name="message" class="form-control" id="message">Type your message here ...</textarea> 
            </div>
            <input type="submit" value="Send Message" class="btn btn-success" >
        </form>
    </div>      
</div>
@endsection