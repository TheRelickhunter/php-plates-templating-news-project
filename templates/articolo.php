<?php 
$articoloSpezzato=explode("<br>",wordwrap($this->e( $contenutoArticolo),100,"<br>"))[0]."..." ;

?>
<h1><a href=<?='articoloCompleto.php?id='.$this->e($id); ?> ><?= $this->e($titoloArticolo); ?> </a></h1>
<p><?php echo $articoloSpezzato; ?></p>
