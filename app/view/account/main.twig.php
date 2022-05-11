{% extends 'partials/body.twig.php'  %}

{% block title %}Home -  {{ session.username}} {% endblock %}

{% block body %}
<div class="col-sm-12 bg-white padding">
    <h3>Bem-vindo {{ session.username}}</h3>
    
    <p>Acompanhe aqui as noticias personlizadas!</p>
   
</div>



{% endblock %}