# HI3-Manga-PHP-Downloader
Very short PHP script to download books(manhua if you prefer) from the official HI3 COMIC site (https://comic.bh3.com/) and (https://manga.honkaiimpact3.com/).

## TO DO
~~Start from a certain chapter, stop before a certain chapter, download a range of chapter or a precise chapter.~~

## Why?
I wrote it because i want to keep sort a an archive of these manhuas, and if you want to know why did i choose PHP it's just because i wanted a simple language and writing this in C or C++ would be useless IMO.

## Guide
I will soon write a guide for all platforms Termux(Android), GNU/Linux and Windows.

### Linux
Run: \
```sudo apt install php```\
```sudo apt install git```\
```git clone https://github.com/JeComtempleDuCodeSource/HMPD```\
```cd HMPD```\
```php HMPD.php```

### Android
Go to: https://play.google.com/store/apps/details?id=com.termux and download the app. \
Once you installed it, open the app and type: \
```pkg install php```\
```pkg install git```\
```git clone https://github.com/JeComtempleDuCodeSource/HMPD```\
```cd HMPD```\
```php HMPD.php```\
You can then use a file explorer to move the downloaded books to your sdcard or whatever you want.\
To move them directly from the app run:\
```mv ./Book[BookID] ./storage/[sdcard0|sdcard1|usbotg]/Book[BookID]/```\
"sdcard0" is the phone internal storage "sdcard1" the external sdcard and "usbotg" the external USB key.

### Windows
First go to https://windows.php.net/download/ then go to section "PHP7.4" then "VC15 x64 Thread Safe" and "Zip" download the Zip, Unzip it.\
Place the unzipped folder in "C:\Program Files" then add "C:\Program Files\php-7.4.10-Win32-vc15-x64" (It may not exactly be that) to the path.\
Now open cmd and type "php -v", if windows shows an error that means you didn't setup correctly php, if everything is fine.\
Then go to "https://github.com/JeComtempleDuCodeSource/HMPD" and download the source code by clicking "Code"->"Download ZIP" unzip that.\
Open cmd, go to the unzipped source code folder and type "php hmpd.php.
