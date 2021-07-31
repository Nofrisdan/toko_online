<?php


namespace App\Controllers;

use App\Models\ProdukModel;

class User extends BaseController
{
    protected $requestData,
        $produkModel,
        $keranjang;

    public function __construct()
    {
        $this->requestData = service("request");
        $this->keranjang = service("cart");

        $this->produkModel = new ProdukModel();
    }

    public function index()
    {

        $data = [
            "link" => "IndexLink",
            "script" => "IndexScript",
            "menu" => "allProduk",
            "produk" => $this->produkModel->findAll(),
            "jumlahBarang" => $this->keranjang->totalItems(),
            "keranjang" => $this->keranjang->contents()

        ];

        return view("User/Pages/index", $data);
    }

    public function Keranjang()
    {
        $data = [
            "link" => "DataLink",
            "script" => "DataScript",
            "menu" => "allProduk",
            "produk" => $this->produkModel->findAll(),
            "jumlahBarang" => $this->keranjang->totalItems(),
            "keranjang" => $this->keranjang->contents()

        ];
        return view("User/Pages/keranjang", $data);
    }
}
