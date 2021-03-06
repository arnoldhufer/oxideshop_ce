<?php
/**
 * Price enter mode: brutto
 * Price view mode: brutto
 * Product count: 1
 * VAT info: 20%
 * Currency rate: 1.0
 * Discounts: -
 * Short description: Brutto-Brutto user group Price C, 
 * Test case is moved from selenium test "testFrontendPriceC"
 */
$aData = array (
        'articles' => array (
                0 => array (
                        'oxid'            => 1000,
                        'oxprice'         => 50.00,
                        'oxpricea'        => 35,
                        'oxpriceb'        => 45,
					    'oxpricec'        => 55
                ),
        ),
        'user' => array(
                'oxid' => '_testUserA',
                'oxactive' => 1,
                'oxusername' => 'groupAUser',
        ),
 
        'group' => array (
                0 => array (
                        'oxid' => 'oxidpricea',
                        'oxactive' => 1,
                        'oxtitle' => 'Price A',
                        'oxobject2group' => array ( '_testUserA' ),
                ),
                1 => array (
                        'oxid' => 'oxidpriceb',
                        'oxactive' => 1,
                        'oxtitle' => 'Price B',
                        'oxobject2group' => array ( '_testUserB' ),
                ),
				2 => array (
                        'oxid' => 'oxidpricec',
                        'oxactive' => 1,
                        'oxtitle' => 'Price C',
                        'oxobject2group' => array ( '_testUserC' ),
                ),
        ),
        'expected' => array (
                1000 => array (
                        'base_price'        => '35,00',
                        'price'             => '35,00',
                ),
        ),
        'options' => array (
                'config' => array(
                        'blEnterNetPrice' => false,
                        'blShowNetPrice' => false,
                        'dDefaultVAT' => 20,
					    'blOverrideZeroABCPrices' => true,
                ),
                'activeCurrencyRate' => 1,
        ),
);