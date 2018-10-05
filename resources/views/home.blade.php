@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    {{--Vue App Component App.vue--}}
                    <app></app>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
