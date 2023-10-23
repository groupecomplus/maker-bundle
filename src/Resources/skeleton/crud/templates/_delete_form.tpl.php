<form method="post" action="{{ path('<?= $route_name ?>.delete', {'<?= $entity_identifier ?>': <?= $entity_twig_var_singular ?>.<?= $entity_identifier ?>}) }}" onsubmit="return confirm('{{ 'Êtes-vous sûr de bien vouloir supprimer cet élément?'|trans|e('js') }}');">
    <input type="hidden" name="_token" value="{{ csrf_token('delete' ~ <?= $entity_twig_var_singular ?>.<?= $entity_identifier ?>) }}">
    <button class="btn btn-delete my-1">{% trans %}Supprimer{% endtrans %}</button>
</form>