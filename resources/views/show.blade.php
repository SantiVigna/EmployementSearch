@extends('layouts.app')

@section('content')

<div>
    <div class="bg-gray-100 dark:bg-gray-800 py-8">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row -mx-4">
                <div class="md:flex-1 px-4">
                    <div class="h-[460px] rounded-lg bg-gray-300 dark:bg-gray-700 mb-4">
                        <img class="w-full h-full object-cover" src="{{$employment->image}}" alt="Product Image">
                    </div>
                    <div class="flex -mx-2 mb-4">
                        <div class="w-1/2 px-2">
                            <a href="http://192.168.1.44:8000"><button class="w-full bg-gray-900 dark:bg-gray-600 text-white py-2 px-4 rounded-full font-bold hover:bg-gray-800 dark:hover:bg-gray-700">Go back</button></a>
                        </div>
                    </div>
                </div>
                <div class="md:flex-1 px-4">
                    <h2 class="text-2xl font-bold text-gray-800 dark:text-white mb-2">{{$employment->employment}}</h2>
                    <p class="text-gray-600 dark:text-gray-300 text-sm mb-4">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed
                        ante justo. Integer euismod libero id mauris malesuada tincidunt.
                    </p>
                    <div class="flex mb-4">
                        <div class="mr-4">
                            <span class="font-bold text-gray-700 dark:text-gray-300">Company:</span>
                            <span class="text-gray-600 dark:text-gray-300">{{$employment->company}}</span>
                        </div>
                        <div>
                            <span class="font-bold text-gray-700 dark:text-gray-300">State:</span>
                            <span class="text-gray-600 dark:text-gray-300">
                                @if($employment->state == 0)
                                <span class="rounded-full bg-green-200 px-3 py-1 text-xs font-semibold text-green-900">Finished</span>
                                @else
                                <span class="rounded-full bg-yellow-200 px-3 py-1 text-xs font-semibold text-yellow-900">In Progress</span>
                                @endif
                            </span>
                        </div>
                    </div>
                    <div class="mb-4">
                        <span class="font-bold text-gray-700 dark:text-gray-300">Information:</span>
                        <div class="flex items-center mt-2">
                            <button class="bg-gray-300 dark:bg-gray-700 text-gray-700 dark:text-white py-2 px-4 rounded-full font-bold mr-2 hover:bg-gray-400 dark:hover:bg-gray-600">{{$employment->contact}}</button>
                            <button class="bg-gray-300 dark:bg-gray-700 text-gray-700 dark:text-white py-2 px-4 rounded-full font-bold mr-2 hover:bg-gray-400 dark:hover:bg-gray-600">{{$employment->country}}</button>
                        </div>
                    </div>
                    <div>
                        <span class="font-bold text-gray-700 dark:text-gray-300">Follow-Up:</span>
                        <p class="text-gray-600 dark:text-gray-300 text-sm mt-2">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
                            sed ante justo. Integer euismod libero id mauris malesuada tincidunt. Vivamus commodo nulla ut
                            lorem rhoncus aliquet. Duis dapibus augue vel ipsum pretium, et venenatis sem blandit. Quisque
                            ut erat vitae nisi ultrices placerat non eget velit. Integer ornare mi sed ipsum lacinia, non
                            sagittis mauris blandit. Morbi fermentum libero vel nisl suscipit, nec tincidunt mi consectetur.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection 