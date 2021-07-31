<?php


namespace App\Models;

use CodeIgniter\Model;

class ProdukModel extends Model
{


    protected $table = "produk";
    protected $allowedFields = [
        'nama_produk',
        "harga_produk",
        'deskripsi_produk',
        'stok_produk',
        'gambar_produk',
        "kategori_produk"
    ];
    public function getProduk($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        } else {
            return $this->where("id_produk", $id)->first();
        }
    }


    public function insertData($data)
    {
        return $this->insert($data);
    }

    public function hapusData($id)
    {
        return $this->where("id_produk", $id)->delete();
    }
}
