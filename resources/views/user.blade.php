<x-test-component>
    <x-slot name="style">
        <style>
            #parent, #parent2 {
                /* can be any value */
                width: 300px;
                text-align: right;
                direction: rtl;
                position: relative;
            }

            #parent, #parent2 .select2-container--open + .select2-container--open {
                left: auto;
                right: 0;
                width: 100%;
            }
        </style>
    </x-slot>

    <h1 style="text-align: center">فرم ثبت نام</h1>

    <div class="d-flex justify-content-center">
        <form method="post" action="{{route('user.store')}}">
            @csrf
            نام : <input type="text" name="l_name" value="{{old('l_name')}}">
            @error('l_name')
            {{$message}}
            @enderror
            <br>
            <br>
            نام خانوادگی :<input type="text" name="f_name" value="{{old('f_name')}}">
            @error('f_name')
            {{$message}}
            @enderror
            <br>

            <br>
            سن :<input type="number" name="age" value="{{old('age')}}">
            @error('age')
            {{$message}}
            @enderror
            <br>
            <br>
            جنسیت:
            <div id="parent2">
                <select id="gender" name="gender">
                    <option value="-1">
                    </option>
                    <option value="female" @if (old('gender') == 'female') selected="selected" @endif>female</option>
                    <option value="male" @if (old('gender') == 'male') selected="selected" @endif>male</option>
                </select>
            </div>
            @error('gender')
            {{$message}}
            @enderror
            <br>
            وضعیت خدمت:
            <div id="parent">
                <select id="military" class="js-example-basic-single" name="military">
                    <option value="-1"></option>
                    <option value="0">انجام داده</option>
                    <option value="1">معاف</option>
                </select>
            </div>
            @error('military')
            {{$message}}
            @enderror
            <br>

            <input type="submit" value="send">
        </form>

    </div>
    <a class="btn btn-info" href="{{route('home')}}">home</a>
    <hr>
    <div class="d-flex justify-content-center">
        <table class="table w-50">
            <thead>
            <tr>
                <th>ردیف</th>
                <th>نام</th>
                <th> خ نام</th>
                <th>سن</th>
                <th>حذف</th>
                <th>ویرایش</th>
            </tr>
            </thead>
            <tbody>
            @forelse($users as $key=>$user)
                <tr>
                    <td>{{$key=$key+1}}</td>
                    <td>{{$user->l_name}}</td>
                    <td>{{$user->f_name}}</td>
                    <td>{{$user->age}}</td>
                    <td>
                        <form method="post" action="{{route('user.destroy',$user->id)}}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">حذف</button>
                        </form>
                    </td>
                    <td><a href="{{route('user.edit',$user->id)}}" class="btn btn-warning">بروزرسانی</a></td>
                </tr>
            @empty
                <tr>

                    <p>اطالاعاتی جهت نمایش وجود ندارد</p>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
    {{--    <div>--}}
    {{--        {{$users->links()}}--}}
    {{--    </div>--}}
    <div class="container mt-5 text-center">
        <h2 class="mb-4">
            Laravel Import and Export CSV & Excel to Database Example
        </h2>
        <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-4" style="max-width: 500px; margin: 0 auto;">
                <div class="custom-file text-left">
                    <input type="file" name="file" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
            </div>
            <button class="btn btn-primary">Import data</button>
            <a class="btn btn-success" href="{{ route('export') }}">Export data</a>
        </form>
    </div>

    <x-slot name="js">
        <script>
            $(document).ready(function () {
                $('#military').select2({
                        width: '100%',
                        dir: "rtl",
                        dropdownAutoWidth: true,
                        dropdownParent: $('#parent'),
                        placeholder: {
                            id: '-1', // the value of the option
                            text: 'وضعیت نظام وظیفه'
                        },
                        allowClear: true,

                    }
                );
                $('#gender').select2({
                        width: '100%',
                        // language: 'fa',
                        dir: "rtl",
                        dropdownAutoWidth: true,
                        dropdownParent: $('#parent2'),
                        placeholder: {
                            id: '-1', // the value of the option
                            text: 'جنسیت'
                        },
                        allowClear: true,
                        minimumInputLength: 2
                        // tags: true,

                    }
                );
            });
        </script>
    </x-slot>
</x-test-component>
