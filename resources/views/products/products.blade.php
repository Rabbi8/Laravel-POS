
@extends('layout.main')

@section('page_heading')

<div class="row d-flex justify-content-between my-2">
    <h1 class="h3 text-gray-800"> Products </h1>
   <a class="bg-success pt-2 px-4 rounded text-decoration-none text-white font-weight-bold " href="{{ route('products.create') }}" ><i class="fa-solid fa-plus"></i> Add product </a>

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
                                <th>Title</th>
                                <th>Category</th>
                                <th>Price</th>
                                <th>Cost Price</th>
                                <th>Unit</th>
                                <th style="width:300px">Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Price</th>
                                <th>Cost Price</th>
                                <th>Unit</th>
                                <th style="width:300px">Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($products as $key => $value)
                            <tr>
                                <td>{{ $value->id }}</td>
                                <td>{{ $value->title }}</td>

                                @if( empty($value->category->title))
                                <td>{{ 'Out of Group' }}</td> 
                                @else
                                <td>{{ $value->category->title }}</td> 
                                @endif

                                <td>{{ $value->price }}</td>
                                <td>{{ $value->cost_price }}</td>
                                <td>{{ $value->unit }}</td>
                                <td>
                                    <a class="btn btn-success" href="{{ route('products.show', ['product'=> $value->id ] ) }}"><i class="fa-sharp fa-solid fa-eye"></i> details</a> &nbsp;
                                    <a class="btn btn-primary" href="{{ route('products.edit', ['product' => $value->id]) }}"><i class="fa-sharp fa-solid fa-edit"></i> edit </a> &nbsp;
                                    <form class="d-inline-block" action="{{ route('products.destroy', ['product'=> $value->id ]) }}" method="POST">
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