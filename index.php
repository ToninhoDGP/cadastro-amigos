<?php
session_start();

// Proteção da página: se não estiver logado, vai para o login
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}

require_once 'conexao.php';

// AÇÃO 1: CADASTRAR AMIGO (Create)
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['acao']) && $_POST['acao'] == 'cadastrar') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];

    $sql = "INSERT INTO amigos (nome, email, telefone) VALUES ('$nome', '$email', '$telefone')";
    $conn->query($sql);
    header("Location: index.php");
    exit();
}

// AÇÃO 2: EXCLUIR AMIGO (Delete)
if (isset($_GET['excluir'])) {
    $id = $_GET['excluir'];
    $sql = "DELETE FROM amigos WHERE id = $id";
    $conn->query($sql);
    header("Location: index.php");
    exit();
}

// AÇÃO 3: LISTAR AMIGOS (Read)
$resultado = $conn->query("SELECT * FROM amigos");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Amigos</title>
</head>
<body>
    <h2>Bem-vindo, <?php echo $_SESSION['usuario']; ?>! | <a href="logout.php">Sair</a></h2>
    
    <hr>

    <h3>Cadastrar Novo Amigo</h3>
    <form method="POST" action="index.php">
        <input type="hidden" name="acao" value="cadastrar">
        <label>Nome:</label><br>
        <input type="text" name="nome" required><br><br>
        
        <label>E-mail:</label><br>
        <input type="email" name="email" required><br><br>
        
        <label>Telefone:</label><br>
        <input type="text" name="telefone" required><br><br>
        
        <button type="submit">Guardar Amigo</button>
    </form>

    <hr>

    <h3>Meus Amigos</h3>
    <table border="1" cellpadding="8">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Telefone</th>
            <th>Ação</th>
        </tr>
        <?php while ($row = $resultado->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['nome']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['telefone']; ?></td>
                <td>
                    <a href="index.php?excluir=<?php echo $row['id']; ?>" onclick="return confirm('Tem certeza?')">Excluir</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>