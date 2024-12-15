<?php 
include  'conn.php';
//HTML  form sa data get
$name = $_POST['name'];
$email = $_POST['email'];
// Insert query 
$sql = "INSERT INTO mytable (name, email) VALUES ('$name', '$email')";
//Check insertion
if ($conn->query($sql) === TRUE){
    echo "Data Inserted Successfully";
} else {
    echo "There is an Error !";
}

// Reading / fetching data from database
$read = "SELECT * FROM mytable";
$result = $conn->query($read);

echo"
<table border='1' style='width:50%; margin:auto; border-collapse:collapse; text-align:center;'>
  <tr> 
     <td>ID</td>
     <td>Name</td>
     <td>Email</td>
     <td> actions </td>
  </tr>

  ";

  //Check id there are rows and fetch data
  if ($result->num_rows > 0) {
     while ($row = $result->fetch_assoc()) {
          echo "
          <tr>
              <td>" . $row['id'] . "</td>
              <td>" . $row['name'] . "</td>
              <td>" . $row['email'] . "</td>
              <td><a href='update.php?id=" . $row['id'] . "'>Update</a></td>
              <td><a href= 'delete.php?id=". $row['id'] . "'>Delete<a></td>
          </tr>
";
     }
  } else {
      echo "
      

      ";
  }
  


?>