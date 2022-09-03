@extends('layout.main');

@section('page_heading')

<div class="row d-flex justify-content-between my-5">
    <div class= "col-md-5 d-flex">
      <a  href="{{ url('/dashboard') }}"><span class="btn btn-success mr-1"> Back</span> </a>
      <h1 class="text-success h4 text-gray-800"> <span class="btn btn-success">  {{ $users->name. ' '.$mode }}  </span>   </h1>
    </div>
  
    <div class="col-md-7 text-right">
        <a class="btn btn-primary" href=""> <i class="fa-solid fa-plus"></i> New Sale</a>
        <a class="btn btn-primary" href=""> <i class="fa-solid fa-plus"></i> New Purchase</a>
        <a class="btn btn-primary" href=""> <i class="fa-solid fa-plus"></i> New Payment</a>
        <a class="btn btn-primary" href=""> <i class="fa-solid fa-plus"></i> New Receipt</a>
    </div>
</div>

@stop

@section('main_content')

<div class="container overflow-hidden text-center">

    <div class="row gx-5">
      <div class="col">
       <div class="p-3 border bg-light"><strong>Name</strong></div>
      </div>
      <div class="col">
        <div class="p-3 border bg-light">{{ $users->name }}</div>
      </div>
    </div>
    
    <div class="row mt-1">
      <div class="col">
       <div class="p-3 border bg-light "><strong>Group</strong></div>
      </div>
        @if(empty($users->group->title))
                <div class="col">
                    <div class="p-3 border bg-light">{{ 'No Group' }}</div>
                </div>
        @else
                <div class="col">
                    <div class="p-3 border bg-light">{{ $users->group->title }}</div>
                </div>
        @endif
    </div>

      <div class="row mt-1">
        <div class="col">
         <div class="p-3 border bg-light "><strong>Email</strong></div>
        </div>
        <div class="col">
          <div class="p-3 border bg-light">{{ $users->email }}</div>
        </div>
      </div>

      <div class="row mt-1">
        <div class="col">
         <div class="p-3 border bg-light "><strong>Phone</strong></div>
        </div>
        <div class="col">
          <div class="p-3 border bg-light">{{ $users->phone }}</div>
        </div>
      </div>

      <div class="row mt-1">
        <div class="col">
         <div class="p-3 border bg-light "><strong>Address</strong></div>
        </div>
        <div class="col">
          <div class="p-3 border bg-light">{{ $users->address }}</div>
        </div>
      </div>

      <div class="row mt-1">
        <div class="col">
         <div class="p-3 border bg-light "><strong>Join</strong></div>
        </div>
        <div class="col">
          <div class="p-3 border bg-light">{{ $users->created_at }}</div>
        </div>
      </div>
      <div class="row mt-1">
        <div class="col">
         <div class="p-3 border bg-light "><strong>Last Updated</strong></div>
        </div>
        <div class="col">
          <div class="p-3 border bg-light">{{ $users->updated_at }}</div>
        </div>
      </div>



  </div>

@stop