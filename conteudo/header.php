 <header class="topo">
        <div class="container">

           <?php 
            // pagar o nome da página atual via url
            $pgAtual = basename(path: $_SERVER['REQUEST_URI']);
            // echo( $pgAtual );
            ?>
            

            <nav>
                <ul>
                    <li><a href="index.php" class=" <?= ($pgAtual == "index.php") ? 'ativo' : '' ?>">Home</a></li>
                    <li><a href="sobre.php" class=" <?= ($pgAtual == "sobre.php") ? 'ativo' : '' ?>">Sobre</a></li>
                    <li><a href="#" class=" <?= ($pgAtual == "equipe.php") ? '' : '' ?>">Equipe</a></li>
                    <li><a href="contatoPg.php" class=" <?= ($pgAtual == "contatoPg.php") ? 'ativo' : '' ?>">Contato</a></li>
                </ul>
            </nav>
            <a href="index.php" id="logo">
                <h1>Transformamos cliques em conexões</h1>
            </a>
            <ul>
                <li><a href="#" class=" <?= ($pgAtual == "login.php") ? '' : '' ?>">Login</a></li>
                <li><a href="#" class=" <?= ($pgAtual == "cadastro.php") ? '' : '' ?>">Cadastre-se</a></li>
            </ul>
        </div>
    </header>