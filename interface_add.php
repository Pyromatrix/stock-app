
<?php

// Messages
$same_id = "This ID number is already taken";

// Form inputs in add.php page
$name = $_POST['add_nimi'];
$product_id = $_POST['add_tuoteid'];
$url = $_POST['add_image_url'];
$category = $_POST['add_kategoria'];
$price = $_POST['add_hinta'];
$weight = $_POST['add_paino'];

// Changing input strings to numbers
$price = (double)$price; 
$product_id = (int)$product_id;
$weight = (double)$weight;

// Pick up JSON data
$tavarat_json = file_get_contents('JSON/tuotteet.json'); 

// Decoding JSON to Array for modifying
$tavarat_array = json_decode($tavarat_json, true);

// Make array column of tuoteid and nimi
$product_id_list = array_column($tavarat_array  ,'tuoteid');
$name_list = array_column($tavarat_array  ,'nimi');

// Searching tuoteid from array, where those are listed
if(array_search($product_id, $product_id_list) !== false) 
{
    
    echo    "<script>
                alert('Varastossa on tuote samalla tuotenumerolla.');
                window.location.href='add.php';
            </script>";

} elseif(array_search($name, $name_list) !== false) 
{
    echo    "<script>
                alert('Varastossa on tuote samalla nimellä.');
                window.location.href='add.php';
            </script>";

} else {
    // Make new element of given info for the JSON list
    array_push($tavarat_array, array('nimi' => $name, "tuoteid" => $product_id, "tuotekuva_url" => $url, "kategoria" => $category, "hinta" => $price, "paino" => $weight));
  
    // Encoding array back to JSON and push it back
    file_put_contents('JSON/tuotteet.json', json_encode($tavarat_array));
  
    echo    "<script>
                alert('Tuote lisätty!');
                window.location.href='add.php';
            </script>";

    
}



?>


