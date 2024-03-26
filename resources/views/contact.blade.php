@extends('layouts.app')
@section('css-file')
<link rel="stylesheet" href="{{ asset('css/contact.css') }}">

@endsection
@section('content')

  <div class="contact container">
    <div style="text-align:center">
      <h2>Contact Us</h2>

    </div>
    <div class="row">
      <div class="column">

      </div>
      <div class="column">
        <form action="/action_page.php">
          <label for="fname">First Name</label>
          <input type="text" id="fname" name="firstname" placeholder="Your name..">
          <label for="lname">Email</label>
          <input type="text" id="lname" name="lastname" placeholder="Your Email">
          <label for="subject">Subject</label>
          <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
          <input type="submit" value="Submit">
        </form>
      </div>
    </div>
  </div>
  @endsection