<?php

namespace app\file\controllers;

use steroids\file\FileModule;
use steroids\file\previews\ImageCropResize;
use steroids\file\previews\ImageResize;
use steroids\file\storages\FileStorage;
use steroids\file\uploaders\PutUploader;
use Yii;
use yii\base\Exception;
use yii\base\InvalidConfigException;
use yii\web\Controller;

class FileController extends Controller
{
    public $enableCsrfValidation = false;

    public static function siteMap()
    {
        return [
            'file' => [
                'items' => [
                    'index' => '/api/v1/file-test'
                ],
            ]
        ];
    }

    /**
     * @throws Exception
     * @throws InvalidConfigException
     */
    public function actionIndex()
    {
        $module = FileModule::getInstance();
        $module->uploaders = [
            'put' => [
                'class' => PutUploader::class
            ],
        ];
        $module->storages = [
            'file' => [
                'class' => FileStorage::class,
            ],
        ];

        $module->previews = [
            FileModule::PREVIEW_ORIGINAL => [
                'class' => ImageCropResize::class,
                'width' => 1920,
                'height' => 1200,
            ],
            FileModule::PREVIEW_DEFAULT => [
                'class' => ImageResize::class,
                'width' => 1280,
                'height' => 780,
            ],
        ];
        $file = $module->uploadFromRequest();

        $processor = array_filter(
            explode(',', (string)Yii::$app->request->get('imagesProcessor')
            ?: Yii::$app->request->get('processor'))
        );

        return array_map(
            function ($file) use ($processor) {
                return $file->getExtendedAttributes($processor);
            },
            $file
        );
    }
}