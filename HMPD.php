<?php
// Book struct
class bookStruct
{
    public $bookID = 0;
    public $bookName = "NOT INITIALIZED NAME";
    function __construct($argBookID, $argBookName)
    {
        $this->bookID = $argBookID;
        $this->bookName = $argBookName;
    }
}

// Global Base URL
$globalBaseURL = 'https://d2tpbmzklky1cl.cloudfront.net/manga/static/comic/book';

// China Base URL 
$chinaBaseURL = 'https://comicstatic.bh3.com/new_static_v2/comic/book';

// GLOBAL Manga IDs
$gbaichanFacts    = 1001;
$gbGratitude      = 1002;
$gbAEInvasion     = 1003;
$gbAzureWater     = 1004;
$gbSecondEruption = 1005;
$gbGeminaTales    = 1006;
$gbWorldSerpent   = 1007;
$gbKianaPlayHI3   = 1008;
$gbLondonHoliday  = 1009;
$gbMoonShadow     = 1010;
$gbElanPalatinus  = 1011;
$gbSpringfest     = 1012;
$gbELF            = 1013;
$gbSecondKey      = 1014;
$gbNagazora       = 1015;
$gbFreyaHigh      = 1016;
$gbGeminaInvasion = 1017;
$gbDivineKey      = 1018;
$gbCWV            = 1019;
$gbEmpyreanBlade  = 1020;
$gbAlienSpace     = 1021;

// CN Manga IDs
$cnNagazora       = 1001;
$cnHI3            = 1002;
$cnBohai          = 1004;
$cnSakura         = 1005;
$cnAEInvasion     = 1006;
$cnGratitudeArc   = 1007;
$cnMoonShadow     = 1008;
$cnElanPalatinus  = 1009;
$cnGodKey         = 1010;
$cnKiana          = 1011;
$cnSecondLawman   = 1012;
$cnCWV            = 1013;
$cnSummerMem      = 1014;
$cnGeminaOrigin   = 1015;
$cnGeminaInvasion = 1016;
$cnWorldSerpent   = 1017;
$cnLondonHoliday  = 1018;
$cnSpringfest     = 1019;
$cnELF            = 1020;
$cnSecondKey      = 1021;
$cnEmpyreanBlade  = 1022;
$cnAlienSpace     = 1023;

function getGlobalBooks()
{
    global $gbaichanFacts   ; 
    global $gbGratitude     ; 
    global $gbAEInvasion    ; 
    global $gbAzureWater    ; 
    global $gbSecondEruption; 
    global $gbGeminaTales   ; 
    global $gbWorldSerpent  ; 
    global $gbKianaPlayHI3  ; 
    global $gbLondonHoliday ; 
    global $gbMoonShadow    ; 
    global $gbElanPalatinus ; 
    global $gbSpringfest    ; 
    global $gbELF           ; 
    global $gbSecondKey     ; 
    global $gbNagazora      ; 
    global $gbFreyaHigh     ; 
    global $gbGeminaInvasion; 
    global $gbDivineKey     ; 
    global $gbCWV           ; 
    global $gbEmpyreanBlade ; 
    global $gbAlienSpace    ; 
    $booksInfos = array();
    $booksInfos[] = new bookStruct($gbaichanFacts, "Ai-Chan Facts");
    $booksInfos[] = new bookStruct($gbGratitude, "Gratitude Arc");
    $booksInfos[] = new bookStruct($gbAEInvasion, "AE Invasion");
    $booksInfos[] = new bookStruct($gbAzureWater, "Azure Waters");
    $booksInfos[] = new bookStruct($gbSecondEruption, "Second Eruption");
    $booksInfos[] = new bookStruct($gbGeminaTales, "Gemina: Tales");
    $booksInfos[] = new bookStruct($gbWorldSerpent, "World Serpent");
    $booksInfos[] = new bookStruct($gbKianaPlayHI3, "Kiana Plays Honkai");
    $booksInfos[] = new bookStruct($gbLondonHoliday, "London Holiday");
    $booksInfos[] = new bookStruct($gbMoonShadow, "Moon Shadow");
    $booksInfos[] = new bookStruct($gbElanPalatinus, "Elan Palatinus");
    $booksInfos[] = new bookStruct($gbSpringfest, "SpringFest");
    $booksInfos[] = new bookStruct($gbELF, "ELF");
    $booksInfos[] = new bookStruct($gbSecondKey, "Second Key");
    $booksInfos[] = new bookStruct($gbNagazora, "Escape From Nagazora");
    $booksInfos[] = new bookStruct($gbFreyaHigh, "St. Freya High");
    $booksInfos[] = new bookStruct($gbGeminaInvasion, "Gemina: Invasion");
    $booksInfos[] = new bookStruct($gbDivineKey, "Divine Key");
    $booksInfos[] = new bookStruct($gbCWV, "Cooking With Valkyries");
    $booksInfos[] = new bookStruct($gbEmpyreanBlade, "Empyrean Blade");
    $booksInfos[] = new bookStruct($gbAlienSpace, "Alien Space");
    return $booksInfos;
}

function getCNBooks()
{
    global $cnNagazora      ;
    global $cnHI3           ;
    global $cnBohai         ;
    global $cnSakura        ;
    global $cnAEInvasion    ;
    global $cnGratitudeArc  ;
    global $cnMoonShadow    ;
    global $cnElanPalatinus ;
    global $cnGodKey        ;
    global $cnKiana         ;
    global $cnSecondLawman  ;
    global $cnCWV           ;
    global $cnSummerMem     ;
    global $cnGeminaOrigin  ;
    global $cnGeminaInvasion;
    global $cnWorldSerpent  ;
    global $cnLondonHoliday ;
    global $cnSpringfest    ;
    global $cnELF           ;
    global $cnSecondKey     ;
    global $cnEmpyreanBlade ;
    global $cnAlienSpace    ;
    $booksInfos = array();
    $booksInfos[] = new bookStruct($cnNagazora, "逃离长空篇");
    $booksInfos[] = new bookStruct($cnHI3, "樱花追忆篇");
    $booksInfos[] = new bookStruct($cnBohai, "绀海篇");
    $booksInfos[] = new bookStruct($cnSakura, "绯樱篇");
    $booksInfos[] = new bookStruct($cnAEInvasion, "逆熵入侵篇");   
    $booksInfos[] = new bookStruct($cnGratitudeArc, "恩返篇");  
    $booksInfos[] = new bookStruct($cnMoonShadow, "月影篇");  
    $booksInfos[] = new bookStruct($cnElanPalatinus, "紫鸢篇");  
    $booksInfos[] = new bookStruct($cnGodKey, "神之键秘话");  
    $booksInfos[] = new bookStruct($cnKiana, "玩崩坏3的琪亚娜");  
    $booksInfos[] = new bookStruct($cnSecondLawman, "第二次崩坏");  
    $booksInfos[] = new bookStruct($cnCWV, "女武神的餐桌");  
    $booksInfos[] = new bookStruct($cnSummerMem, "夏日回忆-预告篇");  
    $booksInfos[] = new bookStruct($cnGeminaOrigin, "双子：起源");  
    $booksInfos[] = new bookStruct($cnGeminaInvasion, "双子：入侵");  
    $booksInfos[] = new bookStruct($cnWorldSerpent, "蛇之篇");  
    $booksInfos[] = new bookStruct($cnLondonHoliday, "雾都假日"); 
    $booksInfos[] = new bookStruct($cnSpringfest, "年岁");  
    $booksInfos[] = new bookStruct($cnELF, "武装人偶");  
    $booksInfos[] = new bookStruct($cnSecondKey, "传承");  
    $booksInfos[] = new bookStruct($cnEmpyreanBlade, "云墨剑心");  
    $booksInfos[] = new bookStruct($cnAlienSpace, "异乡"); 
    return $booksInfos;
}

function startsWith($string, $startString) 
{ 
    $length = strlen($startString); 
    return (substr($string, 0, $length) === $startString); 
} 

// Function taken from https://gist.github.com/eusonlito/5099936
function getFolderSize($Directory)
{
    $Size = 0;
    foreach (glob(rtrim($Directory, '/').'/*', GLOB_NOSORT) as $eachElement) 
    {
        $Size += is_file($eachElement) ? filesize($eachElement) : getFolderSize($eachElement);
    }
    return $Size;
}

function getLastChapter($BookURL)
{
    echo("Detecting chapter count...\n");
    for ($checkChap = 1; $checkChap <= 70; $checkChap++)
    {
        if (file_get_contents($BookURL . "/" . $checkChap . "/0001.jpg") == false)
        {
            echo("Chapter " . $checkChap . " does not exists\n");
            echo("Chapter count is " . ($checkChap - 1) . "\n");
            return $checkChap;
        }
        else { echo("Chapter " . $checkChap . " exists\n");}
    }
}

function downloadBook($serverRegion, $bookID)
{
    if ($serverRegion == "https://comicstatic.bh3.com/new_static_v2/comic/book")
    {
        $maxChap = getLastChapter($serverRegion . "/" . $bookID);
        echo("Start downloading chapter 1\n");
        for ($chapCount = 1; $chapCount < $maxChap; $chapCount++)
        {
            $lv1concatURL = $serverRegion . "/" . $bookID . "/" . $chapCount . "/";
            mkdir("./CNBook" . $bookID .  "/Chapter" . $chapCount, 0777, true);
            echo("Downloading chapter " . $chapCount . "\n");
            echo($lv1concatURL . " => " . "./CNBook" . $bookID .  "/Chapter" . $chapCount . "\n");
            for ($pageCount = 1; $pageCount < 70; $pageCount++)
            {
                $lv2concatURL = "NOT INITIALIZED YET";
                if ($pageCount < 10) { $lv2concatURL = $lv1concatURL . "000" . $pageCount . ".jpg";}
                else { $lv2concatURL = $lv1concatURL . "00" . $pageCount . ".jpg";}
                $localFilePath = "./CNBook" . $bookID .  "/Chapter" . $chapCount . "/" . basename($lv2concatURL);
                $pageBuffer = 0x00;
                if (file_get_contents($lv2concatURL) == true)
                {
                    $pageBuffer = file_get_contents($lv2concatURL);
                    file_put_contents($localFilePath, $pageBuffer);
                    /*if ($chapCount < 10)
                    {
                        if ($pageCount < 10)
                        {
                            rename($localFilePath, (substr($localFilePath, 0, -8) . "0" . $chapCount . "0" . $pageCount . ".jpg"));
                        }
                        else 
                        {
                            rename($localFilePath, (substr($localFilePath, 0, -8) . "0" . $chapCount . $pageCount . ".jpg"));
                        }
                    }
                    else 
                    {
                        if ($pageCount < 10)
                        {
                            rename($localFilePath, (substr($localFilePath, 0, -8) . $chapCount . "0" . $pageCount . ".jpg"));
                        }
                        else 
                        {
                            rename($localFilePath, (substr($localFilePath, 0, -8) . $chapCount . $pageCount . ".jpg"));
                        }
                    }*/
                    echo($lv2concatURL . " => " . $localFilePath . "\n");
                }
                else 
                {
                    echo("Can't download page " . $pageCount . " of chapter " . $chapCount . " (IT PROBABLY DOES NOT EXISTS SO DON'T WORRY)\n");
                    if (($chapCount) == $maxChap)
                        echo("Next chapter(" . ($chapCount + 1) . ")\n");
                    break;
                }
            }
        }
        echo("Finished downloading book" . $bookID . " on server \"" . $serverRegion .  "\"\n");
    }
    else 
    {
        $maxChap = getLastChapter($serverRegion . "/" . $bookID);
        echo("Start downloading chapter 1\n");
        for ($chapCount = 1; $chapCount < $maxChap; $chapCount++)
        {
            $lv1concatURL = $serverRegion . "/" . $bookID . "/" . $chapCount . "/";
            mkdir("./GBBook" . $bookID .  "/Chapter" . $chapCount, 0777, true);
            echo("Downloading chapter " . $chapCount . "\n");
            echo($lv1concatURL . " => " . "./GBBook" . $bookID .  "/Chapter" . $chapCount . "\n");
            for ($pageCount = 1; $pageCount < 70; $pageCount++)
            {
                $lv2concatURL = "NOT INITIALIZED YET";
                if ($pageCount < 10) { $lv2concatURL = $lv1concatURL . "000" . $pageCount . ".jpg";}
                else { $lv2concatURL = $lv1concatURL . "00" . $pageCount . ".jpg";}
                $localFilePath = "./GBBook" . $bookID .  "/Chapter" . $chapCount . "/" . basename($lv2concatURL);
                $pageBuffer = 0x00;
                if (file_get_contents($lv2concatURL) == true)
                {
                    $pageBuffer = file_get_contents($lv2concatURL);
                    file_put_contents($localFilePath, $pageBuffer);
                    echo($lv2concatURL . " => " . $localFilePath . "\n");
                }
                else 
                {
                    echo("Can't download page " . $pageCount . " of chapter " . $chapCount . " (IT PROBABLY DOES NOT EXISTS SO DON'T WORRY)\n");
                    if (($chapCount) == $maxChap)
                        echo("Next chapter(" . ($chapCount + 1) . ")\n");
                    break;
                }
            }
        }
        echo("Finished downloading book" . $bookID . " on server \"" . $serverRegion .  "\"\n");
    }
}
//Windows exclusive stuff
//if (startsWith(PHP_OS, "WIN"))
//{
//    
//}
$errorlvl = readline("Type 1 to show all php errors and type 2 to disabled them: ");
if ($errorlvl == 1 || $errorlvl == "1")
{
    error_reporting(-1);
}

else if ($errorlvl == 2 || $errorlvl == "2")
{
    error_reporting(0);
}
else error_reporting(-1);

echo("Welcome to HI3 manga php downloader! (HMPD if you prefer)\nPlease report issues at https://github.com/JeComtempleDuCodeSource/HMPD\n");
$server = readline("Type 1 to download from global server.And Type 2 to download from CN server: ");
if ($server == 1 || $server == "1")
{
    $booksInfos = getGlobalBooks();
    for ($Index = 0; $Index < count($booksInfos); $Index++)
    {
        $additionalZero = "";
        if ($Index < 10) { $additionalZero = "0";}
        echo("Type " . $additionalZero . $Index . " to download the book " . $booksInfos[$Index]->bookID . " also known as " . $booksInfos[$Index]->bookName . "\n");
    }
    $bookIndex = readline("Type the corresponding number: ");
    if ($bookIndex < 0 || $bookIndex >= count($booksInfos))
        exit("Not valid input\n");
    downloadBook($globalBaseURL, $booksInfos[$bookIndex]->bookID);
    echo("Total diskspace taken by " . "\"./GBBook" . $booksInfos[$bookIndex]->bookID . "\": " . getFolderSize("./GBBook" . $booksInfos[$bookIndex]->bookID) . "(bytes)\n");
}
else if ($server == 2 || $server == "2")
{
    $booksInfos = getCNBooks();
    for ($Index = 0; $Index < count($booksInfos); $Index++)
    {
        $additionalZero = "";
        if ($Index < 10) { $additionalZero = "0";}
        echo("Type " . $additionalZero . $Index . " to download the book " . $booksInfos[$Index]->bookID . " also known as " . $booksInfos[$Index]->bookName . "\n");
    }
    echo("Book names may haven't been displayed correctly if you're on windows use windows terminal\nAnd if you're using bash (GNU/Linux or Termux) set the terminal encoding to UTF-8\n");
    $bookIndex = readline("Type the corresponding number: ");
    if ($bookIndex < 0 || $bookIndex >= count($booksInfos))
        exit("Not valid input\n");
    downloadBook($chinaBaseURL, $booksInfos[$bookIndex]->bookID);
    echo("Total diskspace taken by " . "\"./CNBook" . $booksInfos[$bookIndex]->bookID . "\": " . getFolderSize("./CNBook" . $booksInfos[$bookIndex]->bookID) . "(bytes)\n");
}
else { echo("Not a valid input\n"); }
?>
  
