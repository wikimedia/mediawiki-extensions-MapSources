<?php
/**
 * Internationalisation file for MapSources extension.
 *
 * @package MediaWiki
 * @subpackage Extensions
*/

$messages = array();

$messages['en'] = array(
	'mapsources'                 => 'Map Sources',
	'mapsources-summary'         => 'This page allows users to search for multiple sources for a location given by its coordinate.

Latitude, longitude and additional paramters must be separated with commas.
Parameters consist of an identifier, the equal sign and a value.

Example: 52° 31′ N, 13° 24′ 30″ E, scale=50000

Additionally, the Wikipedia Geohack tool server format will be accepted.',
	'mapsources-search-legend'   => 'Search for data and map sources',
	'mapsources-coordinate'      => 'Coordinate:',
	'mapsources-go'              => 'Go',
	'mapsources-errormsgs'       => 'Error Messages',
	'mapsources-noparams'        => 'No parameters given',
	'mapsources-incorrectparams' => 'Incorrect parameters ($1) given',
	'mapsources-incorrectlat'    => 'Incorrect latitude',
	'mapsources-incorrectlong'   => 'Incorrect longitude',
	'mapsources-nopage'          => 'No project page [[Project:$1]] available',
	'mapsources-outofrange'      => 'Coordinate out of range',
	'mapsources-math-missing-operand' => 'Missing operand',
	'mapsources-math-incorrect-input' => 'Incorrect input',
	'mapsources-desc'            => '[[Special:MapSources|Search]] for data and map sources',
	'mapsources-math-desc'       => 'Adds tags for conversion of coordinates',
);

/** Message documentation (Message documentation)
 */
$messages['qqq'] = array(
	'mapsources' => 'Extension name: Map Sources.',
	'mapsources-summary' => 'Extension summary to be displayed at the top of the special page, explaining how the extension works.',
	'mapsources-search-legend' => 'Form fieldset label.',
	'mapsources-coordinate' => 'Label for input box accepting coordinated.',
	'mapsources-go' => 'Label for submit button.',
	'mapsources-errormsgs' => 'Title above error messages, if any occurred during search.',
	'mapsources-noparams' => 'Error message when no parameters are given.',
	'mapsources-incorrectparams' => 'Error message when incorrect parameters are given. $1 is the current parameters.',
	'mapsources-incorrectlat' => 'Error message when latitude is incorrect.',
	'mapsources-incorrectlong' => 'Error message when longitude is incorrect.',
	'mapsources-nopage' => 'Error message when project page is not available.',
	'mapsources-outofrange' => 'Error message when coordinates are out of range.',
	'mapsources-math-missing-operand' => 'Error message when operand is missing.',
	'mapsources-math-incorrect-input' => 'Error message when input is incorrect',
	'mapsources-desc' => 'Extension credits: special page description.',
	'mapsources-math-desc' => 'Extension credits: parser hook description',
);

/** German (Deutsch)
 */
$messages['de'] = array(
	'mapsources' => 'Karten- und Datenquellen',
	'mapsources-summary' => 'Auf dieser Spezialseite können Sie eine Koordinate eingeben und erhalten dann eine Liste mit Informations- und Bezugsmöglichkeiten von Karten und geografischen Angaben.

Geografische Breite, Länge und weitere Parameter müssen mit Kommas getrennt werden. Parameter bestehen aus dem Kennwort, dem Gleichheitszeichen und dem Wert.

Beispiel: 52° 31′ N, 13° 24′ 30″ E, scale=50000

Zusätzlich wird das Format des Wikipedia-Geohack-Toolservers akzeptiert.',
	'mapsources-search-legend' => 'Suche nach Daten- und Kartenquellen',
	'mapsources-coordinate' => 'Koordinate:',
	'mapsources-go' => 'Suche',
	'mapsources-errormsgs' => 'Fehlermeldungen',
	'mapsources-noparams' => 'Keine Parameter angegeben',
	'mapsources-incorrectparams' => 'Fehlerhafte Parameter angegeben', # Fuzzy
	'mapsources-incorrectlat' => 'Fehlerhafte Breitenangabe',
	'mapsources-incorrectlong' => 'Fehlerhafte Längenangabe',
	'mapsources-nopage' => 'Keine Projektseite [[Project:$1]] verfügbar',
	'mapsources-outofrange' => 'Ungültige Koordinate',
	'mapsources-math-missing-operand' => 'Fehlende(r) Parameter',
	'mapsources-math-incorrect-input' => 'Fehlerhafte Eingabe',
	'mapsources-desc' => 'Erweiterung für Karten- und Datenquellen', # Fuzzy
);

/** French (français)
 */
$messages['fr'] = array(
	'mapsources' => 'Sources de cartes',
	'mapsources-summary' => 'Cette page permet aux utilisateurs de rechercher des sources multiples pour un lieu en donnant ses coordonées.',
	'mapsources-search-legend' => 'Rechercher des sources de cartes et données',
	'mapsources-coordinate' => 'Coordonées:',
	'mapsources-go' => 'Rechercher',
	'mapsources-errormsgs' => 'Messages d’erreur',
	'mapsources-noparams' => 'Paramètres manquants',
	'mapsources-incorrectparams' => 'Paramètres erronés', # Fuzzy
	'mapsources-incorrectlat' => 'Latitude erronée',
	'mapsources-incorrectlong' => 'Longitude erronée',
	'mapsources-nopage' => 'Pas de page de projet [[Project:$1]] disponible',
	'mapsources-outofrange' => 'Coordonées invalides',
	'mapsources-math-missing-operand' => 'Opérateur(s) manquant(s)',
	'mapsources-math-incorrect-input' => 'Entrée erronée',
);

/** Italian (italiano)
 */
$messages['it'] = array(
	'mapsources' => 'Fonte della mappa',
	'mapsources-summary' => 'Questa pagina speciale permette che gli utenti cerchino le fonti multiple per una posizione data dalla relativa coordinata.',
	'mapsources-search-legend' => 'Cerca per dati e fonti delle mappe',
	'mapsources-coordinate' => 'Coordinate:',
	'mapsources-go' => 'Cerca',
	'mapsources-errormsgs' => 'Messaggio di errore',
	'mapsources-noparams' => 'Parametri mancanti',
	'mapsources-incorrectparams' => 'Parametri non corretti', # Fuzzy
	'mapsources-incorrectlat' => 'Latitudine non corretta',
	'mapsources-incorrectlong' => 'Longitudine non corretta',
	'mapsources-nopage' => 'Pagine del progetto [[Project:$1]] non disponibili',
	'mapsources-outofrange' => 'Coordinate non valide',
	'mapsources-math-missing-operand' => 'Parametro mancante',
	'mapsources-math-incorrect-input' => 'Input non corretto',
);

/** Polish (polski)
 */
$messages['pl'] = array(
	'mapsources' => 'Mapy',
	'mapsources-summary' => 'Na tej stronie można odnaleźć łącza do map przedstawiających miejsce o podanych współrzędnych.',
	'mapsources-search-legend' => 'Wyszukaj mapy i odwzorowania terenu',
	'mapsources-coordinate' => 'Współrzędne:',
	'mapsources-go' => 'Przejdź',
	'mapsources-errormsgs' => 'Komunikaty błędów',
	'mapsources-noparams' => 'Brak parametrów',
	'mapsources-incorrectparams' => 'Błędne parametry', # Fuzzy
	'mapsources-incorrectlat' => 'Błędna szerokość',
	'mapsources-incorrectlong' => 'Błędna długość',
	'mapsources-nopage' => 'Brak adresu [[Project:$1]] źródła',
	'mapsources-outofrange' => 'Współrzędne poza zakresem',
	'mapsources-math-missing-operand' => 'Brak parametru(ów)',
	'mapsources-math-incorrect-input' => 'Błędne dane',
);
