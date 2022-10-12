<?php 

// include 'Data_Acess/PromoManager.php';
include "Business/PromotionBLL.php";
$PromoManager = new PromoBLL();
$GetData =  $PromoManager->GetAllData();





?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        <?php 
        foreach($GetData as $value){
          
       
        ?>
      <td> <?php echo $value->GetId() ?></td>
      <td> <?php echo $value->getName() ?></td>
      <td>
        <a href="Delete.php?id=<?php echo $value->getId() ?>">Delete</a>
      </td>
     
     
    </tr>
<?php }?>
  </tbody>
</table>

<a href="Ajouter.php">ajouter</a>