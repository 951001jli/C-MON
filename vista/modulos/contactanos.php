<header class="header-conta"></header>

<div class="contact">
    <div class="container">
        <div class="section-header text-center">
            <p>Tu opinión es importante</p>
            <h2>Nos interesan tus comentarios o dudas</h2>
        </div>
        <div class="row contact-form">

            <div class="col-md-6">
                <div id="success"></div>
                <form name="sentMessage" id="contactForm" novalidate="novalidate">
                    <div class="control-group">
                        <input type="text" class="form-control" id="name" placeholder="Nombre completo" required="required" data-validation-required-message="Por favor, ingresa tu nombre completo" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="email" class="form-control" id="email" placeholder="Correo Electrónico" required="required" data-validation-required-message="Por favor, introduce tu correo electrónico" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" class="form-control" id="subject" placeholder="Asunto del mensaje" required="required" data-validation-required-message="Agrega un asunto" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <textarea class="form-control" id="message" placeholder="Mensaje" required="required" data-validation-required-message="Tu opinión es importante, por favor, ingresa tu mensaje"></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                    <div>
                        <button class="btn custom-btn" type="submit" id="sendMessageButton">Enviar</button>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
            <img src="<?php echo $ruta . "/" ?>img/k.jpg" alt="Image">
             </div>
        </div>

    </div>
</div>
<!-- Contact End -->