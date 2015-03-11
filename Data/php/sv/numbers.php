<?php 

$data = array (
  'main' => 
  array (
    'sv' => 
    array (
      'numbers' => 
      array (
        'defaultNumberingSystem' => 'latn',
        'otherNumberingSystems' => 
        array (
          'native' => 'latn',
        ),
        'minimumGroupingDigits' => '1',
        'symbols-numberSystem-latn' => 
        array (
          'decimal' => ',',
          'group' => ' ',
          'list' => ';',
          'percentSign' => '%',
          'plusSign' => '+',
          'minusSign' => '−',
          'exponential' => '×10^',
          'superscriptingExponent' => '·',
          'perMille' => '‰',
          'infinity' => '∞',
          'nan' => '¤¤¤',
          'timeSeparator' => ':',
        ),
        'decimalFormats-numberSystem-latn' => 
        array (
          'standard' => '#,##0.###',
          'long' => 
          array (
            'decimalFormat' => 
            array (
              '1000-count-one' => '0 tusen',
              '1000-count-other' => '0 tusen',
              '10000-count-one' => '00 tusen',
              '10000-count-other' => '00 tusen',
              '100000-count-one' => '000 tusen',
              '100000-count-other' => '000 tusen',
              '1000000-count-one' => '0 miljon',
              '1000000-count-other' => '0 miljoner',
              '10000000-count-one' => '00 miljon',
              '10000000-count-other' => '00 miljoner',
              '100000000-count-one' => '000 miljoner',
              '100000000-count-other' => '000 miljoner',
              '1000000000-count-one' => '0 miljard',
              '1000000000-count-other' => '0 miljarder',
              '10000000000-count-one' => '00 miljarder',
              '10000000000-count-other' => '00 miljarder',
              '100000000000-count-one' => '000 miljarder',
              '100000000000-count-other' => '000 miljarder',
              '1000000000000-count-one' => '0 biljon',
              '1000000000000-count-other' => '0 biljoner',
              '10000000000000-count-one' => '00 biljoner',
              '10000000000000-count-other' => '00 biljoner',
              '100000000000000-count-one' => '000 biljoner',
              '100000000000000-count-other' => '000 biljoner',
            ),
          ),
          'short' => 
          array (
            'decimalFormat' => 
            array (
              '1000-count-one' => '0 tn',
              '1000-count-other' => '0 tn',
              '10000-count-one' => '00 tn',
              '10000-count-other' => '00 tn',
              '100000-count-one' => '000 tn',
              '100000-count-other' => '000 tn',
              '1000000-count-one' => '0 mn',
              '1000000-count-other' => '0 mn',
              '10000000-count-one' => '00 mn',
              '10000000-count-other' => '00 mn',
              '100000000-count-one' => '000 mn',
              '100000000-count-other' => '000 mn',
              '1000000000-count-one' => '0 md',
              '1000000000-count-other' => '0 md',
              '10000000000-count-one' => '00 md',
              '10000000000-count-other' => '00 md',
              '100000000000-count-one' => '000 md',
              '100000000000-count-other' => '000 md',
              '1000000000000-count-one' => '0 bn',
              '1000000000000-count-other' => '0 bn',
              '10000000000000-count-one' => '00 bn',
              '10000000000000-count-other' => '00 bn',
              '100000000000000-count-one' => '000 bn',
              '100000000000000-count-other' => '000 bn',
            ),
          ),
        ),
        'scientificFormats-numberSystem-latn' => 
        array (
          'standard' => '#E0',
        ),
        'percentFormats-numberSystem-latn' => 
        array (
          'standard' => '#,##0 %',
        ),
        'currencyFormats-numberSystem-latn' => 
        array (
          'currencySpacing' => 
          array (
            'beforeCurrency' => 
            array (
              'currencyMatch' => '[:^S:]',
              'surroundingMatch' => '[:digit:]',
              'insertBetween' => ' ',
            ),
            'afterCurrency' => 
            array (
              'currencyMatch' => '[:^S:]',
              'surroundingMatch' => '[:digit:]',
              'insertBetween' => ' ',
            ),
          ),
          'accounting' => '#,##0.00 ¤',
          'standard' => '#,##0.00 ¤',
          'unitPattern-count-one' => '{0} {1}',
          'unitPattern-count-other' => '{0} {1}',
        ),
        'miscPatterns-numberSystem-latn' => 
        array (
          'atLeast' => '⩾{0}',
          'range' => '{0}‒{1}',
        ),
      ),
    ),
  ),
);

return $data;
