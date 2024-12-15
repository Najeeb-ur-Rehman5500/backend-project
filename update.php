<?php
include 'conn.php';
// Check if ID is provided
if (!isset($_GET['id']) || empty($_GET['id'])) {
    echo "ID not provided.";
    exit();
}
$id = $_GET['id']; // Get the ID
// Query to fetch data
$update = "SELECT * FROM mytable WHERE id = $id";
$update_result = $conn->query($update);
// Check if the query executed successfully
if (!$update_result) {
    echo "Query Error: " . $conn->error;
    exit();
}
// Check if the record exists
if ($update_result->num_rows > 0) {
    $roww = $update_result->fetch_assoc();
} else {
    echo "Record not found";
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Update Page</title>
</head>
<body>
    <form action="update_process.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $roww['id']; ?>">
        Enter your name: 
        <input type="text" name="name" placeholder="Enter your name" value="<?php echo $roww['name']; ?>">
        Enter your email: 
        <input type="email" name="email" placeholder="Enter your email" value="<?php echo $roww['email']; ?>">
        <input type="submit" value="Update Values">
    </form>    
</body>
</html>