<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>FormOrder</title>
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
        <link rel="stylesheet" href="{{ asset('assets/css/style-pesan.css') }}">

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

      
<!--ORDERS-->

        <section id="abouts" class="abouts">
            <div class="container">
    <div class="container">
        <div class="row">

            <div class="col-md-8 col-md-offset-2">
                <form role="form" action="{{url('order')}}" method="get">
                    {{csrf_field()}}
                    <!--<legend class="text-center">PESANAN</legend>-->
                    <div class="head_title text-center">
                    <h4>PESANAN</h4>
                    </div>
                    <br><br>
                    <fieldset>
                        <legend>1. Customer Info</legend>

                        <div class="form-group col-md-6">
                            <label>Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama">
                        </div>

                        <div class="form-group col-md-6">
                            <label>Nomor Telepon</label>
                            <input type="text" class="form-control" name="no_telp" id="" placeholder="Nomor Telepon">
                        </div>

                        <div class="form-group col-md-6">
                            <label>Alamat</label>
                            <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat">
                        </div>

                        <div class="form-group col-md-6">
                            <label>Email</label>
                            <input type="text" class="form-control" name="email" id="" placeholder="Email">
                        </div>

                        <div class="form-group col-md-6">
                            <label>Kode Pos</label>
                            <input type="text" class="form-control" name="kode_pos" id="kode_pos" placeholder="Kode pos">
                        </div>

                    </fieldset>
                        <br><br><br>

                    <fieldset>
                        <legend>2. Layanan Utama</legend>
                        <div class="form-group col-md-6">
                            <label>Jenis Sepatu</label>
                            <select class="form-control" name="jenis_sepatu" id="sepatu">
                                <option value="pilih jenis sepatu">Pilih jenis sepatu</option>
                                <option value="flatshoes">Flatshoes</option>
                                <option value="olahraga">Olahraga</option>
                                <option value="sneakers">Sneakers</option>
                                <option value="sepatu gunung">Sepatu gunung</option>
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label>Bahan Sepatu</label>
                            <select class="form-control" name="jenis_bahan" id="bahan">
                                <option value="pilih bahan sepatu">Pilih bahan sepatu</option>
                                <option value="canvas">Canvas</option>
                                <option value="kulit imitasi">Kulit imitasi</option>
                                <option value="kulit asli">Kulit asli</option>
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label>Jenis Service 1</label>
                            <select class="form-control" name="service1" id="service">
                                <option value="pilih jenis service">Pilih jenis service</option>
                                <option value="fast cleaning">Fast cleaning</option>
                                <option value="deep cleaning">Deep cleaning</option>
                                <option value="leather care">Leather care</option>
                                <option value="repair">Repair</option>
                                <option value="repaint">Repaint</option>
                                <option value="unyellowing and whitening">Unyellowing and Whitening</option>
                                <option value="just for her">Just for her</option>
                                <option value="waterproff action">Waterproff action</option>
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label>Pilih Warna</label>
                            <select class="form-control" name="warna" id="warna">
                                <option value="pilih jenis warna">Pilih jenis warna</option>
                                <option value="hitam">Hitam</option>
                                <option value="cokelat">Cokelat</option>
                                <option value="putih">Putih</option>
                                <option value="merah">Merah</option>
                                <option value="biru">Biru</option>
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label>Jenis Service 2</label>
                            <select class="form-control" name="service2" id="service">
                                <option value="pilih jenis service">Pilih jenis service</option>
                                <option value="fast cleaning">Fast cleaning</option>
                                <option value="deep cleaning">Deep cleaning</option>
                                <option value="leather care">Leather care</option>
                                <option value="repair">Repair</option>
                                <option value="repaint">Repaint</option>
                                <option value="unyellowing and whitening">Unyellowing and Whitening</option>
                                <option value="just for her">Just for her</option>
                                <option value="waterproff action">Waterproff action</option>
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label>Jumlah Sepatu</label>
                            <input type="text" class="form-control" name="jumlah_sepatu" id="jml_sepatu" placeholder="Jumlah sepatu">
                        </div>

                        <div class="form-group col-md-6">
                            <label>Jenis Service 3</label>
                            <select class="form-control" name="service3" id="service">
                                <option value="pilih jenis service">Pilih jenis service</option>
                                <option value="fast cleaning">Fast cleaning</option>
                                <option value="deep cleaning">Deep cleaning</option>
                                <option value="leather care">Leather care</option>
                                <option value="repair">Repair</option>
                                <option value="repaint">Repaint</option>
                                <option value="unyellowing and whitening">Unyellowing and Whitening</option>
                                <option value="just for her">Just for her</option>
                                <option value="waterproff action">Waterproff action</option>
                            </select>
                        </div>
                    </fieldset>
                    <br><br><br>

                    <fieldset>
                        <legend>3. Layanan Tambahan</legend>
                        <div class="form-group col-md-6">
                            <label>Pilih layanan tambahan</label>
                            <select class="form-control" name="layanan_tambahan" id="service">
                                <option value="pilih layanan tambahan">Pilih layanan tambahan</option>
                                <option value="layanan antar jemput">layanan antar jemput</option>
                                <option value="layanan antar saja">Layanan antar saja</option>
                                <option value="layanan jemput saja">Layanan jemput saja</option>
                            </select>
                        </div>
                    </fieldset>
                    <br><br>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="submit" name="" class="btn-primary" value="Submit"> 
                        </div>
                    </div>

                </form>
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

