<?php
function createPDF($payment){
	// create new PDF document
	$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
	
	// set document information
	$pdf->SetCreator(PDF_CREATOR);
	$pdf->SetAuthor($BASE_URL);
	$pdf->SetTitle('Reports');
	
	// set default header data
	$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 006', PDF_HEADER_STRING);
	
	// set header and footer fonts
	$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
	$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
	
	// set default monospaced font
	$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
	
	//set margins
	$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
	$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
	$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
	
	//set auto page breaks
	$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
	
	//set image scale factor
	$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
	
	//set some language-dependent strings
	$pdf->setLanguageArray($l);
	
	// ---------------------------------------------------------
	
	// set font
	$pdf->SetFont('dejavusans', '', 10);
	
	// add a page
	$pdf->AddPage();
	
	$html = '<h2>HTML TABLE:</h2>
	<table border="0" cellspacing="3" cellpadding="4">
		<tr>
			<th colspan="4">KRA Reports</th>
		</tr>
		<tr>
			<td colspan="4"><H1>Payment E-Slip</H1></td>
		</tr>
		<tr>
			<td colspan="4"><H3><u>'.$payment->licence->user->username.', Email: '.$payment->licence->user->email.'<u></H3></td>
		</tr>
		<tr>
			<td colspan="1">Licence Number:</td>
			<td colspan="3"><H1>'.$payment->licence->licence_number.'</H1></td>
		</tr>
		<tr>
			<td colspan="1">Licence Type:</td>
			<td colspan="3"><H1>'.$payment->licence->type.'</H1></td>
		</tr>
		<tr>
			<td colspan="1">Mpesa Code:</td>
			<td colspan="3"><H1>'.$payment->mpesa_code.'</H1></td>
		</tr>
		<tr>
			<td colspan="1">Amount Received:</td>
			<td colspan="3"><H1>'.$payment->amount_paid.'</H1></td>
		</tr>
		<tr>
			<td colspan="1">Time Received:</td>
			<td colspan="3"><H1>'.date('d/m/Y H:i:s', $payment->time_of_transaction).'</H1></td>
		</tr>
		<tr>
			<td colspan="1">Expiry Date:</td>
			<td colspan="3"><H1>'.date('d/m/Y H:i:s', $payment->expiry_date).'</H1></td>
		</tr>
		<tr>
			<td colspan="4">Generated E-slip</td>
		</tr>
	</table>';
	
	$pdf->writeHTML($html, true, false, true, false, '');
	$pdf->lastPage();
	$pdf->Output("$payment->licence->user->username-$payment->licence->licence_number-E-slip".date('d/m/Y H:i:s').'.pdf', 'I');
}
