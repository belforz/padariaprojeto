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
    <h1>Produtos</h1>
    <section class="table">
        <table class="table_cel">
            <tr class="colunas">
                <th>Id</th>
                <th>Nome do Produto</th>
                <th>Descrição</th>
                <th>Categoria</th>
                <th>Quantidade</th>
                <th>Valor</th>
            </tr>
            @foreach($produtos as $p)
                <tr class="linhas">
                    <td class="linha">{{$p->idProduto}}</td>
                    <td class="linha">{{$p->Pnome}}</td>
                    <td class="linha">{{$p->Descricao}}</td>         
                    
                    <td class="linha">{{$p->Quantidade}}</td>
                    <td class="linha">{{$p->Valor_Inicial}}</td>
                </tr>
            @endforeach
        </table>
    </section>

    <form class="form" action="/produtos" method="post">
        {{csrf_field()}}
        <input type="text" name="txPnome" placeholder="Nome do Produto">
        <input type="text" name="txDescricao" placeholder="Descrição">
        <input type="text" name="txCategoria" placeholder="Categoria">
        <input type="text" name="txQuantidade" placeholder="Quantidade">
        <input type="text" name="txValor_Inicial" placeholder="Valor">

        <input type="submit" value="Salvar">
    </form>
</body>
</html>