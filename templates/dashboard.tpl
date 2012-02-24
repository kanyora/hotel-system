{extends "base.tpl"}

{block "content"}
	<div class="c-overview">
		<div class="bredcrumbs">
			<ul>
				<li>
					<a href="#">dashboard</a>
				</li>
				<li>
					<a href="#">overview</a>
				</li>
			</ul>
			<div class="clearfix"></div>
		</div>
		<div class="box-element">
			<div class="box-head-light box-head-icon forms-16">
				Quick actions<a href="" class="collapsable"></a>
			</div>
			<div class="	box-content">
				<ul class="actions">
					<li>
						<div>
							<a href="#" class="edit-32">Posts</a><span>add new post</span>
						</div>
					</li>
					<li>
						<div>
							<a href="{#BASE_URL#}/admin/users/" class="users-32">Users</a><span>edit users</span>
						</div>
					</li>
					<li>
						<div>
							<a href="#" class="data-32">Data</a><span>edit data</span>
						</div>
					</li>
					<li>
						<div>
							<a href="#" class="charts-32">Statistics</a><span>view statistics</span>
						</div>
					</li>
					<li>
						<div>
							<a href="#" class="settings-32">Settings</a><span>edit settings</span>
						</div>
					</li>
					<li>
						<div>
							<a href="#" class="finance-32">Finance</a><span>view finance</span>
						</div>
					</li>
					<li>
						<div>
							<a href="#" class="alert-32">Notifications</a><span>view notifications</span>
						</div>
					</li>
					<li>
						<div>
							<a href="#" class="email-32">Messages</a><span>view messages</span>
						</div>
					</li>
				</ul>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="box-element">
			<div class="box-head-light box-head-icon info-16">
				Notification board<a href="" class="collapsable"></a>
			</div>
			<div class="box-content">
				<ul class="notifications">
					<li>
						<div>
							321<span>total visitors</span><span class="green">+13%</span>
						</div>
					</li>
					<li>
						<div>
							321<span>total visitors</span><span class="red">-7%</span>
						</div>
					</li>
					<li>
						<div>
							321<span>total visitors</span><span class="green">+13%</span>
						</div>
					</li>
					<li>
						<div>
							321<span>total visitors</span><span class="grey">0%</span>
						</div>
					</li>
					<li>
						<div>
							321<span>total visitors</span><span class="green">-2%</span>
						</div>
					</li>
				</ul>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
{/block}