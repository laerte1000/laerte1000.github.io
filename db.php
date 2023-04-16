<?php  
    $dbhost="localhost";  
    $dbName="clien";  
    $user="root";  
    $pass="";  
    $nome=$_REQUEST['name'];
    $prodotto=implode(",", $_GET['prodotto']);
    echo "$nome";
    echo "$prodotto";
    $conn = new mysqli($dbhost, $user, $pass, $dbName, 3306);  
    try{  
        echo "Successfully connected with newdb database";  
    }  
    catch(Exception $e){  
            die("Connection failed".$e->getMessage());  
    }  
    if (isset($_POST['prodotto'])) {
        foreach ($_POST['prodotto'] as $prd) {
          echo $prd."<br>";
        }
      }
    $sql = "INSERT INTO `clie` (`nome`, `prodotto`) VALUES ('$nome', '$prodotto')";
    mysqli_query($conn, $sql);
?>  