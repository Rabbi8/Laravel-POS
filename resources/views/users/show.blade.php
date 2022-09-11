@extends('users.user_layout')

@section('user_content')


      <div class="container overflow-hidden text-center " style="margin:50px 0 50px 0;">
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
    
@endsection