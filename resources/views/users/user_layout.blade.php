@extends('layout.main');

@section('page_heading')

<div class="row d-flex justify-content-between my-5">
    <div class= "col-md-5 d-flex">
      <a  href="{{ url('/dashboard') }}"><span class="btn btn-success mr-1">Back</span> </a>
      <div  href="" disabled><span class="btn btn-secondary mr-1">User is <strong>{{ $users->name }}</strong></span> </div>
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

<div class="row">

  <div class="nav flex-column nav-pills me-3 col-md-2" id="v-pills-tab" role="tablist" aria-orientation="vertical">
    <a class="nav-link @if($tabs=='') active @endif" href="{{ route('users.show', ['user'=> $users->id]) }}">User Information</a>
    <a class="nav-link @if($tabs=='sales') active @endif" href="{{route('user.sales', ['user'=> $users->id])}}">Sales</a>
    <a class="nav-link @if($tabs=='purchases') active @endif" href="{{route('user.purchases', ['user'=> $users->id])}}">Purchases</a>
    <a class="nav-link @if($tabs=='payments') active @endif" href="{{route('user.payments', ['user' => $users->id])}}">Payments</a>
    <a class="nav-link @if($tabs=='receipts') active @endif" href="{{route('user.receipts', ['user' => $users->id])}}">Receipts</a>
  </div>

  <div class="tab-content card col-md-9 shadow-lg rounded" id="v-pills-tabContent">
    <div class="tab-pane fade show active"  id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0" >
          @yield('user_content')
    </div>
  </div>

</div>






@endsection