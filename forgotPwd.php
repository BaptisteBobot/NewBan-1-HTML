<?php
require ('include/header.php');
?>
    <div class="lol container">
        <!-- Default form login -->
        <form class="text-center border border-light p-5 login" action="#!">

            <p class="h4 mb-4">Mot de passe oublié? </p>

            <!-- Email -->
            <input type="email" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="E-mail">
            <div class="d-flex justify-content-around">
                <div>
                </div>
            </div>

            <!-- Sign in button -->
            <button class="btn btn-info btn-block my-4" type="submit">Envoyer</button>

        </form>
    </div>
<?php
require ('include/footer.php');