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
							<a href="#" class="users-32">Users</a><span>edit users</span>
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
			<div class="box-head-light box-head-icon charts-16">
				Realtime chart<a href="" class="collapsable"></a>
			</div>
			<div class="box-content">
				<div id="realtime-chart" style="width: 100%; height: 200px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; position: relative; ">
					<canvas class="base" width="100" height="200"></canvas><canvas class="overlay" width="100" height="200" style="position: absolute; left: 0px; top: 0px; "></canvas>
					<div class="tickLabels" style="font-size:smaller">
						<div class="yAxis y1Axis" style="color:#aaaaa">
							<div class="tickLabel" style="position:absolute;text-align:right;top:196px;right:100px;width:0px">
								0
							</div>
							<div class="tickLabel" style="position:absolute;text-align:right;top:148px;right:100px;width:0px">
								25
							</div>
							<div class="tickLabel" style="position:absolute;text-align:right;top:100px;right:100px;width:0px">
								50
							</div>
							<div class="tickLabel" style="position:absolute;text-align:right;top:52px;right:100px;width:0px">
								75
							</div>
							<div class="tickLabel" style="position:absolute;text-align:right;top:4px;right:100px;width:0px">
								100
							</div>
						</div>
					</div>
				</div>
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
		<div class="box-holder-one-half">
			<div class="box-element first">
				<div class="box-head-light box-head-icon charts-16">
					Chart with tooltips<a href="" class="collapsable"></a>
				</div>
				<div class="box-content">
					<div id="tooltipchart" style="width: 100%; height: 300px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; position: relative; ">
						<canvas class="base" width="100" height="300"></canvas><canvas class="overlay" width="100" height="300" style="position: absolute; left: 0px; top: 0px; "></canvas>
						<div class="tickLabels" style="font-size:smaller">
							<div class="xAxis x1Axis" style="color:#aaaaa">
								<div class="tickLabel" style="position:absolute;text-align:center;left:-4px;top:300px;width:20px">
									Jan 1
								</div>
								<div class="tickLabel" style="position:absolute;text-align:center;left:15px;top:300px;width:20px">
									Jan 8
								</div>
								<div class="tickLabel" style="position:absolute;text-align:center;left:38px;top:300px;width:20px">
									Jan 16
								</div>
								<div class="tickLabel" style="position:absolute;text-align:center;left:60px;top:300px;width:20px">
									Jan 24
								</div>
							</div>
							<div class="yAxis y1Axis" style="color:#aaaaa">
								<div class="tickLabel" style="position:absolute;text-align:right;top:294px;right:100px;width:0px">
									0
								</div>
								<div class="tickLabel" style="position:absolute;text-align:right;top:222px;right:100px;width:0px">
									50
								</div>
								<div class="tickLabel" style="position:absolute;text-align:right;top:149px;right:100px;width:0px">
									100
								</div>
								<div class="tickLabel" style="position:absolute;text-align:right;top:77px;right:100px;width:0px">
									150
								</div>
								<div class="tickLabel" style="position:absolute;text-align:right;top:4px;right:100px;width:0px">
									200
								</div>
							</div>
							<div class="yAxis y2Axis" style="color:#aaaaa">
								<div class="tickLabel" style="position:absolute;text-align:left;top:294px;left:100px;width:0px">
									90€
								</div>
								<div class="tickLabel" style="position:absolute;text-align:left;top:253px;left:100px;width:0px">
									100€
								</div>
								<div class="tickLabel" style="position:absolute;text-align:left;top:211px;left:100px;width:0px">
									110€
								</div>
								<div class="tickLabel" style="position:absolute;text-align:left;top:170px;left:100px;width:0px">
									120€
								</div>
								<div class="tickLabel" style="position:absolute;text-align:left;top:128px;left:100px;width:0px">
									130€
								</div>
								<div class="tickLabel" style="position:absolute;text-align:left;top:87px;left:100px;width:0px">
									140€
								</div>
								<div class="tickLabel" style="position:absolute;text-align:left;top:45px;left:100px;width:0px">
									150€
								</div>
								<div class="tickLabel" style="position:absolute;text-align:left;top:4px;left:100px;width:0px">
									160€
								</div>
							</div>
						</div>
						<div class="legend">
							<div style="position: absolute; width: 0px; height: 0px; top: 9px; right: 16px; background-color: rgb(255, 255, 255); opacity: 0.85; "></div>
							<table style="top: 9px; right: 16px; font-size: smaller; position: absolute; ">
								<tbody>
									<tr>
										<td class="legendColorBox">
										<div style="border:1px solid #ccc;padding:1px">
											<div style="width:4px;height:0;border:5px solid rgb(237,194,64);overflow:hidden"></div>
										</div></td><td class="legendLabel">revenue * 1000</td>
									</tr>
									<tr>
										<td class="legendColorBox">
										<div style="border:1px solid #ccc;padding:1px">
											<div style="width:4px;height:0;border:5px solid rgb(175,216,248);overflow:hidden"></div>
										</div></td><td class="legendLabel">costs</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="box-holder-one-half">
			<div class="box-element">
				<div class="box-head-light box-head-icon piecharts-16">
					Income chart<a href="" class="collapsable"></a>
				</div>
				<div class="box-content">
					<div id="income-chart" style="width: 400px; height: 300px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; position: relative; ">
						<canvas class="base" width="400" height="300"></canvas><canvas class="overlay" width="400" height="300" style="position: absolute; left: 0px; top: 0px; "></canvas>
						<div class="legend">
							<div style="position: absolute; width: 56px; height: 96px; top: 5px; right: 5px; background-color: rgb(255, 255, 255); opacity: 0.85; "></div>
							<table style="position:absolute;top:5px;right:5px;;font-size:smaller;color:#545454">
								<tbody>
									<tr>
										<td class="legendColorBox">
										<div style="border:1px solid #ccc;padding:1px">
											<div style="width:4px;height:0;border:5px solid rgb(237,194,64);overflow:hidden"></div>
										</div></td><td class="legendLabel">Series1</td>
									</tr>
									<tr>
										<td class="legendColorBox">
										<div style="border:1px solid #ccc;padding:1px">
											<div style="width:4px;height:0;border:5px solid rgb(175,216,248);overflow:hidden"></div>
										</div></td><td class="legendLabel">Series2</td>
									</tr>
									<tr>
										<td class="legendColorBox">
										<div style="border:1px solid #ccc;padding:1px">
											<div style="width:4px;height:0;border:5px solid rgb(203,75,75);overflow:hidden"></div>
										</div></td><td class="legendLabel">Series3</td>
									</tr>
									<tr>
										<td class="legendColorBox">
										<div style="border:1px solid #ccc;padding:1px">
											<div style="width:4px;height:0;border:5px solid rgb(77,167,77);overflow:hidden"></div>
										</div></td><td class="legendLabel">Series4</td>
									</tr>
									<tr>
										<td class="legendColorBox">
										<div style="border:1px solid #ccc;padding:1px">
											<div style="width:4px;height:0;border:5px solid rgb(148,64,237);overflow:hidden"></div>
										</div></td><td class="legendLabel">Series5</td>
									</tr>
									<tr>
										<td class="legendColorBox">
										<div style="border:1px solid #ccc;padding:1px">
											<div style="width:4px;height:0;border:5px solid rgb(189,155,51);overflow:hidden"></div>
										</div></td><td class="legendLabel">Series6</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
{/block}