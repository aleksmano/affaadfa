<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/flipclock.css',
        // 'font-awesome/4.5.0/css/font-awesome.min.css',
        // 'css/select2.min.css',
        // 'css/fonts.googleapis.com.css',
        // 'css/ace.min.css',
        // 'css/ace-skins.min.css',
        // 'css/ace-rtl.min.css',
    ];
    public $js = [
      'js/flipclock.min.js',
      'js/timer.js',
      'js/hack-tabs.js',
      // 'js/ace-extra.min.js',
      // 'js/wizard.min.js',
      // 'js/jquery.validate.min.js',
      // 'js/jquery-additional-methods.min.js',
      // 'js/bootbox.js',
      // 'js/jquery.maskedinput.min.js',
      // 'js/select2.min.js',
      // 'js/ace-elements.min.js',
      // 'js/ace.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
