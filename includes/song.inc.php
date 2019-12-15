
<?php 
include_once '../header.php';
$_SESSION['song_url']=$_GET['submit'];
echo $_SESSION['song_url'];?>
<audio controls>
<source src= "<?php echo $_SESSION['song_url'];?>">
</audio>
