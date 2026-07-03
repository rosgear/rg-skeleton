<?php
/**
 * Файл конфигурации менеджера служб и компонентов.
 * 
 * @link https://rosgear.ru/
 * @copyright Copyright (c) 2015 RosGear
 * @license https://rosgear.ru/license/
 */

return [
    /** Коллекция */
    'collection' => '\Ge\Stdlib\Collection',
    // Маршрутизатор запросов
    'router' => '\Ge\Router\Router',
    // Конфигуратор
    'config' => '\Ge\Config\Config',
    // MIME-типы содержимого файла
    'mimes' => '\Ge\Config\Mimes',
    // Менеджер плагинов
    'pluginManager' => '\Ge\ServiceManager\PluginManager',
    // Менеджер представлений
    'viewManager' => '\Ge\View\ViewManager',
    // Помощник модели представления
    'viewHelperManager' => '\Ge\View\HelperManager',
    // Менеджер событий
    'eventManager' => '\Ge\Event\EventManager',
    // Менеджер валидации входных данных
    'validatorManager' => '\Ge\Validator\ValidatorManager',
    // Менеджер шорткодов (shortcodes)
    'shortcodeManager' => '\Ge\Shortcode\ShortcodeManager',
    // Версия
    'version' => '\Ge\Version\Version',
    // HTTP-ответ
    'response' => '\Ge\Http\Response',
    /** Менеджер меток (тегов) */
    'tagger' => '\Ge\Tagger\Tagger',
    /** Менеджер терминов */
    'terms' => '\Ge\Terms\Terms',

    /** Cлужба "Страницы сайта" */
    'page' => '\Ge\Site\Page',

    /** Cлужба "Версия приложения" */
    'version' => '\App\Version',

    /** Cлужба "Лицензия" */
    'license' => '\Ge\License\License',

    /** Cлужба "Локализация приложения" */
    'locale' => '\Ge\I18n\Locale',

    /** Cлужба "Локализатор сообщений" */
    'translator' => '\Ge\I18n\Translator',

    /** Cлужба "Пользователь" */
    'user' => [
        'class'         => '\Ge\User\User',
        'identityClass' => '\Ge\User\UserIdentity',
        'storageClass'  => '\Ge\User\UserSessionStorage'
    ],

    /** Cлужба "Кэш" */
    'cache' => [
        'class'    => '\Ge\Cache\Cache',
        'enabled'  => false,
        'default'  => 'filesystem',
        'path'     => '@runtime/cache',
        'adapters' => [
            /*
             * Адаптер Redis.
             */
            'redis' => [
                'dsn'     => 'redis://127.0.0.1:6379',
                'options' => [
                    // включает / отключает ленивые подключения к серверной части
                    'lazy' => false,
                    // включает / отключает использование персистентных соединений
                    'persistent' => 0,
                    // указывает персистентный id строки, используемой для персистентного соединения
                    'persistent_id' => null,
                    // задает тайм-аут TCP-keepalive (в сек.) соединения
                    'tcp_keepalive' => 0,
                    // указывает время (в сек.), используемое для подключения в серверу Redis до тайм-аута попытки соединения
                    'timeout' => 30,
                    // указывает время (в сек.), используемое при выполнение операций чтения в основном источнике сети до тайм-аута операции
                    'read_timeout' => 0,
                    // указывает промежуток (в млс.) между попытками повторного соединения в случае, если клиент потеряет соединение с сервером
                    'retry_interval' => 0,
                ]
            ],
            /*
             * Адаптер Memcached.
             */
            'memcached'  => [
                'dsn'     => 'memcached://localhost:11211',
                'options' => [
                    // включает / отключает сжатие нагрузки, когда значения объектов, превышающие 100 байтов
                    'compression' => true,
                    // включает / отключает поведение, совместимое с "libketama"
                    'libketama_compatible' => true,
                    // тайм-аут (в млс.) операций соединения сокета, при включённой опции no_block
                    'connect_timeout' => 1000,
                    // указывает, как сериализатор использовать для сериализации нескалярных значений: "php", "igbinary"
                    'serializer' => 'php',
                    // алгоритм хеширования, использованный для ключей объектов
                    'hash' => 'md5',
                    // включает / отключает асинхронные операции ввода и вывода
                    'no_block' => true
                ]
            ],
            /*
             * Адаптер Filesystem.
             */
            'filesystem' => [
                // каталог основного кеша (если null, соответсвует параметру "path" кэша)
                'directory' => '@runtime/cache'
            ]
        ]
    ],

    /** Cлужба "Язык" */
    'language' => [
        'class'       => '\Ge\Language\Language',
        'position'    => 'prefix',
        'slugParam'   => 'ln',
        'path'        => __DIR__ . '/../lang',
        'patterns'    => [
            'format' => [
                'basePath' => __DIR__ . '/../lang',
                'pattern'  => 'format.php',
            ],
            'messages' => [
                'basePath' => __DIR__ . '/../lang',
                'pattern'  => 'messages.php',
            ],
            'api' => [
                'basePath' => __DIR__ . '/../lang',
                'pattern'  => 'api.php',
            ]
        ],
        'autoload'  => ['messages'],
        'available' => [
                'class'        => '\Ge\Language\AvailableLanguage',
                'filename'     => __DIR__ . '/.language.php',
                'useSerialize' => true
        ]
    ],

    /** Cлужба "Менеджер модулей" */
    'modules' => '\Ge\ModuleManager\ModuleManager',

    /** Cлужба "Менеджер расширений" */
    'extensions' => '\Ge\ExtensionManager\ExtensionManager',

    /** Cлужба "Почта" */
    'mail' => [
        'class'          => '\Ge\Mail\Mail',
        'adapterClasses' => [
            'phpMailer' => '\Ge\Mail\Adapter\PHPMailerAdapter'
        ],
        'defaultAdapter' => 'phpMailer'
    ],

    /** Cлужба "Менеджер пакетов обновлений" */
    'updates' => '\Ge\Updates\PackageManager',

    /** Cлужба "Менеджер шорткодов" */
    'shortcodes' => [
        'class'  => '\Ge\Shortcode\ShortcodeManager',
        'config' => [
            'class'        => '\Ge\Config\Config',
            'filename'     => __DIR__ . '/.shortcodes.php',
            'useSerialize' => true
        ]
    ],

    /** Cлужба "Менеджер виджетов" */
    'widgets' => [
        'class'  => '\Ge\WidgetManager\WidgetManager',
        'config' => [
            'class'        => '\Ge\Config\Config',
            'filename'     => __DIR__ . '/.widgets.php',
            'useSerialize' => true
        ]
    ],

    /** Cлужба "Менеджер плагинов" */
    'plugins' => [
        'class'  => '\Ge\PluginManager\PluginManager',
        'config' => [
            'class'        => '\Ge\Config\Config',
            'filename'     => __DIR__ . '/.plugins.php',
            'useSerialize' => true
        ]
    ],

    /** Cлужба "Адаптер подключения к серверу базы данных" */
    'db' => [
        'class' => '\Ge\Db\Adapter\Adapter',
        'config' => [
            'class'        => '\Ge\Config\Config',
            'name'         => 'connections',
            'filename'     => __DIR__ . '/.database.php',
            'useSerialize' => false
        ],
        'connectionName'  => 'default',
        'enableProfiling' => true,
        'autoConnect'     => true
    ],

    /** Cлужба "Менеджер файловой системы" */
    'fileSystem' => [
        'class'   => '\Ge\Filesystem\FilesystemManager',
        'config' => [
            'class'        => '\Ge\Config\Config',
            'filename'     => __DIR__ . '/.filesystem.php',
            'useSerialize' => false
        ]
    ],

    /** Cлужба "Менеджер IP-адресов" */
    'ip'  => [
        'class' => '\Ge\IpManager\IpManager',
        'listOptions' => [
            'black'   => [
                'adapter'   => 'dbList',
                'tableName' => '{{ip_blacklist}}'
            ],
            'white'   => [
                'adapter'   => 'dbList',
                'tableName' => '{{ip_whitelist}}'
            ],
            'blocked' => [
                'adapter'   => 'dbBlock',
                'tableName' => '{{ip_blocklist}}'
            ]
        ]
    ],

    /** Cлужба "URL-менеджер" */
    'urlManager' => [
        'class'               => '\Ge\Url\UrlManager',
        'enableTrailingSlash' => false,
        'enablePrettyUrl'     => true,
        'showScriptName'      => false,
        'scriptBaseUrl'       => false,
        'routeParam'          => 'r'
    ],

    /** Cлужба "URL-правила" */
    'urlRules' => [
        'class' => '\Ge\Site\Url\UrlRules',
        'rule'  => 'CategoryAndArticleNameExt',
        'rules' => [
            'CategoryAndArticleNameExt' => [
                'suffix' => '.html'
            ]
        ]
    ],

    /** Cлужба "Логгер" */
    'logger' => [
        'class'   => '\Ge\Log\Logger',
        'targets' => [
            'application'    => [
                'writer'     => 'error',
                'enabled'    => true,
                'logFile'    => '@runtime/log/app.log',
                'severities' => '*'
            ],
            'debug' => [
                'writer'     => 'debug',
                'enabled'    => true,
                'autoCreate' => true,
                'path'       => '@runtime/log'
            ],
        ],
        'enabled' => false
    ],

    /** Cлужба "Сессия" */
    'session' => [
        'class'      => '\Ge\Session\Session',
        'name'       => 'gsid',
        'autoOpen'   => true,
        'useCookies' => true,
        'useTransparentSessionId' => false
    ],

    /** Cлужба "Загрузчик" */
    'uploader' => [
        'class'     => '\Ge\Uploader\Uploader',
        'localPath' => '/uploads',
        'baseUrl'   => '/uploads',
    ],

    /** Cлужба "Скрипты клиента" */
    'clientScript' => [
        'class'         => '\Ge\View\ClientScript',
        'showSchemeUrl' => false,
        'localPath'     => PUBLIC_BASE_URL,
        'baseUrl'       => '',
        'vendorUrl'     => '/vendors'
    ],

    /** Cлужба "Форматтер" */
    'formatter' => [
        'class'          => '\Ge\I18n\Formatter',
        'timeZone'       => 'Europe/London',
        'dateFormat'     => 'php:d/m/Y',
        'timeFormat'     => 'H:i:s',
        'dateTimeFormat' => 'php:d/m/Y H:i:s'
    ],

    /** Cлужба "Тема" (frontend) */
    'frontendTheme' => [
        'class'           => '\Ge\Theme\Theme',
        'themesLocalPath' => '/themes',
        'side'            => FRONTEND,
        'unifiedName'     => 'frontendTheme',
        'default'         => 'Default',
        'available'       => [
            'Default' => [
                'name'      => 'Default',
                'localPath' => '/default'
            ]
        ]
    ],

    /** Cлужба "Тема" (backend) */
    'backendTheme' => [
        'class'           => '\Ge\Theme\Theme',
        'themesLocalPath' => '/themes/backend',
        'side'            => BACKEND,
        'unifiedName'     => 'backendTheme',
        'default'         => 'Default',
        'available'       => [
            'Default' => [
                'name'      => 'Default',
                'localPath' => '/default'
            ]
        ]
    ],

    /** Cлужба "Отчёт ошибок" */
    'report' => [
        'class'               => '\Ge\Report\Report',
        'name'                => 'report',
        'enable'              => true,
        'responseClass'       => ['jsonResponse'],
        'backendOnly'         => true,
        'authorizedUsersOnly' => true,
        'crypt'               => true,
        'cryptKey'            => '1234567890abcdef1234567890abcdef',
    ],

    /** Cлужба "FontAwesome" */
    'fontAwesome' => '\Ge\FontAwesome\FontAwesome'
];
