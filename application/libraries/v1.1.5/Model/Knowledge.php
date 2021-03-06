<?php
/**
 * Knowledge
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
 * What's new<br> 1. Add API Page <br> 2. Change Designer API <br> 3. Change Producer API <br> 4. Change Supplier API
 *
 * OpenAPI spec version: v1.1.5
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
 * Knowledge Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Knowledge implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Knowledge';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        '_id' => 'string',
        'title' => 'string',
        'subtitle' => 'string',
        'create_date' => 'string',
        'like_count' => 'int',
        'is_like' => 'bool',
        'image' => '\Swagger\Client\Model\Media',
        'youtube_id' => 'string',
        'detail' => 'string',
        'share_url' => 'string',
        'category' => '\Swagger\Client\Model\Category'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        '_id' => null,
        'title' => null,
        'subtitle' => null,
        'create_date' => null,
        'like_count' => 'int32',
        'is_like' => null,
        'image' => null,
        'youtube_id' => null,
        'detail' => null,
        'share_url' => null,
        'category' => null
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
        'title' => 'title',
        'subtitle' => 'subtitle',
        'create_date' => 'createDate',
        'like_count' => 'likeCount',
        'is_like' => 'isLike',
        'image' => 'image',
        'youtube_id' => 'youtubeId',
        'detail' => 'detail',
        'share_url' => 'shareUrl',
        'category' => 'category'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        '_id' => 'setId',
        'title' => 'setTitle',
        'subtitle' => 'setSubtitle',
        'create_date' => 'setCreateDate',
        'like_count' => 'setLikeCount',
        'is_like' => 'setIsLike',
        'image' => 'setImage',
        'youtube_id' => 'setYoutubeId',
        'detail' => 'setDetail',
        'share_url' => 'setShareUrl',
        'category' => 'setCategory'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        '_id' => 'getId',
        'title' => 'getTitle',
        'subtitle' => 'getSubtitle',
        'create_date' => 'getCreateDate',
        'like_count' => 'getLikeCount',
        'is_like' => 'getIsLike',
        'image' => 'getImage',
        'youtube_id' => 'getYoutubeId',
        'detail' => 'getDetail',
        'share_url' => 'getShareUrl',
        'category' => 'getCategory'
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
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['subtitle'] = isset($data['subtitle']) ? $data['subtitle'] : null;
        $this->container['create_date'] = isset($data['create_date']) ? $data['create_date'] : null;
        $this->container['like_count'] = isset($data['like_count']) ? $data['like_count'] : null;
        $this->container['is_like'] = isset($data['is_like']) ? $data['is_like'] : null;
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
        $this->container['youtube_id'] = isset($data['youtube_id']) ? $data['youtube_id'] : null;
        $this->container['detail'] = isset($data['detail']) ? $data['detail'] : null;
        $this->container['share_url'] = isset($data['share_url']) ? $data['share_url'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
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
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets subtitle
     *
     * @return string
     */
    public function getSubtitle()
    {
        return $this->container['subtitle'];
    }

    /**
     * Sets subtitle
     *
     * @param string $subtitle subtitle
     *
     * @return $this
     */
    public function setSubtitle($subtitle)
    {
        $this->container['subtitle'] = $subtitle;

        return $this;
    }

    /**
     * Gets create_date
     *
     * @return string
     */
    public function getCreateDate()
    {
        return $this->container['create_date'];
    }

    /**
     * Sets create_date
     *
     * @param string $create_date create_date
     *
     * @return $this
     */
    public function setCreateDate($create_date)
    {
        $this->container['create_date'] = $create_date;

        return $this;
    }

    /**
     * Gets like_count
     *
     * @return int
     */
    public function getLikeCount()
    {
        return $this->container['like_count'];
    }

    /**
     * Sets like_count
     *
     * @param int $like_count like_count
     *
     * @return $this
     */
    public function setLikeCount($like_count)
    {
        $this->container['like_count'] = $like_count;

        return $this;
    }

    /**
     * Gets is_like
     *
     * @return bool
     */
    public function getIsLike()
    {
        return $this->container['is_like'];
    }

    /**
     * Sets is_like
     *
     * @param bool $is_like is_like
     *
     * @return $this
     */
    public function setIsLike($is_like)
    {
        $this->container['is_like'] = $is_like;

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
     * Gets youtube_id
     *
     * @return string
     */
    public function getYoutubeId()
    {
        return $this->container['youtube_id'];
    }

    /**
     * Sets youtube_id
     *
     * @param string $youtube_id youtube_id
     *
     * @return $this
     */
    public function setYoutubeId($youtube_id)
    {
        $this->container['youtube_id'] = $youtube_id;

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
     * Gets share_url
     *
     * @return string
     */
    public function getShareUrl()
    {
        return $this->container['share_url'];
    }

    /**
     * Sets share_url
     *
     * @param string $share_url share_url
     *
     * @return $this
     */
    public function setShareUrl($share_url)
    {
        $this->container['share_url'] = $share_url;

        return $this;
    }

    /**
     * Gets category
     *
     * @return \Swagger\Client\Model\Category
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param \Swagger\Client\Model\Category $category category
     *
     * @return $this
     */
    public function setCategory($category)
    {
        $this->container['category'] = $category;

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


