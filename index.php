<?php
    $string = "La Svizzera (in tedesco Schweiz, in francese Suisse, in romancio Svizra), ufficialmente Confederazione Svizzera[9] (in tedesco Schweizerische Eidgenossenschaft, in francese Confédération suisse, in romancio Confederaziun svizra, in latino Confoederatio Helvetica[10][nota 1], abbreviata con l'acronimo CH), è uno Stato federale dell'Europa centrale, composto da 26 cantoni autonomi di cui 6 sono semicantoni. È un paese alpino senza sbocco sul mare, il cui territorio è geograficamente suddiviso tra il massiccio del Giura, l'Altipiano e le Alpi svizzere, e occupa una superficie di oltre 41 285 km². Confina a nord con la Germania, ad est con l'Austria e il Liechtenstein, a sud con l'Italia e ad ovest con la Francia.";
    $badword = str_replace([$_GET["primo"], $_GET["secondo"],$_GET["terzo"],$_GET["quarto"]], "***", $string);
    $lunghezza = strlen($string)
?>

<h1><?php echo $string;?></h1>
<h2><?php echo $badword;?></h2>
<h2><?php echo $lunghezza;?></h2>
