<?php
require_once('../template/head.php');
?>
    <section id="contact">
        <article>
            <h3>Contact</h3>

            <!--HTML form with inputs using POST superglobal, enduser can send a request for information to SMD email-->
            <?php
            // define variables and set to empty values
            $nameErr = $emailErr = $topicErr = $commentErr = "";
            $name = $email = $topic = $comment = "";

            if ($_SERVER["REQUEST_METHOD"] == "POST") {        //check if form is actually posted
                if (empty($_POST["name"])) {
                    $nameErr = "Naam is een verplicht veld";   //alert for user when name hasn't been entered
                } else {
                    $name = test_input($_POST["name"]);

                    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
                        $nameErr = "Gebruik alleen letters en spaties";    //check if name only contains letters and whitespace
                    }
                }

                if (empty($_POST["email"])) {
                    $emailErr = "E-mail is een verplicht veld";
                } else {
                    $email = test_input($_POST["email"]);

                    // check if e-mail address is well-formed
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        $emailErr = "Gebruik alleen een geldig email adres";
                    }
                }

                if (empty($_POST["topic"])) {
                    $topicErr = "Kies een onderwerp";
                } else {
                    $topic = test_input($_POST["topic"]);
                }

                if (empty($_POST["comment"])) {
                    $commentErr = "Vul hier je vraag in, dit is een verplicht veld";
                } else {
                    $comment = test_input($_POST["comment"]);
                }
            }

            //strip unnecessary characters and backslashes
            function test_input($data) {
                $data = trim($data);            //removes extra spaces, tabs, newlines
                $data = stripslashes($data);    //removes backslashes
                $data = htmlspecialchars($data);
                return $data;
            }
            ?>

            <h2>Vraag informatie op bij Support My Day</h2>
            <p><span class="error">* verplicht veld</span></p>

            <!-- htmlspecialchars converts special characters to HTML entities,
            prevents code injection by means of Cross Site Scripting (XSS) -->
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

                <!--echo $name in input value makes that value is restored when one of the other fields is rejected-->
                Naam: <input type="text" name="name" value="<?php echo $name;?>">

                <span class="error">* <?php echo $nameErr;?></span>
                <br><br>

                E-mail: <input type="text" name="email" value="<?php echo $email;?>">
                <span class="error">* <?php echo $emailErr;?></span>
                <br><br>

                Onderwerp:
                <input type="radio" name="topic"
                    <?php if (isset($gender) && $gender=="account")
                        echo "checked";?>
                       value="account">Mijn gegevens

                <input type="radio" name="topic"
                    <?php if (isset($topic) && $topic=="app")
                        echo "checked";?>
                       value="app">De applicatie

                <input type="radio" name="topic"
                    <?php if (isset($topic) && $topic=="festivals")
                        echo "checked";?>
                       value="festivals">Festivals

                <span class="error">* <?php echo $topicErr;?></span>
                <br><br>

                Vraag: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>  <!--size nog corrigeren-->
                <br><br>

                <input type="submit" name="submit" value="Verzend">
            </form>

            <!--verbeteren: onderstaand php segment weghalen voor live versie-->
            <?php
            echo "<h2>Your Input:</h2>";
            echo $name;
            echo "<br>";
            echo $email;
            echo "<br>";
            echo $topic;
            echo "<br>";
            echo $comment;
            ?>

            <!--send question to those very nice SMD people by mail-->
            <?php
            //creating the message
            $msg = "$name \n $email \n $topic \n $comment";

            //wordwrap if lines are over 50 characters long
            $msg = wordwrap($msg,50);

            //actual sending mail command
            mail("chpsnoij@avans.nl","Gebruikersvraag",$msg);
            ?>
        </article>
    </section>
<?php require_once('../template/bottom.php') ?>