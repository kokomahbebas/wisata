@extends('layouts.main')
@section('isi')
    <!-- Main content -->
    <main id="main" class="site-main">

        <section class="page-section cta">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 mx-auto">
                        <div class="cta-inner bg-faded rounded">

                            <center>
                                <div class="mb-4">
                                    <a class="float-start text-secondary" href="/"><i class="fas fa-chevron-left"></i>
                                        Kembali ke beranda
                                    </a>
                                    <br>
                                    <img src="/assets/img/kablogo.png" style="width: 90px" alt="">

                                </div>
                                <h2 class="section-heading mb-4">
                                    <span class="section-heading-lower">KONTAK KAMI</span>
                                </h2>
                            </center>

                            <form id="kontakKirim">
                                <div class="row">
                                    <div class="mb-3 col-lg-6">
                                        <label for="exampleInputEmail1" class="form-label">Nama Anda: </label>
                                        <input type="text" class="form-control" id="namaKontak"
                                            aria-describedby="emailHelp" required>
                                    </div>
                                    <div class="mb-3 col-lg-6">
                                        <label for="exampleInputPassword1" class="form-label">Subjek</label>
                                        <input type="text" class="form-control" id="subjekKontak" required>
                                    </div>
                                    <div class="mb-3 col-lg-12">
                                        <label for="exampleInputPassword1" class="form-label">Isi pesan</label>
                                        <textarea name="isi" class="form-control" id="isiKontak" cols="30" rows="10" required></textarea>
                                    </div>
                                </div>
                                <div class="text-end">
                                    <button type="submit" class="btn btn-primary py-3 px-5"><i class="fas fa-envelope"></i>
                                        Kirim pesan</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main><!-- /#main -->
@endsection('isi')
