<?php

return [
    'attributeOrder' => ' _q type id choice key registry source target path day date version count lines characters before from to iso4217 mzone number time casing list uri digits rounding iso3166 hex request direction alternate backwards caseFirst caseLevel hiraganaQuarternary hiraganaQuaternary maxVariable variableTop normalization numeric strength elements element attributes attribute attributeValue contains multizone order other replacement scripts services territories territory aliases tzidVersion value values variant variants visibility alpha3 code end exclude fips10 gdp internet literacyPercent locales population writingPercent populationPercent officialStatus start used otherVersion typeVersion access after allowsParsing at bcp47 decexp desired indexSource numberSystem numbers oneway ordering percent priority radix rules supported tender territoryId yeartype cldrVersion grouping inLanguage inScript inTerritory match parent private reason reorder status cashDigits cashRounding allowed override preferred regions paths votes validSubLocales standard references alt draft ',
    'elementOrder' => ' ldml alternate approvalRequirement approvalRequirements attributeOrder attributes blockingItems calendarPreference calendarSystem casingData casingItem character character-fallback characterOrder codesByTerritory comment context coverageVariable coverageLevel cp dayPeriodRule dayPeriodRules deprecatedItems distinguishingItems elementOrder exception first_variable fractions hours identity indexSeparator compressedIndexSeparator indexRangePattern indexLabelBefore indexLabelAfter indexLabel info keyMap languageAlias languageCodes languageCoverage languageMatch languageMatches languagePopulation last_variable first_tertiary_ignorable last_tertiary_ignorable first_secondary_ignorable last_secondary_ignorable first_primary_ignorable last_primary_ignorable first_non_ignorable last_non_ignorable first_trailing last_trailing likelySubtag lineOrder mapKeys mapTypes mapZone numberingSystem parentLocale personList pluralRule pluralRules postCodeRegex primaryZone reference region scriptAlias scriptCoverage serialElements stopwordList substitute suppress suppression tRule telephoneCountryCode territoryAlias territoryCodes territoryCoverage currencyCodes  currencyCoverage timezone timezoneCoverage transform typeMap usesMetazone validity alias appendItem base beforeCurrency afterCurrency codePattern compoundUnit compoundUnitPattern contextTransform contextTransformUsage currencyMatch cyclicName cyclicNameContext cyclicNameSet cyclicNameWidth dateFormatItem day dayPeriod dayPeriodContext dayPeriodWidth defaultCollation defaultNumberingSystem deprecated distinguishing blocking coverageAdditions durationUnitPattern era eraNames eraAbbr eraNarrow exemplarCharacters ellipsis fallback field generic greatestDifference height hourFormat hoursFormat gmtFormat gmtZeroFormat intervalFormatFallback intervalFormatItem key listPattern listPatternPart localeDisplayNames layout contextTransforms localeDisplayPattern languages localePattern localeSeparator localeKeyTypePattern localizedPatternChars dateRangePattern calendars long measurementSystem measurementSystemName messages minDays firstDay month monthPattern monthPatternContext monthPatternWidth months monthNames monthAbbr monthPatterns days dayNames dayAbbr moreInformation native orientation inList inText otherNumberingSystems paperSize quarter quarters quotationStart quotationEnd alternateQuotationStart alternateQuotationEnd rbnfrule regionFormat fallbackFormat fallbackRegionFormat abbreviationFallback preferenceOrdering relativeTimePattern reset import p pc rule ruleset rulesetGrouping s sc scripts segmentation settings short commonlyUsed exemplarCity singleCountries default calendar collation currency currencyFormat currencySpacing currencyFormatLength dateFormat dateFormatLength dateTimeFormat dateTimeFormatLength availableFormats appendItems dayContext dayWidth decimalFormat decimalFormatLength intervalFormats monthContext monthWidth pattern displayName percentFormat percentFormatLength quarterContext quarterWidth relative relativeTime scientificFormat scientificFormatLength skipDefaultLocale defaultContent standard daylight stopwords indexLabels mapping suppress_contractions optimize cr rules surroundingMatch insertBetween symbol decimal group list percentSign nativeZeroDigit patternDigit plusSign minusSign exponential superscriptingExponent perMille infinity nan currencyDecimal currencyGroup symbols decimalFormats scientificFormats percentFormats currencyFormats currencies miscPatterns t tc q qc i ic extend territories timeFormat timeFormatLength traditional finance transformName type unit unitLength durationUnit unitPattern variable attributeValues variables segmentRules exceptions suppressions variantAlias variants keys types transformNames measurementSystemNames codePatterns version generation cldrVersion currencyData language script territory territoryContainment languageData territoryInfo postalCodeData calendarData calendarPreferenceData variant week am pm dayPeriods eras cyclicNameSets dateFormats timeFormats dateTimeFormats fields timeZoneNames weekData timeData measurementData timezoneData characters delimiters measurement dates numbers transforms units listPatterns collations posix segmentations rbnf metadata codeMappings parentLocales likelySubtags metazoneInfo mapTimezones plurals telephoneCodeData numberingSystems bcp47KeywordMappings gender references languageMatching dayPeriodRuleSet metaZones primaryZones weekendStart weekendEnd width windowsZones coverageLevels x yesstr nostr yesexpr noexpr zone metazone special zoneAlias zoneFormatting zoneItem supplementalData ',
    'serialElements' => ' attributeValues attributes base comment context exception extend i ic languageMatch last_non_ignorable last_secondary_ignorable last_tertiary_ignorable optimize p pc pluralRule rbnfrule reset rules ruleset s sc settings substitute suppress_contractions suppression t tRule tc variable x ',
    'suppress' => [
        0 => [
            'attributes' => [
                '_attribute' => '_q',
            ],
        ],
        1 => [
            'attributes' => [
                '_element' => 'collation',
                '_attributeValue' => 'standard',
                '_attribute' => 'type',
            ],
        ],
        2 => [
            'attributes' => [
                '_element' => 'currency',
                '_attributeValue' => 'standard',
                '_attribute' => 'type',
            ],
        ],
        3 => [
            'attributes' => [
                '_element' => 'dateFormat',
                '_attributeValue' => 'standard',
                '_attribute' => 'type',
            ],
        ],
        4 => [
            'attributes' => [
                '_element' => 'dateTimeFormat',
                '_attributeValue' => 'standard',
                '_attribute' => 'type',
            ],
        ],
        5 => [
            'attributes' => [
                '_element' => 'decimalFormat',
                '_attributeValue' => 'standard',
                '_attribute' => 'type',
            ],
        ],
        6 => [
            'attributes' => [
                '_element' => 'ldml',
                '_attribute' => 'version',
            ],
        ],
        7 => [
            'attributes' => [
                '_element' => 'orientation',
                '_attributeValue' => 'left-to-right',
                '_attribute' => 'characters',
            ],
        ],
        8 => [
            'attributes' => [
                '_element' => 'orientation',
                '_attributeValue' => 'top-to-bottom',
                '_attribute' => 'lines',
            ],
        ],
        9 => [
            'attributes' => [
                '_element' => 'pattern',
                '_attributeValue' => 'standard',
                '_attribute' => 'type',
            ],
        ],
        10 => [
            'attributes' => [
                '_element' => 'percentFormat',
                '_attributeValue' => 'standard',
                '_attribute' => 'type',
            ],
        ],
        11 => [
            'attributes' => [
                '_element' => 'scientificFormat',
                '_attributeValue' => 'standard',
                '_attribute' => 'type',
            ],
        ],
        12 => [
            'attributes' => [
                '_element' => 'timeFormat',
                '_attributeValue' => 'standard',
                '_attribute' => 'type',
            ],
        ],
        13 => [
            'attributes' => [
                '_element' => 'weekendEnd',
                '_attributeValue' => '24:00',
                '_attribute' => 'time',
            ],
        ],
        14 => [
            'attributes' => [
                '_element' => 'weekendStart',
                '_attributeValue' => '00:00',
                '_attribute' => 'time',
            ],
        ],
    ],
    'validity' => [
        0 => [
            'variable' => [
                '_value' => ' aa ab ace ach ada ady ae aeb af afh agq ain ak akk akz ale aln alt am an ang anp ar arc arn aro arp arq arw ary arz as asa ase ast av avk awa ay az azb ba bal ban bar bas bax bbc bbj bfd be bej bem bew bez bfq bg bho bi bik bin bjn bkm bla bm bn bo bpy bqi br bra brh brx bs bss bua bug bum byn byv ca cad car cay cch ce ceb cgg ch chb chg chk chm chn cho chp chr chy ckb co cop cps cr crh cs csb cu cv cy da dak dar dav de del den dgr din dje doi dsb dtp dua dum dv dyo dyu dz dzg ebu ee efi egl egy eka el elx en enm eo es esu et eu ewo ext fa fan fat ff fi fil fit fj fo fon fr frc frm fro frp frr frs fur fy ga gaa gag gan gay gba gbz gd gez gil gl glk gmh gn goh gom gon gor got grb grc gsw gu guc gur guz gv gwi ha hai hak haw he hi hif hil hit hmn ho hr hsb hsn ht hu hup hy hz ia iba ibb id ie ig ii ik ilo inh io is it iu izh ja jam jbo jgo jmc jpr jrb jut jv ka kaa kab kac kaj kam kaw kbd kbl kcg kde kea ken kfo kg kgp kha kho khq khw ki kiu kj kk kkj kl kln km kmb kn ko koi kok kos kpe kr krc kri krj krl kru ks ksb ksf ksh ku kum kut kv kw ky la lad lag lah lam lb lez lfn lg li lij liv lkt lmo ln lo lol loz lt ltg lu lua lui lun luo lus luy lv lzh lzz mad maf mag mai mak man mas mde mdf mdr men mer mfe mg mga mgh mgo mh mi mic min mk ml mn mnc mni moh mos mr mrj ms mt mua mul mus mwl mwr mwv my mye myv mzn na nan nap naq nb nd nds ne new ng nia niu njo nl nmg nn nnh no nog non nov nqo nr nso nus nv nwc ny nym nyn nyo nzi oc oj om or os osa ota pa pag pal pam pap pau pcd pdc pdt peo pfl phn pi pl pms pnt pon prg pro ps pt qu quc qug raj rap rar rgn rif rm rn ro rof rom root rtm ru rue rug rup rw rwk sa sad sah sam saq sas sat saz sba sbp sc scn sco sd sdc se see seh sei sel ses sg sga sgs sh shi shn shu si sid sk sl sli sly sm sma smj smn sms sn snk so sog sq sr srn srr ss ssy st stq su suk sus sux sv sw swb swc syc syr szl ta tcy te tem teo ter tet tg th ti tig tiv tk tkl tkr tl tlh tli tly tmh tn to tog tpi tr tru trv ts tsd tsi tt ttt tum tvl tw twq ty tyv tzm udm ug uga uk umb und ur uz vai ve vec vep vi vls vmf vo vot vro vun wa wae wal war was wo wuu xal xh xmf xog yao yap yav ybb yi yo yrl yue za zap zbl zea zen zgh zh zu zun zxx zza ',
                '_id' => '$language',
                '_type' => 'choice',
            ],
        ],
        1 => [
            'variable' => [
                '_value' => ' art-lojban cel-gaulish en-GB-oed i-ami i-bnn i-default i-enochian i-hak i-klingon i-lux i-mingo i-navajo i-pwn i-tao i-tay i-tsu no-bok no-nyn sgn-BE-FR sgn-BE-NL sgn-CH-DE zh-guoyu zh-hakka zh-min zh-min-nan zh-xiang ',
                '_id' => '$grandfathered',
                '_type' => 'choice',
            ],
        ],
        2 => [
            'variable' => [
                '_value' => ' 001 002 003 005 009 011 013 014 015 017 018 019 021 029 030 034 035 039 053 054 057 061 142 143 145 150 151 154 155 419 AC AD AE AF AG AI AL AM AO AQ AR AS AT AU AW AX AZ BA BB BD BE BF BG BH BI BJ BL BM BN BO BQ BR BS BT BV BW BY BZ CA CC CD CF CG CH CI CK CL CM CN CO CP CR CU CV CW CX CY CZ DE DG DJ DK DM DO DZ EA EC EE EG EH ER ES ET EU FI FJ FK FM FO FR GA GB GD GE GF GG GH GI GL GM GN GP GQ GR GS GT GU GW GY HK HM HN HR HT HU IC ID IE IL IM IN IO IQ IR IS IT JE JM JO JP KE KG KH KI KM KN KP KR KW KY KZ LA LB LC LI LK LR LS LT LU LV LY MA MC MD ME MF MG MH MK ML MM MN MO MP MQ MR MS MT MU MV MW MX MY MZ NA NC NE NF NG NI NL NO NP NR NU NZ OM PA PE PF PG PH PK PL PM PN PR PS PT PW PY QA QO RE RO RS RU RW SA SB SC SD SE SG SH SI SJ SK SL SM SN SO SR SS ST SV SX SY SZ TA TC TD TF TG TH TJ TK TL TM TN TO TR TT TV TW TZ UA UG UM US UY UZ VA VC VE VG VI VN VU WF WS XK YE YT ZA ZM ZW ZZ ',
                '_id' => '$territory',
                '_type' => 'choice',
            ],
        ],
        3 => [
            'variable' => [
                '_value' => ' Afak Aghb Arab Armi Armn Avst Bali Bamu Bass Batk Beng Blis Bopo Brah Brai Bugi Buhd Cakm Cans Cari Cham Cher Cirt Copt Cprt Cyrl Cyrs Deva Dsrt Dupl Egyd Egyh Egyp Elba Ethi Geok Geor Glag Goth Gran Grek Gujr Guru Hang Hani Hano Hans Hant Hebr Hira Hluw Hmng Hrkt Hung Inds Ital Java Jpan Jurc Kali Kana Khar Khmr Khoj Knda Kore Kpel Kthi Lana Laoo Latf Latg Latn Lepc Limb Lina Linb Lisu Loma Lyci Lydi Mahj Mand Mani Maya Mend Merc Mero Mlym Modi Mong Moon Mroo Mtei Mymr Narb Nbat Nkgb Nkoo Nshu Ogam Olck Orkh Orya Osma Palm Pauc Perm Phag Phli Phlp Phlv Phnx Plrd Prti Qaaa Qaab Qaac Qaad Qaae Qaaf Qaag Qaah Qaaj Qaak Qaal Qaam Qaan Qaao Qaap Qaaq Qaar Qaas Qaat Qaau Qaav Qaaw Qaax Qaay Qaaz Qaba Qabb Qabc Qabd Qabe Qabf Qabg Qabh Qabi Qabj Qabk Qabl Qabm Qabn Qabo Qabp Qabq Qabr Qabs Qabt Qabu Qabv Qabw Qabx Rjng Roro Runr Samr Sara Sarb Saur Sgnw Shaw Shrd Sidd Sind Sinh Sora Sund Sylo Syrc Syre Syrj Syrn Tagb Takr Tale Talu Taml Tang Tavt Telu Teng Tfng Tglg Thaa Thai Tibt Tirh Ugar Vaii Visp Wara Wole Xpeo Xsux Yiii Zinh Zmth Zsym Zxxx Zyyy Zzzz ',
                '_id' => '$script',
                '_type' => 'choice',
            ],
        ],
        4 => [
            'variable' => [
                '_value' => ' 1606NICT 1694ACAD 1901 1959ACAD 1994 1996 ALALC97 ALUKU AREVELA AREVMDA BAKU1926 BALANKA BARLA BAUDDHA BISCAYAN BISKE BOHORIC BOONT DAJNKO EKAVSK EMODENG FONIPA FONUPA FONXSAMP HEPBURN HOGNORSK IJEKAVSK ITIHASA JAUER JYUTPING KKCOR KSCOR LAUKIKA LIPAW LUNA1918 METELKO MONOTON NDYUKA NEDIS NJIVA NULIK OSOJS PAMAKA PETR1708 PINYIN POLYTON POSIX PUTER REVISED RIGIK ROZAJ RUMGR SAAHO SCOTLAND SCOUSE SOLBA SOTAV SURMIRAN SURSILV SUTSILV TARASK UCCOR UCRCOR ULSTER UNIFON VAIDIKA VALENCIA VALLADER WADEGILE ',
                '_id' => '$variant',
                '_type' => 'choice',
            ],
        ],
        5 => [
            'variable' => [
                '_value' => ' buddhist chinese coptic dangi ethioaa ethiopic ethiopic-amete-alem gregorian gregory hebrew indian islamic islamic-civil islamic-rgsa islamic-tbla islamic-umalqura islamicc iso8601 japanese persian roc ',
                '_id' => '$calendar_XXX',
                '_type' => 'choice',
            ],
        ],
        6 => [
            'variable' => [
                '_value' => ' big5han compat dict dictionary direct ducet eor gb2312 gb2312han phonebk phonebook phonetic pinyin reformed search searchjl standard stroke trad traditional unihan zhuyin ',
                '_id' => '$collation_XXX',
                '_type' => 'choice',
            ],
        ],
        7 => [
            'variable' => [
                '_value' => ' adp aed afa afn alk all amd ang aoa aok aon aor ara arl arm arp ars ats aud awg azm azn bad bam ban bbd bdt bec bef bel bgl bgm bgn bgo bhd bif bmd bnd bob bol bop bov brb brc bre brl brn brr brz bsd btn buk bwp byb byr bzd cad cdf che chf chw cle clf clp cnx cny cop cou crc csd csk cuc cup cve cyp czk ddm dem djf dkk dop dzd ecs ecv eek egp ern esa esb esp etb eur fim fjd fkp frf gbp gek gel ghc ghs gip gmd gnf gns gqe grd gtq gwe gwp gyd hkd hnl hrd hrk htg huf idr iep ilp ilr ils inr iqd irr isj isk itl jmd jod jpy kes kgs khr kmf kpw krh kro krw kwd kyd kzt lak lbp lkr lrd lsl ltl ltt luc luf lul lvl lvr lyd mad maf mcf mdc mdl mga mgf mkd mkn mlf mmk mnt mop mro mtl mtp mur mvp mvr mwk mxn mxp mxv myr mze mzm mzn nad ngn nic nio nlg nok npr nzd omr pab pei pen pes pgk php pkr pln plz pte pyg qar rhd rol ron rsd rub rur rwf sar sbd scr sdd sdg sdp sek sgd shp sit skk sll sos srd srg ssp std sur svc syp szl thb tjr tjs tmm tmt tnd top tpe trl try ttd twd tzs uah uak ugs ugx usd usn uss uyi uyp uyu uzs veb vef vnd vnn vuv wst xaf xag xau xba xbb xbc xbd xcd xdr xeu xfo xfu xof xpd xpf xpt xre xsu xts xua xxx ydd yer yud yum yun yur zal zar zmk zmw zrn zrz zwd zwl zwr ',
                '_id' => '$currency_XXX',
                '_type' => 'choice',
            ],
        ],
        8 => [
            'variable' => [
                '_value' => ' handwrit pinyin und wubi ',
                '_id' => '$i0_XXX',
                '_type' => 'choice',
            ],
        ],
        9 => [
            'variable' => [
                '_value' => ' 101key 102key 600dpi 768dpi android azerty chromeos colemak dvorak dvorakl dvorakr el220 el319 extended googlevk isiri legacy lt1205 lt1582 nutaaq osx patta qwerty qwertz ta99 und var viqr windows ',
                '_id' => '$k0_XXX',
                '_type' => 'choice',
            ],
        ],
        10 => [
            'variable' => [
                '_value' => ' noignore non-ignorable shifted ',
                '_id' => '$colAlternate_XXX',
                '_type' => 'choice',
            ],
        ],
        11 => [
            'variable' => [
                '_value' => ' false no true yes ',
                '_id' => '$colBackwards_XXX',
                '_type' => 'choice',
            ],
        ],
        12 => [
            'variable' => [
                '_value' => ' false no true yes ',
                '_id' => '$colCaseLevel_XXX',
                '_type' => 'choice',
            ],
        ],
        13 => [
            'variable' => [
                '_value' => ' false lower no upper ',
                '_id' => '$colCaseFirst_XXX',
                '_type' => 'choice',
            ],
        ],
        14 => [
            'variable' => [
                '_value' => ' false no true yes ',
                '_id' => '$colHiraganaQuaternary_XXX',
                '_type' => 'choice',
            ],
        ],
        15 => [
            'variable' => [
                '_value' => ' false no true yes ',
                '_id' => '$colNormalization_XXX',
                '_type' => 'choice',
            ],
        ],
        16 => [
            'variable' => [
                '_value' => ' false no true yes ',
                '_id' => '$colNumeric_XXX',
                '_type' => 'choice',
            ],
        ],
        17 => [
            'variable' => [
                '_value' => ' REORDER_CODE ',
                '_id' => '$colReorder_XXX',
                '_type' => 'choice',
            ],
        ],
        18 => [
            'variable' => [
                '_value' => ' identic identical level1 level2 level3 level4 primary quarternary quaternary secondary tertiary ',
                '_id' => '$colStrength_XXX',
                '_type' => 'choice',
            ],
        ],
        19 => [
            'variable' => [
                '_value' => ' currency punct space symbol ',
                '_id' => '$kv_XXX',
                '_type' => 'choice',
            ],
        ],
        20 => [
            'variable' => [
                '_value' => ' alaloc bgn buckwalt din gost iso mcst satts ungegn ',
                '_id' => '$m0_XXX',
                '_type' => 'choice',
            ],
        ],
        21 => [
            'variable' => [
                '_value' => ' arab arabext armn armnlow bali beng brah cakm cham deva ethi finance fullwide geor grek greklow gujr guru hanidays hanidec hans hansfin hant hantfin hebr java jpan jpanfin kali khmr knda lana lanatham laoo latn lepc limb mlym mong mtei mymr mymrshan native nkoo olck orya osma roman romanlow saur shrd sora sund takr talu taml tamldec telu thai tibt traditio traditional vaii ',
                '_id' => '$numbers_XXX',
                '_type' => 'choice',
            ],
        ],
        22 => [
            'variable' => [
                '_value' => ' und ',
                '_id' => '$t0_XXX',
                '_type' => 'choice',
            ],
        ],
        23 => [
            'variable' => [
                '_value' => ' adalv aedxb afkbl Africa/Abidjan Africa/Accra Africa/Addis_Ababa Africa/Algiers Africa/Asmara Africa/Asmera Africa/Bamako Africa/Bangui Africa/Banjul Africa/Bissau Africa/Blantyre Africa/Brazzaville Africa/Bujumbura Africa/Cairo Africa/Casablanca Africa/Ceuta Africa/Conakry Africa/Dakar Africa/Dar_es_Salaam Africa/Djibouti Africa/Douala Africa/El_Aaiun Africa/Freetown Africa/Gaborone Africa/Harare Africa/Johannesburg Africa/Juba Africa/Kampala Africa/Khartoum Africa/Kigali Africa/Kinshasa Africa/Lagos Africa/Libreville Africa/Lome Africa/Luanda Africa/Lubumbashi Africa/Lusaka Africa/Malabo Africa/Maputo Africa/Maseru Africa/Mbabane Africa/Mogadishu Africa/Monrovia Africa/Nairobi Africa/Ndjamena Africa/Niamey Africa/Nouakchott Africa/Ouagadougou Africa/Porto-Novo Africa/Sao_Tome Africa/Timbuktu Africa/Tripoli Africa/Tunis Africa/Windhoek aganu aiaxa altia America/Adak America/Anchorage America/Anguilla America/Antigua America/Araguaina America/Argentina/Buenos_Aires America/Argentina/Catamarca America/Argentina/ComodRivadavia America/Argentina/Cordoba America/Argentina/Jujuy America/Argentina/La_Rioja America/Argentina/Mendoza America/Argentina/Rio_Gallegos America/Argentina/Salta America/Argentina/San_Juan America/Argentina/San_Luis America/Argentina/Tucuman America/Argentina/Ushuaia America/Aruba America/Asuncion America/Atikokan America/Atka America/Bahia America/Bahia_Banderas America/Barbados America/Belem America/Belize America/Blanc-Sablon America/Boa_Vista America/Bogota America/Boise America/Buenos_Aires America/Cambridge_Bay America/Campo_Grande America/Cancun America/Caracas America/Catamarca America/Cayenne America/Cayman America/Chicago America/Chihuahua America/Coral_Harbour America/Cordoba America/Costa_Rica America/Creston America/Cuiaba America/Curacao America/Danmarkshavn America/Dawson America/Dawson_Creek America/Denver America/Detroit America/Dominica America/Edmonton America/Eirunepe America/El_Salvador America/Ensenada America/Fort_Wayne America/Fortaleza America/Glace_Bay America/Godthab America/Goose_Bay America/Grand_Turk America/Grenada America/Guadeloupe America/Guatemala America/Guayaquil America/Guyana America/Halifax America/Havana America/Hermosillo America/Indiana/Indianapolis America/Indiana/Knox America/Indiana/Marengo America/Indiana/Petersburg America/Indiana/Tell_City America/Indiana/Vevay America/Indiana/Vincennes America/Indiana/Winamac America/Indianapolis America/Inuvik America/Iqaluit America/Jamaica America/Jujuy America/Juneau America/Kentucky/Louisville America/Kentucky/Monticello America/Knox_IN America/Kralendijk America/La_Paz America/Lima America/Los_Angeles America/Louisville America/Lower_Princes America/Maceio America/Managua America/Manaus America/Marigot America/Martinique America/Matamoros America/Mazatlan America/Mendoza America/Menominee America/Merida America/Metlakatla America/Mexico_City America/Miquelon America/Moncton America/Monterrey America/Montevideo America/Montreal America/Montserrat America/Nassau America/New_York America/Nipigon America/Nome America/Noronha America/North_Dakota/Beulah America/North_Dakota/Center America/North_Dakota/New_Salem America/Ojinaga America/Panama America/Pangnirtung America/Paramaribo America/Phoenix America/Port_of_Spain America/Port-au-Prince America/Porto_Acre America/Porto_Velho America/Puerto_Rico America/Rainy_River America/Rankin_Inlet America/Recife America/Regina America/Resolute America/Rio_Branco America/Rosario America/Santa_Isabel America/Santarem America/Santiago America/Santo_Domingo America/Sao_Paulo America/Scoresbysund America/Shiprock America/Sitka America/St_Barthelemy America/St_Johns America/St_Kitts America/St_Lucia America/St_Thomas America/St_Vincent America/Swift_Current America/Tegucigalpa America/Thule America/Thunder_Bay America/Tijuana America/Toronto America/Tortola America/Vancouver America/Virgin America/Whitehorse America/Winnipeg America/Yakutat America/Yellowknife amevn ancur Antarctica/Casey Antarctica/Davis Antarctica/DumontDUrville Antarctica/Macquarie Antarctica/Mawson Antarctica/McMurdo Antarctica/Palmer Antarctica/Rothera Antarctica/South_Pole Antarctica/Syowa Antarctica/Troll Antarctica/Vostok aolad aqams aqcas aqdav aqddu aqmaw aqmcm aqplm aqrot aqsyw aqtrl aqvos arbue arcor arctc Arctic/Longyearbyen arirj arjuj arluq armdz arrgl arsla artuc aruaq arush Asia/Aden Asia/Almaty Asia/Amman Asia/Anadyr Asia/Aqtau Asia/Aqtobe Asia/Ashgabat Asia/Ashkhabad Asia/Baghdad Asia/Bahrain Asia/Baku Asia/Bangkok Asia/Beirut Asia/Bishkek Asia/Brunei Asia/Calcutta Asia/Chita Asia/Choibalsan Asia/Chongqing Asia/Chungking Asia/Colombo Asia/Dacca Asia/Damascus Asia/Dhaka Asia/Dili Asia/Dubai Asia/Dushanbe Asia/Gaza Asia/Harbin Asia/Hebron Asia/Ho_Chi_Minh Asia/Hong_Kong Asia/Hovd Asia/Irkutsk Asia/Istanbul Asia/Jakarta Asia/Jayapura Asia/Jerusalem Asia/Kabul Asia/Kamchatka Asia/Karachi Asia/Kashgar Asia/Kathmandu Asia/Katmandu Asia/Khandyga Asia/Kolkata Asia/Krasnoyarsk Asia/Kuala_Lumpur Asia/Kuching Asia/Kuwait Asia/Macao Asia/Macau Asia/Magadan Asia/Makassar Asia/Manila Asia/Muscat Asia/Nicosia Asia/Novokuznetsk Asia/Novosibirsk Asia/Omsk Asia/Oral Asia/Phnom_Penh Asia/Pontianak Asia/Pyongyang Asia/Qatar Asia/Qyzylorda Asia/Rangoon Asia/Riyadh Asia/Saigon Asia/Sakhalin Asia/Samarkand Asia/Seoul Asia/Shanghai Asia/Singapore Asia/Srednekolymsk Asia/Taipei Asia/Tashkent Asia/Tbilisi Asia/Tehran Asia/Tel_Aviv Asia/Thimbu Asia/Thimphu Asia/Tokyo Asia/Ujung_Pandang Asia/Ulaanbaatar Asia/Ulan_Bator Asia/Urumqi Asia/Ust-Nera Asia/Vientiane Asia/Vladivostok Asia/Yakutsk Asia/Yekaterinburg Asia/Yerevan asppg Atlantic/Azores Atlantic/Bermuda Atlantic/Canary Atlantic/Cape_Verde Atlantic/Faeroe Atlantic/Faroe Atlantic/Jan_Mayen Atlantic/Madeira Atlantic/Reykjavik Atlantic/South_Georgia Atlantic/St_Helena Atlantic/Stanley atvie auadl aubhq aubne audrw aueuc auhba aukns auldc auldh aumel aumqi auper Australia/ACT Australia/Adelaide Australia/Brisbane Australia/Broken_Hill Australia/Canberra Australia/Currie Australia/Darwin Australia/Eucla Australia/Hobart Australia/LHI Australia/Lindeman Australia/Lord_Howe Australia/Melbourne Australia/North Australia/NSW Australia/Perth Australia/Queensland Australia/South Australia/Sydney Australia/Tasmania Australia/Victoria Australia/West Australia/Yancowinna ausyd awaua azbak basjj bbbgi bddac bebru bfoua bgsof bhbah bibjm bjptn bmbda bnbwn bolpb bqkra braux Brazil/Acre Brazil/DeNoronha Brazil/East Brazil/West brbel brbvb brcgb brcgr brern brfen brfor brmao brmcz brpvh brrbr brrec brsao brssa brstm bsnas btthi bwgbe bymsq bzbze cacfq caedm caffs caglb cagoo cahal caiql camon camtr Canada/Atlantic Canada/Central Canada/East-Saskatchewan Canada/Eastern Canada/Mountain Canada/Newfoundland Canada/Pacific Canada/Saskatchewan Canada/Yukon canpg capnt careb careg casjf cathu cator cavan cawnp caybx caycb cayda caydq cayek cayev cayxy cayyn cayzf cayzs cccck cdfbm cdfih cfbgf cgbzv Chile/Continental Chile/EasterIsland chzrh ciabj ckrar clipc clscl cmdla cnckg cnhrb cnkhg cnsha cnurc cobog crsjo CST6CDT Cuba cuhav cvrai cxxch cynic czprg deber debsngn djjib dkcph dmdom dosdq dzalg ecgps ecgye eetll egcai Egypt eheai Eire erasm esceu eslpa esmad EST EST5EDT etadd Etc/GMT Etc/GMT-0 Etc/GMT-1 Etc/GMT-10 Etc/GMT-11 Etc/GMT-12 Etc/GMT-13 Etc/GMT-14 Etc/GMT-2 Etc/GMT-3 Etc/GMT-4 Etc/GMT-5 Etc/GMT-6 Etc/GMT-7 Etc/GMT-8 Etc/GMT-9 Etc/GMT+0 Etc/GMT+1 Etc/GMT+10 Etc/GMT+11 Etc/GMT+12 Etc/GMT+2 Etc/GMT+3 Etc/GMT+4 Etc/GMT+5 Etc/GMT+6 Etc/GMT+7 Etc/GMT+8 Etc/GMT+9 Etc/GMT0 Etc/Greenwich Etc/UCT Etc/Universal Etc/Unknown Etc/UTC Etc/Zulu Europe/Amsterdam Europe/Andorra Europe/Athens Europe/Belfast Europe/Belgrade Europe/Berlin Europe/Bratislava Europe/Brussels Europe/Bucharest Europe/Budapest Europe/Busingen Europe/Chisinau Europe/Copenhagen Europe/Dublin Europe/Gibraltar Europe/Guernsey Europe/Helsinki Europe/Isle_of_Man Europe/Istanbul Europe/Jersey Europe/Kaliningrad Europe/Kiev Europe/Lisbon Europe/Ljubljana Europe/London Europe/Luxembourg Europe/Madrid Europe/Malta Europe/Mariehamn Europe/Minsk Europe/Monaco Europe/Moscow Europe/Nicosia Europe/Oslo Europe/Paris Europe/Podgorica Europe/Prague Europe/Riga Europe/Rome Europe/Samara Europe/San_Marino Europe/Sarajevo Europe/Simferopol Europe/Skopje Europe/Sofia Europe/Stockholm Europe/Tallinn Europe/Tirane Europe/Tiraspol Europe/Uzhgorod Europe/Vaduz Europe/Vatican Europe/Vienna Europe/Vilnius Europe/Volgograd Europe/Warsaw Europe/Zagreb Europe/Zaporozhye Europe/Zurich fihel fimhq fjsuv fkpsy fmksa fmpni fmtkk fotho frpar galbv gaza GB GB-Eire gblon gdgnd getbs gfcay gggci ghacc gigib gldkshvn glgoh globy glthu gmbjl GMT GMT-0 GMT+0 GMT0 gncky gpbbr gpmsb gpsbh gqssg grath Greenwich gsgrv gtgua gugum gwoxb gygeo hebron hkhkg hntgu Hongkong hrzag HST htpap hubud Iceland iddjj idjkt idmak idpnk iedub imdgs inccu Indian/Antananarivo Indian/Chagos Indian/Christmas Indian/Cocos Indian/Comoro Indian/Kerguelen Indian/Mahe Indian/Maldives Indian/Mauritius Indian/Mayotte Indian/Reunion iodga iqbgw Iran irthr Israel isrey itrom Jamaica Japan jeruslm jesth jmkin joamm jptyo kenbo kgfru khpnh kicxi kipho kitrw kmyva knbas kpfnj krsel Kwajalein kwkwi kygec kzaau kzakx kzala kzkzo kzura lavte lbbey lccas Libya livdz lkcmb lrmlw lsmsu ltvno lulux lvrix lytip macas mcmon mdkiv metgd Mexico/BajaNorte Mexico/BajaSur Mexico/General mgtnr mhkwa mhmaj mkskp mlbko mmrgn mncoq mnhvd mnuln momfm mpspn mqfdf mrnkc msmni MST MST7MDT mtmla muplu mvmle mwblz mxchi mxcun mxhmo mxmam mxmex mxmid mxmty mxmzt mxoji mxpvr mxstis mxtij mykch mykul mzmpm Navajo nawdh ncnou nenim nfnlk nglos nimga nlams noosl npktm nrinu nuiue NZ NZ-CHAT nzakl nzcht ommct Pacific/Apia Pacific/Auckland Pacific/Chatham Pacific/Chuuk Pacific/Easter Pacific/Efate Pacific/Enderbury Pacific/Fakaofo Pacific/Fiji Pacific/Funafuti Pacific/Galapagos Pacific/Gambier Pacific/Guadalcanal Pacific/Guam Pacific/Honolulu Pacific/Johnston Pacific/Kiritimati Pacific/Kosrae Pacific/Kwajalein Pacific/Majuro Pacific/Marquesas Pacific/Midway Pacific/Nauru Pacific/Niue Pacific/Norfolk Pacific/Noumea Pacific/Pago_Pago Pacific/Palau Pacific/Pitcairn Pacific/Pohnpei Pacific/Ponape Pacific/Port_Moresby Pacific/Rarotonga Pacific/Saipan Pacific/Samoa Pacific/Tahiti Pacific/Tarawa Pacific/Tongatapu Pacific/Truk Pacific/Wake Pacific/Wallis Pacific/Yap papty pelim pfgmr pfnhv pfppt pgpom phmnl pkkhi plwaw pmmqc pnpcn Poland Portugal PRC prsju PST8PDT ptfnc ptlis ptpdl pwror pyasu qadoh rereu robuh ROC ROK rsbeg ruchita rudyr rugdx ruikt rukgd rukhndg rukra rukuf rumow runoz ruoms ruovb rupkc rusred ruunera ruuus ruvog ruvvo ruyek ruyks rwkgl saruh sbhir scmaw sdkrt sesto sgsin shshn silju Singapore sjlyr skbts slfna smsai sndkr somgq srpbm ssjub sttms svsal sxphi sydam szqmn tcgdt tdndj tfpfr tglfw thbkk tjdyu tkfko tldil tmasb tntun totbu trist ttpos Turkey tvfun twtpe tzdar uaiev uaozh uasip uauzh UCT ugkla umawk umjon ummdy Universal unk US/Alaska US/Aleutian US/Arizona US/Central US/East-Indiana US/Eastern US/Hawaii US/Indiana-Starke US/Michigan US/Mountain US/Pacific US/Pacific-New US/Samoa usadk usaeg usanc usboi uschi usden usdet ushnl usind usinvev usjnu usknx uslax uslui usmnm usmoc usmtm usnavajo usndcnt usndnsl usnyc usoea usome usphx ussit ustel uswlz uswsq usxul usyak UTC utce01 utce02 utce03 utce04 utce05 utce06 utce07 utce08 utce09 utce10 utce11 utce12 utce13 utce14 utcw01 utcw02 utcw03 utcw04 utcw05 utcw06 utcw07 utcw08 utcw09 utcw10 utcw11 utcw12 uymvd uzskd uztas vavat vcsvd veccs vgtov vistt vnsgn vuvli W-SU wfmau wsapw yeade ytmam zajnb zmlun Zulu zwhre ',
                '_id' => '$timezone_XXX',
                '_type' => 'choice',
            ],
        ],
        24 => [
            'variable' => [
                '_value' => ' posix ',
                '_id' => '$va_XXX',
                '_type' => 'choice',
            ],
        ],
        25 => [
            'variable' => [
                '_value' => ' CODEPOINTS ',
                '_id' => '$variableTop_XXX',
                '_type' => 'choice',
            ],
        ],
        26 => [
            'variable' => [
                '_value' => ' Africa/Abidjan Africa/Accra Africa/Addis_Ababa Africa/Algiers Africa/Asmera Africa/Bamako Africa/Bangui Africa/Banjul Africa/Bissau Africa/Blantyre Africa/Brazzaville Africa/Bujumbura Africa/Cairo Africa/Casablanca Africa/Ceuta Africa/Conakry Africa/Dakar Africa/Dar_es_Salaam Africa/Djibouti Africa/Douala Africa/El_Aaiun Africa/Freetown Africa/Gaborone Africa/Harare Africa/Johannesburg Africa/Juba Africa/Kampala Africa/Khartoum Africa/Kigali Africa/Kinshasa Africa/Lagos Africa/Libreville Africa/Lome Africa/Luanda Africa/Lubumbashi Africa/Lusaka Africa/Malabo Africa/Maputo Africa/Maseru Africa/Mbabane Africa/Mogadishu Africa/Monrovia Africa/Nairobi Africa/Ndjamena Africa/Niamey Africa/Nouakchott Africa/Ouagadougou Africa/Porto-Novo Africa/Sao_Tome Africa/Tripoli Africa/Tunis Africa/Windhoek America/Adak America/Anchorage America/Anguilla America/Antigua America/Araguaina America/Argentina/La_Rioja America/Argentina/Rio_Gallegos America/Argentina/Salta America/Argentina/San_Juan America/Argentina/San_Luis America/Argentina/Tucuman America/Argentina/Ushuaia America/Aruba America/Asuncion America/Bahia America/Bahia_Banderas America/Barbados America/Belem America/Belize America/Blanc-Sablon America/Boa_Vista America/Bogota America/Boise America/Buenos_Aires America/Cambridge_Bay America/Campo_Grande America/Cancun America/Caracas America/Catamarca America/Cayenne America/Cayman America/Chicago America/Chihuahua America/Coral_Harbour America/Cordoba America/Costa_Rica America/Creston America/Cuiaba America/Curacao America/Danmarkshavn America/Dawson America/Dawson_Creek America/Denver America/Detroit America/Dominica America/Edmonton America/Eirunepe America/El_Salvador America/Fortaleza America/Glace_Bay America/Godthab America/Goose_Bay America/Grand_Turk America/Grenada America/Guadeloupe America/Guatemala America/Guayaquil America/Guyana America/Halifax America/Havana America/Hermosillo America/Indiana/Knox America/Indiana/Marengo America/Indiana/Petersburg America/Indiana/Tell_City America/Indiana/Vevay America/Indiana/Vincennes America/Indiana/Winamac America/Indianapolis America/Inuvik America/Iqaluit America/Jamaica America/Jujuy America/Juneau America/Kentucky/Monticello America/Kralendijk America/La_Paz America/Lima America/Los_Angeles America/Louisville America/Lower_Princes America/Maceio America/Managua America/Manaus America/Marigot America/Martinique America/Matamoros America/Mazatlan America/Mendoza America/Menominee America/Merida America/Metlakatla America/Mexico_City America/Miquelon America/Moncton America/Monterrey America/Montevideo America/Montserrat America/Nassau America/New_York America/Nipigon America/Nome America/Noronha America/North_Dakota/Beulah America/North_Dakota/Center America/North_Dakota/New_Salem America/Ojinaga America/Panama America/Pangnirtung America/Paramaribo America/Phoenix America/Port-au-Prince America/Port_of_Spain America/Porto_Velho America/Puerto_Rico America/Rainy_River America/Rankin_Inlet America/Recife America/Regina America/Resolute America/Rio_Branco America/Santa_Isabel America/Santarem America/Santiago America/Santo_Domingo America/Sao_Paulo America/Scoresbysund America/Sitka America/St_Barthelemy America/St_Johns America/St_Kitts America/St_Lucia America/St_Thomas America/St_Vincent America/Swift_Current America/Tegucigalpa America/Thule America/Thunder_Bay America/Tijuana America/Toronto America/Tortola America/Vancouver America/Whitehorse America/Winnipeg America/Yakutat America/Yellowknife Antarctica/Casey Antarctica/Davis Antarctica/DumontDUrville Antarctica/Macquarie Antarctica/Mawson Antarctica/McMurdo Antarctica/Palmer Antarctica/Rothera Antarctica/Syowa Antarctica/Troll Antarctica/Vostok Arctic/Longyearbyen Asia/Aden Asia/Almaty Asia/Amman Asia/Anadyr Asia/Aqtau Asia/Aqtobe Asia/Ashgabat Asia/Baghdad Asia/Bahrain Asia/Baku Asia/Bangkok Asia/Beirut Asia/Bishkek Asia/Brunei Asia/Calcutta Asia/Chita Asia/Choibalsan Asia/Colombo Asia/Damascus Asia/Dhaka Asia/Dili Asia/Dubai Asia/Dushanbe Asia/Gaza Asia/Hebron Asia/Hong_Kong Asia/Hovd Asia/Irkutsk Asia/Jakarta Asia/Jayapura Asia/Jerusalem Asia/Kabul Asia/Kamchatka Asia/Karachi Asia/Katmandu Asia/Khandyga Asia/Krasnoyarsk Asia/Kuala_Lumpur Asia/Kuching Asia/Kuwait Asia/Macau Asia/Magadan Asia/Makassar Asia/Manila Asia/Muscat Asia/Nicosia Asia/Novokuznetsk Asia/Novosibirsk Asia/Omsk Asia/Oral Asia/Phnom_Penh Asia/Pontianak Asia/Pyongyang Asia/Qatar Asia/Qyzylorda Asia/Rangoon Asia/Riyadh Asia/Saigon Asia/Sakhalin Asia/Samarkand Asia/Seoul Asia/Shanghai Asia/Singapore Asia/Srednekolymsk Asia/Taipei Asia/Tashkent Asia/Tbilisi Asia/Tehran Asia/Thimphu Asia/Tokyo Asia/Ulaanbaatar Asia/Urumqi Asia/Ust-Nera Asia/Vientiane Asia/Vladivostok Asia/Yakutsk Asia/Yekaterinburg Asia/Yerevan Atlantic/Azores Atlantic/Bermuda Atlantic/Canary Atlantic/Cape_Verde Atlantic/Faeroe Atlantic/Madeira Atlantic/Reykjavik Atlantic/South_Georgia Atlantic/St_Helena Atlantic/Stanley Australia/Adelaide Australia/Brisbane Australia/Broken_Hill Australia/Currie Australia/Darwin Australia/Eucla Australia/Hobart Australia/Lindeman Australia/Lord_Howe Australia/Melbourne Australia/Perth Australia/Sydney CST6CDT EST5EDT Etc/GMT Etc/GMT+1 Etc/GMT+10 Etc/GMT+11 Etc/GMT+12 Etc/GMT+2 Etc/GMT+3 Etc/GMT+4 Etc/GMT+5 Etc/GMT+6 Etc/GMT+7 Etc/GMT+8 Etc/GMT+9 Etc/GMT-1 Etc/GMT-10 Etc/GMT-11 Etc/GMT-12 Etc/GMT-13 Etc/GMT-14 Etc/GMT-2 Etc/GMT-3 Etc/GMT-4 Etc/GMT-5 Etc/GMT-6 Etc/GMT-7 Etc/GMT-8 Etc/GMT-9 Etc/Unknown Europe/Amsterdam Europe/Andorra Europe/Athens Europe/Belgrade Europe/Berlin Europe/Bratislava Europe/Brussels Europe/Bucharest Europe/Budapest Europe/Busingen Europe/Chisinau Europe/Copenhagen Europe/Dublin Europe/Gibraltar Europe/Guernsey Europe/Helsinki Europe/Isle_of_Man Europe/Istanbul Europe/Jersey Europe/Kaliningrad Europe/Kiev Europe/Lisbon Europe/Ljubljana Europe/London Europe/Luxembourg Europe/Madrid Europe/Malta Europe/Mariehamn Europe/Minsk Europe/Monaco Europe/Moscow Europe/Oslo Europe/Paris Europe/Podgorica Europe/Prague Europe/Riga Europe/Rome Europe/Samara Europe/San_Marino Europe/Sarajevo Europe/Simferopol Europe/Skopje Europe/Sofia Europe/Stockholm Europe/Tallinn Europe/Tirane Europe/Uzhgorod Europe/Vaduz Europe/Vatican Europe/Vienna Europe/Vilnius Europe/Volgograd Europe/Warsaw Europe/Zagreb Europe/Zaporozhye Europe/Zurich Indian/Antananarivo Indian/Chagos Indian/Christmas Indian/Cocos Indian/Comoro Indian/Kerguelen Indian/Mahe Indian/Maldives Indian/Mauritius Indian/Mayotte Indian/Reunion MST7MDT PST8PDT Pacific/Apia Pacific/Auckland Pacific/Chatham Pacific/Easter Pacific/Efate Pacific/Enderbury Pacific/Fakaofo Pacific/Fiji Pacific/Funafuti Pacific/Galapagos Pacific/Gambier Pacific/Guadalcanal Pacific/Guam Pacific/Honolulu Pacific/Johnston Pacific/Kiritimati Pacific/Kosrae Pacific/Kwajalein Pacific/Majuro Pacific/Marquesas Pacific/Midway Pacific/Nauru Pacific/Niue Pacific/Norfolk Pacific/Noumea Pacific/Pago_Pago Pacific/Palau Pacific/Pitcairn Pacific/Ponape Pacific/Port_Moresby Pacific/Rarotonga Pacific/Saipan Pacific/Tahiti Pacific/Tarawa Pacific/Tongatapu Pacific/Truk Pacific/Wake Pacific/Wallis ',
                '_id' => '$tzid',
                '_type' => 'choice',
            ],
        ],
        27 => [
            'variable' => [
                '_value' => ' stand-alone variant list secondary email www short narrow accounting arab arabext armn armnlow bali beng cham deva ethi fullwide geor grek greklow gujr guru hans hansfin hant hantfin hebr java jpan jpanfin kali knda khmr lana lanatham laoo latn lepc limb mlym mong mtei mymr mymrshan new nkoo olck orya roman romanlow saur sund talu taml telu thai tibt vaii ',
                '_id' => '$altList',
                '_type' => 'choice',
            ],
        ],
        28 => [
            'variable' => [
                '_value' => '$tzid',
                '_id' => '$tzidList',
                '_type' => 'list',
            ],
        ],
        29 => [
            'variable' => [
                '_value' => 'titlecase-words titlecase-firstword lowercase-words mixed',
                '_id' => '$casing',
                '_type' => 'choice',
            ],
        ],
        30 => [
            'variable' => [
                '_value' => '(verbatim]',
                '_id' => '$allow',
                '_type' => 'regex',
            ],
        ],
        31 => [
            'variable' => [
                '_value' => '((stand-alone|variant|list|secondary|email|www|short|narrow|new|accounting](-proposed.*]?|(proposed.*]]',
                '_id' => '$alt',
                '_type' => 'regex',
            ],
        ],
        32 => [
            'variable' => [
                '_value' => 'Era Year Quarter Month Week Day-Of-Week Day Hour Minute Second Timezone',
                '_id' => '$append',
                '_type' => 'choice',
            ],
        ],
        33 => [
            'variable' => [
                '_value' => '([12][0-9][0-9][0-9]]-((0[0-9]]|1[0-2]]-([0-2][0-9]|3[01]]',
                '_id' => '$currencyDate',
                '_type' => 'regex',
            ],
        ],
        34 => [
            'variable' => [
                '_value' => '20[0-9][0-9]-([0-9]|1[0-2]]-([12][0-9]|3[01]]',
                '_id' => '$date',
                '_type' => 'regex',
            ],
        ],
        35 => [
            'variable' => [
                '_value' => '[0-9]+(\\\\.[0-9]+]?',
                '_id' => '$double',
                '_type' => 'regex',
            ],
        ],
        36 => [
            'variable' => [
                '_value' => '[0-9]+',
                '_id' => '$integer',
                '_type' => 'regex',
            ],
        ],
        37 => [
            'variable' => [
                '_value' => 'standard',
                '_id' => '$format',
                '_type' => 'choice',
            ],
        ],
        38 => [
            'variable' => [
                '_id' => '$fullTzid',
                '_type' => 'notDoneYet',
            ],
        ],
        39 => [
            'variable' => [
                '_value' => '\\\\$.*\\\\$',
                '_id' => '$genDate',
                '_type' => 'regex',
            ],
        ],
        40 => [
            'variable' => [
                '_id' => '$locale',
                '_type' => 'locale',
            ],
        ],
        41 => [
            'variable' => [
                '_value' => '([R|S]|RP][0-9]+',
                '_id' => '$reference',
                '_type' => 'regex',
            ],
        ],
        42 => [
            'variable' => [
                '_value' => '([01][0-9]|2[0-4]]:[0-6][0-9]',
                '_id' => '$time',
                '_type' => 'regex',
            ],
        ],
        43 => [
            'variable' => [
                '_id' => '$uri',
                '_type' => 'notDoneYet',
            ],
        ],
        44 => [
            'variable' => [
                '_value' => '[$][a-zA-Z0-9_]+',
                '_id' => '$variableID',
                '_type' => 'regex',
            ],
        ],
        45 => [
            'variable' => [
                '_value' => '\\\\$.*\\\\$',
                '_id' => '$version',
                '_type' => 'regex',
            ],
        ],
        46 => [
            'choice' => [
                '_value' => '$alt',
                '_attributes' => 'alt',
            ],
        ],
        47 => [
            'choice' => [
                '_value' => '$integer',
                '_attributes' => '_q',
            ],
        ],
        48 => [
            'list' => [
                '_value' => '$locale',
                '_attributes' => 'validSubLocales',
            ],
        ],
        49 => [
            'path' => [
                '_value' => 'notDoneYet',
                '_attributes' => 'path',
                '_elements' => 'alias',
            ],
        ],
        50 => [
            'path' => [
                '_value' => 'notDoneYet',
                '_attributes' => 'path',
                '_elements' => 'alias',
            ],
        ],
        51 => [
            'locale' => [
                '_attributes' => 'source',
                '_elements' => 'alias',
            ],
        ],
        52 => [
            'choice' => [
                '_value' => 'locale',
                '_attributes' => 'source',
                '_elements' => 'alias',
            ],
        ],
        53 => [
            'bcp47' => [
                '_value' => 'cu',
                '_attributes' => 'iso4217',
                '_elements' => 'alternate',
            ],
        ],
        54 => [
            'attributeValues' => [
                '_value' => '$append',
                '_attributes' => 'request',
                '_elements' => 'appendItem',
            ],
        ],
        55 => [
            'bcp47' => [
                '_value' => 'ca',
                '_attributes' => 'type',
                '_elements' => 'calendar',
            ],
        ],
        56 => [
            'regex' => [
                '_value' => '.',
                '_attributes' => 'value',
                '_elements' => 'character',
            ],
        ],
        57 => [
            'bcp47' => [
                '_value' => 'co',
                '_attributes' => 'type',
                '_elements' => 'collation',
            ],
        ],
        58 => [
            'attributeValues' => [
                '_value' => '$version',
                '_attributes' => 'version',
                '_elements' => 'collations',
            ],
        ],
        59 => [
            'choice' => [
                '_value' => 'uiListOrMenu stand-alone',
                '_attributes' => 'type',
                '_elements' => 'contextTransform',
            ],
        ],
        60 => [
            'regex' => [
                '_value' => '[a-zA-Z-]+',
                '_attributes' => 'type',
                '_elements' => 'contextTransformUsage',
            ],
        ],
        61 => [
            'regex' => [
                '_value' => '[0-9A-Fa-f]{4,6}',
                '_attributes' => 'hex',
                '_elements' => 'cp',
            ],
        ],
        62 => [
            'attributeValues' => [
                '_value' => '$currencyDate',
                '_attributes' => 'before from to',
                '_elements' => 'currency',
            ],
        ],
        63 => [
            'bcp47' => [
                '_value' => 'cu',
                '_attributes' => 'iso4217',
                '_elements' => 'currency',
            ],
        ],
        64 => [
            'bcp47' => [
                '_value' => 'cu',
                '_attributes' => 'type',
                '_elements' => 'currency',
            ],
        ],
        65 => [
            'choice' => [
                '_value' => 'standard accounting',
                '_attributes' => 'type',
                '_elements' => 'currencyFormat',
            ],
        ],
        66 => [
            'bcp47' => [
                '_value' => 'nu',
                '_attributes' => 'numberSystem',
                '_elements' => 'currencyFormats decimalFormats percentFormats scientificFormats',
            ],
        ],
        67 => [
            'regex' => [
                '_value' => '[0-9]+',
                '_attributes' => 'type',
                '_elements' => 'cyclicName',
            ],
        ],
        68 => [
            'attributeValues' => [
                '_value' => 'format stand-alone',
                '_order' => 'given',
                '_attributes' => 'type',
                '_elements' => 'cyclicNameContext',
            ],
        ],
        69 => [
            'choice' => [
                '_value' => 'years months days dayParts zodiacs solarTerms',
                '_attributes' => 'type',
                '_elements' => 'cyclicNameSet',
            ],
        ],
        70 => [
            'attributeValues' => [
                '_value' => '$format',
                '_attributes' => 'type',
                '_elements' => 'dateFormat dateTimeFormat decimalFormat percentFormat scientificFormat timeFormat',
            ],
        ],
        71 => [
            'attributeValues' => [
                '_value' => 'full long medium short',
                '_order' => 'given',
                '_attributes' => 'type',
                '_elements' => 'dateFormatLength timeFormatLength dateTimeFormatLength decimalFormatLength scientificFormatLength percentFormatLength currencyFormatLength',
            ],
        ],
        72 => [
            'attributeValues' => [
                '_value' => 'sun mon tue wed thu fri sat',
                '_order' => 'given',
                '_attributes' => 'type',
                '_elements' => 'day',
            ],
        ],
        73 => [
            'attributeValues' => [
                '_value' => 'abbreviated narrow short wide',
                '_order' => 'given',
                '_attributes' => 'type',
                '_elements' => 'dayWidth',
            ],
        ],
        74 => [
            'choice' => [
                '_value' => 'format gregorian long medium pinyin standard stroke wide',
                '_attributes' => 'type',
                '_elements' => 'default',
            ],
        ],
        75 => [
            'regex' => [
                '_value' => '[0-9]+',
                '_attributes' => 'type',
                '_elements' => 'era',
            ],
        ],
        76 => [
            'attributeValues' => [
                '_value' => 'era year year-short year-narrow quarter quarter-short quarter-narrow month month-short month-narrow week week-short week-narrow day day-short day-narrow weekday dayperiod hour hour-short hour-narrow minute minute-short minute-narrow second second-short second-narrow zone sun sun-short sun-narrow mon mon-short mon-narrow tue tue-short tue-narrow wed wed-short wed-narrow thu thu-short thu-narrow fri fri-short fri-narrow sat sat-short sat-narrow',
                '_order' => 'given',
                '_attributes' => 'type',
                '_elements' => 'field',
            ],
        ],
        77 => [
            'attributeValues' => [
                '_value' => 'sun mon tue wed thu fri sat',
                '_order' => 'given',
                '_attributes' => 'day',
                '_elements' => 'firstDay weekendEnd weekendStart',
            ],
        ],
        78 => [
            'attributeValues' => [
                '_value' => '$genDate',
                '_attributes' => 'date',
                '_elements' => 'generation',
            ],
        ],
        79 => [
            'attributeValues' => [
                '_value' => '$territory',
                '_attributes' => 'contains type',
                '_elements' => 'group',
            ],
        ],
        80 => [
            'regex' => [
                '_value' => '[HKhk]( [HKhk]]*',
                '_attributes' => 'allowed',
                '_elements' => 'hours',
            ],
        ],
        81 => [
            'choice' => [
                '_value' => 'H K h k',
                '_attributes' => 'preferred',
                '_elements' => 'hours',
            ],
        ],
        82 => [
            'list' => [
                '_value' => '$territory',
                '_attributes' => 'regions',
                '_elements' => 'hours',
            ],
        ],
        83 => [
            'regex' => [
                '_value' => '[0-9]+',
                '_attributes' => 'digits',
                '_elements' => 'info',
            ],
        ],
        84 => [
            'bcp47' => [
                '_value' => 'cu',
                '_attributes' => 'iso4217',
                '_elements' => 'info',
            ],
        ],
        85 => [
            'regex' => [
                '_value' => '[0-9]+',
                '_attributes' => 'rounding',
                '_elements' => 'info',
            ],
        ],
        86 => [
            'choice' => [
                '_value' => 'calendar collation colAlternate colBackwards colCaseFirst colCaseLevel colHiraganaQuaternary colNormalization colNumeric colReorder colStrength currency kv numbers timezone va variableTop x',
                '_attributes' => 'type',
                '_elements' => 'key',
            ],
        ],
        87 => [
            'attributeValues' => [
                '_value' => '$script',
                '_attributes' => 'scripts',
                '_elements' => 'language',
            ],
        ],
        88 => [
            'attributeValues' => [
                '_value' => '$territory',
                '_attributes' => 'territories',
                '_elements' => 'language',
            ],
        ],
        89 => [
            'attributeValues' => [
                '_value' => '$locale',
                '_attributes' => 'type',
                '_elements' => 'language',
            ],
        ],
        90 => [
            'attributeValues' => [
                '_value' => '$variant',
                '_attributes' => 'variants',
                '_elements' => 'language',
            ],
        ],
        91 => [
            'locale' => [
                '_-q' => '106',
                '_attributes' => 'replacement type',
                '_elements' => 'languageAlias',
            ],
        ],
        92 => [
            'attributeValues' => [
                '_value' => '$version',
                '_attributes' => 'version',
                '_elements' => 'ldml',
            ],
        ],
        93 => [
            'regex' => [
                '_value' => '.+',
                '_attributes' => 'type',
                '_elements' => 'mapTimezones',
            ],
        ],
        94 => [
            'attributeValues' => [
                '_value' => '$tzid',
                '_attributes' => 'type',
                '_elements' => 'mapZone',
            ],
        ],
        95 => [
            'choice' => [
                '_value' => 'iana',
                '_attributes' => 'registry',
                '_elements' => 'mapping',
            ],
        ],
        96 => [
            'choice' => [
                '_value' => 'utf-8',
                '_attributes' => 'type',
                '_elements' => 'mapping',
            ],
        ],
        97 => [
            'bcp47' => [
                '_value' => 'nu',
                '_attributes' => 'id',
                '_elements' => 'numberingSystem',
            ],
        ],
        98 => [
            'choice' => [
                '_value' => 'algorithmic numeric',
                '_attributes' => 'type',
                '_elements' => 'numberingSystem',
            ],
        ],
        99 => [
            'regex' => [
                '_value' => '[0-7]',
                '_attributes' => 'count',
                '_elements' => 'minDays',
            ],
        ],
        100 => [
            'choice' => [
                '_value' => '1 2 3 4 5 6 7 8 9 10 11 12 13',
                '_attributes' => 'type',
                '_elements' => 'month',
            ],
        ],
        101 => [
            'choice' => [
                '_value' => 'leap standardAfterLeap combined',
                '_attributes' => 'type',
                '_elements' => 'monthPattern',
            ],
        ],
        102 => [
            'attributeValues' => [
                '_value' => 'format stand-alone numeric',
                '_order' => 'given',
                '_attributes' => 'type',
                '_elements' => 'monthPatternContext',
            ],
        ],
        103 => [
            'choice' => [
                '_value' => 'abbreviated narrow wide all',
                '_attributes' => 'type',
                '_elements' => 'monthPatternWidth',
            ],
        ],
        104 => [
            'attributeValues' => [
                '_value' => 'abbreviated narrow wide',
                '_order' => 'given',
                '_attributes' => 'type',
                '_elements' => 'monthWidth quarterWidth cyclicNameWidth',
            ],
        ],
        105 => [
            'choice' => [
                '_value' => 'standard atLeast range 1000 10000 100000 1000000 10000000 10000000 100000000 1000000000 10000000000 100000000000 1000000000000 10000000000000 100000000000000',
                '_attributes' => 'type',
                '_elements' => 'pattern',
            ],
        ],
        106 => [
            'attributeValues' => [
                '_value' => '$tzidList',
                '_attributes' => 'type',
                '_elements' => 'preferenceOrdering',
            ],
        ],
        107 => [
            'choice' => [
                '_value' => '1 2 3 4',
                '_attributes' => 'type',
                '_elements' => 'quarter',
            ],
        ],
        108 => [
            'attributeValues' => [
                '_value' => '$reference',
                '_attributes' => 'type',
                '_elements' => 'reference',
            ],
        ],
        109 => [
            'attributeValues' => [
                '_value' => 'notDoneYet',
                '_attributes' => 'uri',
                '_elements' => 'reference',
            ],
        ],
        110 => [
            'attributeValues' => [
                '_value' => '$territory',
                '_attributes' => 'iso3166',
                '_elements' => 'region',
            ],
        ],
        111 => [
            'regex' => [
                '_value' => '-?[0-9]+',
                '_attributes' => 'type',
                '_elements' => 'relative',
            ],
        ],
        112 => [
            'choice' => [
                '_value' => 'future past',
                '_attributes' => 'type',
                '_elements' => 'relativeTime',
            ],
        ],
        113 => [
            'choice' => [
                '_value' => 'primary secondary tertiary',
                '_attributes' => 'before',
                '_elements' => 'reset',
            ],
        ],
        114 => [
            'attributeValues' => [
                '_value' => '$double',
                '_attributes' => 'id',
                '_elements' => 'rule',
            ],
        ],
        115 => [
            'attributeValues' => [
                '_value' => '$script',
                '_attributes' => 'type',
                '_elements' => 'script',
            ],
        ],
        116 => [
            'attributeValues' => [
                '_value' => '$script',
                '_attributes' => 'replacement',
                '_elements' => 'scriptAlias',
            ],
        ],
        117 => [
            'attributeValues' => [
                '_value' => '$script',
                '_attributes' => 'type',
                '_elements' => 'scriptAlias',
            ],
        ],
        118 => [
            'choice' => [
                '_value' => 'GraphemeClusterBreak LineBreak SentenceBreak WordBreak',
                '_attributes' => 'type',
                '_elements' => 'segmentation',
            ],
        ],
        119 => [
            'attributeValues' => [
                '_value' => '$version',
                '_attributes' => 'version',
                '_elements' => 'supplementalData',
            ],
        ],
        120 => [
            'bcp47' => [
                '_value' => 'nu',
                '_attributes' => 'numberSystem',
                '_elements' => 'symbols',
            ],
        ],
        121 => [
            'attributeValues' => [
                '_value' => '$territory',
                '_attributes' => 'type',
                '_elements' => 'territory',
            ],
        ],
        122 => [
            'attributeValues' => [
                '_value' => '$territory',
                '_attributes' => 'replacement type',
                '_elements' => 'territoryAlias',
            ],
        ],
        123 => [
            'choice' => [
                '_value' => 'calendar collation colAlternate colBackwards colCaseFirst colCaseLevel colHiraganaQuaternary colNormalization colNumeric colStrength numbers va',
                '_attributes' => 'key',
                '_elements' => 'type',
            ],
        ],
        124 => [
            'choice' => [
                '_value' => 'arab arabext armn armnlow bali beng big5han brah buddhist cakm cham chinese coptic dangi deva dictionary ducet eor ethi ethiopic ethiopic-amete-alem finance fullwide gb2312han geor gregorian grek greklow gujr guru hanidays hanidec hans hansfin hant hantfin hebr hebrew identical indian islamic islamic-civil islamic-rgsa islamic-tbla islamic-umalqura iso8601 japanese java jpan jpanfin kali khmr knda lana lanatham laoo latn lepc limb lower mlym mong mtei mymr mymrshan native nkoo no non-ignorable olck orya osma persian phonebook phonetic pinyin posix primary quaternary reformed roc roman romanlow saur search searchjl secondary shifted shrd sora standard stroke sund takr talu taml tamldec telu tertiary thai tibt traditional unihan upper vaii yes zhuyin',
                '_attributes' => 'type',
                '_elements' => 'type',
            ],
        ],
        125 => [
            'regex' => [
                '_value' => '(acceleration-(g-force|meter-per-second-squared]|angle-(degree|arc-minute|arc-second|radian]|area-(acre|square-(centimeter|inch|foot|kilometer|meter|mile|yard]|hectare]|consumption-(liter-per-kilometer|mile-per-gallon]|digital-(kilo|mega|giga|tera]?(bit|byte]|duration-(nanosecond|microsecond|millisecond|(day|hour|minute|month|second|week|year]]|electric-(milli]?(ampere|ohm|volt]|energy-(kilocalorie|calorie|foodcalorie|joule|kilojoule|kilowatt-hour]|frequency-(kilo|mega|giga]?hertz|length-(astronomical-unit|(pico|nano|micro|milli|centi|deci|kilo]?meter|fathom|foot|furlong|inch|light-year|mile|nautical-mile|parsec|yard]|light-lux|mass-(carat|(kilo|milli|micro]?gram|ounce|ounce-troy|pound|metric-ton|stone|ton]|power-(horsepower|(kilo|milli|mega|giga]?watt]|pressure-(hectopascal|inch-hg|millibar|millimeter-of-mercury|pound-per-square-inch]|proportion-karat|speed-((mile|kilometer]-per-hour|meter-per-second]|temperature-(celsius|fahrenheit|kelvin]|volume-(acre-foot|bushel|cup|fluid-ounce|(milli|deci|centi|hecto|mega]?liter|gallon|pint|quart|cubic-(centimeter|kilometer|meter|mile|inch|foot|yard]|tablespoon|teaspoon]]',
                '_attributes' => 'type',
                '_elements' => 'unit',
            ],
        ],
        126 => [
            'attributeValues' => [
                '_value' => '$variableID',
                '_attributes' => 'id',
                '_elements' => 'variable',
            ],
        ],
        127 => [
            'attributeValues' => [
                '_value' => '$variant',
                '_attributes' => 'type',
                '_elements' => 'variant',
            ],
        ],
        128 => [
            'attributeValues' => [
                '_value' => '$variant',
                '_attributes' => 'replacement type',
                '_elements' => 'variantAlias',
            ],
        ],
        129 => [
            'choice' => [
                '_value' => '$version',
                '_attributes' => 'number',
                '_elements' => 'version',
            ],
        ],
        130 => [
            'attributeValues' => [
                '_value' => '$time',
                '_attributes' => 'time',
                '_elements' => 'weekendEnd weekendStart',
            ],
        ],
        131 => [
            'attributeValues' => [
                '_value' => '$tzid',
                '_attributes' => 'type',
                '_elements' => 'zone',
            ],
        ],
        132 => [
            'attributeValues' => [
                '_value' => '$territory',
                '_attributes' => 'multizone',
                '_elements' => 'zoneFormatting',
            ],
        ],
        133 => [
            'attributeValues' => [
                '_value' => '$tzidList',
                '_attributes' => 'aliases',
                '_elements' => 'zoneItem',
            ],
        ],
        134 => [
            'attributeValues' => [
                '_value' => '$territory',
                '_attributes' => 'territory',
                '_elements' => 'zoneItem',
            ],
        ],
        135 => [
            'attributeValues' => [
                '_value' => '$tzid',
                '_attributes' => 'type',
                '_elements' => 'zoneItem',
            ],
        ],
    ],
    'alias' => [
        'languageAlias' => [
            'aa-SAAHO' => [
                '_replacement' => 'ssy',
                '_reason' => 'deprecated',
            ],
            'aar' => [
                '_replacement' => 'aa',
                '_reason' => 'overlong',
            ],
            'abk' => [
                '_replacement' => 'ab',
                '_reason' => 'overlong',
            ],
            'afr' => [
                '_replacement' => 'af',
                '_reason' => 'overlong',
            ],
            'aju' => [
                '_replacement' => 'jrb',
                '_reason' => 'macrolanguage',
            ],
            'aka' => [
                '_replacement' => 'ak',
                '_reason' => 'overlong',
            ],
            'alb' => [
                '_replacement' => 'sq',
                '_reason' => 'bibliographic',
            ],
            'als' => [
                '_replacement' => 'sq',
                '_reason' => 'macrolanguage',
            ],
            'amh' => [
                '_replacement' => 'am',
                '_reason' => 'overlong',
            ],
            'ara' => [
                '_replacement' => 'ar',
                '_reason' => 'overlong',
            ],
            'arb' => [
                '_replacement' => 'ar',
                '_reason' => 'macrolanguage',
            ],
            'arg' => [
                '_replacement' => 'an',
                '_reason' => 'overlong',
            ],
            'arm' => [
                '_replacement' => 'hy',
                '_reason' => 'bibliographic',
            ],
            'art-lojban' => [
                '_replacement' => 'jbo',
                '_reason' => 'deprecated',
            ],
            'asm' => [
                '_replacement' => 'as',
                '_reason' => 'overlong',
            ],
            'ava' => [
                '_replacement' => 'av',
                '_reason' => 'overlong',
            ],
            'ave' => [
                '_replacement' => 'ae',
                '_reason' => 'overlong',
            ],
            'aym' => [
                '_replacement' => 'ay',
                '_reason' => 'overlong',
            ],
            'ayr' => [
                '_replacement' => 'ay',
                '_reason' => 'macrolanguage',
            ],
            'aze' => [
                '_replacement' => 'az',
                '_reason' => 'overlong',
            ],
            'azj' => [
                '_replacement' => 'az',
                '_reason' => 'macrolanguage',
            ],
            'bak' => [
                '_replacement' => 'ba',
                '_reason' => 'overlong',
            ],
            'bam' => [
                '_replacement' => 'bm',
                '_reason' => 'overlong',
            ],
            'baq' => [
                '_replacement' => 'eu',
                '_reason' => 'bibliographic',
            ],
            'bcc' => [
                '_replacement' => 'bal',
                '_reason' => 'macrolanguage',
            ],
            'bcl' => [
                '_replacement' => 'bik',
                '_reason' => 'macrolanguage',
            ],
            'bel' => [
                '_replacement' => 'be',
                '_reason' => 'overlong',
            ],
            'ben' => [
                '_replacement' => 'bn',
                '_reason' => 'overlong',
            ],
            'bih' => [
                '_replacement' => 'bh',
                '_reason' => 'overlong',
            ],
            'bis' => [
                '_replacement' => 'bi',
                '_reason' => 'overlong',
            ],
            'bod' => [
                '_replacement' => 'bo',
                '_reason' => 'overlong',
            ],
            'bos' => [
                '_replacement' => 'bs',
                '_reason' => 'overlong',
            ],
            'bre' => [
                '_replacement' => 'br',
                '_reason' => 'overlong',
            ],
            'bul' => [
                '_replacement' => 'bg',
                '_reason' => 'overlong',
            ],
            'bur' => [
                '_replacement' => 'my',
                '_reason' => 'bibliographic',
            ],
            'bxk' => [
                '_replacement' => 'luy',
                '_reason' => 'macrolanguage',
            ],
            'bxr' => [
                '_replacement' => 'bua',
                '_reason' => 'macrolanguage',
            ],
            'cat' => [
                '_replacement' => 'ca',
                '_reason' => 'overlong',
            ],
            'ces' => [
                '_replacement' => 'cs',
                '_reason' => 'overlong',
            ],
            'cha' => [
                '_replacement' => 'ch',
                '_reason' => 'overlong',
            ],
            'che' => [
                '_replacement' => 'ce',
                '_reason' => 'overlong',
            ],
            'chi' => [
                '_replacement' => 'zh',
                '_reason' => 'bibliographic',
            ],
            'chu' => [
                '_replacement' => 'cu',
                '_reason' => 'overlong',
            ],
            'chv' => [
                '_replacement' => 'cv',
                '_reason' => 'overlong',
            ],
            'cld' => [
                '_replacement' => 'syr',
                '_reason' => 'macrolanguage',
            ],
            'cmn' => [
                '_replacement' => 'zh',
                '_reason' => 'macrolanguage',
            ],
            'cor' => [
                '_replacement' => 'kw',
                '_reason' => 'overlong',
            ],
            'cos' => [
                '_replacement' => 'co',
                '_reason' => 'overlong',
            ],
            'cre' => [
                '_replacement' => 'cr',
                '_reason' => 'overlong',
            ],
            'cwd' => [
                '_replacement' => 'cr',
                '_reason' => 'macrolanguage',
            ],
            'cym' => [
                '_replacement' => 'cy',
                '_reason' => 'overlong',
            ],
            'cze' => [
                '_replacement' => 'cs',
                '_reason' => 'bibliographic',
            ],
            'dan' => [
                '_replacement' => 'da',
                '_reason' => 'overlong',
            ],
            'deu' => [
                '_replacement' => 'de',
                '_reason' => 'overlong',
            ],
            'dgo' => [
                '_replacement' => 'doi',
                '_reason' => 'macrolanguage',
            ],
            'dhd' => [
                '_replacement' => 'mwr',
                '_reason' => 'macrolanguage',
            ],
            'dik' => [
                '_replacement' => 'din',
                '_reason' => 'macrolanguage',
            ],
            'diq' => [
                '_replacement' => 'zza',
                '_reason' => 'macrolanguage',
            ],
            'div' => [
                '_replacement' => 'dv',
                '_reason' => 'overlong',
            ],
            'dut' => [
                '_replacement' => 'nl',
                '_reason' => 'bibliographic',
            ],
            'dzo' => [
                '_replacement' => 'dz',
                '_reason' => 'overlong',
            ],
            'ekk' => [
                '_replacement' => 'et',
                '_reason' => 'macrolanguage',
            ],
            'ell' => [
                '_replacement' => 'el',
                '_reason' => 'overlong',
            ],
            'emk' => [
                '_replacement' => 'man',
                '_reason' => 'macrolanguage',
            ],
            'eng' => [
                '_replacement' => 'en',
                '_reason' => 'overlong',
            ],
            'epo' => [
                '_replacement' => 'eo',
                '_reason' => 'overlong',
            ],
            'esk' => [
                '_replacement' => 'ik',
                '_reason' => 'macrolanguage',
            ],
            'est' => [
                '_replacement' => 'et',
                '_reason' => 'overlong',
            ],
            'eus' => [
                '_replacement' => 'eu',
                '_reason' => 'overlong',
            ],
            'ewe' => [
                '_replacement' => 'ee',
                '_reason' => 'overlong',
            ],
            'fao' => [
                '_replacement' => 'fo',
                '_reason' => 'overlong',
            ],
            'fas' => [
                '_replacement' => 'fa',
                '_reason' => 'overlong',
            ],
            'fat' => [
                '_replacement' => 'ak',
                '_reason' => 'macrolanguage',
            ],
            'fij' => [
                '_replacement' => 'fj',
                '_reason' => 'overlong',
            ],
            'fin' => [
                '_replacement' => 'fi',
                '_reason' => 'overlong',
            ],
            'fra' => [
                '_replacement' => 'fr',
                '_reason' => 'overlong',
            ],
            'fre' => [
                '_replacement' => 'fr',
                '_reason' => 'bibliographic',
            ],
            'fry' => [
                '_replacement' => 'fy',
                '_reason' => 'overlong',
            ],
            'fuc' => [
                '_replacement' => 'ff',
                '_reason' => 'macrolanguage',
            ],
            'ful' => [
                '_replacement' => 'ff',
                '_reason' => 'overlong',
            ],
            'gaz' => [
                '_replacement' => 'om',
                '_reason' => 'macrolanguage',
            ],
            'gbo' => [
                '_replacement' => 'grb',
                '_reason' => 'macrolanguage',
            ],
            'geo' => [
                '_replacement' => 'ka',
                '_reason' => 'bibliographic',
            ],
            'ger' => [
                '_replacement' => 'de',
                '_reason' => 'bibliographic',
            ],
            'gla' => [
                '_replacement' => 'gd',
                '_reason' => 'overlong',
            ],
            'gle' => [
                '_replacement' => 'ga',
                '_reason' => 'overlong',
            ],
            'glg' => [
                '_replacement' => 'gl',
                '_reason' => 'overlong',
            ],
            'glv' => [
                '_replacement' => 'gv',
                '_reason' => 'overlong',
            ],
            'gno' => [
                '_replacement' => 'gon',
                '_reason' => 'macrolanguage',
            ],
            'gre' => [
                '_replacement' => 'el',
                '_reason' => 'bibliographic',
            ],
            'grn' => [
                '_replacement' => 'gn',
                '_reason' => 'overlong',
            ],
            'gug' => [
                '_replacement' => 'gn',
                '_reason' => 'macrolanguage',
            ],
            'guj' => [
                '_replacement' => 'gu',
                '_reason' => 'overlong',
            ],
            'gya' => [
                '_replacement' => 'gba',
                '_reason' => 'macrolanguage',
            ],
            'hat' => [
                '_replacement' => 'ht',
                '_reason' => 'overlong',
            ],
            'hau' => [
                '_replacement' => 'ha',
                '_reason' => 'overlong',
            ],
            'hbs' => [
                '_replacement' => 'sr-Latn',
                '_reason' => 'overlong',
            ],
            'hdn' => [
                '_replacement' => 'hai',
                '_reason' => 'macrolanguage',
            ],
            'hea' => [
                '_replacement' => 'hmn',
                '_reason' => 'macrolanguage',
            ],
            'heb' => [
                '_replacement' => 'he',
                '_reason' => 'overlong',
            ],
            'her' => [
                '_replacement' => 'hz',
                '_reason' => 'overlong',
            ],
            'him' => [
                '_replacement' => 'srx',
                '_reason' => 'macrolanguage',
            ],
            'hin' => [
                '_replacement' => 'hi',
                '_reason' => 'overlong',
            ],
            'hmo' => [
                '_replacement' => 'ho',
                '_reason' => 'overlong',
            ],
            'hrv' => [
                '_replacement' => 'hr',
                '_reason' => 'overlong',
            ],
            'hun' => [
                '_replacement' => 'hu',
                '_reason' => 'overlong',
            ],
            'hye' => [
                '_replacement' => 'hy',
                '_reason' => 'overlong',
            ],
            'i-ami' => [
                '_replacement' => 'ami',
                '_reason' => 'deprecated',
            ],
            'i-bnn' => [
                '_replacement' => 'bnn',
                '_reason' => 'deprecated',
            ],
            'i-hak' => [
                '_replacement' => 'hak',
                '_reason' => 'deprecated',
            ],
            'i-klingon' => [
                '_replacement' => 'tlh',
                '_reason' => 'deprecated',
            ],
            'i-lux' => [
                '_replacement' => 'lb',
                '_reason' => 'deprecated',
            ],
            'i-navajo' => [
                '_replacement' => 'nv',
                '_reason' => 'deprecated',
            ],
            'i-pwn' => [
                '_replacement' => 'pwn',
                '_reason' => 'deprecated',
            ],
            'i-tao' => [
                '_replacement' => 'tao',
                '_reason' => 'deprecated',
            ],
            'i-tay' => [
                '_replacement' => 'tay',
                '_reason' => 'deprecated',
            ],
            'i-tsu' => [
                '_replacement' => 'tsu',
                '_reason' => 'deprecated',
            ],
            'ibo' => [
                '_replacement' => 'ig',
                '_reason' => 'overlong',
            ],
            'ice' => [
                '_replacement' => 'is',
                '_reason' => 'bibliographic',
            ],
            'ido' => [
                '_replacement' => 'io',
                '_reason' => 'overlong',
            ],
            'iii' => [
                '_replacement' => 'ii',
                '_reason' => 'overlong',
            ],
            'ike' => [
                '_replacement' => 'iu',
                '_reason' => 'macrolanguage',
            ],
            'iku' => [
                '_replacement' => 'iu',
                '_reason' => 'overlong',
            ],
            'ile' => [
                '_replacement' => 'ie',
                '_reason' => 'overlong',
            ],
            'in' => [
                '_replacement' => 'id',
                '_reason' => 'deprecated',
            ],
            'ina' => [
                '_replacement' => 'ia',
                '_reason' => 'overlong',
            ],
            'ind' => [
                '_replacement' => 'id',
                '_reason' => 'overlong',
            ],
            'ipk' => [
                '_replacement' => 'ik',
                '_reason' => 'overlong',
            ],
            'isl' => [
                '_replacement' => 'is',
                '_reason' => 'overlong',
            ],
            'ita' => [
                '_replacement' => 'it',
                '_reason' => 'overlong',
            ],
            'iw' => [
                '_replacement' => 'he',
                '_reason' => 'deprecated',
            ],
            'jav' => [
                '_replacement' => 'jv',
                '_reason' => 'overlong',
            ],
            'ji' => [
                '_replacement' => 'yi',
                '_reason' => 'deprecated',
            ],
            'jpn' => [
                '_replacement' => 'ja',
                '_reason' => 'overlong',
            ],
            'jw' => [
                '_replacement' => 'jv',
                '_reason' => 'deprecated',
            ],
            'kal' => [
                '_replacement' => 'kl',
                '_reason' => 'overlong',
            ],
            'kan' => [
                '_replacement' => 'kn',
                '_reason' => 'overlong',
            ],
            'kas' => [
                '_replacement' => 'ks',
                '_reason' => 'overlong',
            ],
            'kat' => [
                '_replacement' => 'ka',
                '_reason' => 'overlong',
            ],
            'kau' => [
                '_replacement' => 'kr',
                '_reason' => 'overlong',
            ],
            'kaz' => [
                '_replacement' => 'kk',
                '_reason' => 'overlong',
            ],
            'khk' => [
                '_replacement' => 'mn',
                '_reason' => 'macrolanguage',
            ],
            'khm' => [
                '_replacement' => 'km',
                '_reason' => 'overlong',
            ],
            'kik' => [
                '_replacement' => 'ki',
                '_reason' => 'overlong',
            ],
            'kin' => [
                '_replacement' => 'rw',
                '_reason' => 'overlong',
            ],
            'kir' => [
                '_replacement' => 'ky',
                '_reason' => 'overlong',
            ],
            'kmr' => [
                '_replacement' => 'ku',
                '_reason' => 'macrolanguage',
            ],
            'knc' => [
                '_replacement' => 'kr',
                '_reason' => 'macrolanguage',
            ],
            'kng' => [
                '_replacement' => 'kg',
                '_reason' => 'macrolanguage',
            ],
            'knn' => [
                '_replacement' => 'kok',
                '_reason' => 'macrolanguage',
            ],
            'kom' => [
                '_replacement' => 'kv',
                '_reason' => 'overlong',
            ],
            'kon' => [
                '_replacement' => 'kg',
                '_reason' => 'overlong',
            ],
            'kor' => [
                '_replacement' => 'ko',
                '_reason' => 'overlong',
            ],
            'kpv' => [
                '_replacement' => 'kv',
                '_reason' => 'macrolanguage',
            ],
            'kua' => [
                '_replacement' => 'kj',
                '_reason' => 'overlong',
            ],
            'kur' => [
                '_replacement' => 'ku',
                '_reason' => 'overlong',
            ],
            'lao' => [
                '_replacement' => 'lo',
                '_reason' => 'overlong',
            ],
            'lat' => [
                '_replacement' => 'la',
                '_reason' => 'overlong',
            ],
            'lav' => [
                '_replacement' => 'lv',
                '_reason' => 'overlong',
            ],
            'lbk' => [
                '_replacement' => 'bnc',
                '_reason' => 'macrolanguage',
            ],
            'lim' => [
                '_replacement' => 'li',
                '_reason' => 'overlong',
            ],
            'lin' => [
                '_replacement' => 'ln',
                '_reason' => 'overlong',
            ],
            'lit' => [
                '_replacement' => 'lt',
                '_reason' => 'overlong',
            ],
            'ltz' => [
                '_replacement' => 'lb',
                '_reason' => 'overlong',
            ],
            'lub' => [
                '_replacement' => 'lu',
                '_reason' => 'overlong',
            ],
            'lug' => [
                '_replacement' => 'lg',
                '_reason' => 'overlong',
            ],
            'lvs' => [
                '_replacement' => 'lv',
                '_reason' => 'macrolanguage',
            ],
            'mac' => [
                '_replacement' => 'mk',
                '_reason' => 'bibliographic',
            ],
            'mah' => [
                '_replacement' => 'mh',
                '_reason' => 'overlong',
            ],
            'mal' => [
                '_replacement' => 'ml',
                '_reason' => 'overlong',
            ],
            'mao' => [
                '_replacement' => 'mi',
                '_reason' => 'bibliographic',
            ],
            'mar' => [
                '_replacement' => 'mr',
                '_reason' => 'overlong',
            ],
            'may' => [
                '_replacement' => 'ms',
                '_reason' => 'bibliographic',
            ],
            'mhr' => [
                '_replacement' => 'chm',
                '_reason' => 'macrolanguage',
            ],
            'mkd' => [
                '_replacement' => 'mk',
                '_reason' => 'overlong',
            ],
            'mlg' => [
                '_replacement' => 'mg',
                '_reason' => 'overlong',
            ],
            'mlt' => [
                '_replacement' => 'mt',
                '_reason' => 'overlong',
            ],
            'mnk' => [
                '_replacement' => 'man',
                '_reason' => 'macrolanguage',
            ],
            'mo' => [
                '_replacement' => 'ro-MD',
                '_reason' => 'deprecated',
            ],
            'mol' => [
                '_replacement' => 'ro-MD',
                '_reason' => 'overlong',
            ],
            'mon' => [
                '_replacement' => 'mn',
                '_reason' => 'overlong',
            ],
            'mri' => [
                '_replacement' => 'mi',
                '_reason' => 'overlong',
            ],
            'msa' => [
                '_replacement' => 'ms',
                '_reason' => 'overlong',
            ],
            'mup' => [
                '_replacement' => 'raj',
                '_reason' => 'macrolanguage',
            ],
            'mya' => [
                '_replacement' => 'my',
                '_reason' => 'overlong',
            ],
            'nau' => [
                '_replacement' => 'na',
                '_reason' => 'overlong',
            ],
            'nav' => [
                '_replacement' => 'nv',
                '_reason' => 'overlong',
            ],
            'nbl' => [
                '_replacement' => 'nr',
                '_reason' => 'overlong',
            ],
            'nde' => [
                '_replacement' => 'nd',
                '_reason' => 'overlong',
            ],
            'ndo' => [
                '_replacement' => 'ng',
                '_reason' => 'overlong',
            ],
            'nep' => [
                '_replacement' => 'ne',
                '_reason' => 'overlong',
            ],
            'nld' => [
                '_replacement' => 'nl',
                '_reason' => 'overlong',
            ],
            'nno' => [
                '_replacement' => 'nn',
                '_reason' => 'overlong',
            ],
            'no' => [
                '_replacement' => 'nb',
                '_reason' => 'legacy',
            ],
            'no-BOKMAL' => [
                '_replacement' => 'nb',
                '_reason' => 'deprecated',
            ],
            'no-NYNORSK' => [
                '_replacement' => 'nn',
                '_reason' => 'deprecated',
            ],
            'no-bok' => [
                '_replacement' => 'nb',
                '_reason' => 'deprecated',
            ],
            'no-nyn' => [
                '_replacement' => 'nn',
                '_reason' => 'deprecated',
            ],
            'nob' => [
                '_replacement' => 'nb',
                '_reason' => 'overlong',
            ],
            'nor' => [
                '_replacement' => 'nb',
                '_reason' => 'overlong',
            ],
            'npi' => [
                '_replacement' => 'ne',
                '_reason' => 'macrolanguage',
            ],
            'nya' => [
                '_replacement' => 'ny',
                '_reason' => 'overlong',
            ],
            'oci' => [
                '_replacement' => 'oc',
                '_reason' => 'overlong',
            ],
            'ojg' => [
                '_replacement' => 'oj',
                '_reason' => 'macrolanguage',
            ],
            'oji' => [
                '_replacement' => 'oj',
                '_reason' => 'overlong',
            ],
            'ori' => [
                '_replacement' => 'or',
                '_reason' => 'overlong',
            ],
            'orm' => [
                '_replacement' => 'om',
                '_reason' => 'overlong',
            ],
            'ory' => [
                '_replacement' => 'or',
                '_reason' => 'macrolanguage',
            ],
            'oss' => [
                '_replacement' => 'os',
                '_reason' => 'overlong',
            ],
            'pan' => [
                '_replacement' => 'pa',
                '_reason' => 'overlong',
            ],
            'pbu' => [
                '_replacement' => 'ps',
                '_reason' => 'macrolanguage',
            ],
            'per' => [
                '_replacement' => 'fa',
                '_reason' => 'bibliographic',
            ],
            'pes' => [
                '_replacement' => 'fa',
                '_reason' => 'macrolanguage',
            ],
            'pli' => [
                '_replacement' => 'pi',
                '_reason' => 'overlong',
            ],
            'plt' => [
                '_replacement' => 'mg',
                '_reason' => 'macrolanguage',
            ],
            'pnb' => [
                '_replacement' => 'lah',
                '_reason' => 'macrolanguage',
            ],
            'pol' => [
                '_replacement' => 'pl',
                '_reason' => 'overlong',
            ],
            'por' => [
                '_replacement' => 'pt',
                '_reason' => 'overlong',
            ],
            'pus' => [
                '_replacement' => 'ps',
                '_reason' => 'overlong',
            ],
            'que' => [
                '_replacement' => 'qu',
                '_reason' => 'overlong',
            ],
            'quz' => [
                '_replacement' => 'qu',
                '_reason' => 'macrolanguage',
            ],
            'rmy' => [
                '_replacement' => 'rom',
                '_reason' => 'macrolanguage',
            ],
            'roh' => [
                '_replacement' => 'rm',
                '_reason' => 'overlong',
            ],
            'ron' => [
                '_replacement' => 'ro',
                '_reason' => 'overlong',
            ],
            'rum' => [
                '_replacement' => 'ro',
                '_reason' => 'bibliographic',
            ],
            'run' => [
                '_replacement' => 'rn',
                '_reason' => 'overlong',
            ],
            'rus' => [
                '_replacement' => 'ru',
                '_reason' => 'overlong',
            ],
            'sag' => [
                '_replacement' => 'sg',
                '_reason' => 'overlong',
            ],
            'san' => [
                '_replacement' => 'sa',
                '_reason' => 'overlong',
            ],
            'sgn-BE-FR' => [
                '_replacement' => 'sfb',
                '_reason' => 'deprecated',
            ],
            'sgn-BE-NL' => [
                '_replacement' => 'vgt',
                '_reason' => 'deprecated',
            ],
            'sgn-CH-DE' => [
                '_replacement' => 'sgg',
                '_reason' => 'deprecated',
            ],
            'sh' => [
                '_replacement' => 'sr-Latn',
                '_reason' => 'legacy',
            ],
            'sin' => [
                '_replacement' => 'si',
                '_reason' => 'overlong',
            ],
            'slk' => [
                '_replacement' => 'sk',
                '_reason' => 'overlong',
            ],
            'slo' => [
                '_replacement' => 'sk',
                '_reason' => 'bibliographic',
            ],
            'slv' => [
                '_replacement' => 'sl',
                '_reason' => 'overlong',
            ],
            'sme' => [
                '_replacement' => 'se',
                '_reason' => 'overlong',
            ],
            'smo' => [
                '_replacement' => 'sm',
                '_reason' => 'overlong',
            ],
            'sna' => [
                '_replacement' => 'sn',
                '_reason' => 'overlong',
            ],
            'snd' => [
                '_replacement' => 'sd',
                '_reason' => 'overlong',
            ],
            'som' => [
                '_replacement' => 'so',
                '_reason' => 'overlong',
            ],
            'sot' => [
                '_replacement' => 'st',
                '_reason' => 'overlong',
            ],
            'spa' => [
                '_replacement' => 'es',
                '_reason' => 'overlong',
            ],
            'spy' => [
                '_replacement' => 'kln',
                '_reason' => 'macrolanguage',
            ],
            'sqi' => [
                '_replacement' => 'sq',
                '_reason' => 'overlong',
            ],
            'src' => [
                '_replacement' => 'sc',
                '_reason' => 'macrolanguage',
            ],
            'srd' => [
                '_replacement' => 'sc',
                '_reason' => 'overlong',
            ],
            'srp' => [
                '_replacement' => 'sr',
                '_reason' => 'overlong',
            ],
            'ssw' => [
                '_replacement' => 'ss',
                '_reason' => 'overlong',
            ],
            'sun' => [
                '_replacement' => 'su',
                '_reason' => 'overlong',
            ],
            'swa' => [
                '_replacement' => 'sw',
                '_reason' => 'overlong',
            ],
            'swe' => [
                '_replacement' => 'sv',
                '_reason' => 'overlong',
            ],
            'swh' => [
                '_replacement' => 'sw',
                '_reason' => 'macrolanguage',
            ],
            'tah' => [
                '_replacement' => 'ty',
                '_reason' => 'overlong',
            ],
            'tam' => [
                '_replacement' => 'ta',
                '_reason' => 'overlong',
            ],
            'tat' => [
                '_replacement' => 'tt',
                '_reason' => 'overlong',
            ],
            'tel' => [
                '_replacement' => 'te',
                '_reason' => 'overlong',
            ],
            'tgk' => [
                '_replacement' => 'tg',
                '_reason' => 'overlong',
            ],
            'tgl' => [
                '_replacement' => 'fil',
                '_reason' => 'overlong',
            ],
            'tha' => [
                '_replacement' => 'th',
                '_reason' => 'overlong',
            ],
            'tib' => [
                '_replacement' => 'bo',
                '_reason' => 'bibliographic',
            ],
            'tir' => [
                '_replacement' => 'ti',
                '_reason' => 'overlong',
            ],
            'tl' => [
                '_replacement' => 'fil',
                '_reason' => 'legacy',
            ],
            'ton' => [
                '_replacement' => 'to',
                '_reason' => 'overlong',
            ],
            'tsn' => [
                '_replacement' => 'tn',
                '_reason' => 'overlong',
            ],
            'tso' => [
                '_replacement' => 'ts',
                '_reason' => 'overlong',
            ],
            'ttq' => [
                '_replacement' => 'tmh',
                '_reason' => 'macrolanguage',
            ],
            'tuk' => [
                '_replacement' => 'tk',
                '_reason' => 'overlong',
            ],
            'tur' => [
                '_replacement' => 'tr',
                '_reason' => 'overlong',
            ],
            'tw' => [
                '_replacement' => 'ak',
                '_reason' => 'macrolanguage',
            ],
            'twi' => [
                '_replacement' => 'ak',
                '_reason' => 'overlong',
            ],
            'uig' => [
                '_replacement' => 'ug',
                '_reason' => 'overlong',
            ],
            'ukr' => [
                '_replacement' => 'uk',
                '_reason' => 'overlong',
            ],
            'umu' => [
                '_replacement' => 'del',
                '_reason' => 'macrolanguage',
            ],
            'urd' => [
                '_replacement' => 'ur',
                '_reason' => 'overlong',
            ],
            'uzb' => [
                '_replacement' => 'uz',
                '_reason' => 'overlong',
            ],
            'uzn' => [
                '_replacement' => 'uz',
                '_reason' => 'macrolanguage',
            ],
            'ven' => [
                '_replacement' => 've',
                '_reason' => 'overlong',
            ],
            'vie' => [
                '_replacement' => 'vi',
                '_reason' => 'overlong',
            ],
            'vol' => [
                '_replacement' => 'vo',
                '_reason' => 'overlong',
            ],
            'wel' => [
                '_replacement' => 'cy',
                '_reason' => 'bibliographic',
            ],
            'wln' => [
                '_replacement' => 'wa',
                '_reason' => 'overlong',
            ],
            'wol' => [
                '_replacement' => 'wo',
                '_reason' => 'overlong',
            ],
            'xho' => [
                '_replacement' => 'xh',
                '_reason' => 'overlong',
            ],
            'xpe' => [
                '_replacement' => 'kpe',
                '_reason' => 'macrolanguage',
            ],
            'xsl' => [
                '_replacement' => 'den',
                '_reason' => 'macrolanguage',
            ],
            'ydd' => [
                '_replacement' => 'yi',
                '_reason' => 'macrolanguage',
            ],
            'yid' => [
                '_replacement' => 'yi',
                '_reason' => 'overlong',
            ],
            'yor' => [
                '_replacement' => 'yo',
                '_reason' => 'overlong',
            ],
            'zai' => [
                '_replacement' => 'zap',
                '_reason' => 'macrolanguage',
            ],
            'zh-guoyu' => [
                '_replacement' => 'zh',
                '_reason' => 'deprecated',
            ],
            'zh-hakka' => [
                '_replacement' => 'hak',
                '_reason' => 'deprecated',
            ],
            'zh-min' => [
                '_reason' => 'deprecated',
            ],
            'zh-min-nan' => [
                '_replacement' => 'nan',
                '_reason' => 'deprecated',
            ],
            'zh-xiang' => [
                '_replacement' => 'hsn',
                '_reason' => 'deprecated',
            ],
            'zha' => [
                '_replacement' => 'za',
                '_reason' => 'overlong',
            ],
            'zho' => [
                '_replacement' => 'zh',
                '_reason' => 'overlong',
            ],
            'zsm' => [
                '_replacement' => 'ms',
                '_reason' => 'macrolanguage',
            ],
            'zul' => [
                '_replacement' => 'zu',
                '_reason' => 'overlong',
            ],
            'zyb' => [
                '_replacement' => 'za',
                '_reason' => 'macrolanguage',
            ],
        ],
        'scriptAlias' => [
            'Qaai' => [
                '_replacement' => 'Zinh',
                '_reason' => 'deprecated',
            ],
        ],
        'territoryAlias' => [
            '004' => [
                '_replacement' => 'AF',
                '_reason' => 'overlong',
            ],
            '008' => [
                '_replacement' => 'AL',
                '_reason' => 'overlong',
            ],
            '010' => [
                '_replacement' => 'AQ',
                '_reason' => 'overlong',
            ],
            '012' => [
                '_replacement' => 'DZ',
                '_reason' => 'overlong',
            ],
            '016' => [
                '_replacement' => 'AS',
                '_reason' => 'overlong',
            ],
            '020' => [
                '_replacement' => 'AD',
                '_reason' => 'overlong',
            ],
            '024' => [
                '_replacement' => 'AO',
                '_reason' => 'overlong',
            ],
            '028' => [
                '_replacement' => 'AG',
                '_reason' => 'overlong',
            ],
            '031' => [
                '_replacement' => 'AZ',
                '_reason' => 'overlong',
            ],
            '032' => [
                '_replacement' => 'AR',
                '_reason' => 'overlong',
            ],
            '036' => [
                '_replacement' => 'AU',
                '_reason' => 'overlong',
            ],
            '040' => [
                '_replacement' => 'AT',
                '_reason' => 'overlong',
            ],
            '044' => [
                '_replacement' => 'BS',
                '_reason' => 'overlong',
            ],
            '048' => [
                '_replacement' => 'BH',
                '_reason' => 'overlong',
            ],
            '050' => [
                '_replacement' => 'BD',
                '_reason' => 'overlong',
            ],
            '051' => [
                '_replacement' => 'AM',
                '_reason' => 'overlong',
            ],
            '052' => [
                '_replacement' => 'BB',
                '_reason' => 'overlong',
            ],
            '056' => [
                '_replacement' => 'BE',
                '_reason' => 'overlong',
            ],
            '060' => [
                '_replacement' => 'BM',
                '_reason' => 'overlong',
            ],
            '062' => [
                '_replacement' => '034 143',
                '_reason' => 'deprecated',
            ],
            '064' => [
                '_replacement' => 'BT',
                '_reason' => 'overlong',
            ],
            '068' => [
                '_replacement' => 'BO',
                '_reason' => 'overlong',
            ],
            '070' => [
                '_replacement' => 'BA',
                '_reason' => 'overlong',
            ],
            '072' => [
                '_replacement' => 'BW',
                '_reason' => 'overlong',
            ],
            '074' => [
                '_replacement' => 'BV',
                '_reason' => 'overlong',
            ],
            '076' => [
                '_replacement' => 'BR',
                '_reason' => 'overlong',
            ],
            '084' => [
                '_replacement' => 'BZ',
                '_reason' => 'overlong',
            ],
            '086' => [
                '_replacement' => 'IO',
                '_reason' => 'overlong',
            ],
            '090' => [
                '_replacement' => 'SB',
                '_reason' => 'overlong',
            ],
            '092' => [
                '_replacement' => 'VG',
                '_reason' => 'overlong',
            ],
            '096' => [
                '_replacement' => 'BN',
                '_reason' => 'overlong',
            ],
            100 => [
                '_replacement' => 'BG',
                '_reason' => 'overlong',
            ],
            104 => [
                '_replacement' => 'MM',
                '_reason' => 'overlong',
            ],
            108 => [
                '_replacement' => 'BI',
                '_reason' => 'overlong',
            ],
            112 => [
                '_replacement' => 'BY',
                '_reason' => 'overlong',
            ],
            116 => [
                '_replacement' => 'KH',
                '_reason' => 'overlong',
            ],
            120 => [
                '_replacement' => 'CM',
                '_reason' => 'overlong',
            ],
            124 => [
                '_replacement' => 'CA',
                '_reason' => 'overlong',
            ],
            132 => [
                '_replacement' => 'CV',
                '_reason' => 'overlong',
            ],
            136 => [
                '_replacement' => 'KY',
                '_reason' => 'overlong',
            ],
            140 => [
                '_replacement' => 'CF',
                '_reason' => 'overlong',
            ],
            144 => [
                '_replacement' => 'LK',
                '_reason' => 'overlong',
            ],
            148 => [
                '_replacement' => 'TD',
                '_reason' => 'overlong',
            ],
            152 => [
                '_replacement' => 'CL',
                '_reason' => 'overlong',
            ],
            156 => [
                '_replacement' => 'CN',
                '_reason' => 'overlong',
            ],
            158 => [
                '_replacement' => 'TW',
                '_reason' => 'overlong',
            ],
            162 => [
                '_replacement' => 'CX',
                '_reason' => 'overlong',
            ],
            166 => [
                '_replacement' => 'CC',
                '_reason' => 'overlong',
            ],
            170 => [
                '_replacement' => 'CO',
                '_reason' => 'overlong',
            ],
            172 => [
                '_replacement' => 'RU AM AZ BY GE KG KZ MD TJ TM UA UZ',
                '_reason' => 'deprecated',
            ],
            174 => [
                '_replacement' => 'KM',
                '_reason' => 'overlong',
            ],
            175 => [
                '_replacement' => 'YT',
                '_reason' => 'overlong',
            ],
            178 => [
                '_replacement' => 'CG',
                '_reason' => 'overlong',
            ],
            180 => [
                '_replacement' => 'CD',
                '_reason' => 'overlong',
            ],
            184 => [
                '_replacement' => 'CK',
                '_reason' => 'overlong',
            ],
            188 => [
                '_replacement' => 'CR',
                '_reason' => 'overlong',
            ],
            191 => [
                '_replacement' => 'HR',
                '_reason' => 'overlong',
            ],
            192 => [
                '_replacement' => 'CU',
                '_reason' => 'overlong',
            ],
            196 => [
                '_replacement' => 'CY',
                '_reason' => 'overlong',
            ],
            200 => [
                '_replacement' => 'CZ SK',
                '_reason' => 'deprecated',
            ],
            203 => [
                '_replacement' => 'CZ',
                '_reason' => 'overlong',
            ],
            204 => [
                '_replacement' => 'BJ',
                '_reason' => 'overlong',
            ],
            208 => [
                '_replacement' => 'DK',
                '_reason' => 'overlong',
            ],
            212 => [
                '_replacement' => 'DM',
                '_reason' => 'overlong',
            ],
            214 => [
                '_replacement' => 'DO',
                '_reason' => 'overlong',
            ],
            218 => [
                '_replacement' => 'EC',
                '_reason' => 'overlong',
            ],
            222 => [
                '_replacement' => 'SV',
                '_reason' => 'overlong',
            ],
            226 => [
                '_replacement' => 'GQ',
                '_reason' => 'overlong',
            ],
            230 => [
                '_replacement' => 'ET',
                '_reason' => 'deprecated',
            ],
            231 => [
                '_replacement' => 'ET',
                '_reason' => 'overlong',
            ],
            232 => [
                '_replacement' => 'ER',
                '_reason' => 'overlong',
            ],
            233 => [
                '_replacement' => 'EE',
                '_reason' => 'overlong',
            ],
            234 => [
                '_replacement' => 'FO',
                '_reason' => 'overlong',
            ],
            238 => [
                '_replacement' => 'FK',
                '_reason' => 'overlong',
            ],
            239 => [
                '_replacement' => 'GS',
                '_reason' => 'overlong',
            ],
            242 => [
                '_replacement' => 'FJ',
                '_reason' => 'overlong',
            ],
            246 => [
                '_replacement' => 'FI',
                '_reason' => 'overlong',
            ],
            248 => [
                '_replacement' => 'AX',
                '_reason' => 'overlong',
            ],
            249 => [
                '_replacement' => 'FR',
                '_reason' => 'overlong',
            ],
            250 => [
                '_replacement' => 'FR',
                '_reason' => 'overlong',
            ],
            254 => [
                '_replacement' => 'GF',
                '_reason' => 'overlong',
            ],
            258 => [
                '_replacement' => 'PF',
                '_reason' => 'overlong',
            ],
            260 => [
                '_replacement' => 'TF',
                '_reason' => 'overlong',
            ],
            262 => [
                '_replacement' => 'DJ',
                '_reason' => 'overlong',
            ],
            266 => [
                '_replacement' => 'GA',
                '_reason' => 'overlong',
            ],
            268 => [
                '_replacement' => 'GE',
                '_reason' => 'overlong',
            ],
            270 => [
                '_replacement' => 'GM',
                '_reason' => 'overlong',
            ],
            275 => [
                '_replacement' => 'PS',
                '_reason' => 'overlong',
            ],
            276 => [
                '_replacement' => 'DE',
                '_reason' => 'overlong',
            ],
            278 => [
                '_replacement' => 'DE',
                '_reason' => 'overlong',
            ],
            280 => [
                '_replacement' => 'DE',
                '_reason' => 'deprecated',
            ],
            288 => [
                '_replacement' => 'GH',
                '_reason' => 'overlong',
            ],
            292 => [
                '_replacement' => 'GI',
                '_reason' => 'overlong',
            ],
            296 => [
                '_replacement' => 'KI',
                '_reason' => 'overlong',
            ],
            300 => [
                '_replacement' => 'GR',
                '_reason' => 'overlong',
            ],
            304 => [
                '_replacement' => 'GL',
                '_reason' => 'overlong',
            ],
            308 => [
                '_replacement' => 'GD',
                '_reason' => 'overlong',
            ],
            312 => [
                '_replacement' => 'GP',
                '_reason' => 'overlong',
            ],
            316 => [
                '_replacement' => 'GU',
                '_reason' => 'overlong',
            ],
            320 => [
                '_replacement' => 'GT',
                '_reason' => 'overlong',
            ],
            324 => [
                '_replacement' => 'GN',
                '_reason' => 'overlong',
            ],
            328 => [
                '_replacement' => 'GY',
                '_reason' => 'overlong',
            ],
            332 => [
                '_replacement' => 'HT',
                '_reason' => 'overlong',
            ],
            334 => [
                '_replacement' => 'HM',
                '_reason' => 'overlong',
            ],
            336 => [
                '_replacement' => 'VA',
                '_reason' => 'overlong',
            ],
            340 => [
                '_replacement' => 'HN',
                '_reason' => 'overlong',
            ],
            344 => [
                '_replacement' => 'HK',
                '_reason' => 'overlong',
            ],
            348 => [
                '_replacement' => 'HU',
                '_reason' => 'overlong',
            ],
            352 => [
                '_replacement' => 'IS',
                '_reason' => 'overlong',
            ],
            356 => [
                '_replacement' => 'IN',
                '_reason' => 'overlong',
            ],
            360 => [
                '_replacement' => 'ID',
                '_reason' => 'overlong',
            ],
            364 => [
                '_replacement' => 'IR',
                '_reason' => 'overlong',
            ],
            368 => [
                '_replacement' => 'IQ',
                '_reason' => 'overlong',
            ],
            372 => [
                '_replacement' => 'IE',
                '_reason' => 'overlong',
            ],
            376 => [
                '_replacement' => 'IL',
                '_reason' => 'overlong',
            ],
            380 => [
                '_replacement' => 'IT',
                '_reason' => 'overlong',
            ],
            384 => [
                '_replacement' => 'CI',
                '_reason' => 'overlong',
            ],
            388 => [
                '_replacement' => 'JM',
                '_reason' => 'overlong',
            ],
            392 => [
                '_replacement' => 'JP',
                '_reason' => 'overlong',
            ],
            398 => [
                '_replacement' => 'KZ',
                '_reason' => 'overlong',
            ],
            400 => [
                '_replacement' => 'JO',
                '_reason' => 'overlong',
            ],
            404 => [
                '_replacement' => 'KE',
                '_reason' => 'overlong',
            ],
            408 => [
                '_replacement' => 'KP',
                '_reason' => 'overlong',
            ],
            410 => [
                '_replacement' => 'KR',
                '_reason' => 'overlong',
            ],
            414 => [
                '_replacement' => 'KW',
                '_reason' => 'overlong',
            ],
            417 => [
                '_replacement' => 'KG',
                '_reason' => 'overlong',
            ],
            418 => [
                '_replacement' => 'LA',
                '_reason' => 'overlong',
            ],
            422 => [
                '_replacement' => 'LB',
                '_reason' => 'overlong',
            ],
            426 => [
                '_replacement' => 'LS',
                '_reason' => 'overlong',
            ],
            428 => [
                '_replacement' => 'LV',
                '_reason' => 'overlong',
            ],
            430 => [
                '_replacement' => 'LR',
                '_reason' => 'overlong',
            ],
            434 => [
                '_replacement' => 'LY',
                '_reason' => 'overlong',
            ],
            438 => [
                '_replacement' => 'LI',
                '_reason' => 'overlong',
            ],
            440 => [
                '_replacement' => 'LT',
                '_reason' => 'overlong',
            ],
            442 => [
                '_replacement' => 'LU',
                '_reason' => 'overlong',
            ],
            446 => [
                '_replacement' => 'MO',
                '_reason' => 'overlong',
            ],
            450 => [
                '_replacement' => 'MG',
                '_reason' => 'overlong',
            ],
            454 => [
                '_replacement' => 'MW',
                '_reason' => 'overlong',
            ],
            458 => [
                '_replacement' => 'MY',
                '_reason' => 'overlong',
            ],
            462 => [
                '_replacement' => 'MV',
                '_reason' => 'overlong',
            ],
            466 => [
                '_replacement' => 'ML',
                '_reason' => 'overlong',
            ],
            470 => [
                '_replacement' => 'MT',
                '_reason' => 'overlong',
            ],
            474 => [
                '_replacement' => 'MQ',
                '_reason' => 'overlong',
            ],
            478 => [
                '_replacement' => 'MR',
                '_reason' => 'overlong',
            ],
            480 => [
                '_replacement' => 'MU',
                '_reason' => 'overlong',
            ],
            484 => [
                '_replacement' => 'MX',
                '_reason' => 'overlong',
            ],
            492 => [
                '_replacement' => 'MC',
                '_reason' => 'overlong',
            ],
            496 => [
                '_replacement' => 'MN',
                '_reason' => 'overlong',
            ],
            498 => [
                '_replacement' => 'MD',
                '_reason' => 'overlong',
            ],
            499 => [
                '_replacement' => 'ME',
                '_reason' => 'overlong',
            ],
            500 => [
                '_replacement' => 'MS',
                '_reason' => 'overlong',
            ],
            504 => [
                '_replacement' => 'MA',
                '_reason' => 'overlong',
            ],
            508 => [
                '_replacement' => 'MZ',
                '_reason' => 'overlong',
            ],
            512 => [
                '_replacement' => 'OM',
                '_reason' => 'overlong',
            ],
            516 => [
                '_replacement' => 'NA',
                '_reason' => 'overlong',
            ],
            520 => [
                '_replacement' => 'NR',
                '_reason' => 'overlong',
            ],
            524 => [
                '_replacement' => 'NP',
                '_reason' => 'overlong',
            ],
            528 => [
                '_replacement' => 'NL',
                '_reason' => 'overlong',
            ],
            530 => [
                '_replacement' => 'CW SX BQ',
                '_reason' => 'overlong',
            ],
            531 => [
                '_replacement' => 'CW',
                '_reason' => 'overlong',
            ],
            532 => [
                '_replacement' => 'CW SX BQ',
                '_reason' => 'deprecated',
            ],
            533 => [
                '_replacement' => 'AW',
                '_reason' => 'overlong',
            ],
            534 => [
                '_replacement' => 'SX',
                '_reason' => 'overlong',
            ],
            535 => [
                '_replacement' => 'BQ',
                '_reason' => 'overlong',
            ],
            536 => [
                '_replacement' => 'SA IQ',
                '_reason' => 'overlong',
            ],
            540 => [
                '_replacement' => 'NC',
                '_reason' => 'overlong',
            ],
            548 => [
                '_replacement' => 'VU',
                '_reason' => 'overlong',
            ],
            554 => [
                '_replacement' => 'NZ',
                '_reason' => 'overlong',
            ],
            558 => [
                '_replacement' => 'NI',
                '_reason' => 'overlong',
            ],
            562 => [
                '_replacement' => 'NE',
                '_reason' => 'overlong',
            ],
            566 => [
                '_replacement' => 'NG',
                '_reason' => 'overlong',
            ],
            570 => [
                '_replacement' => 'NU',
                '_reason' => 'overlong',
            ],
            574 => [
                '_replacement' => 'NF',
                '_reason' => 'overlong',
            ],
            578 => [
                '_replacement' => 'NO',
                '_reason' => 'overlong',
            ],
            580 => [
                '_replacement' => 'MP',
                '_reason' => 'overlong',
            ],
            581 => [
                '_replacement' => 'UM',
                '_reason' => 'overlong',
            ],
            582 => [
                '_replacement' => 'FM MH MP PW',
                '_reason' => 'deprecated',
            ],
            583 => [
                '_replacement' => 'FM',
                '_reason' => 'overlong',
            ],
            584 => [
                '_replacement' => 'MH',
                '_reason' => 'overlong',
            ],
            585 => [
                '_replacement' => 'PW',
                '_reason' => 'overlong',
            ],
            586 => [
                '_replacement' => 'PK',
                '_reason' => 'overlong',
            ],
            591 => [
                '_replacement' => 'PA',
                '_reason' => 'overlong',
            ],
            598 => [
                '_replacement' => 'PG',
                '_reason' => 'overlong',
            ],
            600 => [
                '_replacement' => 'PY',
                '_reason' => 'overlong',
            ],
            604 => [
                '_replacement' => 'PE',
                '_reason' => 'overlong',
            ],
            608 => [
                '_replacement' => 'PH',
                '_reason' => 'overlong',
            ],
            612 => [
                '_replacement' => 'PN',
                '_reason' => 'overlong',
            ],
            616 => [
                '_replacement' => 'PL',
                '_reason' => 'overlong',
            ],
            620 => [
                '_replacement' => 'PT',
                '_reason' => 'overlong',
            ],
            624 => [
                '_replacement' => 'GW',
                '_reason' => 'overlong',
            ],
            626 => [
                '_replacement' => 'TL',
                '_reason' => 'overlong',
            ],
            630 => [
                '_replacement' => 'PR',
                '_reason' => 'overlong',
            ],
            634 => [
                '_replacement' => 'QA',
                '_reason' => 'overlong',
            ],
            638 => [
                '_replacement' => 'RE',
                '_reason' => 'overlong',
            ],
            642 => [
                '_replacement' => 'RO',
                '_reason' => 'overlong',
            ],
            643 => [
                '_replacement' => 'RU',
                '_reason' => 'overlong',
            ],
            646 => [
                '_replacement' => 'RW',
                '_reason' => 'overlong',
            ],
            652 => [
                '_replacement' => 'BL',
                '_reason' => 'overlong',
            ],
            654 => [
                '_replacement' => 'SH',
                '_reason' => 'overlong',
            ],
            659 => [
                '_replacement' => 'KN',
                '_reason' => 'overlong',
            ],
            660 => [
                '_replacement' => 'AI',
                '_reason' => 'overlong',
            ],
            662 => [
                '_replacement' => 'LC',
                '_reason' => 'overlong',
            ],
            663 => [
                '_replacement' => 'MF',
                '_reason' => 'overlong',
            ],
            666 => [
                '_replacement' => 'PM',
                '_reason' => 'overlong',
            ],
            670 => [
                '_replacement' => 'VC',
                '_reason' => 'overlong',
            ],
            674 => [
                '_replacement' => 'SM',
                '_reason' => 'overlong',
            ],
            678 => [
                '_replacement' => 'ST',
                '_reason' => 'overlong',
            ],
            682 => [
                '_replacement' => 'SA',
                '_reason' => 'overlong',
            ],
            686 => [
                '_replacement' => 'SN',
                '_reason' => 'overlong',
            ],
            688 => [
                '_replacement' => 'RS',
                '_reason' => 'overlong',
            ],
            690 => [
                '_replacement' => 'SC',
                '_reason' => 'overlong',
            ],
            694 => [
                '_replacement' => 'SL',
                '_reason' => 'overlong',
            ],
            702 => [
                '_replacement' => 'SG',
                '_reason' => 'overlong',
            ],
            703 => [
                '_replacement' => 'SK',
                '_reason' => 'overlong',
            ],
            704 => [
                '_replacement' => 'VN',
                '_reason' => 'overlong',
            ],
            705 => [
                '_replacement' => 'SI',
                '_reason' => 'overlong',
            ],
            706 => [
                '_replacement' => 'SO',
                '_reason' => 'overlong',
            ],
            710 => [
                '_replacement' => 'ZA',
                '_reason' => 'overlong',
            ],
            716 => [
                '_replacement' => 'ZW',
                '_reason' => 'overlong',
            ],
            720 => [
                '_replacement' => 'YE',
                '_reason' => 'overlong',
            ],
            724 => [
                '_replacement' => 'ES',
                '_reason' => 'overlong',
            ],
            728 => [
                '_replacement' => 'SS',
                '_reason' => 'overlong',
            ],
            729 => [
                '_replacement' => 'SD',
                '_reason' => 'overlong',
            ],
            732 => [
                '_replacement' => 'EH',
                '_reason' => 'overlong',
            ],
            736 => [
                '_replacement' => 'SD',
                '_reason' => 'deprecated',
            ],
            740 => [
                '_replacement' => 'SR',
                '_reason' => 'overlong',
            ],
            744 => [
                '_replacement' => 'SJ',
                '_reason' => 'overlong',
            ],
            748 => [
                '_replacement' => 'SZ',
                '_reason' => 'overlong',
            ],
            752 => [
                '_replacement' => 'SE',
                '_reason' => 'overlong',
            ],
            756 => [
                '_replacement' => 'CH',
                '_reason' => 'overlong',
            ],
            760 => [
                '_replacement' => 'SY',
                '_reason' => 'overlong',
            ],
            762 => [
                '_replacement' => 'TJ',
                '_reason' => 'overlong',
            ],
            764 => [
                '_replacement' => 'TH',
                '_reason' => 'overlong',
            ],
            768 => [
                '_replacement' => 'TG',
                '_reason' => 'overlong',
            ],
            772 => [
                '_replacement' => 'TK',
                '_reason' => 'overlong',
            ],
            776 => [
                '_replacement' => 'TO',
                '_reason' => 'overlong',
            ],
            780 => [
                '_replacement' => 'TT',
                '_reason' => 'overlong',
            ],
            784 => [
                '_replacement' => 'AE',
                '_reason' => 'overlong',
            ],
            788 => [
                '_replacement' => 'TN',
                '_reason' => 'overlong',
            ],
            792 => [
                '_replacement' => 'TR',
                '_reason' => 'overlong',
            ],
            795 => [
                '_replacement' => 'TM',
                '_reason' => 'overlong',
            ],
            796 => [
                '_replacement' => 'TC',
                '_reason' => 'overlong',
            ],
            798 => [
                '_replacement' => 'TV',
                '_reason' => 'overlong',
            ],
            800 => [
                '_replacement' => 'UG',
                '_reason' => 'overlong',
            ],
            804 => [
                '_replacement' => 'UA',
                '_reason' => 'overlong',
            ],
            807 => [
                '_replacement' => 'MK',
                '_reason' => 'overlong',
            ],
            810 => [
                '_replacement' => 'RU AM AZ BY EE GE KZ KG LV LT MD TJ TM UA UZ',
                '_reason' => 'overlong',
            ],
            818 => [
                '_replacement' => 'EG',
                '_reason' => 'overlong',
            ],
            826 => [
                '_replacement' => 'GB',
                '_reason' => 'overlong',
            ],
            830 => [
                '_replacement' => 'JE GG',
                '_reason' => 'deprecated',
            ],
            831 => [
                '_replacement' => 'GG',
                '_reason' => 'overlong',
            ],
            832 => [
                '_replacement' => 'JE',
                '_reason' => 'overlong',
            ],
            833 => [
                '_replacement' => 'IM',
                '_reason' => 'overlong',
            ],
            834 => [
                '_replacement' => 'TZ',
                '_reason' => 'overlong',
            ],
            840 => [
                '_replacement' => 'US',
                '_reason' => 'overlong',
            ],
            850 => [
                '_replacement' => 'VI',
                '_reason' => 'overlong',
            ],
            854 => [
                '_replacement' => 'BF',
                '_reason' => 'overlong',
            ],
            858 => [
                '_replacement' => 'UY',
                '_reason' => 'overlong',
            ],
            860 => [
                '_replacement' => 'UZ',
                '_reason' => 'overlong',
            ],
            862 => [
                '_replacement' => 'VE',
                '_reason' => 'overlong',
            ],
            876 => [
                '_replacement' => 'WF',
                '_reason' => 'overlong',
            ],
            882 => [
                '_replacement' => 'WS',
                '_reason' => 'overlong',
            ],
            886 => [
                '_replacement' => 'YE',
                '_reason' => 'deprecated',
            ],
            887 => [
                '_replacement' => 'YE',
                '_reason' => 'overlong',
            ],
            890 => [
                '_replacement' => 'RS ME SI HR MK BA',
                '_reason' => 'deprecated',
            ],
            891 => [
                '_replacement' => 'RS ME',
                '_reason' => 'overlong',
            ],
            894 => [
                '_replacement' => 'ZM',
                '_reason' => 'overlong',
            ],
            958 => [
                '_replacement' => 'AA',
                '_reason' => 'overlong',
            ],
            959 => [
                '_replacement' => 'QM',
                '_reason' => 'overlong',
            ],
            960 => [
                '_replacement' => 'QN',
                '_reason' => 'overlong',
            ],
            962 => [
                '_replacement' => 'QP',
                '_reason' => 'overlong',
            ],
            963 => [
                '_replacement' => 'QQ',
                '_reason' => 'overlong',
            ],
            964 => [
                '_replacement' => 'QR',
                '_reason' => 'overlong',
            ],
            965 => [
                '_replacement' => 'QS',
                '_reason' => 'overlong',
            ],
            966 => [
                '_replacement' => 'QT',
                '_reason' => 'overlong',
            ],
            967 => [
                '_replacement' => 'EU',
                '_reason' => 'overlong',
            ],
            968 => [
                '_replacement' => 'QV',
                '_reason' => 'overlong',
            ],
            969 => [
                '_replacement' => 'QW',
                '_reason' => 'overlong',
            ],
            970 => [
                '_replacement' => 'QX',
                '_reason' => 'overlong',
            ],
            971 => [
                '_replacement' => 'QY',
                '_reason' => 'overlong',
            ],
            972 => [
                '_replacement' => 'QZ',
                '_reason' => 'overlong',
            ],
            973 => [
                '_replacement' => 'XA',
                '_reason' => 'overlong',
            ],
            974 => [
                '_replacement' => 'XB',
                '_reason' => 'overlong',
            ],
            975 => [
                '_replacement' => 'XC',
                '_reason' => 'overlong',
            ],
            976 => [
                '_replacement' => 'XD',
                '_reason' => 'overlong',
            ],
            977 => [
                '_replacement' => 'XE',
                '_reason' => 'overlong',
            ],
            978 => [
                '_replacement' => 'XF',
                '_reason' => 'overlong',
            ],
            979 => [
                '_replacement' => 'XG',
                '_reason' => 'overlong',
            ],
            980 => [
                '_replacement' => 'XH',
                '_reason' => 'overlong',
            ],
            981 => [
                '_replacement' => 'XI',
                '_reason' => 'overlong',
            ],
            982 => [
                '_replacement' => 'XJ',
                '_reason' => 'overlong',
            ],
            983 => [
                '_replacement' => 'XK',
                '_reason' => 'overlong',
            ],
            984 => [
                '_replacement' => 'XL',
                '_reason' => 'overlong',
            ],
            985 => [
                '_replacement' => 'XM',
                '_reason' => 'overlong',
            ],
            986 => [
                '_replacement' => 'XN',
                '_reason' => 'overlong',
            ],
            987 => [
                '_replacement' => 'XO',
                '_reason' => 'overlong',
            ],
            988 => [
                '_replacement' => 'XP',
                '_reason' => 'overlong',
            ],
            989 => [
                '_replacement' => 'XQ',
                '_reason' => 'overlong',
            ],
            990 => [
                '_replacement' => 'XR',
                '_reason' => 'overlong',
            ],
            991 => [
                '_replacement' => 'XS',
                '_reason' => 'overlong',
            ],
            992 => [
                '_replacement' => 'XT',
                '_reason' => 'overlong',
            ],
            993 => [
                '_replacement' => 'XU',
                '_reason' => 'overlong',
            ],
            994 => [
                '_replacement' => 'XV',
                '_reason' => 'overlong',
            ],
            995 => [
                '_replacement' => 'XW',
                '_reason' => 'overlong',
            ],
            996 => [
                '_replacement' => 'XX',
                '_reason' => 'overlong',
            ],
            997 => [
                '_replacement' => 'XY',
                '_reason' => 'overlong',
            ],
            998 => [
                '_replacement' => 'XZ',
                '_reason' => 'overlong',
            ],
            999 => [
                '_replacement' => 'ZZ',
                '_reason' => 'overlong',
            ],
            'AAA' => [
                '_replacement' => 'AA',
                '_reason' => 'overlong',
            ],
            'ABW' => [
                '_replacement' => 'AW',
                '_reason' => 'overlong',
            ],
            'AFG' => [
                '_replacement' => 'AF',
                '_reason' => 'overlong',
            ],
            'AGO' => [
                '_replacement' => 'AO',
                '_reason' => 'overlong',
            ],
            'AIA' => [
                '_replacement' => 'AI',
                '_reason' => 'overlong',
            ],
            'ALA' => [
                '_replacement' => 'AX',
                '_reason' => 'overlong',
            ],
            'ALB' => [
                '_replacement' => 'AL',
                '_reason' => 'overlong',
            ],
            'AN' => [
                '_replacement' => 'CW SX BQ',
                '_reason' => 'deprecated',
            ],
            'AND' => [
                '_replacement' => 'AD',
                '_reason' => 'overlong',
            ],
            'ANT' => [
                '_replacement' => 'CW SX BQ',
                '_reason' => 'overlong',
            ],
            'ARE' => [
                '_replacement' => 'AE',
                '_reason' => 'overlong',
            ],
            'ARG' => [
                '_replacement' => 'AR',
                '_reason' => 'overlong',
            ],
            'ARM' => [
                '_replacement' => 'AM',
                '_reason' => 'overlong',
            ],
            'ASC' => [
                '_replacement' => 'AC',
                '_reason' => 'overlong',
            ],
            'ASM' => [
                '_replacement' => 'AS',
                '_reason' => 'overlong',
            ],
            'ATA' => [
                '_replacement' => 'AQ',
                '_reason' => 'overlong',
            ],
            'ATF' => [
                '_replacement' => 'TF',
                '_reason' => 'overlong',
            ],
            'ATG' => [
                '_replacement' => 'AG',
                '_reason' => 'overlong',
            ],
            'AUS' => [
                '_replacement' => 'AU',
                '_reason' => 'overlong',
            ],
            'AUT' => [
                '_replacement' => 'AT',
                '_reason' => 'overlong',
            ],
            'AZE' => [
                '_replacement' => 'AZ',
                '_reason' => 'overlong',
            ],
            'BDI' => [
                '_replacement' => 'BI',
                '_reason' => 'overlong',
            ],
            'BEL' => [
                '_replacement' => 'BE',
                '_reason' => 'overlong',
            ],
            'BEN' => [
                '_replacement' => 'BJ',
                '_reason' => 'overlong',
            ],
            'BES' => [
                '_replacement' => 'BQ',
                '_reason' => 'overlong',
            ],
            'BFA' => [
                '_replacement' => 'BF',
                '_reason' => 'overlong',
            ],
            'BGD' => [
                '_replacement' => 'BD',
                '_reason' => 'overlong',
            ],
            'BGR' => [
                '_replacement' => 'BG',
                '_reason' => 'overlong',
            ],
            'BHR' => [
                '_replacement' => 'BH',
                '_reason' => 'overlong',
            ],
            'BHS' => [
                '_replacement' => 'BS',
                '_reason' => 'overlong',
            ],
            'BIH' => [
                '_replacement' => 'BA',
                '_reason' => 'overlong',
            ],
            'BLM' => [
                '_replacement' => 'BL',
                '_reason' => 'overlong',
            ],
            'BLR' => [
                '_replacement' => 'BY',
                '_reason' => 'overlong',
            ],
            'BLZ' => [
                '_replacement' => 'BZ',
                '_reason' => 'overlong',
            ],
            'BMU' => [
                '_replacement' => 'BM',
                '_reason' => 'overlong',
            ],
            'BOL' => [
                '_replacement' => 'BO',
                '_reason' => 'overlong',
            ],
            'BRA' => [
                '_replacement' => 'BR',
                '_reason' => 'overlong',
            ],
            'BRB' => [
                '_replacement' => 'BB',
                '_reason' => 'overlong',
            ],
            'BRN' => [
                '_replacement' => 'BN',
                '_reason' => 'overlong',
            ],
            'BTN' => [
                '_replacement' => 'BT',
                '_reason' => 'overlong',
            ],
            'BU' => [
                '_replacement' => 'MM',
                '_reason' => 'deprecated',
            ],
            'BUR' => [
                '_replacement' => 'MM',
                '_reason' => 'overlong',
            ],
            'BVT' => [
                '_replacement' => 'BV',
                '_reason' => 'overlong',
            ],
            'BWA' => [
                '_replacement' => 'BW',
                '_reason' => 'overlong',
            ],
            'CAF' => [
                '_replacement' => 'CF',
                '_reason' => 'overlong',
            ],
            'CAN' => [
                '_replacement' => 'CA',
                '_reason' => 'overlong',
            ],
            'CCK' => [
                '_replacement' => 'CC',
                '_reason' => 'overlong',
            ],
            'CHE' => [
                '_replacement' => 'CH',
                '_reason' => 'overlong',
            ],
            'CHL' => [
                '_replacement' => 'CL',
                '_reason' => 'overlong',
            ],
            'CHN' => [
                '_replacement' => 'CN',
                '_reason' => 'overlong',
            ],
            'CIV' => [
                '_replacement' => 'CI',
                '_reason' => 'overlong',
            ],
            'CMR' => [
                '_replacement' => 'CM',
                '_reason' => 'overlong',
            ],
            'COD' => [
                '_replacement' => 'CD',
                '_reason' => 'overlong',
            ],
            'COG' => [
                '_replacement' => 'CG',
                '_reason' => 'overlong',
            ],
            'COK' => [
                '_replacement' => 'CK',
                '_reason' => 'overlong',
            ],
            'COL' => [
                '_replacement' => 'CO',
                '_reason' => 'overlong',
            ],
            'COM' => [
                '_replacement' => 'KM',
                '_reason' => 'overlong',
            ],
            'CPT' => [
                '_replacement' => 'CP',
                '_reason' => 'overlong',
            ],
            'CPV' => [
                '_replacement' => 'CV',
                '_reason' => 'overlong',
            ],
            'CRI' => [
                '_replacement' => 'CR',
                '_reason' => 'overlong',
            ],
            'CS' => [
                '_replacement' => 'RS ME',
                '_reason' => 'deprecated',
            ],
            'CT' => [
                '_replacement' => 'KI',
                '_reason' => 'deprecated',
            ],
            'CUB' => [
                '_replacement' => 'CU',
                '_reason' => 'overlong',
            ],
            'CUW' => [
                '_replacement' => 'CW',
                '_reason' => 'overlong',
            ],
            'CXR' => [
                '_replacement' => 'CX',
                '_reason' => 'overlong',
            ],
            'CYM' => [
                '_replacement' => 'KY',
                '_reason' => 'overlong',
            ],
            'CYP' => [
                '_replacement' => 'CY',
                '_reason' => 'overlong',
            ],
            'CZE' => [
                '_replacement' => 'CZ',
                '_reason' => 'overlong',
            ],
            'DD' => [
                '_replacement' => 'DE',
                '_reason' => 'deprecated',
            ],
            'DDR' => [
                '_replacement' => 'DE',
                '_reason' => 'overlong',
            ],
            'DEU' => [
                '_replacement' => 'DE',
                '_reason' => 'overlong',
            ],
            'DGA' => [
                '_replacement' => 'DG',
                '_reason' => 'overlong',
            ],
            'DJI' => [
                '_replacement' => 'DJ',
                '_reason' => 'overlong',
            ],
            'DMA' => [
                '_replacement' => 'DM',
                '_reason' => 'overlong',
            ],
            'DNK' => [
                '_replacement' => 'DK',
                '_reason' => 'overlong',
            ],
            'DOM' => [
                '_replacement' => 'DO',
                '_reason' => 'overlong',
            ],
            'DY' => [
                '_replacement' => 'BJ',
                '_reason' => 'deprecated',
            ],
            'DZA' => [
                '_replacement' => 'DZ',
                '_reason' => 'overlong',
            ],
            'ECU' => [
                '_replacement' => 'EC',
                '_reason' => 'overlong',
            ],
            'EGY' => [
                '_replacement' => 'EG',
                '_reason' => 'overlong',
            ],
            'ERI' => [
                '_replacement' => 'ER',
                '_reason' => 'overlong',
            ],
            'ESH' => [
                '_replacement' => 'EH',
                '_reason' => 'overlong',
            ],
            'ESP' => [
                '_replacement' => 'ES',
                '_reason' => 'overlong',
            ],
            'EST' => [
                '_replacement' => 'EE',
                '_reason' => 'overlong',
            ],
            'ETH' => [
                '_replacement' => 'ET',
                '_reason' => 'overlong',
            ],
            'FIN' => [
                '_replacement' => 'FI',
                '_reason' => 'overlong',
            ],
            'FJI' => [
                '_replacement' => 'FJ',
                '_reason' => 'overlong',
            ],
            'FLK' => [
                '_replacement' => 'FK',
                '_reason' => 'overlong',
            ],
            'FQ' => [
                '_replacement' => 'AQ TF',
                '_reason' => 'deprecated',
            ],
            'FRA' => [
                '_replacement' => 'FR',
                '_reason' => 'overlong',
            ],
            'FRO' => [
                '_replacement' => 'FO',
                '_reason' => 'overlong',
            ],
            'FSM' => [
                '_replacement' => 'FM',
                '_reason' => 'overlong',
            ],
            'FX' => [
                '_replacement' => 'FR',
                '_reason' => 'deprecated',
            ],
            'FXX' => [
                '_replacement' => 'FR',
                '_reason' => 'overlong',
            ],
            'GAB' => [
                '_replacement' => 'GA',
                '_reason' => 'overlong',
            ],
            'GBR' => [
                '_replacement' => 'GB',
                '_reason' => 'overlong',
            ],
            'GEO' => [
                '_replacement' => 'GE',
                '_reason' => 'overlong',
            ],
            'GGY' => [
                '_replacement' => 'GG',
                '_reason' => 'overlong',
            ],
            'GHA' => [
                '_replacement' => 'GH',
                '_reason' => 'overlong',
            ],
            'GIB' => [
                '_replacement' => 'GI',
                '_reason' => 'overlong',
            ],
            'GIN' => [
                '_replacement' => 'GN',
                '_reason' => 'overlong',
            ],
            'GLP' => [
                '_replacement' => 'GP',
                '_reason' => 'overlong',
            ],
            'GMB' => [
                '_replacement' => 'GM',
                '_reason' => 'overlong',
            ],
            'GNB' => [
                '_replacement' => 'GW',
                '_reason' => 'overlong',
            ],
            'GNQ' => [
                '_replacement' => 'GQ',
                '_reason' => 'overlong',
            ],
            'GRC' => [
                '_replacement' => 'GR',
                '_reason' => 'overlong',
            ],
            'GRD' => [
                '_replacement' => 'GD',
                '_reason' => 'overlong',
            ],
            'GRL' => [
                '_replacement' => 'GL',
                '_reason' => 'overlong',
            ],
            'GTM' => [
                '_replacement' => 'GT',
                '_reason' => 'overlong',
            ],
            'GUF' => [
                '_replacement' => 'GF',
                '_reason' => 'overlong',
            ],
            'GUM' => [
                '_replacement' => 'GU',
                '_reason' => 'overlong',
            ],
            'GUY' => [
                '_replacement' => 'GY',
                '_reason' => 'overlong',
            ],
            'HKG' => [
                '_replacement' => 'HK',
                '_reason' => 'overlong',
            ],
            'HMD' => [
                '_replacement' => 'HM',
                '_reason' => 'overlong',
            ],
            'HND' => [
                '_replacement' => 'HN',
                '_reason' => 'overlong',
            ],
            'HRV' => [
                '_replacement' => 'HR',
                '_reason' => 'overlong',
            ],
            'HTI' => [
                '_replacement' => 'HT',
                '_reason' => 'overlong',
            ],
            'HUN' => [
                '_replacement' => 'HU',
                '_reason' => 'overlong',
            ],
            'HV' => [
                '_replacement' => 'BF',
                '_reason' => 'deprecated',
            ],
            'IDN' => [
                '_replacement' => 'ID',
                '_reason' => 'overlong',
            ],
            'IMN' => [
                '_replacement' => 'IM',
                '_reason' => 'overlong',
            ],
            'IND' => [
                '_replacement' => 'IN',
                '_reason' => 'overlong',
            ],
            'IOT' => [
                '_replacement' => 'IO',
                '_reason' => 'overlong',
            ],
            'IRL' => [
                '_replacement' => 'IE',
                '_reason' => 'overlong',
            ],
            'IRN' => [
                '_replacement' => 'IR',
                '_reason' => 'overlong',
            ],
            'IRQ' => [
                '_replacement' => 'IQ',
                '_reason' => 'overlong',
            ],
            'ISL' => [
                '_replacement' => 'IS',
                '_reason' => 'overlong',
            ],
            'ISR' => [
                '_replacement' => 'IL',
                '_reason' => 'overlong',
            ],
            'ITA' => [
                '_replacement' => 'IT',
                '_reason' => 'overlong',
            ],
            'JAM' => [
                '_replacement' => 'JM',
                '_reason' => 'overlong',
            ],
            'JEY' => [
                '_replacement' => 'JE',
                '_reason' => 'overlong',
            ],
            'JOR' => [
                '_replacement' => 'JO',
                '_reason' => 'overlong',
            ],
            'JPN' => [
                '_replacement' => 'JP',
                '_reason' => 'overlong',
            ],
            'JT' => [
                '_replacement' => 'UM',
                '_reason' => 'deprecated',
            ],
            'KAZ' => [
                '_replacement' => 'KZ',
                '_reason' => 'overlong',
            ],
            'KEN' => [
                '_replacement' => 'KE',
                '_reason' => 'overlong',
            ],
            'KGZ' => [
                '_replacement' => 'KG',
                '_reason' => 'overlong',
            ],
            'KHM' => [
                '_replacement' => 'KH',
                '_reason' => 'overlong',
            ],
            'KIR' => [
                '_replacement' => 'KI',
                '_reason' => 'overlong',
            ],
            'KNA' => [
                '_replacement' => 'KN',
                '_reason' => 'overlong',
            ],
            'KOR' => [
                '_replacement' => 'KR',
                '_reason' => 'overlong',
            ],
            'KWT' => [
                '_replacement' => 'KW',
                '_reason' => 'overlong',
            ],
            'LAO' => [
                '_replacement' => 'LA',
                '_reason' => 'overlong',
            ],
            'LBN' => [
                '_replacement' => 'LB',
                '_reason' => 'overlong',
            ],
            'LBR' => [
                '_replacement' => 'LR',
                '_reason' => 'overlong',
            ],
            'LBY' => [
                '_replacement' => 'LY',
                '_reason' => 'overlong',
            ],
            'LCA' => [
                '_replacement' => 'LC',
                '_reason' => 'overlong',
            ],
            'LIE' => [
                '_replacement' => 'LI',
                '_reason' => 'overlong',
            ],
            'LKA' => [
                '_replacement' => 'LK',
                '_reason' => 'overlong',
            ],
            'LSO' => [
                '_replacement' => 'LS',
                '_reason' => 'overlong',
            ],
            'LTU' => [
                '_replacement' => 'LT',
                '_reason' => 'overlong',
            ],
            'LUX' => [
                '_replacement' => 'LU',
                '_reason' => 'overlong',
            ],
            'LVA' => [
                '_replacement' => 'LV',
                '_reason' => 'overlong',
            ],
            'MAC' => [
                '_replacement' => 'MO',
                '_reason' => 'overlong',
            ],
            'MAF' => [
                '_replacement' => 'MF',
                '_reason' => 'overlong',
            ],
            'MAR' => [
                '_replacement' => 'MA',
                '_reason' => 'overlong',
            ],
            'MCO' => [
                '_replacement' => 'MC',
                '_reason' => 'overlong',
            ],
            'MDA' => [
                '_replacement' => 'MD',
                '_reason' => 'overlong',
            ],
            'MDG' => [
                '_replacement' => 'MG',
                '_reason' => 'overlong',
            ],
            'MDV' => [
                '_replacement' => 'MV',
                '_reason' => 'overlong',
            ],
            'MEX' => [
                '_replacement' => 'MX',
                '_reason' => 'overlong',
            ],
            'MHL' => [
                '_replacement' => 'MH',
                '_reason' => 'overlong',
            ],
            'MI' => [
                '_replacement' => 'UM',
                '_reason' => 'deprecated',
            ],
            'MKD' => [
                '_replacement' => 'MK',
                '_reason' => 'overlong',
            ],
            'MLI' => [
                '_replacement' => 'ML',
                '_reason' => 'overlong',
            ],
            'MLT' => [
                '_replacement' => 'MT',
                '_reason' => 'overlong',
            ],
            'MMR' => [
                '_replacement' => 'MM',
                '_reason' => 'overlong',
            ],
            'MNE' => [
                '_replacement' => 'ME',
                '_reason' => 'overlong',
            ],
            'MNG' => [
                '_replacement' => 'MN',
                '_reason' => 'overlong',
            ],
            'MNP' => [
                '_replacement' => 'MP',
                '_reason' => 'overlong',
            ],
            'MOZ' => [
                '_replacement' => 'MZ',
                '_reason' => 'overlong',
            ],
            'MRT' => [
                '_replacement' => 'MR',
                '_reason' => 'overlong',
            ],
            'MSR' => [
                '_replacement' => 'MS',
                '_reason' => 'overlong',
            ],
            'MTQ' => [
                '_replacement' => 'MQ',
                '_reason' => 'overlong',
            ],
            'MUS' => [
                '_replacement' => 'MU',
                '_reason' => 'overlong',
            ],
            'MWI' => [
                '_replacement' => 'MW',
                '_reason' => 'overlong',
            ],
            'MYS' => [
                '_replacement' => 'MY',
                '_reason' => 'overlong',
            ],
            'MYT' => [
                '_replacement' => 'YT',
                '_reason' => 'overlong',
            ],
            'NAM' => [
                '_replacement' => 'NA',
                '_reason' => 'overlong',
            ],
            'NCL' => [
                '_replacement' => 'NC',
                '_reason' => 'overlong',
            ],
            'NER' => [
                '_replacement' => 'NE',
                '_reason' => 'overlong',
            ],
            'NFK' => [
                '_replacement' => 'NF',
                '_reason' => 'overlong',
            ],
            'NGA' => [
                '_replacement' => 'NG',
                '_reason' => 'overlong',
            ],
            'NH' => [
                '_replacement' => 'VU',
                '_reason' => 'deprecated',
            ],
            'NIC' => [
                '_replacement' => 'NI',
                '_reason' => 'overlong',
            ],
            'NIU' => [
                '_replacement' => 'NU',
                '_reason' => 'overlong',
            ],
            'NLD' => [
                '_replacement' => 'NL',
                '_reason' => 'overlong',
            ],
            'NOR' => [
                '_replacement' => 'NO',
                '_reason' => 'overlong',
            ],
            'NPL' => [
                '_replacement' => 'NP',
                '_reason' => 'overlong',
            ],
            'NQ' => [
                '_replacement' => 'AQ',
                '_reason' => 'deprecated',
            ],
            'NRU' => [
                '_replacement' => 'NR',
                '_reason' => 'overlong',
            ],
            'NT' => [
                '_replacement' => 'SA IQ',
                '_reason' => 'deprecated',
            ],
            'NTZ' => [
                '_replacement' => 'SA IQ',
                '_reason' => 'overlong',
            ],
            'NZL' => [
                '_replacement' => 'NZ',
                '_reason' => 'overlong',
            ],
            'OMN' => [
                '_replacement' => 'OM',
                '_reason' => 'overlong',
            ],
            'PAK' => [
                '_replacement' => 'PK',
                '_reason' => 'overlong',
            ],
            'PAN' => [
                '_replacement' => 'PA',
                '_reason' => 'overlong',
            ],
            'PC' => [
                '_replacement' => 'FM MH MP PW',
                '_reason' => 'deprecated',
            ],
            'PCN' => [
                '_replacement' => 'PN',
                '_reason' => 'overlong',
            ],
            'PER' => [
                '_replacement' => 'PE',
                '_reason' => 'overlong',
            ],
            'PHL' => [
                '_replacement' => 'PH',
                '_reason' => 'overlong',
            ],
            'PLW' => [
                '_replacement' => 'PW',
                '_reason' => 'overlong',
            ],
            'PNG' => [
                '_replacement' => 'PG',
                '_reason' => 'overlong',
            ],
            'POL' => [
                '_replacement' => 'PL',
                '_reason' => 'overlong',
            ],
            'PRI' => [
                '_replacement' => 'PR',
                '_reason' => 'overlong',
            ],
            'PRK' => [
                '_replacement' => 'KP',
                '_reason' => 'overlong',
            ],
            'PRT' => [
                '_replacement' => 'PT',
                '_reason' => 'overlong',
            ],
            'PRY' => [
                '_replacement' => 'PY',
                '_reason' => 'overlong',
            ],
            'PSE' => [
                '_replacement' => 'PS',
                '_reason' => 'overlong',
            ],
            'PU' => [
                '_replacement' => 'UM',
                '_reason' => 'deprecated',
            ],
            'PYF' => [
                '_replacement' => 'PF',
                '_reason' => 'overlong',
            ],
            'PZ' => [
                '_replacement' => 'PA',
                '_reason' => 'deprecated',
            ],
            'QAT' => [
                '_replacement' => 'QA',
                '_reason' => 'overlong',
            ],
            'QMM' => [
                '_replacement' => 'QM',
                '_reason' => 'overlong',
            ],
            'QNN' => [
                '_replacement' => 'QN',
                '_reason' => 'overlong',
            ],
            'QPP' => [
                '_replacement' => 'QP',
                '_reason' => 'overlong',
            ],
            'QQQ' => [
                '_replacement' => 'QQ',
                '_reason' => 'overlong',
            ],
            'QRR' => [
                '_replacement' => 'QR',
                '_reason' => 'overlong',
            ],
            'QSS' => [
                '_replacement' => 'QS',
                '_reason' => 'overlong',
            ],
            'QTT' => [
                '_replacement' => 'QT',
                '_reason' => 'overlong',
            ],
            'QU' => [
                '_replacement' => 'EU',
                '_reason' => 'deprecated',
            ],
            'QUU' => [
                '_replacement' => 'EU',
                '_reason' => 'overlong',
            ],
            'QVV' => [
                '_replacement' => 'QV',
                '_reason' => 'overlong',
            ],
            'QWW' => [
                '_replacement' => 'QW',
                '_reason' => 'overlong',
            ],
            'QXX' => [
                '_replacement' => 'QX',
                '_reason' => 'overlong',
            ],
            'QYY' => [
                '_replacement' => 'QY',
                '_reason' => 'overlong',
            ],
            'QZZ' => [
                '_replacement' => 'QZ',
                '_reason' => 'overlong',
            ],
            'REU' => [
                '_replacement' => 'RE',
                '_reason' => 'overlong',
            ],
            'RH' => [
                '_replacement' => 'ZW',
                '_reason' => 'deprecated',
            ],
            'ROU' => [
                '_replacement' => 'RO',
                '_reason' => 'overlong',
            ],
            'RUS' => [
                '_replacement' => 'RU',
                '_reason' => 'overlong',
            ],
            'RWA' => [
                '_replacement' => 'RW',
                '_reason' => 'overlong',
            ],
            'SAU' => [
                '_replacement' => 'SA',
                '_reason' => 'overlong',
            ],
            'SCG' => [
                '_replacement' => 'RS ME',
                '_reason' => 'overlong',
            ],
            'SDN' => [
                '_replacement' => 'SD',
                '_reason' => 'overlong',
            ],
            'SEN' => [
                '_replacement' => 'SN',
                '_reason' => 'overlong',
            ],
            'SGP' => [
                '_replacement' => 'SG',
                '_reason' => 'overlong',
            ],
            'SGS' => [
                '_replacement' => 'GS',
                '_reason' => 'overlong',
            ],
            'SHN' => [
                '_replacement' => 'SH',
                '_reason' => 'overlong',
            ],
            'SJM' => [
                '_replacement' => 'SJ',
                '_reason' => 'overlong',
            ],
            'SLB' => [
                '_replacement' => 'SB',
                '_reason' => 'overlong',
            ],
            'SLE' => [
                '_replacement' => 'SL',
                '_reason' => 'overlong',
            ],
            'SLV' => [
                '_replacement' => 'SV',
                '_reason' => 'overlong',
            ],
            'SMR' => [
                '_replacement' => 'SM',
                '_reason' => 'overlong',
            ],
            'SOM' => [
                '_replacement' => 'SO',
                '_reason' => 'overlong',
            ],
            'SPM' => [
                '_replacement' => 'PM',
                '_reason' => 'overlong',
            ],
            'SRB' => [
                '_replacement' => 'RS',
                '_reason' => 'overlong',
            ],
            'SSD' => [
                '_replacement' => 'SS',
                '_reason' => 'overlong',
            ],
            'STP' => [
                '_replacement' => 'ST',
                '_reason' => 'overlong',
            ],
            'SU' => [
                '_replacement' => 'RU AM AZ BY EE GE KZ KG LV LT MD TJ TM UA UZ',
                '_reason' => 'deprecated',
            ],
            'SUN' => [
                '_replacement' => 'RU AM AZ BY EE GE KZ KG LV LT MD TJ TM UA UZ',
                '_reason' => 'overlong',
            ],
            'SUR' => [
                '_replacement' => 'SR',
                '_reason' => 'overlong',
            ],
            'SVK' => [
                '_replacement' => 'SK',
                '_reason' => 'overlong',
            ],
            'SVN' => [
                '_replacement' => 'SI',
                '_reason' => 'overlong',
            ],
            'SWE' => [
                '_replacement' => 'SE',
                '_reason' => 'overlong',
            ],
            'SWZ' => [
                '_replacement' => 'SZ',
                '_reason' => 'overlong',
            ],
            'SXM' => [
                '_replacement' => 'SX',
                '_reason' => 'overlong',
            ],
            'SYC' => [
                '_replacement' => 'SC',
                '_reason' => 'overlong',
            ],
            'SYR' => [
                '_replacement' => 'SY',
                '_reason' => 'overlong',
            ],
            'TAA' => [
                '_replacement' => 'TA',
                '_reason' => 'overlong',
            ],
            'TCA' => [
                '_replacement' => 'TC',
                '_reason' => 'overlong',
            ],
            'TCD' => [
                '_replacement' => 'TD',
                '_reason' => 'overlong',
            ],
            'TGO' => [
                '_replacement' => 'TG',
                '_reason' => 'overlong',
            ],
            'THA' => [
                '_replacement' => 'TH',
                '_reason' => 'overlong',
            ],
            'TJK' => [
                '_replacement' => 'TJ',
                '_reason' => 'overlong',
            ],
            'TKL' => [
                '_replacement' => 'TK',
                '_reason' => 'overlong',
            ],
            'TKM' => [
                '_replacement' => 'TM',
                '_reason' => 'overlong',
            ],
            'TLS' => [
                '_replacement' => 'TL',
                '_reason' => 'overlong',
            ],
            'TMP' => [
                '_replacement' => 'TL',
                '_reason' => 'overlong',
            ],
            'TON' => [
                '_replacement' => 'TO',
                '_reason' => 'overlong',
            ],
            'TP' => [
                '_replacement' => 'TL',
                '_reason' => 'deprecated',
            ],
            'TTO' => [
                '_replacement' => 'TT',
                '_reason' => 'overlong',
            ],
            'TUN' => [
                '_replacement' => 'TN',
                '_reason' => 'overlong',
            ],
            'TUR' => [
                '_replacement' => 'TR',
                '_reason' => 'overlong',
            ],
            'TUV' => [
                '_replacement' => 'TV',
                '_reason' => 'overlong',
            ],
            'TWN' => [
                '_replacement' => 'TW',
                '_reason' => 'overlong',
            ],
            'TZA' => [
                '_replacement' => 'TZ',
                '_reason' => 'overlong',
            ],
            'UGA' => [
                '_replacement' => 'UG',
                '_reason' => 'overlong',
            ],
            'UK' => [
                '_replacement' => 'GB',
                '_reason' => 'deprecated',
            ],
            'UKR' => [
                '_replacement' => 'UA',
                '_reason' => 'overlong',
            ],
            'UMI' => [
                '_replacement' => 'UM',
                '_reason' => 'overlong',
            ],
            'URY' => [
                '_replacement' => 'UY',
                '_reason' => 'overlong',
            ],
            'USA' => [
                '_replacement' => 'US',
                '_reason' => 'overlong',
            ],
            'UZB' => [
                '_replacement' => 'UZ',
                '_reason' => 'overlong',
            ],
            'VAT' => [
                '_replacement' => 'VA',
                '_reason' => 'overlong',
            ],
            'VCT' => [
                '_replacement' => 'VC',
                '_reason' => 'overlong',
            ],
            'VD' => [
                '_replacement' => 'VN',
                '_reason' => 'deprecated',
            ],
            'VEN' => [
                '_replacement' => 'VE',
                '_reason' => 'overlong',
            ],
            'VGB' => [
                '_replacement' => 'VG',
                '_reason' => 'overlong',
            ],
            'VIR' => [
                '_replacement' => 'VI',
                '_reason' => 'overlong',
            ],
            'VNM' => [
                '_replacement' => 'VN',
                '_reason' => 'overlong',
            ],
            'VUT' => [
                '_replacement' => 'VU',
                '_reason' => 'overlong',
            ],
            'WK' => [
                '_replacement' => 'UM',
                '_reason' => 'deprecated',
            ],
            'WLF' => [
                '_replacement' => 'WF',
                '_reason' => 'overlong',
            ],
            'WSM' => [
                '_replacement' => 'WS',
                '_reason' => 'overlong',
            ],
            'XAA' => [
                '_replacement' => 'XA',
                '_reason' => 'overlong',
            ],
            'XBB' => [
                '_replacement' => 'XB',
                '_reason' => 'overlong',
            ],
            'XCC' => [
                '_replacement' => 'XC',
                '_reason' => 'overlong',
            ],
            'XDD' => [
                '_replacement' => 'XD',
                '_reason' => 'overlong',
            ],
            'XEE' => [
                '_replacement' => 'XE',
                '_reason' => 'overlong',
            ],
            'XFF' => [
                '_replacement' => 'XF',
                '_reason' => 'overlong',
            ],
            'XGG' => [
                '_replacement' => 'XG',
                '_reason' => 'overlong',
            ],
            'XHH' => [
                '_replacement' => 'XH',
                '_reason' => 'overlong',
            ],
            'XII' => [
                '_replacement' => 'XI',
                '_reason' => 'overlong',
            ],
            'XJJ' => [
                '_replacement' => 'XJ',
                '_reason' => 'overlong',
            ],
            'XKK' => [
                '_replacement' => 'XK',
                '_reason' => 'overlong',
            ],
            'XLL' => [
                '_replacement' => 'XL',
                '_reason' => 'overlong',
            ],
            'XMM' => [
                '_replacement' => 'XM',
                '_reason' => 'overlong',
            ],
            'XNN' => [
                '_replacement' => 'XN',
                '_reason' => 'overlong',
            ],
            'XOO' => [
                '_replacement' => 'XO',
                '_reason' => 'overlong',
            ],
            'XPP' => [
                '_replacement' => 'XP',
                '_reason' => 'overlong',
            ],
            'XQQ' => [
                '_replacement' => 'XQ',
                '_reason' => 'overlong',
            ],
            'XRR' => [
                '_replacement' => 'XR',
                '_reason' => 'overlong',
            ],
            'XSS' => [
                '_replacement' => 'XS',
                '_reason' => 'overlong',
            ],
            'XTT' => [
                '_replacement' => 'XT',
                '_reason' => 'overlong',
            ],
            'XUU' => [
                '_replacement' => 'XU',
                '_reason' => 'overlong',
            ],
            'XVV' => [
                '_replacement' => 'XV',
                '_reason' => 'overlong',
            ],
            'XWW' => [
                '_replacement' => 'XW',
                '_reason' => 'overlong',
            ],
            'XXX' => [
                '_replacement' => 'XX',
                '_reason' => 'overlong',
            ],
            'XYY' => [
                '_replacement' => 'XY',
                '_reason' => 'overlong',
            ],
            'XZZ' => [
                '_replacement' => 'XZ',
                '_reason' => 'overlong',
            ],
            'YD' => [
                '_replacement' => 'YE',
                '_reason' => 'deprecated',
            ],
            'YEM' => [
                '_replacement' => 'YE',
                '_reason' => 'overlong',
            ],
            'YMD' => [
                '_replacement' => 'YE',
                '_reason' => 'overlong',
            ],
            'YU' => [
                '_replacement' => 'RS ME',
                '_reason' => 'deprecated',
            ],
            'YUG' => [
                '_replacement' => 'RS ME',
                '_reason' => 'overlong',
            ],
            'ZAF' => [
                '_replacement' => 'ZA',
                '_reason' => 'overlong',
            ],
            'ZAR' => [
                '_replacement' => 'CD',
                '_reason' => 'overlong',
            ],
            'ZMB' => [
                '_replacement' => 'ZM',
                '_reason' => 'overlong',
            ],
            'ZR' => [
                '_replacement' => 'CD',
                '_reason' => 'deprecated',
            ],
            'ZWE' => [
                '_replacement' => 'ZW',
                '_reason' => 'overlong',
            ],
            'ZZZ' => [
                '_replacement' => 'ZZ',
                '_reason' => 'overlong',
            ],
        ],
        'variantAlias' => [
            'AALAND' => [
                '_replacement' => 'AX',
                '_reason' => 'deprecated',
            ],
            'BOKMAL' => [
                '_reason' => 'deprecated',
            ],
            'BOONT' => [
                '_reason' => 'deprecated',
            ],
            'GAULISH' => [
                '_reason' => 'deprecated',
            ],
            'GUOYU' => [
                '_reason' => 'deprecated',
            ],
            'HAKKA' => [
                '_reason' => 'deprecated',
            ],
            'HEPLOC' => [
                '_replacement' => 'ALALC97',
                '_reason' => 'deprecated',
            ],
            'LOJBAN' => [
                '_reason' => 'deprecated',
            ],
            'NYNORSK' => [
                '_reason' => 'deprecated',
            ],
            'POLYTONI' => [
                '_replacement' => 'POLYTON',
                '_reason' => 'deprecated',
            ],
            'SAAHO' => [
                '_reason' => 'deprecated',
            ],
            'SCOUSE' => [
                '_reason' => 'deprecated',
            ],
            'XIANG' => [
                '_reason' => 'deprecated',
            ],
        ],
        'zoneAlias' => [
            'Africa' => [
                'Timbuktu' => [
                    '_replacement' => 'Africa/Bamako',
                    '_reason' => 'deprecated',
                ],
            ],
            'America' => [
                'Montreal' => [
                    '_replacement' => 'America/Toronto',
                    '_reason' => 'deprecated',
                ],
                'Shiprock' => [
                    '_replacement' => 'America/Denver',
                    '_reason' => 'deprecated',
                ],
            ],
            'Antarctica' => [
                'South_Pole' => [
                    '_replacement' => 'Pacific/Auckland',
                    '_reason' => 'deprecated',
                ],
            ],
            'Asia' => [
                'Chongqing' => [
                    '_replacement' => 'Asia/Shanghai',
                    '_reason' => 'deprecated',
                ],
                'Harbin' => [
                    '_replacement' => 'Asia/Shanghai',
                    '_reason' => 'deprecated',
                ],
                'Kashgar' => [
                    '_replacement' => 'Asia/Urumqi',
                    '_reason' => 'deprecated',
                ],
            ],
            'Atlantic' => [
                'Jan_Mayen' => [
                    '_replacement' => 'Europe/Oslo',
                    '_reason' => 'deprecated',
                ],
            ],
            'EST' => [
                '_replacement' => 'America/Indianapolis',
                '_reason' => 'deprecated',
            ],
            'Europe' => [
                'Belfast' => [
                    '_replacement' => 'Europe/London',
                    '_reason' => 'deprecated',
                ],
            ],
            'HST' => [
                '_replacement' => 'Pacific/Honolulu',
                '_reason' => 'deprecated',
            ],
            'MST' => [
                '_replacement' => 'America/Phoenix',
                '_reason' => 'deprecated',
            ],
            'Pacific' => [
                'Yap' => [
                    '_replacement' => 'Pacific/Truk',
                    '_reason' => 'deprecated',
                ],
            ],
            'SystemV' => [
                'AST4' => [
                    '_replacement' => 'America/Puerto_Rico',
                    '_reason' => 'deprecated',
                ],
                'AST4ADT' => [
                    '_replacement' => 'America/Halifax',
                    '_reason' => 'deprecated',
                ],
                'CST6' => [
                    '_replacement' => 'America/Regina',
                    '_reason' => 'deprecated',
                ],
                'CST6CDT' => [
                    '_replacement' => 'America/Chicago',
                    '_reason' => 'deprecated',
                ],
                'EST5' => [
                    '_replacement' => 'America/Indianapolis',
                    '_reason' => 'deprecated',
                ],
                'EST5EDT' => [
                    '_replacement' => 'America/New_York',
                    '_reason' => 'deprecated',
                ],
                'HST10' => [
                    '_replacement' => 'Pacific/Honolulu',
                    '_reason' => 'deprecated',
                ],
                'MST7' => [
                    '_replacement' => 'America/Phoenix',
                    '_reason' => 'deprecated',
                ],
                'MST7MDT' => [
                    '_replacement' => 'America/Denver',
                    '_reason' => 'deprecated',
                ],
                'PST8' => [
                    '_replacement' => 'Pacific/Pitcairn',
                    '_reason' => 'deprecated',
                ],
                'PST8PDT' => [
                    '_replacement' => 'America/Los_Angeles',
                    '_reason' => 'deprecated',
                ],
                'YST9' => [
                    '_replacement' => 'Pacific/Gambier',
                    '_reason' => 'deprecated',
                ],
                'YST9YDT' => [
                    '_replacement' => 'America/Anchorage',
                    '_reason' => 'deprecated',
                ],
            ],
        ],
    ],
    'deprecated' => [
        0 => [
            'true false' => [
                '_attributes' => 'draft',
            ],
        ],
        1 => [
            'deprecatedItems' => [
                '_attributes' => 'hiraganaQuarternary hiraganaQuaternary',
            ],
        ],
        2 => [
            'deprecatedItems' => [
                '_attributes' => 'standard time',
            ],
        ],
        3 => [
            'deprecatedItems' => [
                '_attributes' => 'variableTop',
            ],
        ],
        4 => [
            'deprecatedItems' => [
                '_attributes' => 'type',
                '_elements' => 'abbreviationFallback hoursFormat localizedPatternChars mapping preferenceOrdering',
            ],
        ],
        5 => [
            'deprecatedItems' => [
                '_elements' => 'am pm',
            ],
        ],
        6 => [
            'deprecatedItems' => [
                '_elements' => 'base',
            ],
        ],
        7 => [
            'civil' => [
                '_attributes' => 'type',
                '_elements' => 'calendar',
            ],
        ],
        8 => [
            'deprecatedItems' => [
                '_elements' => 'cldrVersion',
            ],
        ],
        9 => [
            'direct' => [
                '_attributes' => 'type',
                '_elements' => 'collation',
            ],
        ],
        10 => [
            'internal' => [
                '_attributes' => 'visibility',
                '_elements' => 'collation',
            ],
        ],
        11 => [
            'deprecatedItems' => [
                '_elements' => 'commonlyUsed',
            ],
        ],
        12 => [
            'deprecatedItems' => [
                '_attributes' => 'numberSystem',
                '_elements' => 'decimal group list percentSign nativeZeroDigit patternDigit plusSign minusSign exponential perMille infinity nan currencyDecimal currencyGroup',
            ],
        ],
        13 => [
            'deprecatedItems' => [
                '_elements' => 'default',
            ],
        ],
        14 => [
            'currencySymbol' => [
                '_attributes' => 'type',
                '_elements' => 'exemplarCharacters',
            ],
        ],
        15 => [
            'deprecatedItems' => [
                '_elements' => 'fallback',
            ],
        ],
        16 => [
            'deprecatedItems' => [
                '_elements' => 'fallbackRegionFormat',
            ],
        ],
        17 => [
            'deprecatedItems' => [
                '_elements' => 'height width',
            ],
        ],
        18 => [
            'locale' => [
                '_attributes' => 'source',
                '_elements' => 'import',
            ],
        ],
        19 => [
            'deprecatedItems' => [
                '_attributes' => 'casing',
                '_elements' => 'inList',
            ],
        ],
        20 => [
            'deprecatedItems' => [
                '_elements' => 'inList inText',
            ],
        ],
        21 => [
            'deprecatedItems' => [
                '_elements' => 'monthNames monthAbbr dayNames dayAbbr localizedPatternChars week yesexpr noexpr measurement hoursFormat abbreviationFallback preferenceOrdering dateRangePattern',
            ],
        ],
        22 => [
            'deprecatedItems' => [
                '_elements' => 'rules reset p pc s sc t tc q qc i ic x extend context first_variable last_variable first_tertiary_ignorable last_tertiary_ignorable first_secondary_ignorable last_secondary_ignorable first_primary_ignorable last_primary_ignorable first_non_ignorable last_non_ignorable first_trailing last_trailing',
            ],
        ],
        23 => [
            'deprecatedItems' => [
                '_elements' => 'singleCountries',
            ],
        ],
        24 => [
            'deprecatedItems' => [
                '_elements' => 'stopwords stopwordList',
            ],
        ],
        25 => [
            'deprecatedItems' => [
                '_attributes' => 'choice',
                '_elements' => 'symbol',
            ],
        ],
        26 => [
            'day hour minute month second week year day' => [
                '_attributes' => 'type',
                '_elements' => 'unit',
            ],
        ],
        27 => [
            'BOKMAL NYNORSK AALAND POLYTONI' => [
                '_attributes' => 'type',
                '_elements' => 'variant',
            ],
        ],
        28 => [
            'deprecatedItems' => [
                '_attributes' => 'validSubLocales',
                '_type' => 'ldml',
                '_elements' => 'collations',
            ],
        ],
        29 => [
            'deprecatedItems' => [
                '_type' => 'ldml',
                '_elements' => 'compressedIndexSeparator cp currencyGroup indexLabel indexLabelAfter indexLabelBefore indexLabels indexRangePattern indexSeparator mapping nativeZeroDigit patternDigit reference usesMetazone',
            ],
        ],
        30 => [
            'deprecatedItems' => [
                '_type' => 'ldml',
                '_elements' => 'exceptions exception',
            ],
        ],
        31 => [
            'deprecatedItems' => [
                '_type' => 'ldml',
                '_elements' => 'minDays firstDay weekendStart weekendEnd',
            ],
        ],
        32 => [
            'deprecatedItems' => [
                '_attributes' => 'characters lines',
                '_type' => 'ldml',
                '_elements' => 'orientation',
            ],
        ],
        33 => [
            'deprecatedItems' => [
                '_type' => 'ldml',
                '_elements' => 'paperSize measurementSystem',
            ],
        ],
        34 => [
            'deprecatedItems' => [
                '_type' => 'ldml',
                '_elements' => 'references',
            ],
        ],
        35 => [
            'deprecatedItems' => [
                '_attributes' => 'private',
                '_type' => 'ldml',
                '_elements' => 'settings',
            ],
        ],
        36 => [
            'deprecatedItems' => [
                '_type' => 'supplementalData',
                '_elements' => 'alternate',
            ],
        ],
        37 => [
            'deprecatedItems' => [
                '_type' => 'supplementalData',
                '_elements' => 'bcp47KeywordMappings mapKeys mapTypes keyMap typeMap',
            ],
        ],
        38 => [
            'deprecatedItems' => [
                '_attributes' => 'territories',
                '_type' => 'supplementalData',
                '_elements' => 'calendar',
            ],
        ],
        39 => [
            'deprecatedItems' => [
                '_type' => 'supplementalData',
                '_elements' => 'coverageAdditions languageCoverage scriptCoverage territoryCoverage currencyCoverage timezoneCoverage',
            ],
        ],
        40 => [
            'deprecatedItems' => [
                '_attributes' => 'before',
                '_type' => 'supplementalData',
                '_elements' => 'currency',
            ],
        ],
        41 => [
            'standard supplemental' => [
                '_attributes' => 'type',
                '_type' => 'supplementalData',
                '_elements' => 'deprecatedItems',
            ],
        ],
        42 => [
            'deprecatedItems' => [
                '_type' => 'supplementalData',
                '_elements' => 'languageCodes',
            ],
        ],
        43 => [
            'deprecatedItems' => [
                '_type' => 'supplementalData',
                '_elements' => 'timezoneData zoneFormatting zoneItem',
            ],
        ],
    ],
    'distinguishing' => [
        'key request id _q registry alt iso4217 iso3166 mzone from to type numberSystem count' => [
        ],
        'type' => [
            '_exclude' => 'true',
            '_elements' => 'default measurementSystem mapping abbreviationFallback preferenceOrdering',
        ],
    ],
    'blocking' => [
        'blockingItems' => [
            '_elements' => 'identity supplementalData cldrTest collation transform',
        ],
    ],
    'skipDefaultLocale' => [
        '_services' => 'segmentation collation',
    ],
    'defaultContent' => [
        '_locales' => 'aa-ET af-ZA agq-CM ak-GH am-ET ar-001 arn-CL as-IN asa-TZ ast-ES az-Cyrl-AZ az-Latn az-Latn-AZ ba-RU bas-CM be-BY bem-ZM bez-TZ bg-BG bm-Latn bm-Latn-ML bm-Nkoo-ML bn-BD bo-CN br-FR brx-IN bs-Cyrl-BA bs-Latn bs-Latn-BA bss-CM byn-ER ca-ES cch-NG cgg-UG chr-US ckb-IQ co-FR cs-CZ cu-RU cy-GB da-DK dav-KE de-DE dje-NE dsb-DE dua-CM dv-MV dyo-SN dz-BT ebu-KE ee-GH el-GR en-Dsrt-US en-US eo-001 es-ES et-EE eu-ES ewo-CM fa-IR ff-SN fi-FI fil-PH fo-FO fr-FR fur-IT fy-NL ga-IE gaa-GH gd-GB gez-ET gl-ES gn-PY gsw-CH gu-IN guz-KE gv-IM ha-Arab-NG ha-Latn ha-Latn-NG haw-US he-IL hi-IN hr-HR hsb-DE hu-HU hy-AM ia-FR id-ID ig-NG ii-CN is-IS it-IT iu-Cans iu-Cans-CA iu-Latn-CA ja-JP jgo-CM jmc-TZ jv-ID ka-GE kab-DZ kaj-NG kam-KE kcg-NG kde-TZ kea-CV ken-CM khq-ML ki-KE kk-Cyrl kk-Cyrl-KZ kkj-CM kl-GL kln-KE km-KH kn-IN ko-KR kok-IN kpe-LR ks-Arab ks-Arab-IN ksb-TZ ksf-CM ksh-DE ku-Latn ku-Latn-TR kw-GB ky-Cyrl ky-Cyrl-KG lag-TZ lb-LU lg-UG lkt-US ln-CD lo-LA lt-LT lu-CD luo-KE luy-KE lv-LV mas-KE mer-KE mfe-MU mg-MG mgh-MZ mgo-CM mi-NZ mk-MK ml-IN mn-Cyrl mn-Cyrl-MN mn-Mong-CN moh-CA mr-IN ms-Arab-MY ms-Latn ms-Latn-MY mt-MT mua-CM my-MM naq-NA nb-NO nd-ZW nds-DE ne-NP nl-NL nmg-CM nn-NO nnh-CM nqo-GN nr-ZA nso-ZA nus-SD ny-MW nyn-UG oc-FR om-ET or-IN os-GE pa-Arab-PK pa-Guru pa-Guru-IN pl-PL prg-001 ps-AF pt-BR qu-PE quc-GT rm-CH rn-BI ro-RO rof-TZ ru-RU rw-RW rwk-TZ sa-IN sah-RU saq-KE sbp-TZ sd-Arab sd-Arab-PK se-NO seh-MZ ses-ML sg-CF shi-Latn-MA shi-Tfng shi-Tfng-MA si-LK sid-ET sk-SK sl-SI sma-SE smj-SE smn-FI sms-FI sn-ZW so-SO sq-AL sr-Cyrl sr-Cyrl-RS sr-Latn-RS ss-ZA ssy-ER st-ZA sv-SE sw-TZ swc-CD syr-IQ ta-IN te-IN teo-UG tg-Cyrl tg-Cyrl-TJ th-TH ti-ET tig-ER tk-Latn tk-Latn-TM tn-ZA to-TO tr-TR trv-TW ts-ZA tt-RU twq-NE tzm-Latn tzm-Latn-MA ug-Arab ug-Arab-CN uk-UA ur-PK uz-Arab-AF uz-Cyrl-UZ uz-Latn uz-Latn-UZ vai-Latn-LR vai-Vaii vai-Vaii-LR ve-ZA vi-VN vo-001 vun-TZ wa-BE wae-CH wal-ET wo-Latn wo-Latn-SN xh-ZA xog-UG yav-CM yi-001 yo-NG zgh-MA zh-Hans zh-Hans-CN zh-Hant-TW zu-ZA',
    ],
];
