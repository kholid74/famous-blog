<!DOCTYPE html>

<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>CMS Famous ID Test</title>
    <!-- Icons-->
    <link rel="icon" type="image/ico" href="./img/favicon.ico" sizes="any" />
    <link href="https://coreui.io/demo/vendors/@coreui/icons/css/coreui-icons.min.css" rel="stylesheet">
    <link href="https://coreui.io/demo/vendors/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
    <link href="https://coreui.io/demo/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://coreui.io/demo/vendors/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <!-- Main styles for this application-->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet">
    <link href="https://coreui.io/demo/vendors/pace-progress/css/pace.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://coreui.io/demo/vendors/datatables.net-bs4/css/dataTables.bootstrap4.css">
    <!-- Global site tag (gtag.js) - Google Analytics-->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      // Shared ID
      gtag('config', 'UA-118965717-3');
      // Bootstrap ID
      gtag('config', 'UA-118965717-5');
    </script>
  </head>

  <body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
    @extends('admin.layouts.header')

 <div class="app-body">

    @extends('admin.layouts.sidebar')

 <main class="main">
       
@yield('content')

</main>

</div>

@extends('admin.layouts.footer')

 <!-- CoreUI and necessary plugins-->
    <script src="https://coreui.io/demo/vendors/jquery/js/jquery.min.js"></script>
    <script src="https://coreui.io/demo/vendors/popper.js/js/popper.min.js"></script>
    <script src="https://coreui.io/demo/vendors/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://coreui.io/demo/vendors/pace-progress/js/pace.min.js"></script>
    <script src="https://coreui.io/demo/vendors/perfect-scrollbar/js/perfect-scrollbar.min.js"></script>
    <script src="https://coreui.io/demo/vendors/@coreui/coreui-pro/js/coreui.min.js"></script>
    <script src="{{ asset('admin/js/main.js') }}"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" class="view-script"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js" class="view-script"></script>
    <script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
          $('#example').DataTable();
      } );
    </script>
    <script>
            CKEDITOR.replace( 'content' );
    </script>
  </body>
</html>