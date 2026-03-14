<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="usuario.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
        <div class="dashboard-container">
            <nav>
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="usuario.php">Usuario</a></li>
                    <li><a href="#">Projetos</a></li>
                    <li><a href="#">Relatórios</a></li>
                    <li><a href="#">Configurações</a></li>
                </ul>
                <div class="perfil-usuario ">
                    <img src="https://ui-avatars.com/api/?name=Eric+freitas&background=008080&color=fff" alt="Avatar">
                    <span>Atirador Valverde °36</span>
                </div>
            </nav>
        </div>
    <main>
        <section class="card-form">
            <div class="form-header">
                <h2><i class="fa-solid fa-user-plus"></i>Novo Usuário</h2>
                <p>Preencha os dados abaixo para registrar um novo acesso.</p>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; <?php echo date('Y'); ?> - Desenvolvido na aula de web I</p>
    </footer>
</body>
</html>