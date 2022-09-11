
@extends('layout.main')

@section('page_heading')

<div class="row d-flex justify-content-end my-2">
    <h1 class="h3 text-gray-800"> Users </h1>
   <a class="bg-success py-3 px-4 rounded text-decoration-none text-white font-weight-bold col-md-1" href="{{ route('users.create') }}" ><i class="fa-solid fa-plus"></i> Add user </a>

</div>

@stop


@section('main_content')



 {{--  <!-- Begin Page Content --> --}}
 <div class="container-fluid">

        {{-- <!-- DataTales Example --> --}}
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">

                    
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Group</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Created_at</th>
                                <th style="width:300px">Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Group</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Created_at</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($users as $key => $value)
                            <tr>
                                <td>{{ $value->id }}</td>

                                @if( empty($value->group->title))
                                <td>{{ 'Out of Group' }}</td> 
                                @else
                                <td>{{ $value->group->title }}</td> 
                                @endif

                                <td>{{ $value->name }}</td>
                                <td>{{ $value->email }}</td>
                                <td>{{ $value->phone }}</td>
                                <td>{{ $value->address }}</td>
                                <td>{{ $value->created_at }}</td>
                                <td>
                                    <a class="btn btn-success" href="{{ route('users.show', ['user'=> $value->id ] ) }}"><i class="fa-sharp fa-solid fa-eye"></i> details</a> &nbsp;
                                    <a class="btn btn-primary" href="{{ route('users.edit', ['user' => $value->id]) }}"><i class="fa-sharp fa-solid fa-edit"></i> edit </a> &nbsp;
                                    <form class="d-inline-block" action="{{ route('users.destroy', ['user'=> $value->id ]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger"  onclick="return confirm('are you sure?')" type="submit"><i class="fa-sharp fa-solid fa-trash"></i> Delete</button>
                                    </form>
                                </td>

                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

</div>


@endsection