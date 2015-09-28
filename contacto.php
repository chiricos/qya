<?php include('header.php'); ?>

    <div id="wrapper-contacto">
            <div class="title"><h1>CONTÁCTO</h1></div>

        <div class="contactenos">
            <figure class="img-contacto">
                <img src="images/contacto.jpg">
            </figure>
            <div class="formulario">
                <form>
                    <p>Contáctenos</p>
                    <label>Nombre:</label>
                    <input type="text" name="nombre">
                    <label>Correo:</label>
                    <input type="email" name="correo">
                    <label>Motivo</label>
                    <input type="text" name="motivo">
                    <label>Mensaje</label>
                    <textarea name="mensaje"></textarea>
                    <button>Enviar</button>
                </form>
            </div>

            <div class="info-contacto">
                <div class="text-contacto">
                    <p class="text-title">BOGOTÁ-COLOMBIA</p>
                    <p class="text-body">
                        Calle 67 No 7-35, Edificio Plaza 67, Torre A oficina 1103<br>
                        (+571)3122273 / 3122149 / 3220689
                    </p>
                    <p class="text-title">MEDELLÍN-COLOMBIA</p>
                    <p class="text-body">
                        Calle 6 No 43C - 8 Oficina 204, Oficentro Astorga<br>
                        Tel. (+57-4)2667595
                    </p>
                </div>

            </div>
        </div>


    </div>

<?php include('footer.php');