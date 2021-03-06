<?php
/**
*
* @package Titania
* @version $Id$
* @copyright (c) 2008 phpBB Customisation Database Team
* @license http://opensource.org/licenses/gpl-2.0.php GNU Public License
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_TITANIA'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'AUTHOR_CONTRIBS'			=> 'Contribuţii',
	'AUTHOR_DATA_UPDATED'		=> 'Informaţiile autorului au fost actualizate.',
	'AUTHOR_DESC'				=> 'Descriere autor',
	'AUTHOR_DETAILS'			=> 'Detalii autor',
	'AUTHOR_MODS'				=> '%d Modificări',
	'AUTHOR_MODS_ONE'			=> '1 Modificare',
	'AUTHOR_NOT_FOUND'			=> 'Autorul nu a fost găsit',
	'AUTHOR_PROFILE'			=> 'Profil autor',
	'AUTHOR_RATING'				=> 'Evaluare autor',
	'AUTHOR_SNIPPETS'			=> '%d coduri reutilizabile',
	'AUTHOR_SNIPPETS_ONE'		=> '1 cod reutilizabil',
	'AUTHOR_STATISTICS'			=> 'Statistici autor',
	'AUTHOR_STYLES'				=> '%d Stiluri',
	'AUTHOR_STYLES_ONE'			=> '1 Stil',
	'AUTHOR_SUPPORT'			=> 'Suport',

	'ENHANCED_EDITOR'			=> 'Editor complet',
	'ENHANCED_EDITOR_EXPLAIN'	=> 'Activare/dezactivare editor complet (capturează tab-urile şi extinde automat căsuţele de text).',

	'MANAGE_AUTHOR'				=> 'Administrare autor',

	'NO_AVATAR'					=> 'Fără avatar',

	'PHPBB_PROFILE'				=> 'Profil phpBB.com',

	'REAL_NAME'					=> 'Nume real',

	'USER_INFORMATION'			=> 'Informaţiile utilizatorului',

	'VIEW_USER_PROFILE'			=> 'Vizualizare profil utilizator',
));
