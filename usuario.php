<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuário</title>
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
    
        <main>
            <div class="header-content">
                <h2>Gestão de Usuário</h2>
                <p>Visualizar e gerenciar as permições de usuário do sistema</p>
            </div>

            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Acesso</th>
                            <th>Status</th>
                            <th>Açoes</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>01</td>
                            <td>Matheus Bruno</td>
                            <td>122948@unifev.edu.br</td>
                            <td>Adiministrador</td>
                            <td><span class="badge Ativo"></span>Ativo</td>
                            <td><button class="btn-icon"><i class="fa-solid fa-pen"></i></button></td>
                        </tr>
                        <tr>
                            <tr>
                            <td>02</td>
                            <td>Nelsom das oliveiras</td>
                            <td>Nelsom.oliveiras@gmail.com</td>
                            <td>Editor</td>
                            <td><span class="badge Ativo"></span>Ativo</td>
                            <td><button class="btn-icon"><i class="fa-solid fa-pen"></i></button></td>
                        </tr>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>

    <footer>
        <p>&copy; <?php echo date('Y'); ?> - Desenvolvido por Matheus valverde</p>
    </footer>
</body>
</html>