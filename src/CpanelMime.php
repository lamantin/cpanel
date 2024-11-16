<?php

namespace CpanelApi;

/**
 * Class CpanelMime
 *
 * Cpanel Mime  operations
 *
 * @package CpanelApi
 */
class CpanelMime extends CpanelBase
{
    const OPERATION = 'Mime';

    public function addHotlink(string $urls,string $extensions,string $redirectUrl,int $allowNull)
    {
        $params = ['urls' => $urls,'extension'=>$extensions,'redirect_url'=>$redirectUrl,'allow_null'=>$allowNull];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function deleteHotlink()
    {
        return $this->doEmptyCommand(__FUNCTION__);
    }

    public function listHotlinks()
    {
        return $this->doEmptyCommand(__FUNCTION__);
    }

    public function addRedirect(string $domain,string $redirect)
    {
        $params = ['domain' => $domain,'redirect'=>$redirect];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function deleteRedirect(string $domain)
    {
        $params = ['domain' => $domain];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function getRedirect(string $domain)
    {
        $params = ['domain' => $domain];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function listRedirects(string $domain)
    {
        $params = ['domain' => $domain];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }
}
