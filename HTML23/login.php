
    <?php
session_start();

 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

 

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

 


$user = $_POST['username'];
$pass = $_POST['password'];
$pass1 = "";
echo $user;
echo $pass;
 

$query="SELECT * FROM login WHERE username = '".$user."' AND pass = '".$pass."' ";
$result=mysqli_query($conn, $query);
while($row=mysqli_fetch_array($result)){
    $pass1 = $row['pass'];
    }
    if($pass1 == $pass){
        header("location:index.html");
    }
    else{
        header("location:login.html?wrongpass");
    }
?>
