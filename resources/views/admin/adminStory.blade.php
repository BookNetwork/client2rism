@extends('admin.mainUserAccount')
@section('AdminMenu')


<div class="col-md-10 menu">
    <center>
        <h1 style="font-family:Sofia" class="headerH1">Manage Gallery</h1>
    </center>

    @include('admin.mainButtons')

 
    <div class="container col-md-12 ">
        <div class="well">
             <a href="adminVehicle">vehicle</a> | <a href="adminStory" >stroy</a> 
        </div>
    </div>

    <?php 
        $qry = \DB::table('storygallery')->get();  
    ?>
    @if ($mess = Session::get('storyDeleteSuccess'))
                    <span class="alert alert-success col-md-12">
                      <strong >{{ $mess }}</strong>
                    </span>
    @endif
     <div class="row col-md-12">
        @foreach($qry as $val)
            <div class="col col-md-3">
                    <img src="images/story/{{$val->imageName}}"  height="200px" width="250px" style="margin:20px 0px 0px 0px">
                <a href="/deletePicStory?{{$val->id}}"><button class="btn btn-danger btn-lgs" style="width:250px">Delete </button></a>
            </div>
        @endforeach
    </div>  


@endsection