<?php
/**
 * DocumentVatRateSummary
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Billingo API v3
 *
 * This is a Billingo API v3 documentation. Our API based on REST software architectural style. API has resource-oriented URLs, accepts JSON-encoded request bodies and returns JSON-encoded responses. To use this API you have to generate a new API key on our [site](https://app.billingo.hu/api-key). After that, you can test your API key on this page.
 *
 * OpenAPI spec version: 3.0.3
 * Contact: hello@billingo.hu
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.19
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * DocumentVatRateSummary Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DocumentVatRateSummary implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DocumentVatRateSummary';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'vat_name' => 'string',
'vat_percentage' => 'float',
'vat_rate_net_amount' => 'float',
'vat_rate_vat_amount' => 'float',
'vat_rate_vat_amount_local' => 'float',
'vat_rate_gross_amount' => 'float'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'vat_name' => null,
'vat_percentage' => 'float',
'vat_rate_net_amount' => 'float',
'vat_rate_vat_amount' => 'float',
'vat_rate_vat_amount_local' => 'float',
'vat_rate_gross_amount' => 'float'    ];

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
        'vat_name' => 'vat_name',
'vat_percentage' => 'vat_percentage',
'vat_rate_net_amount' => 'vat_rate_net_amount',
'vat_rate_vat_amount' => 'vat_rate_vat_amount',
'vat_rate_vat_amount_local' => 'vat_rate_vat_amount_local',
'vat_rate_gross_amount' => 'vat_rate_gross_amount'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'vat_name' => 'setVatName',
'vat_percentage' => 'setVatPercentage',
'vat_rate_net_amount' => 'setVatRateNetAmount',
'vat_rate_vat_amount' => 'setVatRateVatAmount',
'vat_rate_vat_amount_local' => 'setVatRateVatAmountLocal',
'vat_rate_gross_amount' => 'setVatRateGrossAmount'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'vat_name' => 'getVatName',
'vat_percentage' => 'getVatPercentage',
'vat_rate_net_amount' => 'getVatRateNetAmount',
'vat_rate_vat_amount' => 'getVatRateVatAmount',
'vat_rate_vat_amount_local' => 'getVatRateVatAmountLocal',
'vat_rate_gross_amount' => 'getVatRateGrossAmount'    ];

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
        $this->container['vat_name'] = isset($data['vat_name']) ? $data['vat_name'] : null;
        $this->container['vat_percentage'] = isset($data['vat_percentage']) ? $data['vat_percentage'] : null;
        $this->container['vat_rate_net_amount'] = isset($data['vat_rate_net_amount']) ? $data['vat_rate_net_amount'] : null;
        $this->container['vat_rate_vat_amount'] = isset($data['vat_rate_vat_amount']) ? $data['vat_rate_vat_amount'] : null;
        $this->container['vat_rate_vat_amount_local'] = isset($data['vat_rate_vat_amount_local']) ? $data['vat_rate_vat_amount_local'] : null;
        $this->container['vat_rate_gross_amount'] = isset($data['vat_rate_gross_amount']) ? $data['vat_rate_gross_amount'] : null;
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
     * Gets vat_name
     *
     * @return string
     */
    public function getVatName()
    {
        return $this->container['vat_name'];
    }

    /**
     * Sets vat_name
     *
     * @param string $vat_name vat_name
     *
     * @return $this
     */
    public function setVatName($vat_name)
    {
        $this->container['vat_name'] = $vat_name;

        return $this;
    }

    /**
     * Gets vat_percentage
     *
     * @return float
     */
    public function getVatPercentage()
    {
        return $this->container['vat_percentage'];
    }

    /**
     * Sets vat_percentage
     *
     * @param float $vat_percentage vat_percentage
     *
     * @return $this
     */
    public function setVatPercentage($vat_percentage)
    {
        $this->container['vat_percentage'] = $vat_percentage;

        return $this;
    }

    /**
     * Gets vat_rate_net_amount
     *
     * @return float
     */
    public function getVatRateNetAmount()
    {
        return $this->container['vat_rate_net_amount'];
    }

    /**
     * Sets vat_rate_net_amount
     *
     * @param float $vat_rate_net_amount vat_rate_net_amount
     *
     * @return $this
     */
    public function setVatRateNetAmount($vat_rate_net_amount)
    {
        $this->container['vat_rate_net_amount'] = $vat_rate_net_amount;

        return $this;
    }

    /**
     * Gets vat_rate_vat_amount
     *
     * @return float
     */
    public function getVatRateVatAmount()
    {
        return $this->container['vat_rate_vat_amount'];
    }

    /**
     * Sets vat_rate_vat_amount
     *
     * @param float $vat_rate_vat_amount vat_rate_vat_amount
     *
     * @return $this
     */
    public function setVatRateVatAmount($vat_rate_vat_amount)
    {
        $this->container['vat_rate_vat_amount'] = $vat_rate_vat_amount;

        return $this;
    }

    /**
     * Gets vat_rate_vat_amount_local
     *
     * @return float
     */
    public function getVatRateVatAmountLocal()
    {
        return $this->container['vat_rate_vat_amount_local'];
    }

    /**
     * Sets vat_rate_vat_amount_local
     *
     * @param float $vat_rate_vat_amount_local vat_rate_vat_amount_local
     *
     * @return $this
     */
    public function setVatRateVatAmountLocal($vat_rate_vat_amount_local)
    {
        $this->container['vat_rate_vat_amount_local'] = $vat_rate_vat_amount_local;

        return $this;
    }

    /**
     * Gets vat_rate_gross_amount
     *
     * @return float
     */
    public function getVatRateGrossAmount()
    {
        return $this->container['vat_rate_gross_amount'];
    }

    /**
     * Sets vat_rate_gross_amount
     *
     * @param float $vat_rate_gross_amount vat_rate_gross_amount
     *
     * @return $this
     */
    public function setVatRateGrossAmount($vat_rate_gross_amount)
    {
        $this->container['vat_rate_gross_amount'] = $vat_rate_gross_amount;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
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
