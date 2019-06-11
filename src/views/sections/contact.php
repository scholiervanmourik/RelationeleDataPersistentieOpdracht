<?php
require_once('../template/head.php');
?>
    <section>
        <article>
            <h3>Contact</h3>

            <?php
            //define variables and set to empty values
            $name = $email = $topic = $comment = "";

            //check if form has been submitted
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = test_input($_POST["name"]);
                $email = test_input($_POST["email"]);
                $topic = test_input($_POST["topic"]);
                $comment = test_input($_POST["comment"]);
            }
            //Submitted True. do validation: strip unnecessary characters like spaces, tabs, newlines, backslahes
            function test_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
            //Submitted False: skip validation and display blanc form
            ?>



            <!--HTML form with inputs using post superglobal, enduser can send a request for information to xxxxxxx-->

            <!--kunnen we de values automatisch laten vullen met naam vd gebruiker als die bekend is in systeem, wel te overschrijven-->

            <h2>Vraag informatie op bij Support My Day</h2>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <!-- converts special characters to HTML entities, prevents code injection by means of Cross Site Scripting (XSS) -->
            

                Naam: <input type="text" name="Name" value="<?php echo $firstName ?>"> </br>
                Lastname: <input type="text" name="Name" value="<?php echo $lastName ?>"> </br>
                Email: <input type="text" name="Email" value="<?php echo $email ?>"> </br>

                Onderwerp:
                <input type="radio" name="Topic" value="Account" > Mijn gegevens
                <input type="radio" name="Topic" value="App"> De applicatie
                <input type="radio" name="Topic" value="Festivals"> Festivals 
            </br>
                Beschrijving: <textarea name="Comment" rows="10" cols="40"></textarea> </br>
                <input type="submit">
            </form>

            <?php
            echo "<h2>Your Input:</h2>";
            echo $name . "</br>";
            ?>

        </article>
    </section>
<?php require_once('../template/bottom.php') ?>