@extends('home')

@section('title','Daftar Pesanan')
@section('path','Orders')

@section('content')


    <!-- ======= Menu Section ======= -->
    <section>
        <div class="mx-2" data-aos="fade-up">
            <div class="row justify-content-md-center">
                
                @foreach ($orders as $order) 
                <div class="col-4 mt-1">  
                    <div class="card h-100">
                        <div class="card-header">    
                            <h2>{{$order->name}}</h2> 
                        </div>
                        <div class="card-body d-flex flex-column bd-highlight mb-3">
      
                            <i>Lantai : {{$order->floor}} Meja : {{$order->table}}</i>
                            <table class="table table-hover mb-5">
                                <thead class="thead-dark align-middle">
                                    <tr>
                                        <th rowspan="2" class="align-middle text-center">No.</th>
                                        <th rowspan="2" class="align-middle text-center">Nama</th>
                                        <th rowspan="2" class="align-middle text-center">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($order->orderDetail as $item)      
                                    <tr>
                                        <td class="align-middle text-center"></td>
                                        <td class="align-middle text-center">{{$item->menu->name}}</td>
                                        <td class="align-middle text-center">
                                            {{$item->status}}
                                            @if($item->status=='Prepared')
                                            <a href="/order/deliver/{{$item->id}}" class="edit-btn">Antar</a>
                                            @endif
                                        </td>  
                                    </tr>
                                    @endforeach         
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer">
                            <h2>Total : {{$order->total}}</h2>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

@endsection