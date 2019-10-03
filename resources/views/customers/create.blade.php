@extends('home')
@section('title','Add new customer')
@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1>Add new customer</h1>
            </div>
            <div class="col-12">
                <form method="post" action="{{ route('customers.store') }}">
                    @csrf
                    <div class="form-group">
                        <label>Name Customer</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="text" class="form-control" name="email" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">BirthDay</label>
                        <input type="date" class="form-control" name="birth">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <div class="error-message">
        @if($errors->any())
            @foreach($errors->all() as $nameError)
                <p style="color:red">{{$nameError}}</p>
            @endforeach
        @endif
    </div>
@endsection
