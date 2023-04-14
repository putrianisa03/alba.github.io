<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>ALBA CAKE & BAKERY</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout inner_page">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#"/></div>
      </div>
      <!-- end loader -->
      <div class="full_bg">
         <!-- header -->
         <header class="header-area">
            <div class="container">
               <div class="row d_flex">
                  <div class=" col-md-3 col-sm-3">
                     <div class="logo">
                     <a href="<?=base_url('home');?>">Alba C & B</a>
                     </div>
                  </div>
                  <div class="col-md-9 col-sm-9">
                     <div class="navbar-area">
                        <nav class="site-navbar">
                        <ul>
                           <li><a href="<?=base_url('home');?>">Home</a></li>
                           <li><a href="<?=base_url('about');?>">About</a></li>
                           <li><a class="active" href="<?=base_url('service');?>">Service</a></li>
                           <li><a href="<?=base_url('blog');?>">Blog</a></li>
                           <li><a href="<?=base_url('contact');?>">Contact</a></li>
                           <li><a href="<?=base_url('login');?>">Login</a></li>
                              <li class="d_none"><a href="Javascript:void(0)"><i class="fa fa-user" aria-hidden="true"></i></a></li>
                              <li class="d_none"><a href="Javascript:void(0)"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                           </ul>
                           <button class="nav-toggler">
                           <span></span>
                           </button>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </header>
         <!-- end header inner -->
      </div>
      <!-- end banner -->
      <!-- appointment -->
      <div class="appointment">
         <div class="container">
            <div class="row">
               <div class="col-md-12 ">
                  <div class="titlepage text_align_center">
                     <h2>Make Appointment</h2>
                     <p>Kabari kami.. buat janji jika ingin menjadi reseller  di toko Alba Cake & Bakery</p>
                  </div>
               </div>
               <div class="col-md-12">
                  <form id="request" class="main_form">
                     <div class="row">
                        <div class="col-md-6 ">
                           <input class="form_control" placeholder="Nama Lengkap" type="type" name=" Name"> 
                        </div>
                        <div class="col-md-6">
                           <input class="form_control" placeholder="Email" type="type" name="Email"> 
                        </div>
                        <div class="col-md-6">
                           <input class="form_control" placeholder="Nomor Telefon" type="type" name="Phone Number">                          
                        </div>
                        <div class="col-md-6">
                           <input class="form_control" placeholder="Pilih pesan" type="type" name="Select">                          
                        </div>
                        <div class="col-md-6 ">
                           <input class="form_control" placeholder="Waktu" type="type" name=" Time"> 
                        </div>
                        <div class="col-md-6">
                           <input type="text" class="form_control" id="my_date_picker" placeholder="Pilih Tanggal" >
                        </div>
                        <div class="col-md-12">
                           <textarea style=" color: #d0d0cf;" class="textarea" placeholder="Message" type="type" name="message">Tulis Pesan </textarea>
                        </div>
                        <div class="col-md-12">
                           <button class="send_btn">Kirim Sekarang</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <!-- end appointment -->
      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-md-7">
                     <div class="row">
                        <div class="col-lg-6 col-md-12">
                           <div class="hedingh3 text_align_left">
                              <h3>Tentang Toko</h3>
                              <p> Menjual aneka kue dan roti dengan rasa yang lezat. Ada banyak varian roti dan rasa yang dapat anda pilih. Kami menerima pesanan kue dan roti yang dapat kami antarkan di tujuan anda. Selamat berkunjung dan selamat menikmati.</p>
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                           <div class="hedingh3 text_align_left">
                              <h3>Blog Terbaru</h3>
                              <p>Agenda terbaru dari Toko kami, Alba Cake & Bakery. Yukk simak ulasannya !!</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-5">
                     <div class="row">
                        <div class="col-lg-6 col-md-12">
                           <div class="hedingh3 text_align_left">
                              <h3>Menu</h3>
                              <ul class="menu_footer">
                              <li><a href="<?=base_url('home');?>">Home</a></li>
                           <li><a href="<?=base_url('about');?>">About</a></li>
                           <li><a class="active" href="<?=base_url('service');?>">Service</a></li>
                           <li><a href="<?=base_url('blog');?>">Blog</a></li>
                           <li><a href="<?=base_url('contact');?>">Contact</a></li>
                           <li><a href="<?=base_url('login');?>">Login</a></li>
                              </ul>
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                           <div class="hedingh3  text_align_left">
                              <h3>Berita Terbaru</h3>
                              <form id="colof" class="form_subscri">
                                 <input class="newsl" placeholder="Email" type="text" name="Email">
                                 <button class="subsci_btn">Subscribe</button>
                              </form>
                              <ul class="top_infomation">
                                 <li><i class="fa fa-phone" aria-hidden="true"></i>
                                    +62 853-3403-5980
                                 </li>
                                 <li><i class="fa fa-envelope" aria-hidden="true"></i>
                                    <a href="Javascript:void(0)">alba_cb@gmail.com</a>
                                 </li>
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
                     <div class="col-md-12">
                        <div class="follow text_align_center">
                           <h3>Follow Us</h3>
                           <ul class="social_icon ">
                              <li><a href="Javascript:void(0)"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                              <li><a href="Javascript:void(0)"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                              <li><a href="Javascript:void(0)"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                              <li><a href="Javascript:void(0)"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <p>© 2023 All Rights Reserved. Design by <a href="https://html.design/"> Putri Anisa - 21132409</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/owl.carousel.min.js"></script>
      <script src="js/bootstrap-datepicker.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>