<?php
/**
 * Локализация представления форматов, плюралов и величин.
 * 
 * Казахская локализация.
 * 
 * @link https://rosgear.ru
 * @copyright Copyright (c) 2026 RosGear
 * @license https://rosgear.ru/license/
 */
 
return [
    /** {@see \Ge\I18n\Formatter} */
    // формат информации
    'B' => 'Б',
    'GB' => 'ГБ',
    'GiB' => 'ГиБ',
    'KB' => 'КБ',
    'KiB' => 'КиБ',
    'MB' => 'МБ',
    'MiB' => 'МиБ',
    'PB' => 'ПБ',
    'PiB' => 'ПиБ',
    'TB' => 'ТБ',
    'TiB' => 'ТиБ',
    // плюрал информации
    '{n, plural, =1{byte} other{bytes}}' => '{n, plural, one{байт} few{байт} many{байттар} other{байт}}',
    '{n, plural, =1{gibibyte} other{gibibytes}}' => '{n, plural, one{гибибайт} few{гибибайт} many{гибибайт} other{гибибайт}}',
    '{n, plural, =1{gigabyte} other{gigabytes}}' => '{n, plural, one{гигабайт} few{гигабайта} many{гигабайт} other{гигабайт}}',
    '{n, plural, =1{kibibyte} other{kibibytes}}' => '{n, plural, one{кибибайт} few{кибибайт} many{кибибайт} other{кибибайт}}',
    '{n, plural, =1{kilobyte} other{kilobytes}}' => '{n, plural, one{килобайт} few{килобайт} many{килобайт} other{килобайт}}',
    '{n, plural, =1{mebibyte} other{mebibytes}}' => '{n, plural, one{мебибайт} few{мебибайт} many{мебибайт} other{мебибайт}}',
    '{n, plural, =1{megabyte} other{megabytes}}' => '{n, plural, one{мегабайт} few{мегабайт} many{мегабайт} other{мегабайт}}',
    '{n, plural, =1{pebibyte} other{pebibytes}}' => '{n, plural, one{пебибайт} few{пебибайт} many{пебибайт} other{пебибайт}}',
    '{n, plural, =1{petabyte} other{petabytes}}' => '{n, plural, one{петабайт} few{петабайт} many{петабайт} other{петабайт}}',
    '{n, plural, =1{tebibyte} other{tebibytes}}' => '{n, plural, one{тебибайт} few{тебибайт} many{тебибайт} other{тебибайт}}',
    '{n, plural, =1{terabyte} other{terabytes}}' => '{n, plural, one{терабайт} few{терабайт} many{терабайт} other{терабайт}}',
    // плюрал даты и времени
    '{n, plural, =1{1 day} other{# days}}' => '{n, plural, one{# күн} few{# күн} many{# күндер} other{# күндер}}',
    '{n, plural, =1{1 hour} other{# hours}}' => '{n, plural, one{# сағат} few{# сағат} many{# сағат} other{# сағат}}',
    '{n, plural, =1{1 minute} other{# minutes}}' => '{n, plural, one{# минут} few{# минут} many{# минут} other{# минут}}',
    '{n, plural, =1{1 month} other{# months}}' => '{n, plural, one{# ай} few{# ай} many{# айлар} other{# айлар}}',
    '{n, plural, =1{1 second} other{# seconds}}' => '{n, plural, one{# секунд} few{# жылдар} many{# жылдар} other{# жылдар}}',
    '{n, plural, =1{1 year} other{# years}}' => '{n, plural, one{# жыл} few{# жыл} many{# лет} other{# года}}',
    '{n, plural, =1{a day} other{# days}} ago' => '{n, plural, =1{күн} one{# күн} few{# күн} many{# күндер} other{# күн}} бұрын',
    '{n, plural, =1{a minute} other{# minutes}} ago' => '{n, plural, =1{минут} one{# минут} few{# минут} many{# минут} other{# минут}} бұрын',
    '{n, plural, =1{a month} other{# months}} ago' => '{n, plural, =1{ай} one{# ай} few{# ай} many{# айлар} other{# айлар}} бұрын',
    '{n, plural, =1{a second} other{# seconds}} ago' => '{n, plural, =1{секунд} one{# секунд} few{# секунд} many{# секунд} other{# секунд}} бұрын',
    '{n, plural, =1{a year} other{# years}} ago' => '{n, plural, =1{жыл} one{# жыл} few{# жыл} many{# жыл} other{# жылдар}} бұрын',
    '{n, plural, =1{an hour} other{# hours}} ago' => '{n, plural, =1{сағат} one{# сағат} few{# сағаттар} many{# сағаттар} other{# сағаттар}} бұрын',
    //  плюрал даты и времени (условие)
    'in {n, plural, =1{a day} other{# days}}' => 'арқылы {n, plural, =1{күн} one{# күн} few{# күндер} many{# күндер} other{# күндер}}',
    'in {n, plural, =1{a minute} other{# minutes}}' => 'арқылы {n, plural, =1{минуту} one{# минут} few{# минуттар} many{# минуттар} other{# минуттар}}',
    'in {n, plural, =1{a month} other{# months}}' => 'арқылы {n, plural, =1{ай} one{# ай} few{# айлар} many{# айлар} other{# айлар}}',
    'in {n, plural, =1{a second} other{# seconds}}' => 'арқылы {n, plural, =1{секунд} one{# секунд} few{# секундтар} many{# секундтар} other{# секундтар}}',
    'in {n, plural, =1{a year} other{# years}}' => 'арқылы {n, plural, =1{жыл} one{# жыл} few{# жылдар} many{# жылдар} other{# жылдар}}',
    'in {n, plural, =1{an hour} other{# hours}}' => 'арқылы {n, plural, =1{сағат} one{# сағат} few{# сағаттар} many{# сағаттар} other{# сағаттар}}'
];
