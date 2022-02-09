@extends('layout.main')

@section('content')
@section('title')
    صفحه قیمت گذاری محصول
@endsection

<div class="d-flex justify-content-center">
    <form method="post" action="{{route('pro.price.exp.insert')}}">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">نام محصول</label>
            <input type="text" class="form-control" id="product" name="product">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">قیمت محصول</label>
            <input type="number" class="form-control" id="price" name="price">
        </div>
        <div class="mb-3 form-check">
            <label for="exampleInputPassword1" class="form-label">تاریخ انقضا روز</label>
            <input type="text" class="form-control" id="exp-day" name="exp-day">
            <label for="exampleInputPassword1" class="form-label">تاریخ انقضا ساعت</label>
            <input type="text" class="form-control" id="exp-hour" name="exp-hour">
        </div>
        <button type="submit" class="btn btn-primary">ثبت</button>
    </form>
</div>

<div class="d-flex justify-content-center">
    <table class="table  w-50 mt-4">
        <thead>
        <tr>
            <th>نام</th>
            <th>قیمت</th>
            <th>تاریخ انقضا</th>
            <th>ویرایش</th>
        </tr>
        </thead>
        <tbody>
        @foreach($subs as $sub)
            <tr>
                <td>{{$sub->product}}</td>
                <td>{{$sub->price}}</td>
                <td style="direction: rtl">
                    @php
                        $v = verta($sub->expires_at);
                    @endphp
                    @if($sub->expired())
                        <span class="badge bg-danger">در{{ $v->formatDifference()}}تاریخ انقضا اتمام یافت</span>
                    @else
                        <span class="badge bg-primary">{{ $v->formatDifference()}}</span>
                    @endif
                </td>
                <td><a class="btn btn-info" href="{{route('pro.price.exp.edit' ,$sub->id)}}">edit</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

@endsection
