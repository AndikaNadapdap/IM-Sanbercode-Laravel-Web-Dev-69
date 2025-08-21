@extends('layouts.master')

@section('title')
        REGISTER
@endsection

@section('content')
    <form action="welcome" method="post">
        @csrf
    <label>First Name:</label> <br><br>
    <input type="text" name="FirstName"><br><br>

    <label>Last Name:</label><br><br>
    <input type="text" name="LastName" ><br><br>

    <label>Gender:</label><br><br>
    <input type="radio" name="gender"> Male<br>
    <input type="radio" name="gender"> Female<br>
    <input type="radio" name="gender"> other<br><br>
    
    <label>Nationality:</label><br><br>
    <select name="Nationality">
        <option value="">Indonesian</option>
        <option value="">Hindian</option>
        <option value="">Philipine</option>
    </select> <br><br>

    <label>Language Spoken:</label><br><br>
    <input type="checkbox" name="Language Spoken:">Bahasa indonesia <br>
    <input type="checkbox" name="Language Spoken:">English<br>
    <input type="checkbox" name="Language Spoken:">Other<br><br>

    <label>Bio:</label><br><br>
    <textarea cols="25" rows="8"></textarea><br>

    <input type="submit" value="Sign Up">

    @endsection
