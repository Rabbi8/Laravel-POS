@extends('layout.main');

@section('page_heading')

<div class="row d-flex justify-content-around my-5">
    <h1 class="h3 text-gray-800">  {{ $mode }}    </h1>
</div>

@stop

@section('main_content')

<div class="d-flex justify-content-around col-md-12 ">

   

    @if($mode == 'Create product')
    {!! Form::open([ 'route' => ['products.store'],'method' => 'post', 'class' => ['border border-secondary rounded p-5']]) !!}
    @php
     $button = 'Created';
    @endphp

    @elseif( $mode == 'Edit product' )
    {!! Form::model($product,[ 'route' => ['products.update', $product->id ],'method' => 'put', 'class' => ['border border-secondary rounded p-5']]) !!}

    @php
     $button = 'Updated';
    @endphp

    @endif

            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
             @endif

        <div class="form-group">
            {!! Form::label('category_id', 'Category') !!}
            {!! Form::select('category_id', $products_category, null , ['class'=> 'form-control', 'placeholder'=> 'Select anything']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('title', 'Title') !!}
            {!! Form::text('title', null, ['class'=> 'form-control', 'id'=> 'title', 'placeholder' => 'Cow']) !!}
        </div>

        <div class="form-row">
            <div class="form-group col-md-12">
                {!! Form::label('cost_price', 'Cost Price') !!}
                {!! Form::number('cost_price', null, ['class'=> 'form-control', 'id' => 'cost_price', 'placeholder' => '50']) !!}
            </div>
        </div>

        <div class="form-group">
            {!! Form::label('price', 'Price') !!}
            {!! Form::number('price', null, ['class' => 'form-control', 'id' => 'price', 'placeholder' => '200']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('unit', 'Unit') !!}
            {!! Form::number('unit', null, ['class' => 'form-control', 'id' => 'unit', 'placeholder' => '70']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('description', 'Description') !!}
            {!! Form::textarea('description', null, ['class' => 'form-control', 'rows'=> 3, 'id' => 'description', 'placeholder' => 'Product Description']) !!}
        </div>

        <button type="submit" class="btn btn-primary">{{ $button }}</button>

        {!! Form::close() !!}

</div>
    

@stop