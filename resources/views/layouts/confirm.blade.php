<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Confirm</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
        <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
        <!--        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">-->


        <!--For Plugins external css-->
        <link rel="stylesheet" href="{{ asset('assets/css/animate/animate.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/plugins.css') }}" />

        <!--Theme custom css -->
        <link rel="stylesheet" href="{{ asset('assets/css/style-order.css') }}">

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" />

        <script src="{{ asset('assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js') }}"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!--<div class='preloader'><div class='loaded'>&nbsp;</div></div>-->
        <header id="home" class="navbar-fixed-top">
            <div class="header_top_menu clearfix">  
                <div class="container">
                    <div class="row">   
                        <div class="col-md-10 col-md-offset-3 col-sm-12 text-right">
                            <div class="call_us_text">
                                <a href=""><i class="fa fa-clock-o"></i> Admin 24/7</a>
                                <a href=""><i class="fa fa-phone"></i>061 9876 5432</a>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-12">
                        </div>

                    </div>          
                </div>
            </div>

            <!-- End navbar-collapse-->

            <div class="main_menu_bg">
                <div class="container"> 
                    <div class="row">
                        <nav class="navbar navbar-default">
                            <div class="container-fluid">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                    <a class="navbar-brand our_logo" href="#"><img src="{{ asset('assets/images/3.png') }}" alt="" /></a>
                                </div>

                                
                            </div><!-- /.container-fluid -->
                        </nav>
                    </div>
                </div>
            </div>  
        </header> <!-- End Header Section -->

      


        <section id="features" class="features">
            <div class="slider_overlay">
                <div class="container">
                    <div class="row">
                        <div class="main_features_content_area text-center  wow fadeIn" data-wow-duration="3s">
                            <div class="col-md-12">
                                <div class="head_title text-center">
                                <h4>KONFIRMASI</h4>
                                </div>
                                <div class="konfirmasi">
                                <div class="single_pakeg_one text-right wow rotateInDownRight">
                                    <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-8">
                                <div class="single_pakeg_text" style="color: #000">
                                 
<table>
  <!--<tr>
    <th>tabel</th>
    <th>tanda</th>
    <th>Isi</th>
  </tr>-->
  <tr>
    <td>Nomor Order &nbsp</td>
    <td>: &nbsp</td>
    <td>{{$orders->id_order}}</td>
  </tr>
  <tr>
    <td>Nama &nbsp</td>
    <td>: &nbsp</td>
    <td>{{$orders->nama}}</td>
  </tr>
  <tr>
    <td>Alamat &nbsp</td>
    <td>: &nbsp</td>
    <td>{{$orders->alamat}}</td>
  </tr>
  <tr>
    <td>Nomor Telepon &nbsp</td>
    <td>: &nbsp</td>
    <td>{{$orders->no_telp}}</td>
  </tr>
  <tr>
    <td>Email &nbsp</td>
    <td>: &nbsp</td>
    <td>{{$orders->email}}</td>
  </tr>
  <tr>
    <td>Kode Pos &nbsp</td>
    <td>: &nbsp</td>
    <td>{{$orders->kode_pos}}</td>
  </tr>
</table>
<hr>
<table>
<tr>
    <th></th>
    <th></th>
    <th></th>
    <th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
    <th></th>
    <th></th>
    <th></th>
  </tr>
  <tr>
    <td>Jenis Sepatu &nbsp</td>
    <td>: &nbsp</td>
    <td>{{$orders->jenis_sepatu}}</td>
    <td></td>
    <td>Jenis Service 1 &nbsp</td>
    <td>: &nbsp</td>
    <td>{{$orders->service1}}</td>
  </tr>
  <tr>
    <td>Bahan Sepatu &nbsp</td>
    <td>: &nbsp</td>
    <td>{{$orders->jenis_bahan}}</td>
    <td></td>
    <td>Jenis Service 2 &nbsp</td>
    <td>: &nbsp</td>
    <td>{{$orders->service2}}</td>
  </tr>
  <tr>
    <td>Jumlah Sepatu &nbsp</td>
    <td>: &nbsp</td>
    <td>{{$orders->jumlah_sepatu}}</td>
    <td></td>
    <td>Jenis Service 3 &nbsp</td>
    <td>: &nbsp</td>
    <td>{{$orders->service3}}</td>
  </tr>
  <tr>
    <td>Warna &nbsp</td>
    <td>: &nbsp</td>
    <td>{{$orders->warna}}</td>
    <td></td>
    <td>Layanan Tambahan&nbsp</td>
    <td>: &nbsp</td>
    <td>{{$orders->layanan_tambahan}}&nbsp</td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td><strong>Total Bayar&nbsp</strong></td>
    <td><strong>: &nbsp</strong></td>
    <td>{{$orders->total_harga}}</td>
  </tr>
</table>
<br><br>
<a href='bayar'>
 <input type="submit" name="" class="btn-primary" value="Submit">
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
        </section>


        
        <div class="scrollup">
            <a href="#"><i class="fa fa-chevron-up"></i></a>
        </div>      


        <script src="{{ asset('assets/js/vendor/jquery-1.11.2.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery-easing/jquery.easing.1.3.js') }}"></script>
        <script src="{{ asset('assets/js/wow/wow.min.js') }}"></script>
        <script src="{{ asset('assets/js/plugins.js') }}"></script>
        <script src="{{ asset('assets/js/main.js') }}"></script>
    </body>
</html>

