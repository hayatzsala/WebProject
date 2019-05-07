<?php
session_start();
if (isset($_SESSION['username'])) {
  header("Content-Type: application/json; charset=UTF-8");
// Create connection
$conn = new mysqli("localhost","root", "","oceanstars");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";

$obj = $_GET["y"];
$patra=json_decode($obj);
$_SESSION['place']=$patra->place;

$result = mysqli_query($conn,"SELECT * FROM `".$patra->table1."`");
if ($result==false) {
  echo "error query";
}else
{
  // echo "susecccccc";
}
echo '<br>'."<h2 id='hotel'>Our Hotels</h2>".'<br>';
if (mysqli_num_rows($result) > 0) {
    // output data of each row
     // echo "<h1>the rows=".mysqli_num_rows($result)."</h1>";
     // echo "<h3>".$_SESSION['place']."</h3>";
    
      echo "<div class='carousel slide' data-ride='carousel' id='myHotels'>";
      echo "<div class='carousel-inner row w-100 mx-auto' >";
    while($row = mysqli_fetch_assoc($result)) {
      if($_SESSION['place']==$row['Country']){
        //echo "<h3>".$_SESSION['place']."</h3>";

    echo "<div class='carousel-item col-md-4 active'>"
      ."<div class='card' >"
      ."<img class='card-img-top img-fluid' src=".$row["image"]." alt='Card image cap' />" 
      . '<div class="card-body">'
      .'<h4 class="card-title">'.$row["name"].'</h4>'
      .'<div class="city"><span class="data-field">City:'.$row["City"].'</span></div>'
      .'<div class="country"><span class="data-field">Country:'.$row["Country"].'</span></div>'
      .'<div class="price"><span class="data-field">Price/day:'.$row["CostPerDay"].'</span></div>'
      .'<div class="date"><span class="data-field">Stars:'.$row["stars"].'</span></div>'
      .'<div class="days"><span class="data-field">Number of rooms:'.$row["roomNo"].'</span></div>'
      .'<div class="rate"><span class="data-field">Rating:'.$row["rate"].'</span></div>'
      .'<br>'
      .'<button class="myHotel" id="'.$row["name"].'" onclick="hotelCard(this.id)" >BOOK NOW</button>'
      .'</div>'
      .'</div>'
      .'</div>'

        ;
          }
          
      }
      echo '</div>'
          . '<a
          class="carousel-control-prev"
          href="#myHotels"
          role="button"
          data-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a
          class="carousel-control-next"
          href="#myHotels"
          role="button"
          data-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

        </div>';
      }




$result2 = mysqli_query($conn,"SELECT * FROM `".$patra->table2."`");
if ($result2==false) {
  echo "error query";
}else
{
  // echo "susecccccc";
}
//echo "<h1>the rows=".mysqli_num_rows($result2)."</h1>";
echo "<br><h2 id='flight'>Our Flights</h2><br>";
if (mysqli_num_rows($result2) > 0) {
    // output data of each row
     // echo "<h1>the rows=".mysqli_num_rows($result2)."</h1>";
     // echo "<h3>".$_SESSION['place']."</h3>";
      echo "<div class='carousel slide' data-ride='carousel' id='myFlights'>";
      echo "<div class='carousel-inner row w-100 mx-auto' >";
    while($row2 = mysqli_fetch_assoc($result2)) {
      if($_SESSION['place']==$row2['ContTo']){
        //echo "<h3>".$_SESSION['place']."</h3>";

    echo "<div class='carousel-item col-md-4 active'>"
      ."<div class='card' >"
      ."<img class='card-img-top img-fluid' src=".$row2["image"]." alt='Card image cap' />" 
      . '<div class="card-body">'
      .'<h4 class="card-title">'.$row2["AirlineName"].'</h4>'
      .'<div class="city"><span class="data-field">From : '.$row2["ContFrom"].'</span></div>'
      .'<div class="country"><span class="data-field">To: '.$row2["ContTo"].'</span></div>'
      .'<div class="price"><span class="data-field">Date: '.$row2["Date"].'</span></div>'
      .'<div class="date"><span class="data-field">Time:'.$row2["time"].'</span></div>'
      .'<div class="days"><span class="data-field">Cost:'.$row2["cost"].'</span></div>'
      .'<div class="rate"><span class="data-field">Rating:'.$row2["rate"].'</span></div>'
      .'<br>'
      .'<button class="myFlight" id="'.$row2["AirlineName"].'" onclick="flightCard(this.id)" >BOOK NOW</button>'
      .'</div>'
      .'</div>'
      .'</div>'

        ;
          }
          
      }
      echo '</div>'
          . '<a
          class="carousel-control-prev"
          href="#myFlights"
          role="button"
          data-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a
          class="carousel-control-next"
          href="#myFlights"
          role="button"
          data-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

        </div>';
      }

echo "<br><h2 id='car'>Our Cars for rent</h2><br>";
$result3 = mysqli_query($conn,"SELECT * FROM `".$patra->table3."`");
if ($result3==false) {
  echo "error query";
}else
{
  // echo "susecccccc";
}
//echo "<h1>the rows=".mysqli_num_rows($result3)."</h1>";

if (mysqli_num_rows($result3) > 0) {
    // output data of each row
     // echo "<h1>the rows=".mysqli_num_rows($result3)."</h1>";
     // echo "<h3>".$_SESSION['place']."</h3>";
      $row3 = mysqli_fetch_assoc($result3);
      echo "<div class='carousel slide' data-ride='carousel' id='myCars'>";
      echo "<div class='carousel-inner row w-100 mx-auto ' >";
      echo "<div class='carousel-item col-md-4 active'>"
      ."<div class='card' >"
      ."<img class='card-img-top img-fluid' src=".$row3["image"]." alt='Card image cap' />" 
      . '<div class="card-body">'
      .'<h4 class="card-title">'.$row3["ModelName"].'</h4>'
      .'<div class="city"><span class="data-field">Year : '.$row3["ModelYear"].'</span></div>'
      .'<div class="country"><span class="data-field">Price: '.$row3["PricePerDay"].'</span></div>'
      .'<div class="price"><span class="data-field">Capacity: '.$row3["Capacity"].'</span></div>'
      
      .'<br>'
      .'<button class="myTour" id="'.$row3["CarID"].'" onclick="carCard(this.id)" >BOOK NOW</button>'
      .'</div>'
      .'</div>'
      .'</div>';
    while($row3 = mysqli_fetch_assoc($result3)) {
      //if($_SESSION['place']==$row3['Country']){
        //echo "<h3>".$_SESSION['place']."</h3>";

    echo "<div class='carousel-item col-md-4 '>"
      ."<div class='card' >"
      ."<img class='card-img-top img-fluid' src=".$row3["image"]." alt='Card image cap' />" 
      . '<div class="card-body">'
      .'<h4 class="card-title">'.$row3["ModelName"].'</h4>'
      .'<div class="city"><span class="data-field">Year : '.$row3["ModelYear"].'</span></div>'
      .'<div class="country"><span class="data-field">Price: '.$row3["PricePerDay"].'</span></div>'
      .'<div class="price"><span class="data-field">Capacity: '.$row3["Capacity"].'</span></div>'
      
      .'<br>'
      .'<button class="myCar" id="'.$row3["CarID"].'" onclick="carCard(this.id)">BOOK NOW</button>'
      .'</div>'
      .'</div>'
      .'</div>'

        ;
          //}
          
      }
      echo '</div>'
          . '<a
          class="carousel-control-prev"
          href="#myCars"
          role="button"
          data-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a
          class="carousel-control-next"
          href="#myCars"
          role="button"
          data-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

        </div>'
        .'<br>'
        .'<br>'
        .'<div style="backgroundColor=rgb(163,255,247)"><button onclick="confirm()" > Confirm my Booking</button></div>';
      }
} else {
    echo "<h3>Please, <a href='login-register.php'>Sign in</a> first";
}





?>