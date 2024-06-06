@extends('layouts.app')

@section('content')
    <x-hero 
        cName="hero"
        heroImg="images/Home.jpg" 
        title="Your Journey Starts Here"
        text="Choose Your Destination"
        buttonText="Travel Plan"
        url="/"
        btnClass="show"
    />
    <x-destination :destinations="$destinations" /> {{-- Pass your destinations data from the controller --}}
    <x-trip :trips="$trips" /> {{-- Pass your trips data from the controller --}}
@endsection
