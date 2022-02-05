<x-test-component>
    <h1 style="text-align: center">فرم ثبت نام</h1>

    <div class="d-flex justify-content-center">
        <form method="post" action="{{route('user.update',$user->id)}}">
            @csrf
            @method('PUT')
            نام :
            <input type="text" name="l_name" value="{{$user->l_name}}">
            <br>
            <br>
            نام خانوادگی :
            <input type="text" name="f_name" value="{{$user->f_name}}">
            <br>
            <br>
            سن :
            <input type="number" name="age" value="{{$user->age}}">
            <br>
            <br>

            <input type="submit" value="send">
        </form>
    </div>
    <hr>
</x-test-component>
