<?php namespace Arcanedev\LaravelMarkdown\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class     Markdown
 *
 * @package  Arcanedev\LaravelMarkdown\Facades
 * @author   ARCANEDEV <arcanedev.maroc@gmail.com>
 */
class Markdown extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'arcanedev.markdown'; }
}
