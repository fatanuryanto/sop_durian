@auth
<section id="hero" class="d-flex align-items-center justify-content-center" style="margin-bottom:-70px;">
    <div class="container" data-aos="fade-up">

        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
            <div class="col-xl-6 col-lg-8">
                <h1>Selamat Datang <span>.</span></h1>
                <h2>{{Auth::user()->name;}}</h2>
                <h2>Jangan lupa Bismillah</h2>
            </div>
        </div>

        <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">

            <div class="col-xl-2 col-md-4">
                <div class="icon-box">
                    <a href="/order">
                    <img src="assets\img\open-store.png" alt="Open-store" style="width:100px;height:100px;">  
                    <h3>Buka Toko</h3>
                    </a>
                </div>
            </div>

            <div class="col-xl-2 col-md-4">
                <div class="icon-box">
                    <a style="color:#ffc451;"data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    <img src="assets\img\report.png" alt="Reports" style="width:100px;height:100px;">  
                    <h3>Laporan Penjualan</h3>
                    </a>
                </div>
            </div>
        </div>
    </div>
    </section>
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="/admin/reports" method="post">
            {{ csrf_field() }}
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Laporan Penjualan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
           
                <h2> Silahkan Pilih jarak waktu Laporan Penjualan</h2>
                Tanggal Awal  <input type="date" name="start_date">
                Tanggal Akhir <input type="date" name="end_date">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-primary" name="Simpan" value="Simpan Pesanan">
            </div>
            </form>
        </div>
    </div>
</div>


@else
<section id="hero" class="d-flex align-items-center justify-content-center"  style="margin-bottom:-70px;">
    <div class="container" data-aos="fade-up">

        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
            <div class="col-xl-6 col-lg-8">
                <h1>Selamat Datang Di Sop Durian 97<span>.</span></h1>
                <h2>Rasakan Kelezatannya</h2>
            </div>
        </div>

        <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">

            <div class="col-xl-2 col-md-4">
                <div class="icon-box">
                    <a href="" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    <img src="assets\img\dinein.png" alt="dine-in" style="width:100px;height:100px;">  
                    <h3>Dine-In</h3>
                    </a>
                </div>
            </div>

            <div class="col-xl-2 col-md-4">
                <div class="icon-box">
                    <a href="/take_away">
                    <img src="assets\img\takeaway.png" alt="dine-in" style="width:100px;height:100px;">  
                    <h3>Take-Away</h3>
                    </a>
                </div>
            </div>
            <div class="col-xl-2 col-md-4">
                <div class="icon-box"><a href="https://gofood.link/u/D4z94">
                    <img src="assets\img\gofood.png" alt="gofood" style="width:100px;height:100px;">  
                    <h3>Go-Food</h3>
                    </a>
                </div>
            </div>
            <div class="col-xl-2 col-md-4">
                <div class="icon-box">
                    <a href="https://food.grab.com/id/id/restaurant/sop-durian-97-ruko-permata-cibubur-delivery/6-C2BGNTLKRLDJCJ">
                        <img src="assets\img\grabfood.png" alt="grabfood" style="width:100px;height:100px;">  
                        <h3>GrabFood</h3>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="/order/store" method="POST" class="portfolio">
            {{ csrf_field() }}
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Pemesanan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
                <div class="modal-body">

                    <div class=" align-self-center">
                        <div class="row">
                            <div class="form-group">
                                <input type='text' class="form-control mb-1" name="name" placeholder="Nama Anda" requred>
                            </div>
                            <div class="col-md-6 form-group pt-2">
                                <h5>Tanggal : {{date('d-m-Y')}}</h5>
                                <input type='checkbox' id="take_away"> Bawa Pulang ?
                            </div>
                    
                            <div class="col-md-6 form-group">
                                <input type="number" class="form-control mb-1" name="floor" id="floor" placeholder="Nomor Lantai">
                                <input type="number" class="form-control mb-1" name="table" id="table" placeholder="Nomor Meja">
                            </div>
                         
                        </div>
                    </div>
                    <script>
                        document.getElementById('take_away').onchange = function() {
                            document.getElementById('floor').disabled = this.checked;
                            document.getElementById('table').disabled = this.checked;
                        };
                    </script>
                </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-primary" name="Simpan" value="Buat Pesanan">
            </div>
            </form>
        </div>
    </div>
</div>
@endauth