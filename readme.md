<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<<<<<<< HEAD
<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1400 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[British Software Development](https://www.britishsoftware.co)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- [UserInsights](https://userinsights.com)
- [Fragrantica](https://www.fragrantica.com)
- [SOFTonSOFA](https://softonsofa.com/)
- [User10](https://user10.com)
- [Soumettre.fr](https://soumettre.fr/)
- [CodeBrisk](https://codebrisk.com)
- [1Forge](https://1forge.com)
- [TECPRESSO](https://tecpresso.co.jp/)
- [Runtime Converter](http://runtimeconverter.com/)
- [WebL'Agence](https://weblagence.com/)
- [Invoice Ninja](https://www.invoiceninja.com)
- [iMi digital](https://www.imi-digital.de/)
- [Earthlink](https://www.earthlink.ro/)
- [Steadfast Collective](https://steadfastcollective.com/)
- [We Are The Robots Inc.](https://watr.mx/)
- [Understand.io](https://www.understand.io/)
- [Abdel Elrafa](https://abdelelrafa.com)
- [Hyper Host](https://hyper.host)

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).
=======
# Nepali Date Converter

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
>>>>>>> parent of 564c563... Update readme.md
