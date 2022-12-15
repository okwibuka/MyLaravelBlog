@extends('layout/app')

@section('content')
    

    {{-- <h1>{{$home}}</h1>
    <p>this is home page</p> --}}

    <div class="web-intro signUp-intro">
        <h1>Designed by <span class="highlight"> kwibuka </span> <br> 
            <span class="highlight"> &nbsp; &nbsp;
                with david </span></h1>
            <br><br>
        <h3><div class="web-intro-effect1" id="web"> Make your blog and enjoy......
            Start your blog today. </div><br>
        <span class="web-intro-effect2"> post as you need. averything</span><br>
        <span class="web-intro-effect3">is possible.</span>
        </h3>
        </div>

        {{-- ----------------------------------------}}

        <h3 class="worker-container-h3 mt-5">
           
            here are our coordinators: 
        </h3>
        <div class="worker-container">

        <div class="card" style="width: 18rem;">
            <img class="card-img-top card-image" src="{{url('/image/me.jpg')}}" alt="Card image cap">
            <div class="card-body">
                <cite> ☝🏻 
                _KWIBUKA olivier</cite>
            <blockquote> this is our first coordinator <br>
            with any problem you can contact <br>
        him and he will be available at any <br>
    time you can need him to help you.. </blockquote>
    <br>  <br>
    <span class="adress"><u>Address:</u> </span>
    <ul>
        <li>
            <span class="coordinator-address"> TEL:</span> 0781691699
        </li>
       <li>
        <span class="coordinator-address"> EMAIL:</span> okwibuka@gmail.com
       </li>
       <li>
        <span class="coordinator-address">RESIDENCE:</span> kigali 
       </li>
    </ul>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <img class="card-img-top card-image" src="{{url('/image/david.jpg')}}"  alt="Card image cap">
            <div class="card-body">
              <cite> ☝🏻 
                _IRADUKUNDA David</cite>
            <blockquote> this is our second coordinator <br>
            with any problem you can contact <br>
        him and he will be available at any <br>
    time you can need him to help you.. </blockquote>
    <br>  <br>
    <span class="adress"><u>Address:</u> </span>
    <ul>
        <li>
            <span class="coordinator-address"> TEL:</span> 0780186477
        </li>
       <li>
        <span class="coordinator-address"> EMAIL:</span> iradukundadav.com
       </li>
       <li>
        <span class="coordinator-address">RESIDENCE:</span> kigali 
       </li>
    </ul>
            </div>
          </div>

          <div class="card" style="width: 18rem;">
            <img class="card-img-top card-image" src="{{url('/image/tresor.jpg')}}" alt="Card image cap">
            <div class="card-body">
                <cite> ☝🏻 
                _MBONYIMFURA Tresor</cite>
            <blockquote> this is our third coordinator <br>
            with any problem you can contact <br>
        him and he will be available at any <br>
    time you can need him to help you.. </blockquote>
    <br>  <br>
    <span class="adress"><u>Address:</u> </span>
    <ul>
        <li>
            <span class="coordinator-address"> TEL:</span> 0788749260
        </li>
       <li>
        <span class="coordinator-address"> EMAIL:</span> tresorMbonyi.com
       </li>
       <li>
        <span class="coordinator-address">RESIDENCE:</span> kigali 
       </li>
    </ul>
            </div>
          </div>

        </div>

        {{-- -------------------------------------------------------------- --}}

        <div class="contained ">
            <div class="button-container">
                <div class="div-one">
                    <button class="button-one butn button-active" data-tab="1">
                       <span class="span">get client access</span> 
                    </button>
    
                </div>
                <div class="div-two">
                    <button class="button-two butn" data-tab="2">
                        <span class="span">get products access</span> 
                     </button>
    
                </div>
                <div class="div-three">
                    <button class="button-three butn " data-tab="3">
                        <span class="span">get services access</span> 
                     </button>
    
                </div>
            </div>
            <div class="item-container">
                <div class="item-1 item-active itm" >
                   <p>here we offer our clients different services <br>
                    that can be very liked on the market based <br>
                    on what they need more and more atttarctive <br>
                    to them 🚠🚟🚉🚊🏎🚍 </p> 
    
                </div>
                <div class="item-2 itm" >
                    <p>here we offer our producta freely by services <br>
                        tandnsd be very liked on the market based <br>
                        on what tffv need mode and sklkc atttftive <br>
                        🚘🚲🚛🚚🚑🚄🚉😶☺🙂🤗 </p>
    
                </div>
                <div class="item-3 itm" >
                    <p> ccjdc we offer our clients different servids <br>
                        xmmsdio can be very lon the market bs cnn cjc  <br>
                        on what they nGB more and mored attxcctive <br>
                        cmmd ckj 😍😘🥰🙄😚😁 </p>
    
                </div>
            </div>
        </div>

        {{-- ----------------------------------------------------------------------------- --}}

        <div class="footer" id="comment">
        
        
        <div class="copyright">
            <div class="end-nav">
            <ul>
                <li>
                    <a href="">
                    terms</a>
                </li>
                <li>
                    <a href="">
                    conditions
                </a>
                </li>
                <li>
                    <a href="">
                        news
                    </a>
                </li>
                <li>
                    <a href="">
                        about
                    </a>
                </li>
                <li>
                    <a href="">contacts</a>
                </li>
            </ul>
        </div>
        <div class="copyright-info">
            &copy; Copyright by
     
     <span>Olivier Kwibuka and Iradukunda David </span> at 
      kigali, 2022
     </p>
        </div>
        </div>
    </div> 



    

    @endsection