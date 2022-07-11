<?PHP
# Conexão com o banco de dados
$conexao = mysqli_connect('us-cdbr-east-06.cleardb.net','bcabb530e34fab','d727dec6') or die("Erro de conexão");
$banco = mysqli_select_db($conexao,'heroku_2d66b1516bbbe69') or die("Erro ao selecionar o banco de dados");
?>

