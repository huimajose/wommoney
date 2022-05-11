{% extends 'partials/body.twig.php'  %}

{% block title %}Novo Produto - Mini Framework{% endblock %}

{% block body %}    
        <!-- loader section -->
        <div class="container-fluid loader-wrap">
        <div class="row h-100">
            <div class="col-10 col-md-6 col-lg-5 col-xl-3 mx-auto text-center align-self-center">
                <div class="loader-cube-wrap loader-cube-animate mx-auto">
                    <img src="{{BASE}}assets/img/wom.jpg" alt="Logo">
                </div>
                <p class="mt-4">Carregando<br><strong>Por favor aguarde...</strong></p>
            </div>
        </div>
    </div>
    <!-- loader section ends -->


    <!-- Begin page -->
    <main class="h-100">

       
        <!-- Header ends -->

        <!-- main page content -->
        <div class="main-container container">
            <!-- welcome user -->
            <div class="row mb-4">
                <div class="col-auto">
                    <div class="avatar avatar-50 shadow rounded-10">
                        <img src="" alt="">
                    </div>
                </div>
                <div class="col align-self-center ps-0">
                    <h4 class="text-color-theme"><span class="fw-normal">Olá</span>, {{info.pnome}} {{info.unome}}</h4>
                    <p class="text-muted">Bom dia</p>
                </div>
            </div>

            <!-- money request received -->
            <div class="row mb-4 hideonprogress">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                
                            </div>
                        </div>
                        <div class="row mx-0">
                            <div class="col-12">
                                <div class="progress bg-none h-2 hideonprogressbar" data-target="hideonprogress">
                                    <div class="progress-bar bg-theme" role="progressbar" aria-valuenow="25"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- swiper credit cards -->
            <div class="row mb-3">
                <div class="col-12 px-0">
                    <div class="swiper-container cardswiper">
                        <div class="swiper-wrapper">
                          
                        {% for card in cards %}
                            <div class="swiper-slide">
                                <div class="card {{card.fundo}} border-0">
                                    <div class="card-body">
                                        <div class="row mb-3">
                                            <div class="col-auto align-self-center">
                                                <i class="bi bi-wallet2"></i> {{card.banco}} - {{card.conta}}
                                            </div>
                                            <div class="col align-self-center text-end">
                                                <p class="small">
                                                    <span class="text-uppercase size-10">{{card.expira}}</span><br>
                                                    {% if card.limite == 0 %}
                                                    <span class="text-muted">Sem limite</span>
                                                    {% else %} 
                                                    {{ card.limite }}

                                                    {% endif %}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <h4 class="fw-normal mb-2">
                                                {{card.saldo|number_format(2)}}
                                                    <span class="small text-muted">{{card.moeda}}</span>
                                                </h4>
                                                <p class="mb-0 text-muted size-12">{{card.numero}}</p>
                                                <p class="text-muted size-12">{{card.tipo}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {% endfor %}
                        </div>
                       



                    </div>
                </div>
            </div>

           
            

                
                
                
            </div>

            <!-- Transactions -->
            

           
                
                
                
               
            </div>

        </div>
        <!-- main page content ends -->


    </main>
    <!-- Page ends-->

    {% endblock %}