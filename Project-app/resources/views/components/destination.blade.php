<div class="destination">
    <h1>Popular Destinations by TripAdvisor</h1>
    <p>Discover Your Next Adventure: Where Every Destination Becomes a Favorite</p>
    
    <x-destination-data 
        class="first-des" 
        heading="Dubai"
        text="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
        img1="Dubai.jpg"
        img2="Dubai1.jpeg"
    />

    <x-destination-data 
        class="first-des-reverse" 
        heading="Dubai"
        text="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
        img1="Dubai.jpg"
        img2="Dubai1.jpeg"
    />

    <x-destination-data 
        class="first-des" 
        heading="Dubai"
        text="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
        img1="Dubai.jpg"
        img2="Dubai1.jpeg"
    />

    <x-destination-data 
        class="first-des-reverse" 
        heading="Dubai"
        text="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
        img1="Dubai.jpg"
        img2="Dubai1.jpeg"
    />

    <x-destination-data 
        class="first-des" 
        heading="Dubai"
        text="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
        img1="Dubai.jpg"
        img2="Dubai1.jpeg"
    />
    @foreach($destinations as $destination)
        <x-destination-data 
            class="{{ $loop->index % 2 == 0 ? 'first-des-reverse' : 'first-des'}}"
            :heading="$destination['heading']" 
            :text="$destination['text']" 
            :img1="$destination['img1']"
            :img2="$destination['img2']"
        />
    @endforeach
</div>


<style>
    .destination{
    margin: 4rem 6rem;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.destination h1{
    font-size: 3rem;
}

.first-des{
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-top: 4.5rem;
}

.first-des-reverse{
    display: flex;
    flex-direction: row-reverse;
    align-items: center;
    justify-content: space-between;
    margin-top: 4.5rem;
}

.des-text{
    width: 45%;
    text-align: start;
    font-size: 1.1rem;

}

.des-text h2{
    padding-bottom: 1rem;
}

.image{
    position: relative;
    width: 50%;
    display: flex;
    justify-content: space-between;
    z-index: -99;
}

.image img{
    width: 49%;
    height: 350px;
    object-fit: cover;
    border-radius: 6px;
    box-shadow: -1px 1px 62px -18px rgba(0, 0, 0, 0.19);
}

.image img:nth-child(2){
    position: absolute;
    top: -10%;
    right: 0;
}

@media screen and (max-width: 850px){
    .destination{
        margin: 4rem 2rem;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .first-des{
        display: flex;
        flex-direction: column-reverse;
        margin-top: 2.5rem;
    }

    .first-des-reverse{
        display: flex;
        flex-direction: column-reverse;
        margin-top: 2.5rem;
    }
    
    .des-text{
        width: 100%;
    }

    .image{
        width: 100%;
        margin: 1.8rem 0;
    }

    .image img{
        height: 250px;
    }
}

</style>