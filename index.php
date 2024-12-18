<!DOCTYPE html>
<html lange="pt-br">
    <head>
        <title>Loja Virtual - GAMETECH</title>
        <link rel="stylesheet" type="text/css" href="./CSS/style.css" />
        <link rel="shortcut icon" type="image/png" href="" sizes="32x32" />
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="keywords" content="Games, Jogos, Gamer, PC, PC Gamer, Gamer, Periféricos" />
        <meta name="description" content="Site de loja virtual que vende PCs, Consoles, Acessórios e Periféricos Gamers" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <meta name="generator" content="Visual Studio Code" />
    </head>
    <body>
        <header class="menu-principal">

            <input type="checkbox" id="chec" />
            <label for="chec">
                <img class="img-menu" src="./IMG/menu.png" title="Mais +" alt=""/>
            </label>

            <nav>
                <ul>
                    <li><a class="a-1" href="#">Conta</a></li>
                    <li>
                        <a class="a-1" href="#">Meus Dados</a>
                    </li>
                    <li>
                        <a class="a-1" href="#">Meus Pedidos</a>
                    </li>
                    <li>
                        <a class="a-1" href="#">Hardware</a>
                    </li>
                    <li>
                        <a class="a-1" href="#">Computadores</a>
                    </li>
                    <li>
                        <a class="a-1" href="#">Consoles</a>
                    </li>
                </ul>
            </nav>
            
            <div class="header">
                <div class="header-1">
                    <h1>GAMETECH</h1>
                </div>
                <div class="redes-sociais">
                    <ul>
                        <li>
                            <a href="#">
								<img src="./IMG/instagram.png" title="Instagram"/>
							</a>
                        </li>
                        <li>
                            <a href="https://pt-br.facebook.com">
								<img src="./IMG/facebook-new.png" title="Facebook"/>
							</a>
                        </li>
                        <li>
                            <a href="https://twitter.com/login?lang=pt">
								<img src="./IMG/twitter.png" title="Twitter"/>
							</a>
                        </li>
                        <li>
                            <a href="https://br.linkedin.com">
								<img src="./IMG/linkedinn.png" title="Linkedin"/>
							</a>
                        </li>
                        <li>
                            <a href="#">
								<img src="./IMG/whatsapp.png" title="WhatsApp"/>
							</a>
                        </li>
                    </ul>
                </div>
            </div>

        </header>

		<header id="header">
        	<div class="busca">
				<input placeholder="   Pesquisar..." type="text" title="Pesquisar" list="historico"/>
			</div>
            <div class="components-menu-container">
                <ul class="components-list">
                    <li class="components-menu">
                        <h3 class="menu1">INICIO</h3>
                    </li>
					<li class="components-menu">
                        <h3 class="menu border-menu" onclick="window.location.href='./Perifericos/perifericos.php';">PERIFÉRICOS</h3>
                    </li>
                    <li class="components-menu">
                        <h3 class="menu border-menu">COMPUTADORES</h3>
                    </li>
                    <li class="components-menu">
                        <h3 class="menu border-menu">HARDWARE</h3>
                    </li>
                    <li class="components-menu">
                        <h3 class="menu border-menu">CADEIRAS</h3>
                    </li>
                </ul>
				
            </div>
		</header>


    </body>
</html>
