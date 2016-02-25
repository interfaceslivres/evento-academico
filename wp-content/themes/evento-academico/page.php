 <?php get_header(); ?>


    <div id="registrar" data-role="page">
        <div class="wrapper">
            <header data-role="header">
                <div>
                    <span>
                    <a href="#home" data-rel="back"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo do Site" class="evento-logo-image" id="tamanho-logo"></a>
                </span>
                </div>
            </header>

            <main style="overflow:hidden;">

                <div style="padding-top: 30px;">
                    <div>
                        <form action="#">
                            <div class="div-center form-size2 input-list style-4">
                                <input type="text" id="title" placeholder="Título" />
                            </div>
                        </form>
                    </div>
                </div>

                <div style="margin-top: 12px" ;>
                    <div class="div-center form-size2">
                        <select>
                            <option value="" disabled selected hidden>Área de Conhecimento</option>
                            <option value="1">Saúde</option>
                            <option value="2">Tecnologia</option>
                            <option value="3">Ciências Biológicas</option>
                        </select>
                    </div>
                </div>

                <div>
                    <div class="div-center form-size2">
                        <select id="estado2" value=""></select>
                    </div>
                </div>

                <div>
                    <div>
                        <form action="#">
                            <div class="div-center form-size2 input-list style-4">
                                <select id="cidade2" value=""></select>
                                <script language="JavaScript" type="text/javascript" charset="utf-8">
                                    new dgCidadesEstados({
                                        cidade: document.getElementById('cidade2'),
                                        estado: document.getElementById('estado2')
                                    })
                                </script>
                            </div>
                        </form>
                    </div>
                </div>

                <div>
                    <div>
                        <form action="#">
                            <div class="div-center form-size2">
                                <input id="prazoprojeto" type="text" placeholder="Prazo de Submissão" />
                                <script>
                                    $('#prazoprojeto').Zebra_DatePicker({
                                        direction: 1,
                                        view: 'years'
                                    });
                                </script>
                            </div>
                        </form>
                    </div>
                </div>

                <div>
                    <div>
                        <form action="#">
                            <div class="div-center form-size2 input-list style-4">
                                <input type="text" id="event-site" placeholder="Site do Evento" />
                            </div>
                        </form>
                    </div>
                </div>

                <div>
                    <div>
                        <form action="#">
                            <div class="div-center form-size2">
                                <input id="start-date2" type="text" id="start-date" placeholder="Início" />
                            </div>
                        </form>
                    </div>
                </div>

                <div>
                    <div>
                        <form action="#">
                            <div class="div-center form-size2">
                                <input id="end-date2" type="text" id="start-date" placeholder="Fim" />
                                <script>
                                    $('#start-date2').Zebra_DatePicker({
                                        direction: true,
                                        view: 'years',
                                        pair: $('#end-date2')
                                    });

                                    $('#end-date2').Zebra_DatePicker({
                                        direction: 1,
                                        view: 'years'
                                    });
                                </script>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="botao-interna-center">
                    <div class="orangebg div-botao-interna">
                        <a data-transition="slide" href="#registrado" class="link-style-clear"><h3 id="pesquisar-button" class="font-montserrat font-bold">Registrar</h3></a>
                    </div>
                    <div class="boldorangebg" style="height: 75px; width: 75px; float: left;">
                        <a data-transition="slide" href="#registrado" class="link-style-clear"><h5 id="pesquisar-button-2" class="font-quicksand font-bolder font-biggest">></h5></a>
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