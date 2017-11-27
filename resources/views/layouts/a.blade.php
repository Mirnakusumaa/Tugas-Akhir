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
<table id="table_admins" class="table table-bordered table-striped">
<thead>
<tr>
<th>Number</th>
<th>Name</th>
<th>Email</th>
<th>Job Title</th>
<th width="280px">Action</th>
</tr>
</thead>
<tbody>
@foreach ($orders as $key => $admin)
<tr>
<td>{{ $admin->id_order }}</td>
<td>{{ $admin->email }}</td>
<td>{{ $admin->nama }}</td>
@endforeach
</tbody>
</table>
{!! $orders->render() !!}
</body>
</html>
