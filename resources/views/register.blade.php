@extends('layout.app')

@section('title','Register Page')

@section('test-content')
<div class="container">
    <form action="datainsert" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="name">Enter your Name</label>
        <input type="text" id="name" name="name"> <br>

        <label for="age">Enter your age</label>
        <input type="text" id="age" name="age"> <br>

        <label for="phone">Enter your Phone</label>
        <input type="text" id="phone" name="phone"> <br>

        <input type="submit" id="submit">

    </form>
</div>




