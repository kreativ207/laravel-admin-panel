@extends('layouts.admin_layouts')

@section('title', "Update category")

@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Update post: {{$post->title}}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
            @if(session('success'))
                <div class="alert alert-success" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                    <h4><i class="icon fa fa-check">{{session('success')}}</i></h4>
                </div>
            @endif
        </div><!-- /.container-fluid -->
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-primary">
                        <!-- form start -->
                        <form action="{{route('post.update', $post->id)}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputTitle">Title</label>
                                    <input type="text" class="form-control" name="title" value="{{$post->title}}" id="exampleInputTitle" placeholder="Enter Title Category" required>
                                </div>
                                <div class="form-group">
                                    <div class="form-group">
                                        <label>Select category</label>
                                        <select class="form-control" name="cat_id" required>
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}" @if($post->cat_id == $category->id) selected @endif>{{$category->title}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <textarea class="editor" name="text">{{$post->text}}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="feature_image">Image of article</label>
                                    <img src="{{$post->img}}" alt="" class="img-uploaded" style="display: block; width: 300px">
                                    <input type="text" name="img" class="form-control" id="feature_image" value="{{$post->img}}" readonly>
                                    <a href="" class="btn btn-primary mt-2 popup_selector" data-inputid="feature_image">Select Image</a>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

@endsection
