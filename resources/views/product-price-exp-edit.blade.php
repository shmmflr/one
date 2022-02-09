@extends('layout.main')

@section('content')
@section('title')
    صفحه قیمت گذاری محصول
@endsection

<div class="d-flex justify-content-center">
    <form method="post" action="{{route('pro.price.exp.update',$subscription->id)}}">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">نام محصول</label>
            <input type="text" class="form-control" id="product" name="product" value="{{$subscription->product}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">قیمت محصول</label>
            <input type="number" class="form-control" id="price" name="price" value="{{$subscription->price}}">
        </div>
        <div class="mb-3 form-check">

        </div>
        <button type="submit" class="btn btn-primary">ثبت</button>
    </form>
</div>


@endsection
