<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP + FORME - 2. Zadatak</title>
</head>
<body>
    
    <form action="prikaz.php" method="post">

            <p> 
                <label for="">Ime i prezime:</label>
                <input type="text" name="imePrezime" id="">
            </p>

            <p>
                <label for="">E-mail:</label>
                <input type="email" name="email" id="">
            </p>

            <p>
                <label for="">Biografija:</label>
                <textarea name="bio" name="bio" id="" cols="30" rows="10"></textarea>
            </p>

            <p>
                <label for="">Pol:</label>
                <input type="radio" name="pol" id="" value="z">Zenski
                <input type="radio" name="pol" id="" value="m">Muski
                <input type="radio" name="pol" id="" value="d"checked>Drugo
            </p>

            <p>
                <input type="submit" name="submit" value="Posalji">
                <input type="reset" name="reset" value="Resetuj">
            </p>
    </form>

</body>
</html>