<?php
/**
 * OriginAddressOriginSearchCriteria
 *
 * PHP version 5
 *
 * @category Class
 * @package  UPS\Pickup
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Pickup
 *
 * Using the Pickup API, applications can schedule pickups, manage previously scheduled pickups, or cancel previously scheduled pickups.
 *
 * OpenAPI spec version: 1.0.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.45
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace UPS\Pickup\Pickup;

use \ArrayAccess;
use \UPS\Pickup\ObjectSerializer;

/**
 * OriginAddressOriginSearchCriteria Class Doc Comment
 *
 * @category Class
 * @description Origin Search Criteria Container  Required if Proximity SearchIndicator is present.
 * @package  UPS\Pickup
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OriginAddressOriginSearchCriteria implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OriginAddress_OriginSearchCriteria';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'search_radius' => 'string',
        'distance_unit_of_measure' => 'string',
        'maximum_location' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'search_radius' => null,
        'distance_unit_of_measure' => null,
        'maximum_location' => null
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
        'search_radius' => 'SearchRadius',
        'distance_unit_of_measure' => 'DistanceUnitOfMeasure',
        'maximum_location' => 'MaximumLocation'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'search_radius' => 'setSearchRadius',
        'distance_unit_of_measure' => 'setDistanceUnitOfMeasure',
        'maximum_location' => 'setMaximumLocation'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'search_radius' => 'getSearchRadius',
        'distance_unit_of_measure' => 'getDistanceUnitOfMeasure',
        'maximum_location' => 'getMaximumLocation'
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
        $this->container['search_radius'] = isset($data['search_radius']) ? $data['search_radius'] : null;
        $this->container['distance_unit_of_measure'] = isset($data['distance_unit_of_measure']) ? $data['distance_unit_of_measure'] : null;
        $this->container['maximum_location'] = isset($data['maximum_location']) ? $data['maximum_location'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['distance_unit_of_measure'] === null) {
            $invalidProperties[] = "'distance_unit_of_measure' can't be null";
        }
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
     * Gets search_radius
     *
     * @return string
     */
    public function getSearchRadius()
    {
        return $this->container['search_radius'];
    }

    /**
     * Sets search_radius
     *
     * @param string $search_radius Search Request range. Valied values: 1 to 200 Default: 200
     *
     * @return $this
     */
    public function setSearchRadius($search_radius)
    {
        $this->container['search_radius'] = $search_radius;

        return $this;
    }

    /**
     * Gets distance_unit_of_measure
     *
     * @return string
     */
    public function getDistanceUnitOfMeasure()
    {
        return $this->container['distance_unit_of_measure'];
    }

    /**
     * Sets distance_unit_of_measure
     *
     * @param string $distance_unit_of_measure Unit of Measure  Required if ProximitySearchIndicator is present. Example: MI or KM
     *
     * @return $this
     */
    public function setDistanceUnitOfMeasure($distance_unit_of_measure)
    {
        $this->container['distance_unit_of_measure'] = $distance_unit_of_measure;

        return $this;
    }

    /**
     * Gets maximum_location
     *
     * @return string
     */
    public function getMaximumLocation()
    {
        return $this->container['maximum_location'];
    }

    /**
     * Sets maximum_location
     *
     * @param string $maximum_location Maximum Number of locations. Valied values: 1 to 100 Default: 100
     *
     * @return $this
     */
    public function setMaximumLocation($maximum_location)
    {
        $this->container['maximum_location'] = $maximum_location;

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