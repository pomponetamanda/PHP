<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    

    <div class="container">
        <form method="POST" action="processa.php">

        <label for="nome">Nome completo:</label>
        <input type="text" id="nome" name="nome" require>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" require>

        <label for="nascimento">Data de Nascimento:</label>
        <input type="date" id="nascimento" name="nascimento" require>

        <label for="genero">Gênero:</label>
        <select id="genero" name="geero" require>
            <option value="Selecione o gênero"></option>
            <option value="Masculino"></option>
            <option value="Feminino"></option>
            <option value="Outro"></option>
            <option value="Prefiro não dizer"></option>
            </select>

        <label for="biografia">Biografia:</label>
        <textarea id="biografia" name="biografia" rows="5" placeholder="Conte um pouco sobre você"></textarea>

        <input type="submit" value="Enviar">
        
    </form>
    </div>
    

</body>
</html>