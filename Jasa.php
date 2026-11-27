<?php

namespace Pbo\Marketplace;

require_once('./Praktikum6.php');

use Pbo\Marketplace\Jasa;

class Jasa {

    use Produk;

    public function payment ($tipe) {

        return match ($tipe) {
        "virtual" => "Virtual Account",
        "qris" => "QRIS",
        default => "pembayaran hana bisa va dan qris"
    
        };
    }

}

?>