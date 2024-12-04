@extends('layouts.app')

@section('content')

<div class="mx-auto max-w-screen-lg px-4 py-8 sm:px-8">
    <div class="overflow-y-hidden rounded-lg border">
      <div class="overflow-x-auto">
        <table class="w-full">
          <thead>
            <tr class="bg-blue-600 text-left text-xs font-semibold uppercase tracking-widest text-white">
              <th class="px-5 py-3">ID</th>
              <th class="px-5 py-3">Employment</th>
              <th class="px-5 py-3">Company</th>
              <th class="px-5 py-3">Country</th>
              <th class="px-5 py-3">Contact</th>
              <th class="px-5 py-3">Status</th>
            </tr>
          </thead>
          <tbody class="text-gray-500">
            @foreach ($employments as $employment)
            <tr>
              <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                <p class="whitespace-no-wrap">{{$employment->id}}</p>
              </td>
              <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                <div class="flex items-center">
                  <div class="h-10 w-10 flex-shrink-0">
                    <img class="h-full w-full rounded-full" src="{{$employment->image}}" alt="" />
                  </div>
                  <div class="ml-3">
                    <p class="whitespace-no-wrap"><a href="http://127.0.0.1:8000/{{$employment->id}}">{{$employment->employment}}</a></p>
                  </div>
                </div>
              </td>
              <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                <p class="whitespace-no-wrap">{{$employment->company}}</p>
              </td>
              <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                <p class="whitespace-no-wrap">{{$employment->country}}</p>
              </td>
              <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                <p class="whitespace-no-wrap">{{$employment->contact}}</p>
              </td>
              <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                <span class="rounded-full px-3 py-1 text-xs font-semibold">Active</span>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@section('content')

