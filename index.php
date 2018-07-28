<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulário de contato</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <h2 class="title">Formulário de Contato</h2>
    <form method="post" action="public/index.php" id="formContato">
        <input type="text" name="nome" placeholder="Nome" required/>
        <input type="email" name="email" placeholder="E-mail" required/>
        <input type="tel" name="telefone" placeholder="Telefone" required/>
        <input type="text" name="assunto" placeholder="Assunto" required/>
        <textarea name="mensagem" rows="5" placeholder="Mensagem" required></textarea>
        <input type="submit" id="submit" value="Enviar">
    </form>
    <div id="gif">
        <img src="assets/loading.gif" id="loadingGif" alt="Imagem animada representando o carregamento">
    </div>
    <p id="submitResponse"></p>
</body>

<script>
    var form = document.getElementById("formContato");
    var submitResponse = document.getElementById("submitResponse");
    var gif = document.getElementById("loadingGif");

    form.addEventListener("submit", function (event) {
        event.preventDefault();
        gif.style.display = "block";
        

        var xhttp = new XMLHttpRequest();
        xhttp.open("POST", " public/index.php", true);
        var FD = new FormData(form);
        xhttp.send(FD);

        // Define what happens on successful data submission
        xhttp.addEventListener("load", function(event) {
            gif.style.display = "none";
            gif.parentElement.remove();
            submitResponse.innerHTML = event.target.responseText;
        });

        // Define what happens in case of error
        xhttp.addEventListener("error", function(event) {
            gif.style.display = "none";
            gif.parentElement.remove();
            alert('Oops! Something went wrong.');
        });
    });
</script>

</html>