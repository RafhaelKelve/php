<?php require 'pages/header.php'; ?>

<!-- script de Login-->
<?php

if(empty($_SESSION['cLogin'])) {
    ?>
        <script type="text/javascript">window.location.href="login.php";</script>
    <?php
    exit;
}
?>

<div class="container">
    <h1>Meus Anúncios - Adicionar Anúncios</h1>

    <form method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="categoria">Categoria:</label>
            <select name="categoria" id="categoria" class="form-control">
                <option value="categoria">Categoria 1</option>
                <option value="categoria">Categoria 2</option>
                <option value="categoria">Categoria 3</option>
                <option value="categoria">Categoria 4</option>
            </select>
        </div>    
        <div class="form-group">
            <label for="titulo">Titulo:</label>
            <input type="text" name="titulo" id="titulo" class="form-control">
        </div>

        <div class="form-group">
            <label for="valor">Valor:</label>
            <input type="text" name="valor" id="valor" class="form-control">
        </div>

        <div class="form-group">
            <label for="descrica">Descrição:</label>
            <textarea name="descricao" id="descricao" class="form-control" cols="30" rows="10"></textarea>
        </div>

        <div class="form-group">
            <label for="estado">Estado de Conservação:</label>
            <select name="estado" id="estado" class="form-control">
                <option value="0">Ruim</option>
                <option value="1">Bom</option>
                <option value="2">Ótimo</option>
            </select>
        </div>

    </form>

</div>



<?php require 'pages/footer.php'; ?>