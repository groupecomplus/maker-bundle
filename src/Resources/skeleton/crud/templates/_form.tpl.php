{{ form_start(form) }}
    {{ form_widget(form) }}
    <button class="btn btn-save my-1">{{ button_label|default('Enregistrer'|trans) }}</button>
{{ form_end(form) }}
