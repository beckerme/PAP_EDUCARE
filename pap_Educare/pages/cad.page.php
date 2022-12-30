<?php
// Definir um fuso horario padrao
date_default_timezone_set('America/Sao_Paulo');

// Incluir a conexao com o banco de dados
include_once "../methods/conn.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Celke</title>
</head>

<body>
    <h2>Cadastrar Horário</h2>

    <?php
    // Receber os dados do formulario
    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    // Verificar se o usuario clicou no botao cadastrar
    if (!empty($dados['SendCadHorario'])) {
        //var_dump($dados);

        // Gerar data atual
        $dados['data_cad'] = date('Y-m-d');
        //var_dump($dados);

        // Verificar se consegui executar corretamente a instrucao dentro do try
        try {
            // Query para cadastrar no banco de dados
            $query_horario = "INSERT INTO horarios (entrada, saida, data_cad) VALUES (:entrada, :saida, :data_cad)";
            $cad_horario = $conn->prepare($query_horario);
            $cad_horario->bindParam(':entrada', $dados['entrada']);
            $cad_horario->bindParam(':saida', $dados['saida']);
            $cad_horario->bindParam(':data_cad', $dados['data_cad']);

            // Executar a QUERY
            $cad_horario->execute();

            // Acessa o IF quando cadastrar com sucesso
            if ($cad_horario->rowCount()) {
                echo "<span style='color: green;'>Horário cadastrado com sucesso!</span><br><br>";
                unset($dados);
            } else {
                echo "<span style='color: #f00;'>Erro: Horário já reservado!</span><br><br>";
            }
        } catch (PDOException $erro) {
            echo "<span style='color: #f00;'>Erro: Horário já reservado!</span><br><br>";
        }
    }
    ?>

    <form method="POST" action="">
        <!-- Campo para selecionar a data de cadastro -->
        <!-- Para utilizar esse campo, retirar o cometario do campo abaixo e apagar a intrucao que gera a data atual: $dados['data'] = date('Y-m-d'); -->
        <!--<?php
        $data_cad = "";
        if (isset($dados['data_cad'])) {
            $data_cad = $dados['data_cad'];
        }
        ?>
        <label>Data: </label>
        <input type="date" name="data_cad" value="<?php echo $data_cad; ?>" required><br><br>-->

        <?php
        $entrada = "";
        if (isset($dados['entrada'])) {
            $entrada = $dados['entrada'];
        }
        ?>
        <label>Entrada: </label>
        <input type="time" name="entrada" value="<?php echo $entrada; ?>" required><br><br>

        <?php
        $saida = "";
        if (isset($dados['saida'])) {
            $saida = $dados['saida'];
        }
        ?>
        <label>Saída: </label>
        <input type="time" name="saida" value="<?php echo $saida; ?>" required><br><br>

        <input type="submit" value="Cadastra" name="SendCadHorario">
    </form>
</body>

</html>