@extends('home')

@section('title','Pesanan')
@section('path','Order')

@section('content')

<section class="inner-page">
    <div class="container">
        <section class="portfolio">
            <form action="/orderDetail/store" method="POST" >
            {{ csrf_field() }}
                <div class="container" data-aos="fade-up">
                    <div class="section-title">    
                        <input type="hidden" name="order_id" value="{{$order->id}}">
                        <p>Daftar Menu</p>
                        <h2>Selamat Memilih</h2>
                    </div>

                    <div class="row" data-aos="fade-up" data-aos-delay="100">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <ul id="portfolio-flters">
                                <li data-filter="*" class="filter-active">All</li>
                                <li data-filter=".filter-main_dish">Makanan</li>
                                <li data-filter=".filter-snack">Cemilan</li>
                                <li data-filter=".filter-drink">Minuman</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">  
                        @foreach($menus as $menus)
                            <?php $filter = str_replace(' ', '', $menus->name)?>
                            <div class="portfolio-item filter-{{$filter}}"> 
                                <div class="container">
                                    <h2><u>{{$menu->name}}</u></h2>
                                    <table class="table table-hover mb-5">
                                        <thead class="thead-dark align-middle">
                                            <tr>
                                                <th rowspan="2" class="align-middle text-center">No.</th>
                                                <th rowspan="2" class="align-middle text-center">Nama</th>
                                                <th rowspan="2" class="align-middle text-center">Harga</th>
                                                <th rowspan="2" class="align-middle text-center">Jumlah</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php $no=1?>
                                                @foreach ($menu->menu->where('stock','Available') as $menu)    
                                                <tr>
                                                    <td class="align-middle text-center" >{{$no}}</td>
                                                    <td class="align-middle text-center" >{{$menu->name}}</td>
                                                    <td class="align-middle text-center">{{$menu->price}}</td>
                                                    <td class="align-middle text-center">
                                                        <input type='Number' name='quantity[]' placeholder='Jumlah pesanan'>
                                                        <input type='Number' name='menu_id[]' value="{{$menu->id}}"hidden> 
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                    </table>
                                </div>
                            </div>    
                        @endforeach   
                    </div>
                </div>
                <div class="row portfolio-item d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary w-25">
                                Simpan Pesanan
                            </button>
                        </div>
            </form>
        </section><!-- End Menu Section -->
    </div>
</section>

@endsection