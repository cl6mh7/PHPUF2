<!DOCTYPE html>
<html lang="ca">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inici de sessió</title>
        <link rel="shortcut icon" href="/favicon.ico" />
    </head>
    <body>
        <div class="container">
            <h1>Inici de sessió</h1>
            <label for="username">Nom d'usuari</label>
            <br>
            <input type="text" id="username" placeholder="Ex.: Claudia">

            <br>
            
            <label for="passworduser">Contrasenya</label>
            <br>
            <input type="text" id="passworduser" placeholder="Ex.: P@ssw0rd">

            <br>
            <input type="button" value="Següent">
        </div>
        
        <?php
            try {
                $hostname = "localhost";
                $dbname = "world";
                $username = "super";
                $pw = "Claudia_131014M";
                $pdo = new PDO ("mysql:host=$hostname;dbname=$dbname","$username","$pw");
            } catch (PDOException $e) {
                echo "Failed to get DB handle: " . $e->getMessage() . "\n";
                exit;
            }

            /*$consulta = "SELECT";

            $resultat = mysqli_query($conn, $consulta);

            if (!$resultat) {
                    
            }*/
        ?>
    </body>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat+Alternates&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Lora:wght@500&display=swap');
        
        body {
            margin: 0;
            padding: 0;
            background-image: url(https://images.squarespace-cdn.com/content/v1/5941161b2e69cf3442450095/1595084128562-KIZNOLYIK57NUCM58UG5/endless-loop1.gif);
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            font-family: 'Lora', serif;
            text-align: center;
        }

        .container {
            width: 50%;
            border: 1px solid transparent;
            border-radius: 10px;
            background-color: white;
            margin: 100px auto;
        }

        h1 {
            margin-top: 40px;
            font-family: 'Montserrat Alternates', sans-serif;
            font-weight: 900;
        }

        input{
            margin-bottom: 40px;
        }


    </style>
</html>