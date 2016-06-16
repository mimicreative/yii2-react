<?php

namespace haqqi\react;

class ReactAsset extends \yii\web\AssetBundle {
  public $sourcePath = '@bower/react';

  public $js= [
    'react.min.js',
    'react-dom.min.js'
  ];

  public $jsOptions = [
    // always put this in the head because we need it before page is loaded
    'position' => \yii\web\View::POS_HEAD
  ];
}
