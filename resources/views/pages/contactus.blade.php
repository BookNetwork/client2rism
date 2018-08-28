@extends('welcome')
@section('bodycontent')

<link rel="stylesheet" href="css/contactUs.css">


<div class="subimage">
    <img src="../images/116.jpg" alt="" height="300px" width="100%">
    <div class="supPictureHeader">   
        <center>
            <h1 style="font-size:60px;color:#FFF">Contact Us</h1>
        </center>
    </div>
</div>

<div style="" class="backgroundContactUs">
    <div class="col-md-2">

    </div>
    <div class="col-md-3">
        <div class="panel panel-primary" style="border: 2px solid rgb(28, 93, 146)">
            <div class="panel-heading">
                <h3>Contact information</h3>
            </div>
            <div class="panel-body" >
            <b>Naf Tourism</b><br />
                <b>Name :</b>Mr.Naffly<br/>
                <br />
                Tour Operator <br />
                <b>Mobile :</b> +94 77 2737637<br />
                <b>Mail: </b>naftourism@gmail.com | naftourism@outlook.com</br>
                <b>URL:</b>www.naftourisum.com<br />
                <br />
            </div>
        </div>
    </div>

    <div class="container col-md-4">
            <div class="panel panel-primary" style="border: 2px solid rgb(28, 93, 146)">
                <div class="panel-heading">
                    <h3>Contact Form</h3>
                </div>
                <div class="panel-body" >

                @if ($mess = Session::get('contactSuccess'))
                    <span class="alert alert-success col-md-12">
                      <strong >{{ $mess }}</strong>
                    </span>
                @endif

                @if ($mess = Session::get('contactFaild'))
                        <span class="alert alert-danger col-md-12">
                        <strong >{{ $mess }}</strong>
                        </span>
                @endif

                    <form action="/contactus" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="form-group">
                                <label for="email">Name :</label>
                                @if ($errors->has('name'))
                                    <span class="help-blocks">
                                        <strong style="color: red;">{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                                <input type="text" class="form-control" name="name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email address :</label>
                                @if ($errors->has('email'))
                                    <span class="help-blocks">
                                        <strong style="color: red;">{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                <input type="text" class="form-control" name="email">
                            </div>
                            <div class="form-group">
                                <label for="areaText">Message :</label>
                                @if ($errors->has('textArea'))
                                    <span class="help-blocks">
                                        <strong style="color: red;">{{ $errors->first('textArea') }}</strong>
                                    </span>
                                @endif
                                <textarea name="textArea" class="form-control" id="" cols="30" rows="5"></textarea>
                            </div>
                        
                            <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        
 </div> 

    <!--            <div class="col-md-12" id="googleMap" style="width:100%;height:500px;"></div>
    

    <script>
       function myMap() {
        var mapProp= {
            center:new google.maps.LatLng(51.508742,-0.120850),
            zoom:5,
        };
        var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
        }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDJwkGxDCe2s1NwEX9O6YdnI9jH3kTf9Uw&callback=myMap"></script>
</div> -->

@endsection