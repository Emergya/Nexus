<!-- Button trigger modal -->
<button class="btn btn-primary btn-lg" data-toggle="modal" data-target=<?php print "#modal{$_SESSION['count']}" ?> >
   <?php print $output; ?> 
  <!--<?php print "Modal{$_SESSION['count']}" ?>-->
</button>
<div class="modal fade" id=<?php print "modal{$_SESSION['count']}" ?> tabindex="-1" role="dialog" aria-labelledby=<?php print "modalLabel{$_SESSION['count']}" ?> aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id=<?php print "modalLabel{$_SESSION['count']}" ?> >
				  <?php print $output; ?>
			  </h4>
		  </div>