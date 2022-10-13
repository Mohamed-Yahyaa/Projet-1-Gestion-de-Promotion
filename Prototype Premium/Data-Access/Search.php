<?php

include 'ConnectionDB.php';
if(isset($_POST['key'])){

$input = $_POST['key'];
$query= "SELECT * FROM promo where `Name` like '{$input}%'";
$result = mysqli_query(getConnection(), $query);
// $data =  mysqli_fetch_assoc($result);
// 
if(mysqli_num_rows($result)>0){
?>

 
    
        <?php while(  $value = mysqli_fetch_assoc($result) ){ 
            $id =$value['id'];
            $name =$value['Name'];
            ?>

        <tr>
            <td><?php echo $id ?></td>
            <td><?php echo $name  ?></td>
            <td>
                    <a href="Edit.php?id=<?php echo $id?>">Edit</a>
                    <a href="Delete.php?id=<?php echo $id ?>">Delete</a>
          </td>
        </tr>
    

    
    

<?php
}
}
}
?>