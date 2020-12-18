
<?php


$tavarat_json = file_get_contents('JSON/tuotteet.json');

$tavarat_array = json_decode($tavarat_json); // To Array


// If all inputs are empty, echo the complete JSON list
if( empty($_POST['hinta']) && empty($_POST['kategoria']) && empty($_POST['tuoteid']) && empty($_POST['nimi']) && empty($_POST['paino']) ) {
    header("Content-Type: application/json; charset=UTF-8"); // Browser understand this is JSON and parse it nicely

    echo $tavarat_json;
}
// By price
if( !empty($_POST['hinta']) && empty($_POST['kategoria']) && empty($_POST['tuoteid']) && empty($_POST['nimi']) && empty($_POST['paino']) ) {
    header("Content-Type: application/json; charset=UTF-8"); // Browser understand this is JSON and parse it nicely

    $uudet_tuotteet = array();
  
      
    foreach ($tavarat_array as $tavara) {
      if ($tavara->hinta < ($_POST['hinta']) ) { // Where price is lower than gave in input
        array_push($uudet_tuotteet, $tavara); // Push to empty array
      }
    }
    if(count($uudet_tuotteet) == 0) { // If amount of product is zero, echo "No products"
      echo json_encode("No products under that price"); // To JSON
    }
    else {
      $uudet_tuotteet_json = json_encode($uudet_tuotteet); // To JSON
      echo $uudet_tuotteet_json;
    }
}
// By price and category
if( !empty($_POST['hinta']) && !empty($_POST['kategoria']) && empty($_POST['tuoteid']) && empty($_POST['nimi']) && empty($_POST['paino'])  ) {
    header("Content-Type: application/json; charset=UTF-8"); // Browser understand this is JSON and parse it nicely

    $uudet_tuotteet = array();
  
      
    foreach ($tavarat_array as $tavara) {
        if ($tavara->hinta < ($_POST['hinta']) and $tavara->kategoria == ($_POST['kategoria']) ) { // Where price is lower than gave in input
        array_push($uudet_tuotteet, $tavara); // Push to empty array
        }
    }
    if(count($uudet_tuotteet) == 0) { // If amount of product is zero, echo "No products"
        echo json_encode("No products in that category with that price limit"); // To JSON
    }
    else {
        $uudet_tuotteet_json = json_encode($uudet_tuotteet); // To JSON
        echo $uudet_tuotteet_json;
    }
}
// By category
if( !empty($_POST['kategoria']) && empty($_POST['hinta']) && empty($_POST['tuoteid']) && empty($_POST['nimi']) && empty($_POST['paino'])  ) {
    header("Content-Type: application/json; charset=UTF-8"); // Browser understand this is JSON and parse it nicely

    $uudet_tuotteet = array();
  
      
    foreach ($tavarat_array as $tavara) {
        if ($tavara->kategoria == ($_POST['kategoria']) ) { // When category is same than input given
        array_push($uudet_tuotteet, $tavara); // Push to empty array
        }
    }
    if(count($uudet_tuotteet) == 0) { // If amount of product is zero, echo "No products"
        echo json_encode("No products in category like that"); // To JSON
    }
    else {
        $uudet_tuotteet_json = json_encode($uudet_tuotteet); // To JSON
        echo $uudet_tuotteet_json;
    }
}
// By product id (tuoteid)
if( empty($_POST['kategoria']) && empty($_POST['hinta']) && !empty($_POST['tuoteid']) && empty($_POST['nimi']) && empty($_POST['paino'])  ) {
    header("Content-Type: application/json; charset=UTF-8"); // Browser understand this is JSON and parse it nicely

    $uudet_tuotteet = array();
  
      
    foreach ($tavarat_array as $tavara) {
        if ($tavara->tuoteid == ($_POST['tuoteid']) ) { // When category is same than input given
        array_push($uudet_tuotteet, $tavara); // Push to empty array
        }
    }
    //if(count($tavarat_array) < ($_POST['tuoteid']) ) { // Jos haet isompaa id lukua, mitä tuotteita ylipäätään on. Toimii juoksevassa id järjestyksessä
        //echo json_encode("EI TUOTTEITA NOIN PALJON"); // To JSON
    //}
    if(count($uudet_tuotteet) == 0) { // If amount of product is zero, echo "No products"
        echo json_encode("No product with that ID"); // To JSON
    }
    else {
        $uudet_tuotteet_json = json_encode($uudet_tuotteet); // To JSON
        echo $uudet_tuotteet_json;
    }
}
// By name
if( empty($_POST['kategoria']) && empty($_POST['hinta']) && empty($_POST['tuoteid']) && !empty($_POST['nimi']) && empty($_POST['paino'])  ) {
    header("Content-Type: application/json; charset=UTF-8"); // Browser understand this is JSON and parse it nicely

    $uudet_tuotteet = array();
  
      
    foreach ($tavarat_array as $tavara) {
        if ($tavara->nimi == ($_POST['nimi']) ) { // When category is same than input given
        array_push($uudet_tuotteet, $tavara); // Push to empty array
        }
    }
    if(count($uudet_tuotteet) == 0) { // If amount of product is zero, echo "No products"
        echo json_encode("No products with that name."); // To JSON
    }
    else {
        $uudet_tuotteet_json = json_encode($uudet_tuotteet); // To JSON
        echo $uudet_tuotteet_json;
    }
}
// By weight
if( empty($_POST['kategoria']) && empty($_POST['hinta']) && empty($_POST['tuoteid']) && empty($_POST['nimi']) && !empty($_POST['paino'])  ) {
    header("Content-Type: application/json; charset=UTF-8"); // Browser understand this is JSON and parse it nicely

    $uudet_tuotteet = array();
  
      
    foreach ($tavarat_array as $tavara) {
        if ($tavara->paino < ($_POST['paino']) ) { // When category is same than input given
        array_push($uudet_tuotteet, $tavara); // Push to empty array
        }
    }
    if(count($uudet_tuotteet) == 0) { // If amount of product is zero, echo "No products"
        echo json_encode("No products under that weight."); // To JSON
    }
    else {
        $uudet_tuotteet_json = json_encode($uudet_tuotteet); // To JSON
        echo $uudet_tuotteet_json;
    }
}
// By ID and category
if( empty($_POST['hinta']) && !empty($_POST['kategoria']) && !empty($_POST['tuoteid']) && empty($_POST['nimi']) && empty($_POST['paino'])  ) {
    header("Content-Type: application/json; charset=UTF-8"); // Browser understand this is JSON and parse it nicely

    $uudet_tuotteet = array();
  
       
    foreach ($tavarat_array as $tavara) {
        if ($tavara->tuoteid == ($_POST['tuoteid']) and $tavara->kategoria == ($_POST['kategoria']) ) { // Where price is lower than gave in input
        array_push($uudet_tuotteet, $tavara); // Push to empty array
        }
    }
    if(count($uudet_tuotteet) == 0) { // If amount of product is zero, echo "No products"
        echo json_encode("No products in this category with that product id"); // To JSON
    }
    else {
        $uudet_tuotteet_json = json_encode($uudet_tuotteet); // To JSON
        echo $uudet_tuotteet_json;
    }
}
// By weight and category
if( empty($_POST['hinta']) && !empty($_POST['kategoria']) && empty($_POST['tuoteid']) && empty($_POST['nimi']) && !empty($_POST['paino'])  ) {
    header("Content-Type: application/json; charset=UTF-8"); // Browser understand this is JSON and parse it nicely

    $uudet_tuotteet = array();
  
      
    
    foreach ($tavarat_array as $tavara) {
        if ($tavara->paino < ($_POST['paino']) and $tavara->kategoria == ($_POST['kategoria']) ) { // Where price is lower than gave in input
        array_push($uudet_tuotteet, $tavara); // Push to empty array
        }
    }
    if(count($uudet_tuotteet) == 0) { // If amount of product is zero, echo "No products"
        echo json_encode("No products in this category under given weight"); // To JSON
    }
    else {
        $uudet_tuotteet_json = json_encode($uudet_tuotteet); // To JSON
        echo $uudet_tuotteet_json;
    }
}
// By weight, price and category
if( !empty($_POST['hinta']) && !empty($_POST['kategoria']) && empty($_POST['tuoteid']) && empty($_POST['nimi']) && !empty($_POST['paino'])  ) {
    header("Content-Type: application/json; charset=UTF-8"); // Browser understand this is JSON and parse it nicely

    $uudet_tuotteet = array();
  
      
    foreach ($tavarat_array as $tavara) {
        if ($tavara->paino < ($_POST['paino']) and $tavara->kategoria == ($_POST['kategoria']) and $tavara->hinta < ($_POST['hinta']) ) { // Where price is lower than gave in input
        array_push($uudet_tuotteet, $tavara); // Push to empty array
        }
    }
    if(count($uudet_tuotteet) == 0) { // If amount of product is zero, echo "No products"
        echo json_encode("No products in this category under given weight and price"); // To JSON
    }
    else {
        $uudet_tuotteet_json = json_encode($uudet_tuotteet); // To JSON
        echo $uudet_tuotteet_json;
    }
}


?>
