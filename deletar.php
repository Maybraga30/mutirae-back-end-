<?php
    include(classe/"conexaomultirae.php");
	
	
	$sql_code = "DELETE FROM mutirao WHERE codigo = '$id_mutirao'";
	$sql_query = $mysqli->query($sql_code) or die($mysqli->error);
	
	if($sql_query)
		echo "
	    <script>
	        alert('O mutirão foi deletado com sucesso.');
			location.href='mutiroes.php;
		</script>";
		
	else
		echo "
	<script>
	    alert("Não foi possível deletar o mutirão.');
		location.href='mutiroes.php;
	</script>";
	
	
    
