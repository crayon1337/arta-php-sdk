# # WebhookDeliveryListItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**created_at** | **string** |  | [optional] [readonly]
**next_retry** | **string** | The UTC timestamp describing when a follow up webhook delivery event will be attempted if this one has failed | [optional] [readonly]
**id** | **string** | The string ID for this webhook delivery resource | [optional] [readonly]
**resource_id** | **string** | The ID of the resource that triggered the webhook event | [optional] [readonly]
**resource_type** | **string** | The type of resource that triggered the webhook event | [optional] [readonly]
**response_status_code** | **float** |  | [optional] [readonly]
**status** | **string** | The status of the webhook delivery event | [optional] [readonly]
**type** | **string** | The type of webhook delivery sent to your endpoint | [optional] [readonly]
**webhook_id** | **int** | The ID belonging to your webhook endpoint in Arta&#39;s system | [optional] [readonly]
**webhook_url** | **string** | The URL belonging to your webhook endpoint in Arta&#39;s system at the time Arta attempted delivery of the webhook event | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
