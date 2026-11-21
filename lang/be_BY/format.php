<?php
/**
 * Локализация представления форматов, плюралов и величин.
 * 
 * Белорусская локализация.
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
    'GiB' => 'ГіБ',
    'KB' => 'КБ',
    'KiB' => 'КіБ',
    'MB' => 'МБ',
    'MiB' => 'МіБ',
    'PB' => 'ПБ',
    'PiB' => 'ПіБ',
    'TB' => 'ТБ',
    'TiB' => 'ТіБ',
    // плюрал информации
    '{n, plural, =1{byte} other{bytes}}' => '{n, plural, one{байт} few{байта} many{байтаў} other{байта}}',
    '{n, plural, =1{gibibyte} other{gibibytes}}' => '{n, plural, one{гібібайт} few{гібібайта} many{гібібайтаў} other{гібібайта}}',
    '{n, plural, =1{gigabyte} other{gigabytes}}' => '{n, plural, one{гігабайт} few{гігабайты} many{гігабайтаў} other{гігабайты}}',
    '{n, plural, =1{kibibyte} other{kibibytes}}' => '{n, plural, one{кібібайт} few{кібібайта} many{кібібайтаў} other{кібібайта}}',
    '{n, plural, =1{kilobyte} other{kilobytes}}' => '{n, plural, one{кілабайт} few{кілабайта} many{кілабайтаў} other{кілабайта}}',
    '{n, plural, =1{mebibyte} other{mebibytes}}' => '{n, plural, one{мебибайт} few{мебібайта} many{мебібайтаў} other{мебібайта}}',
    '{n, plural, =1{megabyte} other{megabytes}}' => '{n, plural, one{мегабайт} few{мегабайты} many{мегабайтаў} other{мегабайты}}',
    '{n, plural, =1{pebibyte} other{pebibytes}}' => '{n, plural, one{пебібайт} few{пебібайта} many{пебібайтаў} other{пебібайта}}',
    '{n, plural, =1{petabyte} other{petabytes}}' => '{n, plural, one{петабайт} few{петабайта} many{петабайтаў} other{петабайта}}',
    '{n, plural, =1{tebibyte} other{tebibytes}}' => '{n, plural, one{тебибайт} few{тебібайта} many{тебібайтаў} other{тебібайта}}',
    '{n, plural, =1{terabyte} other{terabytes}}' => '{n, plural, one{тэрабайт} few{тэрабайта} many{тэрабайтаў} other{тэрабайта}}',
    // плюрал даты и времени
    '{n, plural, =1{1 day} other{# days}}' => '{n, plural, one{# дзень} few{# дня} many{# дзён} other{# дня}}',
    '{n, plural, =1{1 hour} other{# hours}}' => '{n, plural, one{# гадзіну} few{# гадзіны} many{# гадзін} other{# гадзіны}}',
    '{n, plural, =1{1 minute} other{# minutes}}' => '{n, plural, one{# хвіліна} few{# хвіліны} many{# хвілін} other{# хвіліны}}',
    '{n, plural, =1{1 month} other{# months}}' => '{n, plural, one{# месяц} few{# месяца} many{# месяцаў} other{# месяца}}',
    '{n, plural, =1{1 second} other{# seconds}}' => '{n, plural, one{# секунда} few{# секунды} many{# секунд} other{# секунды}}',
    '{n, plural, =1{1 year} other{# years}}' => '{n, plural, one{# год} few{# года} many{# гадоў} other{# года}}',
    '{n, plural, =1{a day} other{# days}} ago' => '{n, plural, =1{дзень} one{# дзень} few{# дня} many{# дзён} other{# дня}} таму',
    '{n, plural, =1{a minute} other{# minutes}} ago' => '{n, plural, =1{хвіліну} one{# хвіліну} few{# хвіліны} many{# хвілін} other{# хвіліны}} таму',
    '{n, plural, =1{a month} other{# months}} ago' => '{n, plural, =1{месяц} one{# месяц} few{# месяца} many{# месяцаў} other{# месяца}} таму',
    '{n, plural, =1{a second} other{# seconds}} ago' => '{n, plural, =1{секунду} one{# секунду} few{# секунды} many{# секунд} other{# секунды}} таму',
    '{n, plural, =1{a year} other{# years}} ago' => '{n, plural, =1{год} one{# год} few{# года} many{# гадоў} other{# года}} таму',
    '{n, plural, =1{an hour} other{# hours}} ago' => '{n, plural, =1{час} one{# гадзіну} few{# гадзіны} many{# гадзін} other{# гадзіны}} таму',
    //  плюрал даты и времени (условие)
    'in {n, plural, =1{a day} other{# days}}' => 'через {n, plural, =1{дзень} one{# дзень} few{# дня} many{# дзён} other{# дня}}',
    'in {n, plural, =1{a minute} other{# minutes}}' => 'через {n, plural, =1{хвіліну} one{# хвіліну} few{# хвіліны} many{# хвілін} other{# хвіліны}}',
    'in {n, plural, =1{a month} other{# months}}' => 'через {n, plural, =1{месяц} one{# месяц} few{# месяца} many{# месяцаў} other{# месяца}}',
    'in {n, plural, =1{a second} other{# seconds}}' => 'через {n, plural, =1{секунду} one{# секунду} few{# секунды} many{# секунд} other{# секунды}}',
    'in {n, plural, =1{a year} other{# years}}' => 'через {n, plural, =1{год} one{# год} few{# года} many{# гадоў} other{# года}}',
    'in {n, plural, =1{an hour} other{# hours}}' => 'через {n, plural, =1{гадзіна} one{# гадзіна} few{# гадзіны} many{# гадзін} other{# гадзіны}}'
];