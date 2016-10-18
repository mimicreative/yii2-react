<?php

namespace mimicreative\react;

class ReactAsset extends \yii\web\AssetBundle {
  public $sourcePath = '@bower/react';

  public $js= [
    (YII_ENV == 'dev') ? 'react.js' : 'react.min.js',
    (YII_ENV == 'dev') ? 'react-dom.js' :'react-dom.min.js'
  ];

  public $jsOptions = [
    // always put this in the head because we need it before page is loaded
    'position' => \yii\web\View::POS_HEAD
  ];
}
