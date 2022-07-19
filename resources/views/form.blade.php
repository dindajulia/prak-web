@extends('master')

@section('title')
    Sign Up Form
@endsection

@section('content')
    <h1>Buat Account Baru!</h1>
    <form action="/kirim" method="post">
        @csrf
        <label for="fname">First name:</label><br><br>
        <input type="text" id="fname" name="fname"><br><br>
        <label for="lname">Last name:</label><br><br>
        <input type="text" id="lname" name="lname"><br>

        <p>Gender:</p>
        <input type="radio" name="gender" value="male">
        <label for="male">Male</label><br>
        <input type="radio" name="gender" value="female">
        <label for="female">Female</label><br>
        <input type="radio" name="gender" value="other">
        <label for="other">Other</label><br>

        <p>Nationality:</p>
        <select name="nationality">
            <option value="indonesia">Indonesian</option>
            <option value="singapura">Singapore</option>
            <option value="malaysia">Malaysian</option>
            <option value="australia">Australian</option>
        </select>
     
        <p>Language Spoken:</p>
        <input type="checkbox" name="language1" value="bahasa indonesia">
        <label for="language1"> Bahasa Indonesia</label><br>
        <input type="checkbox" name="language2" value="english">
        <label for="language2">English</label><br>
        <input type="checkbox" name="language3" value="other">
        <label for="language3">Other</label><br><br>

        <label for="bio">Bio:</label><br><br>
        <textarea name="bio" cols="30" rows="10"></textarea><br>

        <input type="submit" value="Sign Up">
    </form>
@endsection