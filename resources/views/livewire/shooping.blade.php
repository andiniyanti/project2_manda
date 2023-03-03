<div class="container">
    <div class="row">
        <div class="col-3">
            <div class="card">
                <div class="card-header">
                    Total Belanjaan
                </div>
                <div class="card-body">
                    {{ $jumlah }}
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-header">
                    Keranjang
                </div>
                <div class="card-body">
                    @foreach($datas as $item)
                       <p>{{ $item->nama_barang }}<button class="btn btn-danger" wire:click="destroy({{ $item->id }})">Hapus</button></p>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-9">
            <div class="card">
                <div class="card-header">
                    Produk
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-3">
                            <div class="card">
                                <img src="{{ asset('gambar/bonekakucing.jpg') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Boneka Kucing</h5>
                                    <p class="card-text">Rp. 100.000</p>
                                    <button class="btn btn-primary" wire:click="simpan('Boneka Kucing', '100000')">Beli</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card">
                                <img src="{{ asset('gambar/bonekaberuang.jpg') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Boneka Beruang</h5>
                                    <p class="card-text">Rp. 150.000</p>
                                    <button class="btn btn-primary" wire:click="simpan('Boneka Beruang', '150000')">Beli</button>
                                </div>
                            </div> 
                        </div>
                        <div class="col-3">
                             <div class="card">
                                <img src="{{ asset('gambar/bonekaputih.jpg') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Boneka Panda</h5>
                                    <p class="card-text">Rp. 200.000</p>
                                    <button class="btn btn-primary" wire:click="simpan('Boneka Panda', '200000')">Beli</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>