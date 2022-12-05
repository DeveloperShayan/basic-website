@extends('layouts.app')


@section('content')

  <h1 align="center">Contact Us</h1>

  <form method="post" action="{{ route('contact-form-submit') }}">
    @csrf

        <div class="form-group">
          <label for="Name">Name</label>
          <input type="text" class="form-control" name="name" id="name" placeholder="Enter Your Name" >
        </div>

        <div class="form-group">
          <label for="Email">Email address</label>
          <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email" >
        </div>

        <div class="form-group">
          <label for="Subject">Subject</label>
          <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject" >
        </div>

        <div class="form-group">
          <label for="message">Message</label>
          <textarea name="message" id="message" cols="30" rows="10" class="form-control" ></textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>

  </form>


@endsection