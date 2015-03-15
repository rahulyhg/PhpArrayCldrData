<?php 

return [
  'numbers' => [
    'defaultNumberingSystem' => 'latn',
    'otherNumberingSystems' => [
      'native' => 'latn',
    ],
    'minimumGroupingDigits' => '1',
    'symbols-numberSystem-latn' => [
      'decimal' => ',',
      'group' => '.',
      'list' => ';',
      'percentSign' => '%',
      'plusSign' => '+',
      'minusSign' => '-',
      'exponential' => 'E',
      'superscriptingExponent' => '×',
      'perMille' => '‰',
      'infinity' => '∞',
      'nan' => 'NaN',
      'timeSeparator' => ':',
    ],
    'decimalFormats-numberSystem-latn' => [
      'standard' => '#,##0.###',
      'long' => [
        'decimalFormat' => [
          '1000-count-one' => '0 hiljada',
          '1000-count-few' => '0 hiljade',
          '1000-count-other' => '0 hiljada',
          '10000-count-one' => '00 hiljada',
          '10000-count-few' => '00 hiljade',
          '10000-count-other' => '00 hiljada',
          '100000-count-one' => '000 hiljada',
          '100000-count-few' => '000 hiljade',
          '100000-count-other' => '000 hiljada',
          '1000000-count-one' => '0 milion',
          '1000000-count-few' => '0 miliona',
          '1000000-count-other' => '0 miliona',
          '10000000-count-one' => '00 milion',
          '10000000-count-few' => '00 miliona',
          '10000000-count-other' => '00 miliona',
          '100000000-count-one' => '000 milion',
          '100000000-count-few' => '000 miliona',
          '100000000-count-other' => '000 miliona',
          '1000000000-count-one' => '0 milijarda',
          '1000000000-count-few' => '0 milijarde',
          '1000000000-count-other' => '0 milijardi',
          '10000000000-count-one' => '00 milijarda',
          '10000000000-count-few' => '00 milijarde',
          '10000000000-count-other' => '00 milijardi',
          '100000000000-count-one' => '000 milijarda',
          '100000000000-count-few' => '000 milijarde',
          '100000000000-count-other' => '000 milijardi',
          '1000000000000-count-one' => '0 trilion',
          '1000000000000-count-few' => '0 triliona',
          '1000000000000-count-other' => '0 triliona',
          '10000000000000-count-one' => '00 trilion',
          '10000000000000-count-few' => '00 triliona',
          '10000000000000-count-other' => '00 triliona',
          '100000000000000-count-one' => '000 trilion',
          '100000000000000-count-few' => '000 triliona',
          '100000000000000-count-other' => '000 triliona',
        ],
      ],
      'short' => [
        'decimalFormat' => [
          '1000-count-one' => '0 hilj\'.\'',
          '1000-count-few' => '0 hilj\'.\'',
          '1000-count-other' => '0 hilj\'.\'',
          '10000-count-one' => '00 hilj\'.\'',
          '10000-count-few' => '00 hilj\'.\'',
          '10000-count-other' => '00 hilj\'.\'',
          '100000-count-one' => '000 hilj\'.\'',
          '100000-count-few' => '000 hilj\'.\'',
          '100000-count-other' => '000 hilj\'.\'',
          '1000000-count-one' => '0 mil\'.\'',
          '1000000-count-few' => '0 mil\'.\'',
          '1000000-count-other' => '0 mil\'.\'',
          '10000000-count-one' => '00 mil\'.\'',
          '10000000-count-few' => '00 mil\'.\'',
          '10000000-count-other' => '00 mil\'.\'',
          '100000000-count-one' => '000 mil\'.\'',
          '100000000-count-few' => '000 mil\'.\'',
          '100000000-count-other' => '000 mil\'.\'',
          '1000000000-count-one' => '0 mlrd\'.\'',
          '1000000000-count-few' => '0 mlrd\'.\'',
          '1000000000-count-other' => '0 mlrd\'.\'',
          '10000000000-count-one' => '00 mlrd\'.\'',
          '10000000000-count-few' => '00 mlrd\'.\'',
          '10000000000-count-other' => '00 mlrd\'.\'',
          '100000000000-count-one' => '000 mlrd\'.\'',
          '100000000000-count-few' => '000 mlrd\'.\'',
          '100000000000-count-other' => '000 mlrd\'.\'',
          '1000000000000-count-one' => '0 bil\'.\'',
          '1000000000000-count-few' => '0 bil\'.\'',
          '1000000000000-count-other' => '0 bil\'.\'',
          '10000000000000-count-one' => '00 bil\'.\'',
          '10000000000000-count-few' => '00 bil\'.\'',
          '10000000000000-count-other' => '00 bil\'.\'',
          '100000000000000-count-one' => '000 bil\'.\'',
          '100000000000000-count-few' => '000 bil\'.\'',
          '100000000000000-count-other' => '000 bil\'.\'',
        ],
      ],
    ],
    'scientificFormats-numberSystem-latn' => [
      'standard' => '#E0',
    ],
    'percentFormats-numberSystem-latn' => [
      'standard' => '#,##0%',
    ],
    'currencyFormats-numberSystem-latn' => [
      'currencySpacing' => [
        'beforeCurrency' => [
          'currencyMatch' => '[:^S:]',
          'surroundingMatch' => '[:digit:]',
          'insertBetween' => ' ',
        ],
        'afterCurrency' => [
          'currencyMatch' => '[:^S:]',
          'surroundingMatch' => '[:digit:]',
          'insertBetween' => ' ',
        ],
      ],
      'accounting' => '#,##0.00 ¤;(#,##0.00 ¤]',
      'standard' => '#,##0.00 ¤',
      'unitPattern-count-one' => '{0} {1}',
      'unitPattern-count-few' => '{0} {1}',
      'unitPattern-count-other' => '{0} {1}',
    ],
    'miscPatterns-numberSystem-latn' => [
      'atLeast' => '{0}+',
      'range' => '{0}–{1}',
    ],
  ],
];
