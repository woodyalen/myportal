<?
/**
 *  Пример работы с пользовательскими полями используя API bitrix
 *
 */

// Создаем массив полей необходимых для инициализации пользовательского поля
$arFields = [
    [
        'ENTITY_ID'     => 'USER', // ТИП СУЩНОСТИ К КОТОРОЙ ПРИВЯЗЫВАЕТСЯ ПОЛЕ
        'FIELD_NAME'    => 'UF_TEST_NAME', // обязательно нужен префикс UF_
		'USER_TYPE_ID'  => 'string', // тип поля 
		'XML_ID'        => 'AD_REGION_CODE',  // код XML
        'MULTIPLE'      => 'N', // Множественное
		'MANDATORY'     => 'N', // ОБязательное
		'SHOW_FILTER'   => 'I', // Показывать в фильтре
		'SHOW_IN_LIST'  => '',  // Показывать в списке
		'EDIT_IN_LIST'  => 'Y', // Редактировать в списке
		'IS_SEARCHABLE' => 'Y', // Участвует в поиске
		'SETTINGS'      => [],  // Массив содержит список настроек. Меняется в зависимости от типа поля.
		'LABELS'        => [    // Название которое будет отображаться для поля в админке.
			'ru' => 'Код региона',
			'en' => 'Region code'
		],
    ],
];


$userType = new \CUserTypeEntity();

foreach ($arFields as $arField) {
    
    // Удобно для большого количества полей задавать значение в цикле
    // $arField['ENTITY_ID'] = 'USER';

    // Проверяем, поле на наличие в базе
    $arFields = \Bitrix\Main\UserFieldTable::getRow([
        'select' => ['ID'],
        'filter' => [
            '=ENTITY_ID' => $arField['ENTITY_ID'],
            '=FIELD_NAME' => $arField['FIELD_NAME'],
        ],
    ]);

}


?>