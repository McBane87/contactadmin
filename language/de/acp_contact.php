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
	'CONTACT_CONFIG_SAVED'			=> 'Kontakt Board Administration Einstellungen wurden geaendert',
	'CONTACT_ENABLE'			=> 'Aktiviere Kontakt Board Administration',
	'CONTACT_ENABLE_EXPLAIN'		=> 'Aktiviere oder deaktiviere die Erweiterung global',
	'CONTACT_ACP_CONFIRM'			=> 'Aktiviere visuelle Bestaetigung (z.B. Captcha)',
	'CONTACT_ACP_CONFIRM_EXPLAIN'		=> 'Wenn du diese Option aktivierst, dann muessen Benutzer eine visuelle Bestaetigung eingeben.<br>Dies soll Spam verhindern. Bitte beachte, dass diese Aenderung nur die Kontakt-Seite betrifft.  Es hat keinen Einfluss auf andere Einstellungen des Boards, die visuelle Bestaetigungen nutzen.',
	'CONTACT_ATTACHMENTS'			=> 'Anhaenge erlauben',
	'CONTACT_ATTACHMENTS_EXPLAIN'		=> 'Bei Aktivierung sind Anhaenge in Privaten Nachrichten und Forum Posts erlaubt.<br>Die erlaubten Dateierweiterungen sind die selben, welche global im Board konfiguriert wurden.<br><span style="color:red;">Wird bei Kontakt Methode “EMail” und “EMail-Board” ignoriert.</span>',
	'CONTACT_CONFIRM_GUESTS'		=> 'Visuelle Bestaetigung (z.B. Captcha) nur fuer Gaeste',
	'CONTACT_CONFIRM_GUESTS_EXPLAIN'	=> 'Bei Aktivierung, wird die Visuelle Bestaetigung (falls aktiviert) nur fuer Gaeste angezeigt.',
	'CONTACT_FOUNDER'			=> 'Nachrichten nur an Board Besitzer/Gruender',
	'CONTACT_FOUNDER_EXPLAIN'		=> 'Bei Aktivierung wird nur der Board Besitzer/Gruender Emails oder Private Nachrichten erhalten.<br><span style="color:red;">Wird bei Kontakt Methode “Email-Board” ignoriert.</span>',
	'CONTACT_GENERAL_SETTINGS'		=> 'Allgemeine Einstellungen der Kontakseite',
	'CONTACT_MAX_ATTEMPTS'			=> 'Maximale Bestaetigungsversuche',
	'CONTACT_MAX_ATTEMPTS_EXPLAIN'		=> 'Wie oft darf ein Benutzer versuchen die korrekte Loesung fuer die Bestaetigung (z.B. Captcha) zu senden?<br>Bei 0 sind unendlich viele Versuche erlaubt.',
	'CONTACT_METHOD'			=> 'Kontakt Methode',
	'CONTACT_METHOD_EXPLAIN'		=> 'Wie sollen Benutzer dich bzw. die Admins kontaktieren?<br>“Email” sendet eine E-Mail an alle Benutzer der Gruppe Administratoren, sofern diese E-Mails von anderen Benutzern erlauben.<br>“Email-Board” nutzt die E-Mail Adresse, welche in “Client Kommunikation -> Board E-Mails -> Kontakt-E-Mail-Adresse” hinterlegt ist.<br><span style="color:red;">Wenn “Email” or “Email-Board” gewaehlt wurde, dann werden Anhaenge ignoriert.</span>',
	'CONTACT_REASONS'			=> 'Kontakt Gruende',
	'CONTACT_REASONS_EXPLAIN'		=> 'Gib moegliche Gruende fuer den Kontakt ein. Ein Grund pro Zeile.<br>Wenn du diese Funktion nicht nutzen moechtest, dann einfach leer lassen.',
	// Bot config options
	'CONTACT_BOT_FORUM'			=> 'Kontakt-Bot Forum',
	'CONTACT_BOT_FORUM_EXPLAIN'		=> 'Waehle das Forum in welches der Kontakt-Bot schreiben soll, sofern “Forum Post” gewaehlt wurde.',
	'CONTACT_BOT_POSTER'			=> 'Bot-Benutzer als Urheber',
	'CONTACT_BOT_POSTER_EXPLAIN'		=> 'Bei Aktivierung werden Private Nachrichten und Forum Posts unter dem Namen des Bot-Benutzers (siehe obige Einstellung) veroeffentlicht. Falls “Nichts” gewaehlt wurde, dann wird der Bot-Benutzer nicht genutzt. In diesem Fall wuerden Private Nachrichten und Forum Posts unter dem Namen, welcher im Kontaktformular eingegeben wurde, veroeffentlicht werden.',
	'CONTACT_BOT_USER'			=> 'Bot-Benutzer',
	'CONTACT_BOT_USER_EXPLAIN'		=> 'Waehle den Beutzer unter dessen Namen “Private Nachrichten” oder “Forum Posts” veroeffnetlicht werden sollen.',
	'CONTACT_USERNAME_CHK'			=> 'Pruefe Benutzernamen',
	'CONTACT_USERNAME_CHK_EXPLAIN'		=> 'Bei Aktivierung werden die eingegebenen Benutzernamen mit denen in der Datenbank verglichen. Wenn ein gleicher Name existiert, dann wird der Benutzer dazu aufgefordert einen anderen Namen zu waehlen.',
	'CONTACT_EMAIL_CHK'			=> 'Pruefe E-Mail',
	'CONTACT_EMAIL_CHK_EXPLAIN'		=> 'Bei Aktivierung werden die eingegebenen E-Mail Adressen mit denen in der Datenbank verglichen. Wenn eine gleiche E-Mail Adresse existiert, dann wird der Benutzer dazu aufgefordert eine andere zu waehlen.',

	// Contact methods
	'CONTACT_METHOD_EMAIL'			=> 'Email',
	'CONTACT_METHOD_PM'			=> 'Private Nachricht',
	'CONTACT_METHOD_POST'			=> 'Forum Post',
	'CONTACT_METHOD_EMAIL_BOARD'		=> 'Email-Board',

	// Contact posters...user bot
	'CONTACT_POST_NEITHER'			=> 'Nichts',
	'CONTACT_POST_GUEST'			=> 'Nur Gaeste',
	'CONTACT_POST_ALL'			=> 'Alle',
));
