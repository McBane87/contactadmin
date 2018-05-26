<?php
/**
*
* Contact admin extension for the phpBB Forum Software package.
*
* @copyright 2016 Rich McGirr (RMcGirr83)
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/
/**
* DO NOT CHANGE
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
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'ACP_CAT_CONTACTADMIN'		=> 'Kontakt Administration',
	'ADD_ATTACHMENT_EXPLAIN'	=> 'Wenn du einen Anhang hinzufuegen moechtest, dann gib die entsprechenden Informationen bitte unterhalb ein.',
	'CONTACT_BOT_ERROR'		=> 'Du kannst das Kontaktformular derzeit nicht benutzen, da es einen Fehler in der Konfiguration gibt.  Eine automatische E-Mail wurde bereits an den Administrator versandt.',
	'CONTACT_BOT_NONE'		=> 'Der Benutzer %1$s hat versucht die Contact Admin Erweiterung auf %2$s zu nutzen, um ein(e) %3$s zu senden, aber es gibt keine Administratoren, welche %3$ss von Benutzern erlauben. Bitte gehe ins Admin Panel des Forums %4$s waehle die Board Besitzer/Gruender Option der Kontakt Board Administration.',
	'CONTACT_BOT_SUBJECT'		=> 'Fehler - Kontakt Administration Erweiterung',
	'CONTACT_BOT_USER_MESSAGE'	=> 'Der Benutzer %1$s hat versucht die Contact Admin Erweiterung auf %2$s zu nutzen, aber der gewahlte Benutzer in den Einstellungen ist inkorrekt. Bitte besuche das Forum %3$s und waehle einen anderen User im ADM fuer die Erweiterung Contact Administration.',
	'CONTACT_BOT_EMAIL_MESSAGE'	=> 'Der Benutzer %1$s hat versucht die Contact Admin Erweiterung auf %2$s zu nutzen, aber die gewahlte E-Mail in den Einstellungen ist inkorrekt. Bitte besuche das Forum %3$s und waehle einen anderen User im ADM fuer “Client Kommunikation -> Board E-Mails -> Kontakt-E-Mail-Adresse”.',
	'CONTACT_BOT_FORUM_MESSAGE'	=> 'Der Benutzer %1$s hat versucht die Contact Admin Erweiterung auf %2$s zu nutzen, aber das gewahlte Forum in den Einstellungen ist inkorrekt. Bitte besuche das Forum %3$s und waehle einen anderes Ziel-Forum im ADM fuer die Erweiterung Contact Administration.',
	'CONTACT_CONFIRM'		=> 'Bestaetigen',
	'CONTACT_DISABLED'		=> 'Das Kontaktformular kann aktuell nicht benutzt werden, da es deaktiviert ist.',
	'CONTACT_MAIL_DISABLED'		=> 'Es gibt einen Fehler in der Contact Administration Erweiterung.<br />Die Erweiterung wurde konfiguriert E-Mails zu versenden, aber E-Mail Versand ist global im Board deaktiviert. Bitte kontaktiere den Administrator: <a href="mailto:%1$s">%1$s</a>',
	'CONTACT_MSG_SENT'		=> 'Deine Nachricht wurde erfolgreich versandt.',
	'CONTACT_NO_MSG'		=> 'Du hast keine Nachricht eingegeben.',
	'CONTACT_NO_SUBJ'		=> 'Du hast keinen Betreff eingegeben.',
	'CONTACT_REASON'		=> 'Grund',
	'CONTACT_TEMPLATE'		=> '[b]Name:[/b] %1$s' . "\n" . '[b]E-Mail Addresse:[/b] %2$s' . "\n" . '[b]IP:[/b] %3$s' . "\n" . '[b]Betreff:[/b] %4$s' . "\n" . '[b]Hat folgende Nachricht ins Kontaktformular eingegeben:[/b] %5$s',
	'CONTACT_TITLE'			=> 'Kontakt Administration',
	'CONTACT_TOO_MANY'		=> 'Du hast die maximale Anzahl an Versuchen erreicht. Bitte versuche es spaeter erneut.',

	'CONTACT_YOUR_NAME'		=> 'Name',
	'CONTACT_YOUR_NAME_EXPLAIN'	=> 'Bitte gib einen Namen ein, damit die Nachricht eine Identität hat.',
	'CONTACT_YOUR_EMAIL'		=> 'E-Mail Adresse',
	'CONTACT_YOUR_EMAIL_EXPLAIN'	=> 'Bitte gib eine korrekte E-Mail Adresse ein, damit wir dich Kontaktieren koennen.',

	'TOO_MANY_CONTACT_TRIES'	=> 'Du hast die maximale Anzahl an Versuchen erreicht. Bitte versuche es spaeter erneut.',
	'CONTACT_NO_NAME'		=> 'Du hast keinen Namen eingegeben.',

	'RETURN_CONTACT'		=> '%sZurueck zum Kontaktformular%s',
));
