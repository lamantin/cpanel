<?php

namespace CpanelApi;

/**
 * Class CpanelDNS
 *
 * Cpanel DNS  operations
 *
 * @package CpanelApi
 */
class CpanelDNS extends CpanelBase
{
    const OPERATION = 'DNS';

    /**
     * @param string $domain
     * @return json
     * @throws \Exception
     */
    public function ensureDomainsResideOnlyLocally(string $domain)
    {
        $params = ['domain' => $domain];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    /**
     * @param string $domain
     * @return json
     * @throws \Exception
     */
    public function hasLocalAuthority(string $domain)
    {
        $params = ['domain' => $domain];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function lookup(string $domain)
    {
        $params = ['domain' => $domain];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function massEditZone(string $zone, string $serial)
    {
        $params = ['zone' => $zone, 'serial' => $serial];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    /**
     * @param string $zone
     * @return json
     * @throws \Exception
     */
    public function parseZone(string $zone)
    {
        $params = ['zone' => $zone];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    /**
     * @param string $domain
     * @param string $sourceIp
     * @param string $destIp
     * @return json
     * @throws \Exception
     */
    public function swapIpInZones(string $domain, string $sourceIp, string $destIp)
    {
        $params = ['domain' => $domain, 'source_ip' => $sourceIp, 'dest_ip' => $destIp];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    /** DNS SECURITY */
    /**
     * @param string $domain
     * @param int $keyId
     * @return json
     * @throws \Exception
     */
    public function activateZoneKey(string $domain, int $keyId)
    {
        $params = ['domain' => $domain, 'key_id' => $keyId];
        $command = ['DNSSEC', CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function addZoneKey(string $domain, int $algoNum, $keyType)
    {
        $params = ['domain' => $domain, 'algo_num' => $algoNum, 'key_type' => $keyType];
        $command = ['DNSSEC', CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function deactivateZoneKey(string $domain, int $keyId)
    {
        $params = ['domain' => $domain, 'key_id' => $keyId];
        $command = ['DNSSEC', CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function disableDnssec(string $domain)
    {
        $params = ['domain' => $domain];
        $command = ['DNSSEC', CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function enableDnssec(string $domain)
    {
        $params = ['domain' => $domain];
        $command = ['DNSSEC', CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function exportZoneDnskey(string $domain, int $keyId)
    {
        $params = ['domain' => $domain, 'key_id' => $keyId];
        $command = ['DNSSEC', CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function exportZoneKey(string $domain, int $keyId)
    {
        $params = ['domain' => $domain, 'key_id' => $keyId];
        $command = ['DNSSEC', CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function fetchDsRecords(string $domain)
    {
        $params = ['domain' => $domain];
        $command = ['DNSSEC', CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function importZoneKey(string $domain, string $keyType, string $keyData)
    {
        $params = ['domain' => $domain, 'key_type' => $keyType, 'key_data' => $keyData];
        $command = ['DNSSEC', CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function removeZoneKey(string $domain, int $keyId)
    {
        $params = ['domain' => $domain, 'key_id' => $keyId];
        $command = ['DNSSEC', CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function setNsec3(string $domain, string $nsec3OptOut, int $nsec3Iterations, string $nsec3Narrow, string $nsec3Salt)
    {
        $params = [
            'domain' => $domain,
            'nsec3_opt_out' => $$nsec3OptOut,
            'nsec3_iterations' => $nsec3Iterations,
            'nsec_narrow' => $nsec3Narrow,
            'nsec3_salt' => $nsec3Salt
        ];
        $command = ['DNSSEC', CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function unsetNsec3(string $domain)
    {
        $params = ['domain' => $domain];
        $command = ['DNSSEC', CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    /*** DYNAMIC DNS **/

    public function create(string $domain)
    {
        $params = ['domain' => $domain];
        $command = ['DynamicDNS', CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function delete(string $id)
    {
        $params = ['id' => $id];
        $command = ['DynamicDNS', CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function listDynamicDomains()
    {
        $params = ['', ''];
        $command = ['DynamicDNS', 'list'];
        return $this->doCommand($command, $params);
    }

    public function recreate(string $id)
    {
        $params = ['id' => $id];
        $command = ['DynamicDNS', CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function setDescription(string $id, string $description)
    {
        $params = ['id' => $id, 'dewscription' => $description];
        $command = ['DynamicDNS', CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

}
