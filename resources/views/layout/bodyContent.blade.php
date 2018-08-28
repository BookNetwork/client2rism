@extends('welcome')
@section('bodycontent')
<link rel="stylesheet" href="css/bodyContent.css">
<link rel="stylesheet" href="css/exploreSL.css">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">

    <div class="item active">
      <img src="../images/13.jpg" alt="" class="slider" >
      <!-- <div class="carousel-caption">
        <h1>sdfsdf</h1>
          
      </div> -->
    </div>

    <div class="item">
      <img src="../images/18.jpg" alt="" class="slider">
      <div class="carousel-caption">
       
      </div>
    </div>
  
    <div class="item">
      <img src="../images/14.jpg" alt="" class="slider">
      <!-- <div class="carousel-caption">

      </div> -->
    </div>

  </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>

</div>

            <div style="font-family:Microsoft;font-size:1.5em">                
                <center>
                    <h1>Welcome To Naf Tourism Travels & Tours</h1>    
                </center>
            </div>
            <div class="transperant">
                <center>
                <h3>On Scroll Sticky Header</h3>
                <p>The header will stick to the top when you reach its scroll position.</p>
                <p>Scroll back up to remove the sticky effect.</p>
                </center>
            </div>

           
           <div class="transperant">
              <div class="bodyContentHeader" style="margin:60px 0px 0px 0px;font-family:Microsoft;">                
                    <center>
                        <h1>Tour Packages</h1>    
                    </center>
              </div>
              
                <div class="col-md-12 " style="background-color:transperant">
                    <!-- -->
                    <div class="col-md-1">
                        
                        </div>
                    <a href="/one">
                        <div class="col-md-2 imagesVehicle " style="margin-left:-30px">
                        <div class="coupon">
                            <div class="containerc">
                                <h3>Package 01</h3>
                            </div>
                            <img src="../images/1.jpg" alt="Avatar" style="width:100%;" img-thumbnail>
                            <div class="containerc " style="background-color:white">
                                <h2><b>8 Days & 7 Nights</b></h2> 
                            </div>
                            <div class="containerc" style="background-color:white;border-bottom-right-radius: 50px; ">
                                <p>Discover Sri Lanka in 08 Days and 07 nights! The tour dwells into the rich Sri Lankan history, fascinating culture and beautiful scenery.<br/></p>
                            </div>
                        </div>
                        </div>
                    </a> 
                    
                    <a href="/two">
                        <div class="col-md-2 imagesVehicle ">
                        <div class="coupon">
                            <div class="containerc">
                                <h3>Package 02</h3>
                            </div>
                            <img src="../images/1.jpg" alt="Avatar" style="width:100%;" img-thumbnail>
                            <div class="containerc " style="background-color:white">
                                <h2><b>8 Days & 7 Nights</b></h2> 
                            </div>
                            <div class="containerc" style="background-color:white;border-bottom-right-radius: 50px; ">
                                <p>If you want to experience the best of Sri Lanka; all climate and cultural variations within 8 days, this will be the ideal package for you.</p>
                            </div>
                        </div>
                        </div>
                    </a> 
                    <a href="/three">
                        <div class="col-md-2 imagesVehicle ">
                        <div class="coupon">
                            <div class="containerc">
                                <h3>Package 03</h3>
                            </div>
                            <img src="../images/1.jpg" alt="Avatar" style="width:100%;" img-thumbnail>
                            <div class="containerc " style="background-color:white">
                                <h2><b>5 Days & 4 Nights</b></h2> 
                            </div>
                            <div class="containerc" style="background-color:white;border-bottom-right-radius: 50px; ">
                                <p>Explore the finest of Sri Lanka with your friends or family and collect special memories to keep with you for the rest of your life.</p>
                            </div>
                        </div>
                        </div>
                    </a> 
                    <a href="/four">
                        <div class="col-md-2 imagesVehicle ">
                        <div class="coupon">
                            <div class="containerc">
                                <h3>Package 04</h3>
                            </div>
                            <img src="../images/1.jpg" alt="Avatar" style="width:100%;" img-thumbnail>
                            <div class="containerc " style="background-color:white">
                                <h2><b>9 Days & 8 Nights</b></h2> 
                            </div>
                            <div class="containerc" style="background-color:white;border-bottom-right-radius: 50px; ">
                                <p>Spend time with your family to unwind from your hectic life. Our 5 days’ tour package offers you the best for the money you pay.</p>
                            </div>
                        </div>
                        </div>
                    </a>
                </div> 
            </div>

<!-- exploer SRILANKA        -->
              
        <div class="transperant" style="">

          <div class="bodyContentHeader" style="margin:550px 0px 0px 0px; background-color:none;font-family:Microsoft;">                
                    <center>
                        <h1>Explore Sri Lanka</h1>    
                    </center>
              </div> 
            <div class="col-md-12" style="margin-top:50px;">

                <div class="col-md-3"></div>
                
                <a href="/central">
                        <div class="container col-md-2">
                        <img src="../images/province/central.jpg" alt="Avatar" class="image" style="width:100%">
                        <div class="middle">
                            <div class="text"> <b> Central Province </b></div>
                        </div>
                    </div>
                </a>
                <a href="/west">
                    <div class="container col-md-2">
                        <img src="../images/province/west.jpg" alt="Avatar" class="image2" style="width:100%">
                        <div class="middle">
                            <div class="text"> <b> Western Province </b></div>
                        </div>
                    </div>
                </a>
                

             </div>

             <div class="col-md-12" style="margin-bottom:50px;">
                <div class="col-md-1"></div>
                <a href="/east">
                    <div class="container col-md-2">
                        <img src="../images/province/east.jpg" alt="Avatar" class="image3" style="width:100%">
                        <div class="middle">
                            <div class="text"> <b> Eastern Province </b></div>
                        </div>
                    </div>
                </a>
                <a href="/south">
                    <div class="container col-md-2">
                        <img src="../images/province/south.jpg" alt="Avatar" class="image4" style="width:100%">
                        <div class="middle">
                            <div class="text"> <b> Southern Province </b></div>
                        </div>
                    </div>
                </a>
                <a href="/north">
                    <div class="container col-md-2">
                        <img src="../images/province/north.jpg" alt="Avatar" class="image5" style="width:100%">
                        <div class="middle">
                            <div class="text"> <b> Northern Province </b></div>
                        </div>
                    </div>
                </a>
             </div>

              <div class="col-md-12 ahover">
    
              </div>

            </div>

          

            <div class="transperant" style="">
                

            <div class="bodyContentHeader" style="margin:550px 0px 50px 0px; background-color:none;font-family:Microsoft;">                
                      <center>
                          <h1> Gallery</h1>    
                      </center>
                </div> 

                <?php 
                    $qry = \DB::table('storygallery')->orderBy('id','desc')->limit(8)->get();  
                ?>

     <a href="/gallery"><div class="row col-md-12" style="">
        @foreach($qry as $val)
            <div class="col-md-3" style="margin:0px 0px 0px 0px">
                <img src="images/story/{{$val->imageName}}"  height="250px" width="320px">
            </div>
        @endforeach
    </div>  </a>

            </div>

        <div class="transperant" class="col-md-12" >
        
            <div style="margin:150px 0px 50px 0px;background-color:rgb(118, 162, 197);padding:40px 0px 40px 40px" class="col-md-6">
            <iframe width="560" height="315"  src="https://www.youtube.com/embed/zpZI2oGPsio" frameborder="0" allow="autoplay; encrypted-media" class="video" allowfullscreen></iframe>
            </div>

            <div style="margin:50px 0px 0px 0px;background-color:red;margin:250px 0px 50px 0px;background-color:rgb(118, 162, 197)" class="col-md-6">
                <h1> <b> ABOUT SRI LANKA </b></h1>

                <p style="">Sri Lanka (formerly Ceylon) is an island nation south of India in the Indian Ocean. Its diverse landscapes range from rainforest and arid plains to highlands and sandy beaches. It’s famed for its ancient Buddhist ruins, including the 5th-century citadel Sigiriya, with its palace and frescoes. The city of Anuradhapura, Sri Lanka's ancient capital, has many ruins dating back more than 2,000 years.</p>
            </div>

        </div>

@endsection