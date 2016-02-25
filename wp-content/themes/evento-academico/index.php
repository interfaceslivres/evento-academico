<?php get_header(); ?>

    <div id="home" data-role="page">
        <div class="wrapper">
            <header data-role="header">
                <div id="header-div">
                    <span>
					<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo do Site" class="evento-logo-image" id="tamanho-logo">
				</span>
                </div>
            </header>

            <main style="overflow: hidden;">

                <div id="quemsomos">


                    <?php while ( have_posts() ) : the_post() ?>

                        <h1 class="font-montserrat font-bold font-slogan"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
                    

                    <?php endwhile; ?> 


                        <!--
                        <h3 class="font-montserrat font-bold font-slogan-mini">Somos blablabla
    						<span id="more" class="font-quicksand font-bold">></span>
    					</h3>
                        <?php // get_sidebar(); ?>   é uma opção -->

                </div>

                <div class="row">
                    <div class="ui-block-a">
                        <a data-transition="slide" href="http://localhost/evento-academico-old/?page_id=69" class="link-style-clear">
                            <div class="bluebg middle-button-height">
                                <h3 class="font-montserrat font-bold middle-20">Pesquisar</h3>
                            </div>
                        </a>
                    </div>
                    <div class="ui-block-b">
                        <div class="boldbluebg middle-button-height">
                            <div class="font-quicksand font-bolder middle-50 font-biggest" style="text-align:center;"><a data-transition="slide" href="http://localhost/evento-academico-old/?page_id=20" class="link-style-clear">></a></div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="ui-block-a">
                        <a data-transition="slide" href="http://localhost/evento-academico-old/?page_id=20" class="link-style-clear">
                            <div class="orangebg middle-button-height">
                                <h3 class="font-montserrat font-bold middle-20">Registrar Evento</h3>
                            </div>
                        </a>
                    </div>
                    <div class="ui-block-b">
                        <div class="boldorangebg	 middle-button-height">
                            <div class="font-quicksand font-bolder middle-50 font-biggest" style="text-align:center;"><a data-transition="slide" href="http://localhost/evento-academico-old/?page_id=20" class="link-style-clear">></a></div>
                        </div>
                    </div>
                </div>

                <div>
                    <div id="newsletter" class="newsletter-section">
                        <a data-transition="slide" href="#newsletter-interna" class="link-style-clear"><h1 class="font-montserrat font-bold font-slogan-newsletter">Deseja receber informações<br>em seu e-mail?</h1>
                        <h3 class="font-montserrat font-bold font-slogan-mini">Assine nosso Newsletter
                            <span id="more" class="font-quicksand font-bold">></span>
                        </h3></a>
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

    


    <div id="registrado" data-role="page">
        <div class="wrapper">
            <header data-role="header">
                <div id="header-div">
                    <span>
						<a data-transition="fade" href="#home"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo do Site" class="evento-logo-image" id="tamanho-logo"></a>
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
                        <a data-rel="back" href="#registrar" class="link-style-clear"><h5 id="pesquisar-button-2" class="font-quicksand font-bolder font-biggest"><</h3></a>
                    </div>
                    <div class="bluebg div-botao-interna">
                        <a data-rel="back" href="#registrar" class="link-style-clear"><h3 id="pesquisar-button-1" class="font-montserrat font-bold" style="line-height: 35px;">Voltar</h5></a>
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

    <div id="newsletter-interna" data-role="page">

        <div class="wrapper">
            <header data-role="header">
                <div id="header-div">
                    <span>
						<a data-transition="fade" href="#home"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo do Site" class="evento-logo-image" id="tamanho-logo"></a>
					</span>
                </div>
            </header>

            <main style="overflow: hidden;">

                <div style="text-align:center;">
                    <h1 class="font-quicksand resultado-title">Assine nosso Newsletter!</h1>
                    <p class="font-montserrat resultado-body" style="text-align:center;">Não enviamos spam.
                        <br>Selecione suas áreas de interesse e manteremos você atualizado dos eventos próximos!</p>

                    <div style="padding-top: 30px;">
                        <div>
                            <form action="#">
                                <div class="div-center form-size2 input-list style-4">
                                    <input type="email" pattern="[^ @]*@[^ @]*" placeholder="E-mail" />
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="squaredThree">
                        <input type="checkbox" value="None" id="squaredThree" name="check" />
                        <label for="squaredThree"></label>
                        <p>Ciências Biológicas</p>
                    </div>

                </div>

                <div class="botao-interna-center">
                    <div class="boldbluebg" style="height: 75px; width: 75px; float: left;">
                        <a data-rel="back" href="#registrar" class="link-style-clear"><h5 id="pesquisar-button-2" class="font-quicksand font-bolder font-biggest"><</h3></a>
                    </div>
                    <div class="bluebg div-botao-interna">
                        <a data-rel="back" href="#registrar" class="link-style-clear"><h3 id="pesquisar-button-1" class="font-montserrat font-bold" style="line-height: 35px;">Voltar</h5></a>
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