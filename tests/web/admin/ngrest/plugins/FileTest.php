<?php

namespace tests\web\admin\ngrest\plugins;

class FileTest extends \tests\web\BasePlugin
{
    public function testPlugin()
    {
        $text = new \admin\ngrest\plugins\File();
        $this->assertEquals('<span>{{item.}}</span>', $this->renderListHtml($text));
        $this->assertEquals('<zaa-file-upload fieldid="" fieldname="" model="" label="" grid=""></zaa-file-upload>', $this->renderCreateHtml($text));
        $this->assertEquals('<zaa-file-upload fieldid="" fieldname="" model="" label="" grid=""></zaa-file-upload>', $this->renderUpdateHtml($text));

        /* @todo: test against real config values 
        $text->setConfig('id', 'foo', 'bar', 'baz', 12);
        $this->assertEquals("<span>{{item.}}</span>", $this->renderListHtml($text));
        $this->assertEquals('<zaa-text fieldid="" fieldname="" model="" label="" grid="" placeholder=""></zaa-text>', $this->renderCreateHtml($text));
        $this->assertEquals('<zaa-text fieldid="" fieldname="" model="" label="" grid="" placeholder=""></zaa-text>', $this->renderUpdateHtml($text));
        */
    }
}