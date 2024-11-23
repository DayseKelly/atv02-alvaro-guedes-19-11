<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Formulário Web - Interativo</title>
    <link rel="icon" type="image/x-icon" href="imagens/novo_form.png">
</head>
<body>

<div class="header">
    <h1>Formulários Web: Interatividade e Usabilidade</h1>
    
</div>

<nav>
    <ul class="nav-links">
        <li><a href="https://www.typeform.com/" target="_blank">Typeform</a></li>
        <li><a href="https://formstack.com/" target="_blank">Formstack</a></li>
        <li><a href="https://www.microsoft.com/pt-br/microsoft-forms" target="_blank">Microsoft Forms</a></li>
        <li><a href="https://www.wufoo.com/" target="_blank">Wufoo</a></li>
    </ul>
</nav>

<div class="main">
    <section class="about">
    </section>

    <section class="form-section">
        <h1>Preencha o Formulário Abaixo</h1>
        <form action="/submit_form.php" method="POST" class="form-box">
            <label for="nome">Nome Completo:</label>
            <input type="text" id="nome" name="nome" placeholder="Digite seu nome completo" required>

            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" placeholder="Digite seu e-mail" required>

            <label for="sexo">Gênero:</label>
            <select id="sexo" name="sexo">
                <option value="masculino">Masculino</option>
                <option value="feminino">Feminino</option>
                <option value="outro">Outro</option>
            </select>

            <label for="nascimento">Data de Nascimento:</label>
            <input type="date" id="nascimento" name="nascimento" required>

            <label for="telefone">Telefone:</label>
            <input type="tel" id="telefone" name="telefone" placeholder="(xx) xxxxx-xxxx" pattern="[0-9]{2}-[0-9]{5}-[0-9]{4}" required>

            <label for="interesse">Área de Interesse:</label>
            <input type="checkbox" id="programacao" name="interesse" value="Programação">
            <label for="programacao">Programação</label>
            <input type="checkbox" id="design" name="interesse" value="Design">
            <label for="design">Design</label>
            <input type="checkbox" id="marketing" name="interesse" value="Marketing">
            <label for="marketing">Marketing</label>

            <label for="comentarios">Comentários:</label>
            <textarea id="comentarios" name="comentarios" rows="4" placeholder="Deixe sua opinião..."></textarea>

            <button type="submit">Enviar</button>
        </form>
    </section>
</div>

<div class="footer">
    <p>&copy; TODOS OS DIREITOS RESERVADOS A ALVARO GUEDES </p>
</div>

</body>
</html>