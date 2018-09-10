@extends('admin.mainUserAccount')
@section('AdminMenu')


<div class="col-md-10 menu">
    <center>
        <h1 style="font-family:Sofia" class="headerH1">Manage Gallery</h1>
    </center>

    @include('admin.mainButtons')

 
    <div class="container col-md-12" >
        <div class="well" >
             <a href="adminVehicle">vehicle</a> | <a href="adminStory" >stroy</a> 
        </div>
    </div>

    <?php 
        $qry = \DB::table('vehiclegallery')->get();  
    ?>
    @if ($mess = Session::get('VehicleDeleteSuccess'))
                    <span class="alert alert-success col-md-12">
                      <strong >{{ $mess }}</strong>
                    </span>
    @endif

     <div class="row col-md-12">
        @foreach($qry as $val)
            <div class="col col-md-3" style="margin-bottom:15px">
                    <img src="images/vehicle/{{$val->imageName}}"  height="200px" width="250px">
                    <div style="background-color:white;width:250px">
                        {{$val->imageName}}
                    </div>
                <a href="/deletePicVehicle?{{$val->id}}"><button class="btn btn-danger btn-lgs" style="width:250px">Delete </button></a>
            </div>
        @endforeach
    </div>   
       
@endsection