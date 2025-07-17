@extends('layout.default')
<h2>This is the header</h2>

@include('sidemenu')
@section('header')
    <h2>This is the header</h2>
@endsection

@section('mainContent')
    <form action="{{ route('formSubmitted') }}" method="post">
        @csrf
        <label for="fullName">Full Name: </label>
        <input type="text" id="fullName" name="fullName" placeholder="Enter Your Full Name" required>

        <br><br>

        <label for="email">Email: </label>
        <input type="text" id="email" name="email" placeholder="Enter Your Email" required>

        <br><br>

        <button type="submit">Submit</button>
    </form>
@endsection

@section('footer')
    <h2>This is the footer</h2>
@endsection
