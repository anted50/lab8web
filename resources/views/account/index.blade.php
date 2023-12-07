<x-layout>
    <div class="block max-w-xl p-6 bg-white border border-gray-200 rounded-lg shadow mx-8 font-sans text-xl">
        <table class="border">
            <thead>
                <tr class="bg-slate-800 text-left border text-white uppercase text-sm font-bold">
                    <td class="p-2 px-2">#</td>
                    <td class="p-2">Дансны дугаар</td>
                    <td class="p-2">Дансны нэр</td>
                    <td class="p-2">Дансны үлдэгдэл</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($accounts as $account)
                    <tr class="border divide-x text-base font-medium">
                        <td class="px-4 py-2">{{ $loop->iteration }}</td>
                        <td class="px-4 py-2 underline"><a href="/account/{{ $account->account_number }}">{{ $account->account_number }}</a></td>
                        <td class="px-4 py-2">{{ $account->account_name }}</td>
                        <td class="px-4 py-2">${{ $account->account_balance }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>
