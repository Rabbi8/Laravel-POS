@extends('layout.main');

@section('page_heading')

<div class="row d-flex justify-content-around my-5">
    <h1 class="h3 text-gray-800">  {{ $mode }}    </h1>
</div>

@stop

@section('main_content')

<div class="d-flex justify-content-around col-md-12 ">

   

    @if($mode == 'Create user')
    {!! Form::open([ 'route' => ['users.store'],'method' => 'post', 'class' => ['border border-secondary rounded p-5']]) !!}
    @php
     $button = 'Created';
    @endphp

    @elseif( $mode == 'Edit user' )
    {!! Form::model($user,[ 'route' => ['users.update', $user->id ],'method' => 'put', 'class' => ['border border-secondary rounded p-5']]) !!}

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
            {!! Form::label('group_id', 'Group') !!}
            {!! Form::select('group_id', $user_group, null , ['class'=> 'form-control', 'placeholder'=> 'Select anything']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('name', 'Name') !!}
            {!! Form::text('name', null, ['class'=> 'form-control', 'id'=> 'name', 'placeholder' => 'Jonh Doe']) !!}
        </div>

        <div class="form-row">
            <div class="form-group col-md-12">
                {!! Form::label('email', 'Email') !!}
                {!! Form::email('email', null, ['class'=> 'form-control', 'id' => 'email', 'placeholder' => 'rabbi@gmail.com']) !!}
            </div>
            @if($mode == 'Create user')
            <div class="form-group col-md-12">
                {!! Form::label('password', 'Password') !!}
                {!! Form::password('password', ['class'=> 'form-control', 'id'=> 'password', 'placeholder' => 'password']) !!}
            </div>
            @endif
        </div>
        <div class="form-group">
            {!! Form::label('phone', 'Phone number') !!}
            {!! Form::text('phone', null, ['class' => 'form-control', 'id' => 'phone_number', 'placeholder' => '01988568938']) !!}
        </div>
        <div class="form-group">
        {!! Form::label('address', 'Address') !!}
        {!! Form::textarea('address', null, ['class'=> 'form-control', 'id'=>'address', 'placeholder'=> 'H-19, R-19, Block-C, Mirpur-12, Dhaka', 'rows'=> 2 ]) !!}
        </div>

        <button type="submit" class="btn btn-primary">{{ $button }}</button>

        {!! Form::close() !!}

</div>
    

@stop