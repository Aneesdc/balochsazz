    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>AdminLTE 3 | Dashboard 3</title>

        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="{{url ('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
        <link rel="stylesheet" href="{{ url ('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
        <link rel="stylesheet" href="{{ url ('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
        <link rel="stylesheet" href="{{ url ('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="{{url ('assets/plugins/fontawesome-free/css/all.min.css')}}">
        <!-- IonIcons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- summernote -->
        <link rel="stylesheet" href="{{ url ('assets/plugins/summernote/summernote-bs4.min.css')}}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{url ('assets/dist/css/adminlte.min.css')}}">
    </head>
    <!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->

    <body class="hold-transition sidebar-mini">
        <div class="wrapper">
            <!-- Navbar -->
            @include('layouts.navbar')
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            @include('layouts.sidebar')

            <!-- Content Wrapper. Contains page content -->
            @yield('content')
            <!-- /.content-wrapper -->
            @include('layouts.rightsidebar')

            <!-- Main Footer -->
            @include('layouts.footer')
        </div>
        <!-- ./wrapper -->

        <!-- REQUIRED SCRIPTS -->

        <!-- jQuery -->
        <script src="{{url ('assets/plugins/jquery/jquery.min.js')}}"></script>
        <!-- Bootstrap -->
        <script src="{{url ('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <!-- AdminLTE -->
        <script src="{{url ('assets/dist/js/adminlte.js')}}"></script>
        <!-- OPTIONAL SCRIPTS -->
        <!-- AdminLTE for demo purposes -->
        <script src="{{url ('assets/dist/js/demo.js')}}"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="{{url ('assets/dist/js/pages/dashboard3.js')}}"></script>
        <script src="{{url ('assets/plugins/pdfmake/pdfmake.min.js')}}"></script>
        <script src="{{url ('assets/plugins/pdfmake/vfs_fonts.js')}}"></script>
        <!-- DataTables  & Plugins -->
        <script src="{{url ('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{url ('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
        <script src="{{url ('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
        <script src="{{url ('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
        <script src="{{url ('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
        <script src="{{url ('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
        <script src="{{url ('assets/plugins/jszip/jszip.min.js')}}"></script>
        <script src="{{url ('assets/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
        <script src="{{url ('assets/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
        <script src="{{url ('assets/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
        <!-- Summernote -->
        <script src="{{url ('assets/plugins/summernote/summernote-bs4.min.js')}}"></script>
        <script>
            $(function() {
                $("#example1").DataTable({
                    "responsive": true,
                    "lengthChange": false,
                    "autoWidth": false,
                    "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
                }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
                $('#example2').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": false,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false,
                    "responsive": true,
                });
            });
        </script>
        <script>
            $(function() {
                // Summernote
                $('#summernote').summernote()

                // CodeMirror
                CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
                    mode: "htmlmixed",
                    theme: "monokai"
                });
            })
        </script>
    </body>

    </html>