<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Api\AplusContentApi;

use AmazonPHP\SellingPartner\AccessToken;
use AmazonPHP\SellingPartner\Exception\ApiException;
use AmazonPHP\SellingPartner\Exception\InvalidArgumentException;

/**
 * Selling Partner API for A+ Content Management.
 *
 * With the A+ Content API, you can build applications that help selling partners add rich marketing content to their Amazon product detail pages. A+ content helps selling partners share their brand and product story, which helps buyers make informed purchasing decisions. Selling partners assemble content by choosing from content modules and adding images and text.
 *
 * The version of the OpenAPI document: 2020-11-01
 *
 * This class was auto-generated by https://openapi-generator.tech
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 */
interface APlusSDKInterface
{
    public const API_NAME = 'APlus';

    public const OPERATION_CREATECONTENTDOCUMENT = 'createContentDocument';

    public const OPERATION_CREATECONTENTDOCUMENT_PATH = '/aplus/2020-11-01/contentDocuments';

    public const OPERATION_GETCONTENTDOCUMENT = 'getContentDocument';

    public const OPERATION_GETCONTENTDOCUMENT_PATH = '/aplus/2020-11-01/contentDocuments/{contentReferenceKey}';

    public const OPERATION_LISTCONTENTDOCUMENTASINRELATIONS = 'listContentDocumentAsinRelations';

    public const OPERATION_LISTCONTENTDOCUMENTASINRELATIONS_PATH = '/aplus/2020-11-01/contentDocuments/{contentReferenceKey}/asins';

    public const OPERATION_POSTCONTENTDOCUMENTAPPROVALSUBMISSION = 'postContentDocumentApprovalSubmission';

    public const OPERATION_POSTCONTENTDOCUMENTAPPROVALSUBMISSION_PATH = '/aplus/2020-11-01/contentDocuments/{contentReferenceKey}/approvalSubmissions';

    public const OPERATION_POSTCONTENTDOCUMENTASINRELATIONS = 'postContentDocumentAsinRelations';

    public const OPERATION_POSTCONTENTDOCUMENTASINRELATIONS_PATH = '/aplus/2020-11-01/contentDocuments/{contentReferenceKey}/asins';

    public const OPERATION_POSTCONTENTDOCUMENTSUSPENDSUBMISSION = 'postContentDocumentSuspendSubmission';

    public const OPERATION_POSTCONTENTDOCUMENTSUSPENDSUBMISSION_PATH = '/aplus/2020-11-01/contentDocuments/{contentReferenceKey}/suspendSubmissions';

    public const OPERATION_SEARCHCONTENTDOCUMENTS = 'searchContentDocuments';

    public const OPERATION_SEARCHCONTENTDOCUMENTS_PATH = '/aplus/2020-11-01/contentDocuments';

    public const OPERATION_SEARCHCONTENTPUBLISHRECORDS = 'searchContentPublishRecords';

    public const OPERATION_SEARCHCONTENTPUBLISHRECORDS_PATH = '/aplus/2020-11-01/contentPublishRecords';

    public const OPERATION_UPDATECONTENTDOCUMENT = 'updateContentDocument';

    public const OPERATION_UPDATECONTENTDOCUMENT_PATH = '/aplus/2020-11-01/contentDocuments/{contentReferenceKey}';

    public const OPERATION_VALIDATECONTENTDOCUMENTASINRELATIONS = 'validateContentDocumentAsinRelations';

    public const OPERATION_VALIDATECONTENTDOCUMENTASINRELATIONS_PATH = '/aplus/2020-11-01/contentAsinValidations';

    /**
     * Operation createContentDocument.
     *
     * @param string $marketplace_id The identifier for the marketplace where the A+ Content is published. (required)
     * @param \AmazonPHP\SellingPartner\Model\APlus\PostContentDocumentRequest $post_content_document_request The content document request details. (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     */
    public function createContentDocument(AccessToken $accessToken, string $region, string $marketplace_id, \AmazonPHP\SellingPartner\Model\APlus\PostContentDocumentRequest $post_content_document_request) : \AmazonPHP\SellingPartner\Model\APlus\PostContentDocumentResponse;

    /**
     * Operation getContentDocument.
     *
     * @param string $content_reference_key The unique reference key for the A+ Content document. A content reference key cannot form a permalink and may change in the future. A content reference key is not guaranteed to match any A+ Content identifier. (required)
     * @param string $marketplace_id The identifier for the marketplace where the A+ Content is published. (required)
     * @param string[] $included_data_set The set of A+ Content data types to include in the response. (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     */
    public function getContentDocument(AccessToken $accessToken, string $region, string $content_reference_key, string $marketplace_id, array $included_data_set) : \AmazonPHP\SellingPartner\Model\APlus\GetContentDocumentResponse;

    /**
     * Operation listContentDocumentAsinRelations.
     *
     * @param string $content_reference_key The unique reference key for the A+ Content document. A content reference key cannot form a permalink and may change in the future. A content reference key is not guaranteed to match any A+ Content identifier. (required)
     * @param string $marketplace_id The identifier for the marketplace where the A+ Content is published. (required)
     * @param null|string[] $included_data_set The set of A+ Content data types to include in the response. If you do not include this parameter, the operation returns the related ASINs without metadata. (optional)
     * @param null|string[] $asin_set The set of ASINs. (optional)
     * @param null|string $page_token A page token from the nextPageToken response element returned by your previous call to this operation. nextPageToken is returned when the results of a call exceed the page size. To get the next page of results, call the operation and include pageToken as the only parameter. Specifying pageToken with any other parameter will cause the request to fail. When no nextPageToken value is returned there are no more pages to return. A pageToken value is not usable across different operations. (optional)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     */
    public function listContentDocumentAsinRelations(AccessToken $accessToken, string $region, string $content_reference_key, string $marketplace_id, ?array $included_data_set = null, ?array $asin_set = null, ?string $page_token = null) : \AmazonPHP\SellingPartner\Model\APlus\ListContentDocumentAsinRelationsResponse;

    /**
     * Operation postContentDocumentApprovalSubmission.
     *
     * @param string $content_reference_key The unique reference key for the A+ Content document. A content reference key cannot form a permalink and may change in the future. A content reference key is not guaranteed to match any A+ content identifier. (required)
     * @param string $marketplace_id The identifier for the marketplace where the A+ Content is published. (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     */
    public function postContentDocumentApprovalSubmission(AccessToken $accessToken, string $region, string $content_reference_key, string $marketplace_id) : \AmazonPHP\SellingPartner\Model\APlus\PostContentDocumentApprovalSubmissionResponse;

    /**
     * Operation postContentDocumentAsinRelations.
     *
     * @param string $content_reference_key The unique reference key for the A+ Content document. A content reference key cannot form a permalink and may change in the future. A content reference key is not guaranteed to match any A+ content identifier. (required)
     * @param string $marketplace_id The identifier for the marketplace where the A+ Content is published. (required)
     * @param \AmazonPHP\SellingPartner\Model\APlus\PostContentDocumentAsinRelationsRequest $post_content_document_asin_relations_request The content document ASIN relations request details. (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     */
    public function postContentDocumentAsinRelations(AccessToken $accessToken, string $region, string $content_reference_key, string $marketplace_id, \AmazonPHP\SellingPartner\Model\APlus\PostContentDocumentAsinRelationsRequest $post_content_document_asin_relations_request) : \AmazonPHP\SellingPartner\Model\APlus\PostContentDocumentAsinRelationsResponse;

    /**
     * Operation postContentDocumentSuspendSubmission.
     *
     * @param string $content_reference_key The unique reference key for the A+ Content document. A content reference key cannot form a permalink and may change in the future. A content reference key is not guaranteed to match any A+ content identifier. (required)
     * @param string $marketplace_id The identifier for the marketplace where the A+ Content is published. (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     */
    public function postContentDocumentSuspendSubmission(AccessToken $accessToken, string $region, string $content_reference_key, string $marketplace_id) : \AmazonPHP\SellingPartner\Model\APlus\PostContentDocumentSuspendSubmissionResponse;

    /**
     * Operation searchContentDocuments.
     *
     * @param string $marketplace_id The identifier for the marketplace where the A+ Content is published. (required)
     * @param null|string $page_token A page token from the nextPageToken response element returned by your previous call to this operation. nextPageToken is returned when the results of a call exceed the page size. To get the next page of results, call the operation and include pageToken as the only parameter. Specifying pageToken with any other parameter will cause the request to fail. When no nextPageToken value is returned there are no more pages to return. A pageToken value is not usable across different operations. (optional)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     */
    public function searchContentDocuments(AccessToken $accessToken, string $region, string $marketplace_id, ?string $page_token = null) : \AmazonPHP\SellingPartner\Model\APlus\SearchContentDocumentsResponse;

    /**
     * Operation searchContentPublishRecords.
     *
     * @param string $marketplace_id The identifier for the marketplace where the A+ Content is published. (required)
     * @param string $asin The Amazon Standard Identification Number (ASIN). (required)
     * @param null|string $page_token A page token from the nextPageToken response element returned by your previous call to this operation. nextPageToken is returned when the results of a call exceed the page size. To get the next page of results, call the operation and include pageToken as the only parameter. Specifying pageToken with any other parameter will cause the request to fail. When no nextPageToken value is returned there are no more pages to return. A pageToken value is not usable across different operations. (optional)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     */
    public function searchContentPublishRecords(AccessToken $accessToken, string $region, string $marketplace_id, string $asin, ?string $page_token = null) : \AmazonPHP\SellingPartner\Model\APlus\SearchContentPublishRecordsResponse;

    /**
     * Operation updateContentDocument.
     *
     * @param string $content_reference_key The unique reference key for the A+ Content document. A content reference key cannot form a permalink and may change in the future. A content reference key is not guaranteed to match any A+ Content identifier. (required)
     * @param string $marketplace_id The identifier for the marketplace where the A+ Content is published. (required)
     * @param \AmazonPHP\SellingPartner\Model\APlus\PostContentDocumentRequest $post_content_document_request The content document request details. (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     */
    public function updateContentDocument(AccessToken $accessToken, string $region, string $content_reference_key, string $marketplace_id, \AmazonPHP\SellingPartner\Model\APlus\PostContentDocumentRequest $post_content_document_request) : \AmazonPHP\SellingPartner\Model\APlus\PostContentDocumentResponse;

    /**
     * Operation validateContentDocumentAsinRelations.
     *
     * @param string $marketplace_id The identifier for the marketplace where the A+ Content is published. (required)
     * @param \AmazonPHP\SellingPartner\Model\APlus\PostContentDocumentRequest $post_content_document_request The content document request details. (required)
     * @param null|string[] $asin_set The set of ASINs. (optional)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     */
    public function validateContentDocumentAsinRelations(AccessToken $accessToken, string $region, string $marketplace_id, \AmazonPHP\SellingPartner\Model\APlus\PostContentDocumentRequest $post_content_document_request, ?array $asin_set = null) : \AmazonPHP\SellingPartner\Model\APlus\ValidateContentDocumentAsinRelationsResponse;
}
