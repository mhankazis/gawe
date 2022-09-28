
<!-- BEGIN THEME GLOBAL STYLES -->
<link href="<?php echo base_url(); ?>assets/src/plugins/src/autocomplete/css/autoComplete.02.css" rel="stylesheet" type="text/css" />

<link href="<?php echo base_url(); ?>assets/src/assets/css/light/scrollspyNav.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>assets/src/plugins/css/light/autocomplete/css/custom-autoComplete.css" rel="stylesheet" type="text/css" />

<link href="<?php echo base_url(); ?>assets/src/assets/css/dark/scrollspyNav.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>assets/src/plugins/css/dark/autocomplete/css/custom-autoComplete.css" rel="stylesheet" type="text/css" />
<!-- END THEME GLOBAL STYLES -->

<!-- BREADCRUMB -->
<div class="page-meta">
	<nav class="breadcrumb-style-one" aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">App Setting</a></li>
			<li class="breadcrumb-item active" aria-current="page">Localisation</li>
		</ol>
	</nav>
</div>
<!-- /BREADCRUMB -->

<div id="navSection" data-bs-spy="affix" class="nav sidenav">
	<div class="sidenav-content">
		<a href="#ftFormArray" class="active nav-link">Basic</a>
		<a href="#ftFormTwoArray" class="nav-link">Search with Button</a>
	</div>
</div>

<div class="row layout-top-spacing" id="Basic">


	<div id="ftFormTwoArray" class="col-lg-12 layout-spacing">
		<div class="statbox widget box box-shadow">
			<div class="widget-header">
				<div class="row">
					<div class="col-xl-12 col-md-12 col-sm-12 col-12">
						<h4>Localisation</h4>
					</div>
				</div>
			</div>
			<div class="widget-content widget-content-area">
				<form method="post" action="<?php echo base_url('localisation/website_setting') ?>" >
				<div class="row">



						<div style="margin-bottom: 25px" class="col-lg-7">
							<label for="exampleFormControlSelect1"><b>Time Zone</b></label>
							<div class="autocomplete-btn">
								<input value="<?php echo $show['time_zone']?>" name="time_zone" id="example2" class="form-control">
								<button class="btn btn-primary">Search</button>
							</div>
						</div>
						<div class="col-lg-5">
							<label for="exampleFormControlSelect1"><b>Date Format</b></label>
							<select name="date_format" class="form-select" id="exampleFormControlSelect1">
								<option <?php if ($show['date_format'] == 'Y-m-d' ) echo "selected" ?> value="Y-m-d"><?php echo date('Y-m-d')?> - Recommended</option>
								<option <?php if ($show['date_format'] == 'F d,Y' ) echo "selected" ?> value="F d,Y"><?php echo date('F d,Y')?></option>
								<option <?php if ($show['date_format'] == 'M d Y' ) echo "selected" ?> value="M d Y"><?php echo date('M d Y')?></option>
								<option <?php if ($show['date_format'] == 'M/d/Y' ) echo "selected" ?> value="M/d/Y"><?php echo date('M/d/Y')?></option>
								<option <?php if ($show['date_format'] == 'd/m/Y' ) echo "selected" ?> value="d/m/Y"><?php echo date('d/m/Y')?></option>
								<option <?php if ($show['date_format'] == 'Y/m/d' ) echo "selected" ?> value="Y/m/d"><?php echo date('Y/m/d')?></option>
								<option <?php if ($show['date_format'] == 'd-m-Y' ) echo "selected" ?> value="d-m-Y"><?php echo date('d-m-Y')?></option>

							</select>
						</div>
						<div style="margin-bottom: 25px" class="col-md-12">
							<label for="inputEmail4" class="form-label"><b> Currency Code [ Do not use Special Characters ]</b></label>
							<input value="<?php echo $show['currency']?>" name="currency" type="text" class="form-control" id="inputEmail4">
							<span class="help-block">[ USD | EUR | IDR | GBP | CAD | AUD | R<span style="text-transform: lowercase;">p.</span> ]</span>
						</div>

						<div  class="col-md-6">
							<label for="inputEmail4" class="form-label"><b>Decimal Point</b></label>
							<input value="<?php echo $show['decimal_point']?>" name="decimal_point" type="text" class="form-control" id="inputEmail4">
						</div>

						<div class="col-md-6">
							<label for="inputEmail4" class="form-label"><b>Thousands Separator</b></label>
							<input value="<?php echo $show['thousands_separator']?>" name="thousands_separator" type="text" class="form-control" id="inputEmail4">
						</div>

						<div style="margin-top: 25px;" class="col-md-12 mb-4">
							<label for="inputEmail4" class="form-label"><b>Default Language</b></label>
							<select name="default_language" class="form-select" id="exampleFormControlSelect1">
								<option <?php if ($show['default_language'] == 'Indonesia' ) echo "selected" ?> value="Indonesia">Indonesia</option>
								<option <?php if ($show['default_language'] == 'English' ) echo "selected" ?> value="English" >English</option>

							</select>
						</div>

						<div style="margin-top: 25px" class="col-12">
							<button type="submit" class="btn btn-primary">Lock Renewal Feature Until</button>
						</div>



				</div>
				</form>
			</div>
		</div>
	</div>
</div>

<script src="<?php echo base_url(); ?>assets/src/assets/js/scrollspyNav.js"></script>
<script src="<?php echo base_url(); ?>assets/src/plugins/src/autocomplete/autoComplete.min.js"></script>
<script>
	const example2 = new autoComplete({
		selector: "#example2",
		placeHolder: "Asia/jakarta",
		data: {
			src: [
				'Europe/Andorra',
				'Asia/Dubai',
				'Asia/Kabul',
				'Europe/Tirane',
				'Asia/Yerevan',
				'Antarctica/Casey',
				'Antarctica/Davis',
				'Antarctica/DumontDUrville', // https://bugs.chromium.org/p/chromium/issues/detail?id=928068
				'Antarctica/Mawson',
				'Antarctica/Palmer',
				'Antarctica/Rothera',
				'Antarctica/Syowa',
				'Antarctica/Troll',
				'Antarctica/Vostok',
				'America/Argentina/Buenos_Aires',
				'America/Argentina/Cordoba',
				'America/Argentina/Salta',
				'America/Argentina/Jujuy',
				'America/Argentina/Tucuman',
				'America/Argentina/Catamarca',
				'America/Argentina/La_Rioja',
				'America/Argentina/San_Juan',
				'America/Argentina/Mendoza',
				'America/Argentina/San_Luis',
				'America/Argentina/Rio_Gallegos',
				'America/Argentina/Ushuaia',
				'Pacific/Pago_Pago',
				'Europe/Vienna',
				'Australia/Lord_Howe',
				'Antarctica/Macquarie',
				'Australia/Hobart',
				'Australia/Currie',
				'Australia/Melbourne',
				'Australia/Sydney',
				'Australia/Broken_Hill',
				'Australia/Brisbane',
				'Australia/Lindeman',
				'Australia/Adelaide',
				'Australia/Darwin',
				'Australia/Perth',
				'Australia/Eucla',
				'Asia/Baku',
				'America/Barbados',
				'Asia/Dhaka',
				'Europe/Brussels',
				'Europe/Sofia',
				'Atlantic/Bermuda',
				'Asia/Brunei',
				'America/La_Paz',
				'America/Noronha',
				'America/Belem',
				'America/Fortaleza',
				'America/Recife',
				'America/Araguaina',
				'America/Maceio',
				'America/Bahia',
				'America/Sao_Paulo',
				'America/Campo_Grande',
				'America/Cuiaba',
				'America/Santarem',
				'America/Porto_Velho',
				'America/Boa_Vista',
				'America/Manaus',
				'America/Eirunepe',
				'America/Rio_Branco',
				'America/Nassau',
				'Asia/Thimphu',
				'Europe/Minsk',
				'America/Belize',
				'America/St_Johns',
				'America/Halifax',
				'America/Glace_Bay',
				'America/Moncton',
				'America/Goose_Bay',
				'America/Blanc-Sablon',
				'America/Toronto',
				'America/Nipigon',
				'America/Thunder_Bay',
				'America/Iqaluit',
				'America/Pangnirtung',
				'America/Atikokan',
				'America/Winnipeg',
				'America/Rainy_River',
				'America/Resolute',
				'America/Rankin_Inlet',
				'America/Regina',
				'America/Swift_Current',
				'America/Edmonton',
				'America/Cambridge_Bay',
				'America/Yellowknife',
				'America/Inuvik',
				'America/Creston',
				'America/Dawson_Creek',
				'America/Fort_Nelson',
				'America/Vancouver',
				'America/Whitehorse',
				'America/Dawson',
				'Indian/Cocos',
				'Europe/Zurich',
				'Africa/Abidjan',
				'Pacific/Rarotonga',
				'America/Santiago',
				'America/Punta_Arenas',
				'Pacific/Easter',
				'Asia/Shanghai',
				'Asia/Urumqi',
				'America/Bogota',
				'America/Costa_Rica',
				'America/Havana',
				'Atlantic/Cape_Verde',
				'America/Curacao',
				'Indian/Christmas',
				'Asia/Nicosia',
				'Asia/Famagusta',
				'Europe/Prague',
				'Europe/Berlin',
				'Europe/Copenhagen',
				'America/Santo_Domingo',
				'Africa/Algiers',
				'America/Guayaquil',
				'Pacific/Galapagos',
				'Europe/Tallinn',
				'Africa/Cairo',
				'Africa/El_Aaiun',
				'Europe/Madrid',
				'Africa/Ceuta',
				'Atlantic/Canary',
				'Europe/Helsinki',
				'Pacific/Fiji',
				'Atlantic/Stanley',
				'Pacific/Chuuk',
				'Pacific/Pohnpei',
				'Pacific/Kosrae',
				'Atlantic/Faroe',
				'Europe/Paris',
				'Europe/London',
				'Asia/Tbilisi',
				'America/Cayenne',
				'Africa/Accra',
				'Europe/Gibraltar',
				'America/Godthab',
				'America/Danmarkshavn',
				'America/Scoresbysund',
				'America/Thule',
				'Europe/Athens',
				'Atlantic/South_Georgia',
				'America/Guatemala',
				'Pacific/Guam',
				'Africa/Bissau',
				'America/Guyana',
				'Asia/Hong_Kong',
				'America/Tegucigalpa',
				'America/Port-au-Prince',
				'Europe/Budapest',
				'Asia/Jakarta',
				'Asia/Pontianak',
				'Asia/Makassar',
				'Asia/Jayapura',
				'Europe/Dublin',
				'Asia/Jerusalem',
				'Asia/Kolkata',
				'Indian/Chagos',
				'Asia/Baghdad',
				'Asia/Tehran',
				'Atlantic/Reykjavik',
				'Europe/Rome',
				'America/Jamaica',
				'Asia/Amman',
				'Asia/Tokyo',
				'Africa/Nairobi',
				'Asia/Bishkek',
				'Pacific/Tarawa',
				'Pacific/Enderbury',
				'Pacific/Kiritimati',
				'Asia/Pyongyang',
				'Asia/Seoul',
				'Asia/Almaty',
				'Asia/Qyzylorda',
				'Asia/Qostanay', // https://bugs.chromium.org/p/chromium/issues/detail?id=928068
				'Asia/Aqtobe',
				'Asia/Aqtau',
				'Asia/Atyrau',
				'Asia/Oral',
				'Asia/Beirut',
				'Asia/Colombo',
				'Africa/Monrovia',
				'Europe/Vilnius',
				'Europe/Luxembourg',
				'Europe/Riga',
				'Africa/Tripoli',
				'Africa/Casablanca',
				'Europe/Monaco',
				'Europe/Chisinau',
				'Pacific/Majuro',
				'Pacific/Kwajalein',
				'Asia/Yangon',
				'Asia/Ulaanbaatar',
				'Asia/Hovd',
				'Asia/Choibalsan',
				'Asia/Macau',
				'America/Martinique',
				'Europe/Malta',
				'Indian/Mauritius',
				'Indian/Maldives',
				'America/Mexico_City',
				'America/Cancun',
				'America/Merida',
				'America/Monterrey',
				'America/Matamoros',
				'America/Mazatlan',
				'America/Chihuahua',
				'America/Ojinaga',
				'America/Hermosillo',
				'America/Tijuana',
				'America/Bahia_Banderas',
				'Asia/Kuala_Lumpur',
				'Asia/Kuching',
				'Africa/Maputo',
				'Africa/Windhoek',
				'Pacific/Noumea',
				'Pacific/Norfolk',
				'Africa/Lagos',
				'America/Managua',
				'Europe/Amsterdam',
				'Europe/Oslo',
				'Asia/Kathmandu',
				'Pacific/Nauru',
				'Pacific/Niue',
				'Pacific/Auckland',
				'Pacific/Chatham',
				'America/Panama',
				'America/Lima',
				'Pacific/Tahiti',
				'Pacific/Marquesas',
				'Pacific/Gambier',
				'Pacific/Port_Moresby',
				'Pacific/Bougainville',
				'Asia/Manila',
				'Asia/Karachi',
				'Europe/Warsaw',
				'America/Miquelon',
				'Pacific/Pitcairn',
				'America/Puerto_Rico',
				'Asia/Gaza',
				'Asia/Hebron',
				'Europe/Lisbon',
				'Atlantic/Madeira',
				'Atlantic/Azores',
				'Pacific/Palau',
				'America/Asuncion',
				'Asia/Qatar',
				'Indian/Reunion',
				'Europe/Bucharest',
				'Europe/Belgrade',
				'Europe/Kaliningrad',
				'Europe/Moscow',
				'Europe/Simferopol',
				'Europe/Kirov',
				'Europe/Astrakhan',
				'Europe/Volgograd',
				'Europe/Saratov',
				'Europe/Ulyanovsk',
				'Europe/Samara',
				'Asia/Yekaterinburg',
				'Asia/Omsk',
				'Asia/Novosibirsk',
				'Asia/Barnaul',
				'Asia/Tomsk',
				'Asia/Novokuznetsk',
				'Asia/Krasnoyarsk',
				'Asia/Irkutsk',
				'Asia/Chita',
				'Asia/Yakutsk',
				'Asia/Khandyga',
				'Asia/Vladivostok',
				'Asia/Ust-Nera',
				'Asia/Magadan',
				'Asia/Sakhalin',
				'Asia/Srednekolymsk',
				'Asia/Kamchatka',
				'Asia/Anadyr',
				'Asia/Riyadh',
				'Pacific/Guadalcanal',
				'Indian/Mahe',
				'Africa/Khartoum',
				'Europe/Stockholm',
				'Asia/Singapore',
				'America/Paramaribo',
				'Africa/Juba',
				'Africa/Sao_Tome',
				'America/El_Salvador',
				'Asia/Damascus',
				'America/Grand_Turk',
				'Africa/Ndjamena',
				'Indian/Kerguelen',
				'Asia/Bangkok',
				'Asia/Dushanbe',
				'Pacific/Fakaofo',
				'Asia/Dili',
				'Asia/Ashgabat',
				'Africa/Tunis',
				'Pacific/Tongatapu',
				'Europe/Istanbul',
				'America/Port_of_Spain',
				'Pacific/Funafuti',
				'Asia/Taipei',
				'Europe/Kiev',
				'Europe/Uzhgorod',
				'Europe/Zaporozhye',
				'Pacific/Wake',
				'America/New_York',
				'America/Detroit',
				'America/Kentucky/Louisville',
				'America/Kentucky/Monticello',
				'America/Indiana/Indianapolis',
				'America/Indiana/Vincennes',
				'America/Indiana/Winamac',
				'America/Indiana/Marengo',
				'America/Indiana/Petersburg',
				'America/Indiana/Vevay',
				'America/Chicago',
				'America/Indiana/Tell_City',
				'America/Indiana/Knox',
				'America/Menominee',
				'America/North_Dakota/Center',
				'America/North_Dakota/New_Salem',
				'America/North_Dakota/Beulah',
				'America/Denver',
				'America/Boise',
				'America/Phoenix',
				'America/Los_Angeles',
				'America/Anchorage',
				'America/Juneau',
				'America/Sitka',
				'America/Metlakatla',
				'America/Yakutat',
				'America/Nome',
				'America/Adak',
				'Pacific/Honolulu',
				'America/Montevideo',
				'Asia/Samarkand',
				'Asia/Tashkent',
				'America/Caracas',
				'Asia/Ho_Chi_Minh',
				'Pacific/Efate',
				'Pacific/Wallis',
				'Pacific/Apia',
				'Africa/Johannesburg'
			],
			cache: true,
		},
		resultsList: {
			element: (list, data) => {
				if (!data.results.length) {
					// Create "No Results" message element
					const message = document.createElement("div");
					// Add class to the created element
					message.setAttribute("class", "no_result");
					// Add message text content
					message.innerHTML = `<span>Found No Results for "${data.query}"</span>`;
					// Append message element to the results list
					list.prepend(message);
				}
			},
			noResults: true,
		},
		resultItem: {
			highlight: {
				render: true
			}
		},
		events: {
			input: {
				focus() {
					if (example2.input.value.length) example2.start();
				},
				selection(event) {
					const feedback = event.detail;
					// Prepare User's Selected Value
					const selection = feedback.selection.value;

					// Replace Input value with the selected value
					example2.input.value = selection;
				},
			},
		},
	});
</script>
