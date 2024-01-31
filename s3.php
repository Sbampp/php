<head>
    <title>Titolo</title>

</head>
<body>
    <form>
    Nome: <input name="Nome"><br>
    Cognome: <input name="Cognome" type="text" value ="placeHolder"><br>  <!-- type definisce il tipo values il valore di base del campo!-->
    password: <input name="password" type = "password" value =""><br>  <!-- type password censura di base il testo!-->
    Genere: <input type="checkbox"><br> <!-- CheckBox non permette la scelta singola ma si possono checkare più possibilità!-->
    Genere2: <input name = "genere" type ="radio" id="m">M<input name="genere" type="radio" id="f">F<br>
    <input name ="pulsante" type="button" value="pulsante"> 
    <input type="hidden">
    <input type="datetime-local"><br>
    <input type="reset" value="sei un figo"><br>
    <input type="image" src="jok3r.jpg" alt="un figo" width="300" height="300"><br>
    <label for="quantity">Quantity:</label>
    <input type="number" id="quantity" name="quantity" min="0" max="100" step="10" value="30"><br>
    <label for="vol">Volume (between 0 and 50):</label>
    <input type="range" id="vol" name="vol" min="0" max="50"><br>
    <label for="appt">Select a time:</label>
    <input type="time" id="appt" name="appt"> <br>
    <label for="homepage">Add your homepage:</label>
    <input type="url" id="homepage" name="homepage">

    <?php
    if(isset($_POST["pulsante"])){
        $name = $_POST["Nome"];
        $cognome= $_POST["Cognome"];
        $password= $_POST["password"];
        echo $name . $cognome . $password;
    }else{print("b");}
    ?>
    
    </form>

</body>
