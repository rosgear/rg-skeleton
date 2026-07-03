<?php
/**
 * Этот файл является частью приложения RosGear.
 * 
 * @link https://rosgear.ru/
 * @copyright Copyright (c) 2015 RosGear
 * @license https://rosgear.ru/license/
 */

namespace App;

use Ge;
use Ge\Exception;

/**
 * Ваше веб-приложение RosGear
 * 
 * @author Anton Tivonenko <anton.tivonenko@gmail.com>
 * @package App
 */
class Application extends \Ge\Mvc\Application
{
    /**
     * {@inheritdoc}
     */
    public array $viewConfig = [
        'useTheme'    => true,
        'useLocalize' => true
    ];

    /**
     * {@inheritdoc}
     */
    public function routeNotFound(): void
    {
        // если запрос относится к веб-сайту
        if (IS_FRONTEND) {
            $module = $this->modules->get('rg.fe.site');
            if ($module) {
                $module->findController();
                $module->run();
                $this->response->send();
            }
            return;
        }
        throw new Exception\PageUnavailableException();
    }
}