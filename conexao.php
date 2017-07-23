<?php
$conecta = mysql_connect("mysql.brunatha.com.br", "brunatha", "nathais10") or print (mysql_error());
mysql_select_db("brunatha", $conecta) or print(mysql_error());
$sql = "SELECT nome FROM aluno";
$result = mysql_query($sql, $conecta);

/* Escreve resultados até que não haja mais linhas na tabela */

while($consulta = mysql_fetch_array($result)) {
  print "Coluna1: $consulta[coluna1]<br>";
}

mysql_free_result($result);
mysql_close($conecta);
?>
