<!DOCTYPE html>
<html>
<head>
    <title>Aplikasi Hitung Pecahan Uang</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-8">
        <h1 class="text-2xl font-bold mb-4">Aplikasi Hitung Pecahan Uang</h1>
        <form action="{{ route('hitung') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label class="block text-sm font-bold mb-2" for="jumlah_lembar">Jumlah Lembar Uang:</label>
                <input type="number" name="jumlah_lembar" required class="w-full border border-gray-300 rounded-md p-2">
            </div>
            <div>
                <label class="block text-sm font-bold mb-2" for="total_biaya">Total Biaya Transaksi:</label>
                <input type="number" name="total_biaya" required class="w-full border border-gray-300 rounded-md p-2">
            </div>
            <div>
                <label class="block text-sm font-bold mb-2" for="jumlah_pecahan">Jumlah Pecahan yang Dibayarkan:</label>
                <input type="number" name="jumlah_pecahan" required class="w-full border border-gray-300 rounded-md p-2">
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Hitung</button>
        </form>
    </div>
</body>
</html>