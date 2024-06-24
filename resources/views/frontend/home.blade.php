@extends('layouts.site')
@section('title', 'Trang chủ')
@section('header')
    <link rel="stylesheet" href="Home.css">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
@endsection

@section('content')
   <x-slider/>
   <x-flash-new/>
    <x-flash-sale/>
    <x-last-post/>

@endsection
