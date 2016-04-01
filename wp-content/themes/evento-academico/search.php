
<?php get_header(); ?>
    <div id="resultados" data-role="page">
        <div class="wrapper">
            <header data-role="header">
                <div id="header-div">
                    <span>
                        <a data-transition="fade" href="<?php echo site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo do Site" class="evento-logo-image" id="tamanho-logo"></a>
                    </span>
                </div>
            </header>

            <main style="overflow: hidden;">

                <div>
                    <?php

                    $s=get_search_query();
                    $args = array(
                                    's' =>$s
                                );
                        // The Query
                    $the_query = new WP_Query( $args );
                    if ( $the_query->have_posts() ) {
                            _e("<h2 style='font-weight:bold;color:#000'>Search Results for: ".get_query_var('s')."</h2>");
                            while ( $the_query->have_posts() ) {
                               $the_query->the_post();
                                     ?>
                                        <li>
                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </li>
                                     <?php
                            }
                        }else{
                    ?>
                            <h2 style='font-weight:bold;color:#000'>Nothing Found</h2>
                            <div class="alert alert-info">
                              <p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
                            </div>
                    <?php } ?>
                </div>

                <div>
                    <h1 class="font-quicksand resultado-title">Bit.Week</h1>
                    <p class="font-montserrat resultado-body">Local: <span>Departamento de Mídias Digitais (DEMID) - UFPB</span></p>
                    <p class="font-montserrat resultado-body">Data: <span>19 de outubro a 24 de outubro de 2015</span></p>
                    <p class="font-montserrat resultado-body">Descrição: <span>O Bit.Week é um evento sobre o potencial das novas mídias e suas aplicações no mercado de trabalho. Assim como as tendências e possibilidades nessa área, nós também estamos em constante mudança, e cada novo fato pode alterar todo o futuro. Só que em vez de DeLorean, a gente usa muita conversa, pesquisa, estudo e diversão. ;)</span></p>
                    <p class="font-montserrat resultado-body">Site: <a href="http://bitweek.com.br/">http://bitweek.com.br/</a></p>
                </div>

                <div class="separador div-center"></div>

                <div>
                    <h1 class="font-quicksand resultado-title">Bit.Week</h1>
                    <p class="font-montserrat resultado-body">Local: <span>Departamento de Mídias Digitais (DEMID) - UFPB</span></p>
                    <p class="font-montserrat resultado-body">Data: <span>19 de outubro a 24 de outubro de 2015</span></p>
                    <p class="font-montserrat resultado-body">Descrição: <span>O Bit.Week é um evento sobre o potencial das novas mídias e suas aplicações no mercado de trabalho. Assim como as tendências e possibilidades nessa área, nós também estamos em constante mudança, e cada novo fato pode alterar todo o futuro. Só que em vez de DeLorean, a gente usa muita conversa, pesquisa, estudo e diversão. ;)</span></p>
                    <p class="font-montserrat resultado-body">Site: <a href="http://bitweek.com.br/">http://bitweek.com.br/</a></p>
                </div>

                <div class="botao-interna-center">
                    <div class="boldbluebg" style="height: 75px; width: 75px; float: left;">
                        <a data-rel="back" href="#pesquisar" class="link-style-clear"><h5 id="pesquisar-button-2" class="font-quicksand font-bolder font-biggest"><</h3></a>
                    </div>
                    <div class="bluebg div-botao-interna">
                        <a data-rel="back" href="#pesquisar" class="link-style-clear"><h3 id="pesquisar-button-1" class="font-montserrat font-bold" style="line-height: 35px;">Voltar</h5></a>
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