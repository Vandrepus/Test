<div class="{{ $attributes->get('class', 'first-des') }}">  
    <div class="des-text">
        <h2>{{ $heading }}</h2>
        <p>{{ $text }}</p>
    </div>
    <div class="image">
        <img alt="img" src="{{ asset('images/' . $img1) }}">
        <img alt="img" src="{{ asset('images/' . $img2) }}">
    </div>
</div>
