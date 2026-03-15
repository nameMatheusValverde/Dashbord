<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="usuario.css">
    <link rel="stylesheet" href="dash.css">
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
                <section class="card-form">
                    <div class="form-header">
                        <h2><i class="fa-solid fa-user-plus"></i> Novo Usuário</h2>
                        <p>Preencha os dados abaixo para registrar um novo acesso.</p>
                    </div>
                

                    <form action="processar.php" method="POST">
                        <div class="form-group">
                            <label for="nome">Nome completo</label>
                            <input type="text" id="nome" name="nome" placeholder="Ex: Nome Sobrenome" required>
                        </div>

                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email" id="email" name="email" placeholder="nome@empresa.com" required>
                        </div>

                        <div class="form-row">
                            <div class="form-group flex-1">
                                <label for="senha">Senha</label>
                                <input type="password" id="senha" name="senha" placeholder="Senha" required>
                            </div>

                            <div class="form-group flex-1">
                                <label for="nivel">Nivel</label>
                                <select id="nivel" name="nivel">
                                    <option value="1">Usuario</option>
                                    <option value="2">Administrador</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-actions">
                            <button class="btn-save" type="submit"><i class="fa-solid fa-check"></i> Finalizar Cadastro</button>
                            <a class="btn-cancel" href="index.php" role="button">cancelar</a>
                        </div>

                        
                    </form>
                </section>
            </main>
        </div>

    <footer>
        <p>&copy; <?php echo date('Y'); ?> - Desenvolvido na aula de web I</p>
    </footer>
</body>
</html>