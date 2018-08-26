@extends('admin.mainUserAccount')
@section('AdminMenu')


<div class="col-md-10 menu">
    <center>
        <h1 style="font-family:Sofia" class="headerH1">Manage Gallery</h1>
    </center>

    @include('admin.mainButtons')

 
    <div class="container col-md-12 ">
        <div class="well">
             <a href="adminVehicle">vehicle</a> | <a href="adminStory">stroy</a> 
        </div>
    </div>

    <div class="container col-md-6 ">
        <div class="well">
        <h3>Add vehicle</h3>
             @if ($mess = Session::get('vehicleImageSuccess'))
                    <span class="alert alert-success col-md-12">
                      <strong >{{ $mess }}</strong>
                    </span>
            @endif
            <form action="/imageVehicleUpload" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="">Choose File</label>
                    <input type="file" name="VehicleUpload[]" class="form-control" multiple>
                </div>
                @if ($errors->has('VehicleUpload'))
                    <span class="help-blocks">
                        <strong style="color: red;">{{ $errors->first('VehicleUpload') }}</strong>
                    </span>
                    @endif
                <button type="submit" class="btn btn-success">Upload File</button>
            </form> 
        </div>
        
    </div>

    <div class="container col-md-6 ">
        <div class="well">
            <h3>Add story image</h3>
            @if ($mess = Session::get('storyImageSuccess'))
                    <span class="alert alert-success col-md-12">
                      <strong >{{ $mess }}</strong>
                    </span>
            @endif
            <form action="imageStoryUpload" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="">Choose File</label>
                    <input type="file" name="StoryUpload[]" id="fileToUpload" class="form-control" multiple>
                </div>
                @if ($errors->has('StoryUpload'))
                    <span class="help-blocks">
                        <strong style="color: red;">{{ $errors->first('StoryUpload') }}</strong>
                    </span>
                 @endif
                <button type="submit" class="btn btn-success">Upload File</button>
            </form> 
        </div>
       
    </div>

    
       

</div>

@endsection