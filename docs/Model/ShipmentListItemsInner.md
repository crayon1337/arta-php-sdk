# # ShipmentListItemsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**created_at** | **string** | A NaiveDatetime-formatted timestamp describing when the resource was created with microsecond precision | [optional]
**destination** | [**\OpenAPI\Client\Model\ShipmentListItemsInnerDestination**](ShipmentListItemsInnerDestination.md) |  | [optional]
**hosted_session_id** | **int** | The ID of the HostedSession through which this shipment was created | [optional]
**id** | **string** | The ID for this shipment | [optional]
**internal_reference** | **string** | This field can be used to pass through any character data that you may want returned unaltered for your own later usage | [optional]
**object_count** | **int** | The count of objects in this shipment | [optional]
**origin** | [**\OpenAPI\Client\Model\ShipmentListItemsInnerOrigin**](ShipmentListItemsInnerOrigin.md) |  | [optional]
**package_count** | **int** | The number of packages in this shipment | [optional]
**public_reference** | **string** | A client defined name for the resource. The value provided for the public_reference field may appear in notification emails and public web pages | [optional]
**quote_type** | **string** | The ID of the quote type associated with this shipment | [optional]
**shortcode** | **string** | A brief string identifier for this shipment | [optional]
**status** | **string** | The status for this shipment | [optional]
**total** | **string** | The total cost of this shipment | [optional]
**total_currency** | **string** | The currency of the total. Formatted as ISO 4217 three-letter alphabetic currency code | [optional] [default to 'USD']
**updated_at** | **string** | A NaiveDatetime-formatted timestamp describing when the resource was last updated with microsecond precision | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
