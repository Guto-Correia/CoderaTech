<footer>

            <?php 
            // pagar o nome da página atual via url
            $pgAtual = basename(path: $_SERVER['REQUEST_URI']);
            // echo( $pgAtual );
            ?>

            <div class="container">

                <div class="logo">
                    <a href="index.html"><img src="img/logo.svg" alt="logo da coderatech"></a>
                </div>

                <div class="nave">
                    <ul>
                        <li>
                            <a href="index.php" class=" <?= ($pgAtual == "index.php") ? 'ativo' : '' ?>">Home</a>
                        </li>
                        <li>
                            <a href="sobre.php" class=" <?= ($pgAtual == "sobre.php") ? 'ativo' : '' ?>">Sobre</a>
                        </li>
                        <li>
                            <a href="#" class=" <?= ($pgAtual == "equipe.php") ? '' : '' ?>">Equipe</a>
                        </li>
                        <li>
                            <a href="contatoPg.php" class=" <?= ($pgAtual == "contato.php") ? 'ativo' : '' ?>">Contato</a>
                        </li>
                    </ul>
                </div>

                <div class="redes">
                    <h3>Siga-nos nas redes sociais</h3>
                    <div>
                        <a href="#">
                        <img src="img/face.png" alt="link para o nosso facebook">
                        </a>
                        <a href="#">
                        <img src="img/insta.png" alt="link para o nosso instagran">
                        </a>
                        <a href="#">
                        <img src="img/linkedin.png" alt="link para o nosso linkedin">
                        </a>
                        <a href="#">
                        <img src="img/github.png" alt="link para o nosso github">
                        </a>
                    </div>
                </div>

                <div class="end">
                <h2>CONTATE-NOS</h2>
                <p>Av Marechal tito, 1500</p>
                <p>São Miguel Paulista - São Paulo - SP</p>
                <a href="#">coderatech@smpsistema.com.br</a>
                <a href="#">(11) 99999-9999</a>
                </div>
                                
            </div>
            <div class="container">
                <p>Copyright©</p>
                <p>Desenvolvido por CODERATECH</p>
            </div>
          
    </footer>