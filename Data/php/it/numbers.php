<?php 

$data = array (
  'main' => 
  array (
    'it' => 
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
        ),
        'decimalFormats-numberSystem-latn' => 
        array (
          'standard' => '#,##0.###',
          'long' => 
          array (
            'decimalFormat' => 
            array (
              '1000-count-one' => '0 migliaio',
              '1000-count-other' => '0 migliaia',
              '10000-count-one' => '00 migliaia',
              '10000-count-other' => '00 migliaia',
              '100000-count-one' => '000 migliaia',
              '100000-count-other' => '000 migliaia',
              '1000000-count-one' => '0 milione',
              '1000000-count-other' => '0 milioni',
              '10000000-count-one' => '00 milioni',
              '10000000-count-other' => '00 milioni',
              '100000000-count-one' => '000 milioni',
              '100000000-count-other' => '000 milioni',
              '1000000000-count-one' => '0 miliardo',
              '1000000000-count-other' => '0 miliardi',
              '10000000000-count-one' => '00 miliardi',
              '10000000000-count-other' => '00 miliardi',
              '100000000000-count-one' => '000 miliardi',
              '100000000000-count-other' => '000 miliardi',
              '1000000000000-count-one' => '0 migliaio di miliardi',
              '1000000000000-count-other' => '0 migliaia di miliardi',
              '10000000000000-count-one' => '00 migliaia di miliardi',
              '10000000000000-count-other' => '00 migliaia di miliardi',
              '100000000000000-count-one' => '000 migliaia di miliardi',
              '100000000000000-count-other' => '000 migliaia di miliardi',
            ),
          ),
          'short' => 
          array (
            'decimalFormat' => 
            array (
              '1000-count-one' => '0',
              '1000-count-other' => '0',
              '10000-count-one' => '0',
              '10000-count-other' => '0',
              '100000-count-one' => '0',
              '100000-count-other' => '0',
              '1000000-count-one' => '0 Mln',
              '1000000-count-other' => '0 Mln',
              '10000000-count-one' => '00 Mln',
              '10000000-count-other' => '00 Mln',
              '100000000-count-one' => '000 Mln',
              '100000000-count-other' => '000 Mln',
              '1000000000-count-one' => '0 Mld',
              '1000000000-count-other' => '0 Mld',
              '10000000000-count-one' => '00 Mld',
              '10000000000-count-other' => '00 Mld',
              '100000000000-count-one' => '000 Mld',
              '100000000000-count-other' => '000 Mld',
              '1000000000000-count-one' => '0 Bln',
              '1000000000000-count-other' => '0 Bln',
              '10000000000000-count-one' => '00 Bln',
              '10000000000000-count-other' => '00 Bln',
              '100000000000000-count-one' => '000 Bln',
              '100000000000000-count-other' => '000 Bln',
            ),
          ),
        ),
        'scientificFormats-numberSystem-latn' => 
        array (
          'standard' => '#E0',
        ),
        'percentFormats-numberSystem-latn' => 
        array (
          'standard' => '#,##0%',
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
          'range' => '{0}-{1}',
        ),
      ),
    ),
  ),
);

return $data;
