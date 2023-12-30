# # RequestObjectsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**current_packing** | **string[]** | A list of packing subtype IDs describing how the item is currently packed. Options are defined in the Packing Types metadata endpoint | [optional]
**depth** | **string** | The depth of the object | [optional]
**details** | [**\OpenAPI\Client\Model\RequestObjectsInnerDetails**](RequestObjectsInnerDetails.md) |  | [optional]
**height** | **string** | The height of the object | [optional]
**id** | **int** | The system-generated ID for this object | [optional] [readonly]
**images** | **string[]** | A list image urls of the object | [optional]
**internal_reference** | **string** | This field can be used to pass through any data about the object you may want returned unaltered for your own later usage | [optional]
**public_reference** | **string** | A user defined name of the object | [optional]
**subtype** | **string** | The object subtype id | [optional]
**type** | **string** | The object type id | [optional]
**width** | **string** | The width of the object | [optional]
**weight** | **string** | The height of the object | [optional]
**unit_of_measurement** | **string** |  | [optional]
**value** | **string** |  | [optional]
**value_currency** | **string** | ISO 4217 three-letter alphabetic currency code. Options are defined in the Currencies metadata endpoint | [optional] [default to 'USD']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
