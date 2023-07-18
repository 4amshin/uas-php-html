<?php

include 'database/db_config.php';

/*Home Text & Hero Image*/
$homeQuery = "SELECT * FROM `dashboard-content` WHERE `menu-id` = 'home-menu' AND (title = 'Description' OR title = 'Hero Image')";
$homeResult = $connect->query($homeQuery);

$homeText = "No Data";
$heroImage = "No Image Found";

if($homeResult->num_rows > 0) {
  while ($homeData = $homeResult->fetch_assoc()) {
    if($homeData['title'] == 'Description') {
      $homeText = $homeData['content'];
    } elseif ($homeData['title'] == 'Hero Image') {
      $heroImage = $homeData['content'];
    }
  }
}

/*About Description Text, Container Image, Icon Url and Text*/
$aboutQuery = "SELECT * FROM `dashboard-content` WHERE `menu-id` = 'about-menu' AND (title = 'Description' OR title = 'Left Side Image' OR title = 'Card Icon' OR title = 'Card Text')";
$aboutResult = $connect->query($aboutQuery);

$aboutText = "No Description";
$aboutImage = "No Image";
$aboutCardIcon = "No Icon";
$aboutCardText = "No Text";

if($homeResult->num_rows > 0) {
  while($aboutData = $aboutResult->fetch_assoc()) {
    if($aboutData['title'] == 'Description') {
      $aboutText = $aboutData['content'];
    } elseif ($aboutData['title'] == 'Left Side Image') {
      $aboutImage = $aboutData['content'];
    } elseif ($aboutData['title'] == 'Card Icon') {
      $aboutCardIcon = $aboutData['content'];
    } elseif ($aboutData['title'] == 'Card Text') {
      $aboutCardText = $aboutData['content'];
    }
  }
}

/*Service Card Icon & Text*/
$serviceQuery = "SELECT * FROM `service-menu`";
$serviceResult = mysqli_query($connect, $serviceQuery);

/*Contact Email & Phone*/
$contactQuery = "SELECT * FROM `dashboard-content` WHERE `menu-id` = 'contact-menu'";
$contactResult = mysqli_query($connect, $contactQuery);

/*Footer StakeHolder Logo*/
$footerQuery = "SELECT * FROM `dashboard-content` WHERE `menu-id` = 'img-menu' AND title = 'Footer Stakeholder White Logo' Limit 1";
$footerResult = $connect->query($footerQuery);

$footerLogo = "No Data";

if($footerResult->num_rows > 0) {
  $footerData = $footerResult->fetch_assoc();
  $footerLogo = $footerData['content'];
}

//Close the Database Connection
// mysqli_close($connect);
?>