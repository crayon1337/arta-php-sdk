# # UploadWithPresignedUrl

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**created_at** | **string** |  | [optional] [readonly]
**document_type** | **string** | The document type of the uploaded file |
**document_type_label** | **string** | A brief label providing additional context about the &#x60;document_type&#x60;. Required when \&quot;other\&quot; is the &#x60;document_type&#x60; | [optional]
**download_url** | **string** |  | [optional] [readonly]
**file_name** | **string** | The name of the uploaded file |
**id** | **int** |  | [optional] [readonly]
**mime_type** | **string** | The mime-type of the uploaded file |
**presigned_url** | **string** | A pre-signed and secure URL to use to send the file to Arta via a PUT HTTP request within 20 seconds of the upload resource being created | [optional] [readonly]
**size** | **int** | The size of the uploaded file in bytes |
**status** | **string** |  | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
