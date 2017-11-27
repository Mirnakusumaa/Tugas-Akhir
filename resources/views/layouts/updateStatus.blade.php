<!doctype html>
<html lang="en"><head>
    <meta charset="utf-8">
    <title>Bootstrap Admin</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/lib/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/lib/font-awesome/css/font-awesome.css') }}">

    <script src="{{ asset('admin/lib/jquery-1.11.1.min.js" type="text/javascript') }}"></script>

    

    <link rel="stylesheet" type="text/css" href="{{ asset('admin/stylesheets/theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/stylesheets/premium.css') }}">

</head>
<body class=" theme-blue">

    <!-- Demo page code -->

    <script type="text/javascript">
        $(function() {
            var match = document.cookie.match(new RegExp('color=([^;]+)'));
            if(match) var color = match[1];
            if(color) {
                $('body').removeClass(function (index, css) {
                    return (css.match (/\btheme-\S+/g) || []).join(' ')
                })
                $('body').addClass('theme-' + color);
            }

            $('[data-popover="true"]').popover({html: true});
            
        });
    </script>
    <style type="text/css">
        #line-chart {
            height:300px;
            width:800px;
            margin: 0px auto;
            margin-top: 1em;
        }
        .navbar-default .navbar-brand, .navbar-default .navbar-brand:hover { 
            color: #fff;
        }
    </style>

    <script type="text/javascript">
        $(function() {
            var uls = $('.sidebar-nav > ul > *').clone();
            uls.addClass('visible-xs');
            $('#main-menu').append(uls.clone());
        });
    </script>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="../assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
  

  <!--[if lt IE 7 ]> <body class="ie ie6"> <![endif]-->
  <!--[if IE 7 ]> <body class="ie ie7 "> <![endif]-->
  <!--[if IE 8 ]> <body class="ie ie8 "> <![endif]-->
  <!--[if IE 9 ]> <body class="ie ie9 "> <![endif]-->
  <!--[if (gt IE 9)|!(IE)]><!--> 
   
  <!--<![endif]-->

     <div class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="" href='admins'><span class="navbar-brand">Andrrows and Care</span></a></div>

        <div class="navbar-collapse collapse" style="height: 1px;">
          <ul id="main-menu" class="nav navbar-nav navbar-right">
            <li class="dropdown hidden-xs">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <span class="glyphicon glyphicon-user padding-right-small" style="position:relative;top: 3px;"></span>Admin
                    <i class="fa fa-caret-down"></i>
                </a>

              <ul class="dropdown-menu">
                <li class="divider"></li>
                <li><a tabindex="-1" href='andrrows'>Logout</a></li>
              </ul>
            </li>
          </ul>

        </div>
      </div>
    </div>
    

    <div class="sidebar-nav">
    <ul>
    <li><a href="#" data-target=".dashboard-menu" class="nav-header" data-toggle="collapse"><i class="fa fa-fw fa-dashboard"></i> Dashboard<i class="fa fa-collapse"></i></a></li>
    <li><ul class="dashboard-menu nav nav-list collapse in">
            <li><a href='admins'><span class="fa fa-caret-right"></span>Customers</a></li>
            <li ><a href=orderAdmin><span class="fa fa-caret-right"></span>Orders</a></li>
            <li class="active"><a href=updateStatus><span class="fa fa-caret-right"></span>Update Status</a></li>

    </div>

    <div class="content">
        <div class="header">
            
            <h1 class="page-title">Update Status</h1>
                    <ul class="breadcrumb">
            <li><a href="index.html">Home</a> </li>
            <li><a href="users.html">Update Status</a> </li>
            
        </ul>

        </div>
        <div class="main-content">
            
<ul class="nav nav-tabs">
  <li class="active"><a href="#home" data-toggle="tab">Update</a></li>

</ul>

<div class="row">
  <div class="col-md-4">
    <br>
    <div id="myTabContent" class="tab-content">
      <div class="tab-pane active in" id="home">
      <form id="tab">
        <div class="form-group">
<table>
  
  <tr>
    <td>Id Order &nbsp</td>
    <td>:</td>
    <td></td>
  </tr>
  <tr>
    <td>Id User &nbsp</td>
    <td>:</td>
    <td></td>
  </tr>
  <tr>
    <td>Nama &nbsp</td>
    <td>:</td>
    <td></td>
  </tr>
  <tr>
    <td>Alamat &nbsp</td>
    <td>:</td>
    <td></td>
  </tr>
  <tr>
    <td>No Telepon &nbsp</td>
    <td>:</td>
    <td></td>
  </tr>
  <tr>
    <td>Email &nbsp</td>
    <td>:</td>
    <td></td>
  </tr>
  <tr>
    <td>Kode Pos &nbsp</td>
    <td>:</td>
    <td></td>
  </tr>
  <tr>
    <td>Jenis Sepatu &nbsp</td>
    <td>:</td>
    <td></td>
  </tr>
  <tr>
    <td>Jenis Bahan &nbsp</td>
    <td>:</td>
    <td></td>
  </tr>
  <tr>
    <td>Service 1 &nbsp</td>
    <td>:</td>
    <td></td>
  </tr>
  <tr>
    <td>Service 2 &nbsp</td>
    <td>:</td>
    <td></td>
  </tr>
  <tr>
    <td>Service 3 &nbsp</td>
    <td>:</td>
    <td></td>
  </tr>

  <tr>
    <td>Warna &nbsp</td>
    <td>:</td>
    <td></td>
  </tr>
  <tr>
    <td>Jumlah Sepatu &nbsp</td>
    <td>:</td>
    <td></td>
  </tr>
  <tr>
    <td>Layanan Tambahan &nbsp</td>
    <td>:</td>
    <td></td>
  </tr>
</table>
        </div>

        <div class="form-group">
            <label>Status</label>
            <select name="DropDownTimezone" id="DropDownTimezone" class="form-control">
              <option value="-9.0">Belum Di Bayar</option>
              <option value="-9.0">Sudah Di Bayar</option>
              <option value="-12.0">Sedang Di Proses</option>
              <option value="-11.0">Selesai Di Proses</option>
              <option value="-10.0">Sudah Di Ambil</option>
            </select>
          </div>
        </form>
      </div>

      <div class="tab-pane fade" id="profile">

        <form id="tab2">
          <div class="form-group">
            <label>New Password</label>
            <input type="password" class="form-control">
          </div>
          <div>
              <button class="btn btn-primary">Update</button>
          </div>
        </form>
      </div>
    </div>

    <div class="btn-toolbar list-toolbar">
      <button class="btn btn-primary"><i class="fa fa-save"></i> Save</button>

    </div>
  </div>
</div>


            <footer>
                <hr>

                <!-- Purchase a site license to remove this link from the footer: http://www.portnine.com/bootstrap-themes -->
                <p class="pull-right"><a href="http://www.portnine.com/bootstrap-themes" target="_blank">Andrrows and Care</p>
                <p>© 2016</p>
            </footer>
        </div>
    </div>


    <script src="{{ asset('admin/lib/bootstrap/js/bootstrap.js') }}"></script>
    <script type="text/javascript">
        $("[rel=tooltip]").tooltip();
        $(function() {
            $('.demo-cancel-click').click(function(){return false;});
        });
    </script>
    
  
</body></html>
