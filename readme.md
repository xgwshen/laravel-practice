<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, yet powerful, providing tools needed for large, robust applications. A superb combination of simplicity, elegance, and innovation give you tools you need to build any application with which you are tasked.

## Learning Laravel

Laravel has the most extensive and thorough documentation and video tutorial library of any modern web application framework. The [Laravel documentation](https://laravel.com/docs) is thorough, complete, and makes it a breeze to get started learning the framework.

If you're not in the mood to read, [Laracasts](https://laracasts.com) contains over 900 video tutorials on a range of topics including Laravel, modern PHP, unit testing, JavaScript, and more. Boost the skill level of yourself and your entire team by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for helping fund on-going Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](http://patreon.com/taylorotwell):

- **[Vehikl](http://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[British Software Development](https://www.britishsoftware.co)**
- **[Styde](https://styde.net)**
- [Fragrantica](https://www.fragrantica.com)
- [SOFTonSOFA](https://softonsofa.com/)

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](http://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
##App
应用核心目录（编写代码的目录）
* console
* http
* exceptions 异常处理 
##bootstrap
框架启动和载入配置 缓存文件
##config
配置文件
* app.php
* auth.php
* broadcasting.php
* cache.php 缓存配置
* database.php 数据库配置
* filesystems.php
* mail.php 邮箱配置
* queue.php 对列
* services.php 服务器配置？ 
* session.php session配置
* view.php 视图配置
##database
数据库迁移和填充文件（不知道做什么的）
##public 
入口文件 
静态文件
##resourcesss
自带静态文件 语言文件 页面（V层）
##routes
路由文件
* web.php 包含的路由都会应用web中间间组，具备session Csrf防护和cookie加密功能，如果应用无需提供无状态的restfulf风格的api,所有路由都会定义在web.php文件
*api.php 应用了api中间件，具备频率限制功能，这些路有时无状态，访问时
需要通过token进行认证并且不能访问session状态
* console.php 定义所有基于闭包的控制台命令， 每个闭包都被绑定到
一个控制台命令并且允许命令io方法进行交互？
* channels.php 文件用于注册应用支持的所有事件广播频道。?
##storage
编译后的blade模板 基于文件的session 文件缓存 其他框架生成的文件
* app 存放应用生成的文件
* framework 存放框架生成的文件和缓存
* logs 存放应用的日志文件

##tests11
自动化测试文件， php vendor/bin/phpunit
##vendor11
包含了应用所有通过composer加载的依赖
文件.user.ini有什么用？ 删掉后又会怎样？ 是怎么生成的 ？ 和 .htacess文件的区别是什么？

