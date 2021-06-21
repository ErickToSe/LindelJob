@extends('layouts/basicHead')

@section('tittle')
   <title>Chamb - Responsive E-commerce HTML5 Template</title>
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
                        <span class="sr-only">Toggle navigation</span> 
                        <span class="icon-bar"></span> 
                        <span class="icon-bar"></span> 
                        <span class="icon-bar"></span> 
                        </button>
                        <a href="{{ url('/') }}" class="navbar-brand"><img src="../images/logo.png" alt="" /></a>
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
                                 <li><a href="#">Login</a></li>
                                 <li><a class="custom-b" href="#">Sign up</a></li>
                              </ul>
                           </div>
                        </div>
                        <div class="help-r hidden-xs">
                           <div class="help-box">
                              <ul>
                                 <li> <a href="#"><img class="h-i" src="../images/help-icon.png" alt="" /> Ayuda </a> </li>
                              </ul>
                           </div>
                        </div>
                        <div class="nav-b hidden-xs">
                           <div class="nav-box">
                              <ul>
                                 <li><a href="howitworks.html">Como trabajamos</a></li>
                                 <li><a href="{{ url('/Sobre-Nosotros') }}">Sobre nosotros</a></li>
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
      <div id="sidebar" class="top-nav">
         <ul id="sidebar-nav" class="sidebar-nav">
            <li><a href="#">Ayuda</a></li>
            <li><a href="#">How it works</a></li>
            <li><a href="#">Chamb for Business</a></li>
         </ul>
      </div>
      <div class="furniture-box">
         <div class="terms-title">
            <div class="container">
               <div class="row">
                  <ol class="breadcrumb">
                     <li><a href="#">Forntpage </a></li>
                     <li class="active">Furniture</li>
                  </ol>
               </div>
            </div>
         </div>
      </div>
      <div class="furniture-box">
         <div class="container">
            <div class="row">
               <div class="furniture-main">
                  <h2>Furniture</h2>
                  <div class="col-md-3 col-sm-4">
                     <div class="furniture-left">
                        <h3>Filtrar productos</h3>
                        <div class="by-com">
                           <h5>By company</h5>
                           <div class="list-b">
                              <div id="boxscroll">
                                 <div class="form-check">
                                    <input id="checkbox1" class="filled-in chk-col-blue" type="checkbox">
                                    <label for="checkbox1">
                                    Barroco
                                    </label>
                                 </div>
                                 <div class="form-check">
                                    <input id="checkbox2" class="filled-in chk-col-blue" type="checkbox">
                                    <label for="checkbox2">
                                    Cubismo
                                    </label>
                                 </div>
                                 <div class="form-check">
                                    <input id="checkbox3" class="filled-in chk-col-blue" type="checkbox">
                                    <label for="checkbox3">
                                    Realismo
                                    </label>
                                 </div>
                                 <div class="form-check">
                                    <input id="checkbox4" class="filled-in chk-col-blue" type="checkbox">
                                    <label for="checkbox4">
                                    Impresionismo
                                    </label>
                                 </div>
                                 <div class="form-check">
                                    <input id="checkbox5" class="filled-in chk-col-blue" type="checkbox">
                                    <label for="checkbox5">
                                    Surrealismo
                                    </label>
                                 </div>
                                 <div class="form-check">
                                    <input id="checkbox6" class="filled-in chk-col-blue" type="checkbox">
                                    <label for="checkbox6">
                                    Postimpresionismo
                                    </label>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6 col-sm-8">
                     <div class="furniture-middle">
                        <div class="big-box">
                           <div class="big-img-box">
                              <img src="../images/lag-60.png" alt="#" />
                           </div>
                           <div class="big-dit-b clearfix">
                              <div class="col-md-6">
                                 <div class="left-big">
                                    <h3>Etiam sit amet urna semper, auctor arcu id</h3>
                                    <p>By <span>Kale Celik Esya</span> under <span>Chairs</span></p>
                                    <div class="prod-btn">
                                       <a href="#"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist</a>
                                       <a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>
                                       <p>23 likes</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="right-big-b">
                                    <div class="tight-btn-b clearfix">
                                       <a class="view-btn" href="#">View</a>
                                       <a href="#">$320</a>
                                    </div>
                                    <div class="like-list">
                                       <ul>
                                          <li>
                                             <div class="im-b"><img class="" src="../images/list-img-01.png" alt="" /></div>
                                          </li>
                                          <li>
                                             <div class="im-b"><img src="../images/list-img-02.png" alt="" /></div>
                                          </li>
                                          <li>
                                             <div class="im-b"><img src="../images/list-img-03.png" alt="" /></div>
                                          </li>
                                          <li>
                                             <div class="im-b"><img src="../images/list-img-04.png" alt="" /></div>
                                          </li>
                                          <li>
                                             <div class="im-b"><img src="../images/list-img-05.png" alt="" /></div>
                                          </li>
                                          <li>
                                             <div class="im-b"><img src="../images/list-img-06.png" alt="" /></div>
                                          </li>
                                          <li>
                                             <div class="im-b"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></div>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="row cat-pd">
                           <div class="col-md-6 col-sm-6">
                              <div class="small-box-c">
                                 <div class="small-img-b">
                                    <img src="../images/tr1.png" alt="#" />
                                 </div>
                                 <div class="dit-t clearfix">
                                    <div class="left-ti">
                                       <h4>Aenean luctus lacus</h4>
                                       <p>By <span>Beko</span> under <span>Lights</span></p>
                                    </div>
                                    <a href="#" tabindex="0">$1220</a>
                                 </div>
                                 <div class="prod-btn">
                                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist</a>
                                    <a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>
                                    <p>23 likes</p>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6 col-sm-6">
                              <div class="small-box-c">
                                 <div class="small-img-b">
                                    <img src="../images/tr2.png" alt="#" />
                                 </div>
                                 <div class="dit-t clearfix">
                                    <div class="left-ti">
                                       <h4>Sed vestibulum</h4>
                                       <p>By <span>Beko</span> under <span>Chairs</span></p>
                                    </div>
                                    <a href="#" tabindex="0">$1220</a>
                                 </div>
                                 <div class="prod-btn">
                                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist</a>
                                    <a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>
                                    <p>23 likes</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="big-box">
                           <div class="big-img-box">
                              <img src="../images/lag-61.png" alt="" />
                           </div>
                           <div class="big-dit-b clearfix">
                              <div class="col-md-6">
                                 <div class="left-big">
                                    <h3>Aenean luctus lacus</h3>
                                    <p>By <span>Kale Celik Esya</span> under <span>Chairs</span></p>
                                    <div class="prod-btn">
                                       <a href="#"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist</a>
                                       <a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>
                                       <p>23 likes</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="right-big-b">
                                    <div class="tight-btn-b clearfix">
                                       <a class="view-btn" href="#">View</a>
                                       <a href="#">$320</a>
                                    </div>
                                    <div class="like-list">
                                       <ul>
                                          <li>
                                             <div class="im-b"><img class="" src="../images/list-img-01.png" alt="" /></div>
                                          </li>
                                          <li>
                                             <div class="im-b"><img src="../images/list-img-02.png" alt="" /></div>
                                          </li>
                                          <li>
                                             <div class="im-b"><img src="../images/list-img-03.png" alt="" /></div>
                                          </li>
                                          <li>
                                             <div class="im-b"><img src="../images/list-img-04.png" alt="" /></div>
                                          </li>
                                          <li>
                                             <div class="im-b"><img src="../images/list-img-05.png" alt="" /></div>
                                          </li>
                                          <li>
                                             <div class="im-b"><img src="../images/list-img-06.png" alt="" /></div>
                                          </li>
                                          <li>
                                             <div class="im-b"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></div>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="row cat-pd">
                           <div class="col-md-6 col-sm-6">
                              <div class="small-box-c">
                                 <div class="small-img-b">
                                    <img src="../images/tr3.png" alt="#" />
                                 </div>
                                 <div class="dit-t clearfix">
                                    <div class="left-ti">
                                       <h4>Sed vestibulum</h4>
                                       <p>By <span>Beko</span> under <span>Lights</span></p>
                                    </div>
                                    <a href="#" tabindex="0">$1220</a>
                                 </div>
                                 <div class="prod-btn">
                                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist</a>
                                    <a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>
                                    <p>23 likes</p>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6 col-sm-6">
                              <div class="small-box-c">
                                 <div class="small-img-b">
                                    <img src="../images/tr4.png" alt="#" />
                                 </div>
                                 <div class="dit-t clearfix">
                                    <div class="left-ti">
                                       <h4>Aenean luctus lacus</h4>
                                       <p>By <span>Beko</span> under <span>Chairs</span></p>
                                    </div>
                                    <a href="#" tabindex="0">$1220</a>
                                 </div>
                                 <div class="prod-btn">
                                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist</a>
                                    <a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>
                                    <p>23 likes</p>
                                    <p>23 likes</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-3 hidden-xs">
                     <div class="furniture-right">
                        <h3>Subcategories</h3>
                        <div class="right-list-f">
                           <ul>
                              <li><a href="#"><img width="32" src="../images/product/1.png" alt="#" /> Chairs</a></li>
                              <li><a href="#"><img width="32" src="../images/product/2.png" alt="#" /> Office chairs</a></li>
                              <li><a href="#"><img width="32" src="../images/product/1.png" alt="" /> Special chairs</a></li>
                              <li><a href="#"><img width="32" src="../images/product/4.png" alt="" /> Living room</a></li>
                              <li><a href="#"><img width="32" src="../images/product/5.png" alt="" /> Room furniture</a></li>
                              <li><a href="#"><img width="32" src="../images/product/2.png" alt="" /> Tv Furniture</a></li>
                              <li><a href="#"><img width="32" src="../images/product/11.png" alt="" /> Office Chairs</a></li>
                              <li><a href="#"><img width="32" src="../images/product/10.png" alt="" /> Special lights</a></li>
                              <li><a href="#"><img width="32" src="../images/product/4.png" alt="" /> Home office</a></li>
                              <li><a href="#"><img width="32" src="../images/product/10.png" alt="" /> Kids furniture</a></li>
                              <li><a href="#"><img width="32" src="../images/product/11.png" alt="" /> Accessories</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="loding-box">
                     <a href="#">
                        <div class="sk-wave">
                           <div class="sk-rect sk-rect1"></div>
                           <div class="sk-rect sk-rect2"></div>
                           <div class="sk-rect sk-rect3"></div>
                           <div class="sk-rect sk-rect4"></div>
                           <div class="sk-rect sk-rect5"></div>
                        </div>
                        <span>Loding more awesome products...</span>
                     </a>
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
                           <input type="text" placeholder="Ingresa tu email" />
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
                     <p><img width="90" src="../images/logo.png" alt="#" style="margin-top: -5px;" /> All Rights Reserved. Company Name © 2018</p>
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
                     <ul class="right-flag">
                        <li><a href="#"><img src="../images/flag.png" alt="" /> <span>Change</span></a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!--main js--> 
      <script src="../js/jquery-1.12.4.min.js"></script> 
      <!--bootstrap js--> 
      <script src="../js/bootstrap.min.js"></script> 
      <script src="../js/bootstrap-select.min.js"></script>
      <script src="../js/slick.min.js"></script> 
      <script src="../js/jquery-ui.js"></script> 
      <script src="../js/wow.min.js"></script>
      <!--custom js--> 
      <script src="../js/custom.js"></script>
      <script>
         $( function() {
         	$( "#slider-range" ).slider({
         		range: true,
         		min: 0,
         		max: 2000,
         		values: [ 158, 1230 ],
         		slide: function( event, ui ) {
         			$( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
         		}
         	});
         	$( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
         		" - $" + $( "#slider-range" ).slider( "values", 1 ) );
         } );
      </script>
      <script src="../js/jquery.nicescroll.min.js"></script> 
      <script>
         $(document).ready(function() {
           $("#boxscroll").niceScroll({cursorborder:"",cursorcolor:"#ededed",boxzoom:true}); // First scrollable DIV
         });
      </script>
@endsection