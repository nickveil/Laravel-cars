@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <a href='test'>Index Test button</a>
                    <a href='test/create'>Create Test button</a>
                    <a href='test/store.1'>Store Test button</a>
                    <a href='test/show'>Show Test button</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
