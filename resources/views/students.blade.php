<x-layout>
    <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow mx-8 font-sans text-xl">
        <div class="uppercase text-4xl mb-4">students</div>
        <ul>
        @foreach ($students as $student)
        <li class="m-2">
            <a href="/student/{{$student['id']}}">{{$student['id']}}</a>
        </li>
        @endforeach
    </ul>
    </div>
</x-layout>