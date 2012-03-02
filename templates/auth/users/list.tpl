{extends "base.tpl"}

{block "right"}
	<h1>Users</h1>
	<br/>
	<a href="{#BASE_URL#}/admin/users/add/">Add User</a>
	<br/>
	<br/>
<div class="box-element">
    <div class="box-head-light">Users<a href="" class="collapsable"></a></div>
    <div class="box-content no-padding">
		<table class="i-table fullwidth">
			<thead>
				<tr>
					<td>Id</td>
					<td>Name</td>
					<td>Email</td>
					<td>Actions</td>
				</tr>
			</thead>
			<tbody>
				{foreach $users as $user}
					<tr class="dark">
						<td>{$user->id}</td>
						<td>{$user->username}</td>
						<td>{$user->email}</td>
						<td>
							{if $request->user->belongsToGroups('admin')}
								<a href="{#BASE_URL#}/admin/users/{$user->id}/edit/">Edit</a> |
								<a href="{#BASE_URL#}/admin/users/{$user->id}/delete/">Delete</a>
							{/if}
						</td>
					</tr>
				{/foreach}
			</tbody>
		</table>
{/block}