<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>CRIAR CONTA</h1>
    <form action="/usuario" method="post">
        @csrf
       
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="name"><br>

        <label for="email">Email:</label><br>
        <input type="text" id="email" name="email"><br>

        <label for="senha">Senha:</label><br>
        <input type="password" id="senha" name="password"><br>

        <input type="submit" value="Criar" />
    </form>
</body>
</html>
