@extends('layouts.auth')

@section('title' , 'Create Post')

@section('styles')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection

@section('content')
    <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Posts </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{route('posts.index')}}">Post</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Create Post</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Create Post</h4>


                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="Post"  action ="{{ route('posts.store')}}" class="forms-sample" enctype="multipart/form-data">
                        @csrf
                      <div class="form-group">
                        <label for="exampleInputName1">Title</label>
                        <input type="text" name="title" class="form-control" id="exampleInputName1" placeholder="Title" value="{{ old('title') }}" required>
                      </div>
                      <div class="form-group">
                        <label>Category</label>
                        <select name="category" class="form-control" required>
                            <option disabled selected>Choose Option</option>
                            @if(count($categories) > 0 )
                                @foreach ($categories as $category)
                                    <option @selected( old('category') == $category-> id) value="{{$category->id}}">{{ $category->name }}</option>
                                @endforeach
                            @endif
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Published</label>
                        <select name="is_publish" class="form-control">
                            <option disabled selected>Choose Option</option>
                            <option @selected( old('is_publish') == 1 ) value="1">Publish</option>
                            <option @selected( old('is_publish') == 0 )  value="0">Draft</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>File upload</label>
                        <input type="file" name="file" class="form-control"  required>
                      </div>

                      <div class="form-group">
                        <label>Description</label>
                        <textarea id="summernote" name="description" class="form-control" cols="30" rows="10" required >{{old('description')}}</textarea>
                      </div>
                      <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

<script>
    $(document).ready(function(){
        $('#summernote').summernote();
    });
</script>
@endsection
