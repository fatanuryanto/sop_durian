@extends('home')

@section('title','Menu')
@section('path','Menu')

@section('content')
<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Sop Durian 97</h2>
            <p>Menu Baru</p>
        </div>

        <div class="card d-flex justify-content-between">
            <div class="card-body ">
                <form action="/menu/store" method="post" class=" ">
                    {{ csrf_field() }}
                    
                        <div class="row">
                            <div class="col-sm-5 col-md-6 form-group">
                                <h3>Nama</h3> <input type="text" class="form-control" name="name" placeholder="Nama Menu" required>
                            </div>
                            <div class="col-sm-5 offset-sm-2 col-md-6 offset-md-0">
                                <h3>Harga</h3> <input type="text" class="form-control"  name="price" placeholder="Harga Menu" required><br>
                            </div>
                        </div>
                    

                
                        <div class="row">
                            <div class="col-sm-6 col-md-5 col-lg-6 form-group">
                                <h3>Jenis</h3>
                                <div class="col-md-6 form-group">
                                    @foreach($categories as $category)
                                    <input type='radio' name="category_id" value='{{$category->id}}'>{{$category->name}}<br>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">
                                <h3>Ketersediaan</h3>
                                <div class="col-md-6 form-group">
                                    <input type='radio' name="stock" value="Available"> Tersedia <br> 
                                    <input type='radio' name="stock" value="Unavailable"> Tidak Tersedia
                                </div>
                            </div>
                        </div>

                        <div class="row pt-3">
                            <div class="col-sm-6 col-md-5 col-lg-6 form-group">
                                <button class="btn btn-outline-warning" type="submit">Simpan Menu</button>
                                <a class="btn btn-warning" href="/">Kembali</a>
                            </div>
                        <div >

                </form>
            </div>
        </div>
    </div>
</section>
@endsection