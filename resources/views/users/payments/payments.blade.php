@extends('users.user_layout')


@section('user_content')

<div class="container-fluid">

    {{-- <!-- DataTales Example --> --}}
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{{ $users->name}}</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="userSaleDataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>User</th>
                            <th>Amount</th>
                            <th>Note</th>
                            <th>Created_at</th>
                            <th style="width:300px">Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>User</th>
                            <th>Amount</th>
                            <th>Note</th>
                            <th>Created_at</th>
                            <th style="width:300px">Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($payments as $key => $value)
                        <tr>
                                @if( empty($value->user->name))
                            <td>{{ 'Out of Group' }}</td> 
                            @else
                            <td>{{ $value->user->name }}</td> 
                            @endif

                            <td>{{ $value->amount }}</td>
                            <td>{{ $value->note }}</td>
                            <td>{{ $value->created_at }}</td>
                            <td>
                                <a class="btn btn-success" href="{{ route('user.payments.show', ['user'=> $users->id, 'payment'=> $value->id ] ) }}"><i class="fa-sharp fa-solid fa-eye"></i> details</a> &nbsp;
                                <a class="btn btn-primary" href="{{ route('user.payments.edit', ['user'=> $users->id, 'payment'=> $value->id ]) }}"><i class="fa-sharp fa-solid fa-edit"></i> edit </a> &nbsp;
                                <form class="d-inline-block" action="{{ route('user.payments.destroy', ['payment'=> $value->id, 'user'=> $users->id ] ) }}" method="POST">
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