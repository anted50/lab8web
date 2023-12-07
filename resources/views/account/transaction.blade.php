<x-layout>
    <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow mx-8 font-sans text-xl">
        <form action="{{ url('/transaction') }}" method="POST">
            @csrf
            <label for="from" class="text-gray-400 text-sm uppercase">Шилжүүлэх данс</label>
            <input id="from" name="from" type="number" class="mt-2 rounded h-10 w-72 border-2 p-2" required />
            <label for="to" class="text-gray-400 text-sm uppercase">Хүлээн авах данс</label>
            <input id="to" name="to" type="number" class="mt-2 rounded h-10 w-72 border-2 p-2" required />
            <label for="amount" class="text-gray-400 text-sm uppercase">Гүйлгээний дүн</label>
            <input id="amount" name="amount" type="number" class="mt-2 rounded h-10 w-72 border-2 p-2" required />
            <label for="description" class="text-gray-400 text-sm uppercase">Гүйлгээний утга</label>
            <input id="description" name="description" type="text" class="mt-2 rounded h-10 w-72 border-2 p-2"
                required />
            <input type="submit" class="mt-2 rounded h-10 w-72 border-2 bg-slate-800 text-white" value="Шилжүүлэх" />
        </form>
        @if ($errors->any())
            {{ implode('', $errors->all(':message')) }}
        @endif
    </div>
</x-layout>
