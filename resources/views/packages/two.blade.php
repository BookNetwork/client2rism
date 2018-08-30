@extends('welcome')
@section('bodycontent')

@include('packages.packagesDetails')

    <link rel="stylesheet" href="css/packages.css">
                    

                    <div class="col-md-12 packageHeader" >
                        <div class="col-md-6 headr2" >
                            <center style="margin:90px 0px 0px 0px;">
                                <h1  style="font-size:50px;background-color:rgba(255, 255, 255, 0.623);width:300px;height:100px;padding:20px">Package 2</h1>
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
                                <p style="font-family:Microsoft JhengHei UI">If you want to experience the best of Sri Lanka; all climate and cultural variations within 8 days, this will be the ideal package for you.</p>
                            </center> 
                        </div>  
                    </div>
                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog">
                        
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Package 2 - More Details Request Form</h4>
                            </div>
                            <div class="modal-body">
                
                                        <form action="/requestMoreDetails2" method="post" enctype="multipart/form-data">
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
            <tr><td><li type="square">Day 1 Upon arrival at the Bandaranaike International Airport, Colombo, Sri Lanka. Proceed to the hotel in Colombo</li></td></tr>
            <tr><td><li type="square">Day 2 After Breakfast leaves to Habarana</li></td></tr>
            <tr><td><li type="square">Day 3 After Breakfast leaves to Kandy</li></td></tr>
            <tr><td><li type="square">Day 4 After Breakfast leaves to Nuwara Eliya</li></td></tr>
            <tr><td><li type="square">Day 5 After Breakfast leaves to Yala</li></td></tr>
            <tr><td><li type="square">Day 6 After Breakfast leaves to Kaluthara /Bentota</li></td></tr> 
            <tr><td><li type="square">Day 7 Tour continues same Bentota/Beruwella/Ahungalla/ Kaluthara</li></td></tr> 
            <tr><td><li type="square">Day 8 After Breakfast at the Hotel proceeds to Airport for Departure</li></td></tr>
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
            <tr><th><h3><b>ENTRANCE FEES DURING GUIDED SIGHTSEEING</b></h3><div class="alert alert-info">Rates are based on per person, Group; Rates may differ due to currency conversion & not Fixed Rates.</div></th></tr>
            {{fee()}}
        </table>
    </div>
    <!--  -->
   
    <div class="col-md-12">
        <table class="table table-striped">
            <tr><th><marquee><h3><b>HIGHLIGHTS & ACTIVITIES DAY TO DAY ITINERARY</b></h3></marquee></th></tr>
            <tr><td><li type="square"><h4>DAY 1</h4><br/>
                    <p>Upon arriving in Sri Lanka, transfer to the hotel booked. Loosen up and relax after your flight, preparing yourself for the adventure ahead. Transport in air-conditioned vehicle to the hotel in Colombo.
                        Make it at the hotel and check-in with welcome drink and refreshing towels.
                        Colombo, the commercial capital of Sri Lanka is just 34 km from the international airport. It takes an interesting blend of the Dutch and British architecture over 600 years in utter concord with the modernistic architecture. The Dutch Colonial style of architecture is very much in evidence in the Colombo Fort and the Pettah areas.
                        The President’s House located at the Fort, the Galle Face Green the largest open air stretch in the city bordering the fort along the south, Galle Face Hotel the oldest hotel of the country is locations that one should not overlook.
                        The Pettah area, with many crossing roads remains the busiest bazaar in the city.
                        Amidst the busy commercial surroundings, Colombo is not excluded from the spiritual influence. Many Buddhist Temples, Islamic Mosques, The Dutch Reform and Anglican Churches are not uncommon sites.</p>
                        <p>
                        <b>Colombo:</b><br>
                        Museum<br>
                        Art Collection<br>
                        Parks<br>
                        Town Hall<br>
                        Nelum Pokuna<br>
                        Beach Area (Coastal Belt of Colombo)<br>
                        Shopping centers, outlet malls and restaurants nearby<br>
                        Zoo [optional]<br>
                        The temple could be visited if guest like only<br>
                        <br>
                        Overnight stay in Colombo
                        </p>
            </li></td></tr>
            <tr><td><li type="square">
                <h4>DAY 2</h4>
                <b>Colombo – Habarana <br>
                    Distance 195 Km <br>
                    Duration 4 hrs (Approximately)</b>
                    <p>Dambulla / Sigiriya / Habarana:</p>
                <p>Proceed to Sigiriya and climb the Rock Fortress of Sigiriya, built 5th century A.D, see the Water Garden, Bolder Garden, Mural Paintings, The Mirror Wall, The Lion’s Paws and the Royal Swimming Pool on top. Dambulla:
                    <br>
                    Many centuries had remained the habitation of forest dwelling monks who had minimum contacts with the public. It is today famous for the rock temple of infinite Buddha’s. The rock ceiling is one great sweep of colorful paintings of Lord Buddha and his previous incarnations dating back to the first century BC.
                    <br>
                    The main shrine at Dambulla, known as the Rangiri Dambulla Viharay a, or the golden cave temple of Dambulla, has been quoted in a routine of spiritual and historical texts. The images in a number of postures are those of the Buddha, the bodhisattvas, gods and goddesses, monks, disciples and kings. Encompassing 25,000 square feet, the area of paintings in the shrine is the largest in South Asia and the oldest in the universe.
                    <br>
                    The Rangiri Dambulla Viharaya has five temples each having several images of Lord Buddha, deities and the Kings who had constructed the temples from time to time. In one of the cave temples is a fascinating outcome formed due to the flaw in the shaping of the stone, where water seeps into the cave through a tiny space created on the rock ceiling. This water is gathered up into a bowl and with time it has acquired sanctity, religious and ritual interest and now being used for various spiritual functions.</p>
                    <p><b>Dambulla / Sigiriya / Habarana:</b>

                        Royal Rock Temple <br>
                        Sigiriya Rock fortress <br>
                        Dambulla rock cave temple <br>
                        The Buddhists Museum <br>
                        Icon of the Buddha and two Dagoba <br>
                        Village Tour <br>
                        Bulart Cart Rides <br>
                        Elephant rides <br>
                        Matale Spice Garden <br>
                        Alu Vihara Temple <br>
                        Take an ancient city tour in Sigiriya <br>
                        

                        Overnight stay in Habarana</p>
            </li></td></tr>
            <tr><td><li type="square">
                <h4>DAY 3</h4>
                <b>Habarana– Kandy <br> 
                    Distance 98 Km <br>
                    Duration 2 hrs 30 mins (Approximately)</b>
                <p>In the evening visit the Temple of the Tooth Relic and thereafter see a cultural appearance. Dinner and The beautiful hill capital, the ancient kingdom of Sri Lanka. Leaves to the most beautiful ancient city of Sri Lanka and its noted for its tourist attractions that includes the wildlife sanctuary, historical heritage sites, unparalleled scenic vistas, botanical gardens and tons more…. Kandy is also prominent for its pilgrimage places of the Buddha, those are religiously and historically most important and which draws in tourists who loves pilgrimage places all over the world.
                        <br>
                    Continue to Pinnewala:</b>
                        <br>
                    Enroot visit Pinnewala and Elephant Orphanage. These 24 acres, large elephant habitat are believed to have the largest herd of elephants in captivity in the world. The Orphanage was established to feed, nurse and house young elephants abandoned by their female parents, displaced from their natural environment by development projects. Most of the orphans cannot be inserted back into the wild, as other elephant family groups will not take them. They survive a full lifetime with their human parents, and many find safe foster homes in zoos around the world. It is more interesting to move to an Orphanage at feeding or bathing time.</p>
                    <p><b>Elephant Orphanage at Pinnewala</b><br/>

                        Royal Botanical Garden <br>
                        Visit the Temple of the Tooth relic<br>
                        Spice Garden (in Kandy road)<br>
                        Cultural Show<br>
                        Upper Lake Drive<br>
                        Kandy City Tour<br>
                        Kandy Temples could be visited if guest likes<br>
                        Shopping Gem Museum, Batik Factory, Wood Carving, (optional)</p>
            </li></td></tr>
            <tr><td><li type="square">
                <h4>DAY 4</h4>
                <b>Kandy- Nuwara Eliya <br>
                    Distance 78 Km <br>
                    Duration 2 hrs (Approximately)</b>
                <p>The prime hill resort of Sri Lanka. It is still very much like an old English town with styled Bungalows and buildings. The cool calm climate, gorges rolling tea plantation which makes the best “Ceylon tea” and the breathtaking beautiful waterfalls makes Nuwara Eliya one of the most beautiful town in the world. Overnight stay in Nuwara Eliya
                <br /><br/> 
                <b>Nuwara Eliya:</b><br/>

                Ramboda Water Fall<br/>
                Ambewala Farm<br/>
                Hakgala Botanical Garden<br/>
                Nuwara Eliya Gardens<br/>
                Horse Ridding <br>
                Tea Plantations <br>
                Lake Drive <br>
                Strawberry Gardens <br>
                The Golf Course <br>
                Setha Eliya Temple <br>
                Gregory Lake <br>
                </p>
            </li></td></tr>
            <tr><td><li type="square">
            <h4>DAY 5</h4>
                <b>Nuwara Eliya – Yala <br>
                    Distance 190 Km <br>
                    Duration 4 hrs (Approximately)</b>
                    <p>Arrive at the hotel and check-in with welcome drink and refreshing towels. Sri Lanka’s jagged south coast consists of delightful coral-protected bays and headlands and offers a greater diversity of beaches than the west coast. Stunning tropical sandy beaches, rural fishing villages, untouched wilderness and a vibrant cultural heritage makes the southern coastal belt an ideal holiday experience for those wishing to escape the larger tourist centers.
                        <br>
                    Bentota and its breathtaking sandy beach pretty much transform your dreams and visions of a tropical paradise into an everyday reality. Located close to the Southern tip of the Island of Sri Lanka and only about 200 km from the Equator, this secluded crescent shaped beach is the perfect place to sit back, relax and forget about all the hustle and bustle of your other life that’s a million miles away. This small sandy tropical beach boasts some of Sri Lanka’s best and most stunning sunsets and sunrises. Stay the night in Kaluthara</p>
            </li></td></tr> 
            <tr><td><li type="square">
                <h4>DAY 6 & 7</h4>
                <b>Yala – Kaluthara <br />
                    Distance 245 Km <br />
                    Duration 4 hrs 30 mins (Approximately)</b>
                <p>Arrive at the hotel and check-in with welcome drink and refreshing towels. visit Yala national park by jeep. End of the safari back to hotel at Yala.</p>
                <p>With its famous wild life safari, this has your tour continues to Yala. Safari to Yala Park begins in the morning. It will be just fine to run and jump in the jeep. The lack of other large carnivores means that the leopard is the top predator and cats and cubes are not threatened during the day or night. Leopards there are also other large animals you may see in the park such as Elephants, Crocodiles, Wild Boars, Jackals, Mongooses, and birds. The flora is typical of dry monsoon forest vegetation. February-June/July is the greatest time to visit when water tables are low. Leopard, elephant and many smaller animals are competing for the same drinking supply. Birds are in profusion – up to 130 species. The park also has a monastic settlement. Visiting the water holes and searching for food. Stay the night in Yala.</p>
                <p>Yala National Park:
                    <br />
                    The Yala National Park is the most famous wildlife sanctuary in Sri Lanka and this vast reserve is home to a multitude of fascinating wildlife as well as plant life. Deer, peacocks, wild boar, bears and herds of wild elephants are just some of the creatures that live here. Yala is also known as one of the best places to spot the ever illusive Sri Lankan leopard and is also home to an amazing array of endemic birds. Explore this amazing realm in a jeep safari escorted by experienced and knowledgeable guides and trackers and see for yourself the amazing creatures that inhabit it.</p>
                    <p><p>Arrive at the hotel and check-in with welcome drink and refreshing towels. Sri Lanka’s jagged south coast consists of delightful coral-protected bays and headlands and offers a greater diversity of beaches than the west coast. Stunning tropical sandy beaches, rural fishing villages, untouched wilderness and a vibrant cultural heritage makes the southern coastal belt an ideal holiday experience for those wishing to escape the larger tourist centers.
                        <br />
                    Bentota and its breathtaking sandy beach pretty much transform your dreams and visions of a tropical paradise into an everyday reality. Located close to the Southern tip of the Island of Sri Lanka and only about 200 km from the Equator, this secluded crescent shaped beach is the perfect place to sit back, relax and forget about all the hustle and bustle of your other life that’s a million miles away. This small sandy tropical beach boasts some of Sri Lanka’s best and most stunning sunsets and sunrises. Stay the night in Kaluthara</p>
                    <p><b>Beruwella / Bentota / Ahungalla / Kaluthara Excursions:</b>
                        <br><br>
                        Madu Ganga (River), Boat Safari <br>
                        Water Sports, Example <br>
                        Windsurfing <br>
                        Banana Ride<br> 
                        Jet Ski<br>
                        Water skiing.<br>
                        Turtle farm</p></p>
            </li></td></tr>
            <tr><td><li type="square">
            <h4>DAY 8</h4>
                <b>Kaluthara -Airport <br>
                    Distance 90 Km <br>
                    Duration 2 hrs (Approximately)</b> <br>
                <p>Proceeds to the Bandaranayke international airport, where you stack all your memories in your eyes & Mind, allowing this beautiful island Sri Lanka. This experience will leave you astounded. Pampered, enlightened. Moreover, animated. A country like no other! Visit Sri Lanka… Dependent on the flight departure time, you will be reassigned to the Airport.</p>
            
            </li></td></tr>
        </table>
    </div>
    <!--  -->
</div>

@endsection