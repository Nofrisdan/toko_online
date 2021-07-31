<?php


namespace App\Controllers;

use App\Models\ProdukModel;


class Keranjang extends BaseController
{

    protected $requestData, $produkModel, $keranjang;

    public function __construct()
    {
        $this->produkModel = new ProdukModel();

        $this->requestData = service("request");

        $this->keranjang = service("cart");
    }
    public function TambahKeranjang($id)
    {

        $produk = $this->produkModel->getProduk($id);

        $price = $this->safeNumber($produk['harga_produk']);

        $dataProduk = [
            'id'      => $produk['id_produk'],
            'qty'     => 1,
            'price'   => $price,
            'name'    => $produk['nama_produk'],
            'options' => [
                "gambar_produk" => $produk['gambar_produk']
            ]
        ];
        // insert to cart
        $this->keranjang->insert($dataProduk);

        session()->setFlashdata("notif", "Barang Berhasil Ditambahkan ke dalam keranjang");

        return redirect()->to(base_url("/User"));
    }


    public function HapusKeranjang()
    {
        $this->keranjang->destroy();
    }

    public function lihatKeranjang()
    {
        $keranjang = $this->keranjang->contents();
        dd($keranjang);
    }

    public function jumlahBelanja()
    {
        $belanja = $this->keranjang->totalItems();
        dd($belanja);
    }

    private function safeNumber($subject)
    {

        $karakter = "/[^0-9]/";
        $action = preg_replace($karakter, "", strip_tags($subject));

        return $action;
    }
}
