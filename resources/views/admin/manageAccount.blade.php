@extends('admin.mainUserAccount')
@section('AdminMenu')

<div class="col-md-10 menu">
    <center>
        <h1 style="font-family:Sofia" class="headerH1">Manage Account</h1>
    </center>

    @include('admin.mainButtons')

    <div class="container col-md-5 ">
        <div class="well">
        <h3>Reset passowrd</h3>
             @if ($mess = Session::get('passRestSuccess'))
                    <span class="alert alert-success col-md-12">
                      <strong >{{ $mess }}</strong>
                    </span>
            @endif

            @if ($mess = Session::get('passRestFaild'))
                    <span class="alert alert-danger col-md-12">
                      <strong >{{ $mess }}</strong>
                    </span>
            @endif

            <form action="/resetPass" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                    <label for="">Enter Current Password :</label>
                    <input type="text" name="curpass" id="fileToUpload">
                    @if ($errors->has('curpass'))
                        <span class="help-blocks">
                            <strong style="color: red;">{{ $errors->first('curpass') }}</strong>
                        </span>
                @endif
                </div>
                
                <div class="form-group">
                    <label for="">Enter Your new Password :</label>
                    <input type="text" name="newpass" id="fileToUpload">
                    @if ($errors->has('newpass'))
                        <span class="help-blocks">
                            <strong style="color: red;">{{ $errors->first('newpass') }}</strong>
                        </span>
                    @endif
                </div>
               
                <button type="submit" class="btn btn-success">Upload File</button>
            </form> 
        </div>
    </div>

</div>

@endsection