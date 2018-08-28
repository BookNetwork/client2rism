@extends('welcome')
@section('bodycontent')
@include('packages.packagesDetails')

    <link rel="stylesheet" href="css/packages.css">
                    

                    <div class="col-md-12 packageHeader" >
                        <div class="col-md-6 headr" >
                            <center style="margin:90px 0px 0px 0px;">
                                <h1>Package 3 </h1>
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
                                <p style="font-family:Microsoft JhengHei UI">Spend time with your family to unwind from your hectic life. Our 5 days’ tour package offers you the best for the money you pay.</p>
                            </center> 
                        </div>  
                    </div>
                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog">
                        
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Package 3 - More Details Request Form</h4>
                            </div>
                            <div class="modal-body">
                
                                        <form action="/requestMoreDetails3" method="post" enctype="multipart/form-data">
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
            <tr><td>Day 1 Upon arrival at the Bandaranaike International Airport, Colombo, Sri Lanka. Proceed the hotel in Kandy</td></tr>
            <tr><td>Day 2 After Breakfast leaves to Nuwara Eliya</td></tr>
            <tr><td>Day 3 After Breakfast leaves to Bentota</td></tr>
            <tr><td>Day 4 After Breakfast leaves to Colombo</td></tr>
            <tr><td>Day 5 DAMBULLA / NALANDA GEDIGE/ MATALE / KANDY</td></tr>
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
            <tr><td>
                        <h4>DAY 1</h4>
                        <b>Airport – Kandy
                        <br />Driving Distance: 120 km
                        <br />Driving Duration: 3 hours</b>
                        <p>Upon arriving in Sri Lanka, transfer to the hotel booked. Loosen up and relax after your flight, preparing yourself for the adventure ahead. Transport in air-conditioned vehicle to Kandy.</p>
                        <p>In the evening visit the Temple of the Tooth Relic and thereafter see a cultural appearance. The beautiful hill capital. The ancient kingdom of Sri Lanka. Leaves to the most beautiful ancient city of Sri Lanka and its noted for its tourist attractions that includes the wildlife sanctuary, historical heritage sites, unparalleled scenic vistas, botanical gardens and tons more…. Kandy is also prominent for its pilgrimage places of the Buddha, those are religiously and historically most important and which draws in tourists who loves pilgrimage places all over the world.</p>
                        <p>Continue to Pinnewala:
                            <br />
                            Enroute visit Pinnewala and Elephant Orphanage. These 24 acres, large elephant habitat are believed to have the largest herd of elephants in captivity in the world. The Orphanage was established to feed, nurse and house young elephants abandoned by their female parents, displaced from their natural environment by development projects. Most of the orphans cannot be inserted back into the wild, as other elephant family groups will not take them. They survive a full lifetime with their human parents, and many find safe foster homes in zoos around the world. It is more interesting to move to an Orphanage at feeding or bathing time.
                            <br />
                            Elephant Feeding Time 9:00.a.m, 12:00.P.M or 4:00 P.M</p>

                        <p><b> Kandy:</b><br/>

                            Elephant Orphanage at Pinnewala<br/>
                            Royal Botanical Garden<br/>
                            Visit the Temple of the Tooth relic<br/>
                            Spice Garden (in Kandy road)<br/>
                            Cultural Show<br/>
                            Upper Lake Drive<br/>
                            Kandy City Tour<br/>
                            Kandy Temples could be visited if guest likes<br/>
                            Shopping Gem Museum, Batik Factory, Wood Carving, (optional)<br/>
                            The most desirable time to visit is from 8.00 to 13.00 and from 16.00 to 18.00.<br/>
                            Elephant Feeding Time 9:00.a.m</p>
                </td></tr>
            <tr><td>
                <h4>DAY 2</h4>
                <b>Kandy- Nuwara Eliya<br/>
                    Driving Distance: 78 km<br/>
                    Driving Duration: 2 hours<br/></b><br/>
                <p>The prime hill resort of Sri Lanka. It is still very much like an old English town with styled Bungalows and buildings. The cool calm climate, gorges rolling tea plantation which makes the best “Ceylon tea” and the breathtaking beautiful waterfalls makes Nuwara Eliya one of the most beautiful town in the world. Overnight stay in Nuwara Eliya</p>
                <p><b>Nuwara Eliya:</b><br/>

                    Ramboda Water Fall<br/>
                    Ambewala Farm<br/>
                    Hakgala Botanical Garden<br/>
                    Nuwara Eliya Gardens<br/>
                    Horse Ridding<br/>
                    Tea Plantations<br/>
                    Lake Drive<br/>
                    Strawberry Gardens<br/>
                    The Golf Course<br/>
                    Setha Eliya Temple<br/>
                    Gregory Lake.</p>
            </td></tr>
            <tr><td>
                <h4>DAY 3</h4>
                <b>Nuwara Eliya- Bentota<br />
                    Distance 240 Km<br/>
                    Duration 5 hrs 30 mins (Approximately)</b>
                    <p>Make it at the hotel and check-in with welcome drink and refreshing towels.</p>
                <p>Colombo, the commercial capital of Sri Lanka is just 34 km from the international airport. It takes an interesting blend of the Dutch and British architecture over 600 years in utter concord with the modernistic architecture. The Dutch Colonial style of architecture is very much in evidence in the Colombo Fort and the Pettah areas.
                The President’s House located at the Fort, the Galle Face Green the largest open air stretch in the city bordering the fort along the south, Galle Face Hotel the oldest hotel of the country is locations that one should not overlook.
                The Pettah area, with many crossing roads remains the busiest bazaar in the city.
                Amidst the busy commercial surroundings, Colombo is not excluded from the spiritual influence. Many Buddhist Temples, Islamic Mosques, The Dutch Reform and Anglican Churches are not uncommon sites.</p>
                <p>
                <b>Colombo:</b><br />
                Museum<br />
                Art Collection<br />
                Parks<br />
                Town Hall<br />
                Nelum Pokuna<br />
                Beach Area (Coastal Belt of Colombo)<br />
                Shopping centers, outlet malls and restaurants nearby<br />
                Zoo [optional]<br />
                The temple could be visited if guest like only</p>
            </td></tr>
            <tr><td>
                <h4>DAY 4</h4>
                <b>Bentota – Colombo <br />
                    Distance 140 Km <br />
                    Duration 2 hrs 30 mins (Approximately)</b>
                <p>After breakfast leave for Kandy En-route visit Dambulla. In Sri Lankan history, the Dambulla cave complex dates back to 3rd and 2nd centuries B.C. Even before the making of the complex it was well established as one of the largest monasteries in Sri Lanka. The Dambulla caves have been declared a World Heritage Site by UNESCO. The area is also known for bird watching, next visit Nalanda Gedige the Abu Simbel of Sri Lanka.
                 Nalanda Gedige is one out of a number of remarkable archaeological sites in Sri Lanka, on the way to Kandy visit a spice garden and a batik factory in Matale. In the evening arrive at the hotel in Kandy. Also known as the center of traditional arts in Sri Lanka visit the temple of the sacred tooth relic of Buddha. Return to the hotel for an overnight stay</p>
                 <p>Make it at the hotel and check-in with welcome drink and refreshing towels.</p>
                 <p>Colombo, the commercial capital of Sri Lanka is just 34 km from the international airport. It takes an interesting blend of the Dutch and British architecture over 600 years in utter concord with the modernistic architecture. The Dutch Colonial style of architecture is very much in evidence in the Colombo Fort and the Pettah areas.
                    The President’s House located at the Fort, the Galle Face Green the largest open air stretch in the city bordering the fort along the south, Galle Face Hotel the oldest hotel of the country is locations that one should not overlook.
                    The Pettah area, with many crossing roads remains the busiest bazaar in the city.
                    Amidst the busy commercial surroundings, Colombo is not excluded from the spiritual influence. Many Buddhist Temples, Islamic Mosques, The Dutch Reform and Anglican Churches are not uncommon sites.</p>

                    <p> <b> Colombo:</b><br />
                        Museum<br />
                        Art Collection<br />
                        Parks<br />
                        Town Hall<br />
                        Nelum Pokuna<br />
                        Beach Area (Coastal Belt of Colombo)<br />
                        Shopping centers, outlet malls and restaurants nearby<br />
                        Zoo [optional]<br />
                        The temple could be visited if guest like only</p><br />
            </td></tr>
            <tr><td>
                <h4>DAY 5</h4>
                <b>Colombo – Colombo (Airport) <br>
                    Distance 38 Km <br>
                    Duration 1 hrs (Approximately)</b> <br>

                    <p>Proceeds to the Bandaranayke international airport, where you stack all your memories in your eyes & Mind, allowing this beautiful island Sri Lanka. This experience will leave you astounded. Pampered, enlightened. Moreover, animated. A country like no other! Visit Sri Lanka… Dependent on the flight departure time, you will be reassigned to the Airport.</p>
            </td></tr>
        </table>
    </div>
    <!--  -->
</div>
@endsection