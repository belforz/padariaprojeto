<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Contatos</title>
</head>
<body>
    <h1>contatos existentes</h1>
    <section class="table">
        <table class="table_cel">
            <tr class="colunas">
                <th>Id</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Assunto</th>
                <th>Mensagem</th>
            </tr>
            @foreach($contatos as $c)
                <tr class="linhas">
                    <td class="linha">{{$c->idContato}}</td>
                    <td class="linha">{{$c->nome}}</td>
                    <td class="linha">{{$c->email}}</td>         
                    <td class="linha">{{$c->assunto}}</td>
                    <td class="linha">{{$c->mensagem}}</td>
                </tr>
            @endforeach
        </table>
    </section>

    <form class="form" action="/contato" method="post">
        {{csrf_field()}}
        <input type="text" name="txNome" placeholder="Nome">
        <input type="text" name="txEmail" placeholder="Email">
        <input type="text" name="txAssunto" placeholder="Assunto">
        <input type="text" name="txMsg" placeholder="Mensagem">

        <input type="submit" value="Salvar">
    </form>
</body>
</html>