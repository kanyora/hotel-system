{extends "base.tpl"}

{block "subheader"}
    <h4>One last thing - tell us your name!</h4>
{/block}

{block "content"}
    <form method="POST" action=".">
        <table>
            {{ form }}
        </table>
        <input type="submit" value="Submit" />
    </form>
{/block}
