@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="/css/home.css">

   <div class="container">
       My name is {{$name}} 
   </div>
@endsection
@section('title','Home')