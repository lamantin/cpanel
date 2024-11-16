<?php

namespace CpanelApi;

/**
 * Class CpanelDomainInfo
 *
 * Cpanel domain operations
 *
 * @package CpanelApi
 */
class CpanelDomainInfo extends CpanelBase
{
  const OPERATION = 'DomainInfo';

  /**
   * listDomains
   * List of domains in Cpanel
   * @return json
   */
  public function listDomains()
  {
    return $this->doEmptyCommand(__FUNCTION__);
  }

  public function domainData()
  {
      return $this->doEmptyCommand(__FUNCTION__);
  }

  public function mainDomainBuiltinSubdomainAliases()
  {
      return $this->doEmptyCommand(__FUNCTION__);
  }

  public function singleDomainData(string $domain)
  {
      $params = ['domain' => $domain];
      $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
      return $this->doCommand($command, $params);
  }

  public function addSubdomain(string $domain,string $rootDomain)
  {
      $params = ['domain' => $domain,'root_domain'=>$rootDomain];
      $command = ['SubDomain', CpanelBase::nameResolver(__FUNCTION__)];
      return $this->doCommand($command, $params);
  }

}
