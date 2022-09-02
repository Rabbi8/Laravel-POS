@extends('layout.main');

@section('page_heading')

<div class="row d-flex justify-content-between my-5">
    <h1 class="text-success h4 text-gray-800 col-md-4"> <span class="btn btn-success">  {{ $users->name. ' '.$mode }}  </span>   </h1>
    <div class="col-md-8 text-right">
        <a class="btn btn-primary" href=""> <i class="fa-solid fa-plus"></i> New sale</a>
        <a class="btn btn-primary" href=""> <i class="fa-solid fa-plus"></i> New purchase</a>
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