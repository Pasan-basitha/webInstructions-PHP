<?php session_start(); ?>
<?php require_once('connection.php'); ?>

<?php 



if (isset($_GET['ins_id'])) {
	//getting the instructions details

   $ins_id = mysqli_real_escape_string($connection,$_GET['ins_id']);

   $query="DELETE FROM instruction3 WHERE id={$ins_id}";

   $result =mysqli_query($connection,$query);

   if ($result) {
      //instruction deleted 
       header('Location: manage_Instruction3.php?msg=instruction_deleted');

   }else{
      header('Location: manage_Instruction3.php?err=delete_failed');

   }

}
else{

   header('Location: manage_Instruction3.php.php');
}


?>


<?php mysqli_close($connection); ?>