<?php
/**
 * Файл конфигурации менеджера шорткодов (shortcodes).
 * 
 * Здесь перечисляются основные шорткоды, которые используются в шаблонах 
 * компонентов (backend, frontend).
* 
 * Пример записи шорткода в параметре 'shortcodes':
 * 1) короткая запись `['tagName' => 'moduleId']`, 
 * результат: `module->tagNameShortcode(attributes)`;
 * 2) полная запись `['tagName' => ['componentType' => 'componentId', 'func' => 'componentMethod']`,
 * результат: `component->componentMethod(attributes)`.
 * 
 * @link https://rosgear.ru/
 * @copyright Copyright (c) 2015 RosGear
 * @license https://rosgear.ru/license/
 */

return [
    /** Шаблон метода компонента (модуль, расширение, виджет) возвращающий шорткод */
    'patternFunc' => '%sShortcode',

    /** Теги шорткодов */
    'shortcodes' => []
];
