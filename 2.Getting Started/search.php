<?php


$search = $_POST['search'];

$connection = mysqli_connect('localhost','root','','ajax');

if(!empty($search)){
    
    
    $query = "SELECT * FROM cars WHERE name LIKE '$search%' ";
    $search_query = mysqli_query($connection,$query);
    
    if(!$search_query){
        
        die('QUERY FAILED' . mysqli_error($connection));
        
    }
    
    while($row = mysqli_fetch_array($search_query) ){
        
        $brand = $row['name'];
        
        ?>
        
        <ul style="margin-left:10px" class="list-unstyled">
            <?php
        
         echo "<li>$brand in stock </li>"
        
            ?>
        </ul>
        
        
 <?php   }
    
}


?>