<!doctype html> <!--[if lt IE 7 ]> <html lang="dir="ltr" lang="en-US"" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="dir="ltr" lang="en-US"" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="dir="ltr" lang="en-US"" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="dir="ltr" lang="en-US"" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="dir="ltr" lang="en-US"" class="no-js">
	<!--<![endif]-->
	<head>
		<meta charset="UTF-8" />
		<title>Storefront Echo JigoShopJust another Storefront Themes Demo site</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Fixes for IE -->
		<!--[if IE]>
		<link rel="stylesheet" href="{#BASE_URL#}/static/css/ie.css" type="text/css" media="screen" />
		<![endif]-->
		<!-- use "fixed-984px-ie.css" or "fixed-960px-ie.css for a 984px or 960px fixed width for IE6 and 7 -->
		<!--[if lte IE 7]>
		<link rel="stylesheet" href="{#BASE_URL#}/static/css/fixed-984px-ie.css" type="text/css" media="screen" />
		<![endif]-->
		<!-- Fixes for IE6, only needed if IE 6 will be supported - width must match 984px or 960px of css file used above -->
		<!-- Use .imagescale to fix IE6 issues with full-column width images (class must be added to any image wider than the column it is placed into) -->
		<!--[if lte IE 6]>
		<link rel="stylesheet" href="{#BASE_URL#}/static/css/ie6-984px.css" type="text/css" media="screen" />
		<![endif]-->
		<!-- End fixes for IE -->
		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="stylesheet" type="text/css" media="all" href="{#BASE_URL#}/static/css/style.css" />
		<link rel="pingback" href="{#BASE_URL#}/xmlrpc.php" />
		<!-- Load Modernizr which enables HTML5 elements & feature detects -->
		<script src="{#BASE_URL#}/static/js/modernizr-2.0.6.min.js"></script>
		<link rel='stylesheet' id='jigoshop_frontend_styles-css'  href='{#BASE_URL#}/static/css/frontend.css' type='text/css' media='all' />
		<link rel='stylesheet' id='jqueryui_styles-css'  href='{#BASE_URL#}/static/css/ui.css' type='text/css' media='all' />
		<link rel='stylesheet' id='jigoshop_fancybox_styles-css'  href='{#BASE_URL#}/static/css/fancybox.css' type='text/css' media='all' />
		<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js?ver=1.4.4'></script>
		<script type='text/javascript' src='{#BASE_URL#}/static/js/jquery.fancybox-1.3.4.pack.js?ver=1.0'></script>
		<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.13/jquery-ui.min.js?ver=1.0'></script>
		<script type='text/javascript' src='{#BASE_URL#}/static/js/jigoshop_frontend.js?ver=1.0'></script>
		<script type='text/javascript'>
			{literal}
				/* <![CDATA[ */
				var params = {
					"currency_symbol" : "$",
					"countries" : "{\"AL\":{\"BER\":\"Berat\",\"DIB\":\"Dib\u00ebr\",\"DUR\":\"Durr\u00ebs\",\"ELB\":\"Elbasan\",\"FIE\":\"Fier\",\"GJI\":\"Gjirokast\u00ebr\",\"KOR\":\"Kor\u00e7\u00eb\",\"KUK\":\"Kuk\u00ebs\",\"LEZ\":\"Lezh\u00eb\",\"SHK\":\"Shkod\u00ebr\",\"TIR\":\"Tiran\u00eb\",\"VLO\":\"Vlor\u00eb\"},\"AU\":{\"ACT\":\"Australian Capital Territory\",\"NSW\":\"New South Wales\",\"NT\":\"Northern Territory\",\"QLD\":\"Queensland\",\"SA\":\"South Australia\",\"TAS\":\"Tasmania\",\"VIC\":\"Victoria\",\"WA\":\"Western Australia\"},\"BR\":{\"AC\":\"Acre\",\"AL\":\"Alagoas\",\"AM\":\"Amazonas\",\"AP\":\"Amap\u00e1\",\"BA\":\"Bahia\",\"CE\":\"Cear\u00e1\",\"DF\":\"Distrito federal\",\"ES\":\"Esp\u00edrito santo\",\"GO\":\"Goi\u00e1s\",\"MA\":\"Maranh\u00e3o\",\"MG\":\"Minas gerais\",\"MS\":\"Mato grosso do sul\",\"MT\":\"Mato grosso\",\"PA\":\"Par\u00e1\",\"PB\":\"Paraiba\",\"PE\":\"Pernambuco\",\"PI\":\"Piau\u00ed\",\"PR\":\"Paran\u00e1\",\"RJ\":\"Rio de janeiro\",\"RN\":\"Rio grande do norte\",\"RO\":\"Rond\u00f4nia\",\"RR\":\"Roraima\",\"RS\":\"Rio grande do sul\",\"SC\":\"Santa catarina\",\"SE\":\"Sergipe\",\"SP\":\"S\u00e3o paulo\",\"TO\":\"Tocantins\"},\"CA\":{\"AB\":\"Alberta\",\"BC\":\"British Columbia\",\"MB\":\"Manitoba\",\"NB\":\"New Brunswick\",\"NL\":\"Newfoundland\",\"NS\":\"Nova Scotia\",\"NT\":\"Northwest Territories\",\"NU\":\"Nunavut\",\"ON\":\"Ontario\",\"PE\":\"Prince Edward Island\",\"QC\":\"Quebec\",\"SK\":\"Saskatchewan\",\"YT\":\"Yukon Territory\"},\"CH\":{\"AG\":\"Aargau\",\"AI\":\"Appenzell Innerrhoden\",\"AR\":\"Appenzell Ausserrhoden\",\"BE\":\"Bern\",\"BL\":\"Basel-Landschaft\",\"BS\":\"Basel-Stadt\",\"FR\":\"Freiburg\",\"GE\":\"Genf\",\"GL\":\"Glarus\",\"JU\":\"Jura\",\"LU\":\"Luzern\",\"NE\":\"Neuenburg\",\"NW\":\"Nidwalden\",\"OW\":\"Obwalden\",\"SG\":\"St. Gallen\",\"SH\":\"Schaffhausen\",\"SO\":\"Solothurn\",\"SZ\":\"Schwyz\",\"TG\":\"Thurgau\",\"TI\":\"Tessin\",\"UR\":\"Uri\",\"VD\":\"Waadt\",\"VS\":\"Wallis\",\"ZG\":\"Zug\",\"ZH\":\"Z\u00fcrich\"},\"ES\":{\"AA\":\"\u00c1lava\",\"AB\":\"Albacete\",\"AN\":\"Alicante\",\"AM\":\"Almer\u00eda\",\"AS\":\"Asturias\",\"AV\":\"\u00c1vila\",\"BD\":\"Badajoz\",\"BL\":\"Baleares\",\"BR\":\"Barcelona\",\"BU\":\"Burgos\",\"CC\":\"C\u00e1ceres\",\"CD\":\"C\u00e1diz\",\"CN\":\"Cantabria\",\"CS\":\"Castell\u00f3n\",\"CE\":\"Ceuta\",\"CR\":\"Ciudad Real\",\"CO\":\"C\u00f3rdoba\",\"CU\":\"Cuenca\",\"GN\":\"Gerona\",\"GD\":\"Granada\",\"GJ\":\"Guadalajara\",\"GP\":\"Guip\u00fazcoa\",\"HL\":\"Huelva\",\"HS\":\"Huesca\",\"JA\":\"Ja\u00e9n\",\"AC\":\"La Coru\u00f1a\",\"LR\":\"La Rioja\",\"LP\":\"Las Palmas\",\"LN\":\"Le\u00f3n\",\"LD\":\"L\u00e9rida\",\"LG\":\"Lugo\",\"MD\":\"Madrid\",\"MG\":\"M\u00e1laga\",\"ME\":\"Melilla\",\"MR\":\"Murcia\",\"NV\":\"Navarra\",\"OR\":\"Orense\",\"PL\":\"Palencia\",\"PV\":\"Pontevedra\",\"SL\":\"Salamanca\",\"SC\":\"Santa Cruz de Tenerife\",\"SG\":\"Segovia\",\"SV\":\"Sevilla\",\"SR\":\"Soria\",\"TG\":\"Tarragona\",\"TE\":\"Teruel\",\"TD\":\"Toledo\",\"VN\":\"Valencia\",\"VD\":\"Valladolid\",\"VZ\":\"Vizcaya\",\"ZM\":\"Zamora\",\"ZG\":\"Zaragoza\"},\"CZ\":{\"JC\":\"Jihocesk\u00fd kraj\u00a0[South Bohemian Region]\",\"JM\":\"Jihomoravsk\u00fd kraj\u00a0[South Moravian Region]\",\"KA\":\"Karlovarsk\u00fd kraj\u00a0[Karlovy Vary Region]\",\"KR\":\"Kr\u00e1lov\u00e9hradeck\u00fd kraj\u00a0[Hradec Kr\u00e1lov\u00e9 Region]\",\"LI\":\"Libereck\u00fd kraj\u00a0[Liberec Region]\",\"MO\":\"Moravskoslezsk\u00fd kraj\u00a0[Moravian-Silesian Region]\",\"OL\":\"Olomouck\u00fd kraj\u00a0[Olomouc Region]\",\"PA\":\"Pardubick\u00fd kraj\u00a0[Pardubice Region]\",\"PL\":\"Plzensk\u00fd kraj\u00a0[Plzen Region]\",\"PR\":\"Praha\u00a0(Hlavni mesto Praha) [Prague]\",\"ST\":\"Stredocesk\u00fd kraj\u00a0[Central Bohemian Region]\",\"US\":\"\u00dasteck\u00fd kraj\u00a0[\u00dast\u00ed Region]\",\"VY\":\"Vysocina\",\"ZL\":\"Zl\u00ednsk\u00fd kraj\u00a0[Zl\u00edn Region]\"},\"DE\":{\"NDS\":\"Niedersachsen\",\"BAW\":\"Baden-W\u00fcrttemberg\",\"BAY\":\"Bayern\",\"BER\":\"Berlin\",\"BRG\":\"Brandenburg\",\"BRE\":\"Bremen\",\"HAM\":\"Hamburg\",\"HES\":\"Hessen\",\"MEC\":\"Mecklenburg-Vorpommern\",\"NRW\":\"Nordrhein-Westfalen\",\"RHE\":\"Rheinland-Pfalz\",\"SAR\":\"Saarland\",\"SAS\":\"Sachsen\",\"SAC\":\"Sachsen-Anhalt\",\"SCN\":\"Schleswig-Holstein\",\"THE\":\"Th\u00fcringen\"},\"FI\":{\"\u00c5AL\":\"\u00c5land\",\"EKA\":\"Etel\u00e4-Karjala [South Karelia]\",\"EPO\":\"Etel\u00e4-Pohjanmaa [South Ostrobothnia]\",\"ESA\":\"Etel\u00e4-Savo\",\"KAI\":\"Kainuu\",\"KH\u00c4\":\"Kanta-H\u00e4me\",\"KPO\":\"Keski-Pohjanmaa [Central Ostrobothnia]\",\"KSO\":\"Keski-Suomi [Central Finland]\",\"KYM\":\"Kymenlaakso (Kymmenedalen)\",\"LAP\":\"Lappi [Lapland]\",\"PH\u00c4\":\"P\u00e4ij\u00e4t-H\u00e4me\",\"PIR\":\"Pirkanmaa\",\"POH\":\"Pohjanmaa [Ostrobothnia]\",\"PKA\":\"Pohjois-Karjala [North Karelia]\",\"PPO\":\"Pohjois-Pohjanmaa [North Ostrobothnia]\",\"PSA\":\"Pohjois-Savo\",\"SAT\":\"Satakunta\",\"UUS\":\"Uusimaa (Nyland)\",\"VSS\":\"Varsinais-Suomi (Egentliga Finland)\"},\"FR\":{\"ALS\":\"Alsace\",\"AQU\":\"Aquitaine\",\"AUV\":\"Auvergne\",\"BAS\":\"Basse-Normandie [Lower Normandy]\",\"BOU\":\"Bourgogne [Burgundy]\",\"BRE\":\"Bretagne [Brittany]\",\"CEN\":\"Centre\",\"CHA\":\"Champagne - Ardenne\",\"COR\":\"Corse\",\"FRA\":\"Franche-Comt\u00e9\",\"HAU\":\"Haute-Normandie [Upper Normandy]\",\"ILE\":\"\u00cele-de-France\",\"LAN\":\"Languedoc - Roussillon\",\"LIM\":\"Limousin\",\"LOR\":\"Lorraine\",\"MID\":\"Midi - Pyr\u00e9n\u00e9es\",\"NOR\":\"Nord - Pas-de-Calais\",\"PAY\":\"Pays de la Loire\",\"PIC\":\"Picardie\",\"POI\":\"Poitou - Charentes\",\"PRO\":\"Provence - Alpes - C\u00f4te d'Azur\",\"RHO\":\"Rh\u00f4ne - Alpes\"},\"GR\":{\"AOR\":\"\u00c1gio \u00d3ros [Mount Athos]\",\"AMT\":\"Anatolik\u00ed Makedon\u00eda & Thrak\u00ed [East Macedonia & Thrace]\",\"ATT\":\"Attik\u00ed [Attica]\",\"DEL\":\"Dytik\u00ed Ell\u00e1da [Western Greece]\",\"DMD\":\"Dytik\u00ed Makedon\u00eda [West Macedonia]\",\"ION\":\"I\u00f3nia Nisi\u00e1 [Ionian Islands]\",\"IPI\":\"\u00cdpiros [Epirus]\",\"KMD\":\"Kedrik\u00ed Makedon\u00eda [Central Macedonia]\",\"KRI\":\"Kr\u00edti [Crete]\",\"NAI\":\"N\u00f3tio Aiga\u00edo [South Aegean]\",\"PEL\":\"Pelop\u00f3nnisos [Peloponnese]\",\"SEL\":\"Stere\u00e1 Ell\u00e1da [Central Greece]\",\"THE\":\"Thessal\u00eda [Thessaly]\",\"VAI\":\"V\u00f3rio Aiga\u00edo [Northern Aegean]\"},\"HK\":{\"HONG KONG\":\"Hong Kong Island\",\"KOWLOONG\":\"Kowloong\",\"NEW TERRITORIES\":\"New Territories\"},\"HU\":{\"BAC\":\"B\u00e1cs-Kiskun\",\"BAR\":\"Baranya\",\"BEK\":\"B\u00e9k\u00e9s\",\"BOR\":\"Borsod-Aba\u00faj-Zempl\u00e9n\",\"BUD\":\"Budapest\",\"CSO\":\"Csongr\u00e1d\",\"FEJ\":\"Fej\u00e9r\",\"GY\u00d6\":\"Gyor-Moson-Sopron\",\"HAJ\":\"Hajd\u00fa-Bihar\",\"HEV\":\"Heves\",\"JAS\":\"J\u00e1sz-Nagykun-Szolnok\",\"KOM\":\"Kom\u00e1rom-Esztergom\",\"NOG\":\"N\u00f3gr\u00e1d\",\"PES\":\"Pest\",\"SOM\":\"Somogy\",\"SZA\":\"Szabolcs-Szatm\u00e1r-Bereg\",\"TOL\":\"Tolna\",\"VAS\":\"Vas\",\"VES\":\"Veszpr\u00e9m\",\"ZAL\":\"Zala\"},\"IE\":{\"G\":\"Galway (incl. Galway City)\",\"LM\":\"Leitrim\",\"MO\":\"Mayo\",\"RN\":\"Roscommon\",\"SO\":\"Sligo\",\"CW\":\"Carlow\",\"D\":\"Dublin\",\"DR\":\"D\u00fan Laoghaire-Rathdown\",\"FG\":\"Fingal\",\"KE\":\"Kildare\",\"KK\":\"Kilkenny\",\"LS\":\"Laois\",\"LD\":\"Longford\",\"LH\":\"Louth\",\"MH\":\"Meath\",\"OY\":\"Offaly\",\"SD\":\"South Dublin\",\"WH\":\"Westmeath\",\"WX\":\"Wexford\",\"WW\":\"Wicklow\",\"CE\":\"Clare\",\"C\":\"Cork (incl. Cork City)\",\"KY\":\"Kerry\",\"LK\":\"Limerick (incl. Limerick City)\",\"NT\":\"North Tipperary\",\"ST\":\"South Tipperary\",\"WD\":\"Waterford (incl. Waterford City)\",\"CN\":\"Cavan\",\"DL\":\"Donegal\",\"MIN\":\"Monaghan\"},\"NL\":{\"D\":\"Drenthe\",\"Fl\":\"Flevoland\",\"Fr\":\"Friesland\",\"Gld\":\"Gelderland\",\"Gr\":\"Groningen\",\"L\":\"Limburg\",\"N-B\":\"Noord-Brabant\",\"N-H\":\"Noord-Holland\",\"O\":\"Overijssel\",\"U\":\"Utrecht\",\"Z\":\"Zeeland\",\"Z-H\":\"Zuid-Holland\"},\"RO\":{\"ALB\":\"Alba\",\"ARA\":\"Arad\",\"ARG\":\"Arges\",\"BAC\":\"Bacau\",\"BIH\":\"Bihor\",\"BIS\":\"Bistrita-Nasaud\",\"BOT\":\"Botosani\",\"BRA\":\"Braila\",\"BRS\":\"Brasov\",\"BUC\":\"Bucuresti\",\"BUZ\":\"Buzau\",\"CAL\":\"Calarasi\",\"CAR\":\"Caras-Severin\",\"CLU\":\"Cluj\",\"CON\":\"Constanta\",\"COV\":\"Covasna\",\"DAM\":\"D\u00e2mbovita\",\"DOL\":\"Dolj\",\"GAL\":\"Galati\",\"GIU\":\"Giurgiu\",\"GOR\":\"Gorj\",\"HAR\":\"Harghita\",\"HUN\":\"Hunedoara\",\"IAL\":\"Ialomita\",\"IAS\":\"Iasi\",\"ILF\":\"Ilfov\",\"MAR\":\"Maramures\",\"MEH\":\"Mehedinti\",\"MUR\":\"Mures\",\"NEA\":\"Neamt\",\"OLT\":\"Olt\",\"PRA\":\"Prahova\",\"SAL\":\"Salaj\",\"SAT\":\"Satu Mare\",\"SIB\":\"Sibiu\",\"SUC\":\"Suceava\",\"TEL\":\"Teleorman\",\"TIM\":\"Timis\",\"TUL\":\"Tulcea\",\"VAL\":\"V\u00e2lcea\",\"VAS\":\"Vaslui\",\"VRA\":\"Vrancea\"},\"SR\":{\"BOR\":\"Bor\",\"BRA\":\"Branicevo\",\"GBE\":\"Grad Beograd\u00a0\",\"JAB\":\"Jablanica\",\"KOL\":\"Kolubara\",\"MAC\":\"Macva\",\"MOR\":\"Moravica\",\"NIS\":\"Ni\u0161ava\",\"PCI\":\"Pcinja\",\"PIR\":\"Pirot\",\"POD\":\"Podunavlje\u00a0[Danube]\",\"POM\":\"Pomoravlje\",\"RSN\":\"Rasina\",\"RSK\":\"Ra\u0161ka\",\"SUM\":\"\u0160umadija\",\"TOP\":\"Toplica\",\"ZAJ\":\"Zajecar\",\"ZLA\":\"Zlatibor\",\"JBK\":\"Ju\u017ena Backa\u00a0\",\"JBN\":\"Ju\u017eni Banat\u00a0\",\"SBK\":\"Severna Backa\u00a0\",\"SBN\":\"Severni Banat\u00a0\",\"SRB\":\"Srednji Banat\u00a0\",\"SRE\":\"Srem\",\"ZBK\":\"Zapadna Backa\u00a0[West Backa]\"},\"SE\":{\"BLE\":\"Blekinge l\u00e4n\",\"DAL\":\"Dalarnas l\u00e4n\",\"G\u00c4V\":\"G\u00e4vleborgs l\u00e4n\",\"GOT\":\"Gotlands l\u00e4n\",\"HAL\":\"Hallands l\u00e4n\",\"J\u00c4M\":\"J\u00e4mtlands l\u00e4n\",\"J\u00d6N\":\"J\u00f6nk\u00f6pings l\u00e4n\",\"KAL\":\"Kalmar l\u00e4n\",\"KRO\":\"Kronobergs l\u00e4n\",\"NOR\":\"Norrbottens l\u00e4n\",\"\u00d6RE\":\"\u00d6rebro l\u00e4n\",\"\u00d6ST\":\"\u00d6sterg\u00f6tlands l\u00e4n\",\"SKA\":\"Sk\u00e5ne l\u00e4n\",\"S\u00d6D\":\"S\u00f6dermanlands l\u00e4n\",\"STO\":\"Stockholms l\u00e4n\",\"UPP\":\"Uppsala l\u00e4n\",\"V\u00c4R\":\"V\u00e4rmlands l\u00e4n\",\"V\u00c4S\":\"V\u00e4sterbottens l\u00e4n\",\"VNL\":\"V\u00e4sternorrlands l\u00e4n\",\"VML\":\"V\u00e4stmanlands l\u00e4n\",\"VG\u00d6\":\"V\u00e4stra G\u00f6talands l\u00e4n\"},\"US\":{\"AK\":\"Alaska\",\"AL\":\"Alabama\",\"AR\":\"Arkansas\",\"AZ\":\"Arizona\",\"CA\":\"California\",\"CO\":\"Colorado\",\"CT\":\"Connecticut\",\"DC\":\"District Of Columbia\",\"DE\":\"Delaware\",\"FL\":\"Florida\",\"GA\":\"Georgia\",\"HI\":\"Hawaii\",\"IA\":\"Iowa\",\"ID\":\"Idaho\",\"IL\":\"Illinois\",\"IN\":\"Indiana\",\"KS\":\"Kansas\",\"KY\":\"Kentucky\",\"LA\":\"Louisiana\",\"MA\":\"Massachusetts\",\"MD\":\"Maryland\",\"ME\":\"Maine\",\"MI\":\"Michigan\",\"MN\":\"Minnesota\",\"MO\":\"Missouri\",\"MS\":\"Mississippi\",\"MT\":\"Montana\",\"NC\":\"North Carolina\",\"ND\":\"North Dakota\",\"NE\":\"Nebraska\",\"NH\":\"New Hampshire\",\"NJ\":\"New Jersey\",\"NM\":\"New Mexico\",\"NV\":\"Nevada\",\"NY\":\"New York\",\"OH\":\"Ohio\",\"OK\":\"Oklahoma\",\"OR\":\"Oregon\",\"PA\":\"Pennsylvania\",\"RI\":\"Rhode Island\",\"SC\":\"South Carolina\",\"SD\":\"South Dakota\",\"TN\":\"Tennessee\",\"TX\":\"Texas\",\"UT\":\"Utah\",\"VA\":\"Virginia\",\"VT\":\"Vermont\",\"WA\":\"Washington\",\"WI\":\"Wisconsin\",\"WV\":\"West Virginia\",\"WY\":\"Wyoming\"},\"USAF\":{\"AA\":\"Americas\",\"AE\":\"Europe\",\"AP\":\"Pacific\"}}",
					"select_state_text" : "Select a state\u2026",
					"state_text" : "state",
					"assets_url" : "http:\/\/storefrontthemes.com\/demo\/echojigo\/wp-content\/plugins\/jigoshop",
					"ajax_url" : "http:\/\/storefrontthemes.com\/demo\/echojigo\/wp-admin\/admin-ajax.php",
					"get_variation_nonce" : "6351552357",
					"update_order_review_nonce" : "1fd5a94676",
					"billing_state" : "UT",
					"shipping_state" : "UT",
					"option_guest_checkout" : "yes",
					"checkout_url" : "http:\/\/storefrontthemes.com\/demo\/echojigo\/wp-admin\/admin-ajax.php?action=jigoshop-checkout",
					"load_fancybox" : "1",
					"is_checkout" : "0"
				};
				/* ]]> */
			{/literal}
		</script>
		<script type='text/javascript' src='{#BASE_URL#}/static/js/script.js'></script>
		<script type='text/javascript'>
			/* <![CDATA[ */
			var BP_DTheme = {
				"my_favs" : "My Favorites",
				"accepted" : "Accepted",
				"rejected" : "Rejected",
				"show_all_comments" : "Show all comments for this thread",
				"show_all" : "Show all",
				"comments" : "comments",
				"close" : "Close",
				"view" : "View"
			};
			/* ]]> */
		</script>
		<script type='text/javascript' src='{#BASE_URL#}/static/js/global.js'></script>
		<script type='text/javascript' src='{#BASE_URL#}/static/js/sft-fancycart.js'></script>
		<script type='text/javascript' src='{#BASE_URL#}/static/js/sft-fancycart.js'></script>
		<script type='text/javascript' src='{#BASE_URL#}/static/js/jquery.blueberry.js'></script>
		<script type='text/javascript' src='{#BASE_URL#}/static/js/jquery.flexslider-min.js'></script>
		<script type='text/javascript' src='{#BASE_URL#}/static/js/buddynav.js'></script>
		<link href="{#BASE_URL#}/static/css/custom.css" rel="stylesheet" type="text/css" />
		<!-- storefront Styling -->
		<style type="text/css">
			#logo {
				margin: 10px;
			}
			@media handheld, only screen and (max-width: 767px) {
				#logo {
					margin: 20px 0px 0px;
				}
			}
			.box {
				-moz-box-shadow-color: #000;
				-webkit-box-shadow-color: #000;
				box-shadow-color: #000;
			}
			#content-bottom h3 {
				font-size: 18px;
			}
		</style>
		<!--[if IE 6]>
		<script type="text/javascript" src="{#BASE_URL#}/static/includes/js/pngfix.js"></script>
		<link rel="stylesheet" type="text/css" media="all" href="{#BASE_URL#}/static/css/ie6.css" />
		<![endif]-->
		<!--[if IE 7]>
		<link rel="stylesheet" type="text/css" media="all" href="{#BASE_URL#}/static/css/ie7.css" />
		<![endif]-->
		<!--[if IE 8]>
		<link rel="stylesheet" type="text/css" media="all" href="{#BASE_URL#}/static/css/ie8.css" />
		<![endif]-->
		<!-- Scripts -->
		<style>
			{literal}
				body {
				font-family:Quicksand;	font-size:14px;	background-color:#b85102;			
				background-image:url('{#BASE_URL#}/static/images/wood.png');
				background-repeat:repeat;
				}
	
				body a.button, body button.button, body input.button, body #review_form #submit,body.jigoshop a.button, body.jigoshop button.button, body.jigoshop input.button, body.jigoshop #review_form #submit,input[type="submit"] {font-size:14px!important;font-family:Quicksand!important;}
	
				/* LOGO */
				#logo a {}
				#logo a:hover {}
				#logo a {font-family:Changa One;}
				#logo a {font-size:36px;}
	
				/* HEADING */
				h1 {font-size:30px;}
				h2 {font-size:26px;}
	
				#content h1, #content h2 {font-family:Yanone Kaffeesatz;}
	
				/* TEXT */
				body,body.woocommerce li.dish a h3  {}
	
				/* BOX SHADOW */
				.box,#content-bottom {-moz-box-shadow: 0px 0px 6px #000;-webkit-box-shadow: 0px 0px 6px #000;box-shadow: 0px 0px 6px #000;}
	
				/* BOTTOM CONTENT */
				#content-bottom, #content-bottom h3 a {}
	
				#content-bottom a,#popupaddtocart a,#navcommunity a {color:#a7de1b;}
	
				/* FOOTER */
				#footer p {color:#ffffff;}
	
				#footer p a {color:#a7de1b;}
	
				/* LINKS */
				a,span.user-nicename {color:#7CA122;}
	
				ul#nav li a, a.navcart {}
	
				body div.item-list-tabs ul li a span {background:#7CA122;}
	
				#navcommunity a,#navcommunity a:hover {}
	
				/* FRAME SHADOWS */
				#content .blueberry img {}
	
				.box {}
	
				/* BUTTON COLORS */
	
				input[type="submit"], a.button,a.button.alt, button.button.alt, input.button.alt, #review_form #submit.alt,body.woocommerce-cart form.shipping_calculator button.button,body.jigoshop .button-alt,body.jigoshop .cart-collaterals .shipping_calculator .button,body.jigoshop a.button, body.jigoshop button.button, body.jigoshop input.button, body #review_form #submit,.searcheddish a.button,body a.button {
				border-color: #87bf00!important; border-bottom-color: #7ca122!important; background-color: #8dc11e;
				background: #87c000;
				background: -webkit-gradient(linear,left top,left bottom,color-stop(.2, #a0d53a),color-stop(1, #60b513));
				background: -moz-linear-gradient(center top,#a0d53a 20%,#60b513 100%);
				}
				a.button:hover,.custombutton:hover, .custombutton.hover, .custombutton.active, #content input[type="submit"]:hover, #content input[type="submit"].hover, #content input[type="submit"].active, #content input[type="button"]:hover, #content input[type="button"].hover, #content input[type="button"].active,a.button.alt:hover,a.button.alt.hover,a.button.alt.active, button.button.alt:hover,button.button.alt.hover,button.button.alt:active, input.button.alt:hover,input.button.alt.hover,input.button.alt:active, #review_form #submit.alt:hover,#review_form #submit.alt.hover,#review_form #submit.alt:active,body.woocommerce-cart form.shipping_calculator button.button:hover,body.woocommerce-cart form.shipping_calculator button.button:active,body.woocommerce-cart form.shipping_calculator button.button.hover,body.jigoshop .button-alt:hover,body.jigoshop .button-alt.hover,body.jigoshop .button-alt:active,body.jigoshop .cart-collaterals .shipping_calculator .button:hover,body.jigoshop a.button:hover, body.jigoshop button.button:hover, body.jigoshop input.button:hover, body #review_form #submit:hover,.searcheddish a.button:hover,body a.button:hover
				{
				background: -webkit-gradient(linear,left top,left bottom,color-stop(.2, #ace53e),color-stop(1, #8dca16));
				background: -moz-linear-gradient(center top,#ace53e 20%,#6bca16 100%);
				}
	
				/* Add the custom css from theme options */
				#logo {margin:10px;}
	
				@media handheld, only screen and (max-width: 767px) {
				#logo {margin:20px  0px 0px;}
				}
	
				.box {
				-moz-box-shadow-color: #000;
				-webkit-box-shadow-color: #000;
				box-shadow-color: #000;
				}
	
				#content-bottom h3 {font-size:18px;}
				/* WooCommerce, JigoShop dish pages */
	
				body.jigoshop #content #entry ul.dishes li {width:23%!important;}
				#entry div.dish div.summary,#entry div.dish .woocommerce_tabs,body.jigoshop #content #entry #tabs {width:60.673913043478%;}
				#entry div.dish div.images {width:35.326086956522%;max-width:314px!important;}
				@media handheld, only screen and (max-width: 540px) {
				#content #entry ul.dishes li img {max-width:300px!important;}
	
				/*WOO SHOW BREADCRUMBS */
	
				body.woocommerce #breadcrumb {display:none;}
			{/literal}
		</style>
		<link href='{#BASE_URL#}/static/css/changa-one.css' rel='stylesheet' type='text/css'>
		<link href='{#BASE_URL#}/static/css/quicksand.css' rel='stylesheet' type='text/css'>
		<link href='{#BASE_URL#}/static/css/yanone.css' rel='stylesheet' type='text/css'>
	</head>
	<body class="home page page-id-16 page-template page-template-tpl-home-php">
		<div class="container pad20vertical">
			<div id="header" class="row">
				{block "header"}
					<div class="alignleft" id="logo">
						<a href="{#BASE_URL#}/demo/echojigo" title="Just another Storefront Themes Demo site">
							<img src="{#BASE_URL#}/static/img/themeforest_logo1.png" />
						</a>
					</div>
					<div class="alignright pad20bottom" id="header-right">
						<div class="box" id="nav-container">
							<div id="navwrap">
								<ul id=nav class="header">
									{block "upper-links"}
										<li id="menu-item-207" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-16 current_page_item menu-item-207">
											<a href="{#BASE_URL#}/menu/">Menu</a>
										</li>
										<li id="menu-item-209" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-209">
											<a href="{#BASE_URL#}/categories/">Categories</a>
										</li>
										<li></li>
									{/block}
								</ul>
								<a class="navcart" href="{#BASE_URL#}/orders/cart/" title="View your shopping cart"><span class='cartcount'>KES. {$total}</span></a>
								<div class="navsearch">
									<form method="GET" id="searchform" class="searchform" action="{#BASE_URL#}/search/">
										<input type="text" class="field" name="q" id="q" placeholder="Search" />
									</form>
								</div>
								<div class="clear"></div>
							</div>
						</div>
					</div>
					<div class="clear"></div>
				{/block}
			</div>
			<div id="main">
				{block "main"}
					<div id="primary">
						<div id="content" class="row box homerow">
							<div class="col_12">
								<div id="entry" class="pad20both pad20vertical">
									<div id="breadcrumb">
										<a class="home" href="{#BASE_URL#}/">Home</a> &rsaquo; <a href="{#BASE_URL#}/orders/cart/">Shop</a>
									</div>
									<h1 class="page-title">{block "title"}All Products{/block}</h1>
									<ul class="products">
										{block "dishes"}
										{/block}
									</ul>
									<div class="clear"></div>
								</div><!-- #pad20both -->
							</div><!-- #col_12 -->
							<div class="clear"></div>
							<div id="content-bottom-border" class="col_12"></div>
							<div id="content-bottom" class="col_12">
								&nbsp;&nbsp; <a href="#">Menu</a> | <a href="#">Services</a> | <a href="#">Contact Us</a> | <a href="#">Blog</a> | <a href="#">Cart</a>
							</div><!-- #content-bottom -->
						</div><!-- #content -->
					</div><!-- #primary -->
				{/block}
			</div><!-- //End of Main -->
			<div class="row" id="footer">
				<div class="col_12">
					<p>
						Copyright &copy; 2011 <a href="{#BASE_URL#}/demo/echojigo">Storefront Echo JigoShop</a>
					</p>
				</div>
			</div>
		</div><!-- //End of container -->
	</body>
</html>