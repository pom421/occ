<?php 
$classe = array( "productions actuelles" => "", "pedagogie" => "", "mecenat" => "", "infolettre" => "");

$classe[$page]='class="active"';
?>	
<!DOCTYPE html>
<html>
<head>
<title>Opéra Côté Choeur <?php print "- ".$title; ?></title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="description" content="<?php print $description; ?>" />
<!-- Animate.css -->
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
        <h1><a href="index.php">Opéra Côté Choeur</a></h1>
      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li <?php print $classe["productions actuelles"]; ?>><a class="drop" href="#">Productions actuelles</a>
            <ul>
              <li><a href="pros/catalogue 19-20.pdf" target="_blank">Catalogue 2019-2020</a></li>			
              <li><a href="carmen.php">Carmen</a></li>
              <li><a href="orfeoeuridice.php">Orfeo ed Euridice</a></li>
              <li><a href="norma.php">Norma</a></li>
              <li><a href="bellehelene.php">La Belle Hélène</a></li>
              <li><a href="tosca.php">Tosca</a></li>
            </ul>
          </li>
          <li <?php print $classe["pedagogie"]; ?>><a href="projet_pedagogique.php">Action pédagogique</a>
          </li>		  
          <li><a href="#">Portfolio</a></li>
          <li <?php print $classe["mecenat"]; ?>><a href="mecenat.php">Mécénat</a></li>		  
          <li <?php print $classe["infolettre"]; ?>><a href="infolettre.php#infolettre">Infolettre</a></li>
		  <li><a href="#contact">Contact</a></li>
        </ul>
      </nav>
      <!-- ################################################################################################ -->
    </header>
  </div>
<?php if (isset($bandeau)) {?>	
<div class="bgded" style="background-image:url('<?php print $bandeau; ?>'); height:430px">
<br />
</div>
<?php } ?>	
<!-- End Top Background Image Wrapper -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
