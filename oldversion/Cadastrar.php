<!DOCTYPE html>
<html style="font-size: 10px;font-family: Roboto, Arial, sans-serif;" lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="Style.css">
    <title>Xadrez Com Reis</title>
</head>

<body class="Background">
    <center>
        <nav class="MenuItens">
            <ul>
                <li><a href="index.php">Pagina Principal</a></li>
                <li><a href="torneio.php">Torneio</a></li>
                <li><a href="Entrar.php">Entrar</a></li>
                <li><a href="Cadastrar.php">Login</a></li>
            </ul>
        </nav>
    </center>
    <center>
        <span class="TITULO3">XADREZ COM REIS</span>
        <span class="TITULO2">XADREZ COM REIS</span>
        <span class="TITULO">XADREZ COM REIS</span>
    </center>
    <div class="peoes">
        <div class="peaofx">
            <div><img width="120px" src="peaopreto.png"></div>
            <div><img width="120px" src="peaobranco.png"></div>
            <div><img width="120px" src="peaobranco.png"></div>
            <div><img width="120px" src="peaobranco.png"></div>
            <div><img width="120px" src="peaopreto.png"></div>
            <div><img width="120px" src="peaopreto.png"></div>
            <div><img width="120px" src="peaobranco.png"></div>
            <div><img width="120px" src="peaopreto.png"></div>
        </div>
    </div>
    <center>
        <div class="divcadastro">
            <form action="./Controller/register.php" method="POST">
                <table>
                    <tr>
                        <td colspan="2" class="title_cadas">CADASTRE - SE</td>
                    </tr>
                    <tr>
                        <td colspan="2" class="desc_cadas">Ao se cadastrar no site, você terá a oportunidade de competir
                            com jogadores de todo o mundo e testar suas habilidades em partidas emocionantes e
                            desafiadoras.</td>
                    </tr>
                    <tr class="EmailLine">
                        <td class="Email1">Nome:</td>
                        <td class="Email2"><input type="text" maxlength="16" id="NOMEcadastro" name="name">
                        </td>
                    </tr>
                    <tr class="EmailLine">
                        <td class="Email1">E-mail:</td>
                        <td class="Email2"><input type="email" id="EMAILcadastro" name="email" required></td>
                    </tr>
                    <tr class="SenhaLine">
                        <td class="Senha1">Senha:</td>
                        <td class="Senha2"><input type="password" maxlength="16" name="senha" id="SENHAcadastro"
                                required></td>
                    </tr>
                    <tr>
                        <td colspan="2" class="cadastrar"><input id="BTNcadastro" type="submit" value="CADASTRAR"></td>
                    </tr>
                </table>
            </form>
        </div>
        <div class="divcadastro">
            <form action="./Controller/login.php" method="POST">
                <table>
                    <tr>
                        <td colspan="2" class="title_cadas">Login</td>
                    </tr>
                    <tr class="EmailLine">
                        <td class="Email1">E-mail:</td>
                        <td class="Email2"><input type="email" id="EMAILcadastro" name="email" required></td>
                    </tr>
                    <tr class="SenhaLine">
                        <td class="Senha1">Senha:</td>
                        <td class="Senha2"><input type="password" maxlength="16" name="senha" id="SENHAcadastro"
                                required></td>
                    </tr>
                    <tr>
                        <td colspan="2" class="cadastrar"><input id="BTNcadastro" type="submit" value="LOGIN"></td>
                    </tr>
                </table>
            </form>
        </div>
    </center>
</body>

</html>