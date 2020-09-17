@extends('base_layout.master_layout')

@section('content')
    <h1>create posts</h1>
    <div class="row">
        {{--<div class="col-md-12">
            @if(session()->has('success'))
                <div class="alert alert-success">
                     {{session()->get('success')}}
                </div>
            @endif
        </div>--}}

        <div class="col-md-12">

            <form action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <div class="form-group" style="text-align: center">
                        <div class="fileinput fileinput-new" data-provides="fileinput">
                            <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px; line-height: 150px;"> </div>
                            <div>
                                        <span class="btn red btn-outline btn-file">
                                        <span class="fileinput-new"> Select image </span>
                                        <span class="fileinput-exists"> Change </span>
                                            <input type="file" name="post_image"> </span>
                                <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
                            </div>
                        </div>
                    </div>
                    <span class="error">{{$errors->first('image')}}</span>
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control">
                        <span class="error">{{$errors->first('title')}}</span>
                    </div>
                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea name="content" class="form-control" cols="30" rows="10"></textarea>
                    </div>
                    <div class="form-action">
                        <input type="submit" value="Save" class="btn btn-primary">
                        <input type="submit" value="Cancel" class="btn btn-default">
                    </div>
                </div>
            </form>
        </div>
    </div>

    {{--@if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif--}}

@endsection
