<!DOCTYPE html>
<html>

<head>
    <!-- Meta-Information -->
    <title>@yield('title') | Admin Panel</title>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Vendor: Bootstrap 4 Stylesheets  -->
    <link rel="stylesheet" href="{{ asset('back/css/bootstrap.min.css') }}" type="text/css">

    <!-- Our Website CSS Styles -->
    <link rel="stylesheet" href="{{ asset('back/css/icons.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('back/css/main.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('back/css/responsive.css') }}" type="text/css">

    <link rel="icon" href="{{ asset('back/favicon.gif')}}" type="image/gif" sizes="16x16">

    <!-- Color Scheme -->
    <link rel="stylesheet" href="{{ asset('back/css/color-schemes/color.css') }}" type="text/css" title="color3">
    <link rel="alternate stylesheet" href="{{ asset('back/css/color-schemes/color1.css') }}" title="color1">
    <link rel="alternate stylesheet" href="{{ asset('back/css/color-schemes/color2.css') }}" title="color2">
    <link rel="alternate stylesheet" href="{{ asset('back/css/color-schemes/color4.css') }}" title="color4">
    <link rel="alternate stylesheet" href="{{ asset('back/css/color-schemes/color5.css') }}" title="color5">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css">
</head>

<body class="expand-data panel-data">

    <!-- Topbar -->
    @include('back.partials.topnav')
    <!-- End Topbar -->

    <!-- Side Header -->
    @include('back.partials.leftnav')
    <!-- End Side Header -->

    <!-- Panel Content -->
    @yield('content')
    <!-- End Panel Content -->
    <footer>
        <p>Copyright
            <a href="#" title="">KPHP Kapuas Hulu Selatan </a> 2018</p>
    </footer>

    <!-- Vendor: Javascripts -->
    <script src="{{ asset('back/js/jquery.min.js') }}" type="text/javascript"></script>
    <!-- Vendor: Followed by our custom Javascripts -->
    <script src="{{ asset('back/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('back/js/select2.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('back/js/slick.min.js') }}" type="text/javascript"></script>

    <!-- Our Website Javascripts -->
    <script src="{{ asset('back/js/isotope.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('back/js/isotope-int.js') }}" type="text/javascript"></script>
    <script src="{{ asset('back/js/jquery.counterup.js') }}" type="text/javascript"></script>
    <script src="{{ asset('back/js/waypoints.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('back/js/highcharts.js') }}" type="text/javascript"></script>
    <script src="{{ asset('back/js/exporting.js') }}" type="text/javascript"></script>
    <script src="{{ asset('back/js/highcharts-more.js') }}" type="text/javascript"></script>
    <script src="{{ asset('back/js/moment.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('back/js/jquery.circliful.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('back/js/fullcalendar.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('back/js/jquery.downCount.js') }}" type="text/javascript"></script>
    <script src="{{ asset('back/js/jquery.bootstrap-touchspin.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('back/js/jquery.formtowizard.js') }}" type="text/javascript"></script>
    <script src="{{ asset('back/js/form-validator.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('back/js/form-validator-lang-en.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('back/js/cropbox-min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('back/js/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('back/js/ion.rangeSlider.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('back/js/jquery.poptrox.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('back/js/styleswitcher.js') }}" type="text/javascript"></script>
    <script src="{{ asset('back/js/main.js') }}" type="text/javascript"></script>
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" charset="utf-8"></script>
    <script src="//cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js" charset="utf-8"></script>
    <script src="//cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js" charset="utf-8"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js" charset="utf-8"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js" charset="utf-8"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js" charset="utf-8"></script>
    <script src="//cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js" charset="utf-8"></script>
    <script src="//cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js" charset="utf-8"></script>
    

    <script type="text/javascript">
      $(document).ready( function () {
        var table = $('#myTable').DataTable({
          dom: 'Bfrtip',
          buttons: [
              'copy', 'csv', 'excel', 'pdf', 'print'
          ]
        });
        new $.fn.dataTable.Buttons( table, {
          buttons: [
            'copy', 'excel', 'pdf'
          ]
        } );

        
      } );

    </script>
</body>

</html>
