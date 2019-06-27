        <div class="footer_wrap ">
                <footer id="form_contact">
                    <img class="footer_fondo" src="<?php echo home_url(); ?>/wp-content/themes/limpdex/images/fondo.jpg" alt="Limpdexa">
                        <div class="row_contact">
                            <h2>CONTACTENOS</h2>
                            <div class="telf">
                              <h3>Direccion</h3>
                              <span>LIMA_PERU</span>
                              <p class="direccion">Calle Ricardo bentin # 679 Urb.Ventura Rossi _ Rimac _ Lima</p>
                            </div>
                            <div class="telf">
                              <h3>Central telefonica</h3>
                              <p class="fijo">01-3820642</p>
                              <p class="celular">981286088</p>

                            </div>
                            <div class="telf">
                                <h3>Correos</h3>
                                <a href=""><p>ventas@limpexa.com</p></a>
                                <div class="rrss">
                                    <ul>
                                        <a href=""><li class="fb"></li></a>
                                        <a href=""><li class="int"></li></a>
                                        <a href=""><li class="yt"></li></a>
                                    </ul>
                                </div>
                            </div>

                        </div>
                        <div class="row_contact_rigth">
                            <form action="/my-handling-form-page" method="post">
                                <div>
                                    <label for="name">Nombre</label>
                                    <input type="text" id="name">
                                </div>
                                <div>
                                    <label for="empresa">Empresa</label>
                                    <input type="text" id="empresa">
                                </div>
                                <div>
                                    <label for="telefono">Teléfono</label>
                                    <input type="tel" id="numero">
                                </div>
                                <div>
                                    <label for="mail">Correo</label>
                                    <input type="email" id="mail">
                                </div>
                                <div>
                                    <label for="msg">Mensaje:</label>
                                    <textarea id="msg"></textarea>
                                </div>
                                <input class="button_form" type="button" value="Enviar formulario">
                            </form>
                        </div>
                        <div id="ddrr">
                            Limpdexa 2019- Derechos Reservados
                        </div>

                    </footer>


            <div class="clearfix"></div>

        </div><!-- /footer_wrap -->

        </div><!-- /wrap -->



    <div id="comprar" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="comprarLabel" style="display:none">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content modal-general">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <form id="frm-shop" class="frm-shop" method="POST" action="">
                        <div class="row">
                            <div class="col-xs-12">
                                <h2>AUTO DRAIN</h2>
                            </div>
                        </div>
                        <div class="row">
                          <div class="col-xs-6">
                            <input type="text" class="form-control" placeholder="NOMBRE" required>
                          </div>
                          <div class="col-xs-6 right">
                            <input type="text" class="form-control" placeholder="APELLIDOS" required>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-xs-6">
                            <input type="email" class="form-control" placeholder="EMAIL" required>
                          </div>
                          <div class="col-xs-6 right">
                            <input type="text" class="form-control" placeholder="TELÉFONO">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-xs-12">
                            <textarea class="form-control" rows="3" placeholder="DETALLE"></textarea>
                          </div>
                        </div>
                        <div class="row modal-footer">
                            <div class="col-xs-12">
                                <button type="submit" class="btn btn-default">PEDIRLO</button>
                                <img src="<?php echo home_url()?>/wp-content/themes/limpdex/images/limpdexa.png">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- WP_Footer -->
    <?php wp_footer(); ?>
    <!-- /WP_Footer -->
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo home_url();?>/wp-content/themes/limpdex/css/slider-prod.css">
    <script src="<?php echo home_url();?>/wp-content/themes/limpdex/js/jquery.flexisel.js"></script>
    <script>
        window.onload = function() {
            jQuery('.woocommerce .products').find('h2').text('TAMBIÉN PODRÍA INTERESARTE');
            jQuery("#prouct-related-limp ul").flexisel({
                visibleItems: 4,
                itemsToScroll: 1,
                autoPlay: {
                    enable: true,
                    interval: 5000,
                    pauseOnHover: true
                }
            });

            var padre = jQuery('.product-categories .cat-parent');
            padre.click(function() {
                padre.find('.children').css('display', 'block');
            });

            $(padre).mouseover(function() {
                $( this ).find('.children').css('display', 'block');
              })
              .mouseout(function() {
                $( this ).find('.children').css('display', 'block');
                console.log('chaufa...');
              });
        }
        //jQuery('#comprar').modal();
    </script>
    </body>
</html>