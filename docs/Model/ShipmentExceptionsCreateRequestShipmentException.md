# # ShipmentExceptionsCreateRequestShipmentException

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | The type ID for this resource. Options are defined in the Shipment Exception Types metadata endpoint. Currently, the only accepted type for client-created shipment exceptions is &#x60;requested_hold_to_collect&#x60;. |
**shipment_id** | **string** | The ID for the shipment associated to the shipment exception |
**hold_until** | **string** | Optionally provide a date to hold collection for the shipment. Values should be in the &#x60;YYYY-MM-DD&#x60; format. Hold until dates must be fewer than 30 days from the shipment&#39;s &#x60;created_at&#x60; datetime. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
