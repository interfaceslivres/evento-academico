 <?php
get_header();
?>


   <div id="registrado" data-role="page">
        <div class="wrapper">
            <header data-role="header">
                <div id="header-div">
                    <span>
                    <a href="<?php echo site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo do Site" class="evento-logo-image" id="tamanho-logo"></a>
                </span>
                </div>
            </header>

            <main style="overflow: hidden;">

                <div style="text-align:center;">
                    <h1 class="font-quicksand resultado-title">Seu evento foi registrado com sucesso!</h1>
                    <p class="font-montserrat resultado-body" style="text-align:center;">Ele será analisado pela administração e deve ser aprovado em breve.</p>
                </div>

                <div class="botao-interna-center">
                    <div class="boldbluebg" style="height: 75px; width: 75px; float: left;">
                        <a href="<?php echo site_url(); ?>" class="link-style-clear"><h5 id="pesquisar-button-2" class="font-quicksand font-bolder font-biggest"><</h3></a>
                    </div>
                    <div class="bluebg div-botao-interna">
                        <a href="<?php echo site_url(); ?>" class="link-style-clear"><h3 id="pesquisar-button-1" class="font-montserrat font-bold" style="line-height: 35px;">Voltar</h5></a>
                    </div>
                </div>

                  <footer class="footer-padding div-center">
                    <p style="text-align:center;">APOIO</p>
                    <center>
                        <div id="logo-footer-container" class="div-center">
                            <a href="https://github.com/interfaceslivres/"><img src="<?php echo get_template_directory_uri(); ?>/img/logointerfaces.png" alt="Logo do Interfaces Livres" class="logo-footer grayscale"></a>
                            <a href="https://www.ufpb.br/"><img src="<?php echo get_template_directory_uri(); ?>/img/logoufpb.png" alt="Logo da UFPB" class="logo-footer grayscale"></a>
                        </div>
                    </center>

                    <div style="clear:both; padding-bottom: 10px;"></div>
                    <div style="text-align:center;">
                        <p class="footer-typography"><a href="#" class="link-style-clear">Políticas de Privacidade</a><a href="#" class="link-style-clear">Termos de Uso</a><a href="#" class="link-style-clear">Sobre</a></p>
                    </div>
                </footer>


            </main>
        </div>
    </div>

<?php get_footer(); ?>