<!DOCTYPE html>
<html>
<head>
    <title>Hasil Perhitungan</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-8">
        <h1 class="text-2xl font-bold mb-4">Hasil Perhitungan:</h1>
        <p>Pecahan uang yang dimiliki Aulia sekarang:</p>
        <ul class="list-disc list-inside">
            <li>Lima ribu: {{ $kembaliLimaRibu }} lembar</li>
            <li>Dua ribu: {{ $kembaliDuaRibu }} lembar</li>
        </ul>

        @if ($sisaKembalian == 0)
            <p>Perhitungan kembalian sudah benar!</p>
        @else
            <p>Ada kesalahan dalam perhitungan kembalian sebesar {{ $sisaKembalian }} rupiah.</p>
        @endif
    </div>
</body>
</html>