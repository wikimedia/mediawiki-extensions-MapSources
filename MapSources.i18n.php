<?php
/**
 * Internationalisation file for MapSources extension.
 *
 * @package MediaWiki
 * @subpackage Extensions
*/

$messages = array();

$messages['en'] = array(
	'mapsources'                 => 'Map sources',
	'mapsources-summary'         => 'This page allows users to search for multiple sources for a location given by its coordinate.

Latitude, longitude and additional parameters must be separated with commas.
Parameters consist of an identifier, the equal sign and a value.

Example: 52° 31′ N, 13° 24′ 30″ E, scale=50000

Additionally, the [https://wiki.toolserver.org/view/GeoHack GeoHack] format will be accepted.',
	'mapsources-search-legend'   => 'Search for data and map sources',
	'mapsources-coordinate'      => 'Coordinate:',
	'mapsources-go'              => 'Go',
	'mapsources-errormsgs'       => 'Error messages',
	'mapsources-noparams'        => 'No parameters given',
	'mapsources-incorrectparams' => 'Incorrect parameters ($1) given',
	'mapsources-incorrectlat'    => 'Incorrect latitude',
	'mapsources-incorrectlong'   => 'Incorrect longitude',
	'mapsources-nopage'          => 'No project page [[{{ns:project}}:$1|$1]] available',
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
	'mapsources' => '{{doc-special|MapSources|unlisted=1}}',
	'mapsources-summary' => 'Extension summary to be displayed at the top of the special page, explaining how the extension works.',
	'mapsources-search-legend' => 'Form fieldset label.',
	'mapsources-coordinate' => 'Label for input box accepting geographical coordinates.
{{Identical|Coordinates}}',
	'mapsources-go' => 'Label for submit button.
{{Identical|Go}}',
	'mapsources-errormsgs' => 'Title above error messages, if any occurred during search.
{{Identical|Error message}}',
	'mapsources-noparams' => 'Error message when no parameters are given.',
	'mapsources-incorrectparams' => 'Error message when incorrect parameters are given. $1 is the current parameters.',
	'mapsources-incorrectlat' => 'Error message when latitude is incorrect.',
	'mapsources-incorrectlong' => 'Error message when longitude is incorrect.',
	'mapsources-nopage' => 'Error message when project page is not available. Parameters:
* $1 - the message {{msg-mw|Mapsources}}',
	'mapsources-outofrange' => 'Error message when coordinates are out of range.',
	'mapsources-math-missing-operand' => 'Error message when operand is missing.',
	'mapsources-math-incorrect-input' => 'Error message when input is incorrect',
	'mapsources-desc' => '{{desc|name=Map Sources|url=http://www.mediawiki.org/wiki/Extension:MapSources}}
Extension credits: special page description.',
	'mapsources-math-desc' => 'Extension credits: parser hook description',
);

/** Asturian (asturianu)
 * @author Xuacu
 */
$messages['ast'] = array(
	'mapsources' => 'Fontes de mapes',
	'mapsources-summary' => "Esta páxina permite a los usuarios buscar en múltiples fontes un llugar dau poles sos coordenaes.

La llatitú, llonxitú y demás parámetros tienen de separase con comes.
Los parámetros consisten nun identificador, el signu igual y un valor.

Exemplu: 52° 31′ N, 13° 24′ 30″ E, escala=50000

Amás, aceutaráse'l formatu [https://wiki.toolserver.org/view/GeoHack GeoHack].",
	'mapsources-search-legend' => 'Buscar datos y fontes de mapes',
	'mapsources-coordinate' => 'Coordenaes:',
	'mapsources-go' => 'Dir',
	'mapsources-errormsgs' => "Mensaxes d'error",
	'mapsources-noparams' => 'Nun se dieron parámetros',
	'mapsources-incorrectparams' => 'Dieronse los parámetros ($1) incorreutos',
	'mapsources-incorrectlat' => 'Llatitú incorreuta',
	'mapsources-incorrectlong' => 'Llonxitú incorreuta',
	'mapsources-nopage' => 'Nun ta disponible la páxina del proyeutu [[{{ns:project}}:$1|$1]]',
	'mapsources-outofrange' => 'Coordenaes fuera de rangu',
	'mapsources-math-missing-operand' => 'Falta un operando',
	'mapsources-math-incorrect-input' => 'Entrada incorreuta',
	'mapsources-desc' => '[[Special:MapSources|Buscar]] datos y fontes de mapes',
	'mapsources-math-desc' => 'Amestar etiquetes pa la conversión de coordenaes',
);

/** Breton (brezhoneg)
 * @author Fohanno
 * @author Y-M D
 */
$messages['br'] = array(
	'mapsources-coordinate' => 'Daveennoù :',
	'mapsources-go' => 'Mont',
	'mapsources-incorrectlat' => 'Ledred direizh',
	'mapsources-incorrectlong' => 'Hedred direizh',
);

/** Catalan (català)
 * @author Jmontane
 */
$messages['ca'] = array(
	'mapsources-coordinate' => 'Coordenades:',
	'mapsources-go' => 'Vés',
	'mapsources-errormsgs' => "Missatges d'error",
	'mapsources-noparams' => 'No heu indicat cap paràmetre',
	'mapsources-incorrectlat' => 'La latitud no és correcta',
	'mapsources-incorrectlong' => 'La longitud no és correcta',
	'mapsources-nopage' => 'La pàgina del projecte [[Project:$1]] no es troba disponible', # Fuzzy
	'mapsources-outofrange' => "Les coordenades són fora de l'interval",
	'mapsources-math-missing-operand' => 'Manca un operador',
	'mapsources-math-incorrect-input' => "L'entrada no és correcta",
	'mapsources-desc' => '[[Special:MapSources|Cerqueu]] dades i fonts de mapes',
);

/** Chechen (нохчийн)
 * @author Умар
 */
$messages['ce'] = array(
	'mapsources-coordinate' => 'Координаташ:',
	'mapsources-go' => 'Лаха',
);

/** Czech (čeština)
 * @author Mormegil
 * @author Vks
 */
$messages['cs'] = array(
	'mapsources' => 'Zdroje map',
	'mapsources-summary' => 'Tato stránka uživatelům umožňuje hledat různé zdroje týkající se místa zadaného svými souřadnicemi.

Zeměpisná šířka, délka a další parametry musí být odděleny čárkami.
Parametry se skládají z identifikátoru, rovnítka a hodnoty.

Příklad: 52° 31′ N, 13° 24′ 30″ E, scale=50000

Navíc je podporován formát [https://wiki.toolserver.org/view/GeoHack GeoHack].',
	'mapsources-search-legend' => 'Hledání zdrojů dat a map',
	'mapsources-coordinate' => 'Souřadnice:',
	'mapsources-go' => 'Přejít',
	'mapsources-errormsgs' => 'Chybová hlášení',
	'mapsources-noparams' => 'Nebyly zadány parametry',
	'mapsources-incorrectparams' => 'Zadány nesprávné parametry ($1)',
	'mapsources-incorrectlat' => 'Nesprávná zeměpisná šířka',
	'mapsources-incorrectlong' => 'Nesprávná zeměpisná délka',
	'mapsources-nopage' => 'Není k dispozici projektová stránka [[{{ns:project}}:$1|$1]]',
	'mapsources-outofrange' => 'Souřadnice mimo rozsah',
	'mapsources-math-missing-operand' => 'Chybí operand',
	'mapsources-math-incorrect-input' => 'Špatný vstup',
	'mapsources-desc' => '[[Special:MapSources|Hledání]] zdrojů dat a map',
	'mapsources-math-desc' => 'Přidává značky pro převody souřadnic',
);

/** Welsh (Cymraeg)
 * @author Lloffiwr
 */
$messages['cy'] = array(
	'mapsources' => 'Ffynnonellau mapiau',
	'mapsources-search-legend' => 'Chwilio am ffynonellau data a mapio',
	'mapsources-coordinate' => 'Cyfesuryn:',
	'mapsources-go' => 'Chwilier',
	'mapsources-errormsgs' => 'Negeseuon gwallau',
	'mapsources-noparams' => 'Ni roddwyd unrhyw baramedrau',
	'mapsources-incorrectparams' => 'Rhoddwyd paramedrau ($1) anghywir',
	'mapsources-incorrectlat' => 'Lledred anghywir',
	'mapsources-incorrectlong' => 'Hydred anghywir',
	'mapsources-nopage' => 'Dim tudalen brosiect [[{{ns:project}}:$1|$1]] ar gael',
	'mapsources-outofrange' => "Y cyfesuryn yn rhy bell o'r cyrraedd",
	'mapsources-math-missing-operand' => 'Operand yn eisiau',
	'mapsources-math-incorrect-input' => 'Mewnbwn anghywir',
	'mapsources-desc' => "[[Special:MapSources|Chwilio]] am ddata a ffynnonellau'r mapiau",
	'mapsources-math-desc' => 'Ychwanegu tagiau er mwyn trosi cyfesurynnau',
);

/** German (Deutsch)
 * @author Metalhead64
 */
$messages['de'] = array(
	'mapsources' => 'Karten- und Datenquellen',
	'mapsources-summary' => 'Auf dieser Spezialseite können Sie eine Koordinate eingeben und erhalten dann eine Liste mit Informations- und Bezugsmöglichkeiten von Karten und geografischen Angaben.

Geografische Breite, Länge und weitere Parameter müssen mit Kommas getrennt werden. Parameter bestehen aus dem Kennwort, dem Gleichheitszeichen und dem Wert.

Beispiel: 52° 31′ N, 13° 24′ 30″ E, scale=50000

Zusätzlich wird das Format des [https://wiki.toolserver.org/view/GeoHack Wikipedia-Geohack-Toolservers] akzeptiert.',
	'mapsources-search-legend' => 'Suche nach Daten- und Kartenquellen',
	'mapsources-coordinate' => 'Koordinate:',
	'mapsources-go' => 'Suche',
	'mapsources-errormsgs' => 'Fehlermeldungen',
	'mapsources-noparams' => 'Keine Parameter angegeben',
	'mapsources-incorrectparams' => 'Fehlerhafte Parameter ($1) angegeben',
	'mapsources-incorrectlat' => 'Fehlerhafte Breitenangabe',
	'mapsources-incorrectlong' => 'Fehlerhafte Längenangabe',
	'mapsources-nopage' => 'Keine Projektseite [[{{ns:project}}:$1|$1]] verfügbar',
	'mapsources-outofrange' => 'Ungültige Koordinate',
	'mapsources-math-missing-operand' => 'Fehlende(r) Parameter',
	'mapsources-math-incorrect-input' => 'Fehlerhafte Eingabe',
	'mapsources-desc' => '[[Special:MapSources|Suche]] nach Daten- und Kartenquellen',
	'mapsources-math-desc' => 'Ergänzt Tags zur Umwandlung von Koordinaten',
);

/** Greek (Ελληνικά)
 * @author Protnet
 * @author ZaDiak
 */
$messages['el'] = array(
	'mapsources-coordinate' => 'Συντεταγμένη:',
	'mapsources-go' => 'Πήγαινε',
	'mapsources-errormsgs' => 'Μηνύματα σφάλματος',
);

/** Spanish (español)
 * @author Armando-Martin
 * @author Ciencia Al Poder
 */
$messages['es'] = array(
	'mapsources' => 'Fuentes de datos del mapa',
	'mapsources-summary' => 'Esta página permite a los usuarios buscar en múltiples fuentes para un lugar dado por sus coordenadas.

La latitud, longitud y los parámetros adicionales deben separarse con comas.
Los parámetros consisten en un identificador, el signo igual y un valor.

Ejemplo: 52° 31′ N, 13° 24′ 30″ E, escala=50000

Además, se aceptará el formato wiki de Wikipedia Geohack.', # Fuzzy
	'mapsources-search-legend' => 'Búsqueda de datos y fuentes de datos del mapa',
	'mapsources-coordinate' => 'Coordenadas:',
	'mapsources-go' => 'Ir',
	'mapsources-errormsgs' => 'Mensajes de error',
	'mapsources-noparams' => 'Faltan parámetros',
	'mapsources-incorrectparams' => 'Los parámetros suministrados son incorrectos ($1)',
	'mapsources-incorrectlat' => 'Latitud incorrecta',
	'mapsources-incorrectlong' => 'Longitud incorrecta',
	'mapsources-nopage' => 'No está disponible la página del proyecto [[{{ns:project}}:$1|$1]]',
	'mapsources-outofrange' => 'Coordenadas fuera de rango',
	'mapsources-math-missing-operand' => 'Falta un operador',
	'mapsources-math-incorrect-input' => 'Entrada incorrecta',
	'mapsources-desc' => '[[Special:MapSources|Buscar]] datos y fuentes de datos del mapa',
	'mapsources-math-desc' => 'Agrega etiquetas para la conversión de coordenadas',
);

/** Estonian (eesti)
 * @author Avjoska
 * @author Pikne
 */
$messages['et'] = array(
	'mapsources-coordinate' => 'Koordinaat:',
	'mapsources-go' => 'Mine',
);

/** Persian (فارسی)
 * @author Armin1392
 * @author Mjbmr
 * @author ZxxZxxZ
 */
$messages['fa'] = array(
	'mapsources' => 'منابع نقشه',
	'mapsources-search-legend' => 'جستجو برای اطلاعات و منابع نقشه',
	'mapsources-coordinate' => 'مختصات:',
	'mapsources-go' => 'برو',
	'mapsources-errormsgs' => 'پیام‌های خطا',
	'mapsources-noparams' => 'هیچ پارامتری داده نشده',
	'mapsources-incorrectparams' => 'پارامتر‌های نادرست ($1) داده شده',
	'mapsources-incorrectlat' => 'عرض جغرافیایی نادرست',
	'mapsources-incorrectlong' => 'طول جغرافیایی نادرست',
	'mapsources-nopage' => 'هیچ صفحهٔ پروژه [[{{ns:project}}:$1|$1]] در دسترس نیست',
	'mapsources-outofrange' => 'متناسب کردن خارج از محدوده',
	'mapsources-math-missing-operand' => 'دستور گم شده',
	'mapsources-math-incorrect-input' => 'ورودی نادرست',
	'mapsources-desc' => '[[ویژه:منابع نقشه|جستجو]] برای منابع اطلاعات و نقشه', # Fuzzy
	'mapsources-math-desc' => 'اضافه کردن برچسب‌ها برای تبدیل مختصات',
);

/** Finnish (suomi)
 * @author Crt
 * @author Silvonen
 * @author Stryn
 * @author VezonThunder
 */
$messages['fi'] = array(
	'mapsources' => 'Karttalähteet',
	'mapsources-summary' => 'Tämä sivu antaa käyttäjien hakea sijaintia useista lähteistä sen koordinaattien mukaan.

Leveys- ja pituusaste sekä lisäehdot tulee erottaa pilkuin.
Ehdot koostuvat tunnisteesta, yhtäsuuruusmerkistä ja arvosta.

Esimerkki: 52° 31′ N, 13° 24′ 30″ E, scale=50000

Myös [https://wiki.toolserver.org/view/GeoHack GeoHack]-muoto hyväksytään.',
	'mapsources-search-legend' => 'Hae tieto- ja karttalähteitä',
	'mapsources-coordinate' => 'Koordinaatti:',
	'mapsources-go' => 'Siirry',
	'mapsources-errormsgs' => 'Virheilmoitukset',
	'mapsources-noparams' => 'Ehtoja ei annettu',
	'mapsources-incorrectparams' => 'Virheelliset ehdot ($1) annettu',
	'mapsources-incorrectlat' => 'Virheellinen leveysaste',
	'mapsources-incorrectlong' => 'Virheellinen pituusaste',
	'mapsources-nopage' => 'Projektisivua [[{{ns:project}}:$1|$1]] ei saatavilla',
	'mapsources-outofrange' => 'Koordinaatti kantaman ulkopuolella',
	'mapsources-math-incorrect-input' => 'Virheellinen syöte',
	'mapsources-desc' => 'Tieto- ja karttalähteiden [[Special:MapSources|haku]]',
);

/** French (français)
 * @author Crochet.david
 * @author Gomoko
 */
$messages['fr'] = array(
	'mapsources' => 'Sources de cartes',
	'mapsources-summary' => 'Cette page permet aux utilisateurs de rechercher des sources multiples pour un lieu en donnant ses coordonnées.

La latitude, la longitude et les paramètres supplémentaires doivent être séparés par des virgules.
Les paramètres consistent en un identifiant, le signe égal et une valeur.

Exemple: 52° 31′ N, 13° 24′ 30″ E, échelle=50000

De plus, le format [https://wiki.toolserver.org/view/GeoHack GeoHack] sera accepté.',
	'mapsources-search-legend' => 'Rechercher des sources de cartes et données',
	'mapsources-coordinate' => 'Coordonées :',
	'mapsources-go' => 'Rechercher',
	'mapsources-errormsgs' => 'Messages d’erreur',
	'mapsources-noparams' => 'Paramètres manquants',
	'mapsources-incorrectparams' => 'Paramètres incorrects ($1) fournis',
	'mapsources-incorrectlat' => 'Latitude erronée',
	'mapsources-incorrectlong' => 'Longitude erronée',
	'mapsources-nopage' => 'Pas de page de projet [[{{ns:project}}:$1|$1]] disponible',
	'mapsources-outofrange' => 'Coordonées invalides',
	'mapsources-math-missing-operand' => 'Opérateur(s) manquant(s)',
	'mapsources-math-incorrect-input' => 'Entrée erronée',
	'mapsources-desc' => '[[Special:MapSources|Recherche]] de sources de données et de cartes',
	'mapsources-math-desc' => 'Ajoute des balises pour la conversion des coordonnées',
);

/** Franco-Provençal (arpetan)
 * @author ChrisPtDe
 */
$messages['frp'] = array(
	'mapsources' => 'Sôrses de mapes',
	'mapsources-search-legend' => 'Rechèrchiér des sôrses de mapes et donâs',
	'mapsources-coordinate' => 'Coordonâs :',
	'mapsources-go' => 'Emmodar',
	'mapsources-errormsgs' => 'Mèssâjos de fôta',
	'mapsources-noparams' => 'Nion paramètro balyê',
	'mapsources-incorrectparams' => 'Paramètros fôx ($1) balyês',
	'mapsources-incorrectlat' => 'Latituda fôssa',
	'mapsources-incorrectlong' => 'Longituda fôssa',
	'mapsources-nopage' => 'Niona pâge projèt [[{{ns:project}}:$1|$1]] disponibla',
	'mapsources-outofrange' => 'Coordonâs en defôr de les limites',
	'mapsources-math-missing-operand' => 'Opèrando manquent',
	'mapsources-math-incorrect-input' => 'Entrâ fôssa',
);

/** Galician (galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'mapsources' => 'Fontes de mapas',
	'mapsources-summary' => 'Esta páxina permite aos usuarios procurar en varias fontes unha localización dada mediante as súas coordenadas.

A latitude, a lonxitude e os parámetros adicionais deben separarse por comas.
Os parámetros consisten nun identificador, o signo igual e un valor.

Exemplo: 52° 31′ N, 13° 24′ 30″ E, escala=50000

Ademais, acéptase o formato [https://wiki.toolserver.org/view/GeoHack GeoHack].',
	'mapsources-search-legend' => 'Procurar datos e fontes de mapas',
	'mapsources-coordinate' => 'Coordenadas:',
	'mapsources-go' => 'Continuar',
	'mapsources-errormsgs' => 'Mensaxes de erro',
	'mapsources-noparams' => 'Non se deu parámetro ningún',
	'mapsources-incorrectparams' => 'Os parámetros achegados ($1) son incorrectos',
	'mapsources-incorrectlat' => 'Latitude incorrecta',
	'mapsources-incorrectlong' => 'Lonxitude incorrecta',
	'mapsources-nopage' => 'Non hai dispoñible ningunha páxina do proxecto "[[{{ns:project}}:$1|$1]]"',
	'mapsources-outofrange' => 'A coordenada está fóra do rango',
	'mapsources-math-missing-operand' => 'Falta o operador',
	'mapsources-math-incorrect-input' => 'Entrada incorrecta',
	'mapsources-desc' => '[[Special:MapSources|Procurar]] datos e fontes de mapas',
	'mapsources-math-desc' => 'Engade etiquetas para a conversión de coordenadas',
);

/** Hebrew (עברית)
 * @author Amire80
 */
$messages['he'] = array(
	'mapsources' => 'מקורות מפות',
	'mapsources-summary' => 'הדף הזה מאפשר לך לחפש מקורות מרובים למיקום לפי נקודות הציון שלו.

קו רוחב, קו אורך ופרמטרים נוספים צריכים להיות מופרדים בפסיקים.
פרמטרים מורכבים ממזהה, סימן שווה וערך.

דוגמה: <span dir="ltr">32° 45′ N, 34° 57′ E, scale=50000 </span>

בנוסף, אפשר להשתמש בתסדיר [https://wiki.toolserver.org/view/GeoHack GeoHack].',
	'mapsources-search-legend' => 'חיפוש נתונים ומקורות מפה',
	'mapsources-coordinate' => 'נקודות ציון:',
	'mapsources-go' => 'מעבר',
	'mapsources-errormsgs' => 'הודעות שגיאה',
	'mapsources-noparams' => 'לא ניתנו פרמטרים',
	'mapsources-incorrectparams' => 'נותנים פרמטרים שגויים ($1)',
	'mapsources-incorrectlat' => 'קו רוחב לא נכון',
	'mapsources-incorrectlong' => 'קו אורך לא נכון',
	'mapsources-nopage' => 'לא זמין דף מיזם [[{{ns:project}}:$1|$1]]',
	'mapsources-outofrange' => 'נקודות הציון מחוץ לטווח',
	'mapsources-math-missing-operand' => 'חסר אופרנד',
	'mapsources-math-incorrect-input' => 'קלט שגוי',
	'mapsources-desc' => '[[Special:MapSources|חיפוד]] נתונים ומקורות מפה',
	'mapsources-math-desc' => 'הוספת תגים להמרת נקודות ציון',
);

/** Italian (italiano)
 * @author Beta16
 */
$messages['it'] = array(
	'mapsources' => 'Fonte della mappa',
	'mapsources-summary' => 'Questa pagina speciale permette di cercare fonti multiple per una posizione date le relative coordinate.

Latitudine, longitudine e parametri aggiuntivi devono essere separati con virgole.
I parametri sono costituiti da un identificatore, il segno di uguale e un valore.

Esempio: 52° 31′ N, 13° 24′ 30″ E, scale=50000

Inoltre, anche il formato [https://wiki.toolserver.org/view/GeoHack GeoHack] è accettato.',
	'mapsources-search-legend' => 'Cerca per dati e fonti delle mappe',
	'mapsources-coordinate' => 'Coordinate:',
	'mapsources-go' => 'Cerca',
	'mapsources-errormsgs' => 'Messaggio di errore',
	'mapsources-noparams' => 'Parametri mancanti',
	'mapsources-incorrectparams' => 'Inseriti parametri non corretti ($1)',
	'mapsources-incorrectlat' => 'Latitudine non corretta',
	'mapsources-incorrectlong' => 'Longitudine non corretta',
	'mapsources-nopage' => 'Pagine del progetto [[{{ns:project}}:$1]] non disponibili',
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

さらに、[https://wiki.toolserver.org/view/GeoHack ジオハック]の書式も使用できます。',
	'mapsources-search-legend' => 'データおよび地図情報源の検索',
	'mapsources-coordinate' => '緯度経度:',
	'mapsources-go' => '実行',
	'mapsources-errormsgs' => 'エラーメッセージ',
	'mapsources-noparams' => 'パラメーターを指定していません',
	'mapsources-incorrectparams' => '正しくないパラメーター ($1) を指定しました',
	'mapsources-incorrectlat' => '緯度が無効です',
	'mapsources-incorrectlong' => '経度が無効です',
	'mapsources-nopage' => 'プロジェクトページ [[{{ns:project}}:$1|$1]] を利用できません',
	'mapsources-outofrange' => '座標が範囲外です',
	'mapsources-math-missing-operand' => '演算対象がありません',
	'mapsources-math-incorrect-input' => '入力が正しくありません',
	'mapsources-desc' => 'データおよび地図情報源の[[Special:MapSources|検索]]',
	'mapsources-math-desc' => '座標を変換するためのタグを追加する',
);

/** Georgian (ქართული)
 * @author David1010
 */
$messages['ka'] = array(
	'mapsources' => 'რუკის წყაროები',
	'mapsources-coordinate' => 'კოორდინატი',
	'mapsources-go' => 'მიდი',
	'mapsources-errormsgs' => 'შეცდომის შეტყობინებები',
	'mapsources-incorrectlat' => 'არასწორი განედი',
	'mapsources-incorrectlong' => 'არასწორი გრძედი',
);

/** Korean (한국어)
 * @author 아라
 */
$messages['ko'] = array(
	'mapsources' => '지도 출처',
	'mapsources-summary' => '이 문서는 사용자가 해당 좌표에 의해 지정된 위치에 대한 여러 출처를 검색할 수 있습니다.

위도, 경도 및 추가 변수는 쉼표로 구분해야 합니다.
변수 식별자, 등호와 값으로 구성되어 있습니다.

예 : 52° 31′ N, 13° 24′ 30″ E, scale=50000

또한 [https://wiki.toolserver.org/view/GeoHack GeoHack] 형식도 허용합니다.',
	'mapsources-search-legend' => '데이터와 지도 출처에 대해 검색',
	'mapsources-coordinate' => '좌표',
	'mapsources-go' => '가기',
	'mapsources-errormsgs' => '오류 메시지',
	'mapsources-noparams' => '주어진 변수가 없습니다',
	'mapsources-incorrectparams' => '주어진 변수($1)가 잘못되었습니다',
	'mapsources-incorrectlat' => '위도가 잘못되었습니다',
	'mapsources-incorrectlong' => '경도가 잘못되었습니다',
	'mapsources-nopage' => '[[{{ns:project}}:$1|$1]] 프로젝트 문서를 사용할 수 없습니다',
	'mapsources-outofrange' => '좌표가 범위를 벗어났습니다',
	'mapsources-math-missing-operand' => '피연산자가 없습니다',
	'mapsources-math-incorrect-input' => '입력을 잘못했습니다',
	'mapsources-desc' => '데이터와 지도 출처에 대해 [[Special:MapSources|검색]]',
	'mapsources-math-desc' => '좌표를 변환하기 위한 태그를 추가합니다',
);

/** Colognian (Ripoarisch)
 * @author Purodha
 */
$messages['ksh'] = array(
	'mapsources-coordinate' => "Ko'oodėnaate", # Fuzzy
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'mapsources' => 'Quelle vun de Kaarten',
	'mapsources-coordinate' => 'Koordinat:',
	'mapsources-go' => 'Lass',
	'mapsources-errormsgs' => 'Feelermessagen',
	'mapsources-noparams' => 'Keng Parameter uginn',
	'mapsources-incorrectparams' => 'Falsch Parameter ($1) uginn',
	'mapsources-incorrectlat' => 'Falsche Breedegrad',
	'mapsources-incorrectlong' => 'Falsche Längtegrad',
	'mapsources-nopage' => 'Keng Säit vum Projet [[{{ns:project}}:$1|$1]] disponibel',
	'mapsources-outofrange' => 'Koordinaten ausserhalb vum Beräich',
);

/** Lithuanian (lietuvių)
 * @author Eitvys200
 * @author Mantak111
 */
$messages['lt'] = array(
	'mapsources-coordinate' => 'Koordinatės:',
	'mapsources-go' => 'Eiti',
	'mapsources-errormsgs' => 'Klaidų Pranešimai',
	'mapsources-noparams' => 'Nėra pateiktų parametrų',
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

Покрај ова, ќе се прифаќа и форматот на „[https://wiki.toolserver.org/view/GeoHack GeoHack]“.',
	'mapsources-search-legend' => 'Пребарување на податочни и картографски ресурси',
	'mapsources-coordinate' => 'Координата:',
	'mapsources-go' => 'Оди',
	'mapsources-errormsgs' => 'Пораки за грешки',
	'mapsources-noparams' => 'Нема зададено параметри',
	'mapsources-incorrectparams' => 'Зададени се неисправни параметри ($1)',
	'mapsources-incorrectlat' => 'Погрешна геог. ширина',
	'mapsources-incorrectlong' => 'Погрешна геог. должина',
	'mapsources-nopage' => 'Нема на располагање проектна страница со име [[{{ns:project}}:$1|$1]]',
	'mapsources-outofrange' => 'Координатите се вон опсегот',
	'mapsources-math-missing-operand' => 'Недостасува операнд',
	'mapsources-math-incorrect-input' => 'Погрешен внос',
	'mapsources-desc' => '[[Special:MapSources|Пребарување]] на податочни и картографски ресурси',
	'mapsources-math-desc' => 'Додава ознаки за претворање на координати',
);

/** Malayalam (മലയാളം)
 * @author Praveenp
 */
$messages['ml'] = array(
	'mapsources' => 'ഭൂപട സ്രോതസ്സുകൾ',
	'mapsources-summary' => 'ഒരു സ്ഥലത്തെ അതിന്റെ നിർദ്ദേശാങ്കൾക്കനുസരിച്ച് വിവിധ സ്രോതസ്സുകളിൽ തിരയാൻ ഈ താൾ ഉപയോക്താക്കൾക്ക് സഹായമാകുന്നു.
അക്ഷാംശവും രേഖാംശവും മറ്റ് ചരങ്ങളും അർദ്ധവിരാമമുപയോഗിച്ച് വ്യത്യസ്തമാക്കുക.
ചരങ്ങൾ നൽകേണ്ടത് പേരും സമചിഹ്നവും വിലയുമായാണ്.

ഉദാ: 52° 31′ N, 13° 24′ 30″ E, scale=50000

കൂടുതലായി [https://wiki.toolserver.org/view/GeoHack ജിയോഹാക്ക്] രീതിയും സ്വീകരിക്കപ്പെടുന്നതാണ്.',
	'mapsources-search-legend' => 'വിവരങ്ങൾക്കും ഭൂപടസ്രോതസ്സുകൾക്കുമായി തിരയുക',
	'mapsources-coordinate' => 'നിർദ്ദേശാങ്കം:',
	'mapsources-go' => 'പോകൂ',
	'mapsources-errormsgs' => 'പിഴവ് സന്ദേശങ്ങൾ',
	'mapsources-noparams' => 'ചരങ്ങളൊന്നും നൽകിയിട്ടില്ല',
	'mapsources-incorrectparams' => 'തെറ്റായ ചരങ്ങൾ ($1) നൽകിയിരിക്കുന്നു',
	'mapsources-incorrectlat' => 'തെറ്റായ അക്ഷാംശം',
	'mapsources-incorrectlong' => 'തെറ്റായ രേഖാംശം',
	'mapsources-nopage' => 'പദ്ധതി താൾ [[{{ns:project}}:$1|$1]] ലഭ്യമല്ല.',
	'mapsources-outofrange' => 'നിർദ്ദേശാങ്കം പരിധിക്ക് പുറത്താണ്',
	'mapsources-math-incorrect-input' => 'നൽകിയ വില തെറ്റാണ്',
	'mapsources-desc' => 'വിവരങ്ങൾക്കും ഭൂപടസ്രോതസ്സുകൾക്കുമായി [[Special:MapSources|തിരയുക]]',
	'mapsources-math-desc' => 'നിർദ്ദേശാങ്കങ്ങൾ പരിവർത്തനം ചെയ്യാനുള്ള ടാഗുകൾ കൂട്ടിച്ചേർക്കുക',
);

/** Malay (Bahasa Melayu)
 * @author Anakmalaysia
 */
$messages['ms'] = array(
	'mapsources' => 'Sumber Peta',
	'mapsources-summary' => 'Halaman ini membolehkan pengguna untuk pelbagai sumber untuk sesuatu lokasi yang diberi oleh koordinatnya.

Garis lintang, garis bujur dan parameter-parameter tambahan mesti diasingkan dengan tanda koma.
Parameter terdiri daripada pengecam, tanda sama dengan (=) dan satu nilai.

Contoh: 52° 31′ N, 13° 24′ 30″ E, scale=50000

Tambahan pula, format [https://wiki.toolserver.org/view/GeoHack GeoHack] juga diterima.',
	'mapsources-search-legend' => 'Cari sumber data dan peta',
	'mapsources-coordinate' => 'Koordinat',
	'mapsources-go' => 'Pergi',
	'mapsources-errormsgs' => 'Pesanan Ralat',
	'mapsources-noparams' => 'Tiada parameter diberikan',
	'mapsources-incorrectparams' => 'Parameter yang diberikan ($1) tidak betul',
	'mapsources-incorrectlat' => 'Garis lintang tidak betul',
	'mapsources-incorrectlong' => 'Garis bujur tidak betul',
	'mapsources-nopage' => 'Tiada halaman projek [[{{ns:project}}:$1|$1]] disediakan',
	'mapsources-outofrange' => 'Koordinat di luar julat',
	'mapsources-math-missing-operand' => 'Tiada kendalian',
	'mapsources-math-incorrect-input' => 'Input tidak betul',
	'mapsources-desc' => '[[Special:MapSources|Cari]] sumber data dan peta',
	'mapsources-math-desc' => 'Membubuh teg untuk penukaran koordinat',
);

/** Maltese (Malti)
 * @author Chrisportelli
 */
$messages['mt'] = array(
	'mapsources-coordinate' => 'Koordinati:',
	'mapsources-go' => 'Mur',
	'mapsources-errormsgs' => "Messaġġ ta' żball",
	'mapsources-noparams' => 'Parametri nieqsa',
	'mapsources-incorrectparams' => 'Ingħataw parametri ħżiena ($1)',
	'mapsources-incorrectlat' => 'Latitudni ħażina',
	'mapsources-incorrectlong' => 'Lonġitudni ħażina',
	'mapsources-nopage' => 'Il-paġna tal-proġett [[Project:$1]] mhix disponibbli', # Fuzzy
	'mapsources-outofrange' => 'Il-koordinati huma ħżiena',
);

/** Low German (Plattdüütsch)
 * @author Joachim Mos
 */
$messages['nds'] = array(
	'mapsources-go' => 'Los',
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

Ook de [https://wiki.toolserver.org/view/GeoHack opmaak van Geohack] wordt ondersteund.",
	'mapsources-search-legend' => 'Zoeken naar gegevens- en kaartbronnen',
	'mapsources-coordinate' => 'Coördinaat:',
	'mapsources-go' => 'OK',
	'mapsources-errormsgs' => 'Foutberichten',
	'mapsources-noparams' => 'Geen parameters opgegeven',
	'mapsources-incorrectparams' => 'Ongeldige parameters opgegeven ($1)',
	'mapsources-incorrectlat' => 'Onjuiste breedtegraad',
	'mapsources-incorrectlong' => 'Onjuiste lengtegraad',
	'mapsources-nopage' => 'Geen projectpagina [[{{ns:project}}:$1|$1]] beschikbaar',
	'mapsources-outofrange' => 'Coördinaat buiten het bereik',
	'mapsources-math-missing-operand' => 'Ontbrekende operand',
	'mapsources-math-incorrect-input' => 'Onjuiste invoer',
	'mapsources-desc' => '[[Special:MapSources|Zoeken]] naar gegevens- en kaartbronnen',
	'mapsources-math-desc' => 'Voegt labels toe voor het omrekenen van coördinaten',
);

/** Polish (polski)
 * @author Chrumps
 * @author Odie2
 */
$messages['pl'] = array(
	'mapsources' => 'Mapy',
	'mapsources-summary' => 'Na tej stronie można odnaleźć łącza do map przedstawiających miejsce o podanych współrzędnych.', # Fuzzy
	'mapsources-search-legend' => 'Wyszukaj mapy i odwzorowania terenu',
	'mapsources-coordinate' => 'Współrzędne:',
	'mapsources-go' => 'Przejdź',
	'mapsources-errormsgs' => 'Komunikaty błędów',
	'mapsources-noparams' => 'Brak parametrów',
	'mapsources-incorrectparams' => 'Podano błędne parametry ($1)',
	'mapsources-incorrectlat' => 'Błędna szerokość',
	'mapsources-incorrectlong' => 'Błędna długość',
	'mapsources-nopage' => 'Brak adresu [[Project:$1]] źródła', # Fuzzy
	'mapsources-outofrange' => 'Współrzędne poza zakresem',
	'mapsources-math-missing-operand' => 'Brak parametru(ów)',
	'mapsources-math-incorrect-input' => 'Błędne dane',
	'mapsources-desc' => '[[Special:MapSources|Wyszukaj]] źródła map i danych',
	'mapsources-math-desc' => 'Dodaje znaczniki do konwersji współrzędnych',
);

/** Piedmontese (Piemontèis)
 * @author Borichèt
 * @author Dragonòt
 * @author පසිඳු කාවින්ද
 */
$messages['pms'] = array(
	'mapsources' => 'Sorgiss ëd carte',
	'mapsources-summary' => "Costa pàgina a përmët a j'utent d'arserché dle sorgiss mùltiple për na locassion dàite le soe coordinà.

La latitùdin, la longitùdin e ij paràmetr adissionaj a devo esse separà da dle vìrgole.
Ij paràmetr a consisto ëd n'identificador, ël segn ugual e un valor.

Esempi: 52° 31′ N, 13° 24′ 30″ E, scala=50000

An pi, ël formà [https://wiki.toolserver.org/view/GeoHack GeoHack] a sarà acetà.",
	'mapsources-search-legend' => 'Arserché dij dat e sorgiss ëd carte',
	'mapsources-coordinate' => 'Coordinà:',
	'mapsources-go' => 'Va',
	'mapsources-errormsgs' => "Mëssagi d'eror",
	'mapsources-noparams' => 'Gnun paràmetr dàit',
	'mapsources-incorrectparams' => 'Paràmetr ($1) dàit pa bon',
	'mapsources-incorrectlat' => 'Latitùdin nen giusta',
	'mapsources-incorrectlong' => 'Longitùdin nen giusta',
	'mapsources-nopage' => 'Gnun-e pàgine ëd proget [[{{ns:project}}:$1|$1]] disponìbij',
	'mapsources-outofrange' => "Coordinà fòra da l'antërval",
	'mapsources-math-missing-operand' => 'Operand mancant',
	'mapsources-math-incorrect-input' => 'Anseriment nen giust',
	'mapsources-desc' => '[[Special:MapSources|Arserca]] ëd e sorgiss ëd dàit e ëd carte',
	'mapsources-math-desc' => 'A gionta dle tichëtte për la conversion ëd le coordinà',
);

/** Brazilian Portuguese (português do Brasil)
 * @author Luckas
 */
$messages['pt-br'] = array(
	'mapsources-coordinate' => 'Coordenadas:',
	'mapsources-go' => 'Ir',
	'mapsources-errormsgs' => 'Mensagens de erro',
	'mapsources-incorrectlat' => 'Latitude incorreta',
	'mapsources-incorrectlong' => 'Longitude incorreta',
);

/** Romanian (română)
 * @author Firilacroco
 * @author Minisarm
 * @author Stelistcristi
 */
$messages['ro'] = array(
	'mapsources' => 'Surse pentru hartă',
	'mapsources-coordinate' => 'Coordonate:',
	'mapsources-go' => 'Du-te',
	'mapsources-errormsgs' => 'Mesaje de eroare',
	'mapsources-noparams' => 'Niciun parametru introdus',
	'mapsources-incorrectparams' => 'Parametri incorecți ($1) furnizați',
	'mapsources-incorrectlat' => 'Latitudine incorectă',
	'mapsources-incorrectlong' => 'Longitudine incorectă',
	'mapsources-outofrange' => 'Coordonate în afara limitei',
	'mapsources-math-missing-operand' => 'Operand lipsă',
	'mapsources-math-incorrect-input' => 'Intrare incorectă',
);

/** tarandíne (tarandíne)
 * @author Joetaras
 */
$messages['roa-tara'] = array(
	'mapsources' => 'Sorgende de le mappe',
	'mapsources-summary' => "Sta pàgene permette a l'utinde de cercà pe sorgende multiple pe 'na località date da le coordinate sue.

Latitudine, longitudine e parametre aggiundive ponne essere separate cu le virgole.
Le parametre tènene 'n'idendificatore,'u segne uguale e 'nu valore.

Esembie: 52° 31′ N, 13° 24′ 30″ E, scale=50000

In aggiunde: 'u formate [https://wiki.toolserver.org/view/GeoHack GeoHack] avène accettate.",
	'mapsources-search-legend' => "Cirche pe date e origgene d'a mappe",
	'mapsources-coordinate' => 'Coordinate:',
	'mapsources-go' => 'Véje',
	'mapsources-errormsgs' => "Messàgge d'errore",
	'mapsources-noparams' => 'Nisciune parmatre date',
	'mapsources-incorrectparams' => 'Parametre none corrette ($1) mise',
	'mapsources-incorrectlat' => 'Latitudine none corrette',
	'mapsources-incorrectlong' => 'Longitudine none corrette',
	'mapsources-nopage' => 'Nisciuna pàgene de proggette [[{{ns:project}}:$1|$1]] disponibbele',
	'mapsources-outofrange' => "Coordinate fore da l'indervalle",
	'mapsources-math-missing-operand' => 'Operande zumbate',
	'mapsources-math-incorrect-input' => "'Nzerimento ingorrette",
	'mapsources-desc' => "[[Special:MapSources|Cirche]] pe date e mappe d'origgene",
	'mapsources-math-desc' => 'Aggiunge le tag pa conversione de le coordinate',
);

/** Russian (русский)
 * @author DCamer
 * @author Kaganer
 * @author Okras
 */
$messages['ru'] = array(
	'mapsources' => 'Источники карт',
	'mapsources-summary' => 'Эта страница позволяет пользователям вести поиск по нескольким источникам, на месте, с учетом его координат.

Широта, долгота и дополнительные параметры должны быть разделены запятыми.
Параметры состоят из идентификатора, знака равенства и значения.

Пример: 52° 31′ N, 13° 24′ 30″ E, scale=50000

Кроме того, формат [https://wiki.toolserver.org/view/GeoHack GeoHack] подходит.',
	'mapsources-search-legend' => 'Поиск данных и картографических источников',
	'mapsources-coordinate' => 'Координаты:',
	'mapsources-go' => 'Найти',
	'mapsources-errormsgs' => 'Сообщения об ошибках',
	'mapsources-noparams' => 'Параметры не заданы',
	'mapsources-incorrectparams' => 'Заданы неправильные параметры ($1)',
	'mapsources-incorrectlat' => 'Неправильная широта',
	'mapsources-incorrectlong' => 'Неправильная долгота',
	'mapsources-nopage' => 'Страница проекта [[{{ns:project}}:$1|$1]] недоступна.',
	'mapsources-outofrange' => 'Координаты вне диапазона',
	'mapsources-math-missing-operand' => 'Отсутствует операнд',
	'mapsources-math-incorrect-input' => 'Неправильный ввод',
	'mapsources-desc' => '[[Special:MapSources|Поиск]] данных и картографических источников',
	'mapsources-math-desc' => 'Добавляет теги для преобразования координат',
);

/** Sinhala (සිංහල)
 * @author පසිඳු කාවින්ද
 */
$messages['si'] = array(
	'mapsources' => 'සිතියම් මූලාශ්‍ර',
	'mapsources-search-legend' => 'දත්ත සහ සිතියම් මූලාශ්‍ර සඳහා සොයන්න',
	'mapsources-coordinate' => 'සමකක්ෂය:',
	'mapsources-go' => 'යන්න',
	'mapsources-errormsgs' => 'දෝෂ පණිවුඩ',
	'mapsources-noparams' => 'කිසිදු පරාමිතියක් දී නොමැත',
	'mapsources-incorrectparams' => 'ලබාදුන් පරාමිතීන් ($1) වැරදියි',
	'mapsources-incorrectlat' => 'සාවද්‍ය අක්ෂාංශය',
	'mapsources-incorrectlong' => 'සාවද්‍ය දේශාංශය',
	'mapsources-nopage' => 'ව්‍යපෘති පිටුවක් ලබා ගත නොහැක [[{{ns:project}}:$1|$1]]',
	'mapsources-outofrange' => 'සමකක්ෂය පරාසයෙන් ඉවත් වී ඇත',
	'mapsources-math-missing-operand' => 'දක්නට නොමැති ප්‍රවර්ත්‍යය',
	'mapsources-math-incorrect-input' => 'සාවද්‍ය ප්‍රදානය',
	'mapsources-desc' => 'දත්ත සහ සිතියම් මූලාශ්‍ර සඳහා [[Special:MapSources|සොයන්න]]',
	'mapsources-math-desc' => 'ඛණ්ඩාංකවල පරිවර්තනය සඳහා ටැගයන් එක් කරයි',
);

/** Swedish (svenska)
 * @author Bengt B
 * @author Jopparn
 * @author WikiPhoenix
 */
$messages['sv'] = array(
	'mapsources' => 'Källor för karta',
	'mapsources-summary' => 'Den här sidan kan användare söka efter flera källor för en plats ges av dess koordinaten.
N!Latitud, longitud och ytterligare parametrar måste avgränsas med kommatecken.
Parametrar består av en identifierare, likhetstecknet och ett värde.

Exempel:52°31′N,13°24′30″E,scale=50000

Dessutom kommer formatet [https://wiki.toolserver.org/view/GeoHack GeoHack] att accepteras.',
	'mapsources-search-legend' => 'Söka efter data och källor för karta',
	'mapsources-coordinate' => 'Koordinat:',
	'mapsources-go' => 'Gå',
	'mapsources-errormsgs' => 'Felmeddelanden',
	'mapsources-noparams' => 'Inga parametrar angivna',
	'mapsources-incorrectparams' => 'Felaktiga parametrar ($1) har angetts',
	'mapsources-incorrectlat' => 'Felaktig latitud',
	'mapsources-incorrectlong' => 'Felaktig longitud',
	'mapsources-nopage' => 'Ingen projektsida [[{{ns:project}}:$1|$1]] tillgänglig',
	'mapsources-outofrange' => 'Koordinat utanför intervallet',
	'mapsources-math-missing-operand' => 'Operand saknas',
	'mapsources-math-incorrect-input' => 'Felaktig inmatning',
	'mapsources-desc' => '[[Special:MapSources|Search]] för data och kartkällor',
	'mapsources-math-desc' => 'Lägger till taggar för konvertering av koordinater',
);

/** Tamil (தமிழ்)
 * @author Shanmugamp7
 */
$messages['ta'] = array(
	'mapsources-coordinate' => 'ஆயக்கூறு',
	'mapsources-go' => 'செல்',
	'mapsources-errormsgs' => 'பிழைச் செய்திகள்',
	'mapsources-noparams' => 'அளவுருக்கள் ஏதும் தரப்படவில்லை',
);

/** Telugu (తెలుగు)
 * @author Veeven
 */
$messages['te'] = array(
	'mapsources-go' => 'వెళ్ళు',
);

/** Uyghur (Arabic script) (ئۇيغۇرچە)
 * @author Sahran
 */
$messages['ug-arab'] = array(
	'mapsources-go' => 'يۆتكەل',
);

/** Ukrainian (українська)
 * @author Andriykopanytsia
 * @author Base
 * @author RLuts
 */
$messages['uk'] = array(
	'mapsources' => 'Джерела карт',
	'mapsources-summary' => 'Ця сторінка дозволяє користувачам шукати за декількома джерелами по його координатах розташування.

Широта, довгота та додаткові параметри повинні бути розділені комами.
Параметри складаються з ідентифікатора, знака «дорівнює» та значення.

Приклад: 52° 31′ N, 13° 24′ 30″ E, scale=50000

Крім цього, підходить формат [https://wiki.toolserver.org/view/GeoHack GeoHack].',
	'mapsources-search-legend' => 'Пошук даних та картографічних джерел',
	'mapsources-coordinate' => 'Координати:',
	'mapsources-go' => 'Перейти',
	'mapsources-errormsgs' => 'Повідомлення про помилки',
	'mapsources-noparams' => 'Не передано параметрів',
	'mapsources-incorrectparams' => 'Передано некоректні параметри ($1)',
	'mapsources-incorrectlat' => 'Некоректна широта',
	'mapsources-incorrectlong' => 'Некоректна довгота',
	'mapsources-nopage' => 'Немає доступної сторінки проекту  [[{{ns:project}}:$1|$1]]',
	'mapsources-outofrange' => 'Координати за межами допустимого діапазону',
	'mapsources-math-missing-operand' => 'Відсутній операнд',
	'mapsources-math-incorrect-input' => 'Неправильний ввід',
	'mapsources-desc' => '[[Special:MapSources|Пошук]] даних та картографічний джерел',
	'mapsources-math-desc' => 'Додає теги для конвертування координат',
);

/** Vietnamese (Tiếng Việt)
 * @author Minh Nguyen
 */
$messages['vi'] = array(
	'mapsources' => 'Nguồn bản đồ',
	'mapsources-summary' => 'Trang này cho phép tìm kiếm các nguồn cho một địa điểm theo tọa độ.

Vĩ độ, kinh độ, và các tham số khác được phân cách bằng dấu phẩy.
Các tham số bao gồm định danh, dấu bằng, và một giá trị.

Ví dụ: 52° 31′ N, 13° 24′ 30″ E, scale=50000

Ngoài ra, định dạng [https://wiki.toolserver.org/view/GeoHack?uselang=vi GeoHack] cũng được chấp nhận.',
	'mapsources-search-legend' => 'Tìm dữ liệu và nguồn bản đồ',
	'mapsources-coordinate' => 'Tọa độ:',
	'mapsources-go' => 'Tìm kiếm',
	'mapsources-errormsgs' => 'Lỗi',
	'mapsources-noparams' => 'Không đưa vào tham số',
	'mapsources-incorrectparams' => 'Tham số không chính xác ($1) được đưa vào',
	'mapsources-incorrectlat' => 'Vĩ độ không chính xác',
	'mapsources-incorrectlong' => 'Kinh độ không chính xác',
	'mapsources-nopage' => 'Không có sẵn trang dự án [[{{ns:project}}:$1|$1]]',
	'mapsources-outofrange' => 'Tọa độ ngoài miền cho phép',
	'mapsources-math-missing-operand' => 'Thiếu toán hạng',
	'mapsources-math-incorrect-input' => 'Đầu vào không chính xác',
	'mapsources-desc' => '[[Special:MapSources|Tìm]] dữ liệu và nguồn bản đồ',
	'mapsources-math-desc' => 'Thêm thẻ để chuyển đổi tọa độ',
);

/** Simplified Chinese (中文（简体）‎)
 * @author Yfdyh000
 */
$messages['zh-hans'] = array(
	'mapsources' => '地图来源',
	'mapsources-summary' => '此页面允许用户提供一个地点的坐标搜索多个来源。

纬度、经度和其他参数必须用逗号分隔。
参数包含一个标识符、等号和一个值。

例子: 52° 31′ N, 13° 24′ 30″ E, scale=50000

此外，[https://wiki.toolserver.org/view/GeoHack GeoHack]格式也能接受。',
	'mapsources-search-legend' => '搜索数据和地图来源',
	'mapsources-coordinate' => '坐标：',
	'mapsources-go' => '提交',
	'mapsources-errormsgs' => '错误消息',
	'mapsources-noparams' => '没有提供参数',
	'mapsources-incorrectparams' => '提供了不正确的参数（$1）',
	'mapsources-incorrectlat' => '不正确的纬度',
	'mapsources-incorrectlong' => '不正确的经度',
	'mapsources-nopage' => '没有项目页面[[{{ns:project}}:$1|$1]]可用',
	'mapsources-outofrange' => '坐标超出范围',
	'mapsources-math-missing-operand' => '缺少操作数',
	'mapsources-math-incorrect-input' => '不正确的输入',
	'mapsources-desc' => '[[Special:MapSources|搜索]]数据和地图来源',
	'mapsources-math-desc' => '添加坐标换算标签',
);

/** Traditional Chinese (中文（繁體）‎)
 * @author Simon Shek
 */
$messages['zh-hant'] = array(
	'mapsources' => '地圖來源',
	'mapsources-summary' => '此頁面允許使用者以位置座標在多個地圖搜尋位置。

緯度、 經度和附加的參數必須用逗號分隔。
參數包含一個識別碼、 等號和一個值。

例子：52° 31′ N, 13° 24′ 30″ E, 比例=50000

此外，亦接受[https://wiki.toolserver.org/view/GeoHack GeoHack]格式填寫。',
	'mapsources-search-legend' => '搜尋資料和地圖來源',
	'mapsources-coordinate' => '座標：',
	'mapsources-go' => '提交',
	'mapsources-errormsgs' => '錯誤訊息',
	'mapsources-noparams' => '沒有參數',
	'mapsources-incorrectparams' => '參數（$1）有誤',
	'mapsources-incorrectlat' => '緯度有誤',
	'mapsources-incorrectlong' => '經度有誤',
	'mapsources-nopage' => '沒有項目頁[[Project:$1]]可用', # Fuzzy
	'mapsources-outofrange' => '座標超出範圍',
	'mapsources-math-missing-operand' => '缺少運算元',
	'mapsources-math-incorrect-input' => '輸入有誤',
	'mapsources-desc' => '[[Special:MapSources|搜尋]]資料和地圖來源',
	'mapsources-math-desc' => '添加坐標變換標記',
);
