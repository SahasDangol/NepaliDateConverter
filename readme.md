<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

# Nepali Date Converter

Nepali Date Converter converts Bikram sambat Nepali date to English date and vice versa. It is a date converter between Bikram sambat B.S and Gregorian calendar (Anno Domini)(A.D). Now Bikram Sambat Nepali Date Converter can convert dates from 2000B.S - 2090B.S. Nepali Date Converter is functioning almost around 2 years, in this time several fixes and updates are made to make results accurate and error free. Adhik maas or Purushottam maas with DST if applicable are determined and pre calculated here so you will get accurate date conversion. Useful for converting nepali date of birth to english, historical nepali dates, filling online application form, etc and vice versa.

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
public function convert()
{
$english_date="2019-06-20";
$nepali_date="2052-08-03";

echo get_nepali_date($english_date);// A.D. to B.S.
echo "\n";
echo get_english_date($nepali_date);// B.S. to A.D.
}
```
Now create a url for the convert function TestController
``` bash
Route::get('/convert','TestController@convert');
```
Now run the project and goto url
``` bash
php artisan serve
#goto url
localhost:8000/convert
```
# Important thing to remember
``` bash
The date format should be in "Y-m-d"
```
