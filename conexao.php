<?php
if (isset($_POST["acao"])) {
    if ($_POST["acao"] == "Inserir") {
        inserirPessoa();
    }
    if ($_POST["acao"] == "Cancelar") {
        voltarIndex();
    }
    if ($_POST["acao"] == "Alterar") {
        alterarPessoa();
    }
    if ($_POST["acao"] == "excluir") {
        excluirPessoa();
    }
}

function abrirBanco() {
    // Check connection
    $conexao = new mysqli("localhost", "admin", "123", "agenda");
    if ($conexao->connect_error) {
        die("Connection failed: " . $conexao->connect_error);
    }
    return $conexao;
}

function inserirPessoa() {
    $banco = abrirBanco();
    $sql = "INSERT INTO pessoa (nome,nascimento,endereco,telefone)"
            . "VALUES ('{$_POST["nome"]}',"
            . "'{$_POST["nascimento"]}',"
            . "'{$_POST["endereco"]}',"
            . "'{$_POST["telefone"]}')";
    if ($banco->query($sql) === TRUE) {
        voltarIndex();
    } else {
        echo "Error: " . $sql . "<br>" . $banco->error;
    }
    $banco->close();
}

function alterarPessoa() {
    $banco = abrirBanco();
    $sql = "UPDATE pessoa SET "
            . "nome='{$_POST["nome"]}',"
            . "nascimento='{$_POST["nascimento"]}',"
            . "endereco='{$_POST["endereco"]}',"
            . "telefone='{$_POST["telefone"]}' "
            . "WHERE id='{$_POST["id"]}'";
    if ($banco->query($sql) === TRUE) {
        voltarIndex();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $banco->close();
}

function excluirPessoa() {
    $banco = abrirBanco();
    $sql = "DELETE FROM pessoa WHERE id = '{$_POST["id"]}'";
    if ($banco->query($sql) === FALSE) {
        echo "Error: " . $sql . "<br>" . $banco->error;
    }
    if ($banco->query($sql) === TRUE) {
        voltarIndex();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $banco->close();
}

function selectAllPessoa() {
    $banco = abrirBanco();
    $sql = "SELECT * FROM pessoa ORDER BY nome";
    $resultado = $banco->query($sql);
    while ($row = mysqli_fetch_array($resultado)) {
        $grupo[] = $row;
    }
    return $grupo;
}

function selectIdPessoa($id) {
    $banco = abrirBanco();
    $sql = "SELECT * FROM pessoa WHERE id=" . $id;
    $resultado = $banco->query($sql);
    $banco->close();
    $pessoa = mysqli_fetch_assoc($resultado);
    return $pessoa;
}

function formatoData($data) {
    $array = explode("-", $data);
    $novaData = $array[2] . "/" . $array["1"] . "/" . $array["0"];
    return $novaData;
}

function voltarIndex() {
header("Location:select.php");
}

?>