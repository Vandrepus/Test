@extends('layouts.app')

@section('about-content')
    <x-hero 
        cName="hero"
        heroImg="images/Flight.jpg" 
        title="About Us"
        url="/about"
    />
    <x-about-us/>
@endsection