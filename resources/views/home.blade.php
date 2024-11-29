@extends('layouts.app')

@section('content')
    <div class="cards">
    @foreach ($employments as $employment)
        <div class="employment">
            <div class="p-10">  
                <div class="max-w-sm rounded overflow-hidden shadow-lg">
                    <img class="w-full" src="{{$employment->image}}" alt="a">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">{{$employment->employment}}</div>
                        <p class="text-gray-700 text-base">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, Nonea! Maiores et perferendis eaque, exercitationem praesentium nihil.
                        </p>
                    </div>
                    <div class="px-6 pt-4 pb-2">
                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{$employment->country}}</span>
                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">
                            @if($employment->state == 0)
                            <p>Finished</p>
                            @else
                            <p>In Progress</p>
                            @endif
                        </span> 
                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{$employment->contact}}</span>
                    </div>
                    <div class="px-6 pt-4 pb-2 info"> 
                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2"><a href="http://127.0.0.1:8000/employment/{{$employment->id}}"> More Info </a></span>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    </div>
@endsection


