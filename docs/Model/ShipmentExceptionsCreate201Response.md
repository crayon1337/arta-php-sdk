# # ShipmentExceptionsCreate201Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**created_at** | **string** | A NaiveDatetime-formatted timestamp describing when the resource was created with microsecond precision | [optional]
**exception_type_label** | **string** | A human-readable label for the shipment exception provided when the &#x60;type&#x60; is &#x60;other&#x60; | [optional]
**hold_until** | **string** | The optional date a shipment&#39;s collection or delivery is being held until. Will be in the &#x60;YYYY-MM-DD&#x60; format | [optional]
**id** | **string** | The unique ID of the shipment exception | [optional]
**package_id** | **int** | The ID of package associated with the shipment exception. Provided only if the shipment exception is associated with a specific package | [optional]
**resolution** | **string** | A brief description of how a resolved shipment exception was resolved | [optional]
**shipment_id** | **string** | The ID for the shipment associated to the shipment exception | [optional]
**source** | **string** | The context in which this shipment exception was created | [optional]
**status** | **string** | The current resolution status for a shipment exception | [optional]
**type** | **string** | The type ID for this resource. Options are defined in the Shipment Exception Types metadata endpoint | [optional]
**updated_at** | **string** | A NaiveDatetime-formatted timestamp describing when the resource was last updated with microsecond precision | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
