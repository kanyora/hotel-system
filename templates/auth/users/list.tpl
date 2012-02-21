{extends "common.tpl"}

{block "content"}
	<H2>Users:</H2>
	<a href="{#BASE_URL#}/admin/users/add/">Add User</a>
	<ul>
		{foreach $users as $user}
		    <li>{$user->username} - {$user->email}</li>
		{/foreach}
	</ul>
{/block}