<?php
namespace Concrete\Theme\Concrete;

class PageTheme extends \Concrete\Core\Page\Theme\Theme
{
    public function registerAssets()
    {
        $this->requireAsset('css', 'font-awesome');
        $this->requireAsset('javascript', 'jquery');
    }
}
