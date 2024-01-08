@extends('home')

@section('title','Konfirmasi Pesanan')
@section('path','Order Detail')

@section('content')
<!-- ======= Menu Section ======= -->
<section class="inner-page">
    <div class="portfolio"> 
        <div class="container" data-aos="fade-up">
            <div class="section-title">    
                <h1>{{$order->name}}</h1> 
                @if(!empty($order->floor && !empty($order->table)))
                    <i>Lantai : {{$order->floor}}</i>
                    <i>Meja : {{$order->table}}</i>
                @endif
                <h3>Tanggal : {{date('d-m-Y')}}</h3>
            </div>
            <table class="table table-hover mb-5">
                <thead class="thead-dark align-middle">
                    <tr>
                    <th rowspan="2" class="align-middle text-center">No.</th>
                    <th rowspan="2" class="align-middle text-center">Nama</th>
                    <th rowspan="2" class="align-middle text-center">Harga Satuan</th>
                    <th rowspan="2" class="align-middle text-center">Jumlah</th>
                    <th rowspan="2" class="align-middle text-center">Harga Total</th>
                    <th rowspan="2" class="align-middle text-center">Status</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($orderDetail as $detail)        
                    <tr>
                        <td class="align-middle text-center" ></td>
                        <td class="align-middle text-center" >{{$detail->menu->name}}</td>
                        <td class="align-middle text-center" >{{$detail->menu->price}}</td>
                        <td class="align-middle text-center" >{{$detail->quantity}}</td>
                        <td class="align-middle text-center">{{$detail->quantity * $detail->menu->price}}</td>   
                        <td class="align-middle text-center">{{$detail->status}}</td>       
                    @endforeach
                </tbody>
            </table>
            <h2> Total Pesanan anda adalah {{$order->total}}</h2>
            <a href='/order/{{$order->id}}' class="add-btn scrollto">Tambah Pesanan</a>
        </div>
    </div>
</section>
@endsection