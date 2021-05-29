<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## About Repository

This repository introduced how I use Laravel.

You don't have to use it like this. However, I'm trying to use it as well as possible.

**If there is a better way, Always welcome.**

## I Using...

- Nginx
- PHP
- Mariadb
- Redis
- Composer
- Xdebug
- PHP_CodeSniffer
- PHPStan
- PHP CS Fixer
- IDE : PHPStorm

## Reference Site

- **[Laravel(Official)](https://laravel.com) [(kr)](https://laravel.kr)**
- **[Composer(Official)](https://getcomposer.org) [(kr)](https://packagist.kr)**
- **[XDebug](https://xdebug.org)**
- **[PHPCodeSniffer](https://pear.php.net/package/PHP_CodeSniffer)**
- **[PSR(Official)](https://www.php-fig.org) [(kr)](https://psr.kkame.net)** - PHP Standards Recommendations
- **[PhpTheRightWay(Official)](https://phptherightway.com) [(kr)](http://modernpug.github.io/php-the-right-way)**
- **[PhpTheWrongWay](https://phpthewrongway.com)**

## Recommend Guidelines

#### Absolutely do not have to follow these guidelines

- **[Laravel Coding Guidelines](https://www.mindtwo.de/guidelines/coding/laravel)**
- **[Laravel & PHP Style Guide](https://spatie-guidelines.kkame.net/code-style/laravel-php)**

|What|How|Good|Bad|
|---|---|---|---|
| Controller                        | singular                                              | UserController                                | <s>UsersController</s>
| Route                             | plural                                                | users/1                                       | <s>user/1</s>
| Named route                       | snake_case with dot notation                          | users.edit_name                               | <s>user.edit-name, edit-users-name</s>
| Model                             | singular                                              | User                                          | <s>Users</s>
| hasOne or belongsTo relationship  | singular                                              | postComment                                   | <s>postComments</s>
| All other relationships           | plural                                                | postComments                                  | <s>postComment</s>
| Table                             | plural                                                | post_comments                                 | <s>post_comment, post-comment, postComments</s>
| Pivot table                       | singular model names in alphabetical order            | post_user, comment_post                       | <s>post_comments, post-comments, postComments</s>
| Table column                      | snake_case without model name                         | name, phone_number, image_url                 | <s>user_name, phoneNumber, image-url</s>
| Foreign key                       | singular model name with `_id` suffix                 | user_id, post_id                              | <s>userId, posts_id, comment-id</s>
| Primary key                       | -                                                     | id                                            | <s>no, idx, index</s>
| Migration                         | recommend: `php artisan make:model Post -m` command   | YYYY_MM_DD_HHMMSS_create_posts_table          | -
| Method, Function                  | camelCase                                             | getAll                                        | <s>get_all</s>
| Method in resource controller     | recommend for laravel document                        | index, create, store, edit, update, destroy   | -
| Model property                    | snake_case                                            | $model->model_property                        | <s>$model->modelProperty</s>
| Variable                          | camelCase                                             | $users, $postComments, $fooBoo                | <s>$foo_boo</s>
| View                              | kebab-case                                            | post-index.blade.php                          | <s>post_index.blade.php, postIndex.blade.php</s>
| Config                            | kebab-case                                            | google-api.php                                | <s>googleApi.php, google_api.php</s>
| Trait                             | adjective                                             | Notifiable                                    | <s>NotifiableTrait</s>

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
