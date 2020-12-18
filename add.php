
<!DOCTYPE HTML>
<html> 
<head>
<link rel="stylesheet" href="CSS/style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

<div class="d-flex justify-content-center" style="margin-bottom: 30px;">
    <div>
        <a href="index.php"><h1 style="text-align:center; margin-top: 30px; color: #00cbec;">STOCK</h1><br></a>
        <p style="text-align:center; color: white;">Version 1.0.</p>
    </div>
</div>

<div class="d-flex justify-content-center">
    <div id="formi" style="width: 500px;" >
        <form id="add-form" action="interface_add.php" method="POST" >

        <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="add_nimi" v-model="name" placeholder="PRODUCT NAME">
        <input style="margin-top: 10px;" type="number" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="add_tuoteid" v-model="name" placeholder="PRODUCT ID">
        <input style="margin-top: 10px;" type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="add_image_url" v-model="name" placeholder="PRODUCT IMAGE URL">
        <input style="margin-top: 10px;" type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="add_kategoria" v-model="name" placeholder="CATEGORY">
        <input style="margin-top: 10px;" type="number" step="0.01" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="add_hinta" v-model="name" placeholder="PRICE (€)">
        <input style="margin-top: 10px;" type="number" step="0.001" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="add_paino" v-model="name" placeholder="WEIGHT (KG)">


        </form>
        <button id="add_form_button" onclick="myFunction()" style="margin-top: 20px;" type="submit" value="ADD" class="btn btn-primary btn-lg">ADD</button>
        <div class="add_form_button_hided_divi"><button id="add_form_button_hided" form="add-form" style="margin-top: 20px;" type="submit" value="ADD" class="btn btn-primary btn-lg">ADD_hided</button></div>
    </div>
</div>


<script>

function myFunction() {
    document.getElementById("add_form_button_hided").click();
}

</script>



</body>
</html>
