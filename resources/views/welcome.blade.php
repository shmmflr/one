@extends('layout.main')

@section('content')
@section('title')
    نخست
@endsection
@php
    $number=[11,25,336,24,95,10,50,125,100];
@endphp

<div style="display: flex;justify-content: center">

    <table border="1">
        <thead>
        <tr>
            <th>row</th>
            <th>name</th>
            <th>fname</th>
            <th>age</th>
        </tr>
        </thead>
        <tbody>

        <tr>
            <td>1</td>
            <td>
                @fontBold(ali)
            </td>
            <td>alavi</td>
            <td>
                @is_number('ali')

                @endif
            </td>
        </tr>

        </tbody>
    </table>
</div>

<div class="mt-3 d-flex justify-content-center">
    <a class="btn btn-danger" href="{{route('user.index')}}">users</a>
    <a class="btn btn-info" href="{{route('pro.price.exp')}}">product</a>
    <a class="btn btn-primary" href="{{route('posts')}}">posts</a>
    <a class="btn btn-secondary" href="{{route('ioc')}}">ioc</a>
    <a class="btn btn-warning" href="{{route('show.log')}}">show logs</a>
    <a class="btn btn-light" href="{{route('collection')}}">collection</a>
    <a class="btn btn-danger" href="{{route('cache')}}">cache</a>
    <a class="btn btn-info" href="{{route('helper')}}">hepler</a>
    <a class="btn btn-primary" href="{{route('lang')}}">lang</a>
    <a class="btn btn-secondary" href="{{route('facade')}}">facade</a>
    {{-- my helper is test --}}
    <span class="badge badge-danger badge-pill"> {{test('shoeib')}}</span>
    {{-- my helper is test --}}
</div>
<ul>
    @guest()
        @isset($number)

            @for($i=0;$i<count($number) ;$i++)

                <li>
                    {{$number[$i]}}
                </li>
            @endfor

        @endisset
    @endguest
</ul>
@endsection
