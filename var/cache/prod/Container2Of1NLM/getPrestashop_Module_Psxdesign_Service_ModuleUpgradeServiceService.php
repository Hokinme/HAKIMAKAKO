<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.module.psxdesign.service.module_upgrade_service' shared service.

return $this->services['prestashop.module.psxdesign.service.module_upgrade_service'] = new \PrestaShop\Module\PsxDesign\Service\ModuleUpgradeService(($this->services['prestashop.module.manager'] ?? $this->load('getPrestashop_Module_ManagerService.php')), ($this->services['psxdesign.module'] ?? $this->load('getPsxdesign_ModuleService.php'))->name);