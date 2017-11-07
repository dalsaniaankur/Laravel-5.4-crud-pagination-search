@extends('layouts.default')
 
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>CRUD</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('crud.create') }}"> Create New Item</a>
            </div>
        </div>
    </div>
    <div class="container">
        <form action="./" method="GET" role="search">
             
            <div class="input-group">
                <input type="text" class="form-control" name="search"
                    placeholder="Search users" > 
                    <span class="input-group-btn">
                    <button type="submit" class="btn btn-success">
                        Search
                    </button>
                </span>
            </div>
        </form>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th width="280px">Action</th>
        </tr>
    @foreach ($items as $key => $item)
    <tr>
        
        <td>{{ $item->title }}</td>
        <td>{{ $item->description }}</td>
        <td>
            <a class="btn btn-primary" href="{{ route('crud.edit',$item->id) }}">Edit</a>
            {!! Form::open(['method' => 'DELETE','route' => ['crud.destroy', $item->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
    </table>
    {!! $items->render() !!}
@endsection