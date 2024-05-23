<h1>Arrays</h1>

<?php

// Index or numeric arrays 

$fnames = ["Alex", "Peter", "James"];
print_r($fnames);
echo '<br>';

$colors = ["Black", "Green", "Yellow", "White", "Red", "Blue"];

?>
<pre>
    <?php print_r($colors); ?>
</pre>

<?php 
echo $fnames[1]; 

// Associative Arrays 
$user = [
    "name" => "John Doe",
    "email" => "john@example.com",
    "age" => 30
];

// Multidimensional arrays 
$user_details = [
    "Director" => [
        "name" => "Alex Okama",
        "email" => "Okama@yahoo.com",
        "address" => "Mada",
        "phone" => [
            "Mobile" => "+254 706489000",
            "work" => "+254 789034567",
            "cell" => "+254 789036538"
        ]
    ],
    "Manager" => [
        "name" => "Luc Mkalamba",
        "email" => "Makalam@yahoo.com",
        "address" => "Mada",
        "phone" => [
            "Mobile" => "+254 706489000",
            "work" => "+254 789034567",
            "cell" => "+254 789036538"
        ]
    ],
    "Secretary" => [
        "name" => "Judith Fenia",
        "email" => "jufeni@yahoo.com",
        "address" => "Mada",
        "phone" => [
            "Mobile" => "+254 789000000",
            "work" => "+254 789444444",
            "cell" => "+254 789036538"
        ]
    ]
];

$ages = [45, 42, 23];

// Correct usage of array_combine
$user_names = ["Director", "Manager", "Secretary"];
$user_ages = array_combine($user_names, $ages);
print_r($user_ages);

echo '<br>';

// Merging arrays
$user_data = array_merge($user, ["ages" => $ages]);
print_r($user_data);

?>