# # HostedSession

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**additional_services** | **string[]** | Any desired services, such as unpacking, installation, etc. can be sent through in the request and will be treated as if that requested service is required. Requested services may disqualify certain segments of shipping services offered by Arta depending on location and object details. | [optional]
**cancel_url** | **string** | The URL the user will be redirected to after a Arta Booking session is cancelled | [optional]
**created_at** | **string** |  | [optional]
**destination** | [**\OpenAPI\Client\Model\NullableLocation**](NullableLocation.md) |  | [optional]
**id** | **int** |  | [optional]
**insurance** | **string** | The id of an insurance type. If requesting Arta insurance, object values must be provided. | [optional]
**internal_reference** | **string** | This field can be used to pass through any data about the request you may want returned unaltered for your own later usage | [optional]
**origin** | [**\OpenAPI\Client\Model\Location**](Location.md) |  | [optional]
**payment_process** | **string** | The primary method by which payment to Arta will be handled for any shipment booked through this hosted session | [optional] [readonly]
**private_token** | **string** | A private access token for this resource. It used to generate the private URL for the hosted session | [optional]
**public_reference** | **string** | A client defined name for the resource. The value provided for the public_reference field may appear in notification emails and public web pages | [optional]
**shipping_notes** | **string** | This field can be used to pass through any notes to Arta that a customer might want to provide about the request | [optional]
**shortcode** | **string** | A brief and unique string identifier for the request resource | [optional]
**status** | **string** |  | [optional]
**success_url** | **string** | The URL the user will be redirected to after a Arta Booking session is completed | [optional]
**updated_at** | **string** |  | [optional]
**url** | **string** | The Arta Booking web URL for this Hosted Session | [optional]
**preferred_quote_types** | **string[]** | An optional field presenting the list of quote types the caller instructed Arta to return as part of the hosted session | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
