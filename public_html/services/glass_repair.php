<?php
session_start();
if(!isset($_SESSION['username'])){
  header("Location: https://phpproductmarket.000webhostapp.com/php/login.php");
  exit;
}
    $page_name = "Cracked Glass Repair";
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
    <h1>Cracked Glass Repair</h1>
    <img src='https://ig3zfrbsnd-flywheel.netdna-ssl.com/wp-content/uploads/2017/04/feature-1140x570.jpg' alt='Cracked Glass Repair'><br>
    <h2>Details</h2>
    <ul>
        <li>Premium clear chip repair resin</li>
        <li>Fixes chips less than the size of a quarter</li>
        <li>1 year warranty</li>
    </ul>
ENDL;
?>
