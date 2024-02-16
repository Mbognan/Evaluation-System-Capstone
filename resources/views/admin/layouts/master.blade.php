<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>Admin</title>
    <!-- GLOBAL MAINLY STYLES-->
    <link href="{{ asset('admin/assets/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/assets/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/assets/vendors/themify-icons/css/themify-icons.css') }}" rel="stylesheet" />
    <!-- PLUGINS STYLES-->
    <link href="{{ asset('admin/assets/vendors/jvectormap/jquery-jvectormap-2.0.3.css') }}" rel="stylesheet" />
    <!-- THEME STYLES-->
    <link href="{{ asset('admin/assets/css/main.min.css') }}" rel="stylesheet" />
    <!-- PAGE LEVEL STYLES-->
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
    <link href="{{ asset('admin/assets/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/assets/vendors/DataTables/datatables.min.css')}}" rel="stylesheet" />
    <link href="">
    <link href="">




{{--
    ---------------------------------------------------------------- --}}
        <link href="https://cdnjs.cloudflare.com/ajax/libs/fomantic-ui/2.9.2/semantic.min.css" rel="stylesheet">
        <link href="https://cdn.datatables.net/2.0.0/css/dataTables.semanticui.css" rel="stylesheet" />








        {{-- //foundation datatable --}}
    {{-- <link rel="stylesheet" href="https://cdn.datatables.net/2.0.0/css/dataTables.tailwindcss.css"> --}}
{{--
    @vite(['resources/js/app.js','resources/css/app.css']) --}}

</head>

<body class="fixed-navbar">
    <div class="page-wrapper">
        @include('admin.layouts.sidebar')
        <!-- START PAGE CONTENT-->
        <div class="content-wrapper">
            @yield('contents')


            <footer class="page-footer">
                <div class="font-13">2024<b> Admin</b> - All rights reserved.</div>

            </footer>
        </div>
    </div>



    <script src="{{ asset('admin/assets/vendors/jquery/dist/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/vendors/popper.js/dist/umd/popper.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/vendors/bootstrap/dist/js/bootstrap.min.js') }}" type="text/javascript"></script>

    <script src="{{ asset('admin/assets/vendors/jquery-slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
    <!-- PAGE LEVEL PLUGINS-->
    <script src="{{ asset('admin/assets/vendors/chart.js/dist/Chart.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/vendors/jvectormap/jquery-jvectormap-2.0.3.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/vendors/jvectormap/jquery-jvectormap-us-aea-en.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/vendors/metisMenu/dist/metisMenu.min.js') }}" type="text/javascript"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- CORE SCRIPTS-->
    <script src="{{ asset('admin/assets/js/app.min.js') }}" type="text/javascript"></script>
    <!-- PAGE LEVEL SCRIPTS-->
        <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>



    <script src=""></script>
    <script src=""></script>
    <script src=""></script>



    {{-- <script src="https://cdn.tailwindcss.com/"></script>
    <script src="https://cdn.datatables.net/2.0.0/js/dataTables.js"></script>
     <script src="https://cdn.datatables.net/2.0.0/js/dataTables.tailwindcss.js"></script> --}}





    <script src="https://cdnjs.cloudflare.com/ajax/libs/fomantic-ui/2.9.2/semantic.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.0/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.0/js/dataTables.semanticui.js"></script>
    <script src="https://cdn.datatables.net/2.0.0/js/dataTables.semanticui.js"></script>

    <script>
        @if ($errors->any())
         @foreach ($errors->all() as $error )
            toastr.error("{{ $error }}")
         @endforeach

        @endif


        $('body').on('click', '.delete-item', function(e) {
            e.preventDefault();
            let url = $(this).attr('href');

            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        method: 'DELETE',
                        url: url,
                        data: {
                            _token: "{{ csrf_token() }}"
                        },
                        success: function(response) {

                            if (response.status === 'success') {
                                Swal.fire(
                                    'Deleted!',
                                    response.message,
                                    'success'
                                );

                            } else if (response.status === 'error') {
                                Swal.fire(
                                    'Something wen\'t wrong!',
                                    response.message,
                                    'error'
                                );
                            }
                            window.location.reload();
                        },
                        error: function(xhr, status, error) {
                            console.log(error);
                        }
                    });
                }
            });
        });


    </script>

    @stack('scripts')


</body>
