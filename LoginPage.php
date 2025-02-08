<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bookverse-bd";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['register'])) {
        // Register user
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";

        if ($conn->query($sql) === TRUE) {
            echo "<p>Cadastro realizado com sucesso!</p>";
        } else {
            echo "Erro: " . $sql . "<br>" . $conn->error;
        }
    } elseif (isset($_POST['login'])) {
		session_start(); // Inicia a sessão
		
        // Login user
        $email = $_POST['email'];
        $password = $_POST['password'];
		$result = $conn->query("SELECT * FROM users WHERE email = '$email'"); 
		$user = $result->fetch_assoc();

        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if (password_verify($password, $row['password'])) {
				// Inicia variáveis de sessão
                $_SESSION['name'] = $user['name'];
				$_SESSION['tipo'] = $user['tipo'];

                // Redireciona para s próxima (nesse caso, por enquanto está redirecionando para a página de livros)
				echo "usuario logado";
                header("Location: bibliotecamfr/teste.php");
                exit();
            } else {
                echo "Senha inválida!";
            }
        } else {
            echo "Nenhum usuário encontrado com esse email!";
        }
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css'><link rel="stylesheet" href="Assets/LoginPage.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form method="post" action="">

			<svg xmlns="http://www.w3.org/2000/svg" width="80px" height="80px" fill="Black" class="bi bi-person-circle" viewBox="0 0 16 16">
				<path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
				<path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
			  </svg>

			<h1>Cadastro</h1>
			<span>Use seu email para se cadastrar</span>
			<input class="input" type="text" name="name" placeholder="Nome" required/>
			<input class="input" type="email" name="email" placeholder="Email" required/>
			<input class="input" type="password" name="password" placeholder="Senha" required />
			<a href="#" id="signIn">Tem cadastro? Faça login</a>
			<input type="submit" name="register" value="Cadastrar" class="button">
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form method="post" action="">

			<svg xmlns="http://www.w3.org/2000/svg" width="80px" height="80px" fill="black" class="bi bi-person-circle" viewBox="0 0 16 16">
				<path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
				<path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
			  </svg>

			<h1>Login</h1>
			<span>Use a sua conta</span>
			<input class="input" type="email" name="email" placeholder="Email" required/>
			<input class="input" type="password" name="password" placeholder="Senha" required/>
			<a href="#" id="signUp">Não tem uma conta? Cadastre-se</a>
			<input type="submit" name="login" value="Entrar" class="button">
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<img src="imgs/logo.png">
			</div>
			<div class="overlay-panel overlay-right">
				<img src="imgs/logo.png">
			</div>
		</div>
	</div>
</div>
<!-- partial -->
  <script  src="Assets/LoginPage.js"></script>

</body>
</html>
