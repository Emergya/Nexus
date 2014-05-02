<? 
$_SESSION['count'] = 1;
?>

<div class="panel-group" id="accordion">
  <?php if (!empty($title)): ?>
    <h3><?php print $title; ?></h3>
  <?php endif; ?>
  <?php foreach ($rows as $id => $row): ?>
    <div class="panel panel-default">
        <?php print $row; ?>
    </div>
  <?php endforeach; ?>
</div>
