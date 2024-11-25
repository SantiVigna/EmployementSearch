@extends('layouts.app')

@section('content')
    <div class="journals">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Date</th>
                    <th scope="col">Entry</th>
                    <th scope="col">Emotion</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($employments as $employment)
                    <tr>
                        <td>{{$employment->created_at}}</td>
                        <td>{{$employment->entry}}</td>
                        <td><img src="{{asset($employment->emotion)}}" class="emotionImg" alt="emotion"></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
