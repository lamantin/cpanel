<?php

namespace CpanelApi;

/**
 * Class CpanelMarket
 *
 * Cpanel Market operations
 *
 * @package CpanelApi
 */
class CpanelMarket extends CpanelBase
{
    const OPERATION = 'Market';

    /**
     * @param string $provider
     * @param string $accessToken
     * @param $urlAfterCheckOut
     * @return json
     * @throws \Exception
     */
    public function createShoppingCart(string $provider,string $accessToken,$urlAfterCheckOut)
    {
        $params = ['provider' => $provider,'access_token'=>$accessToken,'url_after_checkout'=>$urlAfterCheckOut];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];

        return $this->doCommand($command, $params);
    }

    /**
     * @return json
     */
    public function getAllProducts()
    {
        return $this->doEmptyCommand(__FUNCTION__);
    }

    /**
     * @param string $provider
     * @param $urlAfterCheckOut
     * @return json
     * @throws \Exception
     */
    public function getLoginUrl(string $provider,$urlAfterCheckOut)
    {
        $params = ['provider' => $provider,'url_after_checkout'=>$urlAfterCheckOut];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];

        return $this->doCommand($command, $params);
    }

    /**
     * @return json
     */
    public function getProviderList()
    {
        return $this->doEmptyCommand(__FUNCTION__);
    }

    /**
     * @param string $provider
     * @param int $orderItemId
     * @param string $status
     * @return json
     * @throws \Exception
     */
    public function setStatusOfPendingQueueItems(string $provider,int $orderItemId,string $status)
    {
        $params = ['provider' => $provider,'order_item_id'=>$orderItemId,'status'=>$status];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];

        return $this->doCommand($command, $params);

    }

    /**
     * @param string $provider
     * @param string $accessToken
     * @param int $orderId
     * @param string $urlAfterCheckout
     * @return json
     * @throws \Exception
     */
    public function setUrlAfterCheckout(string $provider,string $accessToken,int $orderId,string $urlAfterCheckout)
    {
        $params = ['provider' => $provider,'access_token'=>$accessToken,'order_id'=>$orderId,'url_after_checkout'=>$urlAfterCheckout];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];

        return $this->doCommand($command, $params);

    }

    /**
     * @param string $provider
     * @param string $loginToken
     * @param string $urlAfterLogin
     * @return json
     * @throws \Exception
     */
    public function validateLoginToken(string $provider,string $loginToken,string $urlAfterLogin)
    {
        $params = ['provider' => $provider,'login_token'=>$loginToken,'url_after_login'=>$urlAfterLogin];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];

        return $this->doCommand($command, $params);

    }

    /**
     * @param string $provider
     * @param int $orderItemId
     * @return json
     * @throws \Exception
     */
    public function cancelPendingSslCertificate(string $provider,int $orderItemId)
    {

        $params = ['provider' => $provider,'order_item_id'=>$orderItemId];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];

        return $this->doCommand($command, $params);
    }

    /**
     * @param int $orderItemId
     * @param string $provider
     * @return json
     * @throws \Exception
     */
    public function getCertificateStatusDetails(int $orderItemId,string $provider)
    {

        $params = ['provider' => $provider,'order_item_id'=>$orderItemId];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];

        return $this->doCommand($command, $params);
    }

    /**
     * @param string $provider
     * @return json
     * @throws \Exception
     */
    public function getPendingSslCertificates(string $provider)
    {
        $params = ['provider' => $provider];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];

        return $this->doCommand($command, $params);
    }

    /**
     * @param string $provider
     * @return json
     * @throws \Exception
     */
    public function getProviderSpecificDcvConstraints(string $provider)
    {
        $params = ['provider' => $provider];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];

        return $this->doCommand($command, $params);
    }

    /**
     * @param string $provider
     * @param int $orderItemId
     * @return json
     * @throws \Exception
     */
    public function getSslCertificateIfAvailable(string $provider,int $orderItemId)
    {
        $params = ['provider' => $provider,'order_item_id'=>$orderItemId];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];

        return $this->doCommand($command, $params);

    }

    /**
     * @return json
     */
    public function processSslPendingQueue()
    {
        return $this->doEmptyCommand(__FUNCTION__);
    }

    /**
     * @param string $accessToken
     * @param string $certificate
     * @param string $provider
     * @param string $identifyVerification
     * @param string $urlAfterCheckOut
     * @return void
     */
    public function requestSslCertificates(string $accessToken,string $certificate,string $provider,string $identifyVerification,string $urlAfterCheckOut)
    {
        $params = ['access_token' => $accessToken,'certificate'=>$certificate,'provider'=>$provider,'identify_verification'=>$identifyVerification,'url_after_checkout'=>$urlAfterCheckOut];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];

        return $this->doCommand($command, $params);

    }

}
