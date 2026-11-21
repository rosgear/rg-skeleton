<?php
/**
 * Локализация представления форматов, плюралов и величин.
 * 
 * Итальянская локализация.
 * 
 * @link https://rosgear.ru
 * @copyright Copyright (c) 2026 RosGear
 * @license https://rosgear.ru/license/
 */
 
return [
    /** {@see \Ge\I18n\Formatter} */
    // формат информации
    'B' => 'B',
    'GB' => 'GB',
    'GiB' => 'GiB',
    'KB' => 'KB',
    'KiB' => 'KiB',
    'MB' => 'MB',
    'MiB' => 'MiB',
    'PB' => 'PB',
    'PiB' => 'PiB',
    'TB' => 'TB',
    'TiB' => 'TiB',
    // плюрал информации
    '{n, plural, =1{byte} other{bytes}}' => '{n, plural, =1{byte} other{bytes}}',
    '{n, plural, =1{gibibyte} other{gibibytes}}' => '{n, plural, =1{gibibyte} other{gibibytes}}',
    '{n, plural, =1{gigabyte} other{gigabytes}}' => '{n, plural, =1{gigabyte} other{gigabytes}}',
    '{n, plural, =1{kibibyte} other{kibibytes}}' => '{n, plural, =1{kibibyte} other{kibibytes}}',
    '{n, plural, =1{kilobyte} other{kilobytes}}' => '{n, plural, =1{kilobyte} other{kilobytes}}',
    '{n, plural, =1{mebibyte} other{mebibytes}}' => '{n, plural, =1{mebibyte} other{mebibytes}}',
    '{n, plural, =1{megabyte} other{megabytes}}' => '{n, plural, =1{megabyte} other{megabytes}}',
    '{n, plural, =1{pebibyte} other{pebibytes}}' => '{n, plural, =1{pebibyte} other{pebibytes}}',
    '{n, plural, =1{petabyte} other{petabytes}}' => '{n, plural, =1{petabyte} other{petabytes}}',
    '{n, plural, =1{tebibyte} other{tebibytes}}' => '{n, plural, =1{tebibyte} other{tebibytes}}',
    '{n, plural, =1{terabyte} other{terabytes}}' => '{n, plural, =1{terabyte} other{terabytes}}',
    // плюрал даты и времени
    '{n, plural, =1{1 day} other{# days}}' => '{n, plural, one{# giorno} few{# giorno} many{# giorni} other{# giorno}}',
    '{n, plural, =1{1 hour} other{# hours}}' => '{n, plural, one{# tempo} few{# ore} many{# ore} other{# ore}}',
    '{n, plural, =1{1 minute} other{# minutes}}' => '{n, plural, one{# minuti} few{# minuti} many{# minuti} other{# minuti}}',
    '{n, plural, =1{1 month} other{# months}}' => '{n, plural, one{# mese} few{# mesi} many{# mesi} other{# mesi}}',
    '{n, plural, =1{1 second} other{# seconds}}' => '{n, plural, one{# un secondo} few{# secondi} many{# secondi} other{# secondi}}',
    '{n, plural, =1{1 year} other{# years}}' => '{n, plural, one{# anno} few{# anno} many{# anni} other{# anno}}',
    '{n, plural, =1{a day} other{# days}} ago' => '{n, plural, =1{giorno} one{# giorno} few{# giorno} many{# giorni} other{# giorno}} fa',
    '{n, plural, =1{a minute} other{# minutes}} ago' => '{n, plural, =1{un minuto} one{# un minuto} few{# minuti} many{# minuti} other{# minuti}} fa',
    '{n, plural, =1{a month} other{# months}} ago' => '{n, plural, =1{mese} one{# mese} few{# mesi} many{# mesi} other{# mesi}} fa',
    '{n, plural, =1{a second} other{# seconds}} ago' => '{n, plural, =1{secondo} one{# secondo} few{# secondi} many{# secondi} other{# secondi}} fa',
    '{n, plural, =1{a year} other{# years}} ago' => '{n, plural, =1{anno} one{# anno} few{# anno} many{# anni} other{# anno}} fa',
    '{n, plural, =1{an hour} other{# hours}} ago' => '{n, plural, =1{tempo} one{# tempo} few{# ore} many{# ore} other{# ore}} fa',
    //  плюрал даты и времени (условие)
    'in {n, plural, =1{a day} other{# days}}' => 'attraverso {n, plural, =1{giorno} one{# giorno} few{# giorno} many{# giorni} other{# giorno}}',
    'in {n, plural, =1{a minute} other{# minutes}}' => 'attraverso {n, plural, =1{un minuto} one{# un minuto} few{# minuti} many{# minuti} other{# minuti}}',
    'in {n, plural, =1{a month} other{# months}}' => 'attraverso {n, plural, =1{mese} one{# mese} few{# mesi} many{# mesi} other{# mesi}}',
    'in {n, plural, =1{a second} other{# seconds}}' => 'attraverso {n, plural, =1{secondo} one{# secondo} few{# secondi} many{# secondi} other{# secondi}}',
    'in {n, plural, =1{a year} other{# years}}' => 'attraverso {n, plural, =1{anno} one{# anno} few{# anno} many{# anni} other{# anno}}',
    'in {n, plural, =1{an hour} other{# hours}}' => 'attraverso {n, plural, =1{tempo} one{# tempo} few{# ore} many{# ore} other{# ore}}'
];
