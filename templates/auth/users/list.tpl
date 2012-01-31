{extends "base.tpl"}

{block "body"}
	<H2>Doctors:</H2>
	<ul>
		{foreach $doctors as $doctor}
		    <li>{$doctor->first_name} {$doctor->last_name}</li>
		{/foreach}
	</ul>
{/block}