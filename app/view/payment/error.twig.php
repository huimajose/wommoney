{% extends 'partials/body.twig.php'  %}

{% block title %}Novo Produto - Mini Framework{% endblock %}

{% block body %}  


 <!-- Begin page content -->
 <main class="container-fluid h-100">
        <div class="row h-100 overflow-auto">
            <div class="col-12 text-center mb-auto px-0">
                <header class="header">
                    <div class="row">
                        <div class="col-auto">
                        </div>
                        <div class="col">
                            
                        </div>
                        <div class="col-auto">
                        </div>
                    </div>
                </header>
            </div>
            <div class="col-10 col-md-6 col-lg-5 col-xl-3 mx-auto align-self-center text-center py-4">
                <img src="assets/img/thankyou.png" alt="" class="mw-100 mx-auto my-4">
                <h1 class="mb-4 text-color-theme">Falha!</h1>
                <p class="text-muted mb-4">A transferência não foi efectuada com sucesso
                    .<br />
                    {{session.msg}}</p>

                

                <a href="{{BASE}}account/payment" target="_self" class="btn btn-lg btn-default w-100 shadow">Voltar</a>
            </div>
            <div class="col-12 text-center mt-auto">
                <div class="row justify-content-center footer-info">
                    <div class="col-auto">
                    </div>
                </div>
            </div>
        </div>
    </main>

    {% endblock %}