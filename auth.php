<?php
require_once("templates/header.php")
    ?>

<div id="main-container" class="container-fluid">
    <div class="col-md-12">
        <div class="row" id="auth-row">
            <div class="col-md-4" id="login-container">
                <h2>Entrar</h2>
                <form action="" method="POST">
                <input type="hidden" name="type" value="login">
                    <div class="form-group">
                        <label for="nickname">Nome de Usuario:</label>
                        <input type="nickname" class="form-control" id="nickname" name="nickname" placeholder="Digite seu usuario">
                    </div>
                </form>
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="password">Senha:</label>
                        <input type="password" class="form-control" id="password" name="password"
                            placeholder="Digite sua senha">
                    </div>
                    <input type="submit" class="btn card-btn" value="Entrar">
                </form>
            </div>
            <div class="col-md-4" id="register-container">
                <h2>Criar Conta</h2>
                <form action="" method="POST">
                    <input type="hidden" name="type" value="register">
                    <div class="form-group">
                        <label for="email">E-mail:</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu e-mail">
                    </div>
                    <div class="form-group">
                        <label for="name">Nome:</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Digite seu nome">
                    </div>
                    <div class="form-group">
                        <label for="lasname">Sobrenome:</label>
                        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Sobrenome">
                    </div>
                    <div class="form-group">
                        <label for="nickname">Usuario:</label>
                        <input type="text" class="form-control" id="nickname" name="nickname" placeholder="Nome de usuario">
                    </div>
                    <div class="form-group">
                        <label for="password">Senha:</label>
                        <input type="password" class="form-control" id="password" name="password"
                            placeholder="Digite sua senha">
                    </div>
                    <div class="form-group">
                        <label for="confirmpassword">Confirmação de Senha:</label>
                        <input type="password" class="form-control" id="confirmpassword" name="confirmpassword"
                            placeholder="Digite sua senha">
                    </div>
                    <input type="submit" class="btn card-btn" value="Registrar">
                </form>
            </div>
        </div>
    </div>
</div>
<?php
require_once("templates/footer.php")
    ?>