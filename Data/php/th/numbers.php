<?php
$data = array(
    'main' => array(
        'th' => array(
            'numbers' => array(
                'defaultNumberingSystem' => 'latn',
                'otherNumberingSystems' => array(
                    'native' => 'thai'
                ),
                'symbols-numberSystem-latn' => array(
                    'decimal' => '.',
                    'group' => ',',
                    'list' => ';',
                    'percentSign' => '%',
                    'plusSign' => '+',
                    'minusSign' => '-',
                    'exponential' => 'E',
                    'perMille' => '‰',
                    'infinity' => '∞',
                    'nan' => 'NaN'
                ),
                'symbols-numberSystem-thai' => array(
                    'decimal' => '.',
                    'group' => ',',
                    'list' => ';',
                    'percentSign' => '%',
                    'plusSign' => '+',
                    'minusSign' => '-',
                    'exponential' => 'E',
                    'perMille' => '‰',
                    'infinity' => '∞',
                    'nan' => 'NaN'
                ),
                'decimalFormats-numberSystem-latn' => array(
                    'standard' => array(
                        'decimalFormat' => array(
                            'pattern' => '#,##0.###'
                        )
                    ),
                    'long' => array(
                        'decimalFormat' => array(
                            '1000-count-other' => '0 พัน',
                            '10000-count-other' => '0 หมื่น',
                            '100000-count-other' => '0 แสน',
                            '1000000-count-other' => '0 ล้าน',
                            '10000000-count-other' => '00 ล้าน',
                            '100000000-count-other' => '000 ล้าน',
                            '1000000000-count-other' => '0 พันล้าน',
                            '10000000000-count-other' => '0 หมื่นล้าน',
                            '100000000000-count-other' => '0 แสนล้าน',
                            '1000000000000-count-other' => '0 ล้านล้าน',
                            '10000000000000-count-other' => '00 ล้านล้าน',
                            '100000000000000-count-other' => '000 ล้านล้าน'
                        )
                    ),
                    'short' => array(
                        'decimalFormat' => array(
                            '1000-count-other' => '0 พ\'.\'',
                            '10000-count-other' => '0 ม\'.\'',
                            '100000-count-other' => '0 ส\'.\'',
                            '1000000-count-other' => '0 ล\'.\'',
                            '10000000-count-other' => '00 ล\'.\'',
                            '100000000-count-other' => '000 ล\'.\'',
                            '1000000000-count-other' => '0 พ\'.\'ล\'.\'',
                            '10000000000-count-other' => '0 ม\'.\'ล\'.\'',
                            '100000000000-count-other' => '0 ส\'.\'ล\'.\'',
                            '1000000000000-count-other' => '0 ล\'.\'ล\'.\'',
                            '10000000000000-count-other' => '00 ล\'.\'ล\'.\'',
                            '100000000000000-count-other' => '000 ล\'.\'ล\'.\''
                        )
                    )
                ),
                'decimalFormats-numberSystem-thai' => array(
                    'standard' => array(
                        'decimalFormat' => array(
                            'pattern' => '#,##0.###'
                        )
                    ),
                    'long' => array(
                        'decimalFormat' => array(
                            '1000-count-other' => '0 พัน',
                            '10000-count-other' => '0 หมื่น',
                            '100000-count-other' => '0 แสน',
                            '1000000-count-other' => '0 ล้าน',
                            '10000000-count-other' => '00 ล้าน',
                            '100000000-count-other' => '000 ล้าน',
                            '1000000000-count-other' => '0 พันล้าน',
                            '10000000000-count-other' => '0 หมื่นล้าน',
                            '100000000000-count-other' => '0 แสนล้าน',
                            '1000000000000-count-other' => '0 ล้านล้าน',
                            '10000000000000-count-other' => '00 ล้านล้าน',
                            '100000000000000-count-other' => '000 ล้านล้าน'
                        )
                    ),
                    'short' => array(
                        'decimalFormat' => array(
                            '1000-count-other' => '0 พ\'.\'',
                            '10000-count-other' => '0 ม\'.\'',
                            '100000-count-other' => '0 ส\'.\'',
                            '1000000-count-other' => '0 ล\'.\'',
                            '10000000-count-other' => '00 ล\'.\'',
                            '100000000-count-other' => '000 ล\'.\'',
                            '1000000000-count-other' => '0 พ\'.\'ล\'.\'',
                            '10000000000-count-other' => '0 ม\'.\'ล\'.\'',
                            '100000000000-count-other' => '0 ส\'.\'ล\'.\'',
                            '1000000000000-count-other' => '0 ล\'.\'ล\'.\'',
                            '10000000000000-count-other' => '00 ล\'.\'ล\'.\'',
                            '100000000000000-count-other' => '000 ล\'.\'ล\'.\''
                        )
                    )
                ),
                'scientificFormats-numberSystem-latn' => array(
                    'standard' => array(
                        'scientificFormat' => array(
                            'pattern' => '#E0'
                        )
                    )
                ),
                'scientificFormats-numberSystem-thai' => array(
                    'standard' => array(
                        'scientificFormat' => array(
                            'pattern' => '#E0'
                        )
                    )
                ),
                'percentFormats-numberSystem-latn' => array(
                    'standard' => array(
                        'percentFormat' => array(
                            'pattern' => '#,##0%'
                        )
                    )
                ),
                'percentFormats-numberSystem-thai' => array(
                    'standard' => array(
                        'percentFormat' => array(
                            'pattern' => '#,##0%'
                        )
                    )
                ),
                'currencyFormats-numberSystem-latn' => array(
                    'currencySpacing' => array(
                        'beforeCurrency' => array(
                            'currencyMatch' => '[:^S:]',
                            'surroundingMatch' => '[:digit:]',
                            'insertBetween' => ' '
                        ),
                        'afterCurrency' => array(
                            'currencyMatch' => '[:^S:]',
                            'surroundingMatch' => '[:digit:]',
                            'insertBetween' => ' '
                        )
                    ),
                    'standard' => array(
                        'currencyFormat' => array(
                            'pattern' => '¤#,##0.00;(¤#,##0.00)'
                        )
                    ),
                    'unitPattern-count-other' => '{0} {1}'
                ),
                'currencyFormats-numberSystem-thai' => array(
                    'currencySpacing' => array(
                        'beforeCurrency' => array(
                            'currencyMatch' => '[:^S:]',
                            'surroundingMatch' => '[:digit:]',
                            'insertBetween' => ' '
                        ),
                        'afterCurrency' => array(
                            'currencyMatch' => '[:^S:]',
                            'surroundingMatch' => '[:digit:]',
                            'insertBetween' => ' '
                        )
                    ),
                    'standard' => array(
                        'currencyFormat' => array(
                            'pattern' => '¤#,##0.00;(¤#,##0.00)'
                        )
                    ),
                    'unitPattern-count-other' => '{0} {1}'
                )
            )
        )
    )
);

return $data;