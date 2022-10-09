<html>
    <head>
        <style>
            .logo{
                width: 160px;
                cursor: pointer;
                animation:movedown 1s linear 1;
                animation-delay:1s;
                visibility:hidden;
                animation-fill-mode:forwards;
            }
            @keyframes movedown{
                0%{
                    transform:translateY(-100px);
                    visibility:visible;
                }
               100%{
                    transform:translateY(0);
                    visibility:visible;
                }
             
            }
            .scroll-to-section{
               
                animation:movedown 1s linear 1;
                animation-delay:2s;
                visibility:hidden;
                animation-fill-mode:forwards;
                    
                }
                .submenu{
               
                animation:movedown 1s linear 1;
                animation-delay:2s;
                visibility:hidden;
                animation-fill-mode:forwards;

                }
                .hi{
                animation:moveright 1s linear 1;
                animation-delay:3s;
                visibility:hidden;
                animation-fill-mode:forwards;
                    
                }
                @keyframes moveright{
                0%{
                    transform:translateX(-100px);
                    visibility:visible;
                }
               100%{
                    transform:translateX(0);
                    visibility:visible;
                }}
        </style>
    </head>
    <body>
        
           <!-- ***** Logo Start ***** -->
           <a href="index.html" class="logo">
                            <img src="assets/images/klassy-logo.png" align="klassy cafe html template">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#about">About</a></li>
                           	
                        <!-- 
                            <li class="submenu">
                                <a href="javascript:;">Drop Down</a>
                                <ul>
                                    <li><a href="#">Drop Down Page 1</a></li>
                                    <li><a href="#">Drop Down Page 2</a></li>
                                    <li><a href="#">Drop Down Page 3</a></li>
                                </ul>
                            </li>
                        -->
                            <li class="scroll-to-section"><a href="#menu">Menu</a></li>
                            <li class="scroll-to-section"><a href="#chefs">Chefs</a></li> 
                            <li class="submenu">
                                <a href="javascript:;">Features</a>
                                <ul>
                                    <li><a href="{{url('/parallax')}}">Features Page 1</a></li>
                                    <li><a href="{{url('/parallax')}}">Features Page 2</a></li>
                                    <li><a href="{{url('/parallax')}}">Features Page 3</a></li>
                                    <li><a href="{{url('/parallax')}}">Features Page 4</a></li>
                                </ul>
                            </li>
                            <!-- <li class=""><a rel="sponsored" href="https://templatemo.com" target="_blank">External URL</a></li> -->
                            <li class="scroll-to-section"><a href="{{url('/contact')}}">Contact-Us</a></li> 
                            <li>

                            @if (Route::has('login'))
     <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
         @auth
             <li><x-app-layout></x-app-layout>
</a></li>
         @else
         <li>   <a href="{{ route('login') }}" class="scroll-to-section">Log in</a></li>
             @if (Route::has('register'))
             <li>   <a href="{{ route('register') }}" class="scroll-to-section">Register</a></li>
             @endif
         @endauth
     </div>
 @endif
 </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div id="top" style=" height:700px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="left-content">
                        <div class="inner-content">
                            <h4 class="hi">KlassyCafe</h4>
                            <h6 class="hi">THE BEST EXPERIENCE</h6>
                            <div class="main-white-button scroll-to-section">
                                <a href="#reservation">Make A Reservation</a>
                            </div>
                        </div>
                    </div>
                </div>
                    
    </body>
</html>