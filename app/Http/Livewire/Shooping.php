<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Keranjang;

class Shooping extends Component
{
    public function render()
    {
        return view('livewire.shooping', [
            'datas' => Keranjang::all(),
            'jumlah' => Keranjang::sum('harga_barang'),
        ]);
    }
    public function simpan($nama_barang, $harga_barang)
    {
        // dd($nama_barang, $harga_barang);
        $simpan = new Keranjang();
        $simpan->nama_barang = $nama_barang;
        $simpan->harga_barang = $harga_barang;
        $simpan->save();
    }
    public function destroy($id_barang)
    {
        $destroy = Keranjang::findorFail($id_barang);
        $destroy->delete();
        $this->reset();
    }
}
