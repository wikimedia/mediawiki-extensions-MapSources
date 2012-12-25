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

Additionally, the [https://wiki.toolserver.org/view/GeoHack GeoHack] format will be accepted.',
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
	'mapsources-nopage' => 'La pàgina del projecte [[Project:$1]] no es troba disponible',
	'mapsources-outofrange' => "Les coordenades són fora de l'interval",
	'mapsources-math-missing-operand' => 'Manca un operador',
	'mapsources-math-incorrect-input' => "L'entrada no és correcta",
	'mapsources-desc' => '[[Special:MapSources|Cerqueu]] dades i fonts de mapes',
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
	'mapsources-nopage' => 'Keine Projektseite [[Project:$1]] verfügbar',
	'mapsources-outofrange' => 'Ungültige Koordinate',
	'mapsources-math-missing-operand' => 'Fehlende(r) Parameter',
	'mapsources-math-incorrect-input' => 'Fehlerhafte Eingabe',
	'mapsources-desc' => '[[Special:MapSources|Suche]] nach Daten- und Kartenquellen',
	'mapsources-math-desc' => 'Ergänzt Tags zur Umwandlung von Koordinaten',
);

/** Spanish (español)
 * @author Armando-Martin
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
	'mapsources-nopage' => 'No está disponible la página del proyecto [[Project:$1]]',
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
 * @author Mjbmr
 */
$messages['fa'] = array(
	'mapsources-go' => 'رفتن',
	'mapsources-errormsgs' => 'پیام‌های خطا',
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
	'mapsources-summary' => 'Cette page permet aux utilisateurs de rechercher des sources multiples pour un lieu en donnant ses coordonnées.

La latitude, la longitude et les paramètres supplémentaires doivent être séparés par des virgules.
Les paramètres consistent en un identifiant, le signe égal et une valeur.

Exemple: 52° 31′ N, 13° 24′ 30″ E, échelle=50000

De plus, le format [https://wiki.toolserver.org/view/GeoHack GeoHack] sera accepté.',
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
	'mapsources-nopage' => 'Non hai dispoñible ningunha páxina do proxecto "[[Project:$1]]"',
	'mapsources-outofrange' => 'A coordenada está fóra do rango',
	'mapsources-math-missing-operand' => 'Falta o operador',
	'mapsources-math-incorrect-input' => 'Entrada incorrecta',
	'mapsources-desc' => '[[Special:MapSources|Procurar]] datos e fontes de mapas',
	'mapsources-math-desc' => 'Engade etiquetas para a conversión de coordenadas',
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

さらに、[https://wiki.toolserver.org/view/GeoHack ジオハック]の書式も使用できます。',
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

/** Georgian (ქართული)
 * @author David1010
 */
$messages['ka'] = array(
	'mapsources-coordinate' => 'კოორდინატი',
	'mapsources-go' => 'მიდი',
);

/** Korean (한국어)
 * @author 아라
 */
$messages['ko'] = array(
	'mapsources' => '지도 출처',
	'mapsources-summary' => '이 문서는 사용자가 해당 좌표에 의해 지정된 위치에 대한 여러 출처를 찾을 수 있습니다.

위도, 경도 및 추가 변수는 쉼표로 구분해야 합니다.
변수 식별자, 등호와 값으로 구성되어 있습니다.

예 : 52° 31′ N, 13° 24′ 30″ E, scale=50000

또한 위키백과 Geohack 툴서버 형식도 허용합니다.', # Fuzzy
	'mapsources-search-legend' => '데이터와 지도 출처에 대해 찾기',
	'mapsources-coordinate' => '좌표',
	'mapsources-go' => '가기',
	'mapsources-errormsgs' => '오류 메시지',
	'mapsources-noparams' => '주어진 변수가 없습니다',
	'mapsources-incorrectparams' => '주어진 변수($1)가 잘못되었습니다',
	'mapsources-incorrectlat' => '위도가 잘못되었습니다',
	'mapsources-incorrectlong' => '경도가 잘못되었습니다',
	'mapsources-nopage' => '[[Project:$1]] 프로젝트 문서를 사용할 수 없습니다',
	'mapsources-outofrange' => '좌표가 범위를 벗어났습니다',
	'mapsources-math-missing-operand' => '피연산자가 없습니다',
	'mapsources-math-incorrect-input' => '입력을 잘못했습니다',
	'mapsources-desc' => '데이터와 지도 출처 [[Special:MapSources|찾기]]',
	'mapsources-math-desc' => '좌표 변환 태그 추가',
);

/** Lithuanian (lietuvių)
 * @author Eitvys200
 */
$messages['lt'] = array(
	'mapsources-go' => 'Eiti',
	'mapsources-errormsgs' => 'Klaidų Pranešimai',
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
	'mapsources-nopage' => 'Нема на располагање проектна страница со име [[Project:$1]]',
	'mapsources-outofrange' => 'Координатите се вон опсегот',
	'mapsources-math-missing-operand' => 'Недостасува операнд',
	'mapsources-math-incorrect-input' => 'Погрешен внос',
	'mapsources-desc' => '[[Special:MapSources|Пребарување]] на податочни и картографски ресурси',
	'mapsources-math-desc' => 'Додава ознаки за претворање на координати',
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
	'mapsources-nopage' => 'Tiada halaman projek [[Project:$1]] disediakan',
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
	'mapsources-nopage' => 'Il-paġna tal-proġett [[Project:$1]] mhix disponibbli',
	'mapsources-outofrange' => 'Il-koordinati huma ħżiena',
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
	'mapsources-summary' => 'Na tej stronie można odnaleźć łącza do map przedstawiających miejsce o podanych współrzędnych.', # Fuzzy
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

/** Romanian (română)
 * @author Firilacroco
 * @author Minisarm
 */
$messages['ro'] = array(
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

/** Sinhala (සිංහල)
 * @author පසිඳු කාවින්ද
 */
$messages['si'] = array(
	'mapsources-coordinate' => 'සමකක්ෂය:',
	'mapsources-go' => 'යන්න',
	'mapsources-errormsgs' => 'දෝෂ පණිවුඩ',
	'mapsources-noparams' => 'කිසිදු පරාමිතියක් දී නොමැත',
	'mapsources-incorrectlat' => 'සාවද්‍ය අක්ෂාංශය',
	'mapsources-incorrectlong' => 'සාවද්‍ය දේශාංශය',
	'mapsources-math-incorrect-input' => 'සාවද්‍ය ප්‍රදානය',
);

/** Telugu (తెలుగు)
 * @author Veeven
 */
$messages['te'] = array(
	'mapsources-go' => 'వెళ్ళు',
);

/** Ukrainian (українська)
 * @author Base
 */
$messages['uk'] = array(
	'mapsources' => 'Джерела карт',
	'mapsources-search-legend' => 'Пошук даних та картографічних джерел',
	'mapsources-coordinate' => 'Координати:',
	'mapsources-go' => 'Перейти',
	'mapsources-errormsgs' => 'Повідомлення про помилки',
	'mapsources-noparams' => 'Не передано параметрів',
	'mapsources-incorrectparams' => 'Передано некоректні параметри ($1)',
	'mapsources-incorrectlat' => 'Некоректна широта',
	'mapsources-incorrectlong' => 'Некоректна довгота',
	'mapsources-nopage' => 'Не існує сторінка проекту [[Project:$1]]',
	'mapsources-outofrange' => 'Координати за межами допустимого діапазону',
	'mapsources-math-missing-operand' => 'Відсутній операнд',
	'mapsources-math-incorrect-input' => 'Неправильний ввід',
	'mapsources-desc' => '[[Special:MapSources|Пошук]] даних та картографічний джерел',
	'mapsources-math-desc' => 'Додає теґи для конвертування координат',
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

Ngoài ra, định dạng GeoHack của Wikimedia Toolserver cũng được chấp nhận.', # Fuzzy
	'mapsources-search-legend' => 'Tìm dữ liệu và nguồn bản đồ',
	'mapsources-coordinate' => 'Tọa độ:',
	'mapsources-go' => 'Tìm kiếm',
	'mapsources-errormsgs' => 'Lỗi',
	'mapsources-noparams' => 'Không đưa vào tham số',
	'mapsources-incorrectparams' => 'Tham số không chính xác ($1) được đưa vào',
	'mapsources-incorrectlat' => 'Vĩ độ không chính xác',
	'mapsources-incorrectlong' => 'Kinh độ không chính xác',
	'mapsources-nopage' => 'Không có sẵn trang dự án [[Project:$1]]',
	'mapsources-outofrange' => 'Tọa độ ngoài miền cho phép',
	'mapsources-math-missing-operand' => 'Thiếu toán hạng',
	'mapsources-math-incorrect-input' => 'Đầu vào không chính xác',
	'mapsources-desc' => '[[Special:MapSources|Tìm]] dữ liệu và nguồn bản đồ',
	'mapsources-math-desc' => 'Thêm thẻ để chuyển đổi tọa độ',
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
	'mapsources-nopage' => '沒有項目頁[[Project:$1]]可用',
	'mapsources-outofrange' => '座標超出範圍',
	'mapsources-math-missing-operand' => '缺少運算元',
	'mapsources-math-incorrect-input' => '輸入有誤',
	'mapsources-desc' => '[[Special:MapSources|搜尋]]資料和地圖來源',
	'mapsources-math-desc' => '添加坐標變換標記',
);
