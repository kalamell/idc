<?php
/**
 * ReportReviewApi
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

namespace Swagger\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Swagger\Client\ApiException;
use Swagger\Client\Configuration;
use Swagger\Client\HeaderSelector;
use Swagger\Client\ObjectSerializer;

/**
 * ReportReviewApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ReportReviewApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getReportChoices
     *
     * Get report choices
     *
     * @param  string $platform platform (required)
     * @param  string $x_access_token access token after user login (required)
     * @param  string $x_user username or email for check log (required)
     * @param  string $lang lang is th or en (optional, default to th)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\ReportChoiceResponse
     */
    public function getReportChoices($platform, $x_access_token, $x_user, $lang = 'th')
    {
        list($response) = $this->getReportChoicesWithHttpInfo($platform, $x_access_token, $x_user, $lang);
        return $response;
    }

    /**
     * Operation getReportChoicesWithHttpInfo
     *
     * Get report choices
     *
     * @param  string $platform platform (required)
     * @param  string $x_access_token access token after user login (required)
     * @param  string $x_user username or email for check log (required)
     * @param  string $lang lang is th or en (optional, default to th)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\ReportChoiceResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getReportChoicesWithHttpInfo($platform, $x_access_token, $x_user, $lang = 'th')
    {
        $returnType = '\Swagger\Client\Model\ReportChoiceResponse';
        $request = $this->getReportChoicesRequest($platform, $x_access_token, $x_user, $lang);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\ReportChoiceResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\SystemError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getReportChoicesAsync
     *
     * Get report choices
     *
     * @param  string $platform platform (required)
     * @param  string $x_access_token access token after user login (required)
     * @param  string $x_user username or email for check log (required)
     * @param  string $lang lang is th or en (optional, default to th)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getReportChoicesAsync($platform, $x_access_token, $x_user, $lang = 'th')
    {
        return $this->getReportChoicesAsyncWithHttpInfo($platform, $x_access_token, $x_user, $lang)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getReportChoicesAsyncWithHttpInfo
     *
     * Get report choices
     *
     * @param  string $platform platform (required)
     * @param  string $x_access_token access token after user login (required)
     * @param  string $x_user username or email for check log (required)
     * @param  string $lang lang is th or en (optional, default to th)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getReportChoicesAsyncWithHttpInfo($platform, $x_access_token, $x_user, $lang = 'th')
    {
        $returnType = '\Swagger\Client\Model\ReportChoiceResponse';
        $request = $this->getReportChoicesRequest($platform, $x_access_token, $x_user, $lang);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getReportChoices'
     *
     * @param  string $platform platform (required)
     * @param  string $x_access_token access token after user login (required)
     * @param  string $x_user username or email for check log (required)
     * @param  string $lang lang is th or en (optional, default to th)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getReportChoicesRequest($platform, $x_access_token, $x_user, $lang = 'th')
    {
        // verify the required parameter 'platform' is set
        if ($platform === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $platform when calling getReportChoices'
            );
        }
        // verify the required parameter 'x_access_token' is set
        if ($x_access_token === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $x_access_token when calling getReportChoices'
            );
        }
        // verify the required parameter 'x_user' is set
        if ($x_user === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $x_user when calling getReportChoices'
            );
        }

        $resourcePath = '/report_review/choices';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // header params
        if ($platform !== null) {
            $headerParams['platform'] = ObjectSerializer::toHeaderValue($platform);
        }
        // header params
        if ($x_access_token !== null) {
            $headerParams['x-access-token'] = ObjectSerializer::toHeaderValue($x_access_token);
        }
        // header params
        if ($x_user !== null) {
            $headerParams['x-user'] = ObjectSerializer::toHeaderValue($x_user);
        }
        // header params
        if ($lang !== null) {
            $headerParams['lang'] = ObjectSerializer::toHeaderValue($lang);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires HTTP basic authentication
        if ($this->config->getUsername() !== null || $this->config->getPassword() !== null) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation reportReview
     *
     * Report review
     *
     * @param  string $platform platform (required)
     * @param  string $x_access_token access token after user login (required)
     * @param  string $x_user username or email for check log (required)
     * @param  string $choice_id choiceId is id of choice object (required)
     * @param  string $review_id reviewId is id of book review (required)
     * @param  string $lang lang is th or en (optional, default to th)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\SuccessResponse
     */
    public function reportReview($platform, $x_access_token, $x_user, $choice_id, $review_id, $lang = 'th')
    {
        list($response) = $this->reportReviewWithHttpInfo($platform, $x_access_token, $x_user, $choice_id, $review_id, $lang);
        return $response;
    }

    /**
     * Operation reportReviewWithHttpInfo
     *
     * Report review
     *
     * @param  string $platform platform (required)
     * @param  string $x_access_token access token after user login (required)
     * @param  string $x_user username or email for check log (required)
     * @param  string $choice_id choiceId is id of choice object (required)
     * @param  string $review_id reviewId is id of book review (required)
     * @param  string $lang lang is th or en (optional, default to th)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\SuccessResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function reportReviewWithHttpInfo($platform, $x_access_token, $x_user, $choice_id, $review_id, $lang = 'th')
    {
        $returnType = '\Swagger\Client\Model\SuccessResponse';
        $request = $this->reportReviewRequest($platform, $x_access_token, $x_user, $choice_id, $review_id, $lang);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\SuccessResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\BadRequest',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\NotAuthorized',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\SystemError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation reportReviewAsync
     *
     * Report review
     *
     * @param  string $platform platform (required)
     * @param  string $x_access_token access token after user login (required)
     * @param  string $x_user username or email for check log (required)
     * @param  string $choice_id choiceId is id of choice object (required)
     * @param  string $review_id reviewId is id of book review (required)
     * @param  string $lang lang is th or en (optional, default to th)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function reportReviewAsync($platform, $x_access_token, $x_user, $choice_id, $review_id, $lang = 'th')
    {
        return $this->reportReviewAsyncWithHttpInfo($platform, $x_access_token, $x_user, $choice_id, $review_id, $lang)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation reportReviewAsyncWithHttpInfo
     *
     * Report review
     *
     * @param  string $platform platform (required)
     * @param  string $x_access_token access token after user login (required)
     * @param  string $x_user username or email for check log (required)
     * @param  string $choice_id choiceId is id of choice object (required)
     * @param  string $review_id reviewId is id of book review (required)
     * @param  string $lang lang is th or en (optional, default to th)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function reportReviewAsyncWithHttpInfo($platform, $x_access_token, $x_user, $choice_id, $review_id, $lang = 'th')
    {
        $returnType = '\Swagger\Client\Model\SuccessResponse';
        $request = $this->reportReviewRequest($platform, $x_access_token, $x_user, $choice_id, $review_id, $lang);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'reportReview'
     *
     * @param  string $platform platform (required)
     * @param  string $x_access_token access token after user login (required)
     * @param  string $x_user username or email for check log (required)
     * @param  string $choice_id choiceId is id of choice object (required)
     * @param  string $review_id reviewId is id of book review (required)
     * @param  string $lang lang is th or en (optional, default to th)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function reportReviewRequest($platform, $x_access_token, $x_user, $choice_id, $review_id, $lang = 'th')
    {
        // verify the required parameter 'platform' is set
        if ($platform === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $platform when calling reportReview'
            );
        }
        // verify the required parameter 'x_access_token' is set
        if ($x_access_token === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $x_access_token when calling reportReview'
            );
        }
        // verify the required parameter 'x_user' is set
        if ($x_user === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $x_user when calling reportReview'
            );
        }
        // verify the required parameter 'choice_id' is set
        if ($choice_id === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $choice_id when calling reportReview'
            );
        }
        // verify the required parameter 'review_id' is set
        if ($review_id === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $review_id when calling reportReview'
            );
        }

        $resourcePath = '/report_review/';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // header params
        if ($platform !== null) {
            $headerParams['platform'] = ObjectSerializer::toHeaderValue($platform);
        }
        // header params
        if ($x_access_token !== null) {
            $headerParams['x-access-token'] = ObjectSerializer::toHeaderValue($x_access_token);
        }
        // header params
        if ($x_user !== null) {
            $headerParams['x-user'] = ObjectSerializer::toHeaderValue($x_user);
        }
        // header params
        if ($lang !== null) {
            $headerParams['lang'] = ObjectSerializer::toHeaderValue($lang);
        }


        // form params
        if ($choice_id !== null) {
            $formParams['choiceId'] = ObjectSerializer::toFormValue($choice_id);
        }
        // form params
        if ($review_id !== null) {
            $formParams['reviewId'] = ObjectSerializer::toFormValue($review_id);
        }
        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/x-www-form-urlencoded']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires HTTP basic authentication
        if ($this->config->getUsername() !== null || $this->config->getPassword() !== null) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
