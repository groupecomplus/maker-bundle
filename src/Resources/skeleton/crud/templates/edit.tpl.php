<?= $helper->getHeadPrintCode('Modifier '.$entity_class_name, 'admin/') ?>

{% block body %}
    <h1>{% trans %}Modifier <?= $entity_class_name ?>{% endtrans %}</h1>

    {{ include('<?= $templates_path ?>/_form.html.twig', {'button_label': 'Mettre à jour'|trans}) }}

    <a href="{{ path('<?= $route_name ?>.index') }}" class="btn btn-back-to-list">{% trans %}Retour à la liste{% endtrans %}</a>

    {{ include('<?= $templates_path ?>/_delete_form.html.twig') }}
{% endblock %}
