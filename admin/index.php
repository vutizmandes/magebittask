<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `persons` WHERE CONCAT(`id`, `email`, `time_added`, `domain`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM persons ORDER BY time_added";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
	$mysqli = new mysqli("localhost", "root", "test12345", "subscriptions");
    $result = $mysqli->query($query);
   
    return $result;
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>E-Mail Database</title>
        <style>
            table,tr,th,td
            {
                border: 1px solid blue;
            }
        </style>
    </head>
    <body>
      <h2>E-mail database</h2>  
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
            <input type="submit" name="search" value="Filter"><br><br>
            
            <table>
                <tr>
                    <th>Id</th>
                    <th>email</th>
                    <th>time_added</th>
                    <th>domain</th>
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['time_added'];?></td>
                    <td><?php echo $row['domain'];?></td>
                </tr>
                <?php endwhile;?>
            </table>
        </form>
        
    </body>
</html>
