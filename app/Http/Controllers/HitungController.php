<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HitungController extends Controller
{
    public function hitung(Request $request)
    {
        $jumlahLembar = $request->input('jumlah_lembar');
        $totalBiaya = $request->input('total_biaya');
        $jumlahPecahan = $request->input('jumlah_pecahan');

        // Jumlah awal lembar uang
        $duaRibuan = 7;
        $seribu = 1;
        $sepuluhRibuan = 3;
        $limaRibuan = 4;

        // Jumlah uang dari lembar yang ada awalnya
        $totalAwal = ($duaRibuan * 2000) + ($seribu * 1000) + ($sepuluhRibuan * 10000) + ($limaRibuan * 5000);

        // Lembar uang yang ditambahkan
        $limaPuluhRibuan = 2;
        $seratusRibuan = 2;

        // Jumlah uang dari lembar yang ditambahkan
        $totalTambah = ($limaPuluhRibuan * 50000) + ($seratusRibuan * 100000);

        // Koin lima ratus rupiah
        $limaRatusRupiah = 4;

        // Jumlah uang dari koin lima ratus rupiah
        $totalKoin = $limaRatusRupiah * 500;

        // Total uang setelah ditambahkan lembar dan koin
        $totalUang = $totalAwal + $totalTambah + $totalKoin;

        // Total uang yang dibayarkan oleh pelanggan
        $totalBayar = ($jumlahPecahan * 500);

        // Hitung kembalian
        $kembalian = $totalBayar - $totalBiaya;

        // Hitung pecahan kembalian
        $kembaliLimaRibu = 0;
        $kembaliDuaRibu = 0;

        while ($kembalian >= 5000) {
            $kembaliLimaRibu++;
            $kembalian -= 5000;
        }

        while ($kembalian >= 2000) {
            $kembaliDuaRibu++;
            $kembalian -= 2000;
        }

        // Sisa kembalian (harusnya nol jika perhitungan benar)
        $sisaKembalian = $kembalian;

        // Tampilkan hasil
        return view('hasil', compact('kembaliLimaRibu', 'kembaliDuaRibu', 'sisaKembalian'));
    }
}
