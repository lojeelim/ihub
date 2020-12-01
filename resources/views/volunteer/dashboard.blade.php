@extends('layouts.app')

@section('content')
    @include('inc.sidenav')
    <section class="dashboard-section">
        <div class="row justify-content-center">
            <div class="col-12">
            <h1>volunteer</h1>
              @for($i =0 ; $i < 1 ; $i++)
                <h1>hello</h1>
              @endfor
            </div>
        </div>
    </section>

@endsection
