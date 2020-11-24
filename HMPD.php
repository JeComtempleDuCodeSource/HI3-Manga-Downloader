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
$globalBaseURL = "https://d2tpbmzklky1cl.cloudfront.net/manga/static/comic/book";

// China Base URL 
$chinaBaseURL = "https://comicstatic.bh3.com/new_static_v2/comic/book";

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

// Return an array of global bookstruct
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
    $bookInfo = array();
    $bookInfo[] = new bookStruct($gbaichanFacts,    "Ai-Chan Facts"         );
    $bookInfo[] = new bookStruct($gbGratitude,      "Gratitude Arc"         );
    $bookInfo[] = new bookStruct($gbAEInvasion,     "AE Invasion"           );
    $bookInfo[] = new bookStruct($gbAzureWater,     "Azure Waters"          );
    $bookInfo[] = new bookStruct($gbSecondEruption, "Second Eruption"       );
    $bookInfo[] = new bookStruct($gbGeminaTales,    "Gemina: Tales"         );
    $bookInfo[] = new bookStruct($gbWorldSerpent,   "World Serpent"         );
    $bookInfo[] = new bookStruct($gbKianaPlayHI3,   "Kiana Plays Honkai"    );
    $bookInfo[] = new bookStruct($gbLondonHoliday,  "London Holiday"        );
    $bookInfo[] = new bookStruct($gbMoonShadow,     "Moon Shadow"           );
    $bookInfo[] = new bookStruct($gbElanPalatinus,  "Elan Palatinus"        );
    $bookInfo[] = new bookStruct($gbSpringfest,     "SpringFest"            );
    $bookInfo[] = new bookStruct($gbELF,            "ELF"                   );
    $bookInfo[] = new bookStruct($gbSecondKey,      "Second Key"            );
    $bookInfo[] = new bookStruct($gbNagazora,       "Escape From Nagazora"  );
    $bookInfo[] = new bookStruct($gbFreyaHigh,      "St. Freya High"        );
    $bookInfo[] = new bookStruct($gbGeminaInvasion, "Gemina: Invasion"      );
    $bookInfo[] = new bookStruct($gbDivineKey,      "Divine Key"            );
    $bookInfo[] = new bookStruct($gbCWV,            "Cooking With Valkyries");
    $bookInfo[] = new bookStruct($gbEmpyreanBlade,  "Empyrean Blade"        );
    $bookInfo[] = new bookStruct($gbAlienSpace,     "Alien Space"           );
    return $bookInfo;
}

// Return an array of china bookstruct
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
    $bookInfo = array();
    $bookInfo[] = new bookStruct($cnNagazora,       "逃离长空篇");
    $bookInfo[] = new bookStruct($cnHI3,            "樱花追忆篇");
    $bookInfo[] = new bookStruct($cnBohai,          "绀海篇");
    $bookInfo[] = new bookStruct($cnSakura,         "绯樱篇");
    $bookInfo[] = new bookStruct($cnAEInvasion,     "逆熵入侵篇");   
    $bookInfo[] = new bookStruct($cnGratitudeArc,   "恩返篇");  
    $bookInfo[] = new bookStruct($cnMoonShadow,     "月影篇");  
    $bookInfo[] = new bookStruct($cnElanPalatinus,  "紫鸢篇");  
    $bookInfo[] = new bookStruct($cnGodKey,         "神之键秘话");  
    $bookInfo[] = new bookStruct($cnKiana,          "玩崩坏3的琪亚娜");  
    $bookInfo[] = new bookStruct($cnSecondLawman,   "第二次崩坏");  
    $bookInfo[] = new bookStruct($cnCWV,            "女武神的餐桌");  
    $bookInfo[] = new bookStruct($cnSummerMem,      "夏日回忆-预告篇");  
    $bookInfo[] = new bookStruct($cnGeminaOrigin,   "双子：起源");  
    $bookInfo[] = new bookStruct($cnGeminaInvasion, "双子：入侵");  
    $bookInfo[] = new bookStruct($cnWorldSerpent,   "蛇之篇");  
    $bookInfo[] = new bookStruct($cnLondonHoliday,  "雾都假日"); 
    $bookInfo[] = new bookStruct($cnSpringfest,     "年岁");  
    $bookInfo[] = new bookStruct($cnELF,            "武装人偶");  
    $bookInfo[] = new bookStruct($cnSecondKey,      "传承");  
    $bookInfo[] = new bookStruct($cnEmpyreanBlade,  "云墨剑心");  
    $bookInfo[] = new bookStruct($cnAlienSpace,     "异乡"); 
    return $bookInfo;
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

// Return last chapter
function getLastChapter($BookURL)
{
    echo("Detecting chapter count...\n");
    $curlCheck = curl_init();
    curl_setopt($curlCheck, CURLOPT_CAINFO, './cacert.pem');
    curl_setopt($curlCheck, CURLOPT_NOBODY, true);
    for ($checkChap = 1; $checkChap <= 70; $checkChap++)
    {
        curl_setopt($curlCheck, CURLOPT_URL, $BookURL . "/" . $checkChap . "/0001.jpg");
        curl_exec($curlCheck);
        if (curl_getinfo($curlCheck, CURLINFO_HTTP_CODE) != 200)
        {
            echo("Chapter " . $checkChap . " does not exists\n");
            echo("Chapter count is " . ($checkChap - 1) . "\n");
            curl_close($curlCheck);
            return $checkChap;
        }
        else { echo("Chapter " . $checkChap . " exists\n");}
    }
    curl_close($curlCheck);
}

// Downloads a book
function downloadBook($serverRegion, $bookID, $startRange, $endRange)
{
    $lv1dirname = "NOT INITIALIZED";
    if ($serverRegion == "https://comicstatic.bh3.com/new_static_v2/comic/book")
    {
        $lv1dirname = "./CNBook";
    }
    else 
    {
        $lv1dirname = "./GBBook";
    }
    echo("Start downloading chapter 1\n");
    
    // For all chapter in the range
    $curlCheck = curl_init();
    curl_setopt($curlCheck, CURLOPT_CAINFO, './cacert.pem');
    curl_setopt($curlCheck, CURLOPT_NOBODY, true);
    
    $curlDownload = curl_init();
    curl_setopt($curlDownload, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curlDownload, CURLOPT_CAINFO, './cacert.pem');
    curl_setopt($curlDownload, CURLOPT_HEADER, false);
    for ($chapCount = $startRange; $chapCount <= $endRange; $chapCount++)
    {
        $lv1concatURL = $serverRegion . "/" . $bookID . "/" . $chapCount . "/";
        if ($chapCount < 10)
            mkdir($lv1dirname . $bookID .  "/Chapter" . "0" . $chapCount, 0777, true);
        else 
            mkdir($lv1dirname . $bookID .  "/Chapter" . $chapCount, 0777, true);
        echo("\nDownloading chapter " . $chapCount . "\n");
        if ($chapCount < 10)
            echo($lv1concatURL . " => " . $lv1dirname . $bookID .  "/Chapter" . "0" . $chapCount . "\n");
        else 
            echo($lv1concatURL . " => " . $lv1dirname . $bookID .  "/Chapter" . $chapCount . "\n");

        // Folder structure : 
        // ./[REGION]Book[BookID]/Chapter[Chapter Number]/[TWO FIRST DIGITS IS CHAPTER][TWO LAST DIGITS IS PAGE].jpg
        for ($pageCount = 1; $pageCount < 70; $pageCount++)
        {
            $lv2concatURL = "NOT INITIALIZED YET";
            if ($pageCount < 10) 
            { 
                $lv2concatURL = $lv1concatURL . "000" . $pageCount . ".jpg";
            }
            else 
            { 
                $lv2concatURL = $lv1concatURL . "00" . $pageCount . ".jpg";
            }
            $localFilePath = "NOT INITIALIZED";
            if ($chapCount < 10)
            {
                if ($pageCount < 10)
                {
                    $localFilePath = $lv1dirname . $bookID .  "/Chapter" . "0" . $chapCount . "/" . "0" . $chapCount . "0" . $pageCount . ".jpg";
                }
                else 
                {
                    $localFilePath = $lv1dirname . $bookID .  "/Chapter" . "0" . $chapCount . "/" . "0" . $chapCount . $pageCount . ".jpg";
                }
            }
            else 
            {
                if ($pageCount < 10)
                {
                    $localFilePath = $lv1dirname . $bookID .  "/Chapter" . $chapCount . "/" . $chapCount . "0" . $pageCount . ".jpg";
                }
                else 
                {
                    $localFilePath = $lv1dirname . $bookID .  "/Chapter" . $chapCount . "/" . $chapCount . $pageCount . ".jpg";
                }
            }
            curl_setopt($curlCheck, CURLOPT_URL, $lv2concatURL);
            curl_exec($curlCheck);

            // Download page
            if (curl_getinfo($curlCheck, CURLINFO_HTTP_CODE) == 200)
            {
                curl_setopt($curlDownload, CURLOPT_URL, $lv2concatURL);
                file_put_contents($localFilePath, curl_exec($curlDownload));
                echo($lv2concatURL . " => " . $localFilePath . "\n");
            }
            else 
            {
                echo("Can't download page " . $pageCount . " of chapter " . $chapCount . " (IT PROBABLY DOES NOT EXISTS SO DON'T WORRY)\n");
                if (($chapCount) != $endRange)
                    echo("Next chapter(" . ($chapCount + 1) . ")\n");
                break;
            }
        }
    }
    curl_close($curlCheck);
    curl_close($curlDownload);
    echo("Finished downloading book" . $bookID . " on server \"" . $serverRegion .  "\"\n");
}

// Gets range from input
function getRange($serverRegion, $bookID)
{
    $maxChap = getLastChapter($serverRegion . "/" . $bookID);
    echo("The max range is 1-" . ($maxChap - 1) . "\n");
    $Range = array();

    $Range[] = readline("Please type the chapter from where to start from(including it): ");
    if ($Range[0] < 1 || $Range[0] > ($maxChap - 1))
        exit("Start range cannot be smaller than 1 or greater than " . $maxChap);

    $Range[] = readline("Please type the chapter from where to stop(including it): ");
    if ($Range[1] > ($maxChap - 1) || $Range[1] < 1)
        exit("End range cannot be greater than " . $maxChap . " or smaller than 1");

    if ($Range[0] > $Range[1])
        exit("Start range cannot be greater than end range");
    return $Range;
}

function guidedInterface()
{
    global $globalBaseURL;
    global $chinaBaseURL;

    // Download certificate
    if (!file_exists("./cacert.pem"))
    {
        echo("No \"cacert.pem\" in current directory!\nDownloading \"cacert.pem\"...\n");
        file_put_contents("./cacert.pem", file_get_contents("https://curl.haxx.se/ca/cacert.pem"));
        echo("Finished downloading \"cacert.pem\"\n");
    }

    // Get server
    echo("Welcome to HI3 manga php downloader! (HMPD if you prefer)\n\n");
    echo("Get more help or report issues at https://github.com/JeComtempleDuCodeSource/HMPD\n");
    $server = readline("Type 1 to download from global server.And Type 2 to download from CN server: ");
    echo("\n");

    // Show available books and get range from user input
    if ($server == 1)
    {
        $bookInfo = getGlobalBooks();
        for ($Index = 0; $Index < count($bookInfo); $Index++)
        {
            echo("Type " . $Index . " to download the book " . $bookInfo[$Index]->bookID . " also known as " . $bookInfo[$Index]->bookName . "\n");
        }
        
        $bookIndex = readline("Type the corresponding number: ");
        if ($bookIndex < 0 || $bookIndex >= count($bookInfo))
            exit("Not valid input\n");
        if ($bookInfo[$bookIndex] == NULL)
            exit("Not valid input\n");

        $Range = getRange($globalBaseURL, $bookInfo[$bookIndex]->bookID);
        downloadBook($globalBaseURL, $bookInfo[$bookIndex]->bookID, $Range[0], $Range[1]);
        echo("Total diskspace taken by " . "\"./GBBook" . $bookInfo[$bookIndex]->bookID . "\": " . getFolderSize("./GBBook" . $bookInfo[$bookIndex]->bookID) . "(bytes)\n");
    }
    else if ($server == 2)
    {
        // Show available books and get range from user input
        $bookInfo = getCNBooks();
        for ($Index = 0; $Index < count($bookInfo); $Index++)
        {
            echo("Type " . $Index . " to download the book " . $bookInfo[$Index]->bookID . " also known as " . $bookInfo[$Index]->bookName . "\n");
        }
        echo("Book names may haven't been displayed correctly, if you're on windows use windows terminal\nAnd if you're using bash (GNU/Linux or Termux) set the terminal encoding to UTF-8\n");
        
        $bookIndex = readline("Type the corresponding number: ");
        if ($bookIndex < 0 || $bookIndex >= count($bookInfo))
            exit("Not valid input\n");
        if ($bookInfo[$bookIndex] == NULL)
            exit("Not valid input\n");

        $Range = getRange($chinaBaseURL, $bookInfo[$bookIndex]->bookID);
        downloadBook($chinaBaseURL, $bookInfo[$bookIndex]->bookID, $Range[0], $Range[1]);
        echo("Total diskspace taken by " . "\"./CNBook" . $bookInfo[$bookIndex]->bookID . "\": " . getFolderSize("./CNBook" . $bookInfo[$bookIndex]->bookID) . "(bytes)\n");
    }
    else 
        echo("Not a valid choice\n");
}

function commandLineInterface($serverID, $bookID, $startRange, $endRange)
{
    global $globalBaseURL;
    global $chinaBaseURL;

    // Download certificate
    if (!file_exists("./cacert.pem"))
    {
        echo("No \"cacert.pem\" in current directory!\nDownloading \"cacert.pem\"...\n");
        file_put_contents("./cacert.pem", file_get_contents("https://curl.haxx.se/ca/cacert.pem"));
        echo("Finished downloading \"cacert.pem\"\n");
    }

    $serverName;
    if ($serverID == 1)
    {
        $serverName = $globalBaseURL;
        $bookInfo = getGlobalBooks();
        $bookIDValid = false;
        for ($Index = 0; $Index < count($bookInfo); $Index++)
        {
            if ($bookID == $bookInfo[$Index]->bookID)
            {
                $bookIDValid = true;
                echo("Target book: " . $bookInfo[$Index]->bookName . "\n");
                break;
            }
        }
        if ($bookIDValid == false)
            exit("Invalid book ID");
    }
    else if ($serverID == 2)
    {
        $serverName = $chinaBaseURL;
        $bookInfo = getCNBooks();
        $bookIDValid = false;
        for ($Index = 0; $Index < count($bookInfo); $Index++)
        {
            if ($bookID == $bookInfo[$Index]->bookID)
            {
                $bookIDValid = true;
                echo("Target book: " . $bookInfo[$Index]->bookName . "\n");
                break;
            }
        }
        if ($bookIDValid == false)
            exit("Invalid book ID");
    }
    else 
        exit("First value is invalid, GLOBAL = 1, CN = 2\n");
    $maxChap = getLastChapter($serverName . "/" . $bookID);
    if ($startRange < 1 || $startRange > ($maxChap - 1))
        exit("Start range cannot be smaller than 1 or greater than " . $maxChap);

    if ($endRange > ($maxChap - 1) || $endRange < 1)
        exit("End range cannot be greater than " . $maxChap . " or smaller than 1");

    if ($startRange > $endRange)
        exit("Start range cannot be greater than end range");
    
    downloadBook($serverName, $bookID, $startRange, $endRange);
}
if ($argc == 5) // SRV BOOKID START END
{
    commandLineInterface($argv[1], $argv[2], $argv[3], $argv[4]);
}
else if ($argc == 1)// Guided interface
{
    guidedInterface();
}
else 
{
    echo("Usage : " . $argv[0] . " [SERVER_ID] [BOOK_ID] [START_CHAPTER] [END_CHAPTER]\n");
    echo("\t SERVER_ID: 1 = GLOBAL, 2 = MAINLAND CHINA\n");
    echo("\t BOOK_ID: The 4-digit integer on the HI3 COMIC Official site when you read a specific book i.e: http://....com/book/[BookID]\n");
    echo("\t START_CHAPTER: The chapter from where you want to start download, it includes it\n");
    echo("\t END_CHAPTER: The chapter from where you want to finish download, it includes it\n");
    echo("Get more help or report issues at https://github.com/JeComtempleDuCodeSource/HMPD\n");
}
?>
  
