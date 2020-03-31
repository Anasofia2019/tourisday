<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<b>Publicar Imagenes en Internet</b>
<a href="http://www.tallerwebmaster.com/Tutorial-Publicar-Imagenes-en-Internet-c-44.html" target="_blank">http://www.tallerwebmaster.com/Tutorial-Pu...ernet-c-44.html</a>




<!--c1--><div class='codetop'>CÓDIGO</div><div class='codemain'><!--ec1-->
<?php
move_uploaded_file($_FILES['archivo']['tmp_name'], '/home/usuario/public_html/archivosonline/' . $_FILES['archivo']['name']);
?>
<!--c2--></div><!--ec2-->


<!--c1--><div class='codetop'>CÓDIGO</div><div class='codemain'><!--ec1-->
<?php mysql_query("INSERT INTO banner SET archivo = '" . $_FILES['archivo']['name'] . "'");
?>
<!--c2--></div><!--ec2-->

<!--c1--><div class='codetop'>CÓDIGO</div><div class='codemain'><!--ec1-->
<img src="img/demo.png" />
<!--c2--></div><!--ec2-->


<!--c1--><div class='codetop'>CÓDIGO</div><div class='codemain'><!--ec1-->
<?php
$rst = mysql_query("SELECT * FROM banner");
while ($row = mysql_fetch_array($rst)) {
?>
<img src="img/banner/<?php echo $row['archivo']; ?>" />
<?php
}

?>
<!--c2--></div><!--ec2-->
</body>
</html>