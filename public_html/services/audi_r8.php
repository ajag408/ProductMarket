<?php
session_start();
if(!isset($_SESSION['username'])){
  header("Location: https://phpproductmarket.000webhostapp.com/php/login.php");
  exit;
}

    $page_name = "Audi R8";
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
    // require_once("../php/previous_visited_cookies.php");
    // handle_last_five_pages_visited($page_name);
    // handle_most_visited_pages($page_name);
    echo<<<ENDL
    <h1>Audi R8</h1>
    <img src='https://www.topgear.com/sites/default/files/styles/large/public/cars-car/carousel/2018/11/a1813694_large.jpg?itok=DCVn38mf' alt='Audi R8'><br>
    <h2>Vehicle Details</h2>
    <ul>
        <li>Horsepower: 611 hp</li>
        <li>Torque: 417 lb-ft</li>
        <li>Fuel Economy: 13 city / 20 highway</li>
        <li>0 - 60 MPH time: 3.2 seconds</li>
    </ul>
ENDL;
?>
