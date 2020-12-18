
<?php

$id = (int)$_POST['remove_tuoteid']; // This is input value user gave in remove.php

$tuotteet_json = file_get_contents('JSON/tuotteet.json'); // Pick up JSON file

$tuotteet_array = json_decode($tuotteet_json, true); // Decode JSON file to Array for modifying

// Searching trough array and finding element, where is same id user gave. Then removing that product.
$array_index = array();
foreach ($tuotteet_array as $key => $value) {
    if ($value['tuoteid'] == $id) {
        $array_index[] = $key;

        // Delete data
foreach ($array_index as $i) {
    unset($tuotteet_array[$i]);
}

// Eebase array
$tuotteet_array = array_values($tuotteet_array);

// Encode array back to json
file_put_contents('JSON/tuotteet.json', json_encode($tuotteet_array));

// Give alert for the user when product is deleted, or there is not product id like given
echo    "<script>
                alert('Tuote poistettu!');
                window.location.href='remove.php';
            </script>";
    }
    if ($value['tuoteid'] !== $id) {
        echo    "<script>
                alert('Ei löydy tuotetta hakemallasi tuotenumerolla!');
                window.location.href='remove.php';
            </script>";
    }
}


?>


