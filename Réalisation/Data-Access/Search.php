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
<table class="table mb-4">
			<thead>
				<tr>
					<th scope="col">No.</th>
					<th scope="col">Nom de la promotion</th>

					<th scope="col">Actions</th>
				</tr>
			</thead>
			<tbody>
				<?php
				while ($row = mysqli_fetch_assoc($result)) {
				?>
					<tr>
						<th scope="row"><?= $row['id'] ?></th>
						<td><?= $row['Name'] ?></td>

						<td style="width:216px">


							<button class="btn btn-danger"> <a href="Delete.php?id=<?= $row['id'] ?>">Supprimer</a></button>
							<button class="btn btn-success ms-1"><a href="Edit.php?id=<?= $row['id'] ?>">Modifier</a> </button>
						</td>
					</tr>

				<?php } ?>
			</tbody>
		</table>

<?php
	} else {
		echo "<h6 class= 'text-danger text-center mt-3'> no data found </h6>";
	}
}
?>
 
    
    