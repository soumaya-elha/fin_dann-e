<?php
$db = new PDO("mysql:host=localhost;dbname=dari","root","");

$do = isset($_GET['do']) ? $_GET['do'] : 'add';

    if ($do == 'add') {


?>

<?php } elseif ($do == 'insert') {

        

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            echo '<h1 class="text-center">ADD Les Membres</h1>';
            echo '<div class="blank"></div>';

            $username   = $_POST['name'];
            $password   = $_POST['password'];
            $email      = $_POST['email'];
           

            
                $stmt = $db->prepare("INSERT INTO `users` ( username, password, email) VALUES (?, ?, ?)");
                $stmt->execute(array($username, $password, $email));
                $nombreModif = $stmt->rowCount();

                echo '<div class="alert alert-success" role="alert">L\'inscription est faite avec succes'. '</div>';
                echo '<div class="container text-center">';
                echo '<a class="btn btn-primary text-center" href="login.php">RETOUR</a>';
                echo '</div>';
            
        } 
    }
    ?>


    <?php include ('includes/nav.php'); ?>
    <div class="main">
            <h2 class="form-title">Sign up</h2>
        
            <div class="container">

                <div class="signin-content">

                    <div class="signin-image">
                        <figure><img src="img/inscription.jpg" alt="sing up image"></figure>
                        
                    </div>

                    <div class="signin-form">
                        
                        <form class="login" action="?do=insert " method="POST">
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="your_name" placeholder="Your Name" />
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="text" name="email" id="your_pass" placeholder="email" />
                            </div>
                             <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="your_pass" placeholder="Password" />
                            </div>
                             <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="confirmation" id="your_pass" placeholder="Répete Password" />
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit"onclick="valide()" / value="sing up" />
                               
                            </div>
                        </form>
                    
                    </div>
                </div>
            </div>
        

    </div>

    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>








    

         