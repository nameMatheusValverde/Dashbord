<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="usuario.css">
    <link rel="stylesheet" href="dash.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <div class="login-container">
        <div class="login-card">

            <i class="fa-solid fa-newspaper logo-icon"></i>
            <h2>Painel do Blog</h2>

            <form action="valida_login.php" method="POST">
                <?php if (isset($_GET['erro'])): ?>
                    <header>
                        <p class="erro-alert">Usuário ou senha incorreta!</p>
                    </header>
                <?php endif; ?>
                <div class="form-group">
                    <input type="email" name="email" placeholder="E-mail" required>
                </div>

                <div class="form-group">
                    <input type="password" name="senha" placeholder="Senha" required>
                </div>

                <button type="submit" class="btn-login">
                    Acessar painel
                </button>
            </form>

        </div>


</body>

</html>
