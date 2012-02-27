{% extends "mobile/base.html" %}

{% block subheader %} <h4>{{ category }} </h4> {% endblock %}

{% block content %}
    <table id="product-table">
        {% for product in category.products.all %}
            <tr>
                <td class="product"><a href="{% url add_product product.id %}">{{ product.name }}</a></td>
                <td class="price">{{ product.price }}</td>
            </tr>
        {% endfor %}
    </table>
    <br />
{% endblock %}
