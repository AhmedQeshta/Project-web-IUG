@extends('base_layout.master_layout')

@section('content')
    <div class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">User Create</h3>
            </div>
            <div class="panel-body">{{--this is important for style --}}
                {!! Form::open(["method"=>"post",'action'=>'AdminUsersController@store']) !!}
                @csrf
                <div class="form-group">
                    {!! Form::label('name','Name:') !!}
                    {!! Form::text('name',null ,['class'=>'form-control'])!!}

                </div>
                <div class="form-group">
                    {!! Form::label('email','Email:') !!}
                    {!! Form::email('email',null ,['class'=>'form-control'])!!}

                </div>
                <div class="form-group">
                    {!! Form::label('role_id','Role:') !!}
                    {!! Form::select('role_id',['' =>'Choose Option']+$roles,null ,['class'=>'form-control'])!!}

                </div>
                <div class="form-group">
                    {!! Form::label('status','Status:') !!}
                    {!! Form::select('status',[1 =>'Active',0 =>'Not Active'],null ,['class'=>'form-control'])!!}

                </div>
                <div class="form-group">
                    {!! Form::submit('Create User',["class"=>'btn btn-primary']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
