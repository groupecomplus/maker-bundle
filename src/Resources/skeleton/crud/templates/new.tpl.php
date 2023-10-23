<?= $helper->getHeadPrintCode('New ' . $entity_class_name, 'admin/') ?>

{% block body %}
<h1>{% trans %}Créer nouveau <?= $entity_class_name ?>{% endtrans %}</h1>

{{ include('<?= $templates_path ?>/_form.html.twig') }}

<a href="{{ path('<?= $route_name ?>.index') }}" class="btn btn-back-to-list">{% trans %}Retour à la liste{% endtrans %}</a>
{% endblock %}
