{% extends 'partials/body.twig.php'  %}

{% block title %}Novo Produto - Mini Framework{% endblock %}

{% block body %} 


    <!-- loader section -->
   
    <div class="container-fluid loader-wrap">
        <div class="row h-100">
            <div class="col-10 col-md-6 col-lg-5 col-xl-3 mx-auto text-center align-self-center">
                <div class="loader-cube-wrap loader-cube-animate mx-auto">
                    <img src="{{BASE}}assets/img/logo.png" alt="Logo">
                </div>
                <p class="mt-4">Carregando<br><strong>Por favor aguarde...</strong></p>
            </div>
        </div>
    </div>
    <!-- loader section ends -->

    <!-- Begin page -->
    <main class="h-100 has-header">

        <!-- Header -->
        <header class="header position-fixed">
            <div class="row">
                <div class="col-auto">
                    <button class="btn btn-light btn-44 back-btn" onclick="window.location.replace('profile.html');">
                        <i class="bi bi-arrow-left"></i>
                    </button>
                </div>
                <div class="col align-self-center text-center">
                    <h5>Configurações</h5>
                </div>
                <div class="col-auto">
                    <a href="notifications.html" target="_self" class="btn btn-light btn-44">
                        <i class="bi bi-bell"></i>
                        <span class="count-indicator"></span>
                    </a>
                </div>
            </div>
        </header>
        <!-- Header ends -->

        <!-- main page content -->
        <div class="main-container container">

       
            <!-- user information -->
            <div class="card shadow-sm mb-4">
                <div class="card-header">
                    <div class="row">
                        <div class="col-auto">
                            <figure class="avatar avatar-60 rounded-10">
                                <img src="{{BASE}}assets/img/user1.jpg" alt="">
                            </figure>
                        </div>
                        <div class="col px-0 align-self-center">
                            <h3 class="mb-0 text-color-theme">{{info.pnome}} {{info.unome}}</h3>
                            <p class="text-muted ">{{info.morada}}</p>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <p class="text-muted ">
                    {{info.bio}}
                    </p>
                </div>
            </div>
            <form action="{{BASE}}save-settings" method="post">
            <!-- profile information -->
            <div class="row mb-3">
                <div class="col">
                    <h6>Informações e contacto</h6>
                </div>
            </div>
            <div class="row h-100 mb-4">

           

            <input type="hidden" class="form-control" value="{{info.username}}" name="username">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="form-group form-floating  mb-3">
                        <input type="text" class="form-control" value="{{info.pnome}}" name="pnome" placeholder="Digite o seu primeiro nome..." id="names">
                        <label for="names">Primeiro nome</label>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="form-group form-floating  mb-3">
                        <input type="text" class="form-control" value="{{info.unome}}" name="unome" placeholder="Digite o seu ultimo nome" id="surnames">
                        <label for="surnames">Ultimo nome</label>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="form-group form-floating mb-3">
                        <input type="text" class="form-control" name="email" value="{{info.email}}"
                            placeholder="Email" id="emailphone">
                        <label for="emailphone">Email</label>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="form-group form-floating mb-3">
                        <input type="text" class="form-control" name="telefone" value="{{info.telefone}}"
                            placeholder="Email" id="emailphone">
                        <label for="emailphone">Telefone</label>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="form-group form-floating mb-3">
                        <input type="text" class="form-control" name="identificacao" value="{{info.identificacao}}"
                            placeholder="Email or Phone" id="emailphone">
                        <label for="emailphone">Identificação / BI</label>
                    </div>
                </div>
                
            </div>

            <!-- add edit address form -->
            <div class="row mb-3">
                <div class="col">
                    <h6>Endereços</h6>
                </div>
            </div>
            <div class="row">
                
                <div class="col-12 col-md-6 col-lg-4 mb-3">
                    <div class="form-group form-floating">
                        <input type="text" class="form-control" name="morada" value="{{info.morada}}" id="address2"
                            placeholder="Address Line 1">
                        <label class="form-control-label" for="address2">Morada</label>
                    </div>
                </div>
               
                
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="form-floating mb-3">
                        <select class="form-control" id="country" name="pais">
                       
                        {% for pais in paises %}
                            
                            <option value="{{pais.country_id}}">{{pais.name}}</option>
                            {% endfor %}
                        </select>
                        <label for="country">Pais</label>
                    </div>
                </div>
                
                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <div class="form-group form-floating">
                        <input type="text" class="form-control" value="{{info.bio}}" name="bio" id="address7" placeholder="Biografia">
                        <label class="form-control-label" for="address7">Biografia</label>
                    </div>
                </div>
            </div>

            <!-- change password -->
            <div class="row mb-3">
                <div class="col">
                    <h6>Alterar Senha</h6>
                </div>
            </div>
            <div class="row h-100 mb-4">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="form-floating  mb-3">
                        <input type="password" class="form-control" value="asdasdasdsd" placeholder="Password"
                            id="password">
                        <label for="password">Senha</label>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="form-floating ">
                        <input type="password" class="form-control" placeholder="Confirm Password" id="confirmpassword">
                        <label for="confirmpassword">Confirmar senha</label>
                    </div>
                </div>
            </div>

            
            <div class="row h-100 ">
                <div class="col-12 mb-4">
                    <button type="submit"  class="btn btn-default btn-lg w-100">Actualizar</button>
                </div>
            </div>

 </form>
        </div>
        <!-- main page content ends -->

    </main>
    <!-- Page ends-->

    {% endblock %}