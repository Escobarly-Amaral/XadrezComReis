<!DOCTYPE html>
<html lang="Pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xadrez Com Reis - Página Inicial</title>
    <link href="estilo.css" type="text/css" rel="stylesheet">
</head>

<body>
    <div class="header">
        <div class="logo">
            <p class="text1">Xadrez Com Reis</p>
        </div>
        <div class="H-items">
            <div class="HI1"><a class="text2 activetext" href="index.php">Página Inicial</a></div>
            <div class="HI2"><a class="text2" href="#">Torneio</a></div>
            <div class="HI3"><a class="text2" href="jogar.php">Jogar</a></div>
            <div class="HI4"><a class="text2" href="Login.php">Login</a></div>
        </div>
    </div>
    <form action="controller/login.php" method="post">
        <div class="logindiv">
            <div class="M2-section-1">
                <p class="text9">LOGIN</p>
            </div>
            <div class="M2-section-2">
                <div class="M2S2-1">
                    <p class="text2">EMAIL:</p>
                    <input class="caixasinput" required type="email" name="email_LOGIN"
                        placeholder="Coloque seu E-Mail!!!">
                </div>
                <div class="M2S2-2">
                    <p class="text2">SENHA:</p>
                    <input class="caixasinput" required type="password" name="senha_LOGIN"
                        placeholder="Coloque sua Senha!!!">
                </div>
                <div class="M2S2-3">
                    <input class="btnlogar" type="submit" name="login" value="LOGAR">
                </div>
                <hr>
                <div class="M2S2-4">
                    <p class="text8">É novo?</p>&nbsp;<a href="#" onclick="changeloginmenu()"
                        class="text8 register">Cadastre-se Aqui!!!</a>
                </div>
            </div>
        </div>
    </form>
    <form action="controller/register.php" method="post">
        <div class="div-off registerdiv">
            <div class="M2-section-1">
                <p class="text9">REGISTER</p>
            </div>
            <div class="M2-section-2">
                <div class="M2S2-0">
                    <p class="text2">NOME:</p>
                    <input class="caixasinput" required type="text" name="nome_REG" placeholder="Coloque seu Nome">
                </div>
                <div class="M2S2-1">
                    <p class="text2">EMAIL:</p>
                    <input class="caixasinput" required type="email" name="email_REG" placeholder="Coloque seu E-Mail">
                </div>
                <div class="M2S2-2">
                    <p class="text2">SENHA:</p>
                    <input class="caixasinput" required type="password" name="senha_REG"
                        placeholder="Coloque sua Senha!!!">
                </div>
                <div class="M2S2-3">
                    <input class="btnlogar" type="submit" name="register" value="REGISTRAR">
                </div>
                <hr>
                <div class="M2S2-4">
                    <p class="text8">Já está Cadastrado?</p>&nbsp;<a href="#" onclick="changeloginmenu()"
                        class="text8 login">Acesse sua Conta Aqui!!!</a>
                </div>
            </div>
        </div>
    </form>
    <div class="footer">
        <div class="footer-container-1">
            <div class="FC1-1">
                <div class="logo2">
                    <p class="text1">Xadrez Com Reis</p>
                </div>
            </div>
            <div class="FC1-2">
                <div class="FC1-2-1">
                    <p class="text4">Xadrez com Reis oferece uma plataforma para marcar e participar de torneios online.
                        Crie seus próprios torneios ou participe dos eventos já disponíveis!!!</p>
                </div>
            </div>
        </div>
        <div class="footer-container-2">
            <div class="FC2-1">
                <div class="FC2-1-1"><a class="text6" href="#">Página Inicial</a></div>
                <div class="FC2-1-2"><a class="text6" href="#">Torneio</a></div>
                <div class="FC2-1-3"><a class="text6" href="#">Jogar</a></div>
                <div class="FC2-1-4"><a class="text6" href="#">Login</a></div>
            </div>
            <div class="FC2-2">
                <p class="text5">@2024 Xadrez Com Reis, inc.All rights reserved</p>
            </div>
        </div>
        <div class="footer-container-3">
            <div class="FC3-1">
                <p class="text7">Developed by</p>
                <p class="text1">Escobarly Amaral</p>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>

</html>