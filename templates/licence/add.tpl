{extends "base.tpl"}

{block "body"}
	<h2>New Licence Application: </h2>
	<form method="POST" action=".">
		<input type="hidden" name="licence[type]" value="licence" />
		<p>
			<label for="id_applicant_title">Applicant Title:</label>
			<select>
				<option value="">Title:</option>
				<option value="Mr">Mr</option>
				<option value="Mrs">Mrs</option>
				<option value="Miss">Miss</option>
				<option value="Doctor">Doctor</option>
				<option value="Professor">Professor</option>
			</select>
		</p>
		<p>
			<label for="id_applicant_name">Applicant Name:</label>
			<input type="text" name="licence[applicant_name]" value="" />
		</p>
		<p>
			<label for="id_driving_test_place">Applicant Address:</label>
			<input type="text" name="licence[address]" value="" />
		</p>
		<p>
			<label for="id_licence_number">Licence Number:</label>
			<input type="text" name="licence[licence_number]" value="" />
		</p>
		<p>
			<label for="id_certificate_of_competence">Certificate of Competence Number:</label>
			<input type="text" name="licence[certificate_of_competence]" value="" />
		</p>
		<p>
			<label for="id_driving_test_date">Driving Test Date:</label>
			<input type="text" name="licence[driving_test_date]" value="" />
		</p>
		<p>
			<label for="id_driving_test_place">Driving Test Place:</label>
			<input type="text" name="licence[driving_test_place]" value="" />
		</p>
		<p>
			<input type="submit" value="Add">
		</p>
	</form>
{/block}