# # RequestListItemsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**bookable** | [**\Arta\Client\Model\RequestListItemsInnerBookable**](RequestListItemsInnerBookable.md) |  | [optional]
**created_at** | **string** | A NaiveDatetime-formatted timestamp describing when the resource was created with microsecond precision | [optional]
**destination** | [**\Arta\Client\Model\RequestListItemsInnerDestination**](RequestListItemsInnerDestination.md) |  | [optional]
**hosted_session_id** | **int** | The ID of the HostedSession through which this request was created | [optional]
**id** | **string** | The ID for this request | [optional]
**insurance** | **string** | This field can be used to pass through any character data that you may want returned unaltered for your own later usage | [optional]
**internal_reference** | **string** | This field can be used to pass through any character data that you may want returned unaltered for your own later usage | [optional]
**log_request_id** | **string** | An identifier for the API call that created this resource | [optional]
**object_count** | **int** | The count of objects in this request | [optional]
**origin** | [**\Arta\Client\Model\RequestListItemsInnerOrigin**](RequestListItemsInnerOrigin.md) |  | [optional]
**public_reference** | **string** | A client defined name for the resource. The value provided for the public_reference field may appear in notification emails and public web pages | [optional]
**quote_types** | **string[]** | The IDs of the quote types generated for this request | [optional]
**shortcode** | **string** | A brief string identifier for this shipment | [optional]
**status** | **string** | The status for this shipment | [optional]
**updated_at** | **string** | A NaiveDatetime-formatted timestamp describing when the resource was last updated with microsecond precision | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
