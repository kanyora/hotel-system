{extends "licence/add.tpl"}

{block 'form-items'}
	<p>
		<label for="id_applicant_title">Applicant Title:</label>
	    {html_options options=$titles selected=$licence->applicant_title name="licence[applicant_title]"}
	</p>
	<p>
		<label for="id_applicant_name">Applicant Name:</label>
		<input type="text" name="licence[applicant_name]" value="{$licence->applicant_name}" />
	</p>
	<p>
		<label for="id_driving_test_place">Applicant Address:</label>
		<input type="text" name="licence[address]" value="{$licence->address}" />
	</p>
	<p>
		<label for="id_licence_number">Licence Number:</label>
		<input type="text" name="licence[licence_number]" value="{$licence->licence_number}" />
	</p>
	<p>
		<label for="id_certificate_of_competence">Certificate of Competence Number:</label>
		<input type="text" name="licence[certificate_of_competence]" value="{$licence->certificate_of_competence}" />
	</p>
	<p>
		<label for="id_driving_test_date">Driving Test Date:</label>
		<input type="text" name="licence[driving_test_date]" value="{$licence->driving_test_date}" />
	</p>
	<p>
		<label for="id_driving_test_place">Driving Test Place:</label>
		<input type="text" name="licence[driving_test_place]" value="{$licence->driving_test_place}" />
	</p>
{/block}