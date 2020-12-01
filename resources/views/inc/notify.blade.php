@if(count($errors) > 0)
    @foreach($errors->all() as $r)
        <div class="alert alert-danger">
            {{$r}}
        </div>
    @endforeach
@endif

@if(session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
@endif

@if(session('errror'))
    <div class="alert alert-danger">
        {{session('err')}}
    </div>
@endif