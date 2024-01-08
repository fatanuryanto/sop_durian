@extends('home')

@section('title','Kategori')
@section('path','Category')

@section('content')
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Sop Durian 97</h2>
                <p>Daftar Kategori</p>
            </div>

            <table class="table table-hover mb-5">
              <thead class="thead-dark align-middle">
                <tr>
                  <th rowspan="2" class="align-middle text-center">No.</th>
                  <th rowspan="2" class="align-middle text-center">Kategori</th>
                  <th rowspan="2" class="align-middle text-center">Jumlah Menu</th>
                  <th rowspan="2" class="align-middle text-center">Aksi</th>
                </tr>
              </thead>

              <tbody>
                    <?php $no=1?>
                    @foreach ($categories as $category)        
                    <tr>
                        <td class="align-middle text-center" >{{$no}}</td>
                        <td class="align-middle text-center" >{{$category->name}}</td>
                        <td class="align-middle text-center" ><?php echo count($category->menu)?></td>
                        <td class="align-middle text-center">
                            <a href="/category/destroy/{{$category->id}}" class="delete-btn" onclick="return confirm('Apa anda yakin ingin menghapus Kategori ini?')">Hapus</a>
                        </td>  
                    </tr>         
                    <?php $no+=1?>
                    @endforeach
              </tbody>
            </table>

            <div class="card d-flex w-50">
                <div class="card-header">
                    Tambah Kategori
                </div>
                <div class="card-body justify-conten-start">
                    <form action="/category/store" method="post" class=" ">
                        {{ csrf_field() }}
                        
                            <div class="form-group my-3">
                                <input type="text" class="form-control" name="name" placeholder="Nama Kategori" required>
                            </div>
                            <div class="form-group my-3">
                                <button class="btn btn-outline-warning" type="submit">Simpan Kategori</button>
                                
                            </div>

                    </form>
                </div>
            </div>

            <a class="m-4 btn btn-warning" href="/">Kembali</a>
        </div>
    </section><!-- Add Menu Section -->

@endsection