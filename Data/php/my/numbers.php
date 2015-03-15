<?php 

return [
  'numbers' => [
    'defaultNumberingSystem' => 'mymr',
    'otherNumberingSystems' => [
      'native' => 'mymr',
    ],
    'minimumGroupingDigits' => '3',
    'symbols-numberSystem-latn' => [
      'decimal' => '.',
      'group' => ',',
      'list' => ';',
      'percentSign' => '%',
      'plusSign' => '+',
      'minusSign' => '-',
      'exponential' => 'E',
      'superscriptingExponent' => '×',
      'perMille' => '‰',
      'infinity' => '∞',
      'nan' => 'ဂဏန်းမဟုတ်သော',
      'timeSeparator' => ':',
    ],
    'symbols-numberSystem-mymr' => [
      'decimal' => '.',
      'group' => ',',
      'list' => '၊',
      'percentSign' => '%',
      'plusSign' => '+',
      'minusSign' => '-',
      'exponential' => 'E',
      'superscriptingExponent' => '×',
      'perMille' => '‰',
      'infinity' => '∞',
      'nan' => 'ဂဏန်းမဟုတ်သော',
      'timeSeparator' => ':',
    ],
    'decimalFormats-numberSystem-latn' => [
      'standard' => '#,##0.###',
      'long' => [
        'decimalFormat' => [
          '1000-count-other' => '0ထောင်',
          '10000-count-other' => '0သောင်း',
          '100000-count-other' => '0သိန်း',
          '1000000-count-other' => '0သန်း',
          '10000000-count-other' => '0ကုဋေ',
          '100000000-count-other' => '00ကုဋေ',
          '1000000000-count-other' => '000ကုဋေ',
          '10000000000-count-other' => '0000ကုဋေ',
          '100000000000-count-other' => '00000ကုဋေ',
          '1000000000000-count-other' => '000000ကုဋေ',
          '10000000000000-count-other' => '0000000ကုဋေ',
          '100000000000000-count-other' => '0ကောဋိ',
        ],
      ],
      'short' => [
        'decimalFormat' => [
          '1000-count-other' => '0ထောင်',
          '10000-count-other' => '0သောင်း',
          '100000-count-other' => '0သိန်း',
          '1000000-count-other' => '0သန်း',
          '10000000-count-other' => '0ကုဋေ',
          '100000000-count-other' => '00ကုဋေ',
          '1000000000-count-other' => 'ကုဋေ000',
          '10000000000-count-other' => 'ကုဋေ0000',
          '100000000000-count-other' => '0000ကုဋေ',
          '1000000000000-count-other' => 'ကုဋေ0သိန်း',
          '10000000000000-count-other' => 'ကုဋေ0သန်း',
          '100000000000000-count-other' => '0ကောဋိ',
        ],
      ],
    ],
    'decimalFormats-numberSystem-mymr' => [
      'standard' => '#,##0.###',
      'long' => [
        'decimalFormat' => [
          '1000-count-other' => '0ထောင်',
          '10000-count-other' => '0သောင်း',
          '100000-count-other' => '0သိန်း',
          '1000000-count-other' => '0သန်း',
          '10000000-count-other' => '0ကုဋေ',
          '100000000-count-other' => '00ကုဋေ',
          '1000000000-count-other' => '000ကုဋေ',
          '10000000000-count-other' => '0000ကုဋေ',
          '100000000000-count-other' => '00000ကုဋေ',
          '1000000000000-count-other' => '000000ကုဋေ',
          '10000000000000-count-other' => '0000000ကုဋေ',
          '100000000000000-count-other' => '0ကောဋိ',
        ],
      ],
      'short' => [
        'decimalFormat' => [
          '1000-count-other' => '0ထောင်',
          '10000-count-other' => '0သောင်း',
          '100000-count-other' => '0သိန်း',
          '1000000-count-other' => '0သန်း',
          '10000000-count-other' => '0ကုဋေ',
          '100000000-count-other' => '00ကုဋေ',
          '1000000000-count-other' => 'ကုဋေ000',
          '10000000000-count-other' => 'ကုဋေ0000',
          '100000000000-count-other' => '0000ကုဋေ',
          '1000000000000-count-other' => 'ကုဋေ0သိန်း',
          '10000000000000-count-other' => 'ကုဋေ0သန်း',
          '100000000000000-count-other' => '0ကောဋိ',
        ],
      ],
    ],
    'scientificFormats-numberSystem-latn' => [
      'standard' => '#E0',
    ],
    'scientificFormats-numberSystem-mymr' => [
      'standard' => '#E0',
    ],
    'percentFormats-numberSystem-latn' => [
      'standard' => '#,##0%',
    ],
    'percentFormats-numberSystem-mymr' => [
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
      'accounting' => '¤ #,##0.00',
      'standard' => '¤ #,##0.00',
      'unitPattern-count-other' => '{0} {1}',
    ],
    'currencyFormats-numberSystem-mymr' => [
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
      'accounting' => '¤ #,##0.00',
      'standard' => '¤ #,##0.00',
      'unitPattern-count-other' => '{0} {1}',
    ],
    'miscPatterns-numberSystem-latn' => [
      'atLeast' => '⩾{0}',
      'range' => '{0}–{1}',
    ],
    'miscPatterns-numberSystem-mymr' => [
      'atLeast' => '⩾{0}',
      'range' => '{0}–{1}',
    ],
  ],
];
