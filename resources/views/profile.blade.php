@extends('layouts/basicHead')

@section('tittle')
   <title>Art Shop - Tienda</title>
@endsection

@section('content')
      <header id="header" class="top-head">
         <!-- Static navbar -->
         <nav class="navbar navbar-default">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-4 col-sm-12 left-rs">
                     <div class="navbar-header">
                        <a href="{{ url('/') }}" class="navbar-brand"><img src="../images/logo.png" alt="" /></a>
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
                                 <li><a href="{{ url('/') }}">Inicio</a></li>
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
      <div class="profile-box banner-p">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="profile-b">
                     <img src="../images/lag-63.png" alt="#" />
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="product-profile-box">
         <div class="container">
            <div class="row">
               <div class="col-md-10 col-sm-8">
                  <div class="profile-pro-right">
                     <div class="panel with-nav-tabs panel-default">
                        <div class="panel-heading clearfix">
                           <ul class="nav nav-tabs pull-right right-t">
                              <li class="dropdown">
                                 <a href="#" data-toggle="dropdown">Ordenar <span class="caret"></span></a>
                                 <ul class="dropdown-menu" role="menu">
                                    <li><a href="#tab4default" data-toggle="tab">Nombre</a></li>
                                    <li><a href="#tab4default" data-toggle="tab">Precio</a></li>
                                 </ul>
                              </li>
                           </ul>
                        </div>
                        <div class="panel-body">
                           <div class="tab-content">
                              <div class="tab-pane fade in active" id="tab1default">
                                 <div class="product-box-main row">
                                    <div class="col-md-4 col-sm-6">
                                       <div class="small-box-c">
                                          <div class="small-img-b">
                                             <img src="../images/tr1.png" alt="#" />
                                          </div>
                                          <div class="dit-t clearfix">
                                             <div class="left-ti">
                                                <h4>Product</h4>
                                                <p>Under <span>Sofa Corner</span></p>
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
                                    <div class="col-md-4 col-sm-6">
                                       <div class="small-box-c">
                                          <div class="small-img-b">
                                             <img src="../images/tr2.png" alt="#" />
                                          </div>
                                          <div class="dit-t clearfix">
                                             <div class="left-ti">
                                                <h4>Product</h4>
                                                <p>Under <span>Sofa Corner</span></p>
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
                                    <div class="col-md-4 col-sm-6">
                                       <div class="small-box-c">
                                          <div class="small-img-b">
                                             <img src="../images/tr3.png" alt="#" />
                                          </div>
                                          <div class="dit-t clearfix">
                                             <div class="left-ti">
                                                <h4>Product</h4>
                                                <p>Under <span>Sofa Corner</span></p>
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
                                    <div class="col-md-4 col-sm-6">
                                       <div class="small-box-c">
                                          <div class="small-img-b">
                                             <img src="../images/tr4.png" alt="#" />
                                          </div>
                                          <div class="dit-t clearfix">
                                             <div class="left-ti">
                                                <h4>Product</h4>
                                                <p>Under <span>Sofa Corner</span></p>
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
                                    <div class="col-md-4 col-sm-6">
                                       <div class="small-box-c">
                                          <div class="small-img-b">
                                             <img src="../images/tr1.png" alt="#" />
                                          </div>
                                          <div class="dit-t clearfix">
                                             <div class="left-ti">
                                                <h4>Product</h4>
                                                <p>Under <span>Sofa Corner</span></p>
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
                                    <div class="col-md-4 col-sm-6">
                                       <div class="small-box-c">
                                          <div class="small-img-b">
                                             <img src="../images/tr2.png" alt="#" />
                                          </div>
                                          <div class="dit-t clearfix">
                                             <div class="left-ti">
                                                <h4>Product</h4>
                                                <p>Under <span>Sofa Corner</span></p>
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
                                    <div class="col-md-4 col-sm-6">
                                       <div class="small-box-c">
                                          <div class="small-img-b">
                                             <img src="../images/tr3.png" alt="#" />
                                          </div>
                                          <div class="dit-t clearfix">
                                             <div class="left-ti">
                                                <h4>Product</h4>
                                                <p>Under <span>Sofa Corner</span></p>
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
                                    <div class="col-md-4 col-sm-6">
                                       <div class="small-box-c">
                                          <div class="small-img-b">
                                             <img src="../images/tr4.png" alt="#" />
                                          </div>
                                          <div class="dit-t clearfix">
                                             <div class="left-ti">
                                                <h4>Product</h4>
                                                <p>Under <span>Sofa Corner</span></p>
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
                                    <div class="col-md-4 col-sm-6">
                                       <div class="small-box-c">
                                          <div class="small-img-b">
                                             <img src="../images/tr1.png" alt="#" />
                                          </div>
                                          <div class="dit-t clearfix">
                                             <div class="left-ti">
                                                <h4>Product</h4>
                                                <p>Under <span>Sofa Corner</span></p>
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
                                    <div class="col-md-4 col-sm-6">
                                       <div class="small-box-c">
                                          <div class="small-img-b">
                                             <img src="../images/tr2.png" alt="#" />
                                          </div>
                                          <div class="dit-t clearfix">
                                             <div class="left-ti">
                                                <h4>Product</h4>
                                                <p>Under <span>Sofa Corner</span></p>
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
                                    <div class="col-md-4 col-sm-6">
                                       <div class="small-box-c">
                                          <div class="small-img-b">
                                             <img src="../images/tr3.png" alt="#" />
                                          </div>
                                          <div class="dit-t clearfix">
                                             <div class="left-ti">
                                                <h4>Product</h4>
                                                <p>Under <span>Sofa Corner</span></p>
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
                                    <div class="col-md-4 col-sm-6">
                                       <div class="small-box-c">
                                          <div class="small-img-b">
                                             <img src="../images/tr4.png" alt="#" />
                                          </div>
                                          <div class="dit-t clearfix">
                                             <div class="left-ti">
                                                <h4>Product</h4>
                                                <p>Under <span>Sofa Corner</span></p>
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
                                 <div class="loding-box">
                                    <a href="#">
                                       <div class="sk-wave">
                                          <div class="sk-rect sk-rect1"></div>
                                          <div class="sk-rect sk-rect2"></div>
                                          <div class="sk-rect sk-rect3"></div>
                                          <div class="sk-rect sk-rect4"></div>
                                          <div class="sk-rect sk-rect5"></div>
                                       </div>
                                       <span>Cargando mas productos...</span>
                                    </a>
                                 </div>
                              </div>
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
                        <h2>Registrate gratis!
                        </h2>
                     </div>
                     <div class="col-md-6 col-sm-6">
                        <div class="form-box">
                           <input type="text" placeholder="Enter yopur e-mail" />
                           <button>Continuar</button>
                        </div>
                     </div>
                     <div class="col-md-4 col-sm-12">
                        <div class="help-box-f">
                           <h4>Preguntas? envianos un correo ArtShop@Mail.com</h4>
                           <p>Facil de empezar - Cientos de artistas - Miles de obras</p>
                        </div>
                     </div>
                  </div>
                  <div class="footer-link-box clearfix">
                     <div class="col-md-6 col-sm-6">
                        <div class="left-f-box">
                           <div class="col-sm-4">
                              <h2>Vende tus obras con nosotros.</h2>
                              <ul>
                                 <li><a href="#">Crea una cuenta.</a></li>
                                 <li><a href="howitworks.html">How it works suppliers</a></li>
                                 <li><a href="pricing.html">Pricing</a></li>
                                 <li><a href="#">FAQ for Suppliers</a></li>
                              </ul>
                           </div>
                           <div class="col-sm-4">
                              <h2>Compra cuadros hermosos!</h2>
                              <ul>
                                 <li><a href="#">Crea una cuenta.</a></li>
                                 <li><a href="#">How it works buyers</a></li>
                                 <li><a href="#">Categories</a></li>
                                 <li><a href="#">FAQ for buyers</a></li>
                              </ul>
                           </div>
                           <div class="col-sm-4">
                              <h2>Art Shop</h2>
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
      <script src="../js/jquery-1.12.4.min.js"></script> 
      <!--bootstrap js--> 
      <script src="../js/bootstrap.min.js"></script> 
      <script src="../js/bootstrap-select.min.js"></script>
      <script src="../js/slick.min.js"></script> 
      <script src="../js/jquery-ui.js"></script> 
      <script src="../js/wow.min.js"></script> 
      <!--custom js--> 
      <script src="../js/custom.js"></script>
@endsection