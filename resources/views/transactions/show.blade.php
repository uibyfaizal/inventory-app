<x-layout>

    <x-navbar></x-navbar>

    <div class="max-w-5xl mx-auto py-10 px-4">

        <h1 class="text-3xl font-bold mb-2">
            📦 {{ $item->name }}
        </h1>

        <p class="text-gray-500 mb-6">
            Riwayat transaksi barang. 
            <br>Berikut isi seluruh riwayat Transaksi barang masuk dan barang keluar.
        </p>

        <div class="bg-white rounded-xl shadow overflow-hidden">

            <table class="w-full">

                <thead class="bg-gray-100">

                    <tr>
                        <th class="p-3 text-left">
                            Jenis
                        </th>

                        <th class="p-3 text-left">
                            Jumlah
                        </th>

                        <th class="p-3 text-left">
                            Diambil Oleh
                        </th>

                        <th class="p-3 text-left">
                            Catatan
                        </th>

                        <th class="p-3 text-left">
                            Tanggal
                        </th>
                    </tr>

                </thead>

                <tbody>

                    @forelse ($transactions as $transaction)

                        <tr class="border-t">

                            <td class="p-3">
                                {{ $transaction->type }}
                            </td>

                            <td class="p-3">
                                {{ $transaction->quantity }}
                            </td>

                            <td class="p-3">
                                {{ $transaction->taken_by }}
                            </td>

                            <td class="p-3">
                                {{ $transaction->note }}
                            </td>

                            <td class="p-3">
                                {{ $transaction->created_at->format('d M Y H:i') }}
                            </td>

                        </tr>

                    @empty

                        <tr>

                            <td colspan="5" class="text-center p-5 text-gray-500">

                                Belum ada transaksi

                            </td>

                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</x-layout>