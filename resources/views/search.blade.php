<x-layout>
    <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow mx-8 font-sans text-xl">
        <h1 class="uppercase text-4xl font-bold ">Search student</h1>
        <p class="mt-2">Enter an ID:</p>
        <form action="search" method="POST" class="mt-2">
            @csrf
        <input type="text" name="studentId" class=" p-2 h-8 w-64 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-550" value="{{ old('studentId')}}">
        <input type="submit" value="search" class="bg-slate-300 rounded-lg h-8 w-16 border border-gray-300">
        </form>
        @if(isset($student))
            <div>
                <ul>
                    <li class="m-2 uppercase">
                        name : {{$student['id']}}
                    </li>
                    <li class="m-2 uppercase">
                        name : {{$student['name']}}
                    </li>
                    <li class="m-2 uppercase">
                        Age  : {{$student['age']}}
                    </li>
                 </ul>
            </div>
        @endif

        @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif
    </div>
</x-layout>