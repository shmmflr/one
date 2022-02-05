<x-test-component>
    <x-slot name="title">لیست کارمندان</x-slot>

    <h1 style="text-align: center">لیست کارمندان شرکت</h1>
    <div style="display: flex;justify-content: center">
        <table border="2">
            <thead>
            <tr>
                <th>ردیف</th>
                <th>نام</th>
            </tr>
            </thead>
            <tbody>
            @foreach($names as $key=>$name)
                <tr>
                    <td>{{$key=+1}}</td>
                    <td>{{$name}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>


</x-test-component>
