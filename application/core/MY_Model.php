<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once(APPPATH.'libraries/v1.1.6/Configuration.php');
require_once(APPPATH.'libraries/v1.1.6/HeaderSelector.php');
require_once(APPPATH.'libraries/v1.1.6/ApiException.php');
require_once(APPPATH.'libraries/v1.1.6/ObjectSerializer.php');

require_once(APPPATH.'libraries/v1.1.6/Api/AdvisorApi.php');
require_once(APPPATH.'libraries/v1.1.6/Api/ArticleApi.php');
require_once(APPPATH.'libraries/v1.1.6/Api/BookApi.php');	
require_once(APPPATH.'libraries/v1.1.6/Api/ChatApi.php');	
require_once(APPPATH.'libraries/v1.1.6/Api/ConsultApi.php');	
require_once(APPPATH.'libraries/v1.1.6/Api/DesignerApi.php');	
require_once(APPPATH.'libraries/v1.1.6/Api/IdeaApi.php');	
require_once(APPPATH.'libraries/v1.1.6/Api/KnowledgeApi.php');	
require_once(APPPATH.'libraries/v1.1.6/Api/NewsApi.php');	
require_once(APPPATH.'libraries/v1.1.6/Api/PageApi.php');	
require_once(APPPATH.'libraries/v1.1.6/Api/PortfolioApi.php');	
require_once(APPPATH.'libraries/v1.1.6/Api/ProducerApi.php');	
require_once(APPPATH.'libraries/v1.1.6/Api/ReportReviewApi.php');	
require_once(APPPATH.'libraries/v1.1.6/Api/SupplierApi.php');	
require_once(APPPATH.'libraries/v1.1.6/Api/UploadApi.php');	
require_once(APPPATH.'libraries/v1.1.6/Api/UserApi.php');	

require_once(APPPATH.'libraries/v1.1.6/Model/ModelInterface.php');
require_once(APPPATH.'libraries/v1.1.6/Model/BadRequest.php');
require_once(APPPATH.'libraries/v1.1.6/Model/Advisor.php');
require_once(APPPATH.'libraries/v1.1.6/Model/AdvisorResponse.php');
require_once(APPPATH.'libraries/v1.1.6/Model/AdvisorSearch.php');
require_once(APPPATH.'libraries/v1.1.6/Model/AdvisorSearchResponse.php');
require_once(APPPATH.'libraries/v1.1.6/Model/Article.php');
require_once(APPPATH.'libraries/v1.1.6/Model/ArticleResponse.php');
require_once(APPPATH.'libraries/v1.1.6/Model/BadgeResponse.php');
require_once(APPPATH.'libraries/v1.1.6/Model/BadRequest.php');
require_once(APPPATH.'libraries/v1.1.6/Model/Body.php');
require_once(APPPATH.'libraries/v1.1.6/Model/Body1.php');
require_once(APPPATH.'libraries/v1.1.6/Model/Body2.php');
require_once(APPPATH.'libraries/v1.1.6/Model/Body3.php');
require_once(APPPATH.'libraries/v1.1.6/Model/Body4.php');
require_once(APPPATH.'libraries/v1.1.6/Model/Body5.php');
require_once(APPPATH.'libraries/v1.1.6/Model/Body6.php');
require_once(APPPATH.'libraries/v1.1.6/Model/Body7.php');
require_once(APPPATH.'libraries/v1.1.6/Model/Body8.php');
require_once(APPPATH.'libraries/v1.1.6/Model/Book.php');
require_once(APPPATH.'libraries/v1.1.6/Model/BookDeleteRequest.php');
require_once(APPPATH.'libraries/v1.1.6/Model/BookResponse.php');
require_once(APPPATH.'libraries/v1.1.6/Model/BookSearch.php');
require_once(APPPATH.'libraries/v1.1.6/Model/BookSearchResponse.php');
require_once(APPPATH.'libraries/v1.1.6/Model/Category.php');
require_once(APPPATH.'libraries/v1.1.6/Model/CategoryResponse.php');
require_once(APPPATH.'libraries/v1.1.6/Model/Designer.php');
require_once(APPPATH.'libraries/v1.1.6/Model/DesignerCategory.php');
require_once(APPPATH.'libraries/v1.1.6/Model/DesignerCategoryResponse.php');
require_once(APPPATH.'libraries/v1.1.6/Model/DesignerRequest.php');
require_once(APPPATH.'libraries/v1.1.6/Model/DesignerResponse.php');
require_once(APPPATH.'libraries/v1.1.6/Model/Idea.php');
require_once(APPPATH.'libraries/v1.1.6/Model/IdeaResponse.php');
require_once(APPPATH.'libraries/v1.1.6/Model/Knowledge.php');
require_once(APPPATH.'libraries/v1.1.6/Model/KnowledgeResponse.php');
require_once(APPPATH.'libraries/v1.1.6/Model/KnowledgeSearch.php');
require_once(APPPATH.'libraries/v1.1.6/Model/KnowledgeSearchResponse.php');	
require_once(APPPATH.'libraries/v1.1.6/Model/Media.php');
require_once(APPPATH.'libraries/v1.1.6/Model/Message.php');
require_once(APPPATH.'libraries/v1.1.6/Model/MessageResponse.php');
require_once(APPPATH.'libraries/v1.1.6/Model/ModelInterface.php');
require_once(APPPATH.'libraries/v1.1.6/Model/MultipleLang.php');
require_once(APPPATH.'libraries/v1.1.6/Model/News.php');
require_once(APPPATH.'libraries/v1.1.6/Model/NewsResponse.php');
require_once(APPPATH.'libraries/v1.1.6/Model/NewsSearch.php');
require_once(APPPATH.'libraries/v1.1.6/Model/NewsSearchResponse.php');
require_once(APPPATH.'libraries/v1.1.6/Model/NotAuthorized.php');
require_once(APPPATH.'libraries/v1.1.6/Model/Page.php');
require_once(APPPATH.'libraries/v1.1.6/Model/PageRequest.php');
require_once(APPPATH.'libraries/v1.1.6/Model/PageResponse.php');
require_once(APPPATH.'libraries/v1.1.6/Model/Portfolio.php');
require_once(APPPATH.'libraries/v1.1.6/Model/PortfolioResponse.php');
require_once(APPPATH.'libraries/v1.1.6/Model/Product.php');
require_once(APPPATH.'libraries/v1.1.6/Model/ProductRequest.php');
require_once(APPPATH.'libraries/v1.1.6/Model/ProductResponse.php');
require_once(APPPATH.'libraries/v1.1.6/Model/ReportChoice.php');
require_once(APPPATH.'libraries/v1.1.6/Model/ReportChoiceResponse.php');
require_once(APPPATH.'libraries/v1.1.6/Model/Review.php');
require_once(APPPATH.'libraries/v1.1.6/Model/Room.php');
require_once(APPPATH.'libraries/v1.1.6/Model/RoomRequest.php');
require_once(APPPATH.'libraries/v1.1.6/Model/RoomResponse.php');
require_once(APPPATH.'libraries/v1.1.6/Model/Schedule.php');
require_once(APPPATH.'libraries/v1.1.6/Model/SuccessResponse.php');
require_once(APPPATH.'libraries/v1.1.6/Model/SystemError.php');
require_once(APPPATH.'libraries/v1.1.6/Model/UploadResponse.php');
require_once(APPPATH.'libraries/v1.1.6/Model/User.php');
require_once(APPPATH.'libraries/v1.1.6/Model/UserFavorite.php');
require_once(APPPATH.'libraries/v1.1.6/Model/UserFavoriteResponse.php');
require_once(APPPATH.'libraries/v1.1.6/Model/UserResponse.php');

class MY_Model extends CI_Model {
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
