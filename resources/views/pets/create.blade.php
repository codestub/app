@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-6 col-sm-offset-3">
            <h1>Add a new pet!</h1>
            <form method="POST" action="/pets">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="breed">Breed:</label>
                    <input type="text" class="form-control" id="breed" name="breed" required>
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea class="form-control" id="description" name="description" required></textarea>
                </div>
                <div class="form-group">
                    <label for="date_of_birth">Date of birth:</label>
                    <input type="date" class="form-control" id="date-of-birth" name="date_of_birth" required>
                </div>
                <div class="form-group">
                    <label for="price">Price:</label>
                    <input type="number" class="form-control" id="price" name="price" required>
                </div>
                <div class="form-group">
                    <label for="males">Males:</label>
                    <input type="number" class="form-control" id="males" name="males" required>
                </div>
                <div class="form-group">
                    <label for="females">Females:</label>
                    <input type="number" class="form-control" id="females" name="females" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>

            @include('layouts.errors')

        </div>
    </div>
@endsection