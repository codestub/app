@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="page-header">Checkout our top doggies!</h1>
        @foreach($pets as $pet)
            <div class="panel" style="padding: 15px">
                <div class="media">
                    <div class="media-left media-middle">
                        <a href="#">
                            <img class="media-object" src="http://lorempixel.com/100/100/animals/8/" alt="...">
                        </a>
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">{{ $pet->breed }}</h3>
                        {{ $pet->created_at }}
                        <p>
                            {{ $pet->description }}
                        </p>
                    </div>
                </div>
            </div>

        @endforeach

        {{ $pets->links() }}
    </div>
@endsection