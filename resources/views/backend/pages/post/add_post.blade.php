@extends('backend.master_template.template')

@section('content')

<div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
      <h4>Post Page</h4>
      <p class="mg-b-0">Add a Post</p>
    </div>
</div>

      <div class="br-pagebody">
        <form action="{{route('poststore')}}" method="post" enctype="multipart/form-data">
          @csrf
        <div class="row">
          <div class="col-sm-6">
          <div class="form-group">
              <label for="cat_id">Select Category Name</label>
              <select name="cat_id" id="cat_id" class="form-control">
                <option value="">------Select Category Name-----</option>
              
                <option value="1">mobile</option>
                <option value="2">laotop</option>
                <option value="3">tab</option>
            
              </select>
              <span class="text-danger">
                @error('cat_id')
                  {{ $message }}
                @enderror
              </span>
            </div>
          	 <div class="form-group">
              <label for="title">Post Title</label> 
              <input type="text" name="title" id="title" placeholder="Enter Post title" class="form-control" value="{{ old('title') }}">
              <span class="text-danger">
                @error('title')
                  {{ $message }}
                @enderror
              </span>
             </div>
             <div class="form-group">
              <label for="name">Post content</label> 
              <textarea type="text" name="content" id="content" placeholder="Enter post content" class="form-control"  value="{{ old('content') }}"></textarea>
              <span class="text-danger">
                @error('content')
                  {{ $message }}
                @enderror
              </span>
             </div>

             <div class="form-group">
              <label for="pic">choose a picture</label> 
              <input type="file" name="pic" id="pic" placeholder="Choose a picture" class="form-control" value="{{ old('pic') }}">
              <span class="text-danger">
                @error('pic')
                  {{ $message }}
                @enderror
              </span>
             </div>


             <div class="form-group">
              <label for="status">Post Status</label>
              <select name="status" id="status" class="form-control">
                <option value="">-----Select Status-----</option>
                <option value="1">Active</option>
                <option value="2">Inactive</option>
              </select>
             </div>

             <div class="form-group">
               <button class="form-control btn btn-info" >Add Post</button>
             </div>
          </div>
          </div><!-- col-3 -->
        </form>
      </div><!-- br-pagebody -->
      <script>
        ClassicEditor
            .create(document.querySelector('#content'))
            .catch(error => {
                console.error(error);
            });
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
@endsection