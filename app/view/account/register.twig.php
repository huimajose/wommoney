{% extends 'partials/body.twig.php'  %}

{% block title %}Nova conta - Mini Framework{% endblock %}

{% block body %}
    
    <!-- Begin page content -->
    <main class="container-fluid h-100">
        <div class="row h-100">
            <div class="col-12 text-center mb-auto px-0">
                <header class="header">
                    <div class="row">
                        <div class="col-auto">
                            <a href="signin.html" target="_self" class="btn btn-light btn-44">
                                <i class="bi bi-arrow-left"></i>
                            </a>
                        </div>
                        <div class="col align-self-center">
                            <h5>Criar conta</h5>
                        </div>
                        <div class="col-auto">
                            <a class="btn btn-light btn-44 invisible"></a>
                        </div>
                    </div>
                </header>
            </div>
            <div class="col-10 col-md-6 col-lg-5 col-xl-3 mx-auto align-self-center text-center py-4">
                <form class="was-validated" action="{{BASE}}insert-perfil/" method="post">
                    <div class="form-floating is-valid mb-3">
                        <input type="text" class="form-control" name="txtUsername" value="maxartkiller" placeholder="Digite o nome do usuario"
                            id="username">
                        <label for="username">Usuário</label>
                    </div>
                    <div class="form-floating is-valid mb-3">
                        <select class="form-control" name="txtPais" id="country">
                            <option selected>United States (+1)</option>
                            <option>United Kingdoms (+44)</option>
                        </select>
                        <label for="country">pais</label>
                    </div>
                    <div class="form-floating is-valid mb-3">
                        <input type="text" name="txtContacto" class="form-control" value="info@maxartkiller.com"
                            placeholder="Email or Phone" id="emailphone">
                        <label for="emailphone">Email or Telefone</label>
                    </div>
                    <div class="form-floating is-valid mb-3">
                        <input type="password" name="txtPassword" class="form-control" value="asdasdasdsd" placeholder="Digite a sua senha..."
                            id="password">
                        <label for="password">Senha</label>
                    </div>
                    <div class="form-floating is-invalid mb-3">
                        <input type="password" class="form-control" placeholder="Confirmar senha..." id="confirmpassword">
                        <label for="confirmpassword">Confirmar senha</label>
                        <button type="button" class="btn btn-link text-danger tooltip-btn" data-bs-toggle="tooltip"
                            data-bs-placement="left" title="Enter valid Password" id="passworderror">
                            <i class="bi bi-info-circle"></i>
                        </button>
                    </div>
                    <p class="mb-3"><span class="text-muted">Ao clicar criar, estará concordando com os nossos</span> <a
                            href="#">Termos e Condições</a></p>
                    <button type="submit" class="btn btn-lg btn-default w-100 mb-4 shadow">
                        Criar
                    </button>
                </form>
            </div>
            
        </div>
    </main>



       
{% endblock %}