@extends('layouts.layout')

@section('main')
    <form action="{{route('users.store')}}" class="w-3/6 h-4/6 text-center m-auto border-2 p-10 mt-28" method="POST">
        @csrf
        <div class="relative h-14 z-0 mb-5 w-full">
            <input type="text" class="absolute text-indigo-800 bottom-0 right-0 left-0 w-full h-10 text-sm bg-transparent border-b-2 border-b-gray-400 text-center focus:border-b-indigo-600 valid:border-b-indigo-600 focus:outline-none peer" required name="first_name" id="" />
            <label id="label" for="" class="absolute m-auto top-6 right-0  left-0 text-gray-500 -z-10 transform peer-focus:text-indigo-600 peer-focus:top-0 peer-valid:text-indigo-600 peer-valid:top-0 peer-valid:text-sm peer-focus:text-xs duration-300">firstname</label>
        </div>
        <div class="relative h-14 z-0 mb-5 w-full">
            <input type="text" class="absolute text-indigo-800 bottom-0 right-0 left-0 w-full h-10 text-sm bg-transparent border-b-2 border-b-gray-400 text-center focus:border-b-indigo-600 valid:border-b-indigo-600 focus:outline-none peer" required  name="last_name" id="" />
            <label id="label" for="" class="absolute m-auto top-6 right-0  left-0 text-gray-500 -z-10 transform peer-focus:text-indigo-600 peer-focus:top-0 peer-valid:text-indigo-600 peer-valid:top-0 peer-valid:text-sm peer-focus:text-xs duration-300">lastname</label>

        </div>
        <div class="relative h-14 z-0 mb-5 w-full">
            <input type="email" class="absolute text-indigo-800 bottom-0 right-0 left-0 w-full h-10 text-sm bg-transparent border-b-2 border-b-gray-400 text-center focus:border-b-indigo-600 valid:border-b-indigo-600 focus:outline-none peer" required placeholder="" name="email" id="" />
            <label id="label" for="" class="absolute m-auto top-6 right-0  left-0 text-gray-500 -z-10 transform peer-focus:text-indigo-600 peer-focus:top-0 peer-valid:text-indigo-600 peer-valid:top-0 peer-valid:text-sm peer-focus:text-xs duration-300">Email</label>

        </div>

        <div class="relative h-14 z-0 mb-5 w-full">



            <select id="underline_select" name="city" class="block border-b-gray-400  text-center py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                <option value="null" selected disabled>select your city</option>
                <option class="bg-indigo-700 hover:text-bold text-white" value="tehran" >tehran</option>
                <option class="bg-indigo-700 hover:text-bold text-white" value="hamedan">hamedan</option>
                <option class="bg-indigo-700 hover:text-bold text-white" value="shiraz">shiraz</option>


            </select>
{{--            <label class="absolute  top-2 left-0  text-gray-500 -z-10 transform peer-focus:top-0 peer-focus:text-indigo-700--}}
{{--          duration-300" for="underline_select">Select One</label>--}}
{{--            <a href="/aboutOptions" class="text-indigo-400 hover:text-indigo-600 duration-300 absolute left-0 right-0 bottom-[-30px]" href="">About Options&rarr;</a>--}}
        </div>
        <button type="submit" value="submit" name="submit" class="bg-indigo-400 mt-9 text-white p-2 w-40 hover:bg-indigo-600 rounded-md duration-300">
            Submit
        </button>
    </form>
@endsection
