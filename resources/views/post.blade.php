<x-test-component>
    <x-slot name='title'>
        تست مورف
    </x-slot>
<x-slot name='style'>
    <style>
        .rate {
    float: left;
    height: 46px;
    padding: 0 10px;
}
.rate:not(:checked) > input {
    position:absolute;
    top:-9999px;
}
.rate:not(:checked) > label {
    float:right;
    width:1em;
    overflow:hidden;
    white-space:nowrap;
    cursor:pointer;
    font-size:30px;
    color:#ccc;
}
.rate:not(:checked) > label:before {
    content: '★ ';
}
.rate > input:checked ~ label {
    color: #ffc700;    
}
.rate:not(:checked) > label:hover,
.rate:not(:checked) > label:hover ~ label {
    color: #deb217;  
}
.rate > input:checked + label:hover,
.rate > input:checked + label:hover ~ label,
.rate > input:checked ~ label:hover,
.rate > input:checked ~ label:hover ~ label,
.rate > label:hover ~ input:checked ~ label {
    color: #c59b08;
}
        </style>
</x-slot>


<div class="d-flex justify-content-center w-75 mx-auto">
   <table class="table table-light">
        <thead class="thead-dark">
            <tr style="text-align: center">
                <th>#</th>
                <th>title</th>
                <th>content</th>
                <th>created_by</th>
                <th style="width: 200px">rate</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $key=>$post)
            <tr>
                <td>{{$key++}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->content}}</td>
                <td>{{$post->userName()}}</td>
                <td>
                  <form method="post" action="{{route('rateing.post',$post->id)}}">
                    @csrf
                    <div class="rate">
                        <input type="radio" id="star5" name="rate" value="5" />
                        <label for="star5" title="text">5 stars</label>
                        <input type="radio" id="star4" name="rate" value="4" />
                        <label for="star4" title="text">4 stars</label>
                        <input type="radio" id="star3" name="rate" value="3" />
                        <label for="star3" title="text">3 stars</label>
                        <input type="radio" id="star2" name="rate" value="2" />
                        <label for="star2" title="text">2 stars</label>
                        <input type="radio" id="star1" name="rate" value="1" />
                        <label for="star1" title="text">1 star</label>
                      </div>
                    <button>ارسال</button>
                  </form>
                </td>
            </tr>
                
            @endforeach
        
        </tbody>
    </table>
</div>


<x-slot name='js'>
    <script>
          @if(session()->has('msg'))
        Swal.fire(
            'انجام شد!',
            '{{ session()->get('msg') }}',
            'success'
        )
        // {{session()->forget('msg')}}
        @endif
    
        </script>
</x-slot>


</x-test-component>