<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Aguafina' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- <link rel="stylesheet" href="../css/wallbutton.css"> -->
        <title>Naf Tourism</title>

    </head>

    
    <body>
        <div>
            @include('raw.header')
        </div>
        <div>
            @yield('bodycontent')
            <!-- <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>  -->
            <!-- <a href="contactUs"><button  id="myBtn2" title="">Contact US</button></a> -->
        </div>
        <div>
            @include('raw.footer') 
        </div> 
        <!-- <script>
            window.onscroll = function() {scrollFunction()};

                        function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    document.getElementById("myBtn").style.display = "block";
                } else {
                    document.getElementById("myBtn").style.display = "none";
                }
            }

            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }
        </script> -->
         
    </body>
</html>
