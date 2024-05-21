@extends('layouts.site')
@section('title', 'Trang chủ')
@section('header')
    <link rel="stylesheet" href="Home.css">
@endsection

@section('content')
   <x-slider/>
   <x-flash-new/>
    <x-flash-sale/>
    <x-last-post/>

@endsection
