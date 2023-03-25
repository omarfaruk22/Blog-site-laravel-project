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
        <form action="{{route('postupdate', $postedit->id)}}" method="post" enctype="multipart/form-data">
          @csrf
        <div class="row">
          <div class="col-sm-6">

          	 <div class="form-group">
              <label for="title">Post Title</label> 
              <input type="text" name="title" id="title" placeholder="Enter Post title" class="form-control" value="{{ $postedit->title }}">
              <span class="text-danger">
                @error('title')
                  {{ $message }}
                @enderror
              </span>
             </div>
             <div class="form-group">
               
              <label for="name">Post content</label> 
              <textarea type="text" name="content" id="content" placeholder="Enter post content" class="form-control">{!!$postedit->content!!}</textarea>
              <span class="text-danger">
                @error('content')
                  {{ $message }}
                @enderror
              </span>
             </div>

             <div class="form-group">
             <img height="200" src="{{ asset('backend/postimage/'.$postedit->pic) }}" alt="">
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
            <option value="1" @if($postedit->status==1) selected @endif >Active</option>
            <option value="2" @if($postedit->status==2) selected @endif >Inactive</option>
          </select>
        </div>

             <div class="form-group">
               <button class="form-control btn btn-info" >Update Post</button>
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