<?php

require_once 'shippo.civix.php';

use CRM_Shippo_ExtensionUtil as E;

/**
 * Implements hook_civicrm_config().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_config/
 */
function shippo_civicrm_config(&$config): void {
  _shippo_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_install
 */
function shippo_civicrm_install(): void {
  _shippo_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_enable
 */
function shippo_civicrm_enable(): void {
  _shippo_civix_civicrm_enable();
}