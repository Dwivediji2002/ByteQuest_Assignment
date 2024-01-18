@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class = "card-body">
            @if(session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <h1>Priyam Dwivedi</h1>
        </div>
    </div>
@endsection