@extends('layouts.app')

@section('content')
    <div class="card mb-2">
        <div class="card-header">
            {{ __('Cimanky') }}
        </div>
        <div class="card-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        User
                        <x-forms.input />
                        Pass
                        <x-forms.input />
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
