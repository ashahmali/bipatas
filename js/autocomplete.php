<?php
/*$pdo = new PDO("mysql:host=localhost;dbname=biptas;", 'root', 'root');
$q=$_GET['q'];
$my_data=mysql_real_escape_string($q);
$stmt = $pdo->prepare("SELECT title FROM job_title WHERE title LIKE %$my_data% ORDER BY title");
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
print_r($result);
 if($result){
   	echo $result['title']."\n";
  }else{
 	echo "nothing";
 }
*/

 $q=$_GET['q'];
 $my_data=trim($q);
 $mysqli=mysqli_connect("localhost", "edostate_bipatas", "bipatas123", "edostate_bipatas") or die("Database Error");
 $sql="SELECT title FROM job_title WHERE title LIKE '%$my_data%' ORDER BY title";
 $result = mysqli_query($mysqli, $sql);

 if($result)
 {
  while($row=mysqli_fetch_array($result))
  {
   echo $row['title']."\n";
  }
 }

?>