<?php

use Illuminate\Support\Collection;

if(!function_exists('page_title'))
{
    /**
     * @param $page
     * @return string
     */
    function page_title($page)
    {
        $base_name = config('app.name');
        return $page === '' ? $base_name : $page . ' - ' .  $base_name;
    }
}

if(!function_exists('admin_page_title'))
{
    /**
     * @param $page
     * @return string
     */
    function admin_page_title($page)
    {
        $base_name = config('app.name');
        return $page === '' ? '(admin) ' . $base_name : $page . ' - (admin) ' .  $base_name;
    }
}

if(!function_exists('active_page'))
{
    /**lightSpeedOut
     * @param Collection $routes
     * @param string $type
     * @return string
     */
    function active_page(Collection $routes, $type = '')
    {
        foreach ($routes as $route)
        {
            if(Illuminate\Support\Facades\Route::is($route))
            {
                return $type == 'expend'
                    ? 'show' : 'active';
            }
        }
        return '';
    }
}

if(!function_exists('seo_keywords'))
{
    /**
     * @return string
     */
    function seo_keywords()
    {
        return 'wallex,argent,money,dépense,expense,gain,income,' .
            'transfert,transfer,transaction,compte,account,dévise,currency,revenue';
    }
}

if(!function_exists('seo_description'))
{
    /**
     * @return string
     */
    function seo_description()
    {
        return 'Wallex est votre porte feuille electronique, '.
            'qui vous permet de gerer de manière éfficace vos dépenses et gains.';
    }
}

if(!function_exists('about_pages'))
{
    /**
     * @return Collection
     */
    function about_pages()
    {
        return collect(['about']);
    }
}
