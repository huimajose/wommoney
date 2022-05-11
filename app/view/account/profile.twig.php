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
    <main class="h-100">

       
        <!-- Header ends -->

        <!-- main page content -->
        <div class="main-container container pt-0">
            <!-- user information -->
            <div class="card shadow-sm mb-4">
                <div class="card-header">
                    <div class="row">
                        <div class="col-auto">
                            <figure class="avatar avatar-60 rounded-10">
                                <img src="assets/img/user1.jpg" alt="">
                            </figure>
                        </div>
                        <div class="col px-0 align-self-center">
                            <h3 class="mb-0 text-color-theme">{{info.pnome}} {{info.unome}} </h3>
                            <p class="text-muted ">{{info.morada}}, {{info.pais}}</p>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <p class="text-muted mb-3">
                    {{info.bio}}
                    </p>
                    <div class="row">
                       
                    </div>
                </div>
            </div>

           

            <!-- summary -->
            

            <!-- map location -->
            <div class="row">
                <div class="col-12">
                    
                </div>
            </div>

             <!-- summary swiper carousel -->
             <div class="row">
                <div class="col-12 px-0">
                    <div class="swiper-container summayswiper">
                        <div class="swiper-wrapper">
                            
                            
                            
                            
                        </div>
                    </div>
                </div>
            </div>


            
        </div>
        <!-- main page content ends -->


    </main>
    <!-- Page ends-->

    {% endblock %}