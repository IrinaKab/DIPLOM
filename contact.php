<?php require_once("header.php");?>
        <!-- header close -->

        <!-- content begin -->
        <div id="content" class="no-bottom no-top">
            <div id="top"></div>

            <!-- section begin -->
            <section id="subheader" class="text-light" data-bgimage="url(images/background/14.jpg)" data-stellar-background-ratio=".2">
                <div class="overlay-bg t50">

                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h1>Контакты</h1>
								<p>Свяжитесь с нами</p>
                            </div>
                        </div>
                    </div>

                </div>

            </section>
            <!-- section close -->

            <!-- section begin -->
            <section id="section-contact" data-bgcolor="#f9f9f9">
                <div class="container">
                    <div class="row">

                        <div class="col-md-8 mb-md-30">
                            <form name="contactForm" id='contact_form' class="de_form" method="post" action='email.php'>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="field-set">
                                            <input type='text' name='name' id='name' class="form-control" placeholder="Ваше имя">
                                            <div class="line-fx"></div>
                                        </div>

                                        <div class="field-set">
                                            <input type='text' name='email' id='email' class="form-control" placeholder="Ваш Email">
                                            <div class="line-fx"></div>
                                        </div>

                                        <div class="field-set">
                                            <input type='text' name='phone' id='phone' class="form-control" placeholder="Ваш телефон">
                                            <div class="line-fx"></div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="field-set">
                                            <textarea name='message' id='message' class="form-control" placeholder="Ваше сообщение"></textarea>
                                            <div class="line-fx"></div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div id='submit'>
                                            <input type='submit' id='send_message' value='Отправить' class="btn btn-custom color-2">
                                        </div>
                                        <div id='mail_success' class='success'>Ваше сообщение было успешно отправлено.</div>
                                        <div id='mail_fail' class='error'>Извините, на этот раз произошла ошибка при отправке вашего сообщения.</div>
                                    </div>


                                </div>
                            </form>

                        </div>

                        <div class="col-md-4">
                            <h6 class="id-color">Телефон</h6>
                            <a href="tel^(208) 333 9296">+7 (499) 777 7777</a>
                            <div class="spacer-single"></div>
                            <h6 class="id-color">Адрес</h6>
                            Красная Площадь, Москва, РФ
                            <div class="spacer-single"></div>
                            <h6 class="id-color">Email</h6>
                            <a href="mailto:contact@bolostudio.com">contact@bolostudio.com</a>
                        </div>

                    </div>

                </div>
            </section>
            <!-- section close -->

        </div>
        <!-- content close -->

        <!-- footer begin -->
        <?php require_once("footer.php");?>