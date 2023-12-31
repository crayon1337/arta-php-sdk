# # Request

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**additional_services** | **string[]** | Any desired services, such as unpacking, installation, etc. can be sent through in the request and will be treated as if that requested service is required. Requested services may disqualify certain segments of shipping services offered by Arta depending on location and object details. | [optional]
**bookable** | [**\Arta\Client\Model\RequestBookable**](RequestBookable.md) |  | [optional]
**created_at** | **string** | A NaiveDatetime-formatted timestamp describing when the resource was created with microsecond precision | [optional]
**currency** | **string** | ISO 4217 three-letter alphabetic currency code. Options are defined in the Currencies metadata endpoint | [optional] [default to 'USD']
**destination** | [**\Arta\Client\Model\Location**](Location.md) |  | [optional]
**disqualifications** | [**\Arta\Client\Model\RequestDisqualificationsInner[]**](RequestDisqualificationsInner.md) | The list of reasons for which particular quote types were disqulified | [optional]
**hosted_session_id** | **int** | The ID of the HostedSession through which this shipment was created | [optional]
**id** | **string** |  | [optional]
**insurance** | **string** | The id of an insurance type. If requesting Arta insurance, object values must be provided. | [optional]
**internal_reference** | **string** | This field can be used to pass through any data about the request you may want returned unaltered for your own later usage | [optional]
**log_request_id** | **string** | The request ID for the API call that created the resource. This request ID maps to the Log resource&#39;s \&quot;request_id\&quot; field | [optional]
**object_count** | **float** | The count of objects included in the initial request payload | [optional]
**objects** | [**\Arta\Client\Model\RequestObjectsInner[]**](RequestObjectsInner.md) |  | [optional]
**origin** | [**\Arta\Client\Model\Location**](Location.md) |  | [optional]
**payment_process** | **string** | The primary method by which payment to Arta will be handled for any shipment booked from this request | [optional]
**preferred_quote_types** | **string[]** | An optional field presenting the list of quote types the caller instructed Arta to return as part of the quote request | [optional]
**public_reference** | **string** | A client defined name for the resource. The value provided for the public_reference field may appear in notification emails and public web pages | [optional]
**quote_types** | **string[]** | The list of quote types returned as part of the quotes in this quote request | [optional]
**quotes** | [**\Arta\Client\Model\RequestQuotesInner[]**](RequestQuotesInner.md) | The list of quotes returned for the request | [optional]
**shipping_notes** | **string** | This field can be used to pass through any notes to Arta that a customer might want to provide about the request | [optional]
**shortcode** | **string** | A brief and unique string identifier for the request resource | [optional]
**status** | **string** |  | [optional]
**updated_at** | **string** | A NaiveDatetime-formatted timestamp describing when the resource was last updated with microsecond precision | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
