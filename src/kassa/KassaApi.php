<?php
/**
 * Copyright (c) 2019.
 *
 * @author Igor (Dicr) Tarasov, develop@dicr.org
 */

declare(strict_types = 1);
namespace dicr\yandex\kassa;

use YandexCheckout\Client;
use yii\base\Component;

/**
 * API Яндекс.Касса.
 *
 * @author Igor (Dicr) Tarasov <develop@dicr.org>
 * @version 2019
 *
 * @link https://kassa.yandex.ru/developers/api
 */
class KassaApi extends Component
{
    /** @var string идентификатор магазина */
    public $shopId;

    /** @var string секретный ключ */
    public $secret;

    /** @var string токен авторизации (вместо shopId/secret) */
    public $authToken;

    /** @var \YandexCheckout\Client */
    private $_client;

    /**
     * Возвращает клиент Яндекс.Кассы.
     *
     * @return \YandexCheckout\Client
     */
    public function getClient()
    {
        if (!isset($this->_client)) {
            $this->_client = new Client();
            if (!empty($this->authToken)) {
                $this->_client->setAuthToken($this->authToken);
            } elseif (!empty($this->shopId) && !empty($this->secret)) {
                $this->_client->setAuth($this->shopId, $this->secret);
            }
        }

        return $this->_client;
    }
}
