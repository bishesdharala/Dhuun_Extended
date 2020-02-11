
    <!DOCTYPE html>
<html>
<head>
    <title>Search Bar</title>
    <link rel="stylesheet" type="text/css" href="css/search.css">
    </head>
<body>  
    
    <div class="row">
<a href="" class="logo"><img src="images/cap.png"></a>
</div>
  
<form method="post">
    <label>Search</label>
    <input type="text" name="search">
    <input type="submit" name="submit">
</form>
</body>
</html>
 
<?php
 
$con = new PDO("mysql:host=localhost;dbname=songs",'root','');
 
if (isset($_POST["submit"])) {
    $str = $_POST["search"];
    $sth = $con->prepare("SELECT * FROM `search` WHERE Name = '$str'");
 
    $sth->setFetchMode(PDO:: FETCH_OBJ);
    $sth -> execute();
 
    if($row = $sth->fetch())
    {
        ?>
        <br><br><br>
        <table>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Artist</th>
            </tr>
            <tr>
                <td><?php echo $row->Name; ?></td>
                <td><?php echo $row->Description;?></td>
               <td><?php echo $row->Artist;?></td>
            </tr>
 
        </table>
<?php 
    }
         
         
        else{
            echo "Name Does not exist";
        }
 
 
}
 
?>