 <?php
/*
Template Name: Search Page
*/
?>

<?php get_header(); ?>


 <div id="pesquisar" data-role="page">
        <div class="wrapper">
            <header data-role="header">
                <div>
                    <span>
					<a href="#home" data-rel="back"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo do Site" class="evento-logo-image" id="tamanho-logo"></a>
				</span>
                </div>
            </header>

            <main style="overflow:hidden;">


                <div id="forms">


                <?php get_search_form(); ?>

                <?php
global $query_string;

$query_args = explode("&", $query_string);
$search_query = array();

if( strlen($query_string) > 0 ) {
    foreach($query_args as $key => $string) {
        $query_split = explode("=", $string);
        $search_query[$query_split[0]] = urldecode($query_split[1]);
    } // foreach
} //if

$search = new WP_Query($search_query);
?>

                    <div style="margin-top: 50px" ;>
                        <div class="div-center form-size">
                            <select>
                                <option value="" disabled selected hidden>Área de Conhecimento</option>
                                <option value="1">Saúde</option>
                                <option value="2">Tecnologia</option>
                                <option value="3">Ciências Biológicas</option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <div class="div-center form-size">
                            <select id="estado1" value=""></select>
                        </div>
                    </div>

                    <div>
                        <div>
                            <form action="#">
                                <div class="div-center form-size input-list style-4">
                                    <select id="cidade1" value=""></select>
                                    <script language="JavaScript" type="text/javascript" charset="utf-8">
                                        new dgCidadesEstados({
                                            cidade: document.getElementById('cidade1'),
                                            estado: document.getElementById('estado1')
                                        })
                                    </script>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div>
                        <div>
                            <form action="#">
                                <div class="div-center form-size input-list style-4">
                                    <input type="text" id="keywords" placeholder="Palavras-Chave" />
                                </div>
                            </form>
                        </div>
                    </div>

                    <div>
                        <div>
                            <form action="#">
                                <div class="div-center form-size">
                                    <input id="start-date" type="text" id="start-date" placeholder="Início" />
                                </div>
                            </form>
                        </div>
                    </div>

                    <div>
                        <div>
                            <form action="#">
                                <div class="div-center form-size">
                                    <input id="end-date" type="text" id="start-date" placeholder="Fim" />
                                    <script>
                                        $('#start-date').Zebra_DatePicker({
                                            direction: true,
                                            view: 'years',
                                            pair: $('#end-date')
                                        });

                                        $('#end-date').Zebra_DatePicker({
                                            direction: 1,
                                            view: 'years'
                                        });
                                    </script>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>

                <div class="botao-interna-center">
                    <div class="bluebg div-botao-interna">
                        <a data-transition="slide" href="#resultados" class="link-style-clear"><h3 id="pesquisar-button" class="font-montserrat font-bold">Pesquisar</h3></a>
                    </div>
                    <div class="boldbluebg" style="height: 75px; width: 75px; float: left;">
                        <a data-transition="slide" href="#resultados" class="link-style-clear"><h5 id="pesquisar-button-2" class="font-quicksand font-bolder font-biggest">></h5></a>
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