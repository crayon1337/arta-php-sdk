# # NullableLocation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The location id | [optional] [readonly]
**address_line_1** | **string** | First line of address | [optional]
**address_line_2** | **string** | Second line of address | [optional]
**address_line_3** | **string** | Third line of address | [optional]
**city** | **string** | City | [optional]
**region** | **string** | Political region name, for US states and Canada provinces, use 2 letter abbreviations | [optional]
**postal_code** | **string** | The postal code | [optional]
**country** | **string** | The ISO 3166-1 alpha-2 country code of the current or last known location if available | [optional]
**title** | **string** | The title or name of the location | [optional]
**access_restrictions** | **string[]** |  | [optional]
**contacts** | [**\OpenAPI\Client\Model\NullableLocationContactsInner[]**](NullableLocationContactsInner.md) | An list of contacts at the location | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
