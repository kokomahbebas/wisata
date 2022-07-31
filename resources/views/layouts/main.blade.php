<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Wiasata Fatubraon</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"
        integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link
        href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="/assets/css/styles.css" rel="stylesheet" />
</head>

<body>
    <header>
        <h1 class="site-heading text-center text-faded d-none d-lg-block">
            <span class="site-heading-upper text-primary mb-3">WISATA FATUBRAON</span>
            <span class="site-heading-lower">KABUPATEN KUPANG</span>
        </h1>
    </header>

    @include('partials.navbar')
    @yield('isi')

    <footer class="footer text-faded text-center py-5">
        <div class="container">
            <p class="m-0 small">Copyright &copy; Fatubraon</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="/assets/js/scripts.js"></script>

    <!-- LOGIN MODAL -->
    <div class="modal fade" id="login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xs modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-body text-center py-5">
                    <div class="mb-3">
                        <h3>Wisata Fatubraon</h3>
                        <h6>Silahkan Login</h5>
                    </div>

                    <form class="px-5" style="display: block" id="loginForm">
                        <div class="mb-3">
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                                name="email" placeholder="Email">
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" id="exampleInputPassword1"
                                placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-primary px-4 w-100">Login</button>
                        <div id="emailHelp" class="form-text text-end mb-3"><a href="/lupa-password">Lupa password?</a>
                        </div>

                        <hr>
                        <a href="#" class="btn btn-danger px-4 text-white w-100"><svg
                                xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                <path style="fill: white"
                                    d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-2.917 16.083c-2.258 0-4.083-1.825-4.083-4.083s1.825-4.083 4.083-4.083c1.103 0 2.024.402 2.735 1.067l-1.107 1.068c-.304-.292-.834-.63-1.628-.63-1.394 0-2.531 1.155-2.531 2.579 0 1.424 1.138 2.579 2.531 2.579 1.616 0 2.224-1.162 2.316-1.762h-2.316v-1.4h3.855c.036.204.064.408.064.677.001 2.332-1.563 3.988-3.919 3.988zm9.917-3.5h-1.75v1.75h-1.167v-1.75h-1.75v-1.166h1.75v-1.75h1.167v1.75h1.75v1.166z" />
                            </svg> Google</a>
                        <a href="#" class="btn px-4 mt-3 text-white w-100"
                            style="background-color:rgb(43, 43, 163)"><svg xmlns="http://www.w3.org/2000/svg"
                                width="15" height="15" viewBox="0 0 24 24">
                                <path style="fill: white"
                                    d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-3 7h-1.924c-.615 0-1.076.252-1.076.889v1.111h3l-.238 3h-2.762v8h-3v-8h-2v-3h2v-1.923c0-2.022 1.064-3.077 3.461-3.077h2.539v3z" />
                            </svg> Facebook</a>

                        <a href="#" id="akunBaru" class="btn btn-dark px-4 text-white mt-5 w-100"><svg
                                xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24">
                                <path style="fill: white"
                                    d="M19.5 15c-2.483 0-4.5 2.015-4.5 4.5s2.017 4.5 4.5 4.5 4.5-2.015 4.5-4.5-2.017-4.5-4.5-4.5zm2.5 5h-2v2h-1v-2h-2v-1h2v-2h1v2h2v1zm-7.18 4h-14.815l-.005-1.241c0-2.52.199-3.975 3.178-4.663 3.365-.777 6.688-1.473 5.09-4.418-4.733-8.729-1.35-13.678 3.732-13.678 6.751 0 7.506 7.595 3.64 13.679-1.292 2.031-2.64 3.63-2.64 5.821 0 1.747.696 3.331 1.82 4.5z" />
                            </svg> Buat akun baru</a>
                    </form>

                    {{-- FORM DAFTAR --}}
                    <form class="px-5" style="display: none" id="daftarForm" action="/daftar" method="POST">
                        @csrf
                        <div class="mb-4 mt-4">
                            <a href="#" id="kembaliLogin" style="text-decoration: none" class="text-secondary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24">
                                    <path style="fill:rgb(71, 71, 71)"
                                        d="M16.67 0l2.83 2.829-9.339 9.175 9.339 9.167-2.83 2.829-12.17-11.996z" />
                                </svg> Kembali ke login
                            </a>
                        </div>
                        <div class="mb-3">
                            <input type="nama" class="form-control" id="email" aria-describedby="emailHelp"
                                name="nama" placeholder="Nama">
                        </div>
                        <div class="mb-3">
                            <input type="number" class="form-control" id="no_hp"
                                aria-describedby="passwordHelp" name="no_hp" placeholder="Nomor Handphone">
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                                name="email" placeholder="Email">
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" id="exampleInputPassword1"
                                placeholder="Password" name="password">
                        </div>
                        <button type="submit" class="btn btn-primary px-4 w-100">Daftar Sekarang</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--Tutup modal login-->



</body>
<script>
    $('document').ready(function() {
        $('#akunBaru').on('click', function() {
            $('#loginForm').css("display", "none");
            $('#daftarForm').css("display", "block");
        });
        $('#kembaliLogin').on('click', function() {
            $('#loginForm').css("display", "block");
            $('#daftarForm').css("display", "none");
        });
        $('#kontakKirim').submit(function() {
            let nama = $('#namaKontak').val();
            let subjek = $('#subjekKontak').val();
            let isi = $('#isiKontak').val();
            $(location).attr("href", "mailto:fatubraonofficial@gmail.com?subject=" + subjek +
                "&body=Halo nama saya " + nama + ", Pesan saya: " + isi);
        });
    });
</script>

</html>
