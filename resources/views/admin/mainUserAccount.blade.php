<!DOCTYPE html>

<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Aguafina Script' rel='stylesheet'>

        <link href='css/admin.css' rel='stylesheet'>
</head>
<html>

    <?php
       $qry = \DB::table('admin')->select('admin.status')->get();

       foreach($qry as $val){
            $status = $val;
       }

       if($status->status == 'T'){
    ?>
    <body>
        <div>
            <div>
                @include('admin.AdminSidebar')
            </div>
            <div >
                @yield('AdminMenu')
            </div>
        </div>
    </body>   
    <?php }else{?>
        <center>
        <h1 style="transform:scale(3.5,6);color:#FFF;margin-top:250px">Page Not Found</h1>
        </center>
    <?php }?>

</html>