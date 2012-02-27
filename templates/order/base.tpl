<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <!--<meta name="viewport" content="width=250, initial-scale=1" />-->
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0;">
        <link rel="stylesheet" href="{{ MEDIA_URL }}mobile/css/style.css" type='text/css' />
	<script type="text/javascript" src="/media/mobile/js/templates.js"></script>
   	<script type="text/javascript">
		function init() {
			var myStyleTweaks = new StyleTweaker();
			myStyleTweaks.add("AppleWebKit/420+", "/media/mobile/css/S40webkit.css");
			myStyleTweaks.add("Maemo", "/media/mobile/css/maemo.css");
			myStyleTweaks.tweak();
		}
		addEvent("onload",init);
	</script>

        <title>{% block title %}Pete's Coffee{% endblock %}</title>
    </head>

    <body>
        <div id="header" class="mainbk">
	    {% block header %}<a href="/"><h1>pete's coffee *iHub_</h1></a>  {% endblock %}
        </div>
        <div id="navigation">
            <ul>
                {% block menu %}
                <li><a href="{% url home %}">Menu</a> | </li>
                {% endblock %}
                
                {% block cart %} 
                <li><a href="{% url view_cart %}">MyOrder</a> | </li>
                {% endblock %}

                {% block feedback %}
                <li><a href="{% url leave_comment %}">Feedback</a></li>
                {% endblock %}
            </ul>                                           
        </div>                  
        <div id="messages">   
            {% block messages %}
            {% if messages %}
            <ul> 
                {% for message in messages %}
                <li{% if message.tags %} class="{{ message.tags }}"{% endif %}>
                    {{ message }}
                </li>                           
                {% endfor %}
            </ul>
            {% endif %}
            {% endblock %}
        </div>          
        <div id="subheader">
            {% block subheader %} <h4>Welcome!</h4> {% endblock %}
        </div>  
        <div id="content">
            {% block content %} {% endblock %}
        </div>    
    </body>
</html>
