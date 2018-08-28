@extends('welcome')
@section('bodycontent')

<link rel="stylesheet" href="css/contactUs.css">


<div class="subimage">
    <img src="../images/115.jpg" alt="" height="300px" width="100%">
    <div class="supPictureHeader">   
        <center>
            <h1 style="font-size:60px;color:#FFF">Vehicle Gallery</h1>
        </center>
    </div>
</div>

<div style="" class="backgroundContactUs">

    <center>
        <div style="padding-bottom:30px">
            <a href="/gallery">Story Images</a> | <a href="/galleryVehicle">Vehicle Images</a>
        </div>
    </center>

     <?php 
        $qry = \DB::table('vehiclegallery')->get();  
    ?>

     <div class="row col-md-12" >
        @foreach($qry as $val)
            <div class="col col-md-3" style="margin:0px 0px 15px 0px">
                <img src="images/vehicle/{{$val->imageName}}"  height="200px" width="300px">
            </div>
        @endforeach
    </div>  

    

</div>

@endsection