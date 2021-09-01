<?php

namespace rubin\yii2\widget\lightbox;

use yii\base\Widget;
use yii\helpers\Html;

class LightboxWidget extends Widget
{
    public $text;
    public $target;
    public $group;

    public function init()
    {
        parent::init();
        LightboxAsset::register($this->getView());
    }

    public function run()
    {
        return Html::a($this->text, $this->target, ['data-lightbox' => $this->group]);
    }
}