<?php 
acf_form_head();
get_header(); 
?>

    <div id="home" data-role="page">
        <div class="wrapper">
            <header data-role="header">
                <div id="header-div">
                    <span>
					<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo do Site" class="evento-logo-image" id="tamanho-logo">
				</span>
                </div>
    <script type="text/javascript">

    $(document).bind('mobileinit',function(){
        $('#acf-field-area_de_conhecimento').attr('data-native-menu', false);
    });
        

    (function($){
        
       // $(document).live('acf/setup_fields', function(e, postbox){
            
            // trigger change on the select field to show selected field
         //   $('#acf-field-localizacao_do_evento').trigger('change');
        
       // });
                
        $('#acf-field-pais').live('change', function(){
            var value = $(this).val();
            if( value == "Brasil" )
            {
                $('#acf-estado').show();
            }
            else if (value == 'brasil'){
                $('#acf-estado').show();
            }
            else
            {
                $('#acf-estado select').attr('value', null);
                $('#acf-estado').hide();
            }            
        });    

        $('#acf-inicio_do_evento').live('change', function(){
            var input = $("#acf-inicio_do_evento input").val();
            var month = input.substring(4,6); 
            var year = input.substring(0,4);
            $('#acf-field-mes').attr('value', (41 + (month*1)));
            $('#acf-field-ano').attr('value', ((year*1) - 1962));
        });

        

    
    })(jQuery);
    </script>
            </header>

            <main style="overflow: hidden;">
                <div class="row">
                    <div class="ui-block-a">
                        <a data-transition="slide" href="#pesquisar" class="link-style-clear">
                            <div class="bluebg middle-button-height">
                                <h3 class="font-montserrat font-bold middle-20">Pesquisar</h3>
                            </div>
                        </a>
                    </div>
                    <div class="ui-block-b">
                        <div class="boldbluebg middle-button-height">
                            <div class="font-quicksand font-bolder middle-50 font-biggest" style="text-align:center;"><a data-transition="slide" href="#pesquisar" class="link-style-clear">></a></div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="ui-block-a">
                        <a data-transition="slide" href="#registrar" class="link-style-clear">
                            <div class="orangebg middle-button-height">
                                <h3 class="font-montserrat font-bold middle-20">Novo Evento</h3>
                            </div>
                        </a>
                    </div>
                    <div class="ui-block-b">
                        <div class="boldorangebg	 middle-button-height">
                            <div class="font-quicksand font-bolder middle-50 font-biggest" style="text-align:center;"><a data-transition="slide" href="#registrar" class="link-style-clear">></a></div>
                        </div>
                    </div>
                </div>

                <!-- parte de eventos -->
                    <div class="quemsomos">
                        <?php while ( have_posts() ) : the_post() ?>
                        <div class="conteudo lightbluebg">
                            <div class="titulos">
                                <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">

                                <div id="data">
                                    <?php the_time('d/m');?>
                                </div>
                                    <h1>
                                        <?php the_title(); ?> 
                                    </h1>
                                    <div id="subtitulo">
                                        <em>Área de conhecimento</em>
                                    </div>
                                </a>
                                <div class="clear"></div>
                            </div>
                        <?php endwhile; ?> 
                            <!--
                            <h3 class="font-montserrat font-bold font-slogan-mini">Somos blablabla
                                <span id="more" class="font-quicksand font-bold">></span>
                            </h3>
                            <?php // get_sidebar(); ?>   é uma opção -->
                        </div>
                
                <div>
                    <div id="newsletter" class="newsletter-section">
                        <a data-transition="slide" href="#newsletter-interna" class="link-style-clear"><h1 class="font-montserrat font-bold font-slogan-newsletter">Deseja receber informações<br>em seu e-mail?</h1>
                        <h3 class="font-montserrat font-bold font-slogan-mini">Assine nosso Newsletter
                            <span id="more" class="font-quicksand font-bold">></span>
                        </h3></a>
                    </div>
                </div>

               
              <?php include 'component-footer.php'; ?>

            </main>
        </div>
    </div>



<!-- ################################# 
##################
##################
################## NEWSLETTER -->


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
                    
                     <div id="form">
                            <?php dynamic_sidebar('form') ?>
                    </div>

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

               
              <?php include 'component-footer.php'; ?>


            </main>
        </div>

    </div>



<!-- ################################# 
##################
##################
################## REGISTRAR -->

    <div id="registrar" data-role="page">
        <div class="wrapper">
            <header data-role="header">
                <div>
                    <span>
                    <a href="<?php echo site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo do Site" class="evento-logo-image" id="tamanho-logo"></a>
                </span>
                </div>
            </header>

            <main style="overflow:hidden;">

                <div style="padding-top: 30px;">
                    <div class="div-center form-size2">
                            
                    
                             <?php
                                $url = site_url();
                                $args = array(
                                    'post_id' => 'new',
                                    'field_groups' => array( 23 ),
                                    'submit_value' => 'Registrar',
                                    'return' => $url . "/?page_id=98"
                                );
                                acf_form( $args );
                            ?>
                           
                    </div>
                </div>

                
              <?php include 'component-footer.php'; ?>
            </main>
        </div>
    </div>


<!-- ################################# 
##################
##################
##################              PESQUISAR -->


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


                <div id="forms" class="div-center form-size2">


                 <?php echo do_shortcode( '[searchandfilter headings="Nome do Evento,Área de Conhecimento,País,Estados,Mês,Ano" taxonomies="search,category,search,estados,meses,ano"  submit_label="Filtrar" search_placeholder=" " post_types="post"]' ); ?>


                    
<!--
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
                    </div>-->
                </div> 

              <?php include 'component-footer.php'; ?>

            </main>
        </div>
    </div>



<?php get_footer(); ?>