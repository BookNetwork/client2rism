<?php


    function fee(){
            $f = array (1 => 'Sigiriya – US $ 30.00',
            2 => 'Elephant ride – US $ 50.00 for 02 pax',
            3 => 'Dambulla – US $ 12.00',
            4 => 'Anuradhapura –$ 13 per person [SAARC countries], $ 25 per person [other countries]',
            5 => 'Trincomalee Harbour –Free [from outside]',
            6 => 'Yala, Wilpattu, Minneriya, Jeep safari – US $ 60 [Full Jeep, 4 people]',
            7 => 'Yala Wilpattu, Minneriya Entrance Fee per person $ 25, Discount more than 4People',
            8=> 'Pinnewala Elephant Orphanage – USD 6.00 per person [SAARC countries] , $ 18  per person [other countries]',
            9=> 'Pinnewala Open Zoo  $ 8.00 per person',
            10 => 'Royal Botanical Garden – USD 10.00',
            11 => 'Spice Garden visit & Ayurveda, Only Head Massage Free',
            12 => 'Inspection and repair of all sightseeing Free',
            13 => 'Kandy Temple – USD $ 04 [SAARC countries], $ 08 [other countries]',
            14 => 'Cultural Dance $ 8',
            15 => 'Zoo USD $ 10 (Unless Specified)',
            16 => 'Kitulgala White water rafting $ 50 for 02 pax',
            17 => 'Whale watching in Mirisa per person with breakfast $ 46',
            18 => 'Train Journey from Kandy to Nanu Oya per person $ 5 (Normal Train)',
            19 => 'Train Journey from Colombo to Nanu Oya per adult $ 20 (Luxury)',
            19 => 'Train Journey from Colombo to Nanu Oya per Child $ 15 (Luxury)',
            20 => 'Kandy Temple – US$ 08.00',
            21 => 'Horton Plains National Park (ticket) – US $ 25.00 (Note: In this area insurance not covered for our vehicles hence company vehicles not allowed)',
            22 => 'Horton Plains -Per Jeep (Max 06Pax) – US$ 50',
            23 => 'Madu River Boat Ride (max 02 Pax ) – US$ 50.00 . For < 2 persons $ 20-per person',
            24 => 'Turtle Farm – US$ 5.00 per person',
            25=> 'GangaramaTemple – US$ 2.00 per person',
            26 => 'Batik Factory – Complementary',
            27 => 'Spice Gardens – Complementary',
            28 => 'Gem Museum – Complementary',
            29 => 'Note:

                    Elephant Feeding Time 9:15.a.m, 01:15.P.M or 4:30 P.M
            <br />
            Whale Watch Leave shores by 6:30. A.m.
            <br/>
            All Sightseeing Optional if Guest likes only.
            <br/>
            Tour highlights (Some sites are subject to time and weather condition barriers)',
            30 => '*Night shopping not available (After 8pm)
                <br />
            *Nuwara Eliya – Sightseeing & travel not allowed after 8 pm due to mist & fog
                <br/>
            *Smoking prohibited inside the vehicle
                <br />
            *Company will not be responsible for the guidance obtained from other Vendors and Guides, except the driver provided by the company. Especially in coastal areas (Beach boys)All Sightseeing Optional if Guest likes only.
            <br/>
            Tour highlights (Some sites are subject to time and weather condition barriers)'
            
        );

        foreach($f as $key => $val){
            echo '<tr><td>'. $val .'</td></tr>';
        }
    }
    
    function cancelationPolicies(){
        $p = array (1 => 'Before 30 days no cancellation Fee.',
        2 => 'Between 21 – 7 days 50% cancellation of the total account value.',
        3 => 'Less than 7 day’s 100% cancellation of the entire invoice value.',
        4 => 'No shows & early departures 100% cancellation of the entire invoice value.',
        5 => 'Please do feel free to contact me for any further clarifications required.',
        6 => 'Hope the above suits your requirements very well and please, do let me know if we are moving ahead with this engagement.',
        
    );

    foreach($p as $key => $val){
        echo '<tr><td>'. $val .'</td></tr>';
    }
}



    function PackExclude(){
            $excludes = array (1 => 'Anything Extra meals other than the travel program',
            2 => 'Personal Expenses',
            3 => 'Lunch & Dinner',
            4 => 'Camera and Video Charges',
            5 => 'Entrance and Ticket fees',
            6 => 'Games Tickets',
            7 => 'Use of vehicle other than the specified itinerary',
            8 => 'International flight tickets',
            9 => 'Any visa or inoculation fees',
            10 => 'Tips for the guide and driver',
            11 => 'Massage & Spa Available in All Hotels [Not Free]',
            11 => 'Christmas & New Year supplements not included',
            12 => 'Anything not mentioned in the program',
            13 => 'Cultural Triangle Guide fees not Included[Exclude Polonaruwa/Sigiriya/Kandy/Dabulla, Cultural Triangle]',
            14 => 'Medical expenses, travel insurance, international flights.',
            15 => 'The rights to use video cameras at sites – most places they are free when you pay the entrance fees except at Kandy Tooth Temple & Pinnawela Elephant orphanage there are extra charges for Video camera’s only USD 05 per Video Camera per location.'

            
        );
    
        foreach($excludes as $key => $val){
            echo '<tr><td>'. $val .'</td></tr>';
        }
    }


function Packinclude(){
    $includes  = array ('1' => '08-Days / 07- Nights, accommodation as per itinerary',
                       2 => 'Complimentary Mineral water on reaching Sri Lanka At the Airport [Once]',
                       3 => 'Assistance at the airport and transport for all ,08,Days.',
                       4 => 'Air-conditioned private vehicle with an English speaking chauffeur will be provided (Private Tour).'  ,
                       5 => 'Service of Multilingual speaking chauffeur guide ,Informative, friendly and professional local guide, For more personalized experience',
                       6 => 'Paging & Welcome Complementary'    ,
                       7 => 'All taxes, fuel surcharges and service fees included' ,
                       8 => 'Local insurance for the vehicle',
                       9 => 'Passenger Insurance',
                       10 => 'No vehicle will be provided on any free days if any (as per program).',
                       11=> 'Fuel & local assurance for vehicle & passengers while travelling included.',
                       12 => 'The chauffeur will look after his meals & accommodation by himself.',
            );

    foreach($includes as $key => $val){
        echo '<tr><td>'. $val .'</td></tr>';
    }
}

?>