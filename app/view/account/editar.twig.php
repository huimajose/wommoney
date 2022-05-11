{% extends 'partials/body.twig.php'  %}

{% block title %}Novo Produto - Mini Framework{% endblock %}

{% block body %}
<main class="h-100 has-header">


<div class="main-container container">


<!-- Contact us form -->
<div class="row mb-4">
    <div class="col-12 col-md-6 col-lg-4 mx-auto">
        <h4 class="mb-2 text-center text-color-theme">Actualizando informações de perfil</h4>
        <p class="text-muted mb-4 text-center">Ola @{{ user.username }} Termine de preencher os dados para ter a conta pronta!</p>


        <form action="{{BASE}}completar-perfil" method="post">


        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="pnome" placeholder="Digite o seu primeiro nome..."
                id="emailphone">
            <label for="emailphone">Primeiro nome</label>
        </div>
        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="unome" placeholder="Digite o seu ultimo nome..."
                id="emailphone">
            <label for="emailphone">Ultimo nome</label>
        </div>

        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="bi" placeholder="Digite numero do seu BI..."
                id="emailphone">
            <label for="emailphone">Identificação/BI</label>
        </div>

        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="morada" placeholder="Digite a sua morada..."
                id="emailphone">
            <label for="emailphone">Endereço / Morada</label>
        </div>






        <div class="form-floating  mb-3">
            <textarea class="form-control h-auto" placeholder="Digite o seu ultimo nome..." name="bio">Escreva a sua bio...</textarea>
            <label for="confirmpassword">Bio</label>
        </div>
        <input type="hidden" name="idUser" value="{{ session.userID }}">
        <button type="submit" class="btn btn-default btn-lg w-100">Completar</button>
    </div>
</div>
 </form>

</div>

</div>
<!-- main page content ends -->

</main>
{% endblock %}