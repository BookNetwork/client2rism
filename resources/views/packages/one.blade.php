@extends('welcome')
@section('bodycontent')
@include('packages.packagesDetails')

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
        <tr><th><h3><b>Package Includes</b></h3></th></tr>
       {{ Packinclude() }}
    </table>
</div>
<!--  -->
<div class="col-md-6">
    <table class="table table-striped">
        <tr><th><h3><b>Package Excludes</b></h3></th></tr>
        {{ PackExclude() }}
    </table>
</div>
<!--  -->
<div class="col-md-6">
    <table class="table table-striped">
        <tr><th><h3><b>Brief Itinerary</b></h3></th></tr>
        <tr><td>Day 1 AIRPORT / NEGOMBO / CULTURAL TRIANGLE</td></tr>
        <tr><td>Day 2 POLONNARUWA / MEDIRIGIRIYA</td></tr>
        <tr><td>Day 3 ANURADHAPURA / MIHINTALE</td></tr>
        <tr><td>Day 4 DAMBULLA / NALANDA GEDIGE/ MATALE / KANDY</td></tr>
        <tr><td>Day 5 KANDY / PERADENIYA / NUWARA ELIYA</td></tr>
        <tr><td>Day 6 NUWARA ELIYA / ELLA / BUDURUWAGALA / YALA</td></tr> 
        <tr><td>Day 7 WELIGAMA / GALLE / COLOMBO</td></tr> 
        <tr><td>Day 8 COLOMBO / AIRPORT</td></tr>
    </table>
</div>
<!--  -->
<div class="col-md-6">
    <table class="table table-striped">
        <tr><th><h3><b>The following cancellation policy applies to this tour</b></h3></th></tr>
        {{cancelationPolicies()}}
    </table>
</div>
<!--  -->
<div class="col-md-12">
    <table class="table table-striped">
        <tr><th><h3><b>Entrance fees during guided sightseeing:</b></h3><div class="alert alert-info">Rates are based on per person, Group; Rates may differ due to currency conversion & not Fixed Rates.</div></th></tr>
        {{fee()}}
    </table>
</div>
<!--  -->

<div class="col-md-12">
    <table class="table table-striped">
        <tr><th><marquee><h3><b>HIGHLIGHTS & ACTIVITIES DAY TO DAY ITINERARY</b></h3></marquee></th></tr>
        <tr><td><b>Day 1 AIRPORT / NEGOMBO / CULTURAL TRIANGLE</b><br/>
                <p>Arrival, welcomed & assisted at the airport then leave to Sigiriya. En-route visit Negombo. The population in Negombo is largely Roman Catholic by faith, with large structured churches down almost every street. The sea & the catamarans are the backdrop to the Negombo scenery.
                 At P.M. pay a visit to Sigiriya located in the north-central part of Sri Lanka which preserves the architectural tradition of the country. The town is famous for its rock fortress, gardens and sanctuary. Sigiriya has spectacular importance in Sri Lanka. An ancient palace complex, erected during the reign of King Kashyapa, which has been declared by UNESCO a world heritage site. Return to the hotel for an overnight stay.</p>
            </td></tr>
        <tr><td>
            <b>Day 2 POLONNARUWA / MEDIRIGIRIYA</b>
            <p>After breakfast get ready for an excursion to Polonnaruwa, the second ancient capital city for three centuries, it is a site which cannot be missed in Sri Lanka with many well preserved ruins of palaces and monasteries . In the late afternoon visit Medirigiriya. The Medirigiriya Vatadage is on a high circular stage. It has three concentric circles of pillars (with the same center) and a decorated stone wall about three and a half feet high. Return to the hotel for an overnight stay with dinner.</p>
        </td></tr>
        <tr><td>
            <b>Day 3 ANURADHAPURA / MIHINTALE</b>
            <p>After breakfast excursion to Anuradhapura & visit the ruins of the first capital founded in the 05th century BC. It is known to have the largest number of ancient monuments of a great civilization. World Heritage city Anuradhapura, in picturesque ruins, was once a major center of SriLankan civilization. In the afternoon visit Mihintale & Later on return back to your hotel for overnight stay.</p>
        </td></tr>
        <tr><td>
            <b>Day 4 DAMBULLA / NALANDA GEDIGE/ MATALE / KANDY</b>
            <p>After breakfast leave for Kandy En-route visit Dambulla. In Sri Lankan history, the Dambulla cave complex dates back to 3rd and 2nd centuries B.C. Even before the making of the complex it was well established as one of the largest monasteries in Sri Lanka. The Dambulla caves have been declared a World Heritage Site by UNESCO. The area is also known for bird watching, next visit Nalanda Gedige the Abu Simbel of Sri Lanka.
             Nalanda Gedige is one out of a number of remarkable archaeological sites in Sri Lanka, on the way to Kandy visit a spice garden and a batik factory in Matale. In the evening arrive at the hotel in Kandy. Also known as the center of traditional arts in Sri Lanka visit the temple of the sacred tooth relic of Buddha. Return to the hotel for an overnight stay</p>
        </td></tr>
        <tr><td>
            <b>Day 5 KANDY / PERADENIYA / NUWARA ELIYA</b>
            <p>After breakfast visit the royal botanical gardens of Peradeniya which is well known for its large variety of plants the garden is best known for its collection of orchids which is the largest in Asia. At P.M. leave for Nuwara Eliya the center of the hill country, en-route visit a tea plantation and witness the manufacture of the world famous Ceylon tea.
                Gregory Lake is one of the most attractive locations in Nuwara Eliya. Enjoy the view at Shanthipura (the city view point) and spend the evening walking in the cool climate and later on arrive at the hotel for the overnight stay.</p>
        </td></tr> 
        <tr><td>
            <b>Day 6 NUWARA ELIYA / ELLA / BUDURUWAGALA / YALA</b>
            <p>After breakfast leave for the Tissamaharama region stop at Ella to admire the magnificent view. Then visit Buduruwagala, the term Buduruwagala means the ”rock with the statue of Buddha” and this is exactly what it is. The rock is formed into the shape of a kneeling elephant. The statues date back to 10 century A.D.
                At P.M. get ready for a safari in the Yala National Park and enjoy the wilderness as you cruise around in a jeep. The breathtaking view of the wild elephants are undoubtedly the best known attraction at Yala, seen in small and large herds. The park is also known for herds of spotted deer which are found all over the park. Monkeys like the Pinkish Rhesus and the Grey-faced Langur live and play on the tree-tops and the ground below. The other animals like Wild buffalo & wild boar would startle you with their presence and the sight of a leopard sunning itself or drinking water at a water hole could be a memorable experience. Later on arrive at the hotel for overnight stay.</p>
        </td></tr>
        <tr><td>
            <b>Day 7 WELIGAMA / GALLE / COLOMBO</b>
            <p>After breakfast leave for Galle, en route view the stilt fisherman of Weligama as they fish, then visit the Old Portuguese fort, later rebuilt and extended by the Dutch. It is still well preserved. Most of the administration in Galle still takes place from the Fort . The view from the ramparts is superb.
                A well-known fact of the Galle Fort is it being a World Heritage site and the largest remaining fortress built in Asia by European colonists. The journey then progresses towards Colombo. At P.M. visit the fascinating city of Colombo which links the past with the present. You will visit the Fort area, the commercial center, Pettah Colombo’s bustling bazaar area, a cinnamon garden which is a large residential complex. Later on return to the hotel for an overnight stay.</p>
        </td></tr>
        <tr><td>
            <b>Day 8 COLOMBO / AIRPORT</b>
            <p>After breakfast transfer to the airport to connect to your flight for departure. Rooms till 12h00 in the afternoon.</p>
        </td></tr>
    </table>
</div>
<!--  -->
</div>
@endsection