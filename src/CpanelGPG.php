<?php

namespace CpanelApi;

/**
 * Class CpanelGPG
 *
 * Cpanel FTP operations
 *
 * @package CpanelApi
 */
class CpanelGPG extends CpanelBase
{
    const OPERATION = 'GPG';


    public function deleteKeypair(string $keyId)
    {
        $params = ['key_id' => $keyId];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function exportPublicKey(string $keyId)
    {
        $params = ['key_id' => $keyId];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function exportSecretKey(string $keyId)
    {
        $params = ['key_id' => $keyId];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function generateKey(string $name,string $email)
    {
        $params = ['name' => $name,'email'=>$email];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function importKey(string $keyData)
    {
        $params = ['key_data' => $keyData];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function listPublicKeys()
    {
        return $this->doEmptyCommand(__FUNCTION__);
    }

    public function listSecretKeys()
    {
        return $this->doEmptyCommand(__FUNCTION__);
    }

}
