{extends "shop_base.tpl"}

{block "dishes"}
    <form method="POST" action=".">
        {{ form.as_p }}
        <br />
        <input type="submit" value="Submit" />
    </form>
    <br />
{/block}
