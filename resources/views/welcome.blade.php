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

<a class="btn btn-danger" href="{{route('user.index')}}">users</a>
<a class="btn btn-danger" href="{{route('pro.price.exp')}}">product</a>
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
