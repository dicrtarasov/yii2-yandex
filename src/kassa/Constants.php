<?php
namespace dicr\yandex\kassa;

/**
 * Справочник констант Яндекс.Касса.
 *
 * @author Igor (Dicr) Tarasov <develop@dicr.org>
 * @version 2019
 *
 * @link https://kassa.yandex.ru/developers/54fz/parameters-values
 */
interface Constants
{
    /**
     * @var int Коды систем налогообложения.
     * Код системы налогообложения передается в параметре tax_system_code.
     * Товары с разным значением tax_system_code необходимо передавать в разных чеках.
     * @link https://kassa.yandex.ru/developers/54fz/parameters-values#tax-systems
     */
    const TAX_COMMON = 1;
    const TAX_SIMPLE_1 = 2;
    const TAX_SIMPLE_2 = 3;
    const TAX_ENVD = 4;
    const TAX_ESN = 5;
    const TAX_PATENT = 6;

    const TAXES = [
        self::TAX_COMMON => 'Общая система налогообложения',
        self::TAX_SIMPLE_1 => 'Упрощенная (УСН, доходы)',
        self::TAX_SIMPLE_2 => 'Упрощенная (УСН, доходы минус расходы)',
        self::TAX_ENVD => 'Единый налог на вмененный доход (ЕНВД)',
        self::TAX_ESN => 'Единый сельскохозяйственный налог (ЕСН)',
        self::TAX_PATENT => 'Патентная система налогообложения'
    ];

    /**
     * @var integer Коды ставок НДС
     * @link https://kassa.yandex.ru/developers/54fz/parameters-values#vat-codes
     */
    const VAT_NO = 1;
    const VAT_0 = 2;
    const VAT_10 = 3;
    const VAT_20 = 4;
    const VAT_110 = 5;
    const VAT_120 = 6;

    const VATS = [
        self::VAT_NO => 'Без НДС',
        self::VAT_0 => 'НДС по ставке 0%',
        self::VAT_10 => 'НДС по ставке 10%',
        self::VAT_20 => 'НДС чека по ставке 20%',
        self::VAT_110 => 'НДС чека по расчетной ставке 10/110',
        self::VAT_120 => 'НДС чека по расчетной ставке 20/120'
    ];

    /**
     * @var string Признак предмета расчета.
     * Признак предмета расчета передается в параметре payment_subject.
     * @link https://kassa.yandex.ru/developers/54fz/parameters-values#payment-subject
     */
    const SUBJECT_COMMODITY = 'commodity';
    const SUBJECT_EXCISE = 'excise';
    const SUBJECT_JOB = 'job';
    const SUBJECT_SERVICE = 'service';
    const SUBJECT_BET = 'gambling_bet';
    const SUBJECT_PRIZE = 'gambling_prize';
    const SUBJECT_LOTTERY = 'lottery';
    const SUBJECT_LOTTERY_PRIZE = 'lottery_prize';
    const SUBJECT_INTELLECTUAL = 'intellectual_activity';
    const SUBJECT_PAYMENT = 'payment';
    const SUBJECT_AGENT = 'agent_commission';
    const SUBJECT_PROPERTY = 'property_right';
    const SUBJECT_GAIN = 'non_operating_gain';
    const SUBJECT_INSURACE  = 'insurance_premium';
    const SUBJECT_SALES = 'sales_tax';
    const SUBJECT_RESORT = 'resort_fee';
    const SUBJECT_COMPOSITE = 'composite';
    const SUBJECT_ANOTHER = 'another';

    const SUBJECTS = [
        self::SUBJECT_COMMODITY => 'Товар',
        self::SUBJECT_EXCISE => 'Подакцизный товар',
        self::SUBJECT_JOB => 'Работа',
        self::SUBJECT_SERVICE => 'Услуга',
        self::SUBJECT_BET => 'Ставка в азартной игре',
        self::SUBJECT_PRIZE => 'Выигрыш в азартной игре',
        self::SUBJECT_LOTTERY => 'Лотерейный билет',
        self::SUBJECT_LOTTERY_PRIZE => 'Выигрыш в лотерею',
        self::SUBJECT_INTELLECTUAL => 'Результаты интеллектуальной деятельности',
        self::SUBJECT_PAYMENT => 'Платеж',
        self::SUBJECT_AGENT => 'Агентское вознаграждение',
        self::SUBJECT_PROPERTY => 'Имущественные права',
        self::SUBJECT_GAIN => 'Внереализационный доход',
        self::SUBJECT_INSURACE => 'Страховой сбор',
        self::SUBJECT_SALES => 'Торговый сбор',
        self::SUBJECT_RESORT => 'Курортный сбор',
        self::SUBJECT_COMPOSITE => 'Несколько вариантов',
        self::SUBJECT_ANOTHER => 'Другое'
    ];

    /**
     * @var string Тип расчета
     * Тип расчета передается в запросе на создание чека  в массиве settlements, в параметре type.
     * @link https://kassa.yandex.ru/developers/54fz/parameters-values#settlement-type
     */
    const SETTLEMENT_CASHLESS = 'cashless';
    const SETTLEMENT_PREPAYMENT = 'prepayment';
    const SETTLEMENT_POSTPAYMENT = 'postpayment';
    const SETTLEMENT_CONSIDERATION = 'consideration';

    const SETTLEMENTS = [
        self::SETTLEMENT_CASHLESS => 'Безналичный расчет',
        self::SETTLEMENT_PREPAYMENT => 'Предоплата (аванс)',
        self::SETTLEMENT_POSTPAYMENT => 'Постоплата (кредит)',
        self::SETTLEMENT_CONSIDERATION => 'Встречное предоставление'
    ];

    /**
     * @var string Статусы платежа.
     * @link https://kassa.yandex.ru/developers/payments/payment-process#lifecycle
     */
    const STATUS_PENDING = 'pending';
    const STATUS_WAITING = 'waiting_for_capture';
    const STATUS_SUCCEEDED = 'succeeded';
    const STATUS_CANCELED = 'canceled';

    const STATUSES = [
        self::STATUS_PENDING => 'создан',
        self::STATUS_WAITING => 'ожидает',
        self::STATUS_SUCCEEDED => 'выполнен',
        self::STATUS_CANCELED => 'отменен'
    ];

    /**
     * @var string Тип инициатора платежа илиотмены
     */
    const REQUESTOR_MERCHANT = 'merchant';
    const REQUESTOR_APP = 'third_party_client';
    const REQUESTOR_YANDEX = 'yandex_checkout';
    const REQUESTOR_NETWORK = 'payment_network';

    const REQUESTORS = [
        self::REQUESTOR_MERCHANT => 'Продавец',
        self::REQUESTOR_APP => 'Приложение',
        self::REQUESTOR_YANDEX => 'Яндекс.Касса',
        self::REQUESTOR_NETWORK => 'Внешний участник'
    ];

    /**
     * @var string Способы оплаты.
     * @link https://kassa.yandex.ru/developers/payment-methods/overview#all
     */
    const PAYMETHOD_BANK_CARD = 'bank_card';
    const PAYMETHOD_APPLE_PAY = 'apple_pay';
    const PAYMETHOD_GOOGLE_PAY = 'google_pay';
    const PAYMETHOD_YANDEX_MONEY = 'yandex_money';
    const PAYMETHOD_QIWI = 'qiwi';
    const PAYMETHOD_WEBMONEY = 'webmoney';
    const PAYMETHOD_WECHAT = 'wechat';
    const PAYMETHOD_SBERBANK = 'sberbank';
    const PAYMETHOD_ALFABANK = 'alfabank';
    const PAYMETHOD_TINKOFF_BANK = 'tinkoff_bank';
    const PAYMETHOD_B2B_SBERBANK = 'b2b_sberbank';
    const PAYMETHOD_MOBILE_BALANCE = 'mobile_balance';
    const PAYMETHOD_CASH = 'cash';
    const PAYMETHOD_INSTALLMENTS = 'installments';

    const PAYMETHODS = [
        self::PAYMETHOD_BANK_CARD => 'Банковская карта',
        self::PAYMETHOD_APPLE_PAY => 'Apple Pay',
        self::PAYMETHOD_GOOGLE_PAY => 'Google Pay',
        self::PAYMETHOD_YANDEX_MONEY => 'Яндекс.Деньги',
        self::PAYMETHOD_QIWI => 'QIWI Кошелек',
        self::PAYMETHOD_WEBMONEY => 'Webmoney',
        self::PAYMETHOD_WECHAT => 'WeChat',
        self::PAYMETHOD_SBERBANK => 'Сбербанк Онлайн',
        self::PAYMETHOD_ALFABANK => 'Альфа-Клик',
        self::PAYMETHOD_TINKOFF_BANK => 'Тинькофф',
        self::PAYMETHOD_B2B_SBERBANK => 'Сбербанк Бизнес Онлайн',
        self::PAYMETHOD_MOBILE_BALANCE => 'Баланс телефона',
        self::PAYMETHOD_CASH => 'Наличные',
        self::PAYMETHOD_INSTALLMENTS => 'Заплатить по частям'
    ];

    /**
     * @var string Сценарии подтверждения платежа.
     * @link https://kassa.yandex.ru/developers/payments/payment-process#user-confirmation
     */
    const CONFIRM_REDIRECT = 'redirect';
    const CONFIRM_EXTERNAL = 'external';
    const CONFIRM_QR_CODE = 'qr-code';
    const CONFIRM_EMBEDDED = 'embedded';

    const CONFIRMS = [
        self::CONFIRM_REDIRECT => 'Redirect',
        self::CONFIRM_EXTERNAL => 'External',
        self::CONFIRM_QR_CODE => 'QR-код',
        self::CONFIRM_EMBEDDED => 'Embedded'
    ];

    /**
     * @var string Причины отмены платежа.
     * @link https://kassa.yandex.ru/developers/payments/declined-payments#cancellation-details-reason
     */
    const REASON_3D = '3d_secure_failed';
    const REASON_ISSUER = 'call_issuer';
    const REASON_EXPIRED = 'card_expired';
    const REASON_COUNTRY = 'country_forbidden';
    const REASON_FRAUD = 'fraud_suspected';
    const REASON_GENERAL = 'general_decline';
    const REASON_IDENTIFICATION = 'identification_required';
    const REASON_INSUFFICIENT = 'insufficient_funds';
    const REASON_NUMBER = 'invalid_card_number';
    const REASON_CSC = 'invalid_csc';
    const REASON_UNAVAILABLE = 'issuer_unavailable';
    const REASON_LIMIT = 'payment_method_limit_exceeded';
    const REASON_RESTRICTED = 'payment_method_restricted';
    const REASON_REVOKED = 'permission_revoked';

    const REASONS = [
        self::REASON_3D => 'Не пройдена аутентификация по 3-D Secure',
        self::REASON_ISSUER => 'Оплата данным платежным средством отклонена по неизвестным причинам',
        self::REASON_EXPIRED => 'Истек срок действия банковской карты',
        self::REASON_COUNTRY => 'Нельзя заплатить банковской картой, выпущенной в этой стране',
        self::REASON_FRAUD => 'Платеж заблокирован из-за подозрения в мошенничестве',
        self::REASON_GENERAL => 'Причина не детализирована',
        self::REASON_IDENTIFICATION => 'Превышены ограничения на платежи для кошелька в Яндекс.Деньгах',
        self::REASON_INSUFFICIENT => 'Не хватает денег для оплаты',
        self::REASON_NUMBER => 'Неправильно указан номер карты',
        self::REASON_CSC => 'Неправильно указан код CVV2 (CVC2, CID)',
        self::REASON_UNAVAILABLE => 'Организация, выпустившая платежное средство, недоступна',
        self::REASON_LIMIT => 'Исчерпан лимит платежей для данного платежного средства или вашего магазина',
        self::REASON_RESTRICTED => 'Запрещены операции данным платежным средством (карта заблокирована)',
        self::REASON_REVOKED => 'Нельзя провести безакцептное списание: пользователь отозвал разрешение на автоплатежи'
    ];
}