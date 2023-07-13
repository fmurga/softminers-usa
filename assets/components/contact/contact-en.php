<div class="col-lg-10 offset-lg-2 col-md-12 col-xs-12 p-0">
    <div class="row">
        <div class="col-lg-12">
            <div class="contact-text section-header text-center">
                <div>
                    <h2 class="section-title mb-3" style="color: white;">Contact Us</h2>
                </div>
            </div>
        </div>

    </div>
    <!-- End Row -->
    <!-- Start Row -->
    <div class="row">
        <!-- Start Col -->
        <div class="col-lg-12 col-md-12 col-xs-12">
            <form id="contactForm" action="/assets/components/contact/form-process.php" method="post">
                <input type="hidden" name="recaptcha_response" id="recaptchaResponse">
                <input type="hidden" name="campaign" id="campaign" placeholder="USA" defaultValue="USA" value="USA">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" name="name"
                                placeholder="Name and Last Name" required
                                data-error="Please enter first and last name">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" placeholder="Company" id="msg_subject" class="form-control"
                                name="msg_subject" required data-error="Please enter your company">
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
                            <input type="text" placeholder="Phone Number" id="phone" class="form-control" name="phone"
                                required data-error="Please enter a phone number">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <textarea class="form-control" id="message" name="message" placeholder="Additional Message"
                                rows="4" data-error="Write an Additional Message" required></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="submit-button">
                            <button class="btn btn-common" id="submit" type="submit">Submit</button>
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