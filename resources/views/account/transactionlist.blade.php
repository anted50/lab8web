<x-layout>
    <div class="block max-w-xl p-6 bg-white border border-gray-200 rounded-lg shadow mx-8 font-sans text-xl">
        <table class="border">
            <thead>
                <tr class="bg-slate-800 text-left border text-white uppercase text-sm font-bold">
                    <td class="px-2 p-2">#</td>
                    <td class="p-2">Хаанаас</td>
                    <td class="p-2">Хаашаа</td>
                    <td class="p-2">Тайлбар</td>
                    <td class="p-2">Мөнгөн дүн</td>
                    <td class="p-2">Хэзээ</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($transactions as $transaction)
                    <tr class="border divide-x text-base font-medium">
                        <td class="px-4 py-2">{{ $loop->iteration }}</td>
                        <td class="px-4 py-2">{{ $transaction->transaction_from }}</td>
                        <td class="px-4 py-2">{{ $transaction->transaction_to }}</td>
                        <td class="px-4 py-2">{{ $transaction->transaction_description }}</td>
                        <td class="px-4 py-2">{{ $transaction->transaction_amount }}</td>
                        <td class="px-4 py-2">{{ $transaction->created_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>