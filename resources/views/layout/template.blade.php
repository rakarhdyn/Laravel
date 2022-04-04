@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Rave Tour</title>

    <!-- Custom fonts for this template-->
    <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/css/sb-admin-2.min.css" rel="stylesheet">

    <link href="/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="/dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/paket">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Paket</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/service">
                    <i class="fas fa-capsules"></i>
                    <span>Service</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/destinasi">
                    <i class="fas fa-file-signature"></i>
                    <span>Destinasi</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/galeri">
                    <i class="fas fa-file-signature"></i>
                    <span>Galeri</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/kontak">
                    <i class="fas fa-file-signature"></i>
                    <span>Contact Us</span></a>
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link" href="/about">
                    <i class="fas fa-file-signature"></i>
                    <span>About</span></a>
            </li> -->
            <li class="nav-item">
                <a class="nav-link" href="/pesan">
                    <i class="fas fa-file-signature"></i>
                    <span>Pesanan</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">

                    <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span></a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="img-profile rounded-circle" src="/img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/logout" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->


                @show

                @yield('footer')

                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Rave Tour 2021</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="login.html">Logout</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="/vendor/jquery/jquery.min.js"></script>
        <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="/js/sb-admin-2.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

        <script>
            $("#hari").change(function() {
                if ($(this).val() == "senin") {
                    $('#seninDiv').show();
                    $('#senin').attr('required', '');
                    $('#senin').attr('data-error', 'This field is required.');
                } else if ($(this).val() == "selasa") {
                    $('#selasaDiv').show();
                    $('#selasa').attr('required', '');
                    $('#selasa').attr('data-error', 'This field is required.');
                } else if ($(this).val() == "rabu") {
                    $('#rabuDiv').show();
                    $('#rabu').attr('required', '');
                    $('#rabu').attr('data-error', 'This field is required.');
                } else if ($(this).val() == "kamis") {
                    $('#kamisDiv').show();
                    $('#kamis').attr('required', '');
                    $('#kamis').attr('data-error', 'This field is required.');
                } else if ($(this).val() == "jumat") {
                    $('#jumatDiv').show();
                    $('#jumat').attr('required', '');
                    $('#jumat').attr('data-error', 'This field is required.');
                } else if ($(this).val() == "sabtu") {
                    $('#sabtuDiv').show();
                    $('#sabtu').attr('required', '');
                    $('#sabtu').attr('data-error', 'This field is required.');
                } else if ($(this).val() == "minggu") {
                    $('#mingguDiv').show();
                    $('#minggu').attr('required', '');
                    $('#minggu').attr('data-error', 'This field is required.');
                } else {
                    $('#seninDiv').hide();
                    $('#senin').removeAttr('required');
                    $('#senin').removeAttr('data-error');
                    $('#selasaDiv').hide();
                    $('#selasa').removeAttr('required');
                    $('#selasa').removeAttr('data-error');
                    $('#rabuDiv').hide();
                    $('#rabu').removeAttr('required');
                    $('#rabu').removeAttr('data-error');
                    $('#kamisDiv').hide();
                    $('#kamis').removeAttr('required');
                    $('#kamis').removeAttr('data-error');
                    $('#jumatDiv').hide();
                    $('#jumat').removeAttr('required');
                    $('#jumat').removeAttr('data-error');
                    $('#sabtuDiv').hide();
                    $('#sabtu').removeAttr('required');
                    $('#sabtu').removeAttr('data-error');
                    $('#mingguDiv').hide();
                    $('#minggu').removeAttr('required');
                    $('#minggu').removeAttr('data-error');
                }
            });
            $("#hari").trigger("change");
        </script>

        <script>
            function previewImg() {
                const fotodokter = document.querySelector('#fotodokter');
                const fotodokterLabel = document.querySelector('.custom-file-label');
                const imgPreview = document.querySelector('.img-preview');

                fotodokterLabel.textContent = fotodokter.files[0].name;

                const fileFotoDokter = new FileReader();
                fileFotoDokter.readAsDataURL(fotodokter.files[0]);

                fileFotoDokter.onload = function(e) {
                    imgPreview.src = e.target.result;
                }
            }
        </script>
        <script>
            $(function() {
                $('#only-number').on('keydown', '#number', function(e) {
                    -1 !== $
                        .inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) || /65|67|86|88/
                        .test(e.keyCode) && (!0 === e.ctrlKey || !0 === e.metaKey) ||
                        35 <= e.keyCode && 40 >= e.keyCode || (e.shiftKey || 48 > e.keyCode || 57 < e.keyCode) &&
                        (96 > e.keyCode || 105 < e.keyCode) && e.preventDefault()
                });
            })
        </script>
        <script>
            function previewImgObat() {
                const fotoobat = document.querySelector('#fotoobat');
                const fotoobatLabel = document.querySelector('.custom-file-label');
                const imgPreview = document.querySelector('.img-preview');

                fotoobatLabel.textContent = fotoobat.files[0].name;

                const fileFotoObat = new FileReader();
                fileFotoObat.readAsDataURL(fotoobat.files[0]);

                fileFotoObat.onload = function(e) {
                    imgPreview.src = e.target.result;
                }
            }
        </script>

        <!-- <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/i18n/id.js" type="text/javascript"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                $('#haripraktek').select2({
                    placeholder: "Pilih Hobi",
                    allowClear: true,
                    language: "id"
                });
            });
        </script> -->

</body>

</html>