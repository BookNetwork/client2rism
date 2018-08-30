@extends('welcome')
@section('bodycontent')
@include('packages.packagesDetails')

<link rel="stylesheet" href="css/packages.css">
                    

                    <div class="col-md-12 packageHeader" >
                        <div class="col-md-6 headr4" >
                            <center style="margin:90px 0px 0px 0px;">
                                <h1  style="font-size:50px;background-color:rgba(255, 255, 255, 0.623);width:300px;height:100px;padding:20px">Package 4</h1>
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
                                <p style="font-family:Microsoft JhengHei UI">Sri Lanka is one of the best countries in the world to spend your holiday with your family as travel is hassle free. Spoil your family with a variety of places to visit & activities to take part in. The whole family can enjoy an unforgettable tropical vacation consisting of culture, heritage, beaches, safari’s and beautiful mountain landscapes!</p>
                            </center> 
                        </div>  
                    </div>
                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog">
                        
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Package 4 - More Details Request Form</h4>
                            </div>
                            <div class="modal-body">
                
                                        <form action="/requestMoreDetails4" method="post" enctype="multipart/form-data">
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
            <tr><th><h3><b>PACKAGE INCLUDES</b></h3></th></tr>
           {{ Packinclude() }}
        </table>
    </div>
    <!--  -->
    <div class="col-md-6">
        <table class="table table-striped">
            <tr><th><h3><b>PACKAGE EXCLUDES </b></h3></th></tr>
            {{ PackExclude() }}
        </table>
    </div>
    <!--  -->
    <div class="col-md-6">
        <table class="table table-striped">
            <tr><th><h3><b>BRIEF ITINERARY</b></h3></th></tr>
            <tr><td><li type="square">Day 1 AIRPORT / NEGOMBO</li></td></tr>
            <tr><td><li type="square">Day 2 NEGOMBO / MUTHURAJAWELLA</li></td></tr>
            <tr><td><li type="square">Day 3 MINNERIYA / SIGIRIYA</li></td></tr>
            <tr><td><li type="square">Day 4 SIGIRIYA / POLONNARUWA</li></td></tr>
            <tr><td><li type="square">Day 5 SIGIRIYA / DAMBULLA / MATALE / KANDY</li></td></tr>
            <tr><td><li type="square">Day 6 KANDY / POUSELLAWA / PERADENIYA</li></td></tr> 
            <tr><td><li type="square">Day 7 KANDY / PINNAWELA / MOUNT LAVINIA</li></td></tr> 
            <tr><td><li type="square">Day 8 BEACH FREE DAY</li></td></tr>
            <tr><td><li type="square">Day 9 BEACH / AIRPORT</li></td></tr>
        </table>
    </div>
    <!--  -->
    <div class="col-md-6">
        <table class="table table-striped">
            <tr><th><h3><b>THE FOLLOWING CANCELLATION POLICY APPLIES TO THIS TOUR</b></h3></th></tr>
            {{cancelationPolicies()}}
        </table>
    </div>
    <!--  -->
    <div class="col-md-12">
        <table class="table table-striped">
            <tr><th><h3><b>ENTRANCE FEES DURING GUIDED SIGHTSEEING</b></h3><div class="alert alert-info"> Rates are based on per person, Group; Rates may differ due to currency conversion & not Fixed Rates.</div></th></tr>
            {{fee()}}
        </table>
    </div>
    <!--  -->
   
    <div class="col-md-12">
        <table class="table table-striped">
            <tr><th><h3><b>HIGHLIGHTS & ACTIVITIES DAY TO DAY ITINERARY</b></h3></th></tr>
            <tr><td><li type="square"><b>Day 1 AIRPORT / NEGOMBO</b><br/>
                    <p>Sri Lanka is the perfect country to travel with children. The distance between one location and another is not time consuming and hectic. The kids would have many activities to take part in! We know (from experience) that if the children are not enjoying their holiday then neither are their parents.</p>
                    <p>Feed a baby elephant with a bottle of milk, snorkel on our reefs or simply enjoy our warm beaches these are a few of the activities we are certain your kids would enjoy! There are whales which pass by our paradise island and our national parks are teeming with wildlife!</p>
                    <p>Arrival & transfer to a beach hotel nearby. Dinner & an overnight stay in your hotel in the Negombo area.</p>
                </td></tr>
            </li><tr><td><li type="square">
                <b>Day 2 NEGOMBO / MUTHURAJAWELLA</b>
                <p>After breakfast enjoy an excursion to Negombo & Muthurajawella. You will enjoy a boat trip in the morning to the Negombo fishing village, which is the center of the islands fishing community. It is largely Roman Catholic by faith, with large structured churches down almost every street. The sea & the catamarans are the backdrop to the Negombo scenery. Muthurajawella boat trip (boat hire with maximum 6 clients) and entrance ticket for the nature reserve.</p>
                <p>The name Muthurajawella can be translated in to English simply as ”the swamp of Royal Treasure.” Treasures of kings in the olden days are believed to be buried in this area. Muthurajawela marsh is situated towards the Southern part of Negombo. The boundaries are the lagoons coastal eco system and the Kelaniya River. Muthurajawella bares staggering species of flora and fauna, species of birds, water birds such as herons, egrets are in abundance in the lagoon and the marsh as well as different species of fish. Muthurajawella marsh has been declared as a sanctuary by the government due its vast bio-diversity. In the evening relax freely and enjoy a savoury dinner.</p>
                <p>Stay overnight at the beach hotel.</p>
            </li></td></tr>
            <tr><td><li type="square">
                <b>Day 3 MINNERIYA / SIGIRIYA</b>
                <p>After breakfast travel to the Sigiriya region en route to Habarana enjoy an elephant back jungle safari. Spend sometime with the elephant and enjoy and enjoy your ride in the Habarana jungle where you will have many opportunities to take photographs of birds, animals and reptiles.</p>
                <p>Elephant safari is a tour that will take you along the forest trail, across the river, through the village and back to your lodging all on an elephants back. Installation at the hotel. In the early afternoon enjoy the Minneriya wild park safari. The National Park area, which is mainly the catchments area, was initially declared as a sanctuary in 1938. The vegetation of this area consists of mainly dry mixed evergreen forest and much of Sri Lankan wildlife, including elephants. Enjoy a delicious dinner & stay overnight at the hotel.</p>
            </li></td></tr>
            <tr><td><li type="square">
                <b>Day 4 SIGIRIYA / POLONNARUWA</b>
                <p>After breakfast visit the Sigiriya Rock Fortress and then climb the rock of Sigiriya. The history of Sigiriya dates back to over 5000 thousand years, to the Mesolithic period. One of Sri Lanka’s major attractions and a world heritage site, Sigiriya (Lion Rock) came into prominence in the 5th century A.D., the rock and the colossal plan of the royal palace, water gardens and fortifications, is entirely fascinating.</p>
                <p>Next, site seeing of Polonnaruwa. You can visit the city by hiring bicycles or vehicles. It is an enjoyable trip for young children! Visit Polonnaruwa the 2nd capital of the Sinhalese kings dating back to the 11th & 12th century A.D. The entire landscape of the region is punctuated by huge man-made reservoirs, the most famous of which is the Parakrama Samudra. Numerous monuments are found in this city. Enjoy dinner & stay overnight at the hotel.</p>
            </li></td></tr>
            <tr><td><li type="square">
                <b>Day 5 SIGIRIYA / DAMBULLA / MATALE / KANDY</b>
                <p>After breakfast visit the Dambulla Cave Temple, the family must purchase entrance tickets directly (chauffeur will assist). The cave temple of Dambulla is a vast isolated rock mass of 500 ft and a UNESCO world heritage site. The view from the top of the cave temple is breathtaking. After breakfast visit Sigiriya Rock (again purchase entrance ticket directly) then climb the rock of Sigiriya. The history of Sigiriya dates back to over 5000 thousand years, to the Mesolithic period. The rock is a breathtaking 350 ft above ground with a series of five caves. The frescoes on the walls and ceiling of the rock date to the 15th – 18th centuries.</p>
                <p>Pay a visit to the Matale spice garden. Free visit included in the program you will be introduced to a variety of plants; various parts of those that are used as spices. The tour is an informative one for those interested in cooking and those curious about the assorted use of spices and its herbal value. Children keen in plants and botany will be interested in this educational visit and they could observe many different types of Sri Lankan spices. A batik factory stopover, this visit will give an overview of the practical procedure of the batik handicraft from plain clothes to completed fabric containing immaculate and intricate designs.</p>
                <p>Pay a visit with your family to the Sacred Tooth Relic Temple & Cultural Dance Show (purchase entrance ticket directly.) The Sacred Tooth Relic Temple is the most revered temple in Sri Lanka by the Buddhists. Enjoy the famous Kandyan cultural program. The famous show starts in the evening and runs for more than 1 hr. The skilled musicians of Kandy, their drums and dance is extremely entertaining and rich with Sri Lankan tradition. After the show there are several kinds of dances and a fire walking show too. Enjoy dinner & stay overnight in the hotel.</p>
            </li></td></tr> 
            <tr><td><li type="square">
                <b>Day 6 KANDY / POUSELLAWA / PERADENIYA</b>
                <p>After breakfast make a free visit to a tea plantation and a tea factory in Sri Lanka. The island is one of the worlds largest exporters of tea. At the tea factory you can witness the manufacture of the world famous Ceylon tea then proceed to the Peradeniya Royal Botanical Garden (entrance ticket necessary.) The Royal botanical garden of Peradeniya, which is well, known for its large variety of plants which have ornamental, decorative, useful & medicinal properties.
                    <br/>
                    More than 4000 species include indigenous and introduced plants. The garden is best known for its collection of orchids which is the largest in Asia. Enjoy a free site seeing tour of the Kandy city and pay a visit to the museum. The most prominent landmark of Kandy is its lake which is in the center of the city. Enjoy dinner & the overnight stay at the hotel.</p>
            </li></td></tr>
            <tr><td><li type="square">
                <b>Day 7 KANDY / PINNAWELA / MOUNT LAVINIA</b>
                <p>After breakfast pay a visit to the Pinnawela elephant orphanage (entrance ticket necessary.) The orphanage was established to feed,nurse & house young elephants abandoned by their mothers.
                    <br />
                    During the drought period the young ones often fall into pits and ravines in their quest for water. You could feed baby elephants milk by bottles here. Proceed to the beach hotel and relax. Stay overnight at the beach hotel.</p>
            </li></td></tr>
            <tr><td><li type="square">
                <b>Day 8 BEACH FREE DAY</b>
                <p>Relax leisurely at the beach hotel with breakfast & stay overnight (optional). Colombo city tour can be arranged free of charge for half a day. Please advise us early to make arrangements.</p>
            </li></td></tr>
            <tr><td><li type="square">
                <b>Day 9 BEACH FREE DAY</b>
                <p>After breakfast transfer to the airport and the room is available until 12h00. If time permits you and your family can visit Colombo and do some last minute shopping and then transfer to the airport.</p>
            </li></td></tr>
        </table>
    </div>
    <!--  -->
</div>
@endsection