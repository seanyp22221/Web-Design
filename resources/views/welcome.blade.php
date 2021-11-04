@extends('layouts.main')
@section('name')
@section('main')
    {{-- display image --}}
    <x-carousel/>

    {{-- Section --}}
    <x-promotion/>

      {{-- Clothing --}}
    <x-productlist/>
    
    {{-- Categories --}}
    <center>
      <img style="width: 250px;" src="https://od.lk/s/ODhfMTEwNDIwMDlf/frontlegendsoutletja.png" alt="logo">
      <h1 class="sm:text-4xl text-3xl font-medium title-font mb-6 text-white">Shop By Categories</h1>
    </center>
    <x-categories/>

@endsection