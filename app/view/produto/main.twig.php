{% extends 'partials/body.twig.php'  %}

{% block title %}Produto - Mini Framework{% endblock %}

{% block body %}
<div class="max-width center-screen bg-white padding">
    <h1>Produto</h1>

    <a href="{{BASE}}novo-produto/" class="btn btn-info btn-sm">Novo produto</a>

    <hr>

    <p>lista de produtos!</p>

    {% for produ in listaProduto %}
   
    <p> {{ produ.model }} </p>
    {% endfor %}
</div>
{% endblock %}