<?php require_once('../../private/initialize.php');
/* ------------------------------------------------------------------
    
  1.)
  * Use require_once to reference the initialize.php file
  * Use a relative file path

  2.)

    Enter your code in the salamander array below

    Use this array element to start your array.
    ['id' => '1', 'salamanderName' => 'Red-Legged Salamander'],
    
    Add these salamanders to your array
    id 2 Pigeon Mountain Salamander
    id 3 ZigZag Salamander'
    id 4 Slimy Salamander

    ------------------------------------------------------------------ */

$salamanders = [
  ['id' => '1',  'salamanderName' => 'Red-Legged Salamander'],
  ['id' => '2',  'salamanderName' => 'Pigeon Mountain Salamander'],
  ['id' => '3',  'salamanderName' => 'ZigZag Salamander'],
  ['id' => '4',  'salamanderName' => 'Slimy Salamander'],
];

$page_title = 'Salamanders';
require_once(SHARED_PATH . '/salamander-header.php');

/* ------------------------------------------------------------------
Use require_once with the SHARED_PATH constant to reference 
the salamander-header.php file
------------------------------------------------------------------ */

?>

<h1>Salamanders</h1>

<a href="#">Create Salamander</a>

<table>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
  </tr>

  <?php foreach ($salamanders as $salamander) { ?>
    <tr>
      <td><?= h($salamander['id']); ?></td>
      <td><?= h($salamander['salamanderName']); ?></td>
      <td><a class="action" href="<?= url_for('salamanders/show.php?id=' . h(u($salamander['id']))); ?>">View</a></td>
      <td><a class="action" href="">Edit</a></td>
      <td><a class="action" href="">Delete</a></td>
    </tr>
  <?php } ?>
</table>

<?php include(SHARED_PATH . '/salamander-footer.php'); ?>