<?php
$db = new PDO("mysql:host=localhost;dbname=dari","root",""); 

session_start(); // ouvrir une session
if (isset($_SESSION['admin'])) { // si il y'a une session ouvert
    header('location: admin.php'); // redirect vers la page admin
    exit();
} elseif (isset($_SESSION['user'])) {
    header('location: index.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') { // si la methode de la formulaire est POST

    $username = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
   

    $stmt = $db->prepare("SELECT userID, username, email, password FROM users WHERE username = ?  AND email= ? AND password = ? AND groupeID = 1");
    $stmt->execute(array($username, $email, $password));
    $row = $stmt->fetch();
    $count = $stmt->rowCount();

    if ($count > 0) {
        $_SESSION['admin'] = $username; // SESSION USERNAME
        $_SESSION['id'] = $row['userID']; // SESSION ID
        header('location: admin.php'); // REDIRECT VERS PAGE admin
        exit();
    } 

    $stmt2 = $db->prepare("SELECT userID, username, email, password FROM users WHERE username = ? AND email =?  AND password = ? AND groupeID = 0");
    $stmt2->execute(array($username, $email, $password));
    $row2 = $stmt2->fetch();
    $count2 = $stmt2->rowCount();

    if ($count2 > 0) {
        $_SESSION['user'] = $username; // SESSION USERNAME
        $_SESSION['id'] = $row2['userID']; // SESSION ID
        header('location: index.php'); // REDIRECT VERS PAGE index
        exit();
    }
}

?>


<?php include ('includes/nav.php'); ?>

    <div class="main">
            <h2 class="form-title">Login</h2>
        
            <div class="container">

                <div class="signin-content">

                    <div class="signin-image">
                        <figure><img src="img/log.jpg" alt="sing up image"></figure>
                        
                    </div>

                    <div class="signin-form">
                        
                        <div class= "header">
                            <form class="login" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                                       
                                <input class="form-control" type="text" name="name" placeholder="Username" autocomplete="off">
                                <input class="form-control" type="text" name="email" placeholder="Email" autocomplete="off">
                                <input class="form-control" type="password" name="password" placeholder="Password" autocomplete="new-password">
                                <input type="submit"  class="btn" value="login">       
                            </form>
                                </div>        
                    </div>
                </div>
            </div>
        

    </div>


     
</body>

</html>