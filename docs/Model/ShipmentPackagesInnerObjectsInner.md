# # ShipmentPackagesInnerObjectsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**current_packing** | **string[]** | A list of packing subtype IDs describing how the item is currently packed | [optional] [readonly]
**depth** | **string** | The depth of the object | [optional] [readonly]
**details** | [**\Arta\Client\Model\ShipmentPackagesInnerObjectsInnerDetails**](ShipmentPackagesInnerObjectsInnerDetails.md) |  | [optional]
**height** | **string** | The height of the object | [optional] [readonly]
**id** | **int** | The system-generated ID for this object | [optional] [readonly]
**images** | **string[]** | A list image urls of the object | [optional] [readonly]
**internal_reference** | **string** | This field can be used to pass through any character data that you may want returned unaltered for your own later usage | [optional] [readonly]
**public_reference** | **string** | A client defined name for the object. The value provided for public_reference may be presented in notification emails and on shipment detail pages | [optional] [readonly]
**subtype** | **string** | The object sub-type id | [optional] [readonly]
**type** | **string** | The object type id | [optional] [readonly]
**unit_of_measurement** | **string** |  | [optional] [readonly]
**value** | **string** |  | [optional]
**value_currency** | **string** | ISO 4217 three-letter alphabetic currency code. Options are defined in the Currencies metadata endpoint | [optional] [default to 'USD']
**weight** | **string** | The weight of the object | [optional] [readonly]
**weight_unit** | **string** |  | [optional] [readonly]
**width** | **string** | The width of the object | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
