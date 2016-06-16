React.js Asset Bundle for Yii2
==============================

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Add to the require section of your `composer.json` file:

```
"mimicreative/yii2-react": "~1.0"
```

And run in terminal

```
composer update
```

Usage
-----

Use as the asset bundle in Yii2 View files.

```
// use this if you do not need addons
\mimicreative\react\ReactAsset::register($this);

// use this if you need addons
\mimicreative\react\ReactWithAddonsAsset::register($this);
```

By default, this extension use the minified version. I also include the
`react-dom.min.js` because we usually need it to render in js files.
To customize what asset to use, you can set the configuration in the Yii2 config
files. Please refer to [React Bower package](https://github.com/reactjs/react-bower)
for the list of the files.

For example if you want to use non-minified version:

```
// in main.php config file

return [
  'components' => [
    'assetManager' => [
      'bundles' => [
        'mimicreative\react\ReactAsset' => [
          'js' => [
            'react.js',
            'react-dom.js'
          ]
        ],
        'mimicreative\react\ReactWithAddonsAsset' => [
          'js' => [
            'react-with-addons.js',
            'react-dom.js'
          ]
        ]
      ]
    ]
  ]
];
```

Further Information
-------------------
Please, check the [React.js site](https://facebook.github.io/react/) documentation for further information about its configuration options.
