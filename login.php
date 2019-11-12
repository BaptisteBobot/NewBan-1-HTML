<?php
require ('include/header.php');
?>
<div class="lol">
    <!-- Default form login -->
    <form class="text-center border border-light p-5 login" action="#!">

        <p class="h4 mb-4">Connexion</p>

        <!-- Email -->
        <input type="email" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="E-mail">

        <!-- Password -->
        <input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Mot de passe">

        <div class="d-flex justify-content-around">
            <div>
                <!-- Remember me -->
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
                    <label class="custom-control-label" for="defaultLoginFormRemember">Se rappeler de moi</label>
                </div>
            </div>
            <div>
                <!-- Forgot password -->
                <a href="forgotPwd.php">Mot de passe oublié ?</a>
            </div>
        </div>

        <!-- Sign in button -->
        <button class="btn btn-info btn-block my-4" type="submit">Connexion</button>

    </form>
</div>
    <!-- Default form login -->
<?php
require ('include/footer.php');
