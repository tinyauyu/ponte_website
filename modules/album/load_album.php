<?php include 'simple_html_dom.php'; ?>
<?php

$end_yr=2017; $begin_yr=2010;

$year = $end_yr;

if($begin_yr<=intval($_GET['year']) && intval($_GET['year'])<=$end_yr){
	$year = intval($_GET['year']);	
}

$html = file_get_html('http://drivegal.com/pontesingers/album/'.$year.'/');

//Remove header and footer
foreach ($html->find('nav') as $node){$node->outertext = '';}
foreach ($html->find('.nav') as $node){$node->outertext = '';}
foreach ($html->find('h1') as $node){$node->outertext = '';}
foreach ($html->find('ol') as $node){$node->outertext = '';}
foreach ($html->find('#footer') as $node){$node->outertext = '';}

echo $html;
?>