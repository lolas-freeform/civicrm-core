<?php
/*
 +--------------------------------------------------------------------+
 | CiviCRM version 4.4                                                |
 +--------------------------------------------------------------------+
 | Copyright CiviCRM LLC (c) 2004-2013                                |
 +--------------------------------------------------------------------+
 | This file is a part of CiviCRM.                                    |
 |                                                                    |
 | CiviCRM is free software; you can copy, modify, and distribute it  |
 | under the terms of the GNU Affero General Public License           |
 | Version 3, 19 November 2007 and the CiviCRM Licensing Exception.   |
 |                                                                    |
 | CiviCRM is distributed in the hope that it will be useful, but     |
 | WITHOUT ANY WARRANTY; without even the implied warranty of         |
 | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.               |
 | See the GNU Affero General Public License for more details.        |
 |                                                                    |
 | You should have received a copy of the GNU Affero General Public   |
 | License and the CiviCRM Licensing Exception along                  |
 | with this program; if not, contact CiviCRM LLC                     |
 | at info[AT]civicrm[DOT]org. If you have questions about the        |
 | GNU Affero General Public License or the licensing of CiviCRM,     |
 | see the CiviCRM license FAQ at http://civicrm.org/licensing        |
 +--------------------------------------------------------------------+
*/

/**
 *
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2013
 *
 * Generated from xml/schema/CRM/Core/OptionValue.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 */

namespace Civi\Core;

require_once 'Civi/Core/Entity.php';

use Doctrine\ORM\Mapping as ORM;
use Civi\API\Annotation as CiviAPI;
use JMS\Serializer\Annotation as JMS;

/**
 * OptionValue
 *
 * @CiviAPI\Entity("OptionValue")
 * @CiviAPI\Permission()
 * @ORM\Table(name="civicrm_option_value", indexes={@ORM\Index(name="index_option_group_id_value", columns={"value","option_group_id"}),@ORM\Index(name="index_option_group_id_name", columns={"name","option_group_id"}),@ORM\Index(name="FK_civicrm_option_value_option_group_id", columns={"option_group_id"}),@ORM\Index(name="FK_civicrm_option_value_component_id", columns={"component_id"}),@ORM\Index(name="FK_civicrm_option_value_domain_id", columns={"domain_id"})})
 * @ORM\Entity
 *
 */
class OptionValue extends \Civi\Core\Entity {

  /**
   * @var integer
   *
   * @JMS\Type("integer")
   * @ORM\Column(name="id", type="integer", nullable=false, options={"unsigned":true} )
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="IDENTITY")
   */
  private $id;
    
  /**
   * @var \Civi\Core\OptionGroup
   *
   * 
   * @ORM\ManyToOne(targetEntity="Civi\Core\OptionGroup")
   * @ORM\JoinColumns({@ORM\JoinColumn(name="option_group_id", referencedColumnName="id", onDelete="CASCADE")})
   * 
   */
  private $optionGroup;
  
  /**
   * @var string
   *
   * @JMS\Type("string")
   * @ORM\Column(name="label", type="string", length=255, nullable=true)
   * 
   * 
   */
  private $label;
  
  /**
   * @var string
   *
   * @JMS\Type("string")
   * @ORM\Column(name="value", type="string", length=512, nullable=true)
   * 
   * 
   */
  private $value;
  
  /**
   * @var string
   *
   * @JMS\Type("string")
   * @ORM\Column(name="name", type="string", length=255, nullable=true)
   * 
   * 
   */
  private $name;
  
  /**
   * @var string
   *
   * @JMS\Type("string")
   * @ORM\Column(name="grouping", type="string", length=255, nullable=true)
   * 
   * 
   */
  private $grouping;
  
  /**
   * @var integer
   *
   * @JMS\Type("integer")
   * @ORM\Column(name="filter", type="integer", nullable=true, options={"unsigned":true})
   * 
   * 
   */
  private $filter;
  
  /**
   * @var boolean
   *
   * @JMS\Type("boolean")
   * @ORM\Column(name="is_default", type="boolean", nullable=false)
   * 
   * 
   */
  private $isDefault = '0';
  
  /**
   * @var integer
   *
   * @JMS\Type("integer")
   * @ORM\Column(name="weight", type="integer", nullable=true, options={"unsigned":true})
   * 
   * 
   */
  private $weight;
  
  /**
   * @var text
   *
   * @JMS\Type("text")
   * @ORM\Column(name="description", type="text", length=65535, nullable=true)
   * 
   * 
   */
  private $description;
  
  /**
   * @var boolean
   *
   * @JMS\Type("boolean")
   * @ORM\Column(name="is_optgroup", type="boolean", nullable=false)
   * 
   * 
   */
  private $isOptgroup = '0';
  
  /**
   * @var boolean
   *
   * @JMS\Type("boolean")
   * @ORM\Column(name="is_reserved", type="boolean", nullable=false)
   * 
   * 
   */
  private $isReserved = '0';
  
  /**
   * @var boolean
   *
   * @JMS\Type("boolean")
   * @ORM\Column(name="is_active", type="boolean", nullable=false)
   * 
   * 
   */
  private $isActive = '1';
  
  /**
   * @var \Civi\Core\Component
   *
   * 
   * @ORM\ManyToOne(targetEntity="Civi\Core\Component")
   * @ORM\JoinColumns({@ORM\JoinColumn(name="component_id", referencedColumnName="id")})
   * 
   */
  private $component;
  
  /**
   * @var \Civi\Core\Domain
   *
   * 
   * @ORM\ManyToOne(targetEntity="Civi\Core\Domain")
   * @ORM\JoinColumns({@ORM\JoinColumn(name="domain_id", referencedColumnName="id")})
   * 
   */
  private $domain;
  
  /**
   * @var integer
   *
   * @JMS\Type("integer")
   * @ORM\Column(name="visibility_id", type="integer", nullable=false, options={"unsigned":true})
   * 
   * 
   */
  private $visibilityId = 'NULL';

  /**
   * Get id
   *
   * @return integer
   */
  public function getId() {
    return $this->id;
  }
    
  /**
   * Set optionGroup
   *
   * @param \Civi\Core\OptionGroup $optionGroup
   * @return OptionValue
   */
  public function setOptionGroup(\Civi\Core\OptionGroup $optionGroup = null) {
    $this->optionGroup = $optionGroup;
    return $this;
  }

  /**
   * Get optionGroup
   *
   * @return \Civi\Core\OptionGroup
   */
  public function getOptionGroup() {
    return $this->optionGroup;
  }
  
  /**
   * Set label
   *
   * @param string $label
   * @return OptionValue
   */
  public function setLabel($label) {
    $this->label = $label;
    return $this;
  }

  /**
   * Get label
   *
   * @return string
   */
  public function getLabel() {
    return $this->label;
  }
  
  /**
   * Set value
   *
   * @param string $value
   * @return OptionValue
   */
  public function setValue($value) {
    $this->value = $value;
    return $this;
  }

  /**
   * Get value
   *
   * @return string
   */
  public function getValue() {
    return $this->value;
  }
  
  /**
   * Set name
   *
   * @param string $name
   * @return OptionValue
   */
  public function setName($name) {
    $this->name = $name;
    return $this;
  }

  /**
   * Get name
   *
   * @return string
   */
  public function getName() {
    return $this->name;
  }
  
  /**
   * Set grouping
   *
   * @param string $grouping
   * @return OptionValue
   */
  public function setGrouping($grouping) {
    $this->grouping = $grouping;
    return $this;
  }

  /**
   * Get grouping
   *
   * @return string
   */
  public function getGrouping() {
    return $this->grouping;
  }
  
  /**
   * Set filter
   *
   * @param integer $filter
   * @return OptionValue
   */
  public function setFilter($filter) {
    $this->filter = $filter;
    return $this;
  }

  /**
   * Get filter
   *
   * @return integer
   */
  public function getFilter() {
    return $this->filter;
  }
  
  /**
   * Set isDefault
   *
   * @param boolean $isDefault
   * @return OptionValue
   */
  public function setIsDefault($isDefault) {
    $this->isDefault = $isDefault;
    return $this;
  }

  /**
   * Get isDefault
   *
   * @return boolean
   */
  public function getIsDefault() {
    return $this->isDefault;
  }
  
  /**
   * Set weight
   *
   * @param integer $weight
   * @return OptionValue
   */
  public function setWeight($weight) {
    $this->weight = $weight;
    return $this;
  }

  /**
   * Get weight
   *
   * @return integer
   */
  public function getWeight() {
    return $this->weight;
  }
  
  /**
   * Set description
   *
   * @param text $description
   * @return OptionValue
   */
  public function setDescription($description) {
    $this->description = $description;
    return $this;
  }

  /**
   * Get description
   *
   * @return text
   */
  public function getDescription() {
    return $this->description;
  }
  
  /**
   * Set isOptgroup
   *
   * @param boolean $isOptgroup
   * @return OptionValue
   */
  public function setIsOptgroup($isOptgroup) {
    $this->isOptgroup = $isOptgroup;
    return $this;
  }

  /**
   * Get isOptgroup
   *
   * @return boolean
   */
  public function getIsOptgroup() {
    return $this->isOptgroup;
  }
  
  /**
   * Set isReserved
   *
   * @param boolean $isReserved
   * @return OptionValue
   */
  public function setIsReserved($isReserved) {
    $this->isReserved = $isReserved;
    return $this;
  }

  /**
   * Get isReserved
   *
   * @return boolean
   */
  public function getIsReserved() {
    return $this->isReserved;
  }
  
  /**
   * Set isActive
   *
   * @param boolean $isActive
   * @return OptionValue
   */
  public function setIsActive($isActive) {
    $this->isActive = $isActive;
    return $this;
  }

  /**
   * Get isActive
   *
   * @return boolean
   */
  public function getIsActive() {
    return $this->isActive;
  }
  
  /**
   * Set component
   *
   * @param \Civi\Core\Component $component
   * @return OptionValue
   */
  public function setComponent(\Civi\Core\Component $component = null) {
    $this->component = $component;
    return $this;
  }

  /**
   * Get component
   *
   * @return \Civi\Core\Component
   */
  public function getComponent() {
    return $this->component;
  }
  
  /**
   * Set domain
   *
   * @param \Civi\Core\Domain $domain
   * @return OptionValue
   */
  public function setDomain(\Civi\Core\Domain $domain = null) {
    $this->domain = $domain;
    return $this;
  }

  /**
   * Get domain
   *
   * @return \Civi\Core\Domain
   */
  public function getDomain() {
    return $this->domain;
  }
  
  /**
   * Set visibilityId
   *
   * @param integer $visibilityId
   * @return OptionValue
   */
  public function setVisibilityId($visibilityId) {
    $this->visibilityId = $visibilityId;
    return $this;
  }

  /**
   * Get visibilityId
   *
   * @return integer
   */
  public function getVisibilityId() {
    return $this->visibilityId;
  }

  /**
   * returns all the column names of this table
   *
   * @access public
   * @return array
   */
  public static $_fields = NULL;

  static function &fields( ) {
    if ( !self::$_fields) {
      self::$_fields = array (
      
              'id' => array(
      
        'name' => 'id',
        'propertyName' => 'id',
        'type' => \CRM_Utils_Type::T_INT,
                        'required' => true,
                                             
                                    
                          ),
      
              'option_group_id' => array(
      
        'name' => 'option_group_id',
        'propertyName' => 'optionGroup',
        'type' => \CRM_Utils_Type::T_INT,
                        'required' => true,
                                             
                                    
                'FKClassName' => 'Civi_Core_OptionGroup',
                                     'pseudoconstant' => array(
                                'table' => 'civicrm_option_group',
                      'keyColumn' => 'id',
                      'labelColumn' => 'name',
                    )
                 ),
      
              'label' => array(
      
        'name' => 'label',
        'propertyName' => 'label',
        'type' => \CRM_Utils_Type::T_STRING,
                'title' => ts('Option Label'),
                        'required' => true,
                         'maxlength' => 255,
                         'size' => \CRM_Utils_Type::HUGE,
                           
                                    
                          ),
      
              'value' => array(
      
        'name' => 'value',
        'propertyName' => 'value',
        'type' => \CRM_Utils_Type::T_STRING,
                'title' => ts('Option Value'),
                        'required' => true,
                         'maxlength' => 512,
                         'size' => \CRM_Utils_Type::HUGE,
                           
                                    
                          ),
      
              'name' => array(
      
        'name' => 'name',
        'propertyName' => 'name',
        'type' => \CRM_Utils_Type::T_STRING,
                'title' => ts('Option Name'),
                                 'maxlength' => 255,
                         'size' => \CRM_Utils_Type::HUGE,
                           
                'import' => true,
        'where' => 'civicrm_option_value.name',
        'headerPattern' => '',
        'dataPattern' => '',
                         'export' => true,
                                   
                          ),
      
              'grouping' => array(
      
        'name' => 'grouping',
        'propertyName' => 'grouping',
        'type' => \CRM_Utils_Type::T_STRING,
                'title' => ts('Option Grouping Name'),
                                 'maxlength' => 255,
                         'size' => \CRM_Utils_Type::HUGE,
                           
                                    
                          ),
      
              'filter' => array(
      
        'name' => 'filter',
        'propertyName' => 'filter',
        'type' => \CRM_Utils_Type::T_INT,
                'title' => ts('Filter'),
                                                     
                                    
                          ),
      
              'is_default' => array(
      
        'name' => 'is_default',
        'propertyName' => 'isDefault',
        'type' => \CRM_Utils_Type::T_BOOLEAN,
                                                     
                                    
                          ),
      
              'weight' => array(
      
        'name' => 'weight',
        'propertyName' => 'weight',
        'type' => \CRM_Utils_Type::T_INT,
                'title' => ts('Weight'),
                        'required' => true,
                                             
                                    
                          ),
      
              'description' => array(
      
        'name' => 'description',
        'propertyName' => 'description',
        'type' => \CRM_Utils_Type::T_TEXT,
                'title' => ts('Description'),
                                 'maxlength' => 65535,
                                  'rows' => 8,
                         'cols' => 60,
         
                                    
                          ),
      
              'is_optgroup' => array(
      
        'name' => 'is_optgroup',
        'propertyName' => 'isOptgroup',
        'type' => \CRM_Utils_Type::T_BOOLEAN,
                                                     
                                    
                          ),
      
              'is_reserved' => array(
      
        'name' => 'is_reserved',
        'propertyName' => 'isReserved',
        'type' => \CRM_Utils_Type::T_BOOLEAN,
                                                     
                                    
                          ),
      
              'is_active' => array(
      
        'name' => 'is_active',
        'propertyName' => 'isActive',
        'type' => \CRM_Utils_Type::T_BOOLEAN,
                                                     
                                           'default' => '1',
         
                          ),
      
              'component_id' => array(
      
        'name' => 'component_id',
        'propertyName' => 'component',
        'type' => \CRM_Utils_Type::T_INT,
                                                     
                                    
                'FKClassName' => 'Civi_Core_Component',
                                     'pseudoconstant' => array(
                                'table' => 'civicrm_component',
                      'keyColumn' => 'id',
                      'labelColumn' => 'name',
                    )
                 ),
      
              'domain_id' => array(
      
        'name' => 'domain_id',
        'propertyName' => 'domain',
        'type' => \CRM_Utils_Type::T_INT,
                                                     
                                    
                'FKClassName' => 'Civi_Core_Domain',
                          ),
      
              'visibility_id' => array(
      
        'name' => 'visibility_id',
        'propertyName' => 'visibilityId',
        'type' => \CRM_Utils_Type::T_INT,
                                                     
                                           'default' => 'NULL',
         
                          ),
             );
    }
    return self::$_fields;
  }

}
