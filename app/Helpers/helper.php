<?php

if (! function_exists('activeMainLink')) {
    function activeMainLink() {
        return request()->is('/') ? 'menu-link__active' : '';
    }
}

if (! function_exists('activeArticleLink')) {
    function activeArticleLink() {
        return (request()->is('articles') or request()->is('articles/*')) ? 'menu-link__active' : '';
    }
}