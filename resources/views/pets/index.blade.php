@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="page-header">Checkout our top doggies!</h1>
        @foreach($pets as $pet)
            <div class="panel" style="padding: 15px">
                <div class="media">
                    <div class="media-left media-top">
                        <a href="#">
                            <img class="media-object" src="http://lorempixel.com/100/100/animals/8/" alt="...">
                        </a>
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">{{ $pet->breed }}</h3>
                        <p>
                            {{ $pet->created_at }}
                        </p>
                        <p>
                            {{ $pet->description }}
                        </p>
                        <p>
                            {{ $pet->user->name }}
                        </p>
                    </div>
                </div>
            </div>

        @endforeach

        {{ $pets->links() }}
    </div>
@endsection