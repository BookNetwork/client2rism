@extends('welcome')
@section('bodycontent')

    <link rel="stylesheet" href="css/packages.css">
                    

    <div class="col-md-12 packageHeader" >
        <div class="col-md-6 headr" >
            <center style="margin:90px 0px 0px 0px;">
                <h1>Package 1</h1>
            </center>
        </div>
        <div class="col-md-6 headrBody" >
                    @if ($mess = Session::get('RequestmoreDetailsSuccess'))
                        <span class="alert alert-success col-md-12">
                        <strong >{{ $mess }}</strong>
                        </span>
                    @endif

                    @if ($mess = Session::get('RequestmoreDetailsFaild'))
                            <span class="alert alert-danger col-md-12">
                            <strong >{{ $mess }}</strong>
                            </span>
                    @endif

            <center style="margin:70px 0px 0px 0px">
                <button class="btn btn-primary" data-toggle="modal" data-target="#myModal" style="margin-bottom:20px">Request More Details</button>
                <p style="font-family:Microsoft JhengHei UI">Discover Sri Lanka in 08 Days and 07 nights! The tour dwells into the rich Sri Lankan history, fascinating culture and beautiful scenery. A few highlights of the tour are elephant back riding in the forest, visiting tea plantations in the hills as well as swimming and sunbathing in the sandy beaches.</p>
            </center> 
        </div>  
    </div>
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
        
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Package 1 - More Details Request Form</h4>
            </div>
            <div class="modal-body">

                        <form action="/requestMoreDetails1" method="post" enctype="multipart/form-data">
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
                                    <label for="email">Starting Date of Tour :</label>
                                    @if ($errors->has('date'))
                                        <span class="help-blocks">
                                            <strong style="color: red;">{{ $errors->first('datel') }}</strong>
                                        </span>
                                    @endif
                                    <input type="date" class="form-control" name="date">
                                </div>
                                <div class="form-group">
                                    <label for="email">No. of People:</label>
                                    @if ($errors->has('noOfPeople'))
                                        <span class="help-blocks">
                                            <strong style="color: red;">{{ $errors->first('noOfPeople') }}</strong>
                                        </span>
                                    @endif
                                    <input type="number" class="form-control" name="noOfPeople">
                                </div>
                                <div class="form-group">
                                    <label for="email">Adults:</label>
                                    @if ($errors->has('Adults'))
                                        <span class="help-blocks">
                                            <strong style="color: red;">{{ $errors->first('Adults') }}</strong>
                                        </span>
                                    @endif
                                    <input type="number" class="form-control" name="Adults">
                                </div>
                                <div class="form-group">
                                    <label for="email">Children:</label>
                                    @if ($errors->has('Children'))
                                        <span class="help-blocks">
                                            <strong style="color: red;">{{ $errors->first('Children') }}</strong>
                                        </span>
                                    @endif
                                    <input type="number" class="form-control" name="Children">
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
            <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
        
        </div>
    </div>

 <!--  Packages  Details  -->
    <div class="col-md-12">

        <div class="col-md-6">
            <table class="table table-striped">
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>  
            </table>
        </div>
        <!--  -->
        <div class="col-md-6">
            <table class="table table-striped">
                <tr><th></th></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr> 
            </table>
        </div>
        <!--  -->
        <div class="col-md-6">
            <table class="table table-striped">
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>  
            </table>
        </div>
        <!--  -->
        <div class="col-md-6">
            <table class="table table-striped">
                <tr><th></th></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr> 
            </table>
        </div>
        <!--  -->
        <div class="col-md-12">
            <table class="table table-striped">
                <tr><th></th></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr> 
            </table>
        </div>
        <!--  -->
        <div class="col-md-12">
            <table class="table table-striped">
                <tr><th></th></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr> 
            </table>
        </div>
        <!--  -->
        <div class="col-md-12">
            <table class="table table-striped">
                <tr><th></th></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr> 
            </table>
        </div>
        <!--  -->
    </div>

@endsection