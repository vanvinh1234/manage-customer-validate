@extends('home')
@section('title', 'customer list')
@section('content')
    <div class="col-12">
        <div class="row">
            <div class="col-12"><h1>Customer List</h1></div>
            <div class="col-12">
                @if (Session::has('success'))
                    <p class="text-success">
                        <i class="'fa fa-check" aria-hidden="true"></i>{{Session::get('success')}}
                    </p>
                @endif
            </div>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">BirthDay</th>
                    <th scope="col">Email</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @if(count($customers)==0)
                    <tr>
                        <td colspan="4">No Data</td>
                    </tr>
                @else
                    @foreach($customers as $key=>$customer)
                        <tr>
                            <th scope="row">{{++$key}}</th>
                            <td>{{$customer->name}}</td>
                            <td>{{$customer->birth}}</td>
                            <td>{{$customer->email}}</td>
                            <td><a href="{{route('customers.edit', $customer->id)}}">Edit</a></td>
                            <td><a href="{{route('customers.destroy', $customer->id)}}" class=" text-danger"
                                   onclick="return confirm('Are you sure')">Delete</a></td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
            <a class="btn btn-primary" href="{{route('customers.create')}}">Create</a>
        </div>
    </div>
@endsection

