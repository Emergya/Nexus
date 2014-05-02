<?php if ($_SESSION['count']==1) {$clasein = " in";} ?>
<div <??><?php print "id='collapse{$_SESSION['count']}'";  
			if($_SESSION['count']==1){print "class='panel-collapse collapse in'";}else{print "class='panel-collapse collapse'";} ?>  > 
  <div class="panel-body">
    <?php print $output;  $_SESSION['count']=$_SESSION['count'] + 1 ?>
  </div>
</div>