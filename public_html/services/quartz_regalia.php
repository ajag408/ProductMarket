<?php
    require_once('../database_credentials.php');
    require_once("../php/utilities.php");
session_start();
if(!isset($_SESSION['username'])){
  header("Location: /php/login.php");
  exit;
}
    $page_name = "Quartz Regalia";
    $visited = false;
    $pages = $_SESSION['cHistory'];
    foreach($pages as $key => $value){
      if($value == $page_name){
        $visited = true;
      }
    }
    if(!$visited){
      array_push($pages, $page_name);
      $_SESSION['cHistory'] = $pages;
    }
    if(isset($_POST['review_text']) && isset($_POST['rating'])) {
      $username = $_SESSION['username'];
      $review_text = $_POST['review_text'];
      $rating = $_POST['rating'];
      addReview($servername, $serverUsername, $serverPassword, $dbname, $username, $review_text, $rating, $page_name);
      }

    // require_once("../php/previous_visited_cookies.php");
    // handle_last_five_pages_visited($page_name);
    // handle_most_visited_pages($page_name);
    echo<<<ENDL
    <h1>Quartz Regalia </h1>
    <img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSKErVy370d23wGFcVdo1KwWdDdUdqIh0LDElJ_z3vottjWSDIo' alt='Quartz Regalia'><br>
    <h2>Vehicle Details</h2>
    <ul>
        <li>Horsepower: 433 hp</li>
        <li>Torque:  511 lb-ft</li>
        <li>Fuel Economy: Unknown</li>
        <li>0 - 60 MPH time: 4.7 seconds</li>
    </ul>
ENDL;
getReviews($servername, $serverUsername, $serverPassword, $dbname, $page_name);

?>
