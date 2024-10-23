<?php
/**
 * The translator external functionality of the plugin.
 *
 * @link       www.faboba.com
 * @since      1.3
 *
 * @package    Falang
 */

namespace Falang\Translator;

class TranslatorDefault {
	protected $script = NULL;
	protected $defaultLanguage;
    protected $token;


	public function __construct() {
	}

	/* Add Translator Script
	 *
	*/
    public function installScripts ($from, $to) {
        wp_register_script( 'translatorService', FALANG_ADMIN_URL  . '/js/'.$this->script, array( 'jquery' ), 1.0, true );
        wp_enqueue_script( 'translatorService' );
    }

	public function languageCodeToISO ($language){
		$l = strtolower($language);
		$l = str_replace('_','-',$l);//language $key use - locale use _

        if (isset(TranslatorDefault::$languageCodeInISO[$l])){
            return TranslatorDefault::$languageCodeInISO[$l];
        } else {
            return '';
        }
	}

	public function getDefaultLanguage(){
		return $this->defaultLanguage;
	}

	public function addServiceLanguage($key,$value){
	   unset(self::$languageCodeInISO[$key]) ;
	   self::$languageCodeInISO += [$key => $value];
    }

	static public $languageCodeInISO = array (
        'af-za' => 'AF',	// Afrikaans
        'sq-al' => 'AL', 	// Albanian
        'ar-aa' => 'AR', 	// Arabic unitag
        'hy-am' => 'HY', 	// Armenian
        'az-az' => 'AZ', 	// Azeri
        'eu-es' => 'EU', 	// Basque
        'be-by' => 'be',	// Belarusian Google only
        'bn-bd' => 'BN',	// Bengali
        'bs-ba' => 'BS', 	// Bosnian
        'bg-bg' => 'bg', 	// Bulgarian
        'ca-es' => 'CA',	// Catalan
        'ckb-iq' => 'KU', 	// Central Kurdish
        'zh-cn' => 'zh', 	// Chine simplified zh-Hans/bing , zh-CN ou zh google
        'zh-tw' => 'zh-tw',	// Chinese traditional zh-Hant/bing , zh-TW google
        'hr-hr' => 'hr', 	// Croation
        'cs-cz' => 'CS',	// Czech
        'da-dk' => 'DA', 	// Danish
        // 'prs-AF' => '',		// Dari Persian
        'nl-nl' => 'NL', 	// Dutch
        'en-au' => 'EN', 	// English Australia
        // 'en-CA' => '',		// English Canadian
        'en-gb' => 'EN',	// Queen's English
        'en-us' => 'EN', 	// English US
        'eo-xx' => 'EO', 	// Esperanto
        'et-ee' => 'ET', 	// Estonian
        'fi-fi' => 'FI', 	// Finnish
        'nl-be' => 'NL', 	// Flemish
        'fr-fr' => 'FR', 	// French
        // 'fr-CA' => '',		// French Canadian only fr-ca/bing
        'gl-es' => 'GZ', 	// Galcian
        'ka-ge' => 'KA',	// Georgian
        'de-de' => 'DE', 	// German
        'de-at' => 'AT',	// German
        'el-gr' => 'el', 	// Greek
        'he-il' => 'IL',	// Hebrew
        'hi-in' => 'HI',	// Hindi
        'hu-hu' => 'HU', 	// Hungarian
        'id-id' => 'ID', 	// Indonesian
        'ga-IE' => 'ga',	// Irish
        'it-it' => 'IT', 	// Italian
        'ja-jp' => 'ja',	// Japanese
        'km-kh' => 'KM', 	// Khmer
        'ko-kr' => 'ko', 	// Korean
        'lo-la' => 'LO', 	// Loation
        'lv-lv' => 'LV', 	// Latvian
        'lt-lt' => 'LT', 	// Lithuanian
        'mk-mk' => 'MK',	// Macedonian
        'ml-in' => 'ML', 	// Malayalam
        'mn-mn' => 'MN',	// Mongolian
        'ms-MY' => 'MS',		// Malay
        'srp-ME' => 'SRP',		// Montenegrin
        'nb-no' => 'NO',	// Norwegian
        'nn-no' => 'NO', 	// Norwegian
        'fa-ir' => 'FA',	// Persian
        'pl-pl' => 'PL',	// Polish
        'pt-br'	=> 'pt',	// Portuguese Brazil pt-br/bing, pt/google
        'pt-pt' => 'PT',	// Portuuese
        'ro-ro' => 'RO',	// Romanian
        'ru-ru' => 'RU', 	// Russian
        'gd-gb' => 'GD', 	// Scottish Gaelic
        'sr-rs'	=> 'SR',	// Serbian Cyrillic
        'sr-yu' => 'SR',	// Serbian Latin
        'sk-sk' => 'SK', 	// Slovak
        'es-es' => 'ES',	// Spanish
        'sw-ke' => 'sw',	// Swahili
        'sl-si' => 'sl',    // Slovenian
        'sv-se' => 'sv', 	// Swedish
        'sy-iq' => 'SYR',	// Syriac
        'ta-in' => 'TA', 	// Tamil
        'th-th' => 'TH',	// Thai
        'tr-tr' => 'TR',	// Turkish
        'uk' => 'uk', 	// Ukrainian fix 1.3.9
        'ur-pk' => 'UR', 	// Urdu
        'ug-cn'	=> 'UG',	// Uyghur
        'vi-vn' => 'vi', 	// Vietnamese
        'cy-gb' => 'CY', 	// Welsh
	);
}