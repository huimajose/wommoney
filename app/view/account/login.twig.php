{% extends 'partials/body.twig.php'  %}

{% block title %}Novo Produto - Mini Framework{% endblock %}

{% block body %}

<!-- Begin page content -->
<main class="container-fluid h-100">
        <div class="row h-100 overflow-auto">
            <div class="col-12 text-center mb-auto px-0">
                <header class="header">
                    <div class="row">
                        <div class="col-auto"></div>
                        <div class="col">
                            <div class="logo-small">
                                
                               
                            </div>
                        </div>
                        <div class="col-auto"></div>
                    </div>
                </header>
            </div>
            <div class="col-10 col-md-6 col-lg-5 col-xl-3 mx-auto align-self-center text-center py-4">
                <h1 class="mb-4 text-color-theme">Entrar</h1>
                <form class="was-validated needs-validation" action="{{BASE}}login-action/" method="post">
                
                    <div class="form-group form-floating mb-3 is-valid">
                        <input type="text" class="form-control" name="txtUsername" id="email" placeholder="Digite o usuario...">
                        <label class="form-control-label" for="email">Usuário</label>
                    </div>

                    <div class="form-group form-floating is-invalid mb-3">
                        <input type="password" class="form-control " id="password" name="txtPassword" placeholder="Digite a senha...">
                        <label class="form-control-label" for="password">Senha</label>
                        <button type="button" class="text-danger tooltip-btn" data-bs-toggle="tooltip"
                            data-bs-placement="left" title="Enter valid Password" id="passworderror">
                            <i class="bi bi-info-circle"></i>
                        </button>
                    </div>
                    <p class="mb-3 text-center">
                        <a href="forgot-password.html" class="">
                           Esqueceu a senha?
                        </a>
                    </p>

                    <button type="submit" class="btn btn-lg btn-default w-100 mb-4 shadow"
                        >
                        Entrar
                    </button>
                </form>
                <p class="mb-2 text-muted">Ainda não tem uma conta?</p>
                <a href="register" target="_self" class="">
                   Criar conta <i class="bi bi-arrow-right"></i>
                </a>

            </div>
            
        </div>
    </main>

{% endblock %}