<? 
$_SESSION['count'] = 1;
?>

    <ul id="myTab" class="nav nav-tabs">
      <?php foreach ($rows as $id => $row): ?>
        <li <?php 	if($_SESSION['count']==1){print "class='active'";}?> >
          <a href=<?php print "#noticia{$_SESSION['count']}" ?> data-toggle="tab"> 
            <?php print "Noticia{$_SESSION['count']}";  $_SESSION['count']=$_SESSION['count'] + 1; ?> </a></li>
      <?php endforeach; ?>
    </ul>

<? 
$_SESSION['count'] = 1;
?>

<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
  <div id="myTabContent" class="tab-content">
<?php foreach ($rows as $id => $row): ?>

   <div <?php 	if($_SESSION['count']==1){print "class='tab-pane fade active in'";}
        else{print "class='tab-pane fade'";} ?> 
        id=<?php print "noticia{$_SESSION['count']}" ?> >

      <?php print $row;   $_SESSION['count']=$_SESSION['count'] + 1; ?>

    </div>
  
<?php endforeach; ?>

    </div>