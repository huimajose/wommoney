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

<!-- Contact us blocks -->
<div class="row justify-content-center">
    <div class="col-6 col-md-4">
        <div class="card shadow-sm mb-4">
            <div class="card-body text-center">
                <i class="avatar avatar-60 bi bi-question-circle fs-4 bg-theme-light text-color-theme rounded-circle mb-4"></i>
                <h6 class="mb-2">Sales</h6>
                <p class="text-muted small">We'l like to hear from you, how we can help & work.</p>
                <button class="btn btn-sm btn-default"><i class="bi bi-envelope mx-1"></i> Mail us</button>
            </div>
        </div>
    </div>
    <div class="col-6 col-md-4">
        <div class="card shadow-sm mb-4">
            <div class="card-body text-center">
                <i class="avatar avatar-60 bi bi-newspaper fs-4 bg-theme-light text-color-theme rounded-circle mb-4"></i>
                <h6 class="mb-2">News & Events</h6>
                <p class="text-muted small">We'l like to hear from you, how we can help & work.</p>
                <button class="btn btn-sm btn-default"><i class="bi bi-envelope mx-1"></i> Mail us</button>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-4 mb-4">
        <h6 class="mb-2">Techincal problem</h6>
        <p class="text-muted">If you have anytype of techincal challenges and would like to get help
            from us please drop an email at <span class="text-primary">info@maxartkiller.in</span>.</p>
        <hr>
        <h6 class="mb-2">Techincal problem</h6>
        <p class="text-muted">Facing general challenges, would like to get help,
            please drop an email at <span class="text-primary">info@maxartkiller.in</span>.</p>
    </div>
</div>

<!-- Address -->
<div class="row mb-3">
    <div class="col">
        <h6 class="my-1">Our Location: </h6>
    </div>
    <div class="col-auto px-0">

    </div>
</div>

<div class="row justify-content-center">
    <div class="col-12 col-md-6  mb-4">
        <div class="card shadow-sm">
            <div class="card-body">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d53231.962811927515!2d-117.15726395005734!3d33.5014375970648!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80db6252f51abe23%3A0x68bc0e88a03806a8!2sTemecula%2C%20CA%2C%20USA!5e0!3m2!1sen!2sin!4v1623665123540!5m2!1sen!2sin"
                    class="h-190 w-100 rounded mb-3" allowfullscreen="" loading="lazy"></iframe>

                <h5 class="text-color-theme mb-2">Maxartkiller Inc.</h5>
                <p class="text-muted">265 B, Arohhi Appartment,<br>Bhuvaladi baug, Raipur,<br>Rajasthan
                    652841 (IN)</p>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 mb-4">
        <div class="card shadow-sm">
            <div class="card-body">
                <h5 class="text-color-theme mb-2">Johnson and Desai</h5>
                <p class="text-muted">154 C, Denny Appartment,<br>Bhuvaladi Square, Lincoln Street,<br>Brazil
                    652841 (US) </p>
            </div>
        </div>
    </div>
</div>

</div>
<!-- main page content ends -->

</main>
{% endblock %}