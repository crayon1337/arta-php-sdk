# # RequestsCreateRequestRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**additional_services** | **string[]** | Any desired services, such as unpacking, installation, etc. can be sent through in the request and will be treated as if that requested service is required, meaning this may disqualify certain segments of shipping services we offer. | [optional]
**currency** | **string** | The currency that the quote should be returned in. Formatted as ISO 4217 three-letter alphabetic currency code. Options are defined in the Currencies metadata endpoint | [optional] [default to 'USD']
**destination** | [**\Arta\Client\Model\RequestsCreateRequestRequestDestination**](RequestsCreateRequestRequestDestination.md) |  |
**insurance** | **string** | The ID of the requested Arta insurance type. Options are defined in the Insurances metadata endpoint | [optional]
**internal_reference** | **string** | This field can be used to pass through any data that you may want returned unaltered for your own later usage | [optional]
**objects** | [**\Arta\Client\Model\RequestsCreateRequestRequestObjectsInner[]**](RequestsCreateRequestRequestObjectsInner.md) |  |
**origin** | [**\Arta\Client\Model\RequestsCreateRequestRequestOrigin**](RequestsCreateRequestRequestOrigin.md) |  |
**preferred_quote_types** | **string[]** | Optionally instruct the Arta API to return a subset of quote types for this request. For example if you would prefer to only return Select quotes for a particular request, you can set this field to &#x60;[\&quot;select\&quot;]&#x60; You can find all available quote type IDs at the /metadata/quotes endpoint. | [optional]
**public_reference** | **string** | A client defined name for the request. The value provided for the public_reference field may appear in notification emails and shipment detail pages | [optional]
**shipping_notes** | **string** | This field can be used to pass through any notes to Arta that a customer might want to provide about the request | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
