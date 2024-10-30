<?php



if ( ! defined('ABSPATH')) exit;  // if direct access 

class class_job_bm_cp_functions{

	public function job_bm_cp_country_list($country_list = array()){

			$country_list = array(
                'AF' => 'Afghanistan',
                'AX' => 'Aland Islands',
                'AL' => 'Albania',
                'DZ' => 'Algeria',
                'AS' => 'American Samoa',
                'AD' => 'Andorra',
                'AO' => 'Angola',
                'AI' => 'Anguilla',
                'AQ' => 'Antarctica',
                'AG' => 'Antigua And Barbuda',
                'AR' => 'Argentina',
                'AM' => 'Armenia',
                'AW' => 'Aruba',
                'AU' => 'Australia',
                'AT' => 'Austria',
                'AZ' => 'Azerbaijan',
                'BS' => 'Bahamas',
                'BH' => 'Bahrain',
                'BD' => 'Bangladesh',
                'BB' => 'Barbados',
                'BY' => 'Belarus',
                'BE' => 'Belgium',
                'BZ' => 'Belize',
                'BJ' => 'Benin',
                'BM' => 'Bermuda',
                'BT' => 'Bhutan',
                'BO' => 'Bolivia',
                'BA' => 'Bosnia And Herzegovina',
                'BW' => 'Botswana',
                'BV' => 'Bouvet Island',
                'BR' => 'Brazil',
                'IO' => 'British Indian Ocean Territory',
                'BN' => 'Brunei Darussalam',
                'BG' => 'Bulgaria',
                'BF' => 'Burkina Faso',
                'BI' => 'Burundi',
                'KH' => 'Cambodia',
                'CM' => 'Cameroon',
                'CA' => 'Canada',
                'CV' => 'Cape Verde',
                'KY' => 'Cayman Islands',
                'CF' => 'Central African Republic',
                'TD' => 'Chad',
                'CL' => 'Chile',
                'CN' => 'China',
                'CX' => 'Christmas Island',
                'CC' => 'Cocos (Keeling) Islands',
                'CO' => 'Colombia',
                'KM' => 'Comoros',
                'CG' => 'Congo',
                'CD' => 'Congo, Democratic Republic',
                'CK' => 'Cook Islands',
                'CR' => 'Costa Rica',
                'CI' => 'Cote D\'Ivoire',
                'HR' => 'Croatia',
                'CU' => 'Cuba',
                'CY' => 'Cyprus',
                'CZ' => 'Czech Republic',
                'DK' => 'Denmark',
                'DJ' => 'Djibouti',
                'DM' => 'Dominica',
                'DO' => 'Dominican Republic',
                'EC' => 'Ecuador',
                'EG' => 'Egypt',
                'SV' => 'El Salvador',
                'GQ' => 'Equatorial Guinea',
                'ER' => 'Eritrea',
                'EE' => 'Estonia',
                'ET' => 'Ethiopia',
                'FK' => 'Falkland Islands (Malvinas)',
                'FO' => 'Faroe Islands',
                'FJ' => 'Fiji',
                'FI' => 'Finland',
                'FR' => 'France',
                'GF' => 'French Guiana',
                'PF' => 'French Polynesia',
                'TF' => 'French Southern Territories',
                'GA' => 'Gabon',
                'GM' => 'Gambia',
                'GE' => 'Georgia',
                'DE' => 'Germany',
                'GH' => 'Ghana',
                'GI' => 'Gibraltar',
                'GR' => 'Greece',
                'GL' => 'Greenland',
                'GD' => 'Grenada',
                'GP' => 'Guadeloupe',
                'GU' => 'Guam',
                'GT' => 'Guatemala',
                'GG' => 'Guernsey',
                'GN' => 'Guinea',
                'GW' => 'Guinea-Bissau',
                'GY' => 'Guyana',
                'HT' => 'Haiti',
                'HM' => 'Heard Island & Mcdonald Islands',
                'VA' => 'Holy See (Vatican City State)',
                'HN' => 'Honduras',
                'HK' => 'Hong Kong',
                'HU' => 'Hungary',
                'IS' => 'Iceland',
                'IN' => 'India',
                'ID' => 'Indonesia',
                'IR' => 'Iran, Islamic Republic Of',
                'IQ' => 'Iraq',
                'IE' => 'Ireland',
                'IM' => 'Isle Of Man',
                'IL' => 'Israel',
                'IT' => 'Italy',
                'JM' => 'Jamaica',
                'JP' => 'Japan',
                'JE' => 'Jersey',
                'JO' => 'Jordan',
                'KZ' => 'Kazakhstan',
                'KE' => 'Kenya',
                'KI' => 'Kiribati',
                'KR' => 'Korea',
                'KW' => 'Kuwait',
                'KG' => 'Kyrgyzstan',
                'LA' => 'Lao People\'s Democratic Republic',
                'LV' => 'Latvia',
                'LB' => 'Lebanon',
                'LS' => 'Lesotho',
                'LR' => 'Liberia',
                'LY' => 'Libyan Arab Jamahiriya',
                'LI' => 'Liechtenstein',
                'LT' => 'Lithuania',
                'LU' => 'Luxembourg',
                'MO' => 'Macao',
                'MK' => 'Macedonia',
                'MG' => 'Madagascar',
                'MW' => 'Malawi',
                'MY' => 'Malaysia',
                'MV' => 'Maldives',
                'ML' => 'Mali',
                'MT' => 'Malta',
                'MH' => 'Marshall Islands',
                'MQ' => 'Martinique',
                'MR' => 'Mauritania',
                'MU' => 'Mauritius',
                'YT' => 'Mayotte',
                'MX' => 'Mexico',
                'FM' => 'Micronesia, Federated States Of',
                'MD' => 'Moldova',
                'MC' => 'Monaco',
                'MN' => 'Mongolia',
                'ME' => 'Montenegro',
                'MS' => 'Montserrat',
                'MA' => 'Morocco',
                'MZ' => 'Mozambique',
                'MM' => 'Myanmar',
                'NA' => 'Namibia',
                'NR' => 'Nauru',
                'NP' => 'Nepal',
                'NL' => 'Netherlands',
                'AN' => 'Netherlands Antilles',
                'NC' => 'New Caledonia',
                'NZ' => 'New Zealand',
                'NI' => 'Nicaragua',
                'NE' => 'Niger',
                'NG' => 'Nigeria',
                'NU' => 'Niue',
								'NF' => 'Norfolk Island',
								'MP' => 'Northern Mariana Islands',
								'NO' => 'Norway',
								'OM' => 'Oman',
								'PK' => 'Pakistan',
								'PW' => 'Palau',
								'PS' => 'Palestinian Territory, Occupied',
								'PA' => 'Panama',
								'PG' => 'Papua New Guinea',
								'PY' => 'Paraguay',
								'PE' => 'Peru',
								'PH' => 'Philippines',
								'PN' => 'Pitcairn',
								'PL' => 'Poland',
								'PT' => 'Portugal',
								'PR' => 'Puerto Rico',
								'QA' => 'Qatar',
								'RE' => 'Reunion',
								'RO' => 'Romania',
								'RU' => 'Russian Federation',
								'RW' => 'Rwanda',
								'BL' => 'Saint Barthelemy',
								'SH' => 'Saint Helena',
								'KN' => 'Saint Kitts And Nevis',
								'LC' => 'Saint Lucia',
								'MF' => 'Saint Martin',
								'PM' => 'Saint Pierre And Miquelon',
								'VC' => 'Saint Vincent And Grenadines',
								'WS' => 'Samoa',
								'SM' => 'San Marino',
								'ST' => 'Sao Tome And Principe',
								'SA' => 'Saudi Arabia',
								'SN' => 'Senegal',
								'RS' => 'Serbia',
								'SC' => 'Seychelles',
								'SL' => 'Sierra Leone',
								'SG' => 'Singapore',
								'SK' => 'Slovakia',
								'SI' => 'Slovenia',
								'SB' => 'Solomon Islands',
								'SO' => 'Somalia',
								'ZA' => 'South Africa',
								'GS' => 'South Georgia And Sandwich Isl.',
								'ES' => 'Spain',
								'LK' => 'Sri Lanka',
								'SD' => 'Sudan',
								'SR' => 'Suriname',
								'SJ' => 'Svalbard And Jan Mayen',
								'SZ' => 'Swaziland',
								'SE' => 'Sweden',
								'CH' => 'Switzerland',
								'SY' => 'Syrian Arab Republic',
								'TW' => 'Taiwan',
								'TJ' => 'Tajikistan',
								'TZ' => 'Tanzania',
								'TH' => 'Thailand',
								'TL' => 'Timor-Leste',
								'TG' => 'Togo',
								'TK' => 'Tokelau',
								'TO' => 'Tonga',
								'TT' => 'Trinidad And Tobago',
								'TN' => 'Tunisia',
								'TR' => 'Turkey',
								'TM' => 'Turkmenistan',
								'TC' => 'Turks And Caicos Islands',
								'TV' => 'Tuvalu',
								'UG' => 'Uganda',
								'UA' => 'Ukraine',
								'AE' => 'United Arab Emirates',
								'GB' => 'United Kingdom',
								'US' => 'United States',
								'UM' => 'United States Outlying Islands',
								'UY' => 'Uruguay',
								'UZ' => 'Uzbekistan',
								'VU' => 'Vanuatu',
								'VE' => 'Venezuela',
								'VN' => 'Viet Nam',
								'VG' => 'Virgin Islands, British',
								'VI' => 'Virgin Islands, U.S.',
								'WF' => 'Wallis And Futuna',
								'EH' => 'Western Sahara',
								'YE' => 'Yemen',
								'ZM' => 'Zambia',
								'ZW' => 'Zimbabwe',

                );


            $country_list = apply_filters( 'job_bm_country_list', $country_list );

			
			return $country_list;

		}	
	
		
		

	public function job_bm_cp_company_types(){
	
		$company_types = array(
		'others'=> 'Others',		
		'advertising-ageny'=> 'Advertising Ageny',
		'agro-based-firms'=>	'Agro based firms',	
		'amusement-park'=>	'Amusement Park',
		'architecture-firm'=>	'Architecture Firm',
		'automobile'=>	'Automobile',	
		'airline'=>	'Airline',
		'animal-plant-breeding'=>'Animal/Plant Breeding',
		'audit-firms'=>'Audit Firms /Tax Consultant',
		'banks'=>'Banks',	
		'bakery'=>'Bakery (Cake, Biscuit, Bread)',	
		'bar'=>'Bar/Pub',
		'bicycle'=>'Bicycle',
		'bpo-data-entry-firm'=>'BPO/ Data Entry Firm',	
		'beverage'=>'Beverage',		
		'buying-house'=>'Buying House',		
		'boutique'=>'Boutique/ Fashion',	
		'brick'=>'Brick',		
		'call-center'=>'Call Center',
		'catering'=>'Catering',	
		'cement'=>'Cement',
		'chemical-industries'=>'Chemical Industries',
		'clearing'=>'Clearing & Forwarding (C&F)',	
		'club'=>'Club',		
		'cng-conversion'=>'CNG Conversion',			
		'college'=>'College',
		'consulting-firms'=>'Consulting Firms',	
		'cultural-centre'=>'Cultural Centre',	
		'departmental-store'=>'Departmental store',
		'developer'=>'Developer',	
		'diagnostic-centre'=>'Diagnostic Centre',	
		'dry-cell'=>'Dry cell (Battery)',	
		'dyeing-factory'=>'Dyeing Factory',		
		'electric-wire'=>'Electric Wire/Cable',
		'embassies'=>'Embassies/Foreign Consulate',	
		'elevator'=>'Escalator/Elevator/Lift',	
		'farming'=>'Farming',	
		'filling-station'=>'Filling Station',		
		'financial-consultants'=>'Financial Consultants',
		'fisheries'=>'Fisheries',	
		'food'=>'Food (Packaged)/Beverage',	
		'fuel-petroleum'=>'Fuel/Petroleum',	
		'furniture-manufacturer'=>'Furniture Manufacturer',		
		'garments'=>'Garments',
		'gas'=>'Gas',	
		'govt'=>'Govt./ Semi Govt./ Autonomous body',	
		'group-of-companies'=>'Group of Companies',	
		'handicraft'=>'Handicraft',		
		'healthcare-lifestyle-product'=>'Healthcare/Lifestyle product',
		'hospital'=>'Hospital',	
		'immigration-education-consultancy'=>'Immigration & Education Consultancy ',	
		'importer'=>'Importer',	
		'indenting-firm'=>'Indenting Firm',		
		'insurance'=>'Insurance',	
		'inventory-warehouse'=>'Inventory/Warehouse',	
		'isp'=>'ISP',	
		'jewelry-gem'=>'Jewelry/Gem',		
		'kindergarten'=>'Kindergarten',	
		'land-phone'=>'Land Phone',		
		'law-firm'=>'Law Firm',	
		'leasing'=>'Leasing',	
		'livestock'=>'Livestock',	
		'logistic-courier-air-express'=>'Logistic/Courier/Air Express Companies',	
		'lpg-gas-cylinder-gas'=>'LPG Gas/Cylinder Gas',		
		'madrasa'=>'Madrasa',		
		'manpower-recruitment'=>'Manpower Recruitment',			
		'manufacturing'=>'Manufacturing (FMCG)',
		'market-research'=>'Market Research Firms',	
		'medical-equipment'=>'Medical Equipment',	
		'mineral-water'=>'Mineral Water',		
		'micro-credit'=>'Micro-Credit',		
		'mining'=>'Mining',		
		'mobile-accessories'=>'Mobile Accessories',	
		'museum'=>'Museum',		
		'motel'=>'Motel',	
		'motor-workshop'=>'Motor Workshop',			
		'motor-vehicle-body-manufacturer'=>'Motor Vehicle body manufacturer',		
		'newspaper-magazine'=>'Multinational Companies',		
		'newspaper'=>'Newspaper/Magazine',
		'ngo'=>'NGO',	
		'online-newspaper-portal'=>'Online Newspaper/ News Portal',	
		'overseas-companies'=>'Overseas Companies',		
		'packaging-industry'=>'Packaging Industry',	
		'paint'=>'Paint',		
		'paper'=>'Paper',	
		'park'=>'Park',	
		'party-community-center'=>'Party/ Community Center',	
		'physiotherapy-center'=>'Physiotherapy center',		
		'port-service'=>'Port Service',		
		'pottery'=>'Pottery',	
		'poultry'=>'Poultry',	
		'power'=>'Power',			
		'professional-photographers'=>'Professional Photographers',		
		'pest-control'=>'Pest Control',			
		'pharmaceutical-Medicine-'=>'Pharmaceutical/Medicine Companies',		
		'pstn'=>'PSTN',		
		'public-relation-companies'=>'Public Relation Companies',	
		'radio'=>'Radio',	
		'religious-place'=>'Religious Place',	
		'real-estate'=>'Real Estate',			
		'research-organization'=>'Research Organization',	
		'resort'=>'Resort',			
		'restaurant'=>'Restaurant',		
		'retail-store'=>'Retail Store',		
		'salt'=>'Salt',		
		'sanitary-ware'=>'Sanitary ware',		
		'satellite-tv'=>'Satellite TV',		
		'science-laboratory'=>'Science Laboratory',
		'school'=>'School',		
		'share-brokerage-securities-house'=>'Share Brokerage/ Securities House',	
		'security-service'=>'Security Service',		
		'shipping'=>'Shipping',	
		'shopping-mall'=>'Shopping mall',	
		'shipyard'=>'Shipyard',
		'shrimp'=>'Shrimp',	
		'software-company'=>'Software Company',		
		'spinning'=>'Spinning',	
		'steel'=>'Steel',	
		'sports-complex'=>'Sports Complex',		
		'super-store'=>'Super store',		
		'supply-chain'=>'Supply Chain',	
		'sweater-industry'=>'Sweater Industry',			
		'swimming-pool'=>'Swimming Pool',
		'tailor-shop'=>'Tailor shop',		
		'tannery-footwear'=>'Tannery/Footwear',	
		'textile'=>'Textile',	
		'tea-garden'=>'Tea Garden',		
		'technical-infrastructure'=>'Technical Infrastructure',		
		'Telecommunication'=>'Telecommunication',		
		'travel-agent'=>'Travel Agent',		
		'tiles-ceramic'=>'Tiles/Ceramic',	
		'third-party-auditor'=>'Third Party Auditor',			
		'toiletries'=>'Toiletries',		
		'toy'=>'Toy',
		'tobacco'=>'Tobacco',	
		'tyre-manufacturer'=>'Tyre manufacturer',	
		'training-institutes'=>'Training Institutes',	
		'transportation'=>'Transportation',
		'transport-service'=>'Transport Service',
		'trading-export-import'=>'Trading or Export/Import',
		'tour-operator'=>'Tour Operator',	
		'venture-capital-firm'=>'Venture Capital Firm',
		'university'=>'University',		
		'watch'=>'Watch',		
		'wholesale'=>'Wholesale',
		'web-media-Blog'=>'Web Media/Blog',	
		'washing-factory'=>'Washing Factory',
		
		);
	
	return apply_filters('job_bm_company_types',$company_types);
	
	}
		
		
		
		
		
		
		
		
		
		
		

		
		
	
	public function job_bm_cp_list_user_role(){
		
		global $wp_roles;
		$roles = $wp_roles->get_names();
		return $roles;
		}	
		
		
	
	}
	
	new class_job_bm_cp_functions();