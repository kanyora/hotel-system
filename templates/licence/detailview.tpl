{extends "base.tpl"}

{block "body"}
	<p>
		Applicant Name {$licence->applicant_name}
	</p>
	<p>
		Applicant Address {$licence->address}
	</p>
	<p>
		Licence Number {$licence->licence_number}
	</p>
	<p>
		Certificate of Competence Number {$licence->certificate_of_competence}
	</p>
	<p>
		Driving Test Date {$licence->driving_test_date}
	</p>
	<p>
		Driving Test Place {$licence->driving_test_place}
	</p>
	<p>
		{if !$licence->status == 'approved'}
			<form action="{#BASE_URL#}/licences/{$licence->id}/approve/" method="POST">
				<input type="submit" value="Approve Licence"/>
			</form>
		{else if !$licence->status == 'rejected'}
			<form action="{#BASE_URL#}/licences/{$licence->id}/approve/" method="POST">
				<input type="submit" value="Approve Licence"/>
			</form>
		{else $licence->status == 'approved'}
			{if $licence->paying_now_is_reasonable()}
				<a href="{#BASE_URL#}/licences/{$licence->id}/renew/">Re-new Licence</a>
				<a href="{#BASE_URL#}/licences/{$licence->id}/renew/">Re-new Licence</a>
			{/if}
		{/if}
	</p>
{/block}