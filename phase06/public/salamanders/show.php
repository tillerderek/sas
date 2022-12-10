<?php require_once('../../private/initialize.php'); 

$page_title = 'Salamander Details';
include(SHARED_PATH . '/salamander-header.php'); 
$id = $_GET['id'] ?? '1'; 
$salamander = find_salamander_by_id($id);
?>

<?php
// included if statement to validate db_escape is actually working instead of getting warning message or getting annoying as hell null array message that had me confused for like 2 hours
if ($salamander === NULL) {

?>

<p><strong>No salamander found!</strong></p>

<?php } else { ?>

<h2>Salamander Details</h2>
<p><strong>ID:</strong><?php echo h($salamander['id']); ?></p>
<p><strong>Name:</strong><?php echo h($salamander['name']); ?></p>
<p><strong>Habitat:</strong><br> <?php echo h($salamander['habitat']); ?> </p>
<p><strong>Description:</strong><br> <?php echo h($salamander['description']); ?></p>

<?php } ?>

<p><a href="<?= url_for('/salamanders/index.php'); ?>">&laquo; Back to Salamander List</a></p>

<?php include(SHARED_PATH . '/salamander-footer.php'); ?>
