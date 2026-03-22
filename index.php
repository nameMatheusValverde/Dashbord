<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
    <div class="dashboard-container">
        <?php include 'menu.php'; ?>

        <main>
            <section class="container-card">

                <article>
                    <h2>Módulo de Usuários</h2>
                    <p>Gerenciador os acessos e permissões do sistema nesta área.</p>
                    <a href="usuario.php" class="btn">Acessar</a>
                </article>

                <article>
                    <h2>Relatórios de vendas</h2>
                    <p>Acompanhar os gráficos de desempenho deste mês.</p>
                    <a href="#" class="btn">Acessar</a>
                </article>

                <article>
                    <h2>Configurações do servidor</h2>
                    <p>Ajuste as portas do apache e banco de dados</p>
                    <a href="#" class="btn">Acessar</a>
                </article>
            </section>
        </main>
    </div>
    <footer>
        <?php include 'footer.php'; ?>
    </footer>
</body>

</html>
