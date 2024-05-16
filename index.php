<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Exemplo</title>
</head>

<body>
    <?php
    // Definindo variáveis e setando valores vazios
    $name = $age = $email = "";
    $nameErr = $ageErr = $emailErr = "";

    // Função para limpar a entrada do usuário
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Validação do nome
        if (empty($_POST["name"])) {
            $nameErr = "Nome é obrigatório";
        } else {
            $name = test_input($_POST["name"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
                $nameErr = "Apenas letras e espaços em branco são permitidos";
            }
        }

        // Validação da idade
        if (empty($_POST["age"])) {
            $ageErr = "Idade é obrigatória";
        } else {
            $age = test_input($_POST["age"]);
            if (!filter_var($age, FILTER_VALIDATE_INT)) {
                $ageErr = "Idade deve ser um número inteiro";
            }
        }

        // Validação do e-mail
        if (empty($_POST["email"])) {
            $emailErr = "E-mail é obrigatório";
        } else {
            $email = test_input($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Formato de e-mail inválido";
            }
        }
    }
    ?>

    <h2>Formulário de Exemplo com PHP</h2>
    <p><span style="color: red;">* campos obrigatórios</span></p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Nome: <input type="text" name="name" value="<?php echo $name; ?>">
        <span style="color: red;">* <?php echo $nameErr; ?></span>
        <br><br>
        Idade: <input type="text" name="age" value="<?php echo $age; ?>">
        <span style="color: red;">* <?php echo $ageErr; ?></span>
        <br><br>
        E-mail: <input type="text" name="email" value="<?php echo $email; ?>">
        <span style="color: red;">* <?php echo $emailErr; ?></span>
        <br><br>
        <input type="submit" name="submit" value="Enviar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($nameErr) && empty($ageErr) && empty($emailErr)) {
        echo "<h2>Seus Dados:</h2>";
        echo "Nome: $name<br>";
        echo "Idade: $age<br>";
        echo "E-mail: $email<br>";
    }
    ?>
</body>

</html>