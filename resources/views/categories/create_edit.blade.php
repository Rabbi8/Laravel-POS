@extends('layout.main');

@section('page_heading')

<div class="row d-flex justify-content-around my-5">
    <h1 class="h3 text-gray-800">  {{ $mode }}    </h1>
</div>

@stop

@section('main_content')

<div class="d-flex justify-content-around col-md-12 ">

   

    @if($mode == 'Create category')
    {!! Form::open([ 'route' => ['categories.store'],'method' => 'post', 'class' => ['border border-secondary rounded p-5']]) !!}
    @php
     $button = 'Created';
    @endphp

    @elseif( $mode == 'Edit category' )
    {!! Form::model($category,[ 'route' => ['categories.update', $category->id ],'method' => 'put', 'class' => ['border border-secondary rounded p-5']]) !!}

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
            {!! Form::label('title', 'Title') !!}
            {!! Form::text('title', null, ['class'=> 'form-control', 'id'=> 'title', 'placeholder' => 'Fish']) !!}
        </div>
        <button type="submit" class="btn btn-primary">{{ $button }}</button>

        {!! Form::close() !!}

</div>
    

@stop