# OpenAPIClient-php

The Arta Public API provides quote generation, transport booking, and tracking capabilities. Additionally the API enables Arta partner organizations to configure email and webhook notifications for their accounts.

For more information, please visit [https://manual.arta.io/](https://manual.arta.io/).

## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure API key authorization: apiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ApiKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = ARTA_APIKey s0e1t2e3c4a5s6t7r8o9n10o11m12y; // string | Authorize your API calls with an Arta API token
$api_keys_create_request = new \OpenAPI\Client\Model\ApiKeysCreateRequest(); // \OpenAPI\Client\Model\ApiKeysCreateRequest

try {
    $result = $apiInstance->apiKeysCreate($authorization, $api_keys_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiKeysApi->apiKeysCreate: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.arta.io*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ApiKeysApi* | [**apiKeysCreate**](docs/Api/ApiKeysApi.md#apikeyscreate) | **POST** /api_keys | Create an API Key
*ApiKeysApi* | [**apiKeysDelete**](docs/Api/ApiKeysApi.md#apikeysdelete) | **DELETE** /api_keys/{api_key_id} | Delete an API Key
*ApiKeysApi* | [**apiKeysGet**](docs/Api/ApiKeysApi.md#apikeysget) | **GET** /api_keys/{api_key_id} | Get an API Key
*ApiKeysApi* | [**apiKeysList**](docs/Api/ApiKeysApi.md#apikeyslist) | **GET** /api_keys | List API Keys
*AttachmentsApi* | [**attachmentsCreate**](docs/Api/AttachmentsApi.md#attachmentscreate) | **POST** /attachments | Create an Attachment
*AttachmentsApi* | [**attachmentsDelete**](docs/Api/AttachmentsApi.md#attachmentsdelete) | **DELETE** /attachments/{attachment_id} | Delete an Attachment
*AttachmentsApi* | [**attachmentsGet**](docs/Api/AttachmentsApi.md#attachmentsget) | **GET** /attachments/{attachment_id} | Get an Attachment
*AttachmentsApi* | [**attachmentsList**](docs/Api/AttachmentsApi.md#attachmentslist) | **GET** /attachments | List Attachments
*EmailRulesApi* | [**emailRulesCreate**](docs/Api/EmailRulesApi.md#emailrulescreate) | **POST** /email_rules | Create an Email Rule
*EmailRulesApi* | [**emailRulesDelete**](docs/Api/EmailRulesApi.md#emailrulesdelete) | **DELETE** /email_rules/{email_rule_id} | Delete an Email Rule
*EmailRulesApi* | [**emailRulesGet**](docs/Api/EmailRulesApi.md#emailrulesget) | **GET** /email_rules/{email_rule_id} | Get an Email Rule
*EmailRulesApi* | [**emailRulesList**](docs/Api/EmailRulesApi.md#emailruleslist) | **GET** /email_rules | List Email Rules
*EmailRulesApi* | [**emailRulesUpdate**](docs/Api/EmailRulesApi.md#emailrulesupdate) | **PATCH** /email_rules/{email_rule_id} | Update an Email Rule
*EmailSubscriptionsApi* | [**emailSubscriptionsCreate**](docs/Api/EmailSubscriptionsApi.md#emailsubscriptionscreate) | **POST** /email_subscriptions | Create an Email Subscription
*EmailSubscriptionsApi* | [**emailSubscriptionsDelete**](docs/Api/EmailSubscriptionsApi.md#emailsubscriptionsdelete) | **DELETE** /email_subscriptions/{email_subscription_id} | Delete an Email Subscription
*EmailSubscriptionsApi* | [**emailSubscriptionsGet**](docs/Api/EmailSubscriptionsApi.md#emailsubscriptionsget) | **GET** /email_subscriptions/{email_subscription_id} | Get an Email Subscription
*EmailSubscriptionsApi* | [**emailSubscriptionsList**](docs/Api/EmailSubscriptionsApi.md#emailsubscriptionslist) | **GET** /email_subscriptions | List Email Subscriptions
*EmailSubscriptionsApi* | [**emailSubscriptionsUpdate**](docs/Api/EmailSubscriptionsApi.md#emailsubscriptionsupdate) | **PATCH** /email_subscriptions/{email_subscription_id} | Update an Email Subscription
*HostedSessionsApi* | [**hostedSessionsCancel**](docs/Api/HostedSessionsApi.md#hostedsessionscancel) | **PATCH** /hosted_sessions/{hosted_session_id}/cancel | Cancel a Hosted Session
*HostedSessionsApi* | [**hostedSessionsCreate**](docs/Api/HostedSessionsApi.md#hostedsessionscreate) | **POST** /hosted_sessions | Create a Hosted Session
*HostedSessionsApi* | [**hostedSessionsGet**](docs/Api/HostedSessionsApi.md#hostedsessionsget) | **GET** /hosted_sessions/{hosted_session_id} | Get a Hosted Session
*HostedSessionsApi* | [**hostedSessionsList**](docs/Api/HostedSessionsApi.md#hostedsessionslist) | **GET** /hosted_sessions | List Hosted Sessions
*InvoicePaymentsApi* | [**invoicePaymentsGet**](docs/Api/InvoicePaymentsApi.md#invoicepaymentsget) | **GET** /invoice_payments/{invoice_payment_id} | Get an Invoice Payment record
*InvoicePaymentsApi* | [**invoicePaymentsList**](docs/Api/InvoicePaymentsApi.md#invoicepaymentslist) | **GET** /invoice_payments | List invoice payment records
*InvoicesApi* | [**invoicesGet**](docs/Api/InvoicesApi.md#invoicesget) | **GET** /invoices/{invoice_id} | Get an Invoice record
*InvoicesApi* | [**invoicesList**](docs/Api/InvoicesApi.md#invoiceslist) | **GET** /invoices | List invoice records
*LogsApi* | [**logsGet**](docs/Api/LogsApi.md#logsget) | **GET** /logs/{log_id} | Get a Log record
*LogsApi* | [**logsList**](docs/Api/LogsApi.md#logslist) | **GET** /logs | List Log records
*MetadataApi* | [**metadalocationAccessRestrictions**](docs/Api/MetadataApi.md#metadalocationaccessrestrictions) | **GET** /metadata/location_access_restrictions | Location Access Restrictions
*MetadataApi* | [**metadataApiVersions**](docs/Api/MetadataApi.md#metadataapiversions) | **GET** /metadata/api_versions | API Versions
*MetadataApi* | [**metadataCurrencies**](docs/Api/MetadataApi.md#metadatacurrencies) | **GET** /metadata/currencies | Currencies
*MetadataApi* | [**metadataEmailNotifications**](docs/Api/MetadataApi.md#metadataemailnotifications) | **GET** /metadata/email_notifications | Email Notifications
*MetadataApi* | [**metadataInsurances**](docs/Api/MetadataApi.md#metadatainsurances) | **GET** /metadata/insurances | Insurance
*MetadataApi* | [**metadataObjectMaterials**](docs/Api/MetadataApi.md#metadataobjectmaterials) | **GET** /metadata/object_materials | Object Materials
*MetadataApi* | [**metadataObjects**](docs/Api/MetadataApi.md#metadataobjects) | **GET** /metadata/objects | Object Types
*MetadataApi* | [**metadataPackageStatuses**](docs/Api/MetadataApi.md#metadatapackagestatuses) | **GET** /metadata/package_statuses | Package Statuses
*MetadataApi* | [**metadataPackings**](docs/Api/MetadataApi.md#metadatapackings) | **GET** /metadata/packings | Packing Types
*MetadataApi* | [**metadataParcelTransportServices**](docs/Api/MetadataApi.md#metadataparceltransportservices) | **GET** /metadata/parcel_transport_services | Parcel Transport Services
*MetadataApi* | [**metadataPaymentProcessTypes**](docs/Api/MetadataApi.md#metadatapaymentprocesstypes) | **GET** /metadata/payment_process_types | Payment Process types
*MetadataApi* | [**metadataQuotes**](docs/Api/MetadataApi.md#metadataquotes) | **GET** /metadata/quotes | Quote Types
*MetadataApi* | [**metadataRequestStatuses**](docs/Api/MetadataApi.md#metadatarequeststatuses) | **GET** /metadata/request_statuses | Quote Request Statuses
*MetadataApi* | [**metadataServices**](docs/Api/MetadataApi.md#metadataservices) | **GET** /metadata/services | Services
*MetadataApi* | [**metadataShipmentExceptionTypes**](docs/Api/MetadataApi.md#metadatashipmentexceptiontypes) | **GET** /metadata/shipment_exception_types | Shipment Exception Types
*MetadataApi* | [**metadataShipmentStatuses**](docs/Api/MetadataApi.md#metadatashipmentstatuses) | **GET** /metadata/shipment_statuses | Shipment Statuses
*OrganizationApi* | [**organizationGet**](docs/Api/OrganizationApi.md#organizationget) | **GET** /organization | Get an Organization
*OrganizationApi* | [**organizationPatch**](docs/Api/OrganizationApi.md#organizationpatch) | **PATCH** /organization | Update an Organization
*PaymentsApi* | [**paymentsGet**](docs/Api/PaymentsApi.md#paymentsget) | **GET** /payments/{payment_id} | Get an Payment record
*PaymentsApi* | [**paymentsList**](docs/Api/PaymentsApi.md#paymentslist) | **GET** /payments | List  payment records
*RequestsApi* | [**requestsCancel**](docs/Api/RequestsApi.md#requestscancel) | **PATCH** /requests/{request_id}/cancel | Cancel a Quote Request
*RequestsApi* | [**requestsCreate**](docs/Api/RequestsApi.md#requestscreate) | **POST** /requests | Create a Quote Request
*RequestsApi* | [**requestsCustom**](docs/Api/RequestsApi.md#requestscustom) | **PATCH** /requests/{request_id}/custom | Request custom quotes
*RequestsApi* | [**requestsGet**](docs/Api/RequestsApi.md#requestsget) | **GET** /requests/{request_id} | Get a Quote Request
*RequestsApi* | [**requestsList**](docs/Api/RequestsApi.md#requestslist) | **GET** /requests | List Request records
*RequestsApi* | [**requestsUpdateContacts**](docs/Api/RequestsApi.md#requestsupdatecontacts) | **PATCH** /requests/{request_id}/contacts | Update the contacts for a Quote Request
*ShipmentExceptionsApi* | [**shipmentExceptionsCreate**](docs/Api/ShipmentExceptionsApi.md#shipmentexceptionscreate) | **POST** /shipment_exceptions | Create Shipment Exception
*ShipmentExceptionsApi* | [**shipmentExceptionsGet**](docs/Api/ShipmentExceptionsApi.md#shipmentexceptionsget) | **GET** /shipment_exceptions/{shipment_exception_id} | Get a Shipment Exception
*ShipmentExceptionsApi* | [**shipmentExceptionsList**](docs/Api/ShipmentExceptionsApi.md#shipmentexceptionslist) | **GET** /shipment_exceptions | List Shipment Exceptions
*ShipmentExceptionsApi* | [**shipmentExceptionsUpdate**](docs/Api/ShipmentExceptionsApi.md#shipmentexceptionsupdate) | **PATCH** /shipment_exceptions/{shipment_exception_id} | Update a Shipment Exception
*ShipmentsApi* | [**shipmentsCreate**](docs/Api/ShipmentsApi.md#shipmentscreate) | **POST** /shipments | Create a Shipment
*ShipmentsApi* | [**shipmentsGet**](docs/Api/ShipmentsApi.md#shipmentsget) | **GET** /shipments/{shipment_id} | Get a Shipment record
*ShipmentsApi* | [**shipmentsList**](docs/Api/ShipmentsApi.md#shipmentslist) | **GET** /shipments | List Shipment records
*TrackingApi* | [**trackingsGet**](docs/Api/TrackingApi.md#trackingsget) | **GET** /trackings/{tracking_number} | Get Tracking Details
*UploadsApi* | [**uploadsCreate**](docs/Api/UploadsApi.md#uploadscreate) | **POST** /uploads | Create an Upload
*UploadsApi* | [**uploadsDelete**](docs/Api/UploadsApi.md#uploadsdelete) | **DELETE** /uploads/{upload_id} | Delete an Upload
*UploadsApi* | [**uploadsGet**](docs/Api/UploadsApi.md#uploadsget) | **GET** /uploads/{upload_id} | Get an Upload
*UploadsApi* | [**uploadsList**](docs/Api/UploadsApi.md#uploadslist) | **GET** /uploads | List Uploads
*WebhookDeliveriesApi* | [**webhookDeliveriesGet**](docs/Api/WebhookDeliveriesApi.md#webhookdeliveriesget) | **GET** /webhook_deliveries/{webhook_delivery_id} | Get a Webhook Delivery
*WebhookDeliveriesApi* | [**webhookDeliveriesList**](docs/Api/WebhookDeliveriesApi.md#webhookdeliverieslist) | **GET** /webhook_deliveries | List Webhook Deliveries
*WebhooksApi* | [**webhooksCreate**](docs/Api/WebhooksApi.md#webhookscreate) | **POST** /webhooks | Create a Webhook
*WebhooksApi* | [**webhooksDelete**](docs/Api/WebhooksApi.md#webhooksdelete) | **DELETE** /webhooks/{webhook_id} | Delete a Webhook
*WebhooksApi* | [**webhooksGet**](docs/Api/WebhooksApi.md#webhooksget) | **GET** /webhooks/{webhook_id} | Get a Webhook
*WebhooksApi* | [**webhooksList**](docs/Api/WebhooksApi.md#webhookslist) | **GET** /webhooks | List Webhooks
*WebhooksApi* | [**webhooksPatch**](docs/Api/WebhooksApi.md#webhookspatch) | **PATCH** /webhooks/{webhook_id} | Update a Webhook
*WebhooksApi* | [**webhooksPost**](docs/Api/WebhooksApi.md#webhookspost) | **POST** /webhooks/{webhook_id}/ping | Ping a Webhook
*WebhooksApi* | [**webhooksSecretTokenGet**](docs/Api/WebhooksApi.md#webhookssecrettokenget) | **GET** /webhooks/{webhook_id}/secret_token | Get a Webhook Secret Token
*WebhooksApi* | [**webhooksSecretTokenResetPatch**](docs/Api/WebhooksApi.md#webhookssecrettokenresetpatch) | **PATCH** /webhooks/{webhook_id}/secret_token/reset | Reset a Webhook Secret Token

## Models

- [ApiKey](docs/Model/ApiKey.md)
- [ApiKeyList](docs/Model/ApiKeyList.md)
- [ApiKeysCreateRequest](docs/Model/ApiKeysCreateRequest.md)
- [ApiKeysCreateRequestApiKey](docs/Model/ApiKeysCreateRequestApiKey.md)
- [Attachment](docs/Model/Attachment.md)
- [AttachmentList](docs/Model/AttachmentList.md)
- [AttachmentsCreateRequest](docs/Model/AttachmentsCreateRequest.md)
- [AttachmentsCreateRequestAttachment](docs/Model/AttachmentsCreateRequestAttachment.md)
- [BasicError](docs/Model/BasicError.md)
- [BasicErrorErrors](docs/Model/BasicErrorErrors.md)
- [EmailRule](docs/Model/EmailRule.md)
- [EmailRuleList](docs/Model/EmailRuleList.md)
- [EmailRulesCreateRequest](docs/Model/EmailRulesCreateRequest.md)
- [EmailRulesCreateRequestEmailRule](docs/Model/EmailRulesCreateRequestEmailRule.md)
- [EmailRulesUpdateRequest](docs/Model/EmailRulesUpdateRequest.md)
- [EmailRulesUpdateRequestEmailRule](docs/Model/EmailRulesUpdateRequestEmailRule.md)
- [EmailSubscription](docs/Model/EmailSubscription.md)
- [EmailSubscriptionList](docs/Model/EmailSubscriptionList.md)
- [EmailSubscriptionsCreateRequest](docs/Model/EmailSubscriptionsCreateRequest.md)
- [EmailSubscriptionsCreateRequestEmailSubscription](docs/Model/EmailSubscriptionsCreateRequestEmailSubscription.md)
- [EmailSubscriptionsUpdateRequest](docs/Model/EmailSubscriptionsUpdateRequest.md)
- [EmailSubscriptionsUpdateRequestEmailSubscription](docs/Model/EmailSubscriptionsUpdateRequestEmailSubscription.md)
- [HostedSession](docs/Model/HostedSession.md)
- [HostedSessionList](docs/Model/HostedSessionList.md)
- [Invoice](docs/Model/Invoice.md)
- [InvoiceList](docs/Model/InvoiceList.md)
- [InvoicePayment](docs/Model/InvoicePayment.md)
- [InvoicePaymentList](docs/Model/InvoicePaymentList.md)
- [Location](docs/Model/Location.md)
- [LocationContactsInner](docs/Model/LocationContactsInner.md)
- [Log](docs/Model/Log.md)
- [LogList](docs/Model/LogList.md)
- [MetadalocationAccessRestrictions200ResponseInner](docs/Model/MetadalocationAccessRestrictions200ResponseInner.md)
- [MetadataApiVersions200ResponseInner](docs/Model/MetadataApiVersions200ResponseInner.md)
- [MetadataCurrencies200ResponseInner](docs/Model/MetadataCurrencies200ResponseInner.md)
- [MetadataEmailNotifications200ResponseInner](docs/Model/MetadataEmailNotifications200ResponseInner.md)
- [MetadataInsurances200ResponseInner](docs/Model/MetadataInsurances200ResponseInner.md)
- [MetadataObjectMaterials200ResponseInner](docs/Model/MetadataObjectMaterials200ResponseInner.md)
- [MetadataObjects200ResponseInner](docs/Model/MetadataObjects200ResponseInner.md)
- [MetadataObjects200ResponseInnerSubtypesInner](docs/Model/MetadataObjects200ResponseInnerSubtypesInner.md)
- [MetadataPackageStatuses200ResponseInner](docs/Model/MetadataPackageStatuses200ResponseInner.md)
- [MetadataPackings200ResponseInner](docs/Model/MetadataPackings200ResponseInner.md)
- [MetadataPackings200ResponseInnerSubtypesInner](docs/Model/MetadataPackings200ResponseInnerSubtypesInner.md)
- [MetadataParcelTransportServices200ResponseInner](docs/Model/MetadataParcelTransportServices200ResponseInner.md)
- [MetadataPaymentProcessTypes200ResponseInner](docs/Model/MetadataPaymentProcessTypes200ResponseInner.md)
- [MetadataQuotes200ResponseInner](docs/Model/MetadataQuotes200ResponseInner.md)
- [MetadataRequestStatuses200ResponseInner](docs/Model/MetadataRequestStatuses200ResponseInner.md)
- [MetadataServices200ResponseInner](docs/Model/MetadataServices200ResponseInner.md)
- [MetadataServices200ResponseInnerSubtypesInner](docs/Model/MetadataServices200ResponseInnerSubtypesInner.md)
- [MetadataServices200ResponseInnerSubtypesInnerSubSubtypesInner](docs/Model/MetadataServices200ResponseInnerSubtypesInnerSubSubtypesInner.md)
- [MetadataShipmentExceptionTypes200ResponseInner](docs/Model/MetadataShipmentExceptionTypes200ResponseInner.md)
- [MetadataShipmentStatuses200ResponseInner](docs/Model/MetadataShipmentStatuses200ResponseInner.md)
- [NullableLocation](docs/Model/NullableLocation.md)
- [NullableLocationContactsInner](docs/Model/NullableLocationContactsInner.md)
- [Organization](docs/Model/Organization.md)
- [OrganizationPatchRequest](docs/Model/OrganizationPatchRequest.md)
- [OrganizationPatchRequestOrganization](docs/Model/OrganizationPatchRequestOrganization.md)
- [PaginationMetadata](docs/Model/PaginationMetadata.md)
- [Payment](docs/Model/Payment.md)
- [PaymentList](docs/Model/PaymentList.md)
- [Request](docs/Model/Request.md)
- [RequestBookable](docs/Model/RequestBookable.md)
- [RequestDisqualificationsInner](docs/Model/RequestDisqualificationsInner.md)
- [RequestList](docs/Model/RequestList.md)
- [RequestListItemsInner](docs/Model/RequestListItemsInner.md)
- [RequestListItemsInnerBookable](docs/Model/RequestListItemsInnerBookable.md)
- [RequestListItemsInnerDestination](docs/Model/RequestListItemsInnerDestination.md)
- [RequestListItemsInnerOrigin](docs/Model/RequestListItemsInnerOrigin.md)
- [RequestObjectsInner](docs/Model/RequestObjectsInner.md)
- [RequestObjectsInnerDetails](docs/Model/RequestObjectsInnerDetails.md)
- [RequestQuotesInner](docs/Model/RequestQuotesInner.md)
- [RequestQuotesInnerIncludedInsurancePolicy](docs/Model/RequestQuotesInnerIncludedInsurancePolicy.md)
- [RequestQuotesInnerIncludedServicesInner](docs/Model/RequestQuotesInnerIncludedServicesInner.md)
- [RequestQuotesInnerIncludedServicesInnerIncludedServicesInner](docs/Model/RequestQuotesInnerIncludedServicesInnerIncludedServicesInner.md)
- [RequestQuotesInnerOptionalServicesInner](docs/Model/RequestQuotesInnerOptionalServicesInner.md)
- [RequestsCreateRequest](docs/Model/RequestsCreateRequest.md)
- [RequestsCreateRequestRequest](docs/Model/RequestsCreateRequestRequest.md)
- [RequestsCreateRequestRequestDestination](docs/Model/RequestsCreateRequestRequestDestination.md)
- [RequestsCreateRequestRequestDestinationContactsInner](docs/Model/RequestsCreateRequestRequestDestinationContactsInner.md)
- [RequestsCreateRequestRequestObjectsInner](docs/Model/RequestsCreateRequestRequestObjectsInner.md)
- [RequestsCreateRequestRequestObjectsInnerDetails](docs/Model/RequestsCreateRequestRequestObjectsInnerDetails.md)
- [RequestsCreateRequestRequestOrigin](docs/Model/RequestsCreateRequestRequestOrigin.md)
- [RequestsCreateRequestRequestOriginContactsInner](docs/Model/RequestsCreateRequestRequestOriginContactsInner.md)
- [RequestsCustomRequest](docs/Model/RequestsCustomRequest.md)
- [RequestsUpdateContactsRequest](docs/Model/RequestsUpdateContactsRequest.md)
- [RequestsUpdateContactsRequestDestination](docs/Model/RequestsUpdateContactsRequestDestination.md)
- [RequestsUpdateContactsRequestDestinationContactsInner](docs/Model/RequestsUpdateContactsRequestDestinationContactsInner.md)
- [RequestsUpdateContactsRequestOrigin](docs/Model/RequestsUpdateContactsRequestOrigin.md)
- [RequestsUpdateContactsRequestOriginContactsInner](docs/Model/RequestsUpdateContactsRequestOriginContactsInner.md)
- [Shipment](docs/Model/Shipment.md)
- [ShipmentExceptionsCreate201Response](docs/Model/ShipmentExceptionsCreate201Response.md)
- [ShipmentExceptionsCreateRequest](docs/Model/ShipmentExceptionsCreateRequest.md)
- [ShipmentExceptionsCreateRequestShipmentException](docs/Model/ShipmentExceptionsCreateRequestShipmentException.md)
- [ShipmentExceptionsGet200Response](docs/Model/ShipmentExceptionsGet200Response.md)
- [ShipmentExceptionsInner](docs/Model/ShipmentExceptionsInner.md)
- [ShipmentExceptionsList200Response](docs/Model/ShipmentExceptionsList200Response.md)
- [ShipmentExceptionsList200ResponseItemsInner](docs/Model/ShipmentExceptionsList200ResponseItemsInner.md)
- [ShipmentExceptionsList200ResponseMetadata](docs/Model/ShipmentExceptionsList200ResponseMetadata.md)
- [ShipmentExceptionsUpdate200Response](docs/Model/ShipmentExceptionsUpdate200Response.md)
- [ShipmentExceptionsUpdateRequest](docs/Model/ShipmentExceptionsUpdateRequest.md)
- [ShipmentExceptionsUpdateRequestShipmentException](docs/Model/ShipmentExceptionsUpdateRequestShipmentException.md)
- [ShipmentInsurancePolicy](docs/Model/ShipmentInsurancePolicy.md)
- [ShipmentList](docs/Model/ShipmentList.md)
- [ShipmentListItemsInner](docs/Model/ShipmentListItemsInner.md)
- [ShipmentListItemsInnerDestination](docs/Model/ShipmentListItemsInnerDestination.md)
- [ShipmentListItemsInnerOrigin](docs/Model/ShipmentListItemsInnerOrigin.md)
- [ShipmentPackagesInner](docs/Model/ShipmentPackagesInner.md)
- [ShipmentPackagesInnerObjectsInner](docs/Model/ShipmentPackagesInnerObjectsInner.md)
- [ShipmentPackagesInnerObjectsInnerDetails](docs/Model/ShipmentPackagesInnerObjectsInnerDetails.md)
- [ShipmentSchedule](docs/Model/ShipmentSchedule.md)
- [ShipmentServicesInner](docs/Model/ShipmentServicesInner.md)
- [ShipmentTrackingInner](docs/Model/ShipmentTrackingInner.md)
- [ShipmentsCreateRequest](docs/Model/ShipmentsCreateRequest.md)
- [ShipmentsCreateRequestShipment](docs/Model/ShipmentsCreateRequestShipment.md)
- [Tracking](docs/Model/Tracking.md)
- [TrackingCarrier](docs/Model/TrackingCarrier.md)
- [Upload](docs/Model/Upload.md)
- [UploadList](docs/Model/UploadList.md)
- [UploadWithPresignedUrl](docs/Model/UploadWithPresignedUrl.md)
- [UploadsCreateRequest](docs/Model/UploadsCreateRequest.md)
- [UploadsCreateRequestUpload](docs/Model/UploadsCreateRequestUpload.md)
- [Webhook](docs/Model/Webhook.md)
- [WebhookDelivery](docs/Model/WebhookDelivery.md)
- [WebhookDeliveryList](docs/Model/WebhookDeliveryList.md)
- [WebhookDeliveryListItem](docs/Model/WebhookDeliveryListItem.md)
- [WebhookList](docs/Model/WebhookList.md)
- [WebhooksCreateRequest](docs/Model/WebhooksCreateRequest.md)
- [WebhooksCreateRequestWebhook](docs/Model/WebhooksCreateRequestWebhook.md)
- [WebhooksPatchRequest](docs/Model/WebhooksPatchRequest.md)
- [WebhooksPatchRequestWebhook](docs/Model/WebhooksPatchRequestWebhook.md)
- [WebhooksSecretTokenGet200Response](docs/Model/WebhooksSecretTokenGet200Response.md)
- [WebhooksSecretTokenResetPatch200Response](docs/Model/WebhooksSecretTokenResetPatch200Response.md)

## Authorization

Authentication schemes defined for the API:
### apiKeyAuth

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

hello@arta.io

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `2021-01-01`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
