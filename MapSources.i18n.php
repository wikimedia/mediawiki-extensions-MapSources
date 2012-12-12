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

Latitude, longitude and additional parameters must be separated with commas.
Parameters consist of an identifier, the equal sign and a value.

Example: 52° 31′ N, 13° 24′ 30″ E, scale=50000

Additionally, the Wikipedia Geohack toolserver format will be accepted.',
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
 * @author Shirayuki
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
	'mapsources-desc' => '{{desc|name=Map Sources|url=http://www.mediawiki.org/wiki/Extension:MapSources}}
Extension credits: special page description.',
	'mapsources-math-desc' => 'Extension credits: parser hook description',
);

/** German (Deutsch)
 * @author Metalhead64
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
	'mapsources-incorrectparams' => 'Fehlerhafte Parameter ($1) angegeben',
	'mapsources-incorrectlat' => 'Fehlerhafte Breitenangabe',
	'mapsources-incorrectlong' => 'Fehlerhafte Längenangabe',
	'mapsources-nopage' => 'Keine Projektseite [[Project:$1]] verfügbar',
	'mapsources-outofrange' => 'Ungültige Koordinate',
	'mapsources-math-missing-operand' => 'Fehlende(r) Parameter',
	'mapsources-math-incorrect-input' => 'Fehlerhafte Eingabe',
	'mapsources-desc' => '[[Special:MapSources|Suche]] nach Daten- und Kartenquellen',
	'mapsources-math-desc' => 'Ergänzt Tags zur Umwandlung von Koordinaten',
);

/** Finnish (suomi)
 * @author Stryn
 */
$messages['fi'] = array(
	'mapsources-coordinate' => 'Koordinaatti:',
	'mapsources-incorrectlat' => 'Virheellinen leveysaste',
	'mapsources-incorrectlong' => 'Virheellinen pituusaste',
);

/** French (français)
 * @author Gomoko
 */
$messages['fr'] = array(
	'mapsources' => 'Sources de cartes',
	'mapsources-summary' => 'Cette page permet aux utilisateurs de rechercher des sources multiples pour un lieu en donnant ses coordonées.',
	'mapsources-search-legend' => 'Rechercher des sources de cartes et données',
	'mapsources-coordinate' => 'Coordonées:',
	'mapsources-go' => 'Rechercher',
	'mapsources-errormsgs' => 'Messages d’erreur',
	'mapsources-noparams' => 'Paramètres manquants',
	'mapsources-incorrectparams' => 'Paramètres incorrects ($1) fournis',
	'mapsources-incorrectlat' => 'Latitude erronée',
	'mapsources-incorrectlong' => 'Longitude erronée',
	'mapsources-nopage' => 'Pas de page de projet [[Project:$1]] disponible',
	'mapsources-outofrange' => 'Coordonées invalides',
	'mapsources-math-missing-operand' => 'Opérateur(s) manquant(s)',
	'mapsources-math-incorrect-input' => 'Entrée erronée',
	'mapsources-desc' => '[[Special:MapSources|Recherche]] de sources de données et de cartes',
	'mapsources-math-desc' => 'Ajoute des balises pour la conversion des coordonnées',
);

/** Italian (italiano)
 * @author Beta16
 */
$messages['it'] = array(
	'mapsources' => 'Fonte della mappa',
	'mapsources-summary' => 'Questa pagina speciale permette che gli utenti cerchino le fonti multiple per una posizione data dalla relativa coordinata.',
	'mapsources-search-legend' => 'Cerca per dati e fonti delle mappe',
	'mapsources-coordinate' => 'Coordinate:',
	'mapsources-go' => 'Cerca',
	'mapsources-errormsgs' => 'Messaggio di errore',
	'mapsources-noparams' => 'Parametri mancanti',
	'mapsources-incorrectparams' => 'Inseriti parametri non corretti ($1)',
	'mapsources-incorrectlat' => 'Latitudine non corretta',
	'mapsources-incorrectlong' => 'Longitudine non corretta',
	'mapsources-nopage' => 'Pagine del progetto [[Project:$1]] non disponibili',
	'mapsources-outofrange' => 'Coordinate non valide',
	'mapsources-math-missing-operand' => 'Parametro mancante',
	'mapsources-math-incorrect-input' => 'Input non corretto',
	'mapsources-desc' => '[[Special:MapSources|Cerca]] per le origini dati e mappe',
	'mapsources-math-desc' => "Aggiunge l'etichetta per la conversione delle coordinate",
);

/** Japanese (日本語)
 * @author Shirayuki
 */
$messages['ja'] = array(
	'mapsources' => '地図情報源',
	'mapsources-summary' => 'このページでは、指定した緯度経度の場所について複数の地図情報源で検索できます。

緯度、経度、追加のパラメーターは、カンマで区切ってください。
追加のパラメーターの書式は 識別子=値 です。

例: 52° 31′ N, 13° 24′ 30″ E, scale=50000

さらに、ウィキペディア ジオハック ツールサーバーの書式も使用できます。',
	'mapsources-search-legend' => 'データおよび地図情報源の検索',
	'mapsources-coordinate' => '緯度経度:',
	'mapsources-go' => '実行',
	'mapsources-errormsgs' => 'エラーメッセージ',
	'mapsources-noparams' => 'パラメーターを指定していません',
	'mapsources-incorrectparams' => '正しくないパラメーター ($1) を指定しました',
	'mapsources-incorrectlat' => '緯度が無効です',
	'mapsources-incorrectlong' => '経度が無効です',
	'mapsources-nopage' => 'プロジェクトページ [[Project:$1]] を利用できません',
	'mapsources-outofrange' => '座標が範囲外です',
	'mapsources-math-missing-operand' => '演算対象がありません',
	'mapsources-math-incorrect-input' => '入力が正しくありません',
	'mapsources-desc' => 'データおよび地図情報源の[[Special:MapSources|検索]]',
	'mapsources-math-desc' => '座標を変換するためのタグを追加する',
);

/** Macedonian (македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'mapsources' => 'Картографски извори',
	'mapsources-summary' => 'Страницава возможува пребарување на повеќе извори за дадено место според неговите координати.

Географската ширина, должина и другите параметри мора да бидат одвоени со запирки.
Параметрите се состојат од назнака, знакот еднакво и вредност.

Пример: 52° 31′ N, 13° 24′ 30″ E, scale=50000

Покрај ова, ќе се прифаќа и форматот на опслужувачот на Википедиината алатка „Geohack“.',
	'mapsources-search-legend' => 'Пребарување на податочни и картографски ресурси',
	'mapsources-coordinate' => 'Координата:',
	'mapsources-go' => 'Оди',
	'mapsources-errormsgs' => 'Пораки за грешки',
	'mapsources-noparams' => 'Нема зададено параметри',
	'mapsources-incorrectparams' => 'Зададени се неисправни параметри ($1)',
	'mapsources-incorrectlat' => 'Погрешна геог. ширина',
	'mapsources-incorrectlong' => 'Погрешна геог. должина',
	'mapsources-nopage' => 'Нема на располагање проектна страница со име [[Project:$1]]',
	'mapsources-outofrange' => 'Координатите се вон опсегот',
	'mapsources-math-missing-operand' => 'Недостасува операнд',
	'mapsources-math-incorrect-input' => 'Погрешен внос',
	'mapsources-desc' => '[[Special:MapSources|Пребарување]] на податочни и картографски ресурси',
	'mapsources-math-desc' => 'Додава ознаки за претворање на координати',
);

/** Dutch (Nederlands)
 * @author Siebrand
 */
$messages['nl'] = array(
	'mapsources' => 'Kaartbronnen',
	'mapsources-summary' => "Via deze pagina kunt u zoeken naar ene locatie op basis van coördinaten in meerdere bronnen.

Lengtegraad, breedtegraad en extra parameters moeten gescheiden worden met komma's.
Parameters bestaan uit een identificatie, het =-teken en een waarde.

Voorbeeld: 52° 31′ N, 13° 24′ 30″ E, scale=50000

Ook de opmaak van het hulpprogramma Geohack van de Wikimedia Toolserver wordt ondersteund.",
	'mapsources-search-legend' => 'Zoeken naar gegevens- en kaartbronnen',
	'mapsources-coordinate' => 'Coördinaat:',
	'mapsources-go' => 'OK',
	'mapsources-errormsgs' => 'Foutberichten',
	'mapsources-noparams' => 'Geen parameters opgegeven',
	'mapsources-incorrectparams' => 'Ongeldige parameters opgegeven ($1)',
	'mapsources-incorrectlat' => 'Onjuiste breedtegraad',
	'mapsources-incorrectlong' => 'Onjuiste lengtegraad',
	'mapsources-nopage' => 'Geen projectpagina [[Project:$1]] beschikbaar',
	'mapsources-outofrange' => 'Coördinaat buiten het bereik',
	'mapsources-math-missing-operand' => 'Ontbrekende operand',
	'mapsources-math-incorrect-input' => 'Onjuiste invoer',
	'mapsources-desc' => '[[Special:MapSources|Zoeken]] naar gegevens- en kaartbronnen',
	'mapsources-math-desc' => 'Voegt labels toe voor het omrekenen van coördinaten',
);

/** Polish (polski)
 * @author Odie2
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
	'mapsources-desc' => '[[Special:MapSources|Wyszukaj]] źródła map i danych',
	'mapsources-math-desc' => 'Dodaje znaczniki do konwersji współrzędnych',
);

/** Telugu (తెలుగు)
 * @author Veeven
 */
$messages['te'] = array(
	'mapsources-go' => 'వెళ్ళు',
);
