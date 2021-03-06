<?php
/*	Project:	EQdkp-Plus
 *	Package:	Everquest2 game package
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
$english_array = array(
	'classes' => array(
		0	=> 'Unknown',
		1	=> 'Assassin',
		25	=> 'Beastlord',
		2	=> 'Berserker',
		3	=> 'Brigand',
		4	=> 'Bruiser',
		26	=> 'Channeler',
		5	=> 'Coercer',
		6	=> 'Conjuror',
		7	=> 'Defiler',
		8	=> 'Dirge',
		9	=> 'Fury',
		10	=> 'Guardian',
		11	=> 'Illusionist',
		12	=> 'Inquisitor',
		13	=> 'Monk',
		14	=> 'Mystic',
		15	=> 'Necromancer',
		16	=> 'Paladin',
		17	=> 'Ranger',
		18	=> 'Shadowknight',
		19	=> 'Swashbuckler',
		20	=> 'Templar',
		21	=> 'Troubador',
		22	=> 'Warden',
		23	=> 'Warlock',
		24	=> 'Wizard',
	),
	'races' => array(
		0	=> 'Unknown',
		21  => 'Aerakyn',
		18	=> 'Arasai',
		4	=> 'Barbarian',
		7	=> 'Dark Elf',
		5	=> 'Dwarf',
		14	=> 'Erudite',
		19	=> 'Fae',
		20	=> 'Freeblood',
		13	=> 'Froglok',
		2	=> 'Gnome',
		9	=> 'Half Elf',
		17	=> 'Halfling',
		6	=> 'High Elf',
		3	=> 'Human',
		15	=> 'Iksar',
		10	=> 'Kerran',
		12	=> 'Ogre',
		16	=> 'Ratonga',
		1	=> 'Sarnak',
		11	=> 'Troll',		
		8	=> 'Wood Elf',
	),
	'factions' => array(
		'good'		=> 'Good',
		'evil'		=> 'Evil',
		'neutral'	=> 'Neutral'
	),
	'roles' => array(
		1	=> 'Healers',
		2	=> 'Fighters',
		3	=> 'Mages',
		4	=> 'Scouts',
	),
	'realmlist' => array(
		'Antonia Bayle', //US English
		'Halls of Fate', //US English
		'Maj\'Dul', //US English
		'Skyfire', //US English
		'Thurgadin', //EU English
		'Stormhold', //TLE
		'Test', //Public Test Server
		'Beta', //Public Beta Server
	),
	'lang' => array(
		'eq2'							=> 'EverQuest II',
		'very_light'					=> 'Cloth',
		'light'							=> 'Leather',
		'medium'						=> 'Chain',
		'heavy'							=> 'Plate',
		'healer'						=> 'Healer',
		'fighter'						=> 'Fighter',
		'mage'							=> 'Mage',
		'scout'							=> 'Scout',
		
		// profile additions
		'uc_gender'						=> 'Gender',
		'uc_male'						=> 'Male',
		'uc_female'						=> 'Female',
		'uc_guild'						=> 'Guild',
		'uc_race'						=> 'Race',
		'uc_class'						=> 'Class',
		'uc_import_guild'				=> 'Import Guild',
		'uc_import_guild_help'			=> 'Import all characters of a guild',
		'servername'					=> 'Name of your Server',
		'uc_lockserver'					=> 'Lock the realm name for users',
		'uc_update_all'					=> 'Update all characters',
		'uc_importer_cache'				=> 'Reset importer cache',
		'uc_importer_cache_help'		=> 'Delete all the cached data of the import class.',
		'achievements'					=> 'Achievements',
		'uc_class_filter'				=> 'Only character of the class',
		'uc_class_nofilter'				=> 'No filter',
		'uc_guild_name'					=> 'Guild-Name',
		'uc_filter_name'				=> 'Filter',
		'uc_level_filter'				=> 'All characters with a level higher than',
		'uc_imp_novariables'			=> 'You first have to set a realmserver and it\'s location in the settings.',
		'uc_imp_noguildname'			=> 'The name of the guild has not been given.',
		'uc_gimp_loading'				=> 'Loading guild characters, please wait...',
		'uc_gimp_header_fnsh'			=> 'Guild import finished',
		'uc_importcache_cleared'		=> 'The cache of the importer was successfully cleared.',
		'uc_delete_chars_onimport'		=> 'Delete Chars that have left the guild',
		'uc_achievements'				=> 'Achievements',
		'uc_critchance'					=> 'Minimum Crit Chance Requirement',
		'core_sett_f_uc_resists'        => 'Minimum Resists',
		'gachievements'					=> 'Guild Achievements',
		'graidready'					=> 'Raid Ready',
		'heraldry'						=> 'Guild Heraldry',
		'uc_noprofile_found'			=> 'No profile found',
		'uc_profiles_complete'			=> 'Profiles updated successfully',
		'uc_notyetupdated'				=> 'No new data (inactive character)',
		'uc_notactive'					=> 'This character will be skipped because it is set to inactive',
		'uc_error_with_id'				=> 'Error with this character\'s id, it has been left out',
		'uc_notyourchar'				=> 'ATTENTION: You currently try to import a character that already exists in the database but is not owned by you. For security reasons, this action is not permitted. Please contact an administrator for solving this problem or try to use another character name.',
		'uc_lastupdate'					=> 'Last Update',
		'uc_prof_import'				=> 'import',
		'uc_import_forw'				=> 'continue',
		'uc_imp_succ'					=> 'The data has been imported successfully',
		'uc_upd_succ'					=> 'The data has been updated successfully',
		'uc_imp_failed'					=> 'An error occured while updating the data. Please try again.',
		"uc_updat_armory" 				=> "Refresh from Daybreak",
		'uc_charname'					=> 'Character\'s name',
		'servername'					=> 'Server\'s name',
		'uc_charfound'					=> "The character <b>%1\$s</b> has been found in the armory.",
		'uc_charfound2'					=> "This character was updated on <b>%1\$s</b>.",
		'uc_charfound3'					=> 'ATTENTION: Importing will overwrite the existing data!',
		'uc_armory_confail'				=> 'No connection to the armory. Data could not be transmitted.',
		'uc_armory_imported'			=> 'Imported',
		'uc_armory_impfailed'			=> 'Failed',
		'uc_armory_impduplex'			=> 'already existing',
		'eqclassic'						=> 'The Shattered Lands',
		'splitpaw'						=> 'The Splitpaw Saga',
		'desert'						=> 'Desert of Flames',
		'kingdom'						=> 'Kingdom of Sky',
		'fallen'						=> 'The Fallen Dynasty',
		'faydwer'						=> 'Echoes of Faydwer',
		'kunark'						=> 'Rise of Kunark',
		'shadow'						=> 'The Shadow Odyssey',
		'sentinel'						=> 'Sentinel\'s of Fate',
		'velious'						=> 'Destiny of Velious',
		'chains'						=> 'Chains of Eternity',
		'tears'							=> 'Tears of Veeshan',
		'malice'                        => 'Altar of Malice',
		'general'                       => 'General',
		'avatar'						=> 'Avatars',
		'rum'							=> 'F.S. Distillery',
		'tot'							=> 'Terrors of Thalumbra',
		'zek'							=> 'Zek, the Scourge Wastes',
		'kas'                           => 'Kunark Ascending',
		'pop'                           => 'Planes of Prohecy',
		'healermage'					=> 'Healer & Mage',
		'fighterscout'					=> 'Fighter & Scout',
		'no_data'						=> 'No Data.',
		'total_completed'				=> 'Total Completed',
		'uc_level'                      => 'Level',
		'uc_showachieve'				=> 'Show Guild Achievements in Roster Page? (Can slow down loading time)',
		'core_sett_fs_gamesettings'		=> 'EverQuest II Settings',
		'uc_faction'					=> 'Faction',
		'uc_faction_help'				=> 'Select the default faction',
		'uc_asc'						=> 'Ascension',
		'uc_ascele'						=> 'Elementalist',
		'uc_asceth'						=> 'Etherealist',
		'uc_ascgeo'						=> 'Geomancer',
		'uc_asctha'						=> 'Thaumaturgist',
		'uc_ascnon'						=> 'None'
		),
);
?>