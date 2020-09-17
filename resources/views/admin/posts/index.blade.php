@extends('base_layout.master_layout')

@section('content')
    <h1 style="text-align: center">posts</h1>
    <div class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">users</h3>
            </div>
            <div class="panel-body">
                <table class="table table-bordered table-striped table-condensed flip-content">
                    <thead >
                    <tr>
                        <th>Id</th>
                        <th>title</th>
                        <th>image</th>
                        <th>video</th>
                        <th>Created</th>
                        <th>Updated</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($posts)
                        @foreach($posts as $post )
                            <tr>
                                <td>{{$post->id}}</td>
                                <td>{{$post->title}}</td>
                                <td>{{$post->image}}</td>
                                <td>{{$post->video}}</td>
                                <td>{{$post->created_at->diffForHumans()}}</td>
                                <td>{{$post->updated_at->diffForHumans()}}</td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
                {{$posts->links()}}
            </div>
        </div>
    </div>
@endsection
