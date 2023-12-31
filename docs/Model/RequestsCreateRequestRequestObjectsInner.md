# # RequestsCreateRequestRequestObjectsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**internal_reference** | **string** | This field can be used to pass through any data that you may want returned unaltered for your own later usage | [optional]
**current_packing** | **string[]** | A list of packing subtype IDs describing how the item is currently packed | [optional]
**depth** | **string** | The depth of the object |
**details** | [**\Arta\Client\Model\RequestsCreateRequestRequestObjectsInnerDetails**](RequestsCreateRequestRequestObjectsInnerDetails.md) |  | [optional]
**height** | **string** | The height of the object |
**images** | **string[]** | A list image urls of the object | [optional]
**public_reference** | **string** | A client defined name for the object. The value provided for public_reference may be presented in notification emails and on shipment detail pages | [optional]
**subtype** | **string** | The object subtype ID. Options are defined in the Object types metadata endpoint |
**width** | **string** | The width of the object |
**unit_of_measurement** | **string** |  |
**weight** | **string** | The weight of the object | [optional]
**weight_unit** | **string** | The unit of the object |
**value** | **string** |  |
**value_currency** | **string** | ISO 4217 three-letter alphabetic currency code. Options are defined in the Currencies metadata endpoint | [default to 'USD']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
