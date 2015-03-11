<?php 

$data = array (
  'main' => 
  array (
    'el' => 
    array (
      'numbers' => 
      array (
        'defaultNumberingSystem' => 'latn',
        'otherNumberingSystems' => 
        array (
          'native' => 'latn',
          'traditional' => 'grek',
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
          'exponential' => 'e',
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
              '1000-count-one' => '0 χιλιάδα',
              '1000-count-other' => '0 χιλιάδες',
              '10000-count-one' => '00 χιλιάδες',
              '10000-count-other' => '00 χιλιάδες',
              '100000-count-one' => '000 χιλιάδες',
              '100000-count-other' => '000 χιλιάδες',
              '1000000-count-one' => '0 εκατομμύριο',
              '1000000-count-other' => '0 εκατομμύρια',
              '10000000-count-one' => '00 εκατομμύρια',
              '10000000-count-other' => '00 εκατομμύρια',
              '100000000-count-one' => '000 εκατομμύρια',
              '100000000-count-other' => '000 εκατομμύρια',
              '1000000000-count-one' => '0 δισεκατομμύριο',
              '1000000000-count-other' => '0 δισεκατομμύρια',
              '10000000000-count-one' => '00 δισεκατομμύρια',
              '10000000000-count-other' => '00 δισεκατομμύρια',
              '100000000000-count-one' => '000 δισεκατομμύρια',
              '100000000000-count-other' => '000 δισεκατομμύρια',
              '1000000000000-count-one' => '0 τρισεκατομμύριο',
              '1000000000000-count-other' => '0 τρισεκατομμύρια',
              '10000000000000-count-one' => '00 τρισεκατομμύρια',
              '10000000000000-count-other' => '00 τρισεκατομμύρια',
              '100000000000000-count-one' => '000 τρισεκατομμύρια',
              '100000000000000-count-other' => '000 τρισεκατομμύρια',
            ),
          ),
          'short' => 
          array (
            'decimalFormat' => 
            array (
              '1000-count-one' => '0 χιλ\'.\'',
              '1000-count-other' => '0 χιλ\'.\'',
              '10000-count-one' => '00 χιλ\'.\'',
              '10000-count-other' => '00 χιλ\'.\'',
              '100000-count-one' => '000 χιλ\'.\'',
              '100000-count-other' => '000 χιλ\'.\'',
              '1000000-count-one' => '0 εκ\'.\'',
              '1000000-count-other' => '0 εκ\'.\'',
              '10000000-count-one' => '00 εκ\'.\'',
              '10000000-count-other' => '00 εκ\'.\'',
              '100000000-count-one' => '000 εκ\'.\'',
              '100000000-count-other' => '000 εκ\'.\'',
              '1000000000-count-one' => '0 δισ\'.\'',
              '1000000000-count-other' => '0 δισ\'.\'',
              '10000000000-count-one' => '00 δισ\'.\'',
              '10000000000-count-other' => '00 δισ\'.\'',
              '100000000000-count-one' => '000 δισ\'.\'',
              '100000000000-count-other' => '000 δισ\'.\'',
              '1000000000000-count-one' => '0 τρισ\'.\'',
              '1000000000000-count-other' => '0 τρισ\'.\'',
              '10000000000000-count-one' => '00 τρισ\'.\'',
              '10000000000000-count-other' => '00 τρισ\'.\'',
              '100000000000000-count-one' => '000 τρισ\'.\'',
              '100000000000000-count-other' => '000 τρισ\'.\'',
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
          'accounting' => '¤#,##0.00;(¤#,##0.00)',
          'standard' => '#,##0.00 ¤',
          'unitPattern-count-one' => '{0} {1}',
          'unitPattern-count-other' => '{0} {1}',
        ),
        'miscPatterns-numberSystem-latn' => 
        array (
          'atLeast' => '{0}+',
          'range' => '{0}–{1}',
        ),
      ),
    ),
  ),
);

return $data;
