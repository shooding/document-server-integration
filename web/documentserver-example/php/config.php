<?php
if (!defined('ALLOW_ACCESS'))
    exit('No direct script access allowed');

$GLOBALS['version'] = "1.2.0";

$GLOBALS['FILE_SIZE_MAX'] = 5242880; // 5MB
$GLOBALS['STORAGE_PATH'] = "";
$GLOBALS['ALONE'] = FALSE;

$GLOBALS['DOC_SERV_FILLFORMS'] = array(".oform", ".docx");
$GLOBALS['DOC_SERV_VIEWD'] = array(".pdf", ".djvu", ".xps", ".oxps");
$GLOBALS['DOC_SERV_EDITED'] = array(".docx", ".xlsx", ".csv", ".pptx", ".txt", ".docxf");
$GLOBALS['DOC_SERV_CONVERT'] = array(".docm", ".doc", ".dotx", ".dotm", ".dot", ".odt", ".fodt", ".ott", ".xlsm", ".xlsb", ".xls", ".xltx", ".xltm", ".xlt", ".ods", ".fods", ".ots", ".pptm", ".ppt", ".ppsx", ".ppsm", ".pps", ".potx", ".potm", ".pot", ".odp", ".fodp", ".otp", ".rtf", ".mht", ".html", ".htm", ".xml", ".epub", ".fb2");

$GLOBALS['DOC_SERV_TIMEOUT'] = "120000";


$GLOBALS['DOC_SERV_SITE_URL'] = "http://localhost/"; //For local development

$GLOBALS['DOC_SERV_CONVERTER_URL'] = "ConvertService.ashx";
$GLOBALS['DOC_SERV_API_URL'] = "web-apps/apps/api/documents/api.js";
$GLOBALS['DOC_SERV_PRELOADER_URL'] = "web-apps/apps/api/documents/cache-scripts.html";
$GLOBALS['DOC_SERV_COMMAND_URL'] = "coauthoring/CommandService.ashx";

$GLOBALS['DOC_SERV_JWT_SECRET'] = ""; //For sending valid payload to document server if JWT check is enabled on doc server
$GLOBALS['DOC_SERV_JWT_HEADER'] = "Authorization";

$GLOBALS['DOC_SERV_VERIFY_PEER_OFF'] = TRUE;

$GLOBALS['PUBLIC_KEY'] = ""; //For jwt verification

//localhost and 127.0.0.1 – These resolve to the container.
//host.docker.internal – This resolves to the outside host.
$GLOBALS['EXAMPLE_URL'] = "http://host.docker.internal:8000"; //For host.docker.internal 

$GLOBALS['MOBILE_REGEX'] = "android|avantgo|playbook|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od|ad)|iris|kindle|lge |maemo|midp|mmp|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\\/|plucker|pocket|psp|symbian|treo|up\\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino";


$GLOBALS['ExtsSpreadsheet'] = array(".xls", ".xlsx", ".xlsm", ".xlsb",
                                    ".xlt", ".xltx", ".xltm",
                                    ".ods", ".fods", ".ots", ".csv");

$GLOBALS['ExtsPresentation'] = array(".pps", ".ppsx", ".ppsm",
                                     ".ppt", ".pptx", ".pptm",
                                     ".pot", ".potx", ".potm",
                                     ".odp", ".fodp", ".otp");

$GLOBALS['ExtsDocument'] = array(".doc", ".docx", ".docm",
                                 ".dot", ".dotx", ".dotm",
                                 ".odt", ".fodt", ".ott", ".rtf", ".txt",
                                 ".html", ".htm", ".mht", ".xml",
                                 ".pdf", ".djvu", ".fb2", ".epub", ".xps", ".oxps", ".oform");

$GLOBALS['LANGUAGES'] = array(
    'en' => 'English',
    'az' => 'Azerbaijani',
    'be' => 'Belarusian',
    'bg' => 'Bulgarian',
    'ca' => 'Catalan',
    'zh' => 'Chinese',
    'cs' => 'Czech',
    'da' => 'Danish',
    'nl' => 'Dutch',
    'fi' => 'Finnish',
    'fr' => 'French',
    'gl' => 'Galego',
    'de' => 'German',
    'el' => 'Greek',
    'hu' => 'Hungarian',
    'id' => 'Indonesian',
    'it' => 'Italian',
    'ja' => 'Japanese',
    'ko' => 'Korean',
    'lv' => 'Latvian',
    'lo' => 'Lao',
    'nb' => 'Norwegian',
    'pl' => 'Polish',
    'pt' => 'Portuguese',
    'ro' => 'Romanian',
    'ru' => 'Russian',
    'sk' => 'Slovak',
    'sl' => 'Slovenian',
    'es' => 'Spanish',
    'sv' => 'Swedish',
    'tr' => 'Turkish',
    'uk' => 'Ukrainian',
    'vi' => 'Vietnamese'
);

date_default_timezone_set('UTC');

?>