<?php
/**
 * Product
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Thai-IDC
 *
 * What's new<br> 1. Add API Get page by id <br> 2. Add API Portfolio <br> 3. Add API Article <br> 4. Add API Idea
 *
 * OpenAPI spec version: v1.1.6
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
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
 * Product Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Product implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Product';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        '_id' => 'string',
        'name' => 'string',
        'image' => '\Swagger\Client\Model\Media',
        'image_list' => '\Swagger\Client\Model\Media[]',
        'detail' => 'string',
        'lat' => 'double',
        'lon' => 'double',
        'producer_category' => '\Swagger\Client\Model\Category',
        'supplier_category' => '\Swagger\Client\Model\Category',
        'page' => '\Swagger\Client\Model\Page'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        '_id' => null,
        'name' => null,
        'image' => null,
        'image_list' => null,
        'detail' => null,
        'lat' => 'double',
        'lon' => 'double',
        'producer_category' => null,
        'supplier_category' => null,
        'page' => null
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
        '_id' => '_id',
        'name' => 'name',
        'image' => 'image',
        'image_list' => 'imageList',
        'detail' => 'detail',
        'lat' => 'lat',
        'lon' => 'lon',
        'producer_category' => 'producerCategory',
        'supplier_category' => 'supplierCategory',
        'page' => 'page'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        '_id' => 'setId',
        'name' => 'setName',
        'image' => 'setImage',
        'image_list' => 'setImageList',
        'detail' => 'setDetail',
        'lat' => 'setLat',
        'lon' => 'setLon',
        'producer_category' => 'setProducerCategory',
        'supplier_category' => 'setSupplierCategory',
        'page' => 'setPage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        '_id' => 'getId',
        'name' => 'getName',
        'image' => 'getImage',
        'image_list' => 'getImageList',
        'detail' => 'getDetail',
        'lat' => 'getLat',
        'lon' => 'getLon',
        'producer_category' => 'getProducerCategory',
        'supplier_category' => 'getSupplierCategory',
        'page' => 'getPage'
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
        $this->container['_id'] = isset($data['_id']) ? $data['_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
        $this->container['image_list'] = isset($data['image_list']) ? $data['image_list'] : null;
        $this->container['detail'] = isset($data['detail']) ? $data['detail'] : null;
        $this->container['lat'] = isset($data['lat']) ? $data['lat'] : null;
        $this->container['lon'] = isset($data['lon']) ? $data['lon'] : null;
        $this->container['producer_category'] = isset($data['producer_category']) ? $data['producer_category'] : null;
        $this->container['supplier_category'] = isset($data['supplier_category']) ? $data['supplier_category'] : null;
        $this->container['page'] = isset($data['page']) ? $data['page'] : null;
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

        return true;
    }


    /**
     * Gets _id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['_id'];
    }

    /**
     * Sets _id
     *
     * @param string $_id _id
     *
     * @return $this
     */
    public function setId($_id)
    {
        $this->container['_id'] = $_id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets image
     *
     * @return \Swagger\Client\Model\Media
     */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
     * Sets image
     *
     * @param \Swagger\Client\Model\Media $image image
     *
     * @return $this
     */
    public function setImage($image)
    {
        $this->container['image'] = $image;

        return $this;
    }

    /**
     * Gets image_list
     *
     * @return \Swagger\Client\Model\Media[]
     */
    public function getImageList()
    {
        return $this->container['image_list'];
    }

    /**
     * Sets image_list
     *
     * @param \Swagger\Client\Model\Media[] $image_list image_list
     *
     * @return $this
     */
    public function setImageList($image_list)
    {
        $this->container['image_list'] = $image_list;

        return $this;
    }

    /**
     * Gets detail
     *
     * @return string
     */
    public function getDetail()
    {
        return $this->container['detail'];
    }

    /**
     * Sets detail
     *
     * @param string $detail detail
     *
     * @return $this
     */
    public function setDetail($detail)
    {
        $this->container['detail'] = $detail;

        return $this;
    }

    /**
     * Gets lat
     *
     * @return double
     */
    public function getLat()
    {
        return $this->container['lat'];
    }

    /**
     * Sets lat
     *
     * @param double $lat lat
     *
     * @return $this
     */
    public function setLat($lat)
    {
        $this->container['lat'] = $lat;

        return $this;
    }

    /**
     * Gets lon
     *
     * @return double
     */
    public function getLon()
    {
        return $this->container['lon'];
    }

    /**
     * Sets lon
     *
     * @param double $lon lon
     *
     * @return $this
     */
    public function setLon($lon)
    {
        $this->container['lon'] = $lon;

        return $this;
    }

    /**
     * Gets producer_category
     *
     * @return \Swagger\Client\Model\Category
     */
    public function getProducerCategory()
    {
        return $this->container['producer_category'];
    }

    /**
     * Sets producer_category
     *
     * @param \Swagger\Client\Model\Category $producer_category producer_category
     *
     * @return $this
     */
    public function setProducerCategory($producer_category)
    {
        $this->container['producer_category'] = $producer_category;

        return $this;
    }

    /**
     * Gets supplier_category
     *
     * @return \Swagger\Client\Model\Category
     */
    public function getSupplierCategory()
    {
        return $this->container['supplier_category'];
    }

    /**
     * Sets supplier_category
     *
     * @param \Swagger\Client\Model\Category $supplier_category supplier_category
     *
     * @return $this
     */
    public function setSupplierCategory($supplier_category)
    {
        $this->container['supplier_category'] = $supplier_category;

        return $this;
    }

    /**
     * Gets page
     *
     * @return \Swagger\Client\Model\Page
     */
    public function getPage()
    {
        return $this->container['page'];
    }

    /**
     * Sets page
     *
     * @param \Swagger\Client\Model\Page $page page
     *
     * @return $this
     */
    public function setPage($page)
    {
        $this->container['page'] = $page;

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


