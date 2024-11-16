<?php

namespace CpanelApi;

/**
 * Class CpanelVersionControlDeployment
 *
 * Cpanel VersionControlDeployment operations
 *
 * @package CpanelApi
 */
class CpanelVersionControlDeployment extends CpanelBase
{
    const OPERATION = 'VersionControlDeployment';


    public function create(string $repositoryRoot)
    {
        $params = ['repository_root' => $repositoryRoot];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function delete(string $deployId)
    {
        $params = ['deploy_id' => $deployId];
        $command = [self::OPERATION, CpanelBase::nameResolver(__FUNCTION__)];
        return $this->doCommand($command, $params);
    }

    public function retrieve()
    {
        return $this->doEmptyCommand(__FUNCTION__);
    }
    /** VersionControl */

    public function createGitRepo(string $name,string $repositoryRoot,string $type)
    {
        $params = ['name' => $name,'repository_root'=>$repositoryRoot,'type'=>$type];
        $command = ['VersionControl', 'create'];
        return $this->doCommand($command, $params);
    }

    public function deleteGitRepo(string $reposotoryRoot)
    {
        $params = ['repository_root' => $reposotoryRoot];
        $command = ['VersionControl', 'delete'];
        return $this->doCommand($command, $params);
    }

    public function retrieveGitrepos()
    {
        $params = ['',''];
        $command = ['VersionControl', 'retrieve'];
        return $this->doCommand($command, $params);
    }

    public function updateGitRepo(string $repositoryRoot,string $branch,string $name,string $sourceRepository)
    {
        $params = ['repository_root'=>$repositoryRoot,'branch'=>$branch,'name'=>$name,'source_repository'=>$sourceRepository];
        $command = ['VersionControl', 'update'];
        return $this->doCommand($command, $params);
    }
}
