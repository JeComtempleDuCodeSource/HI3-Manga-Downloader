# HI3-Manga-PHP-Downloader
![HMPD ICON](/_HMPD512x512.bmp) 

THIS PHP VERSION WILL NOT BE UPDATED PLEASE GO SEE THE C PORT.
There's a C version with binaries for Windows and automatic shell scripts to build it [here](https://github.com/JeComtempleDuCodeSource/HMCD) \
Very simple PHP script to download books(manhua if you prefer) from the official HI3 COMIC, CN site (https://comic.bh3.com/) and GLOBAL site (https://manga.honkaiimpact3.com/).

## Guide
### GNU-Linux
Run: \
```sudo apt install php```\
```sudo apt install php-curl```\
```sudo apt install git```\
```git clone https://github.com/JeComtempleDuCodeSource/HMPD```\
```cd HMPD```\
```php HMPD.php```

### Android-Termux
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
First go to https://windows.php.net/download/ then go download the binaries of whatever the lastest version of PHP is and extract it.\
Place the unzipped folder in "C:\" then add the directory to the path.\
Now open cmd and type "php -v", if windows tells that you that it is not recognized that means you didn't setup correctly php, if not everything is fine.\
Then go to "https://github.com/JeComtempleDuCodeSource/HMPD" and download the source code by clicking "Code"->"Download ZIP" unzip that.\
Open cmd, go to the unzipped source code folder and type "php hmpd.php".
