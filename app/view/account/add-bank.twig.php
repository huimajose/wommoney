{% extends 'partials/body.twig.php'  %}

{% block title %}Novo Produto - Mini Framework{% endblock %}

{% block body %} 


    <!-- loader section -->
   
    <div class="container-fluid loader-wrap">
        <div class="row h-100">
            <div class="col-10 col-md-6 col-lg-5 col-xl-3 mx-auto text-center align-self-center">
                <div class="loader-cube-wrap loader-cube-animate mx-auto">
                    <img src="{{BASE}}assets/img/AAA.jpg" alt="Logo">
                </div>
                <p class="mt-4">Carregando<br><strong>Por favor aguarde...</strong></p>
            </div>
        </div>
    </div>
    <!-- loader section ends -->

    <!-- Begin page -->
    <main class="h-100 has-header">


        <!-- main page content -->
        <div class="main-container container">

       
            <!-- user information -->
            <div class="card shadow-sm mb-4">
                <div class="card-header">
                    <div class="row">
                        <div class="col-auto">
                            <figure class="avatar avatar-60 rounded-10">
                                <img src="" alt="">
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
            <form action="{{BASE}}account/success-add-bank" method="post">
            <!-- profile information -->
            
            

            <!-- add edit address form -->
            <div class="row mb-3">
                <div class="col">
                    <h6>Dados da conta</h6>
                </div>
            </div>
            <div class="row">
                
                
                
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="form-floating mb-3">
                        <select class="form-control" id="country" name="banco">
                       
                        {% for banco in bancos %}
                            
                            <option value="{{banco.idBanco}}">{{banco.code}} - ({{banco.nome}})</option>
                            {% endfor %}
                        </select>
                        <label for="country">Banco</label>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="form-floating mb-3">
                        <select class="form-control" id="country" name="tipo">
                       
                        {% for wallet in wallets %}
                            
                            <option value="{{wallet.idTipoWallet}}">{{wallet.nome}}</option>
                            {% endfor %}
                        </select>
                        <label for="country">Tipo</label>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="form-floating ">
                        <input type="number" name="saldo" class="form-control" placeholder="Digite o saldo inicial" id="confirmpassword">
                        <label for="confirmpassword">Saldo Inicial</label>
                    </div>
                </div>
                
            </div>

            
            

            
            <div class="row h-100 ">
                <div class="col-12 mb-4">
                    <button type="submit"  class="btn btn-default btn-lg w-100">Gerar conta</button>
                </div>
            </div>

 </form>
        </div>
        <!-- main page content ends -->

    </main>
    <!-- Page ends-->

    {% endblock %}