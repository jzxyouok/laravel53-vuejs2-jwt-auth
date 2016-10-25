# Laravel PHP Framework 5.3 + Vuejs 2 + JwtAuth

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, queueing, and caching.

這是一個讓你快速建立 Laravel 與 Vuejs2 的環境, 使用API的方式來進行前後端溝通.

如果你想讓他更好或一起學習, 歡迎加入我們一起強化這個專案內容

Line ID: wwf1214ralf

## Install Step

    $ git clone https://github.com/imagine10255/laravel53-vuejs2-jwt-auth.git

    $ cd ./laravel53-vuejs2-jwt-auth.git

    $ composer install

    $ yarn install
    
    $ cp .env.example .env
    
@ 檢查 
    
1 根/.env 資料庫設定

2.如果你正在開發,請檢查 根/gulpfile.js browserSync.proxy: 'enter_your_hosting'
    
    $ php artisan migrate
    
    $ gulp watch

## Package Use By Backend

- [recca0120/laravel-tracy](https://github.com/recca0120/laravel-tracy) Debuger Tool
- [tymon/jwt-auth](https://github.com/tymondesigns/jwt-auth) API Auth

## Package Use By Frontend

- [ratiw/vuetable-2](https://github.com/ratiw/vuetable-2) 一個類似JQueryDatatable的Vue套件

## About Link

- [線上Vuejs讀書會](https://github.com/onlinereadbook/bookvuejs)
