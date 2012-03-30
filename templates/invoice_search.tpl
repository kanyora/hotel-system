{extends "base.tpl"}

{block "right"}
	<div class="btn-box">
		<div class="content">
			<form action="." method="POST">
				<table>
					<tr>
						<td><label>Location</label></td>
						<td>
							<select name="location">
								<option value="">Select Location</option>
								<option value="Langata">Langata</option>
							  <option value="Rongai">Rongai</option>
							  <option value="Karen">Karen</option>
							  <option value="Madaraka">Madaraka</option>
							  <option value="Nairobi west">Nairobi West</option>
							  <option value="South b">South B</option>
							  <option value="South c">South C</option>
							  <option value="Ngumo">Ngumo</option>
							  <option value="Highrise">Highrise</option>
							  <option value="Adams Arcade">Adams Arcade</option>
							  <option value="Mimosa">Mimosa</option>
							  <option value="Ngong">Ngong</option>
							  <option value="Westlands">Westlands</option>
							  <option value="Embakassi">Embakassi</option>
							  <option value="Buruburu">Buruburu</option>
							  <option value="Kasarani">Kasarani</option>
							  <option value="City Stadium">City Stadium</option>
							  <option value="Moi Avenue">Moi AvenueHighrise</option>
							  <option value="Tom Mboya Street">Tom Mboya Street</option>
							  <option value="Ring Road">Ring Road</option>
							  <option value="Bellevue">Bellevue</option>
							  <option value="Kilimani">Kilimani</option>
							  <option value="Lavington">Lavington</option>
							  <option value="Kileleshwa">Kileleshwa</option>
							  <option value="Hurlinghum">Hurlinghum</option>
							</select>
						</td>
					</tr>
					<tr>
						<td><label>Status</label></td>
						<td>
							<select name="status">
								<option value="">Select Status</option>
								<option value="0">Unattended</option>
								<option value="1">Attended</option>
							</select>
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<input type="submit" value="Generate Reports"/>
						</td>
					</tr>
				</table>
			</form>
		</div>
	</div>
{/block}
