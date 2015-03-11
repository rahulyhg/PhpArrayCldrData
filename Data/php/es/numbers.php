<?php 

$data = array (
  'main' => 
  array (
    'es' => 
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
              '1000-count-one' => '0 mil',
              '1000-count-other' => '0 mil',
              '10000-count-one' => '00 mil',
              '10000-count-other' => '00 mil',
              '100000-count-one' => '000 mil',
              '100000-count-other' => '000 mil',
              '1000000-count-one' => '0 millón',
              '1000000-count-other' => '0 millones',
              '10000000-count-one' => '00 millones',
              '10000000-count-other' => '00 millones',
              '100000000-count-one' => '000 millones',
              '100000000-count-other' => '000 millones',
              '1000000000-count-one' => '0 mil millones',
              '1000000000-count-other' => '0 mil millones',
              '10000000000-count-one' => '00 mil millones',
              '10000000000-count-other' => '00 mil millones',
              '100000000000-count-one' => '000 mil millones',
              '100000000000-count-other' => '000 mil millones',
              '1000000000000-count-one' => '0 billón',
              '1000000000000-count-other' => '0 billones',
              '10000000000000-count-one' => '00 billones',
              '10000000000000-count-other' => '00 billones',
              '100000000000000-count-one' => '000 billones',
              '100000000000000-count-other' => '000 billones',
            ),
          ),
          'short' => 
          array (
            'decimalFormat' => 
            array (
              '1000-count-one' => '0K',
              '1000-count-other' => '0K',
              '10000-count-one' => '00K',
              '10000-count-other' => '00K',
              '100000-count-one' => '000K',
              '100000-count-other' => '000K',
              '1000000-count-one' => '0M',
              '1000000-count-other' => '0M',
              '10000000-count-one' => '00M',
              '10000000-count-other' => '00M',
              '100000000-count-one' => '000M',
              '100000000-count-other' => '000M',
              '1000000000-count-one' => '0000M',
              '1000000000-count-other' => '0000M',
              '10000000000-count-one' => '00MRD',
              '10000000000-count-other' => '00MRD',
              '100000000000-count-one' => '000MRD',
              '100000000000-count-other' => '000MRD',
              '1000000000000-count-one' => '0B',
              '1000000000000-count-other' => '0B',
              '10000000000000-count-one' => '00B',
              '10000000000000-count-other' => '00B',
              '100000000000000-count-one' => '000B',
              '100000000000000-count-other' => '000B',
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
          'atLeast' => 'Más de {0}',
          'range' => '{0}-{1}',
        ),
      ),
    ),
  ),
);

return $data;
