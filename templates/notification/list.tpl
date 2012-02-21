{extends "common.tpl"}

{block "content"}
	<H2>Notifications:</H2>
	<p>
		Just click a button to create a new notification.
	</p>
	<p>
		<a href="#" onclick="new Notification('<strong>You</strong> just saved the page <strong>About Us</strong>', 'success');" class="button icon approve">Success notification</a>
	</p>
	<p>
		<a href="#" onclick="new Notification('<strong>Bram</strong> left a warning named <strong>Buy this Theme!</strong>', 'warning');" class="button icon remove">Warning notification</a>
	</p>
	<p>
	<p>
		<a href="#" onclick="new Notification('<strong>Chuck</strong> says he doesn’t see <strong>Modals</strong> yet', 'information');" class="button primary">Just some info</a>
	</p>
	<p>
		<a href="#" onclick="new Notification('<strong>You</strong> need to look at <strong>Users</strong>', 'error', 'urgent');" class="button icon remove danger">An error</a>
	</p>
	<p>
		<a href="#" onclick="new Notification('<strong>This</strong> is just another <strong>Informative Message</strong>', 'saved');" class="button icon approve">Saved message</a>
	</p>
	<table>
		<tr>
			<th>Id</th>
			<th>narrative</th>
		</tr>
		{foreach $notifications as $notification}
			<tr>
				<td>{$notification->id}</td>
				<td>{$notification->number_plate}</td>
				<td>
					<a href="{#BASE_URL#}/notifications/{$notification->id}/">R</a> |
				</td>
			</tr>
		{/foreach}
	</table>
	
{/block}