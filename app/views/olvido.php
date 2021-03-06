<section class="vh-100" style="background-color: #CDC3DA;">
    <div class="row d-flex justify-content-center  align-items-center h-100">
        <div class="col col-xl-10 ">
            <div class="card " style="border-radius: 1rem 1rem;">
                <div class="row g-0">
                    <div class="col-md-6 col-lg-5 d-none  d-md-block">
                        <img src="<?php echo BASE_URL; ?>app/assets/fotos/modelo3.jpg" alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                    </div>

                    <div class="col-md-6 col-lg-7 d-flex  align-items-center">
                        <div class="card-body px-4 p-lg-5 text-black">

                            <!--      LOGIN      -->
                            <h1 class="fw-bold text-center p-2 m-2">Recuperar Contraseña</h1>

                            <?php if (isset($error)) {

                                echo "<div class='alert alert-danger text-center'>";

                                echo "<strong>* " . $error . "</strong><br>";

                                echo "</div>";
                            }
                            ?>

                            <form action="<?php print BASE_URL; ?>Inicio/recuperaPass" method="POST">

                                <div class="row py-3">
                                    <div class="col-12 col-md-8 pb-3">
                                        <label for="usuario"></label>
                                        <input type="text" class="form-control" id="usuario" placeholder="Correo electrónico" name="usuario" required>
                                    </div>

                                    <div class="form-group pt-1 my-2 mx-2 ">
                                        <input type="submit" class="btn btn-dark btn-lg btn-block" value="Enviar contraseña" ><br>
                                        <div class="pb-lg-2">
                                         
                                        </div>
                                    </div>

                            </form>
                            <div class="row">
                                <div class="pb-lg-2 my-2">
                                   

                                    <p class=" small text-muted pb-lg-2 my-2" style="color: #393f81;">¿No tienes cuenta?
                                        <a class="big text-muted my-2" href="<?php print BASE_URL; ?>Inicio/registro">Darse de alta </a>
                                    </p>
                                    <p class=" small text-muted pb-lg-2 my-2" style="color: #393f81;"> <a href="<?php print BASE_URL; ?>Inicio/index" style="color: #393f81;">Volver</a></p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div> <!-- FIN ROW -->



        </div>
    </div>
</section>