<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once(APPPATH.'libraries/v1.1.5/Configuration.php');
require_once(APPPATH.'libraries/v1.1.5/HeaderSelector.php');
require_once(APPPATH.'libraries/v1.1.5/ApiException.php');
require_once(APPPATH.'libraries/v1.1.5/ObjectSerializer.php');

require_once(APPPATH.'libraries/v1.1.5/Api/AdvisorApi.php');
require_once(APPPATH.'libraries/v1.1.5/Api/BookApi.php');	
require_once(APPPATH.'libraries/v1.1.5/Api/ChatApi.php');	
require_once(APPPATH.'libraries/v1.1.5/Api/ConsultApi.php');	
require_once(APPPATH.'libraries/v1.1.5/Api/DesignerApi.php');	
require_once(APPPATH.'libraries/v1.1.5/Api/KnowledgeApi.php');	
require_once(APPPATH.'libraries/v1.1.5/Api/NewsApi.php');	
require_once(APPPATH.'libraries/v1.1.5/Api/PageApi.php');	
require_once(APPPATH.'libraries/v1.1.5/Api/ProducerApi.php');	
require_once(APPPATH.'libraries/v1.1.5/Api/ReportReviewApi.php');	
require_once(APPPATH.'libraries/v1.1.5/Api/SupplierApi.php');	
require_once(APPPATH.'libraries/v1.1.5/Api/UploadApi.php');	
require_once(APPPATH.'libraries/v1.1.5/Api/UserApi.php');	

require_once(APPPATH.'libraries/v1.1.5/Model/ModelInterface.php');
require_once(APPPATH.'libraries/v1.1.5/Model/BadRequest.php');
require_once(APPPATH.'libraries/v1.1.5/Model/AdvisorResponse.php');
require_once(APPPATH.'libraries/v1.1.5/Model/Advisor.php');
require_once(APPPATH.'libraries/v1.1.5/Model/AdvisorSearch.php');
require_once(APPPATH.'libraries/v1.1.5/Model/AdvisorSearchResponse.php');
require_once(APPPATH.'libraries/v1.1.5/Model/BadgeResponse.php');
require_once(APPPATH.'libraries/v1.1.5/Model/Body.php');
require_once(APPPATH.'libraries/v1.1.5/Model/Body1.php');
require_once(APPPATH.'libraries/v1.1.5/Model/Body2.php');
require_once(APPPATH.'libraries/v1.1.5/Model/Body3.php');
require_once(APPPATH.'libraries/v1.1.5/Model/BookDeleteRequest.php');
require_once(APPPATH.'libraries/v1.1.5/Model/BookResponse.php');
require_once(APPPATH.'libraries/v1.1.5/Model/BookSearch.php');
require_once(APPPATH.'libraries/v1.1.5/Model/BookSearchResponse.php');
require_once(APPPATH.'libraries/v1.1.5/Model/Category.php');
require_once(APPPATH.'libraries/v1.1.5/Model/CategoryResponse.php');
require_once(APPPATH.'libraries/v1.1.5/Model/Designer.php');
require_once(APPPATH.'libraries/v1.1.5/Model/DesignerCategory.php');
require_once(APPPATH.'libraries/v1.1.5/Model/DesignerCategoryResponse.php');
require_once(APPPATH.'libraries/v1.1.5/Model/DesignerRequest.php');
require_once(APPPATH.'libraries/v1.1.5/Model/DesignerResponse.php');
require_once(APPPATH.'libraries/v1.1.5/Model/Knowledge.php');
require_once(APPPATH.'libraries/v1.1.5/Model/KnowledgeResponse.php');
require_once(APPPATH.'libraries/v1.1.5/Model/KnowledgeSearch.php');
require_once(APPPATH.'libraries/v1.1.5/Model/KnowledgeSearchResponse.php');	
require_once(APPPATH.'libraries/v1.1.5/Model/Media.php');
require_once(APPPATH.'libraries/v1.1.5/Model/Message.php');
require_once(APPPATH.'libraries/v1.1.5/Model/MessageResponse.php');
require_once(APPPATH.'libraries/v1.1.5/Model/ModelInterface.php');
require_once(APPPATH.'libraries/v1.1.5/Model/MultipleLang.php');
require_once(APPPATH.'libraries/v1.1.5/Model/News.php');
require_once(APPPATH.'libraries/v1.1.5/Model/NewsResponse.php');
require_once(APPPATH.'libraries/v1.1.5/Model/NewsSearch.php');
require_once(APPPATH.'libraries/v1.1.5/Model/NewsSearchResponse.php');
require_once(APPPATH.'libraries/v1.1.5/Model/NotAuthorized.php');
require_once(APPPATH.'libraries/v1.1.5/Model/Page.php');
require_once(APPPATH.'libraries/v1.1.5/Model/PageRequest.php');
require_once(APPPATH.'libraries/v1.1.5/Model/PageResponse.php');
require_once(APPPATH.'libraries/v1.1.5/Model/Product.php');
require_once(APPPATH.'libraries/v1.1.5/Model/ProductRequest.php');
require_once(APPPATH.'libraries/v1.1.5/Model/ProductResponse.php');
require_once(APPPATH.'libraries/v1.1.5/Model/ReportChoice.php');
require_once(APPPATH.'libraries/v1.1.5/Model/ReportChoiceResponse.php');
require_once(APPPATH.'libraries/v1.1.5/Model/Review.php');
require_once(APPPATH.'libraries/v1.1.5/Model/Room.php');
require_once(APPPATH.'libraries/v1.1.5/Model/RoomRequest.php');
require_once(APPPATH.'libraries/v1.1.5/Model/RoomResponse.php');
require_once(APPPATH.'libraries/v1.1.5/Model/Schedule.php');
require_once(APPPATH.'libraries/v1.1.5/Model/SuccessResponse.php');
require_once(APPPATH.'libraries/v1.1.5/Model/SystemError.php');
require_once(APPPATH.'libraries/v1.1.5/Model/UploadResponse.php');
require_once(APPPATH.'libraries/v1.1.5/Model/User.php');
require_once(APPPATH.'libraries/v1.1.5/Model/UserFavorite.php');
require_once(APPPATH.'libraries/v1.1.5/Model/UserFavoriteResponse.php');
require_once(APPPATH.'libraries/v1.1.5/Model/UserResponse.php');

class AppApi extends CI_Model {
	protected $_platform;
	protected $_lang;
	protected $_config;
	protected $_apiInstance;

	public function __construct() {
		parent::__construct();

		$this->_platform = 'website';
		$this->_lang = 'th';
		$this->_config = Swagger\Client\Configuration::getDefaultConfiguration()
          ->setUsername('5162aac68af75dad517207c966acfe08d7d7b2cb0d2c77176229a9c6487648c9')
          ->setPassword('63e99f11e8b5a72a5f0c892e8a4d9d140ddf2c8d47db375179136126fde23706');

	}	
}
