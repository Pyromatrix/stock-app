
<!DOCTYPE HTML>
<html> 
<head>
<link rel="stylesheet" href="CSS/style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

<div class="d-flex justify-content-center" style="margin-bottom: 30px;">
    <div>
        <a href="index.php"><h1 id="system_name" style="text-align:center; margin-top: 30px; color: #00cbec;">STOCK</h1><br></a>
        <p style="text-align:center; color: white;">Version 1.0.</p>
    </div>
</div>

<div class="d-flex justify-content-center">
    <div id="formi" style="width: 500px;" >
        <form action="interface_find.php" method="POST">

        <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="nimi" v-model="name" placeholder="PRODUCT NAME">

        <input style="margin-top: 10px;" type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="kategoria" v-model="name" placeholder="CATEGORY"> 
       
        <input style="margin-top: 10px;" type="number" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="tuoteid" v-model="name" placeholder="PRODUCT ID (1-15)">
        <input style="margin-top: 10px;" type="number" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="hinta" v-model="name" placeholder="PRICE BELOW (€)">
        <input style="margin-top: 10px;" type="number" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="paino" v-model="name" placeholder="WEIGHT BELOW (kg)">


        <button style="margin-top: 20px;" type="submit" value="FIND" class="btn btn-primary btn-lg">FIND</button>
        </form>
    </div>
</div>

</body>
</html>
