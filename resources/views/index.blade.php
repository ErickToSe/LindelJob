@extends('layouts/basicHead')

@section('tittle')
   <title>Art Shop</title>
@endsection

@section('content')
      <header id="header" class="top-head">
         <!-- Static navbar -->
         <nav class="navbar navbar-default">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-4 col-sm-12 left-rs">
                     <div class="navbar-header">
                        <a href="{{ url('/') }}" class="navbar-brand"><img src="images/logo.png" alt="" /></a>
                     </div>
                  </div>
                  <div class="col-md-8 col-sm-12">
                     <div class="right-nav">
                        <div class="login-sr">
                           <div class="login-signup">
                              <ul>
                                 @if (Route::has('login'))
                                    @auth 
                                       <!--/.Requiere vista de perfil................................................................................................ --> 
                                       <li><a href="{{ url('/Perfil') }}" class="text-sm text-gray-700 underline">Mi perfil.</a></li>
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
                                 <li><a href="{{ url('/Tienda') }}">Tienda</a></li>
                                 <li><a href = "{{ url('/Sobre-Nosotros') }}">Sobre nosotros</a></li>
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
      <div class="page-content-product">
         <div class="main-product">
            <div class="container">
               <div class="row clearfix">
                  <div class="find-box">
                     <h1 style="color:#000" ><b>¡Encuentra facilmente los<br>cuadros que estas buscando!.</b></h1>
                     <h4 style="color:#000" ><b>Buscarlos nunca a sido tan sencillo...</b></h4>
                     <div class="product-sh">
                        <div class="col-sm-6">
                           <div class="form-sh">
                              <input type="text" placeholder="¡Aqui va tu busqueda!" >
                           </div>
                        </div>
                        <div class="col-sm-3">
                           <div class="form-sh">
                              <select class="selectpicker">
                                 <option>Barroco</option>
                                 <option>Cubismo</option>
                                 <option>Realismo</option>
                                 <option>Impresionismo</option>
                                 <option>Surrealismo</option>
                                 <option>Postimpresionismo</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-sm-3">
                           <div class="form-sh"> <a class="btn" href="#">Buscar</a> </div>
                        </div>
                        <p><b>¡O simplemente<a href="#">  HAS CLICK AQUI </a> para darte alguna idea ;</b></p>
                     </div>
                  </div>
               </div>
               <div class="row clearfix">
                  <div class="col-lg-3 col-sm-6 col-md-3">
                     <a href="productpage.html">
                        <div class="box-img">
                           <h4>Product</h4>
                           <img src="images/product/1.png" alt="" />
                        </div>
                     </a>
                  </div>
                  <div class="col-lg-3 col-sm-6 col-md-3">
                     <a href="productpage.html">
                        <div class="box-img">
                           <h4>Product</h4>
                           <img src="images/product/2.png" alt="" />
                        </div>
                     </a>
                  </div>
                  <div class="col-lg-3 col-sm-6 col-md-3">
                     <a href="productpage.html">
                        <div class="box-img">
                           <h4>Product</h4>
                           <img src="images/product/4.png" alt="" />
                        </div>
                     </a>
                  </div>
                  <div class="col-lg-3 col-sm-6 col-md-3">
                     <a href="productpage.html">
                        <div class="box-img">
                           <h4>Product</h4>
                           <img src="images/product/5.png" alt="" />
                        </div>
                     </a>
                  </div>
                  <div class="col-lg-3 col-sm-6 col-md-3">
                     <a href="productpage.html">
                        <div class="box-img">
                           <h4>Product</h4>
                           <img src="images/product/10.png" alt="" />
                        </div>
                     </a>
                  </div>
                  <div class="col-lg-3 col-sm-6 col-md-3">
                     <a href="productpage.html">
                        <div class="box-img">
                           <h4>Product</h4>
                           <img src="images/product/11.png" alt="" />
                        </div>
                     </a>
                  </div>
                  <div class="col-lg-3 col-sm-6 col-md-3">
                     <a href="productpage.html">
                        <div class="box-img">
                           <h4>Product</h4>
                           <img src="images/product/12.png" alt="" />
                        </div>
                     </a>
                  </div>
                  <div class="col-lg-3 col-sm-6 col-md-3">
                     <a href="productpage.html">
                        <div class="box-img">
                           <h4>Product</h4>
                           <img src="images/product/13.png" alt="" />
                        </div>
                     </a>
                  </div>
                  <div class="categories_link">
                     <a href="{{ url('/Categoria') }}">Adentrate en todas las categorias aqui</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="cat-main-box">
         <div class="container">
            <div class="row panel-row">
               <div class="col-md-4 col-sm-6 wow fadeIn" data-wow-delay="0.0s">
                  <div class="panel panel-default">
                     <div class="panel-body">
                        <img src="images/xpann-icon.jpg" class="icon-small" alt="">
                        <h4>Certificado</h4>
                        <p>¡La pagina con mejor reputacion 
                           en ventas de arte en linea!
                        </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                  <div class="panel panel-default">
                     <div class="panel-body">
                        <img src="images/create-icon.jpg" class="icon-small" alt="">
                        <h4>Productos de calidad</h4>
                        <p>Productos hechos con materiales amigables
                        al ambiente y resistentes.
                        </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6 wow fadeIn hidden-sm" data-wow-delay="0.4s">
                  <div class="panel panel-default">
                     <div class="panel-body">
                        <img src="images/get-icon.jpg" class="icon-small" alt="">
                        <h4>INSPIRATE!</h4>
                        <p>¡Encuentra el cuadro que mas te identifique!
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="products_exciting_box">
         <div class="container">
            <div class="row">
               <div class="col-md-6 col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                  <div class="exciting_box f_pd">
                     <img src="images/exciting_img-01.jpg" class="icon-small" alt="" />
                     <h4>Explora los <strong>facinantes</strong> cuadros hechos por la comunidad
                        y apoya su talento.
                     </h4>
                  </div>
               </div> 
               <div class="col-md-6 col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                  <div class="exciting_box l_pd">
                     <img src="images/exciting_img-02.jpg" class="icon-small" alt="" />
                     <h4><strong>Revisa los prouctos en venta</strong> y contacta al vendedor!.</h4>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="start-free-box">
         <div class="container">
            <div class="row">
               <div class="bg_img_right"><img src="images/bg_img1.png" alt="#" /></div>
               <div class="main-start-box">
                  <div class="container">
                     <div class="supplier clearfix">
                        <div class="col-md-5 col-sm-6">
                           <div class="left-supplier">
                              <h4>Comprador</h4>
                              <h2>Descubre y adquiere <br><span>nuevas piezas de arte</span></h2>
                              <p>Encuentra la pieza de arte que mas <br>
                                 se adecue a tu estilo y que mas te agrade <br>
                                 ¡Que esperas!
                              </p>
                              <a href="#">Crear cuenta</a>
                           </div>
                        </div>
                        <div class="col-md-7 col-sm-6">
                           <div class="right-supplier">
                              <img class="img-responsive" src="images/supplier-pc-img.png" alt="#" />
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="products">
         <div class="main-products">
            <h2>LO MAS VENDIDO</h2>
            <div class="product-slidr">
               <div class="slider">
                  <div>
                     <div class="prod-box">
                        <div class="prod-i">
                           <img src="images/tr1.png" alt="#" />
                        </div>
                        <div class="prod-dit clearfix">
                           <div class="dit-t clearfix">
                              <div class="left-ti">
                                 <h4>Table with Lights</h4>
                                 <p>By <span>Beko</span> under <span>Lights</span></p>
                              </div>
                              <a href="#">$1220</a>
                           </div>
                           <div class="dit-btn clearfix">
                              <a class="wis" href="#"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist </a>
                              <a class="thi" href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div>
                     <div class="prod-box">
                        <div class="prod-i">
                           <img src="images/tr2.png" alt="#" />
                        </div>
                        <div class="prod-dit clearfix">
                           <div class="dit-t clearfix">
                              <div class="left-ti">
                                 <h4>Treehouse Bed</h4>
                                 <p>By <span>Beko</span> under <span>Lights</span></p>
                              </div>
                              <a href="#">$1220</a>
                           </div>
                           <div class="dit-btn clearfix">
                              <a class="wis" href="#"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist </a>
                              <a class="thi" href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div>
                     <div class="prod-box">
                        <div class="prod-i">
                           <img src="images/tr3.png" alt="#" />
                        </div>
                        <div class="prod-dit clearfix">
                           <div class="dit-t clearfix">
                              <div class="left-ti">
                                 <h4>Wood Sofaplatform</h4>
                                 <p>By <span>Beko</span> under <span>Lights</span></p>
                              </div>
                              <a href="#">$1220</a>
                           </div>
                           <div class="dit-btn clearfix">
                              <a class="wis" href="#"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist </a>
                              <a class="thi" href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div>
                     <div class="prod-box">
                        <div class="prod-i">
                           <img src="images/tr4.png" alt="#" />
                        </div>
                        <div class="prod-dit clearfix">
                           <div class="dit-t clearfix">
                              <div class="left-ti">
                                 <h4>Wall Sticker</h4>
                                 <p>By <span>Beko</span> under <span>Lights</span></p>
                              </div>
                              <a href="#">$1220</a>
                           </div>
                           <div class="dit-btn clearfix">
                              <a class="wis" href="#"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist </a>
                              <a class="thi" href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div>
                     <div class="prod-box">
                        <div class="prod-i">
                           <img src="images/tr1.png" alt="#" />
                        </div>
                        <div class="prod-dit clearfix">
                           <div class="dit-t clearfix">
                              <div class="left-ti">
                                 <h4>Treehouse Bed</h4>
                                 <p>By <span>Beko</span> under <span>Lights</span></p>
                              </div>
                              <a href="#">$1220</a>
                           </div>
                           <div class="dit-btn clearfix">
                              <a class="wis" href="#"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist </a>
                              <a class="thi" href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div>
                     <div class="prod-box">
                        <div class="prod-i">
                           <img src="images/tr2.png" alt="#" />
                        </div>
                        <div class="prod-dit clearfix">
                           <div class="dit-t clearfix">
                              <div class="left-ti">
                                 <h4>Treehouse Bed</h4>
                                 <p>By <span>Beko</span> under <span>Lights</span></p>
                              </div>
                              <a href="#">$1220</a>
                           </div>
                           <div class="dit-btn clearfix">
                              <a class="wis" href="#"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist </a>
                              <a class="thi" href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div>
                     <div class="prod-box">
                        <div class="prod-i">
                           <img src="images/tr3.png" alt="#" />
                        </div>
                        <div class="prod-dit clearfix">
                           <div class="dit-t clearfix">
                              <div class="left-ti">
                                 <h4>Treehouse Bed</h4>
                                 <p>By <span>Beko</span> under <span>Lights</span></p>
                              </div>
                              <a href="#">$1220</a>
                           </div>
                           <div class="dit-btn clearfix">
                              <a class="wis" href="#"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist </a>
                              <a class="thi" href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>
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
                        <h2>¡Comienza tu cuenta
                           gratuita hoy!
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
                           <h4>¿Preguntas? Llamanos al numero xxx-xxx-xxxx para ayudarte</h4>
                           <p>Facil configuracion - no pagos de envio - muchos productos en venta</p>
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
                  </div>
               </div>
            </div>
         </div>
         <div class="copyright">
            <div class="container">
               <div class="row">
                  <div class="col-md-8">
                     <p><img width="90" src="images/logo.png" alt="#" style="margin-top: -5px;" /> Derechos reservados, Art Shop © 2021</p>
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