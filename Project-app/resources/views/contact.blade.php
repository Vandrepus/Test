@extends('layouts.app')

@section('contact-content')
    <x-hero 
        cName="hero"  
        heroImg="images/Car.jpg"  {{-- Replace with your image path --}}
        title="Contact Us"
    />
    <x-contact-form /> 

@endsection