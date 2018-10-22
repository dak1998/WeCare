@extends('layouts.app')

@section('mainContent')
    <section id="showcase">
        <div class="container">
            <h1>Let's PayBack</h1>
            <p>It's time we save the families of ones who protected us.</p>
        </div>
    </section>

    <section id="newsletter">
        <div class="container">
            <h1>23,41,908 already donated by 91,458 citizens</h1>
            <form action="/martyrs">

                <button  class="button_1" type="submit">Contribute!</button>
            </form>
        </div>
    </section>

    <section id="boxes">
        <div class="container">
            <div class="box">
                <img src="images/logo_direct.png">
                <h3>No MiddleMan!</h3>
                <p>Your wishes and donations are directly send to hearts and bank accounts of martyr's families.</p>
            </div>
            <div class="box">
                <img src="images/logo_aibot.png">
                <h3>Connect Better!</h3>
                <p>Chat with our AI Bot to know better about us and how to use the portal.</p>
            </div>
            <div class="box">
                <img src="images/logo_track.png">
                <h3>Track your Donations!</h3>
                <p>Track all your donations and view others' donations too.</p>
            </div>
        </div>
    </section>

    <footer>
        <p>WeCare, Copyright &copy; 2018</p>
    </footer>
@endsection