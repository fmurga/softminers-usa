<div class="col-lg-10 offset-lg-2 col-md-12 col-xs-12 p-0">
    <div class="row">
        <div class="col-lg-12">
            <div class="contact-text section-header text-center">
                <div>
                    <h2 class="section-title " style="color: white;">Contáctenos</h2>
                </div>
            </div>
        </div>

    </div>
    <!-- End Row -->
    <!-- Start Row -->
    <div class="row">
        <!-- Start Col -->
        <div class="col-lg-12 col-md-12 col-xs-12">
            <form id="contactForm" action="../campaigns/php/form-process.php" method="post">
                <input type="hidden" name="recaptcha_response" id="recaptchaResponse">
                <input type="hidden" name="campaign" id="campaign" placeholder="usa" defaultValue="usa" value="usa">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" name="name"
                                placeholder="Nombre y Apellido" required
                                data-error="Por favor ingresar nombre y apellido">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" placeholder="Empresa" id="msg_subject" class="form-control"
                                name="msg_subject" required data-error="Por favor ingresar su empresa">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" id="email" name="email" placeholder="Email" required
                                data-error="Por favor ingresar un email">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" placeholder="Teléfono" id="phone" class="form-control" name="phone"
                                required data-error="Por favor ingresar un teléfono">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <textarea class="form-control" id="message" name="message" placeholder="Mensaje Adicional"
                                rows="4" data-error="Escriba un mensaje" required></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="submit-button">
                            <button class="btn btn-common" id="submit" type="submit">Contactar</button>
                            <div id="msgSubmit" class="h3 hidden"></div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!-- End Col -->

    </div>
    <!-- End Row -->
</div>