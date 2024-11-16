<?php

namespace CpanelApi;

/**
 * Class CpanelBoxTrapper
 *
 * Cpanel BoxTrapper operations
 *
 * @package CpanelApi
 */
class CpanelBoxTrapper extends CpanelBase
{
    const OPERATION = 'BoxTrapper';


    public function blacklistMessages(string $email, string $quenefile)
    {
        $params = ['email' => $email, 'quenefile' => $quenefile];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function deleteMessages(string $email, string $quenefile)
    {
        $params = ['email' => $email, 'quenefile' => $quenefile];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function deliverMessages(string $email, string $quenefile)
    {
        $params = ['email' => $email, 'quenefile' => $quenefile];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function getAllowlist(string $email)
    {
        $params = ['email' => $email];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function getBlocklist(string $email)
    {
        $params = ['email' => $email];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function getConfiguration(string $email)
    {
        $params = ['email' => $email];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function getEmailTemplate(string $email, string $template)
    {
        $params = ['email' => $email, 'template' => $template];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function getForwarders(string $email)
    {
        $params = ['email' => $email];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function getIgnorelist(string $email)
    {
        $params = ['email' => $email];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function getLog(string $email, int $date)
    {
        $params = ['email' => $email, 'date' => $date];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function getMessage(string $email, string $quenefile)
    {
        $params = ['email' => $email, 'quenefile' => $quenefile];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function getStatus(string $email)
    {
        $params = ['email' => $email];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function ignoreMessages(string $email, string $quenefile)
    {
        $params = ['email' => $email, 'quenefile' => $quenefile];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function listEmailTemplates()
    {
        return $this->doEmptyCommand(__FUNCTION__);
    }

    public function listQuenedMessages(string $email)
    {
        $params = ['email' => $email];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function processMessages(string $quenefile, string $action)
    {
        $params = ['quenefile' => $quenefile, 'action' => $action];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function resetEmailTemplate(string $template, string $email)
    {
        $params = ['template' => $template, 'email' => $email];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function saveConfiguration(string $email, int $enableAutoWhitelist, string $fromAddresses, int $queneDays, int $whitelistByAssociation, string $fromName, int $spamScore)
    {
        $params = [
            'email' => $email,
            'enable_auto_whitelist' => $enableAutoWhitelist,
            'from_addresses' => $fromAddresses,
            'quene_days' => $queneDays,
            'whitelist_by_association' => $whitelistByAssociation,
            'from_name' => $fromName,
            'spam_score' => $spamScore];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function saveEmailTemplate(string $contents, string $email, string $template)
    {
        $params = ['contents' => $contents, 'email' => $email, 'template' => $template];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function setAllowlist(string $email, string $rules)
    {
        $params = ['email' => $email, 'rules' => $rules];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function setBlocklist(string $email, string $rules)
    {
        $params = ['email' => $email, 'rules' => $rules];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function setForwarders(string $email,string $forwarder)
    {
        $params = ['email' => $email, 'forwarder' => $forwarder];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function setIgnorelist(string $email,string $rules)
    {
        $params = ['email' => $email, 'rules' => $rules];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function setStatus(string $email,int $enabled)
    {
        $params = ['email' => $email, 'enabled' => $enabled];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function whitelistMessages(string $quenefile,string $email)
    {
        $params = ['quenefile' => $quenefile,'email' => $email];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

}
