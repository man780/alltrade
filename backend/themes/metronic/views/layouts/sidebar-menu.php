    <?php

/**
 * Sidebar menu layout.
 *
 * @var \yii\web\View $this View
 */

use backend\themes\metronic\widgets\Menu;
$actionParams = $this->context->actionParams;
echo Menu::widget(
    [
        'options' => [
            'class' => 'page-sidebar-menu',
            'data' => [
                'auto-scroll' => "true",
                'slide-speed' => 200
            ],
            'style' => 'margin-top:25px;',
        ],
        'items' => [
            [
                'label' => '<div class="sidebar-toggler"></div>',
                'encode' => false,
                'options' => ['class' => 'sidebar-toggler-wrapper']
            ],
            [
                'label' => Yii::t('themes', 'Dashboard'),
                'url' => Yii::$app->homeUrl,
                'icon' => 'fa-dashboard',
                'active' => Yii::$app->request->url === Yii::$app->homeUrl,
                'options' => ['class' => 'start']
            ],
            [
                'label' => 'Разделы',
                'url' => '#',
                'icon' => 'fa-sitemap',
                'active' => $this->context->module->id === 'sections',
                'items' => [
                    [
                        'label' => Yii::t('app', 'Menu'),
                        'url' => '/admin/menu/index',
                        'active' => $this->context->id === 'menu',
                    ],
                    [
                        'label' => Yii::t('app', 'News'),
                        'url' => '/admin/news/index',
                        'active' => $this->context->id === 'news',
                    ],
                ],
            ],
            [
                'label' => 'Kommentariya va teglar',
                'url' => '#',
                'icon' => 'fa-sitemap',
                'active' => $this->context->id === 'comments_tags',
                'items' => [
                    [
                        'label' => Yii::t('app', 'Comments'),
                        'url' => '#',
                        'active' => $this->context->id === 'comments',
                        'items' => [
                            [
                                'label' => 'Kommentariy qo`shish',
                                'url' => ['/comments/create'],
                                'active' => false
                            ],
                            [
                                'label' => 'Kommentariylar ro`yxati',
                                'url' => ['/comments/index'],
                                'active' => false
                            ]
                        ]
                    ],
                    [
                        'label' => Yii::t('app', 'Tags'),
                        'url' => '#',
                        'active' => $this->context->id === 'tags',
                        'items' => [
                            [
                                'label' => 'Teg qo`shish',
                                'url' => ['/tags/create'],
                                'active' => false
                            ],
                            [
                                'label' => 'Teglar ro`yxati',
                                'url' => ['/tags/index'],
                                'active' => false
                            ],
                        ]
                    ],
                ]
            ],
            [
                'label' => 'Настройки и Справочники',
                'url' => '#',
                'icon' => 'fa-sitemap',
                'active' => $this->context->id === 'spr',
                'items' => [
                	[
                        'label' => Yii::t('app', 'Viloyat'),
                        'url' => '/admin/viloyat/index',
                        'active' => $this->context->id === 'viloyat',
                    ],
                    [
                        'label' => Yii::t('app', 'Tuman'),
                        'url' => '/admin/tuman/index',
                        'active' => $this->context->id === 'tuman',
                    ],
                    [
                        'label' => Yii::t('app', 'Brands'),
                        'url' => '/admin/brands/index',
                        'active' => $this->context->id === 'brands',
                    ],
                    [
                        'label' => Yii::t('app', 'Companies'),
                        'url' => '/admin/companies/index',
                        'active' => $this->context->id === 'companies',
                    ],
                    [
                        'label' => Yii::t('app', 'Countries'),
                        'url' => '/admin/countries/index',
                        'active' => $this->context->id === 'countries',
                    ],
                    [
                        'label' => Yii::t('app', 'Currency'),
                        'url' => '/admin/currency/index',
                        'active' => $this->context->id === 'currency',
                    ],
                    [
                        'label' => Yii::t('app', 'States'),
                        'url' => '/admin/states/index',
                        'active' => $this->context->id === 'states',
                    ],
                    [
                        'label' => Yii::t('app', 'GoodsFields'),
                        'url' => Yii::$app->urlManager->createUrl('/goods-fields/index'),
                        'active' => $this->context->id === 'goodsFields',
                    ],
                    [
                        'label' => Yii::t('app', 'GoodsFieldsValues'),
                        'url' => Yii::$app->urlManager->createUrl('/goods-fields-values/index'),
                        'active' => $this->context->id === 'goodsFieldsValues',
                    ],
                ]
            ],
            [
                'label' => 'Категории и Товары',
                'url' => '#',
                'icon' => 'fa-sitemap',
                'active' => $this->context->id === 'Category',
                'items' => [
                    [
                        'label' => Yii::t('app', 'Category'),
                        'url' => '/admin/category/index',
                        'active' => $this->context->id === 'category',
                    ],
                    [
                        'label' => Yii::t('app', 'Goods'),
                        'url' => '/admin/goods/index',
                        'active' => $this->context->id === 'goods',
                    ],
                    [
                        'label' => Yii::t('app', 'Ads'),
                        'url' => '/admin/ads/index',
                        'active' => $this->context->id === 'ads',
                    ],
                    [
                        'label' => Yii::t('app', 'Discount'),
                        'url' => '/admin/discounting/index',
                        'active' => $this->context->id === 'discounting',
                    ],
                ]
            ],
            /*[
                'label' => 'Математика',
                'url' => ['/editor/maths/index'],
                'icon' => 'fa-calculator',
                'active' => $this->context->module->id === 'editor' && $actionParams['subject'] == 'maths',
                'items' => [
                    [
                        'label' => Yii::t('themes', 'Редактор Математика'),
                        'url' => ['/editor/maths/create'],
                        'active' => false
                    ],

                    [
                        'label' => Yii::t('themes', 'Список шаблонов'),
                        'url' => ['/editor/maths/list'],
                        'active' => false
                    ],
                    [
                        'label' => Yii::t('themes', 'Список вопросов'),
                        'url' => ['/editor/maths/questions'],
                        'active' => false
                    ],

                ]
            ],
            [
                'label' => 'Русский язык',
                'url' => ['/editor/russian/list'],
                'icon' => 'fa-calculator',
                'active' => $this->context->module->id === 'editor' && $actionParams['subject'] == 'russian',
                'items' => [
                    [
                        'label' => Yii::t('themes', 'Редактор Руссикий язык'),
                        'url' => ['/editor/russian/create'],
                        'active' => false
                    ],
                    [
                        'label' => Yii::t('themes', 'Список шаблонов'),
                        'url' => ['/editor/russian/list'],
                        'active' => false
                    ],
                ]
            ],
            [
                'label' => 'Генератор',
                'url' => ['/generator'],
                'icon' => 'fa-heart',
                'active' => $this->context->module->id === 'generator',
                'items' => [
                    [
                        'label' => Yii::t('themes', 'Создать Генератор'),
                        'url' => ['/generator/default/create'],
                        'active' => false
                    ],
                    [
                        'label' => Yii::t('themes', 'Список'),
                        'url' => ['/generator'],
                        'active' => false
                    ],
                ]
            ],*/
            [
                'label' => Yii::t('themes', 'Пользователи'),
                'url' => ['/user/index'],
                'icon' => 'fa-group',
                'active' => $this->context->module->id === 'user',
                'items' => [
                    [
                        'label' => 'Добавить пользователя',
                        'url' => ['/user/create'],
                        'active' => false
                    ],
                    [
                        'label' => 'Список пользователей',
                        'url' => ['/user/admin'],
                        'active' => false
                    ]

                ]
            ],
        ]
    ]
);