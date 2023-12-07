<x-layout>
    <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow mx-8 font-sans text-xl">
        <div class="uppercase text-4xl mb-4">{{$student['id']}}</div>
        <ul>
        <li class="m-2 uppercase">
            name : {{$student['name']}}
        </li>
        <li class="m-2 uppercase">
            Age  : {{$student['age']}}
        </li>
        </ul>
    </div>
</x-layout>