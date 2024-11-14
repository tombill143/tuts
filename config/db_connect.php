<!-- <?php 

    //connect to the database 
    $conn = mysqli_connect('localhost', 'tom', 'test1234', 'pizza_byte');


    //this is checking the connection
    if(!$conn){
        echo "An Annoying Connection error occurred when connecting to the pizza database: " . mysqli_connect_error();
    }


?> -->

<?php 

// Get the database connection URL from Heroku's JawsDB add-on
$jawsdb_url = parse_url(getenv('JAWSDB_URL'));

// Extract the necessary components of the connection string
$db_host = $jawsdb_url['host'];
$db_user = $jawsdb_url['user'];
$db_password = $jawsdb_url['pass'];
$db_name = ltrim($jawsdb_url['path'], '/');

// Connect to the database
$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

// Check if the connection was successful
if(!$conn) {
    echo "An annoying connection error occurred when connecting to the pizza database: " . mysqli_connect_error();
}

?>
