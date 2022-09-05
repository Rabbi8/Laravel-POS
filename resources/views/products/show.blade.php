@php

'hekkid';

@endphp

@extends('layout.main');

@section('page_heading')

<div class="row d-flex justify-content-between my-5">
    <div class= "col-md-5 d-flex">
      <a  href="{{ route('products.index') }}"><span class="btn btn-success mr-1"> Back</span> </a>
      <h1 class="text-success h4 text-gray-800"> <span class="btn btn-success">  {{ $product->title. ' '.$mode }}  </span>   </h1>
    </div>
</div>

@stop

@section('main_content')

<div class="container overflow-hidden text-center">

    <div class="row gx-5">
      <div class="col">
       <div class="p-3 border bg-light"><strong>Title</strong></div>
      </div>
      <div class="col">
        <div class="p-3 border bg-light">{{ $product->title }}</div>
      </div>
    </div>
    
    <div class="row mt-1">
      <div class="col">
       <div class="p-3 border bg-light "><strong>Category</strong></div>
      </div>
        @if(empty($product->category->title))
                <div class="col">
                    <div class="p-3 border bg-light">{{ 'No Group' }}</div>
                </div>
        @else
                <div class="col">
                    <div class="p-3 border bg-light">{{ $product->category->title }}</div>
                </div>
        @endif
    </div>

      <div class="row mt-1">
        <div class="col">
         <div class="p-3 border bg-light "><strong>Cost Price</strong></div>
        </div>
        <div class="col">
          <div class="p-3 border bg-light">{{ $product->cost_price }}</div>
        </div>
      </div>

      <div class="row mt-1">
        <div class="col">
         <div class="p-3 border bg-light "><strong>Price</strong></div>
        </div>
        <div class="col">
          <div class="p-3 border bg-light">{{ $product->price }}</div>
        </div>
      </div>

      <div class="row mt-1">
        <div class="col">
         <div class="p-3 border bg-light "><strong>Unit</strong></div>
        </div>
        <div class="col">
          <div class="p-3 border bg-light">{{ $product->unit }}</div>
        </div>
      </div>

      <div class="row mt-1">
        <div class="col">
         <div class="p-3 border bg-light "><strong>Created</strong></div>
        </div>
        <div class="col">
          <div class="p-3 border bg-light">{{ $product->created_at }}</div>
        </div>
      </div>
      <div class="row mt-1">
        <div class="col">
         <div class="p-3 border bg-light "><strong>Last Updated</strong></div>
        </div>
        <div class="col">
          <div class="p-3 border bg-light">{{ $product->updated_at }}</div>
        </div>
      </div>

      <div class="row mt-1 mb-5">
        <div class="col">
         <div class="p-3 border bg-light "><strong>Description</strong></div>
        </div>
        <div class="col">
          @if(empty($product->description))
          <div class="p-3 border bg-light">{{ 'Description is not Available' }}</div>
          @else
          <div class="p-3 border bg-light">{{ $product->description }}</div>
          @endif
        </div>
      </div>



  </div>

@stop