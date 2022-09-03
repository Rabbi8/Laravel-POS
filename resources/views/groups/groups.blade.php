
@extends('layout.main')

@section('page_heading')

<div class="row d-flex justify-content-between my-2">
    <h1 class="h3 text-gray-800"> Groups </h1>
   <a class="bg-success pt-2 px-4 rounded text-decoration-none text-white font-weight-bold " href="{{ route('groups.create') }}" ><i class="fa-solid fa-plus"></i> Add Group </a>

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
                                <th>##</th>
                                <th>Title</th>
                                <th>Created_at</th>
                                <th>Last Updated</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>##</th> 
                                <th>Title</th>
                                <th>Created_at</th>
                                <th>Last Updated</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($groups as $key => $value)
                            <tr>
                                <td>{{ $loop->index+1 }}</td>
                                <td>{{ $value->title }}</td>
                                <td>{{ $value->created_at }}</td>
                                <td>{{ $value->updated_at }}</td>
                                <td>
                                    <a class="btn btn-primary" href="{{ route('groups.edit', ['group' => $value->id]) }}"><i class="fa-sharp fa-solid fa-edit"></i> edit </a> &nbsp;
                                    <form class="d-inline-block" action="{{ route('groups.destroy', ['group'=> $value->id ]) }}" method="POST">
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