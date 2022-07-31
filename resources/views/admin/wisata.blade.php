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
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <form>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Nama Wisata</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama_wisata">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Deskripsi Wisata</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="deskripsi"></textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Gambar Wisata</label>
                    <input type="file" accept=".jpg, .jpeg, .png" id="exampleInputEmail1"
                    class="text-dark" name="gambar" style="font-size: 15px"
                    aria-describedby="emailHelp">
                  </div>
                <button type="submit" class="btn btn-primary">Upload</button>
              </form>
        </div>
        <div class="col-sm-3"></div>
      </div>
      </div>
  
    </section>


@endsection