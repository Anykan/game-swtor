<?php
/*	Project:	EQdkp-Plus
 *	Package:	Star Wars - the old republic game package
 *	Link:		http://eqdkp-plus.eu
 *
 *	Copyright (C) 2006-2015 EQdkp-Plus Developer Team
 *
 *	This program is free software: you can redistribute it and/or modify
 *	it under the terms of the GNU Affero General Public License as published
 *	by the Free Software Foundation, either version 3 of the License, or
 *	(at your option) any later version.
 *
 *	This program is distributed in the hope that it will be useful,
 *	but WITHOUT ANY WARRANTY; without even the implied warranty of
 *	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *	GNU Affero General Public License for more details.
 *
 *	You should have received a copy of the GNU Affero General Public License
 *	along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

if ( !defined('EQDKP_INC') ){
	header('HTTP/1.0 404 Not Found');exit;
}
$english_array =  array(
	'factions' => array(
		'republic'	=> 'Republic',
		'imperial'	=> 'Empire'
	),
	'classes' => array(
		0	=> 'Unknown',

		#republic
		1	=> 'Vanguard',
		2	=> 'Commando',
		3	=> 'Scoundrel',
		4	=> 'Gunslinger',
		5	=> 'Sage',
		6	=> 'Shadow',
		7	=> 'Sentinel',
		8	=> 'Guardian',

		# imperium
		9	=> 'Powertech',
		10	=> 'Mercenary',
		11	=> 'Operative',
		12	=> 'Sniper',
		13	=> 'Sorcerer',
		14	=> 'Assassin',
		15	=> 'Marauder',
		16	=> 'Juggernaut',
	),
	'races' => array(
		0	=> 'Unknown',
		1	=> 'Human',
		2	=> 'Rattataki',
		3	=> 'Twi\'lek',
		4	=> 'Chiss',
		5	=> 'Sith Pureblood',
		6	=> 'Miraluka',
		7	=> 'Mirialan',
		8	=> 'Zabrak',
		9	=> 'Cyborg',
		10	=> 'Cathar',
	),
	'roles' => array(
		1	=> 'Healer',
		2	=> 'Tank',
		3	=> 'Range-DD',
		4	=> 'Melee',
	),
	'lang' => array(
		'swtor'						=> 'Star Wars: The Old Republic',

		//Admin Settings
		'core_sett_fs_gamesettings'	=> 'SWToR Settings',
		'uc_one_faction'			=> 'Restrict the class selection to a specific faction?',
		'uc_faction'				=> 'Faction',
		'uc_faction_help'			=> 'The classes of the opposing faction cannot be selected anymore.',

		// Profile information
		'uc_gender'					=> 'Gender',
		'uc_male'					=> 'Male',
		'uc_female'					=> 'Female',
		'uc_guild'					=> 'Guild',
		'uc_race'					=> 'Race',
		'uc_class'					=> 'Class',
	),
);

?>