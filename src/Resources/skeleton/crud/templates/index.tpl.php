<?= $helper->getHeadPrintCode('Liste des ' . strtolower($entity_class_name), 'admin/'); ?>

{% block body %}
<h1>{% trans %}Liste des <?= $entity_class_name ?>{% endtrans %}</h1>

<table class="table dataTable">
    <thead>
    <tr>
<?php foreach ($entity_fields as $field): ?>
<?php if ($field['fieldName'] === $entity_identifier) : continue; endif; ?>
        <th>{% trans %}<?= ucfirst($field['fieldName']) ?>{% endtrans %}</th>
<?php endforeach; ?>
        <th>{% trans %}actions{% endtrans %}</th>
    </tr>
    </thead>
    <tbody>
    {% for <?= $entity_twig_var_singular ?> in <?= $entity_twig_var_plural ?> %}
    <tr>
<?php foreach ($entity_fields as $field): ?>
<?php if ($field['fieldName'] === $entity_identifier) : continue; endif; ?>
        <td>{{ <?= $helper->getEntityFieldPrintCode($entity_twig_var_singular, $field) ?> }}</td>
<?php endforeach; ?>
        <td>
            <a href="{{ path('<?= $route_name ?>.show', {'<?= $entity_identifier ?>': <?= $entity_twig_var_singular ?>.<?= $entity_identifier ?>}) }}" class="btn btn-sm btn-show">{% trans %}Voir{% endtrans %}</a>
            <a href="{{ path('<?= $route_name ?>.edit', {'<?= $entity_identifier ?>': <?= $entity_twig_var_singular ?>.<?= $entity_identifier ?>}) }}" class="btn btn-sm btn-edit">{% trans %}Modifier{% endtrans %}</a>
        </td>
    </tr>
    {% else %}
    <tr>
        <td colspan="<?= (count($entity_fields)) ?>">{% trans %}Aucun <?= strtolower($entity_class_name) ?> trouvé{% endtrans %}</td>
    </tr>
    {% endfor %}
    </tbody>
</table>

<a href="{{ path('<?= $route_name ?>.new') }}" class="btn btn-new my-3">{% trans %}Créer nouveau <?= strtolower($entity_class_name) ?>{% endtrans %}</a>
{% endblock %}
