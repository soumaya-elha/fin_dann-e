<?php 
session_start();
$db = mysqli_connect("localhost", "root", "", "dari");


  
if (isset($_POST['reserver'])){
  $ville = $_POST['ville'];
  $date_du = $_POST['date_Du'];
  $date_au = $_POST['date_Au'];
  $adulte = $_POST['adulte'];
  $enfant = $_POST['enfan'];
  $chambre = $_POST['chambre'];

  $query1 = mysqli_query($db, "INSERT INTO hotel values('', '$ville', '$date_du', '$date_au', '$adulte', '$enfant', '$chambre')");

  if($query1){
    $id_Hotel = mysqli_insert_id($db);
   } 
   header("Location: recherche.php?id=$last_id");
}
?>


<?php include ('includes/nav.php');?>

	<div>
		 <form action="index.php" method="post">
		   <div class="font">
		      <p>Ville</p>
		      <input type="text" class="search-field skills" name="ville" placeholder="Marrakech">
		    </div>
		    <div class="font">
		      <p>Date départ</p>
		      <input type="date" class="search-field skills" name="date_Du" placeholder="lundi 10 juin">
		    </div>
		    <div class="font">
		      <p>Date déstination</p>
		      <input type="date" class="search-field skills" name="date_Au" placeholder="lundi 20 juin">
		    </div>
		    <div class="font">
		      <p>adultes </p>
		      <input type="number" class="search-field skills" name="adulte" placeholder="2">
		    </div>
		    <div class="font">
		      <p>enfant  </p>
		      <input type="number" class="search-field skills" name="enfan" placeholder="0">
		    </div>
		    <div class="font">
		      <p>chambre</p>
		      <input type="number" class="search-field skills" name="chambre" placeholder="0">
		    </div>
		    <button class="search-btn" type="submit" name="reserver">Search</button>
        </form>
</div>
</body>
</html>