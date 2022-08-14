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
    
    Nanti isi galeri

  </section>

</main><!-- End #main -->
@endsection