<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">

    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
            font-size: 11px;
            color: #333;
        }

        h1,
        h2,
        h3 {
            margin: 0;
        }

        .header {
            text-align: center;
            margin-bottom: 15px;
        }

        .header h2 {
            color: #15803d;
            font-size: 22px;
        }

        .header p {
            margin: 3px;
            color: #666;
        }

        hr {
            border: 0;
            border-top: 2px solid #16a34a;
            margin: 15px 0;
        }

        .title {
            text-align: center;
            margin-bottom: 15px;
        }

        .title h1 {
            font-size: 22px;
        }

        .title p {
            color: #666;
            margin-top: 5px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 12px;
            margin-bottom: 25px;
        }

        th {
            background: #16a34a;
            color: white;
            border: 1px solid #15803d;
            padding: 8px;
            text-align: left;
        }

        td {
            border: 1px solid #dcdcdc;
            padding: 7px;
        }

        .summary td:first-child {
            width: 70%;
            font-weight: bold;
        }

        .section-title {
            margin-top: 18px;
            margin-bottom: 8px;
            color: #15803d;
        }

        .footer {
            margin-top: 35px;
            text-align: center;
            font-size: 10px;
            color: gray;
        }

        .text-center {
            text-align: center;
        }
    </style>

</head>

<body>

    {{-- Header Toko --}}
    @if($store)

        <div class="header">

            <h2>{{ $store->store_name }}</h2>

            <p>{{ $store->address }}</p>

            <p>{{ $store->phone }}</p>

            <p>{{ $store->email }}</p>

        </div>

    @endif

    <hr>

    {{-- Judul --}}
    <div class="title">

        <h1>LAPORAN INVENTORY</h1>

        <p>
            Dicetak :
            {{ now()->format('d F Y H:i') }}
        </p>

    </div>


    {{-- Ringkasan --}}
    <h3 class="section-title">
        Ringkasan Inventory
    </h3>

    <table class="summary">

        <tr>
            <td>Total Barang</td>
            <td>{{ $items->count() }}</td>
        </tr>

        <tr>
            <td>Total Transaksi</td>
            <td>{{ $transactions->count() }}</td>
        </tr>

        <tr>
            <td>Barang Hampir Habis</td>
            <td>{{ $items->where('stock','<=',5)->where('stock','>',0)->count() }}</td>
        </tr>

        <tr>
            <td>Barang Kosong</td>
            <td>{{ $items->where('stock',0)->count() }}</td>
        </tr>

    </table>


    {{-- Data Barang --}}
    <h3 class="section-title">
        Data Barang
    </h3>

    <table>

        <thead>

            <tr>

                <th width="5%">No</th>

                <th>Barang</th>

                <th>Kategori</th>

                <th width="12%">Stock</th>

                <th width="18%">Status</th>

                <th width="18%">Tanggal</th>

            </tr>

        </thead>

        <tbody>

            @foreach($items as $item)

                <tr>

                    <td class="text-center">
                        {{ $loop->iteration }}
                    </td>

                    <td>
                        {{ $item->name }}
                    </td>

                    <td>
                        {{ $item->category->name ?? '-' }}
                    </td>

                    <td class="text-center">
                        {{ $item->stock }}
                    </td>

                    <td>

                        @if($item->stock == 0)

                            Kosong

                        @elseif($item->stock <= 5)

                            Hampir Habis

                        @else

                            Aman

                        @endif

                    </td>

                    <td>
                        {{ $item->created_at->format('d-m-Y') }}
                    </td>

                </tr>

            @endforeach

        </tbody>

    </table>



    {{-- Riwayat --}}
    <h3 class="section-title">
        Riwayat Transaksi
    </h3>

    <table>

        <thead>

            <tr>

                <th width="5%">No</th>

                <th>Barang</th>

                <th width="10%">Jenis</th>

                <th width="10%">Qty</th>

                <th width="18%">Diambil Oleh</th>

                <th>Catatan</th>

                <th width="18%">Tanggal</th>

            </tr>

        </thead>

        <tbody>

            @forelse($transactions as $transaction)

                <tr>

                    <td class="text-center">
                        {{ $loop->iteration }}
                    </td>

                    <td>
                        {{ $transaction->item->name ?? '-' }}
                    </td>

                    <td class="text-center">
                        {{ $transaction->type }}
                    </td>

                    <td class="text-center">
                        {{ $transaction->quantity }}
                    </td>

                    <td>
                        {{ $transaction->taken_by ?? '-' }}
                    </td>

                    <td>
                        {{ $transaction->note ?: '-' }}
                    </td>

                    <td>
                        {{ $transaction->created_at->format('d-m-Y H:i') }}
                    </td>

                </tr>

            @empty

                <tr>

                    <td colspan="7" class="text-center">
                        Belum ada transaksi.
                    </td>

                </tr>

            @endforelse

        </tbody>

    </table>



    {{-- Kesimpulan --}}
    <h3 class="section-title">
        Kesimpulan
    </h3>

    <p style="line-height:18px">

        Berdasarkan laporan inventory yang dicetak pada
        <strong>{{ now()->format('d F Y') }}</strong>,
        terdapat

        <strong>{{ $items->count() }}</strong>
        barang yang tersimpan di dalam sistem,

        dengan total

        <strong>{{ $transactions->count() }}</strong>
        transaksi.

    </p>

    <p style="line-height:18px">

        Barang dengan stok rendah berjumlah

        <strong>{{ $items->where('stock','<=',5)->where('stock','>',0)->count() }}</strong>

        item dan barang yang stoknya habis berjumlah

        <strong>{{ $items->where('stock',0)->count() }}</strong>

        item.

    </p>


    <div class="footer">

        <hr>

        <p>
            Laporan ini dibuat secara otomatis oleh
            <strong>Stora Inventory Management System</strong>
        </p>

        <p>
            Generated at {{ now()->format('d M Y H:i') }}
        </p>

    </div>

</body>

</html>