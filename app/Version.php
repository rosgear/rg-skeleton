<?php
/**
 * Этот файл является частью приложения RosGear.
 * 
 * @link https://rosgear.ru/
 * @copyright Copyright (c) 2015 RosGear
 * @license https://rosgear.ru/license/
 */

namespace App;

/**
 * Версия приложения.
 * 
 * @author Anton Tivonenko <anton.tivonenko@gmail.com>
 * @package App
 */
class Version extends \Ge\Version\AppVersion
{
    /**
     * {@inheritdoc}
     */
    public string $code = 'RG SKELETON';

    /**
     * {@inheritdoc}
     */
    public string $name = 'RosGear: Skeleton';

    /**
     * {@inheritdoc}
     */
    public string $originalName = 'RosGear: Скелет';

    /**
     * {@inheritdoc}
     */
    public string $number = '1.0';

    /**
     * {@inheritdoc}
     */
    public string $date = '01/01/2025';

    /**
     * {@inheritdoc}
     */
    public string $resource = 'https://rosgear.ru/';

    /**
     * {@inheritdoc}
     */
    public string $docsResource = 'https://rosgear.ru/docs/';

    /**
     * {@inheritdoc}
     * 
     * В результате обновления приложения, здесь свойству будут указаны параметры 
     * обновленной версии редакции приложения.
     */
    protected mixed $edition = null;
}
