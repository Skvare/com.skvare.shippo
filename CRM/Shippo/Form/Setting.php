<?php

use CRM_Shippo_ExtensionUtil as E;

/**
 * Form controller class
 *
 * @see https://docs.civicrm.org/dev/en/latest/framework/quickform/
 */
class CRM_Shippo_Form_Setting extends CRM_Core_Form {

  /**
   * Field List.
   *
   * @var array
   */
  var array $fieldList = [];

  public function preProcess() {
    $this->fieldList = [
      'shippo_api_live' => 'API Key',
      'shippo_shipping_from_name' => 'From Name',
      'shippo_shipping_from_street1' => 'Street Address',
      'shippo_shipping_from_street2' => 'Street Address 2',
      'shippo_shipping_from_city' => 'City',
      'shippo_shipping_from_state' => 'State',
      'shippo_shipping_from_zip' => 'Zip',
      'shippo_shipping_from_country' => 'Country',
      'shippo_shipping_telephone' => 'Phone Number',
      'shippo_shipping_email' => 'Email Address',
    ];
  }

  /**
   * Build form.
   *
   * @throws \CRM_Core_Exception
   */
  public function buildQuickForm(): void {
    foreach ($this->fieldList as $name => $label) {
      $this->addElement('text', $name, $label, ['size' => 48]);
    }
    $carriesList = ["UPS" => 'UPS', "USPS" => 'USPS'];
    $this->add('select', "shippo_shipping_carriers", "Carriers",
      $carriesList, FALSE, ['class' => 'crm-select2', 'multiple' => 1, 'placeholder'
    => ts('- any -')]);

    $this->addButtons([
      [
        'type' => 'submit',
        'name' => E::ts('Submit'),
        'isDefault' => TRUE,
      ],
    ]);

    // export form elements
    $this->assign('elementNames', $this->getRenderableElementNames());
    parent::buildQuickForm();
  }

  /**
   * Set Default form.
   *
   * @throws \CRM_Core_Exception
   */
  public function setDefaultValues() {
    $defaults = [];
    $domainID = CRM_Core_Config::domainID();
    $settings = Civi::settings($domainID);
    $fieldList = $this->fieldList + ['shippo_shipping_carriers' => 'Carriers'];
    foreach ($fieldList as $name => $label) {
      $defaults[$name] = $settings->get($name);
    }
    return $defaults;
  }

  /**
   * Post process form.
   *
   * @throws \CRM_Core_Exception
   */
  public function postProcess(): void {
    $values = $this->exportValues();

    // Use settings as defined in default domain.
    $domainID = CRM_Core_Config::domainID();
    $settings = Civi::settings($domainID);

    foreach ($values as $k => $v) {
      if (strpos($k, 'shippo_') === 0) {
        $settings->set($k, $v);
      }
    }
    CRM_Core_Session::setStatus(E::ts('Setting updated successfully'));
    parent::postProcess();
  }

  /**
   * Get the fields/elements defined in this form.
   *
   * @return array (string)
   */
  public function getRenderableElementNames(): array {
    // The _elements list includes some items which should not be
    // auto-rendered in the loop -- such as "qfKey" and "buttons".  These
    // items don't have labels.  We'll identify renderable by filtering on
    // the 'label'.
    $elementNames = [];
    foreach ($this->_elements as $element) {
      /** @var HTML_QuickForm_Element $element */
      $label = $element->getLabel();
      if (!empty($label)) {
        $elementNames[] = $element->getName();
      }
    }
    return $elementNames;
  }

}
