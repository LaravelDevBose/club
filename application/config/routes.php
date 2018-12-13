<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'FrontEndController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['article_of_association'] = 'FrontEndController/article_of_association_page';
$route['first_founder_message'] = 'FrontEndController/first_founder_message_page';
$route['precedent_message'] = 'FrontEndController/precedent_message_page';
$route['secretary_message'] = 'FrontEndController/secretary_message_page';
$route['cord_of_conduct'] = 'FrontEndController/cord_of_conduct_page';

$route['executive_committee'] = 'FrontEndController/executive_committee_page';
$route['working_committee'] = 'FrontEndController/working_committee_page';
$route['members'] = 'FrontEndController/members_page';


$route['family_louche'] = 'FrontEndController/family_louche_page';
$route['party_louche'] = 'FrontEndController/party_louche_page';
$route['gaming_zone'] = 'FrontEndController/gaming_zone_page';
$route['lib_payer_room'] = 'FrontEndController/lib_payer_room_page';
$route['movie_room'] = 'FrontEndController/movie_room_page';
$route['affiliation'] = 'FrontEndController/affiliation_page';


$route['upcoming_event'] = 'FrontEndController/upcoming_event_page';
$route['current_event'] = 'FrontEndController/current_event_page';

$route['gallery'] = 'FrontEndController/gallery_page';

$route['contact_us'] = 'FrontEndController/contact_us_page';
$route['member_account'] = 'FrontEndController/member_account_page';
