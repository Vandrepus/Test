<div class="form-container">
    <h1>Send a message to us!</h1>
    <form action="{{ route('contact.submit') }}" method="POST"> 
        @csrf  
        <input type="text" name="name" placeholder="Name">
        <input type="email" name="email" placeholder="E-mail">
        <input type="text" name="subject" placeholder="Subject">
        <textarea name="message" placeholder="Message" rows="4"></textarea>
        <button type="submit">Send Message</button>
    </form>
</div>

<style>
    .form-container{
    margin: 4rem 6rem;
    columns: #2a2a2a;
}

.form-container form{
    padding-top: 3rem;
    display: flex;
    flex-direction: column;
    width: 50%;
    margin: auto;
}

.form-container input{
    height: 3rem;
    padding: 0 1rem;
    margin-bottom: 2rem;
    border-radius: .3rem;
    border: 1px solid #2a2a2a;
}

.form-container textarea{
    padding: 0 1rem;
    margin-bottom: 2rem;
    border-radius: .3rem;
    border: 1px solid #2a2a2a;
}

.form-container button{
    display: inline;
}

@media screen  and (max-width:850px){
    .form-container{
        margin: 4rem 2rem;
    }

    .form-container form{
        padding-top: 2rem;
        width: 90%;
    }
}
</style>