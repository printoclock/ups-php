<?php
/**
 * ShipmentServiceOptionsRestrictedArticles
 *
 * PHP version 5
 *
 * @category Class
 * @package  UPS\Rating
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Rate
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * 
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.45
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace UPS\Rating\Rating;

use \ArrayAccess;
use \UPS\Rating\ObjectSerializer;

/**
 * ShipmentServiceOptionsRestrictedArticles Class Doc Comment
 *
 * @category Class
 * @description Restricted Articles container.  Valid for UPS World Wide Express Freight shipments.
 * @package  UPS\Rating
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ShipmentServiceOptionsRestrictedArticles implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ShipmentServiceOptions_RestrictedArticles';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'alcoholic_beverages_indicator' => 'string',
        'diagnostic_specimens_indicator' => 'string',
        'perishables_indicator' => 'string',
        'plants_indicator' => 'string',
        'seeds_indicator' => 'string',
        'special_exceptions_indicator' => 'string',
        'tobacco_indicator' => 'string',
        'e_cigarettes_indicator' => 'string',
        'hemp_cbd_indicator' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'alcoholic_beverages_indicator' => null,
        'diagnostic_specimens_indicator' => null,
        'perishables_indicator' => null,
        'plants_indicator' => null,
        'seeds_indicator' => null,
        'special_exceptions_indicator' => null,
        'tobacco_indicator' => null,
        'e_cigarettes_indicator' => null,
        'hemp_cbd_indicator' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'alcoholic_beverages_indicator' => 'AlcoholicBeveragesIndicator',
        'diagnostic_specimens_indicator' => 'DiagnosticSpecimensIndicator',
        'perishables_indicator' => 'PerishablesIndicator',
        'plants_indicator' => 'PlantsIndicator',
        'seeds_indicator' => 'SeedsIndicator',
        'special_exceptions_indicator' => 'SpecialExceptionsIndicator',
        'tobacco_indicator' => 'TobaccoIndicator',
        'e_cigarettes_indicator' => 'ECigarettesIndicator',
        'hemp_cbd_indicator' => 'HempCBDIndicator'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'alcoholic_beverages_indicator' => 'setAlcoholicBeveragesIndicator',
        'diagnostic_specimens_indicator' => 'setDiagnosticSpecimensIndicator',
        'perishables_indicator' => 'setPerishablesIndicator',
        'plants_indicator' => 'setPlantsIndicator',
        'seeds_indicator' => 'setSeedsIndicator',
        'special_exceptions_indicator' => 'setSpecialExceptionsIndicator',
        'tobacco_indicator' => 'setTobaccoIndicator',
        'e_cigarettes_indicator' => 'setECigarettesIndicator',
        'hemp_cbd_indicator' => 'setHempCbdIndicator'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'alcoholic_beverages_indicator' => 'getAlcoholicBeveragesIndicator',
        'diagnostic_specimens_indicator' => 'getDiagnosticSpecimensIndicator',
        'perishables_indicator' => 'getPerishablesIndicator',
        'plants_indicator' => 'getPlantsIndicator',
        'seeds_indicator' => 'getSeedsIndicator',
        'special_exceptions_indicator' => 'getSpecialExceptionsIndicator',
        'tobacco_indicator' => 'getTobaccoIndicator',
        'e_cigarettes_indicator' => 'getECigarettesIndicator',
        'hemp_cbd_indicator' => 'getHempCbdIndicator'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }



    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['alcoholic_beverages_indicator'] = isset($data['alcoholic_beverages_indicator']) ? $data['alcoholic_beverages_indicator'] : null;
        $this->container['diagnostic_specimens_indicator'] = isset($data['diagnostic_specimens_indicator']) ? $data['diagnostic_specimens_indicator'] : null;
        $this->container['perishables_indicator'] = isset($data['perishables_indicator']) ? $data['perishables_indicator'] : null;
        $this->container['plants_indicator'] = isset($data['plants_indicator']) ? $data['plants_indicator'] : null;
        $this->container['seeds_indicator'] = isset($data['seeds_indicator']) ? $data['seeds_indicator'] : null;
        $this->container['special_exceptions_indicator'] = isset($data['special_exceptions_indicator']) ? $data['special_exceptions_indicator'] : null;
        $this->container['tobacco_indicator'] = isset($data['tobacco_indicator']) ? $data['tobacco_indicator'] : null;
        $this->container['e_cigarettes_indicator'] = isset($data['e_cigarettes_indicator']) ? $data['e_cigarettes_indicator'] : null;
        $this->container['hemp_cbd_indicator'] = isset($data['hemp_cbd_indicator']) ? $data['hemp_cbd_indicator'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets alcoholic_beverages_indicator
     *
     * @return string
     */
    public function getAlcoholicBeveragesIndicator()
    {
        return $this->container['alcoholic_beverages_indicator'];
    }

    /**
     * Sets alcoholic_beverages_indicator
     *
     * @param string $alcoholic_beverages_indicator This field is a flag to indicate if the package has Alcohol. True if present; false otherwise.  Valid for UPS World Wide Express Freight shipments.
     *
     * @return $this
     */
    public function setAlcoholicBeveragesIndicator($alcoholic_beverages_indicator)
    {
        $this->container['alcoholic_beverages_indicator'] = $alcoholic_beverages_indicator;

        return $this;
    }

    /**
     * Gets diagnostic_specimens_indicator
     *
     * @return string
     */
    public function getDiagnosticSpecimensIndicator()
    {
        return $this->container['diagnostic_specimens_indicator'];
    }

    /**
     * Sets diagnostic_specimens_indicator
     *
     * @param string $diagnostic_specimens_indicator This field is a flag to indicate if the package has Biological substances. True if present; false otherwise.  Valid for UPS World Wide Express Freight shipments. Lane check will happen based on postal code/ city.
     *
     * @return $this
     */
    public function setDiagnosticSpecimensIndicator($diagnostic_specimens_indicator)
    {
        $this->container['diagnostic_specimens_indicator'] = $diagnostic_specimens_indicator;

        return $this;
    }

    /**
     * Gets perishables_indicator
     *
     * @return string
     */
    public function getPerishablesIndicator()
    {
        return $this->container['perishables_indicator'];
    }

    /**
     * Sets perishables_indicator
     *
     * @param string $perishables_indicator This field is a flag to indicate if the package has Perishables. True if present; false otherwise.  Valid for UPS World Wide Express Freight shipments.
     *
     * @return $this
     */
    public function setPerishablesIndicator($perishables_indicator)
    {
        $this->container['perishables_indicator'] = $perishables_indicator;

        return $this;
    }

    /**
     * Gets plants_indicator
     *
     * @return string
     */
    public function getPlantsIndicator()
    {
        return $this->container['plants_indicator'];
    }

    /**
     * Sets plants_indicator
     *
     * @param string $plants_indicator This field is a flag to indicate if the package has Plants. True if present; false otherwise.  Valid for UPS World Wide Express Freight shipments.
     *
     * @return $this
     */
    public function setPlantsIndicator($plants_indicator)
    {
        $this->container['plants_indicator'] = $plants_indicator;

        return $this;
    }

    /**
     * Gets seeds_indicator
     *
     * @return string
     */
    public function getSeedsIndicator()
    {
        return $this->container['seeds_indicator'];
    }

    /**
     * Sets seeds_indicator
     *
     * @param string $seeds_indicator This field is a flag to indicate if the package has Seeds. True if present; false otherwise.  Valid for UPS World Wide Express Freight shipments.
     *
     * @return $this
     */
    public function setSeedsIndicator($seeds_indicator)
    {
        $this->container['seeds_indicator'] = $seeds_indicator;

        return $this;
    }

    /**
     * Gets special_exceptions_indicator
     *
     * @return string
     */
    public function getSpecialExceptionsIndicator()
    {
        return $this->container['special_exceptions_indicator'];
    }

    /**
     * Sets special_exceptions_indicator
     *
     * @param string $special_exceptions_indicator This field is a flag to indicate if the package has Special Exceptions Restricted Materials. True if present; false otherwise.  Valid for UPS World Wide Express Freight shipments.
     *
     * @return $this
     */
    public function setSpecialExceptionsIndicator($special_exceptions_indicator)
    {
        $this->container['special_exceptions_indicator'] = $special_exceptions_indicator;

        return $this;
    }

    /**
     * Gets tobacco_indicator
     *
     * @return string
     */
    public function getTobaccoIndicator()
    {
        return $this->container['tobacco_indicator'];
    }

    /**
     * Sets tobacco_indicator
     *
     * @param string $tobacco_indicator This field is a flag to indicate if the package has Tobacco. True if present; false otherwise.  Valid for UPS World Wide Express Freight shipments.
     *
     * @return $this
     */
    public function setTobaccoIndicator($tobacco_indicator)
    {
        $this->container['tobacco_indicator'] = $tobacco_indicator;

        return $this;
    }

    /**
     * Gets e_cigarettes_indicator
     *
     * @return string
     */
    public function getECigarettesIndicator()
    {
        return $this->container['e_cigarettes_indicator'];
    }

    /**
     * Sets e_cigarettes_indicator
     *
     * @param string $e_cigarettes_indicator This field is a flag to indicate if the package has E-Cigarettes. True if present; false otherwise.  Valid for UPS World Wide Express Freight shipments.
     *
     * @return $this
     */
    public function setECigarettesIndicator($e_cigarettes_indicator)
    {
        $this->container['e_cigarettes_indicator'] = $e_cigarettes_indicator;

        return $this;
    }

    /**
     * Gets hemp_cbd_indicator
     *
     * @return string
     */
    public function getHempCbdIndicator()
    {
        return $this->container['hemp_cbd_indicator'];
    }

    /**
     * Sets hemp_cbd_indicator
     *
     * @param string $hemp_cbd_indicator This field is a flag to indicate if the package has Hemp/CBD. True if present; false otherwise.  Valid for UPS World Wide Express Freight shipments.
     *
     * @return $this
     */
    public function setHempCbdIndicator($hemp_cbd_indicator)
    {
        $this->container['hemp_cbd_indicator'] = $hemp_cbd_indicator;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}