# # Shipment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**created_at** | **string** | A NaiveDatetime-formatted timestamp describing when the resource was created with microsecond precision | [optional]
**destination** | [**\Arta\Client\Model\Location**](Location.md) |  | [optional]
**eei_form_status** | **string** | The status of an associated electronic export information document required for customs clearance. Returns &#x60;null&#x60; if the shipment does not have an associated EEI Form | [optional] [readonly]
**emissions** | **string** | The amount of projected emissions for this shipment | [optional]
**emissions_unit** | **string** | The unit of measurement for emissions for this shipment. Typically measured in \&quot;kg_co2e\&quot; or \&quot;kilograms of carbon dioxide equivalent\&quot; | [optional]
**exceptions** | [**\Arta\Client\Model\ShipmentExceptionsInner[]**](ShipmentExceptionsInner.md) | Shipment exceptions provide context about holds, delays, and other circumstances that may interrupt a shipment&#39;s fulfillment | [optional]
**hosted_session_id** | **int** | The ID of the HostedSession through which this shipment was created | [optional] [readonly]
**id** | **string** |  | [optional] [readonly]
**insurance_policy** | [**\Arta\Client\Model\ShipmentInsurancePolicy**](ShipmentInsurancePolicy.md) |  | [optional]
**internal_reference** | **string** | This field can be used to pass through any character data that you may want returned unaltered for your own later usage | [optional]
**log_request_id** | **string** | A string identifying the API request that created the shipment. This &#x60;log_request_id&#x60; may be used to find the Log associated with the source API request | [optional] [readonly]
**object_count** | **float** | The count of objects included in the shipment | [optional] [readonly]
**origin** | [**\Arta\Client\Model\Location**](Location.md) |  | [optional]
**package_count** | **float** | The count of packages included in the shipment | [optional] [readonly]
**packages** | [**\Arta\Client\Model\ShipmentPackagesInner[]**](ShipmentPackagesInner.md) |  | [optional]
**payment_process** | **string** | The primary method by which payment to Arta will be handled for this shipment | [optional] [readonly]
**public_reference** | **string** | A client defined name for the resource. The value provided for the public_reference field may appear in notification emails and public web pages | [optional]
**quote_type** | **string** | The ID of the quote type associated with this shipment | [optional] [readonly]
**schedule** | [**\Arta\Client\Model\ShipmentSchedule**](ShipmentSchedule.md) |  | [optional]
**services** | [**\Arta\Client\Model\ShipmentServicesInner[]**](ShipmentServicesInner.md) |  | [optional] [readonly]
**shipping_notes** | **string** | Any additional unstructured notes to Arta about the shipment | [optional]
**shortcode** | **string** | A brief identifier for this shipment | [optional] [readonly]
**status** | **string** | The status for this shipment | [optional] [readonly]
**total** | **string** |  | [optional]
**total_currency** | **string** | The currency of the total. Formatted as ISO 4217 three-letter alphabetic currency code | [optional] [readonly] [default to 'USD']
**tracking** | [**\Arta\Client\Model\ShipmentTrackingInner[]**](ShipmentTrackingInner.md) | A list of tracking details for the packages in a shipment | [optional] [readonly]
**updated_at** | **string** | A NaiveDatetime-formatted timestamp describing when the resource was last updated with microsecond precision | [optional]
**url** | **string** | The track URL for this shipment on the Arta web platform | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
