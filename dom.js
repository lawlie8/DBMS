
function print_flights_asia() {
  var flights_asia_data = `
    <?php
      $us_result = $conn->query('select * from asia');
      echo '<li><table><tr><td>flight id</td><td>Flight Name</td><td>From</td><td>To</td><td>Departure</td><td>Arrival</td><td>Duration</td><td>Seats</td><tr></table></li> ';
  while($us_array = $us_result->fetch_assoc()){

  echo '<li><table><td>'.$us_array['flight_id'].'</td><td>'.$us_array['flight_name']. '</td><td>'.$us_array['from_airport'] .'</td><td>'.$us_array['to_airport'].'</td><td>'.$us_array['departure'].'</td><td>'.$us_array['arrival'].'</td><td>'.$us_array['duration'] .'hrs</td> <td>'.$us_array['seats'] .'</td><td><input type="checkbox"></td></tr></table></li>';
  }



     ?>


    `
    document.getElementById('fl').innerHTML = flights_asia_data;
    asia()

}



function print_flights_africa(){
var flights_africa_data = `
  <?php
    $us_result = $conn->query('select * from africa');
    echo '<li><table><tr><td>flight id</td><td>Flight Name</td><td>From</td><td>To</td><td>Departure</td><td>Arrival</td><td>Duration</td><td>Seats</td><tr></table></li> ';
while($us_array = $us_result->fetch_assoc()){

echo '<li><table><td>'.$us_array['flight_id'].'</td><td>'.$us_array['flight_name']. '</td><td>'.$us_array['from_airport'] .'</td><td>'.$us_array['to_airport'].'</td><td>'.$us_array['departure'].'</td><td>'.$us_array['arrival'].'</td><td>'.$us_array['duration'] .'hrs</td> <td>'.$us_array['seats'] .'</td><td><input type="checkbox"></td></tr></table></li>';
}



   ?>


  `
  document.getElementById('fl').innerHTML = flights_africa_data;
  africa()
}


function print_flights_middle_east(){
var flights_middle_east_data = `
  <?php
    $us_result = $conn->query('select * from middle_east');
    echo '<li><table><tr><td>flight id</td><td>Flight Name</td><td>From</td><td>To</td><td>Departure</td><td>Arrival</td><td>Duration</td><td>Seats</td><tr></table></li> ';
while($us_array = $us_result->fetch_assoc()){

echo '<li><table><td>'.$us_array['flight_id'].'</td><td>'.$us_array['flight_name']. '</td><td>'.$us_array['from_airport'] .'</td><td>'.$us_array['to_airport'].'</td><td>'.$us_array['departure'].'</td><td>'.$us_array['arrival'].'</td><td>'.$us_array['duration'] .'hrs</td> <td>'.$us_array['seats'] .'</td><td><input type="checkbox"></td></tr></table></li>';
}



   ?>


  `
  document.getElementById('fl').innerHTML = flights_middle_east_data;
middle()
}

function print_flights_us(){
var flights_us_data = `
  <?php
    $us_result = $conn->query('select * from us');
    echo '<li><table><tr><td>flight id</td><td>Flight Name</td><td>From</td><td>To</td><td>Departure</td><td>Arrival</td><td>Duration</td><td>Seats</td><tr></table></li> ';
while($us_array = $us_result->fetch_assoc()){

echo '<li><table><td>'.$us_array['flight_id'].'</td><td>'.$us_array['flight_name']. '</td><td>'.$us_array['from_airport'] .'</td><td>'.$us_array['to_airport'].'</td><td>'.$us_array['departure'].'</td><td>'.$us_array['arrival'].'</td><td>'.$us_array['duration'] .'hrs</td> <td>'.$us_array['seats'] .'</td><td><input type="checkbox"></td></tr></table></li>';
}



   ?>


  `
  document.getElementById('fl').innerHTML = flights_us_data;
}


function print_flights_australia(){
var flights_australia_data = `
  <?php
    $us_result = $conn->query('select * from australia');
    echo '<li><table><tr><td>flight id</td><td>Flight Name</td><td>From</td><td>To</td><td>Departure</td><td>Arrival</td><td>Duration</td><td>Seats</td><tr></table></li> ';
while($us_array = $us_result->fetch_assoc()){

echo '<li><table><td>'.$us_array['flight_id'].'</td><td>'.$us_array['flight_name']. '</td><td>'.$us_array['from_airport'] .'</td><td>'.$us_array['to_airport'].'</td><td>'.$us_array['departure'].'</td><td>'.$us_array['arrival'].'</td><td>'.$us_array['duration'] .'hrs</td> <td>'.$us_array['seats'] .'</td><td><input type="checkbox"></td></tr></table></li>';
}



   ?>


  `
  document.getElementById('fl').innerHTML = flights_australia_data;
}
function print_flights_europe() {
  var flights_europe_data = `
    <?php
      $us_result = $conn->query('select * from europe');
      echo '<li><table><tr><td>flight id</td><td>Flight Name</td><td>From</td><td>To</td><td>Departure</td><td>Arrival</td><td>Duration</td><td>Seats</td><tr></table></li> ';
  while($us_array = $us_result->fetch_assoc()){

  echo '<li><table><td>'.$us_array['flight_id'].'</td><td>'.$us_array['flight_name']. '</td><td>'.$us_array['from_airport'] .'</td><td>'.$us_array['to_airport'].'</td><td>'.$us_array['departure'].'</td><td>'.$us_array['arrival'].'</td><td>'.$us_array['duration'] .'hrs</td> <td>'.$us_array['seats'] .'</td><td><input type="checkbox"></td></tr></table></li>';
  }



     ?>


    `
    document.getElementById('fl').innerHTML = flights_europe_data;
europe()
}
