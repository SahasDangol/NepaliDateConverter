<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

# Date Converter
Nepali Date Converter converts Bikram sambat Nepali date to English date and vice versa. It is a date converter between Bikram sambat B.S and Gregorian calendar (Anno Domini)(A.D). Current version of nepali date converter is v5.8. Now Bikram Sambat Nepali Date Converter (Version 5.8) can convert dates from 1658B.S - 2100B.S and from English Date 1602A.D - 2044A.D. Nepali Date Converter is functioning almost around 12 years, in this time several fixes and updates are made to make results accurate and error free. Adhik maas or Purushottam maas with DST if applicable are determined and pre calculated here so you will get accurate date conversion. Useful for converting nepali date of birth to english, historical nepali dates, filling online application form, etc and vice versa.

Install composer from [here](https://getcomposer.org/Composer-Setup.exe).

Install Git bash from [here](https://git-scm.com/download/win)

Create a project by running command on git bash:
``` bash
composer create-project laravel/laravel DateConverter
```
Go to the project :
``` bash
cd DateConverter
```
Create a Controller :
``` bash
php artisan make:controller DateController
```
And now write the code into DateController by cloning  as follows
``` bash
git clone
```
Create two functions in helpers as
``` bash
if (!function_exists('get_nepali_date')) {
    function get_nepali_date($date)
    {
        $bsdate = new DateController();
        return $bsdate->eng_to_nep($date);

    }
}

if (!function_exists('get_english_date')) {
    function get_english_date($date)
    {
        $bsdate = new DateController();
        return $bsdate->nep_to_eng($date);

    }
}

```
Don't forget to import the DateController class in helper
``` bash
use App\Http\Controllers\DateController;
```
Now Create another Controller :
``` bash
php artisan make:controller TestController
```
And now write the code into TestController as follows
``` bash
$english_date="2019-06-20";
$nepali_date="2052-08-03";

echo get_nepali_date($english_date);// A.D. to B.S.

echo get_english_date($nepali_date);// B.S. to A.D.
```
