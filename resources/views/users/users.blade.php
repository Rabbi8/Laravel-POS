@extends('layout.main')

@section('page_heading')

<div class="row d-flex justify-content-between my-5">
    <h1 class="h3 text-gray-800"> Users </h1>
   <a class="bg-success pt-2 px-4 rounded text-decoration-none text-white font-weight-bold " href="{{ route('users.create') }}" > Add user </a>

</div>

@stop


@section('main_content')



 {{--  <!-- Begin Page Content --> --}}
 <div class="container-fluid">

 {{--  <!-- Page Heading --> --}}
<h1 class="h3 mb-2 text-gray-800">Tables</h1>
<p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
    For more information about DataTables, please visit the <a target="_blank"
        href="https://datatables.net">official DataTables documentation</a>.</p>

        {{-- <!-- DataTales Example --> --}}
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">

                    
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                          {{--  <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>  --}}

                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Created_at</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>

                         {{--   <tr>
                                    
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                </tr>
                        --}}

                             <tr>
                                <th>ID</th>
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
                                <td>{{ $value->name }}</td>
                                <td>{{ $value->email }}</td>
                                <td>{{ $value->phone }}</td>
                                <td>{{ $value->address }}</td>
                                <td>{{ $value->created_at }}</td>
                                <td>
                                    
                                    <a class="btn btn-success" href="{{ route('users.show', ['user'=> $value->id ] ) }}"> details</a> &nbsp; &nbsp;
                                    <a class="btn btn-primary" href="{{ route('users.edit', ['user' => $value->id]) }}"> edit </a> &nbsp; &nbsp;
                                    <form class="d-inline-block" action="{{ route('users.destroy', ['user'=> $value->id ]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger"  onclick="return confirm('are you sure?')" type="submit">Delete</button>
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