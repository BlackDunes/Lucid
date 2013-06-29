<?php

$sqlhostname = "localhost";
$sqlusername = "root";
$sqlpassword = "";
$sqldatabase = "mm_users";

function statesList() {  
    $states = array('AL'=>"Alabama",  
                    'AK'=>"Alaska",  
                    'AZ'=>"Arizona",  
                    'AR'=>"Arkansas",  
                    'CA'=>"California",  
                    'CO'=>"Colorado",  
                    'CT'=>"Connecticut",  
                    'DE'=>"Delaware",  
                    'DC'=>"District Of Columbia",  
                    'FL'=>"Florida",  
                    'GA'=>"Georgia",  
                    'HI'=>"Hawaii",  
                    'ID'=>"Idaho",  
                    'IL'=>"Illinois",  
                    'IN'=>"Indiana",  
                    'IA'=>"Iowa",  
                    'KS'=>"Kansas",  
                    'KY'=>"Kentucky",  
                    'LA'=>"Louisiana",  
                    'ME'=>"Maine",  
                    'MD'=>"Maryland",  
                    'MA'=>"Massachusetts",  
                    'MI'=>"Michigan",  
                    'MN'=>"Minnesota",  
                    'MS'=>"Mississippi",  
                    'MO'=>"Missouri",  
                    'MT'=>"Montana",  
                    'NE'=>"Nebraska",  
                    'NV'=>"Nevada",  
                    'NH'=>"New Hampshire",  
                    'NJ'=>"New Jersey",  
                    'NM'=>"New Mexico",  
                    'NY'=>"New York",  
                    'NC'=>"North Carolina",  
                    'ND'=>"North Dakota",  
                    'OH'=>"Ohio",  
                    'OK'=>"Oklahoma",  
                    'OR'=>"Oregon",  
                    'PA'=>"Pennsylvania",  
                    'RI'=>"Rhode Island",  
                    'SC'=>"South Carolina",  
                    'SD'=>"South Dakota",  
                    'TN'=>"Tennessee",  
                    'TX'=>"Texas",  
                    'UT'=>"Utah",  
                    'VT'=>"Vermont",  
                    'VA'=>"Virginia",  
                    'WA'=>"Washington",  
                    'WV'=>"West Virginia",  
                    'WI'=>"Wisconsin",  
                    'WY'=>"Wyoming");  
    return $states;  
} 

function namePrefix() {  
    $prefix = array('Mrs.'=>"Mrs.",  
                    'Ms.'=>"Ms.",
                    'Miss'=>"Miss",
                    'Mr.'=>"Mr.",
                    'Prof.'=>"Prof.",
                    'Dr.'=>"Dr.",  );  
    return $prefix;  
}

function gradeLevels() {  
    $gradelevels = array('no'=>"I'm not a teacher",
                    'elem'=>"Elementary Education",  
                    'middle'=>"Middle School (6-8)",
                    'high'=>"High School (9-12)",
                    'college'=>"College / University");  
    return $gradelevels;  
}

?>