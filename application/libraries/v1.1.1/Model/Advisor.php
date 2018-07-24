<?php
/**
 * Advisor
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
 * What's new<br> 1.Delete book shelf change method DELETE to POST
 *
 * OpenAPI spec version: v1.1.3
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
 * Advisor Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Advisor implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Advisor';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        '_id' => 'string',
        'firstname' => 'string',
        'lastname' => 'string',
        'image' => '\Swagger\Client\Model\Media',
        'rating' => 'int',
        'review_count' => 'int',
        'detail' => 'string',
        'is_online' => 'bool',
        'room_id' => 'string',
        'advisor_categories' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        '_id' => null,
        'firstname' => null,
        'lastname' => null,
        'image' => null,
        'rating' => 'int32',
        'review_count' => 'int32',
        'detail' => null,
        'is_online' => null,
        'room_id' => null,
        'advisor_categories' => null
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
        'firstname' => 'firstname',
        'lastname' => 'lastname',
        'image' => 'image',
        'rating' => 'rating',
        'review_count' => 'reviewCount',
        'detail' => 'detail',
        'is_online' => 'isOnline',
        'room_id' => 'roomId',
        'advisor_categories' => 'advisorCategories'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        '_id' => 'setId',
        'firstname' => 'setFirstname',
        'lastname' => 'setLastname',
        'image' => 'setImage',
        'rating' => 'setRating',
        'review_count' => 'setReviewCount',
        'detail' => 'setDetail',
        'is_online' => 'setIsOnline',
        'room_id' => 'setRoomId',
        'advisor_categories' => 'setAdvisorCategories'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        '_id' => 'getId',
        'firstname' => 'getFirstname',
        'lastname' => 'getLastname',
        'image' => 'getImage',
        'rating' => 'getRating',
        'review_count' => 'getReviewCount',
        'detail' => 'getDetail',
        'is_online' => 'getIsOnline',
        'room_id' => 'getRoomId',
        'advisor_categories' => 'getAdvisorCategories'
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
        $this->container['firstname'] = isset($data['firstname']) ? $data['firstname'] : null;
        $this->container['lastname'] = isset($data['lastname']) ? $data['lastname'] : null;
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
        $this->container['rating'] = isset($data['rating']) ? $data['rating'] : null;
        $this->container['review_count'] = isset($data['review_count']) ? $data['review_count'] : null;
        $this->container['detail'] = isset($data['detail']) ? $data['detail'] : null;
        $this->container['is_online'] = isset($data['is_online']) ? $data['is_online'] : null;
        $this->container['room_id'] = isset($data['room_id']) ? $data['room_id'] : null;
        $this->container['advisor_categories'] = isset($data['advisor_categories']) ? $data['advisor_categories'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['_id'] === null) {
            $invalidProperties[] = "'_id' can't be null";
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

        if ($this->container['_id'] === null) {
            return false;
        }
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
     * Gets firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->container['firstname'];
    }

    /**
     * Sets firstname
     *
     * @param string $firstname firstname
     *
     * @return $this
     */
    public function setFirstname($firstname)
    {
        $this->container['firstname'] = $firstname;

        return $this;
    }

    /**
     * Gets lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->container['lastname'];
    }

    /**
     * Sets lastname
     *
     * @param string $lastname lastname
     *
     * @return $this
     */
    public function setLastname($lastname)
    {
        $this->container['lastname'] = $lastname;

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
     * Gets rating
     *
     * @return int
     */
    public function getRating()
    {
        return $this->container['rating'];
    }

    /**
     * Sets rating
     *
     * @param int $rating rating
     *
     * @return $this
     */
    public function setRating($rating)
    {
        $this->container['rating'] = $rating;

        return $this;
    }

    /**
     * Gets review_count
     *
     * @return int
     */
    public function getReviewCount()
    {
        return $this->container['review_count'];
    }

    /**
     * Sets review_count
     *
     * @param int $review_count review_count
     *
     * @return $this
     */
    public function setReviewCount($review_count)
    {
        $this->container['review_count'] = $review_count;

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
     * Gets is_online
     *
     * @return bool
     */
    public function getIsOnline()
    {
        return $this->container['is_online'];
    }

    /**
     * Sets is_online
     *
     * @param bool $is_online is_online
     *
     * @return $this
     */
    public function setIsOnline($is_online)
    {
        $this->container['is_online'] = $is_online;

        return $this;
    }

    /**
     * Gets room_id
     *
     * @return string
     */
    public function getRoomId()
    {
        return $this->container['room_id'];
    }

    /**
     * Sets room_id
     *
     * @param string $room_id room_id
     *
     * @return $this
     */
    public function setRoomId($room_id)
    {
        $this->container['room_id'] = $room_id;

        return $this;
    }

    /**
     * Gets advisor_categories
     *
     * @return string[]
     */
    public function getAdvisorCategories()
    {
        return $this->container['advisor_categories'];
    }

    /**
     * Sets advisor_categories
     *
     * @param string[] $advisor_categories advisor_categories
     *
     * @return $this
     */
    public function setAdvisorCategories($advisor_categories)
    {
        $this->container['advisor_categories'] = $advisor_categories;

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


