@extends('layouts/basicHead')

@section('tittle')
   <title>Art Shop - Sobre Nosotros</title>
@endsection

@section('content')
      <header id="header" class="top-head">
         <!-- Static navbar -->
         <nav class="navbar navbar-default">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-4 col-sm-12 left-rs">
                     <div class="navbar-header">
                        <button type="button" id="top-menu" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false"> 
                        <span class="sr-only">Navegar</span> 
                        <span class="icon-bar"></span> 
                        <span class="icon-bar"></span> 
                        <span class="icon-bar"></span> 
                        </button>
                        <a href="{{ url('/') }}" class="navbar-brand"><img src="images/logo.png" alt="" /></a>
                     </div>
                     <form class="navbar-form navbar-left web-sh">
                        <div class="form">
                           <input type="text" class="form-control" placeholder="Search for products or companies">
                        </div>
                     </form>
                  </div>
                  <div class="col-md-8 col-sm-12">
                     <div class="right-nav">
                        <div class="login-sr">
                           <div class="login-signup">
                              <ul>
                                 @if (Route::has('login'))
                                    @auth 
                                       <!--/.Requiere vista de perfil................................................................................................ --> 
                                       <li><a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Mi perfil.</a></li>
                                    @else
                                       <li><a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a></li>
                                       @if (Route::has('register'))
                                          <li><a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline custom-b">Sing In</a></li>
                                       @endif
                                    @endauth
                                 @endif
                              </ul>
                           </div>
                        </div>
                        <div class="help-r hidden-xs">
                           <div class="help-box">
                              <ul>
                                 <li> <a href="#"><img class="h-i" src="images/help-icon.png" alt="" /> Ayuda </a> </li>
                              </ul>
                           </div>
                        </div>
                        <div class="nav-b hidden-xs">
                           <div class="nav-box">
                              <ul>
                                 <li><a href="howitworks.html">Como funciona.</a></li>
                                 <li><a href="about-us.html">Art Shop para artistas.</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!--/.container-fluid --> 
         </nav>
      </header>
      <!-- Modal -->
      <div id="sidebar" class="top-nav">
         <ul id="sidebar-nav" class="sidebar-nav">
            <li><a href="#">Ayuda</a></li>
            <li><a href="#">Como funciona</a></li>
            <li><a href="#">Art Shop para artistas.</a></li>
         </ul>
      </div>
      <div class="main-template-about">
         <div class="section-gradient">
            <div class="map"></div>
            <div class="container">
               <div class="row">
                  <div class="col-lg-8 col-lg-offset-2">
                     <div class="wow fadeIn" data-wow-delay="0.0s">
                        <h1>Expande tu negocio.
                           Inspirandote al exito.
                        </h1>
                        <p class="lead">En Art Shop queremos que expongas tu arte, encuentra los cuadros mas increibles, has dinero con tu talento y tus habilidades en pintura, vive de tus sueños y encuentra el arte mas maravilloso!
                           <br>
                           <br>
                           Registrate y encuentra la inspiración!
                        </p>
                     </div>
                     <div class="about-icons row">
                        <div class="col-xs-4 wow fadeIn" data-wow-delay="0.0s"><img src="images/about-icon-1.png" alt=""/></div>
                        <div class="col-xs-4 wow fadeIn" data-wow-delay="0.2s"><img src="images/about-icon-2.png" alt=""/></div>
                        <div class="col-xs-4 wow fadeIn" data-wow-delay="0.4s"><img src="images/about-icon-3.png" alt=""/></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="section do">
            <div class="blue-light"></div>
            <div class="container">
               <div class="row">
                  <div class="col-lg-8 col-lg-offset-2">
                     <div class="does-box">
                        <div class="panel-body">
                           <h2>Lo que hacemos en Art Shop.</h2>
                           <p>Art Shop es un espacio donde los artistas pueden exponer sus obras a la venta, nosotros nos encargamos de que los aficionados
                              del arte puedan encontrar sus pinturas, somos intermediarios entre los artistas y los aficionados al arte con una tarifa del 2% del costo
                              de cada pieza.
                           </p>
                           <p>Aqui en Art Shop no importa si eres un excelente conocedor del arte o un novato, aqui encontraras todo tipo de piezas de diferentes
                              artistas, encuentra ese cuadro perfecto para decorar tu comedor o esa pintora epica para adornar tu cabecera.
                        </div>
                        <img class="wow fadeIn" src="images/mac-about.png" alt="" />
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="seciton create">
            <div class="container">
               <div class="row">
                  <div class="col-lg-8 col-lg-offset-2">
                     <h2>Porque elegir Art Shop</h2>
                     <p>Art Shop cuenta con miles de compradores y artistas, unete a nosotros como artista y tus obras seran expuestas a miles a de compradores, 
                        unete como comprador y tendras a tu disposicion obras de miles de artistas.
                     </p>
                     <p>En Art Shop nos limitamos a ser intermediarios, no ponemos restricciones a tus obras ni al precio que decidas darles, buscamos crear un 
                        mercado completamente libre donde artistas y encuentren el equilibrio de mercado por si solos.
                     </p>
                  </div>
               </div>
            </div>
         </div>
         <div class="section account-box">
            <div class="blue-dark"></div>
            <div class="light-blue-grad"></div>
            <div class="container">
               <div class="row">
                  <div class="col-lg-8 col-lg-offset-2">
                     <div class="blue-form">
                        <h2>Registrate ahora.</h2>
                        <form class="form-inline">
                           <input type="email" placeholder="Enter your e-mail" />
                           <button type="submit" class="btn btn-primary">Continuar</button>
                        </form>
                        <p>Facil de usar - Miles de obras - Miles de compradores</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="section-white">
            <div class="container">
               <div class="row">
                  <div class="col-lg-8 col-lg-offset-2">
                     <h2>When, Who and Where?</h2>
                     <p>Chamb was born in 2014 and has steadily grown from the seed of an idea into a fully-fledged company that, with the power of the internet, employs people from every corner of the planet.</p>
                     <p>Chamb hails from the Bosporus strait straddling Istanbul. Taking cues from this continent and culture spanning city, we bring people and place together in new and unexpected ways. Chamb may have its roots firmly planted in Turkey, but gaze out across fertile lands of Europe and you’ll see its branches spreading a canopy of connection and possibility across the globe.</p>
                  </div>
                  <div class="col-lg-8 col-lg-offset-2 wow fadeIn" style="margin-bottom:15px;" data-wow-delay="0.2s">
                     <img class="img-responsive" src="images/lag-60.png" alt="" />
                  </div>
                  <div class="col-lg-8 col-lg-offset-2">
                     <p>Chamb is the brainchild of Bayram Filikci. Danish born with Turkish descent, like the famously business savvy Ottomans of old, Bayram has a flair for creativity and business growth hacking. And along with Chamb’s team, we all count ourselves as passionate entrepreneurs who live for the sole purpose of finding solutions to your problems.</p>
                     <p>After gaining much experience in building business from scratch and nurturing them to fruition, the team set its sights on creating a gateway that could help fledgling companies establish new relationships that will propel them forward to unrivalled riches.</p>
                  </div>
                  <div class="col-lg-8 col-lg-offset-2 wow fadeIn" style="margin-bottom:15px;" data-wow-delay="0.2s">
                     <img src="images/lag-61.png" alt="" />
                  </div>
                  <div class="col-lg-8 col-lg-offset-2">
                     <h2>The ball is now yours.</h2>
                     <p>Over the coming years, the way that business through the web works will change at a great level - and Chamb is the gamebreaker. Customers will expect options of where and how to buy: in-store or online, delivered or for pick-up. It’s an incredibly exciting time for this industry, and we’re going to be right at the centre of it.</p>
                     <p>So what are you waiting for? Sign up and create oppurtinities for your business.</p>
                  </div>
                  <div class="col-lg-8 col-lg-offset-2">
                     <div class="row">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                           <div class="rectange">
                              <h3 class="rectange_title">Career opportunities</h3>
                              <p class="rectange_text">We’re growing, and we’re looking for talented people who can make commerce better.</p>
                              <a href="" class="rectange_link">See open positions</a>
                           </div>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                           <div class="rectange">
                              <h3 class="rectange_title">Contact us</h3>
                              <p class="rectange_text">Have questions or any requests for us? Contact our team and we will get back to you.</p>
                              <a href="" class="rectange_link">Contact Chamb</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <footer>
         <div class="main-footer">
            <div class="container">
               <div class="row">
                  <div class="footer-top clearfix">
                     <div class="col-md-2 col-sm-6">
                        <h2>Start a free
                           account today
                        </h2>
                     </div>
                     <div class="col-md-6 col-sm-6">
                        <div class="form-box">
                           <input type="text" placeholder="Enter yopur e-mail" />
                           <button>Continue</button>
                        </div>
                     </div>
                     <div class="col-md-4 col-sm-12">
                        <div class="help-box-f">
                           <h4>Question? Call us on 12 34 56 78 for help</h4>
                           <p>Easy setup - no payment fees - up to 100 products for free</p>
                        </div>
                     </div>
                  </div>
                  <div class="footer-link-box clearfix">
                     <div class="col-md-6 col-sm-6">
                        <div class="left-f-box">
                           <div class="col-sm-4">
                              <h2>SELL ON chamb</h2>
                              <ul>
                                 <li><a href="#">Create account</a></li>
                                 <li><a href="howitworks.html">How it works suppliers</a></li>
                                 <li><a href="pricing.html">Pricing</a></li>
                                 <li><a href="#">FAQ for Suppliers</a></li>
                              </ul>
                           </div>
                           <div class="col-sm-4">
                              <h2>BUY ON chamb</h2>
                              <ul>
                                 <li><a href="#">Create account</a></li>
                                 <li><a href="#">How it works buyers</a></li>
                                 <li><a href="#">Categories</a></li>
                                 <li><a href="#">FAQ for buyers</a></li>
                              </ul>
                           </div>
                           <div class="col-sm-4">
                              <h2>COMPANY</h2>
                              <ul>
                                 <li><a href="about-us.html">About chamb</a></li>
                                 <li><a href="#">Contact us</a></li>
                                 <li><a href="#">Press</a></li>
                                 <li><a href="#">Careers</a></li>
                                 <li><a href="#">Terms of use</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6 col-sm-6">
                        <div class="right-f-box">
                           <h2>INDUSTRIES</h2>
                           <ul class="col-sm-4">
                              <li><a href="#">Textiles</a></li>
                              <li><a href="#">Furniture</a></li>
                              <li><a href="#">Leather</a></li>
                              <li><a href="#">Agriculture</a></li>
                              <li><a href="#">Food & drinks</a></li>
                           </ul>
                           <ul class="col-sm-4">
                              <li><a href="#">Office</a></li>
                              <li><a href="#">Decoratives</a></li>
                              <li><a href="#">Electronics</a></li>
                              <li><a href="#">Machines</a></li>
                              <li><a href="#">Building</a></li>
                           </ul>
                           <ul class="col-sm-4">
                              <li><a href="#">Cosmetics</a></li>
                              <li><a href="#">Health</a></li>
                              <li><a href="#">Jewelry</a></li>
                              <li><a href="#">See all here</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="copyright">
            <div class="container">
               <div class="row">
                  <div class="col-md-8">
                     <p><img width="90" src="images/logo.png" alt="#" style="margin-top: -5px;" /> All Rights Reserved. Art Shop © 2021</p>
                  </div>
                  <div class="col-md-4">
                     
                     <ul class="list-inline socials">
                        <li>
                           <a href="">
                           <i class="fa fa-facebook" aria-hidden="true"></i>
                           </a>
                        </li>
                        <li>
                           <a href="">
                           <i class="fa fa-twitter" aria-hidden="true"></i>
                           </a>
                        </li>
                        <li>
                           <a href="">
                           <i class="fa fa-instagram" aria-hidden="true"></i>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                           <i class="fa fa-linkedin" aria-hidden="true"></i>
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!--main js--> 
      <script src="js/jquery-1.12.4.min.js"></script> 
      <!--bootstrap js--> 
      <script src="js/bootstrap.min.js"></script> 
      <script src="js/bootstrap-select.min.js"></script>
      <script src="js/slick.min.js"></script> 
      <script src="js/wow.min.js"></script>
      <!--custom js--> 
      <script src="js/custom.js"></script>
@endsection