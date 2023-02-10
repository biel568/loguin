// Conecta-se ao banco de dados
  $conn = mysqli_connect('localhost');
  
  // Verifica se houve conexão
  if (!$conn) {
    die("Conexão falhou: " . mysqli_connect_error());
  }
  
  // Recebe os dados do formulário
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  
  // Prepara a instrução SQL
  $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
  
  // Executa a instrução SQL
  if (mysqli_query($conn, $sql)) {
    echo "Registro criado com sucesso";
  } else {
    echo "Erro: " . $sql . "<br>" . mysqli_error($conn);
  }
  
  // Fecha a conexão
  mysqli_close($conn);
?>