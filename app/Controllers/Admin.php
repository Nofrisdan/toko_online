<?php


namespace App\Controllers;

use App\Models\ProdukModel;

class Admin extends BaseController
{

    protected $requestData,
        $produkModel,
        $validasi;

    public function __construct()
    {
        $this->requestData = service("request");
        $this->validasi = \Config\Services::validation();

        // model
        $this->produkModel = new ProdukModel();
    }


    // ==================== VIEW =====================
    public function index()
    {

        $data = [
            "link" => "IndexLink",
            "script" => "IndexScript",
            "menu" => "dashboard"
        ];

        return view("Admin/Pages/index", $data);
    }

    public function SemuaProduk()
    {
        $data = [
            "link" => "DataLink",
            "script" => "DataScript",
            "menu" => "allProduk",
            "validasi" => $this->validasi,
            "produk" => $this->produkModel->findAll()
        ];

        return view("Admin/Pages/produk", $data);
    }

    public function Pendapatan()
    {
        $data = [
            "link" => "DataLink",
            "script" => "DataScript",
            "menu" => "pendapatan"
        ];

        return view("Admin/Pages/pendapatan", $data);
    }

    public function Pelanggan()
    {
        $data = [
            "link" => "DataLink",
            "script" => "DataScript",
            "menu" => "pelanggan"
        ];

        return view("Admin/Pages/pelanggan", $data);
    }

    public function Permintaanorder()
    {

        $data = [
            "link" => "DataLink",
            "script" => "DataScript",
            "menu" => "order"
        ];

        return view("Admin/Pages/order", $data);
    }


    // =================== BACKEND ============

    public function tambahProduk()
    {
        $gambar = $this->requestData->getFile("gambar_produk");

        $karakter = $this->requestData->getVar("harga_produk");
        $nominal  = $this->safeNumber($karakter);
        $hargaProduk = $this->rupiah($nominal);

        // validasi 
        if (!$this->validate([
            "nama_produk" => [
                "rules" => "required",
                "errors" => [
                    "required" => "Nama Produk Wajib Di isi"
                ]
            ],
            "harga_produk" => [
                "rules" => "required",
                "errors" => [
                    "required" => "Harga Produk Wajib Di isi"
                ]
            ],
            "deskripsi_produk" => [
                "rules" => "required",
                "errors" => [
                    "required" => "Deskripsi Produk Wajib Di isi"
                ]
            ],
            "stok" => [
                "rules" => "required",
                "errors" => [
                    "required" => "Stok Produk Wajib Di isi"
                ]
            ],
            "gambar_produk" => [
                "rules" => "uploaded[gambar_produk]|is_image[gambar_produk]|ext_in[gambar_produk,jpeg,png,jpg,gif]",
                "errors" => [
                    "uploaded" => "Gambar Produk Wajib Di Upload",
                    "is_image" => "Gambar Yang Anda Upload bukan Gambar, silahkan upload gambar produk",
                    "ext_in" => "Silahkan masukkan Gambar yang ber ekstensi Jpeg,png,jpg,dan gif"
                ]
            ],


        ])) {

            return redirect()->to(base_url("/Admin/SemuaProduk"))->withInput();
        }

        // move image
        $namaGambar = $gambar->getRandomName();
        $gambar->move("assets/product/", $namaGambar);

        // insert
        $data = [
            'nama_produk' => $this->requestData->getVar("nama_produk"),
            'harga_produk' => $hargaProduk,
            'deskripsi_produk' => $this->requestData->getVar("deskripsi_produk"),
            'stok_produk' => $this->requestData->getVar("stok"),
            'gambar_produk' => $namaGambar,
            "kategori_produk" => $this->requestData->getVar("kategori_produk")
        ];

        $sukses = $this->produkModel->insertData($data);

        if ($sukses) {
            session()->setFlashdata("notif", "Berhasil Ditambahkan");

            return redirect()->to(base_url("/Admin/SemuaProduk"));
        } else {
            session()->setFlashdata("notif", "Gagal Ditambahkan");

            return redirect()->to(base_url("/Admin/SemuaProduk"));
        }
    }


    private function safeNumber($subject)
    {

        $karakter = "/[^0-9]/";
        $action = preg_replace($karakter, "", strip_tags($subject));

        return $action;
    }

    private function rupiah($angka)
    {
        $hasil_rupiah = "Rp " . number_format($angka, 0, ',', '.');
        return $hasil_rupiah;
    }
}
