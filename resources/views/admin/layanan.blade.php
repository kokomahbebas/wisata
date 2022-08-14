@extends('/admin/layouts.main')
@section('isi_admin')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>{{$page}}</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/admin/index">Home</a></li>
          <li class="breadcrumb-item active">{{$page}}</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
  
    <section class="section dashboard">
      
      <div class="container">
        <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <form>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Nama Layanan</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama_layanan">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Deskripsi Layanan</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="deskripsi"></textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Harga</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="harga">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Satuan</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="satuan">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Stok</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="stok">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Gambar</label>
                    <input type="file" accept=".jpg, .jpeg, .png" id="exampleInputEmail1"
                    class="text-dark" name="gambar" style="font-size: 15px"
                    aria-describedby="emailHelp">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Nomor Handphone</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="pic">
                  </div>
                <button type="submit" class="btn btn-primary">Upload</button>
              </form>
        </div>
        <div class="col-sm-2"></div>
      </div>
      </div>
  
    </section>


@endsection