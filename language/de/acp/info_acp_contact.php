<?php
/**
*
* Contact admin extension for the phpBB Forum Software package.
*
* @copyright 2016 Rich McGirr (RMcGirr83)
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

if (!defined('IN_PHPBB'))
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
//
// Some characters for use
// ’ » “ ” …


$lang = array_merge($lang, array(
	// General config options
	'ACP_CAT_CONTACTADMIN'			=> 'Kontakt Board Administration',
	'ACP_CONTACTADMIN_CONFIG'		=> 'Konfiguration',
	// Log entries
	'LOG_CONFIG_CONTACT_ADMIN'		=> '<strong>Einstellungen der Kontakt Board Administration Seite geaendert</strong>',
	'LOG_CONTACT_BOT_INVALID'		=> '<strong>Der Bot der Kontakt Board Administration Erweiterung hat eine unzulaessige User-ID:</strong><br />%1$s',
	'LOG_CONTACT_EMAIL_WRONG'		=> '<strong>Der Bot der Kontakt Board Administration Erweiterung hat eine unzulaessige E-Mail:</strong><br />%1$s',
	'LOG_CONTACT_FORUM_INVALID'		=> '<strong>Das gewaehlte Forum der Kontakt Board Administration Erweiterung ist unzulaessig. Forum-ID:</strong><br />%1$s',
	'LOG_CONTACT_EMAIL_INVALID'		=> '<strong>Die Kontakt Board Administration Erweiterung nutzt E-Mails, aber E-Mails sind in der globalen Konfiguration des Boards deaktiviert.  Die Erweiterung wurde automatisch deaktiviert.',
	'LOG_CONTACT_NONE'			=> '<strong>Kontakt Board Administration Erweiterung: Keiner der Administratoren erlaubt Nutzern sie via %1$s zu kontaktieren.</strong>',
	'LOG_CONTACT_CONFIG_UPDATE'		=> '<strong>Einstellungen der Kontakt Board Administration Konfiguration geaendert</strong>',

));
