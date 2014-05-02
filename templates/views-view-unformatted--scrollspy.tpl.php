    <nav id="navbar-example2" class="navbar navbar-default navbar-static" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-example-js-navbar-scrollspy">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">ScrollSpy</a>
        </div>
        <div class="collapse navbar-collapse bs-example-js-navbar-scrollspy">
          <ul class="nav navbar-nav">
                 
            <? $_SESSION['count'] = 1; ?>
            <?php foreach ($rows as $id => $row): ?>
              <li><a href=<?php print "#noticia{$_SESSION['count']}" ?> > <?php print "Noticia{$_SESSION['count']}" ?>  </a></li>
              <?php $_SESSION['count']=$_SESSION['count'] + 1; ?>
            <?php endforeach; ?>

          </ul>
        </div>
      </div>
    </nav>
<? 
$_SESSION['count'] = 1;
?>
<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
   <div data-spy="scroll" data-target="#navbar-example2" data-offset="0" class="scrollspy-example">
<?php foreach ($rows as $id => $row): ?>

    
      <?php print $row; ?>


<?php endforeach; ?>
    </div>