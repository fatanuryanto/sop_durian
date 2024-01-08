@extends('home')

@section('title','Halaman Utama')

@section('hero')
  <!-- Hero -->
  @include('layouts.hero')
@endsection


@section('content')
  
    <!-- ======= Menu Section ======= -->
    <section id="menu" class="portfolio">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Menu yang Tersedia</h2>
                <p>Daftar Menu</p>
                @auth
                <a href='/menu/create' class="add-btn scrollto">Tambah menu</a>
                <a href='/category' class="add-btn scrollto">Daftar Kategori</a>
                @endauth
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-12 d-flex justify-content-center">
                <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">All</li>
                    @foreach($categories as $category)
                    <?php $filter = str_replace(' ', '', $category->name)?>
                    <li data-filter=".filter-{{$filter}}">{{$category->name}}</li>
                    @endforeach
                </ul>
                </div>
            </div>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                @foreach($categories as $category)
                <?php $filter = str_replace(' ', '', $category->name)?>
                <div id= "food" class="portfolio-item filter-{{$filter}}"> 
                    <div class="container">
                        <h2><u>{{$category->name}}</u></h2>
                        <table class="table table-hover mb-5">
                            <thead class="thead-dark align-middle">
                                <tr>
                                <th rowspan="2" class="align-middle text-center">No.</th>
                                <th rowspan="2" class="align-middle text-center">Nama</th>
                                <th rowspan="2" class="align-middle text-center">Harga</th>
                                <th rowspan="2" class="align-middle text-center">Ketersediaan</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php $no=1?>
                                @foreach ($category->menu as $menu)    
                                <tr>
                                    <td class="align-middle text-center" >{{$no}}</td>
                                    <td class="align-middle text-center" >{{$menu->name}}</td>
                                    <td class="align-middle text-center">{{$menu->price}}</td>
                                    <td class="align-middle text-center">{{$menu->stock}}</td>
                                    @auth
                                    <td class="align-middle text-center">
                                        <a class="edit-btn" href="/menu/edit/{{$menu->id}}">Ubah</a>
                                        <a class="delete-btn" href="/menu/destroy/{{$menu->id}}" onclick="return confirm('Apa anda yakin ingin menghapus Menu ini?')">Hapus</a>
                                    </td>
                                    @endauth
                                </tr>
                                <?php $no+=1?>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section><!-- End Menu Section -->
@endsection
