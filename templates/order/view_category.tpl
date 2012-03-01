{extends "shop_base.tpl"}

{block "dishes"}
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
