<?php

namespace app\models\mid;

use Yii;
use yii\db\ActiveRecord;
use yii\db\ActiveQuery;

class Product extends ActiveRecord
{
    public static function getDb()
    {
        return Yii::$app->get('dbMids');
    }

    public static function tableName()
    {
        return 'products';
    }

    /**
     * Equivalent to Laravel global scope
     */
    public static function find()
    {
        return parent::find()
            ->andWhere([
                'site_id' => Yii::$app->params['site_id_mid'],
                'is_visible' => 1
            ]);
    }

    /**
     * Product main image
     */
    public function getImage()
    {
        return $this->hasOne(Media::class, ['model_id' => 'id'])
            ->andWhere([
                'model_type' => 'App\\Models\\Product',
                'collection_name' => 'product-image'
            ]);
    }

    /**
     * Product gallery images
     */
    public function getImages()
    {
        return $this->hasMany(Media::class, ['model_id' => 'id'])
            ->andWhere([
                'model_type' => 'App\\Models\\Product',
                'collection_name' => 'product-images'
            ])
            ->orderBy(['order_column' => SORT_ASC]);
    }

    /**
     * Categories relationship
     */
    public function getCategories()
    {
        return $this->hasMany(Category::class, ['id' => 'category_id'])
            ->viaTable('product_categories', ['product_id' => 'id']);
    }

    /**
     * Equivalent of imageUrl()
     */
    public function getImageUrl()
    {
        return $this->image ? $this->image->getFullUrl() 
                            : Yii::$app->request->baseUrl . '/images/product-placeholder.png';
    }


    public function getImageUrls()
    {
        return array_map(function ($media) {
            return $media->getFullUrl();
        }, $this->images);
    }

    /**
     * Equivalent of hideGeneralCategory()
     */
    public function hideGeneralCategory()
    {
        $names = array_map(function ($category) {
            return $category->name;
        }, $this->categories);

        $filtered = array_filter($names, function ($name) {
            return !in_array($name, ['Featured', 'Top Picks']);
        });

        return implode(', ', $filtered);
    }
}