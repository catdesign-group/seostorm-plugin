<?php

namespace Initbiz\SeoStorm\FormWidgets;

use Flash;
use Storage;
use Backend\Classes\FormWidgetBase;

/**
 * Minify Form Widget
 */
class ClearCache extends FormWidgetBase
{
    /**
     * @inheritDoc
     */
    protected $defaultAlias = 'initbiz_seostorm_clear_cache';

    /**
     * @inheritDoc
     */
    public function render()
    {
        return $this->makePartial('clearcache');
    }

    public function onClearCache()
    {
        Storage::deleteDirectory('initbiz/seostorm/minify');
        Flash::success('Cache cleared');
    }
}
