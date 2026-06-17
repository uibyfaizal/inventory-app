<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
        }

        h1{
            text-align:center;
            margin-bottom:5px;
        }

        .subtitle{
            text-align:center;
            color:#666;
            margin-bottom:20px;
        }

        table{
            width:100%;
            border-collapse:collapse;
            margin-top:10px;
            margin-bottom:25px;
        }

        th, td{
            border:1px solid #ddd;
            padding:8px;
            text-align:left;
        }

        th{
            background:#f3f4f6;
        }

        .summary{
            background:#f9fafb;
            padding:10px;
            border:1px solid #ddd;
            margin-bottom:20px;
        }
    </style>
    {{--  --}}
</head>
<body>
    @if ($store)
        <div style="text-align:center; margin-bottom:20px">
            <h2 style="margin:0;">{{ $store->store_name }}</h2>

            <p style="margin: 5px 0;">{{ $store->address }}</p>

            <p style="margin: 5px 0;">{{ $store->phone }}</p>

            <p style="margin: 5px 0;">{{ $store->email }}</p>
        </div>
        <hr>
    @endif
    <h1>LAPORAN INVENTORY</h1>

    <p class="subtitle">
        Dicetak pada :
        {{ now()->format('d M Y H:i') }} 
    </p> {{-- Fungsi nya untuk menampilkan tanggal dan waktu saat PDF dibuat --}}

    {{--Summary  --}}
    <div class="summary">
        <strong>Ringkasan : </strong>

        <ul>
            <li>Total Barang : {{ $items->count() }}</li> {{-- Menghitung jumlah data barang --}}
            <li>Total Transaksi : {{ $transactions->count() }}</li> {{-- Menghitung jumlah transaksi --}}
            <li>Barang Hampir Habis : 
                {{ $items->where('stock', '<=', 5)->count() }}
            </li> {{-- Menghitung barang yang stoknya hampir habis --}}
        </ul>
    </div>

    <h3>Data Barang</h3>

    <table>
        <thead>
            <tr>
                <th>Nama Barang</th>
                <th>Kategori</th>
                <th>Stock</th>
                {{-- <th>Harga</th> --}}
                <th>Tanggal Masuk</th>
            </tr>
        </thead>

        <tbody>

            @foreach ($items as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>
                        {{ $item->category->name ?? '-' }}
                    </td>
                    <td>{{ $item->stock }}</td>
                    {{-- <td>
                        Rp {{ number_format($item->price,0,',','.') }}
                    </td> --}}

                    <td>
                        {{ $item->created_at->format('d-m-Y') }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <h3>Riwayat Transaksi</h3>

    <table>
        <thead>
            <tr>
                <th>Barang</th>
                <th>Jumlah</th>
                <th>Tanggal Transaksi</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($transactions as $transaction)
                <tr>
                    <td>
                        {{ $transaction->item->name ?? '-' }}
                    </td>

                    <td>
                        {{ $transaction->quantity }}
                    </td>

                    <td>
                        {{ $transaction->created_at->format('d-m-Y H:i') }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <h3>Kesimpulan</h3>
    <p>Berdasarkan laporan yang dihasilkan pada{{ now()->format('d M Y') }}, terdapat <strong>{{ $items->count() }}</strong> barang yang tercatat dalam sistem inventory dan <strong>{{ $transactions->count() }}</strong> transaksi yang telah dilakukan.</p>

    <p>
        Barang yang perlu mendapat perhatian karena stock rendah
        berjumlah
        <strong>{{ $items->where('stock','<=',5)->count() }}</strong>
        item.
    </p>
</body>
</html>