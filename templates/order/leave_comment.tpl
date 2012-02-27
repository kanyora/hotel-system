{extends "base.tpl"}

{block "subheader"}
    <h4>We'd love to hear your feedback! Tell us how we can make us better:</h4>
{/block}

{block "content"}
    <form method="POST" action=".">
        {{ form.as_p }}
        <br />
        <input type="submit" value="Submit" />
    </form>
    <br />
{/block}
