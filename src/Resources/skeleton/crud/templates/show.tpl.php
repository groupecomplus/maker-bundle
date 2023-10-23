<?= $helper->getHeadPrintCode($entity_class_name, 'admin/') ?>

{% block body %}
<h1>{% trans %}<?= $entity_class_name ?>{% endtrans %}</h1>

<table class="table">
    <tbody>
    <?php
    foreach ($entity_fields as $field): ?>
        <?php
        if ($field['fieldName'] === $entity_identifier) : continue; endif; ?>
        <tr>
            <th>{% trans %}<?= ucfirst($field['fieldName']) ?>{% endtrans %}</th>
            <td>{{ <?= $helper->getEntityFieldPrintCode($entity_twig_var_singular, $field) ?> }}</td>
        </tr>
    <?php
    endforeach; ?>
    </tbody>
</table>

<a href="{{ path('<?= $route_name ?>.index') }}" class="btn btn-back-to-list">{% trans %}Retour à la liste{% endtrans %}</a>

<a href="{{ path('<?= $route_name ?>.edit', {'<?= $entity_identifier ?>': <?= $entity_twig_var_singular ?>.<?= $entity_identifier ?>}) }}" class="btn btn-edit">{%
    trans %}Modifier{% endtrans %}</a>

{{ include('<?= $templates_path ?>/_delete_form.html.twig') }}
{% endblock %}
