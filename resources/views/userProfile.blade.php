@extends('layouts/basicHead')

@section('tittle')
   <title>Art Shop - Mi perfil</title>
@endsection

@section('content')
      <header id="header" class="top-head">
         <!-- Static navbar -->
         <nav class="navbar navbar-default">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-8 col-sm-12">
                     <div class="right-nav">
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
                                 <li><a href="{{ url('/') }}">Inicio</a></li>
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
               <div class="col-md-2 col-sm-4 pr">
                  <div class="profile-pro-left">
                     <div class="left-profile-box-m">
                        <div class="pro-img">
                           <img src="../images/150x150.png" alt="#" />
                        </div>
                        <div class="pof-text">
                           <h3>Morgan Mobilya</h3>
                           <div class="check-box"></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <footer>
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