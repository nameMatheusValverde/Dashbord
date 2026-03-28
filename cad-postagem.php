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
        <?php include 'menu.php'; ?>
        <main>
            <section class="card-form">
                <div class="form-header">
                    <h2><i class="fa-solid fa-user-plus"></i> Nova Postagem</h2>
                    <p>Preencha os dados abaixo para registrar um nova postagem.</p>
                </div>

                <form action="processar.php" method="POST">
                    <div class="form-group">
                        <label for="titulo">Titulo</label>
                        <input type="text" id="titulo" name="titulo" placeholder="Titulo" required>
                    </div>

                    <div class="form-group">
                        <label for="conteudo">Conteudo</label>
                        <input type="text" id="conteudo" name="conteudo" placeholder="tecnologia" required>
                    </div>

                    <div class="form-group flex-1">
                        <label for="status">status</label>
                        <select id="status" name="status">
                            <option value="1">Ativo</option>
                            <option value="2">Inativo</option>
                        </select>
                    </div>
    </div>

    <div class="form-actions">
        <button class="btn-save" type="submit"><i class="fa-solid fa-check"></i> Finalizar
            Cadastro</button>
        <a class="btn-cancel" href="index.php" role="button">cancelar</a>
    </div>


    </form>
    </section>
    </main>
    </div>
    <footer>
        <?php include 'footer.php'; ?>
    </footer>
</body>

</html>
