{% extends 'partials/body.twig.php'  %}

{% block title %}Novo Produto - Mini Framework{% endblock %}

{% block body %}  
 <!-- Begin page -->
 <main class="h-100">


<!-- Header ends -->

<!-- main page content -->
<div class="main-container container">
    <!-- select Amount -->

    <div class="row">

    <form action="{{BASE}}account/payment-handler" method="post">
       
  
   

    <!-- Saving targets -->
    <div class="row mb-3">
        <div class="col">
            <h6 class="title">Total a depositar</h6>
        </div>
        <div class="col-auto">
            <a href="{{BASE}}account/add-bank-account" class="small">Adicionar conta</a>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-12 px-0">
            <div class="swiper-container cardswiper">
                <div class="swiper-wrapper">
                {% for card in cards %}
                    <div class="swiper-slide">
                        <div class="card {{card.fundo}}">
                            <div class="card-body">
                                <div class="form-check position-absolute end-0 bottom-0 m-1">
                                    <input class="form-check-input rounded-circle" value="{{card.conta}}" name="de" type="radio" id="card1" required>
                                    <label for="card1" class="form-check-label"></label>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-auto align-self-center">
                                    {{card.banco}} - {{card.conta}}
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
                                            <span class="small text-muted">{{card.moeda}} </span>
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
    <div class="col-12 text-center mb-4">
            <input type="text" class="trasparent-input text-center" name="para" value="0" placeholder="Digite a conta para transferir" required>
            <div class="text-center"><span class="text-muted">Destino</span>
                
            </div>
        </div>
        </div>
        <div class="col-12 text-center mb-4">
            <input type="text" class="trasparent-input text-center" name="valor" value="0" placeholder="Digite o total a depositar" required>
            <div class="text-center"><span class="text-muted">Montante</span>
                
            </div>
        </div>
        </div>

    <div class="row mb-4">
        <div class="col-12 ">
            <button type="submit" class="btn btn-default btn-lg shadow-sm w-100">
                Depositar
            </button>
        </div>
    </div>
    </form>
</div>
<!-- main page content ends -->


</main>
<!-- Page ends-->
{% endblock %}