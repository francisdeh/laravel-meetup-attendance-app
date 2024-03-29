@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">
                    
                    @isset ($message)
                        {{ $message }} ({{count($visitors)}})
                   
                    @else
                    All Visitors ({{count($visitors)}})
                    @endisset
                    </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    @include('partials.form._visitorlist')
                </div>
            </div>
        </div>
    </div>
</div>



 
@endsection
