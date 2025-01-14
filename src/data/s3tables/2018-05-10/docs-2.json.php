<?php
// This file was auto-generated from sdk-root/src/data/s3tables/2018-05-10/docs-2.json
return [ 'version' => '2.0', 'service' => '<p>An Amazon S3 table represents a structured dataset consisting of tabular data in <a href="https://parquet.apache.org/docs/">Apache Parquet</a> format and related metadata. This data is stored inside an S3 table as a subresource. All tables in a table bucket are stored in the <a href="https://iceberg.apache.org/docs/latest/">Apache Iceberg</a> table format. Through integration with the <a href="https://docs.aws.amazon.com/https:/docs.aws.amazon.com/glue/latest/dg/catalog-and-crawler.html">AWS Glue Data Catalog</a> you can interact with your tables using AWS analytics services, such as <a href="https://docs.aws.amazon.com/https:/docs.aws.amazon.com/athena/">Amazon Athena</a> and <a href="https://docs.aws.amazon.com/https:/docs.aws.amazon.com/redshift/">Amazon Redshift</a>. Amazon S3 manages maintenance of your tables through automatic file compaction and snapshot management. For more information, see <a href="https://docs.aws.amazon.com/AmazonS3/latest/userguide/s3-tables-buckets.html">Amazon S3 table buckets</a>.</p>', 'operations' => [ 'CreateNamespace' => '<p>Creates a namespace. A namespace is a logical grouping of tables within your table bucket, which you can use to organize tables. For more information, see <a href="https://docs.aws.amazon.com/AmazonS3/latest/userguide/s3-tables-namespace.html">Table namespaces</a>. </p>', 'CreateTable' => '<p>Creates a new table associated with the given namespace in a table bucket.</p>', 'CreateTableBucket' => '<p>Creates a table bucket.</p>', 'DeleteNamespace' => '<p>Deletes a namespace.</p>', 'DeleteTable' => '<p>Deletes a table.</p>', 'DeleteTableBucket' => '<p>Deletes a table bucket.</p>', 'DeleteTableBucketPolicy' => '<p>Deletes a table bucket policy.</p>', 'DeleteTablePolicy' => '<p>Deletes a table policy.</p>', 'GetNamespace' => '<p>Gets details about a namespace.</p>', 'GetTable' => '<p>Gets details about a table.</p>', 'GetTableBucket' => '<p>Gets details on a table bucket.</p>', 'GetTableBucketMaintenanceConfiguration' => '<p>Gets details about a maintenance configuration for a given table bucket.</p>', 'GetTableBucketPolicy' => '<p>Gets details about a table bucket policy.</p>', 'GetTableMaintenanceConfiguration' => '<p>Gets details about the maintenance configuration of a table.</p>', 'GetTableMaintenanceJobStatus' => '<p>Gets the status of a maintenance job for a table.</p>', 'GetTableMetadataLocation' => '<p>Gets the location of the table metadata.</p>', 'GetTablePolicy' => '<p>Gets details about a table policy.</p>', 'ListNamespaces' => '<p>Lists the namespaces within a table bucket.</p>', 'ListTableBuckets' => '<p>Lists table buckets for your account.</p>', 'ListTables' => '<p>List tables in the given table bucket.</p>', 'PutTableBucketMaintenanceConfiguration' => '<p>Creates a new maintenance configuration or replaces an existing maintenance configuration for a table bucket.</p>', 'PutTableBucketPolicy' => '<p>Creates a new maintenance configuration or replaces an existing table bucket policy for a table bucket. </p>', 'PutTableMaintenanceConfiguration' => '<p>Creates a new maintenance configuration or replaces an existing maintenance configuration for a table.</p>', 'PutTablePolicy' => '<p>Creates a new maintenance configuration or replaces an existing table policy for a table. </p>', 'RenameTable' => '<p>Renames a table or a namespace.</p>', 'UpdateTableMetadataLocation' => '<p>Updates the metadata location for a table.</p>', ], 'shapes' => [ 'AccessDeniedException' => [ 'base' => '<p>The action cannot be performed because you do not have the required permission.</p>', 'refs' => [], ], 'AccountId' => [ 'base' => NULL, 'refs' => [ 'GetNamespaceResponse$createdBy' => '<p>The ID of the account that created the namespace.</p>', 'GetNamespaceResponse$ownerAccountId' => '<p>The ID of the account that owns the namespcace.</p>', 'GetTableBucketResponse$ownerAccountId' => '<p>The ID of the account that owns the table bucket.</p>', 'GetTableResponse$createdBy' => '<p>The ID of the account that created the table.</p>', 'GetTableResponse$modifiedBy' => '<p>The ID of the account that last modified the table.</p>', 'GetTableResponse$ownerAccountId' => '<p>The ID of the account that owns the table.</p>', 'NamespaceSummary$createdBy' => '<p>The ID of the account that created the namespace.</p>', 'NamespaceSummary$ownerAccountId' => '<p>The ID of the account that owns the namespace.</p>', 'TableBucketSummary$ownerAccountId' => '<p>The ID of the account that owns the table bucket.</p>', ], ], 'BadRequestException' => [ 'base' => '<p>The request is invalid or malformed.</p>', 'refs' => [], ], 'ConflictException' => [ 'base' => '<p>The request failed because there is a conflict with a previous write. You can retry the request.</p>', 'refs' => [], ], 'CreateNamespaceRequest' => [ 'base' => NULL, 'refs' => [], ], 'CreateNamespaceRequestNamespaceList' => [ 'base' => NULL, 'refs' => [ 'CreateNamespaceRequest$namespace' => '<p>A name for the namespace.</p>', ], ], 'CreateNamespaceResponse' => [ 'base' => NULL, 'refs' => [], ], 'CreateTableBucketRequest' => [ 'base' => NULL, 'refs' => [], ], 'CreateTableBucketResponse' => [ 'base' => NULL, 'refs' => [], ], 'CreateTableRequest' => [ 'base' => NULL, 'refs' => [], ], 'CreateTableResponse' => [ 'base' => NULL, 'refs' => [], ], 'DeleteNamespaceRequest' => [ 'base' => NULL, 'refs' => [], ], 'DeleteTableBucketPolicyRequest' => [ 'base' => NULL, 'refs' => [], ], 'DeleteTableBucketRequest' => [ 'base' => NULL, 'refs' => [], ], 'DeleteTablePolicyRequest' => [ 'base' => NULL, 'refs' => [], ], 'DeleteTableRequest' => [ 'base' => NULL, 'refs' => [], ], 'ErrorMessage' => [ 'base' => NULL, 'refs' => [ 'AccessDeniedException$message' => NULL, 'BadRequestException$message' => NULL, 'ConflictException$message' => NULL, 'ForbiddenException$message' => NULL, 'InternalServerErrorException$message' => NULL, 'NotFoundException$message' => NULL, 'TooManyRequestsException$message' => NULL, ], ], 'ForbiddenException' => [ 'base' => '<p>The caller isn\'t authorized to make the request.</p>', 'refs' => [], ], 'GetNamespaceRequest' => [ 'base' => NULL, 'refs' => [], ], 'GetNamespaceResponse' => [ 'base' => NULL, 'refs' => [], ], 'GetTableBucketMaintenanceConfigurationRequest' => [ 'base' => NULL, 'refs' => [], ], 'GetTableBucketMaintenanceConfigurationResponse' => [ 'base' => NULL, 'refs' => [], ], 'GetTableBucketPolicyRequest' => [ 'base' => NULL, 'refs' => [], ], 'GetTableBucketPolicyResponse' => [ 'base' => NULL, 'refs' => [], ], 'GetTableBucketRequest' => [ 'base' => NULL, 'refs' => [], ], 'GetTableBucketResponse' => [ 'base' => NULL, 'refs' => [], ], 'GetTableMaintenanceConfigurationRequest' => [ 'base' => NULL, 'refs' => [], ], 'GetTableMaintenanceConfigurationResponse' => [ 'base' => NULL, 'refs' => [], ], 'GetTableMaintenanceJobStatusRequest' => [ 'base' => NULL, 'refs' => [], ], 'GetTableMaintenanceJobStatusResponse' => [ 'base' => NULL, 'refs' => [], ], 'GetTableMetadataLocationRequest' => [ 'base' => NULL, 'refs' => [], ], 'GetTableMetadataLocationResponse' => [ 'base' => NULL, 'refs' => [], ], 'GetTablePolicyRequest' => [ 'base' => NULL, 'refs' => [], ], 'GetTablePolicyResponse' => [ 'base' => NULL, 'refs' => [], ], 'GetTableRequest' => [ 'base' => NULL, 'refs' => [], ], 'GetTableResponse' => [ 'base' => NULL, 'refs' => [], ], 'IcebergCompactionSettings' => [ 'base' => '<p>Contains details about the compaction settings for an Iceberg table. </p>', 'refs' => [ 'TableMaintenanceSettings$icebergCompaction' => '<p>Contains details about the Iceberg compaction settings for the table.</p>', ], ], 'IcebergSnapshotManagementSettings' => [ 'base' => '<p>Contains details about the snapshot management settings for an Iceberg table. The oldest snapshot expires when its age exceeds the <code>maxSnapshotAgeHours</code> and the total number of snapshots exceeds the value for the minimum number of snapshots to keep <code>minSnapshotsToKeep</code>. </p>', 'refs' => [ 'TableMaintenanceSettings$icebergSnapshotManagement' => '<p>Contains details about the Iceberg snapshot management settings for the table.</p>', ], ], 'IcebergUnreferencedFileRemovalSettings' => [ 'base' => '<p>Contains details about the unreferenced file removal settings for an Iceberg table bucket. </p>', 'refs' => [ 'TableBucketMaintenanceSettings$icebergUnreferencedFileRemoval' => '<p>The unreferenced file removal settings for the table bucket.</p>', ], ], 'InternalServerErrorException' => [ 'base' => '<p>The request failed due to an internal server error.</p>', 'refs' => [], ], 'JobStatus' => [ 'base' => NULL, 'refs' => [ 'TableMaintenanceJobStatusValue$status' => '<p>The status of the job.</p>', ], ], 'ListNamespacesLimit' => [ 'base' => NULL, 'refs' => [ 'ListNamespacesRequest$maxNamespaces' => '<p>The maximum number of namespaces to return in the list.</p>', ], ], 'ListNamespacesRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListNamespacesRequestPrefixString' => [ 'base' => NULL, 'refs' => [ 'ListNamespacesRequest$prefix' => '<p>The prefix of the namespaces.</p>', ], ], 'ListNamespacesResponse' => [ 'base' => NULL, 'refs' => [], ], 'ListTableBucketsLimit' => [ 'base' => NULL, 'refs' => [ 'ListTableBucketsRequest$maxBuckets' => '<p>The maximum number of table buckets to return in the list.</p>', ], ], 'ListTableBucketsRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListTableBucketsRequestPrefixString' => [ 'base' => NULL, 'refs' => [ 'ListTableBucketsRequest$prefix' => '<p>The prefix of the table buckets.</p>', ], ], 'ListTableBucketsResponse' => [ 'base' => NULL, 'refs' => [], ], 'ListTablesLimit' => [ 'base' => NULL, 'refs' => [ 'ListTablesRequest$maxTables' => '<p>The maximum number of tables to return.</p>', ], ], 'ListTablesRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListTablesRequestPrefixString' => [ 'base' => NULL, 'refs' => [ 'ListTablesRequest$prefix' => '<p>The prefix of the tables.</p>', ], ], 'ListTablesResponse' => [ 'base' => NULL, 'refs' => [], ], 'MaintenanceStatus' => [ 'base' => NULL, 'refs' => [ 'TableBucketMaintenanceConfigurationValue$status' => '<p>The status of the maintenance configuration.</p>', 'TableMaintenanceConfigurationValue$status' => '<p>The status of the maintenance configuration.</p>', ], ], 'MetadataLocation' => [ 'base' => NULL, 'refs' => [ 'GetTableMetadataLocationResponse$metadataLocation' => '<p>The metadata location.</p>', 'GetTableResponse$metadataLocation' => '<p>The metadata location of the table.</p>', 'UpdateTableMetadataLocationRequest$metadataLocation' => '<p>The new metadata location for the table. </p>', 'UpdateTableMetadataLocationResponse$metadataLocation' => '<p>The metadata location of the table.</p>', ], ], 'NamespaceList' => [ 'base' => NULL, 'refs' => [ 'CreateNamespaceResponse$namespace' => '<p>The name of the namespace.</p>', 'GetNamespaceResponse$namespace' => '<p>The name of the namespace.</p>', 'GetTableResponse$namespace' => '<p>The namespace associated with the table.</p>', 'NamespaceSummary$namespace' => '<p>The name of the namespace.</p>', 'TableSummary$namespace' => '<p>The name of the namespace.</p>', 'UpdateTableMetadataLocationResponse$namespace' => '<p>The namespace the table is associated with.</p>', ], ], 'NamespaceName' => [ 'base' => NULL, 'refs' => [ 'CreateNamespaceRequestNamespaceList$member' => NULL, 'CreateTableRequest$namespace' => '<p>The namespace to associated with the table.</p>', 'DeleteNamespaceRequest$namespace' => '<p>The name of the namespace.</p>', 'DeleteTablePolicyRequest$namespace' => '<p>The namespace associated with the table. </p>', 'DeleteTableRequest$namespace' => '<p>The namespace associated with the table.</p>', 'GetNamespaceRequest$namespace' => '<p>The name of the namespace.</p>', 'GetTableMaintenanceConfigurationRequest$namespace' => '<p>The namespace associated with the table.</p>', 'GetTableMaintenanceJobStatusRequest$namespace' => '<p>The name of the namespace the table is associated with. <pre><code>&lt;/p&gt; </code></pre>', 'GetTableMetadataLocationRequest$namespace' => '<p>The namespace of the table.</p>', 'GetTablePolicyRequest$namespace' => '<p>The namespace associated with the table.</p>', 'GetTableRequest$namespace' => '<p>The name of the namespace the table is associated with.</p>', 'ListTablesRequest$namespace' => '<p>The namespace of the tables.</p>', 'NamespaceList$member' => NULL, 'PutTableMaintenanceConfigurationRequest$namespace' => '<p>The namespace of the table.</p>', 'PutTablePolicyRequest$namespace' => '<p>The namespace associated with the table.</p>', 'RenameTableRequest$namespace' => '<p>The namespace associated with the table. </p>', 'RenameTableRequest$newNamespaceName' => '<p>The new name for the namespace.</p>', 'UpdateTableMetadataLocationRequest$namespace' => '<p>The namespace of the table.</p>', ], ], 'NamespaceSummary' => [ 'base' => '<p>Contains details about a namespace.</p>', 'refs' => [ 'NamespaceSummaryList$member' => NULL, ], ], 'NamespaceSummaryList' => [ 'base' => NULL, 'refs' => [ 'ListNamespacesResponse$namespaces' => '<p>A list of namespaces.</p>', ], ], 'NextToken' => [ 'base' => NULL, 'refs' => [ 'ListNamespacesRequest$continuationToken' => '<p> <code>ContinuationToken</code> indicates to Amazon S3 that the list is being continued on this bucket with a token. <code>ContinuationToken</code> is obfuscated and is not a real key. You can use this <code>ContinuationToken</code> for pagination of the list results.</p>', 'ListNamespacesResponse$continuationToken' => '<p>The <code>ContinuationToken</code> for pagination of the list results.</p>', 'ListTableBucketsRequest$continuationToken' => '<p> <code>ContinuationToken</code> indicates to Amazon S3 that the list is being continued on this bucket with a token. <code>ContinuationToken</code> is obfuscated and is not a real key. You can use this <code>ContinuationToken</code> for pagination of the list results.</p>', 'ListTableBucketsResponse$continuationToken' => '<p>You can use this <code>ContinuationToken</code> for pagination of the list results.</p>', 'ListTablesRequest$continuationToken' => '<p> <code>ContinuationToken</code> indicates to Amazon S3 that the list is being continued on this bucket with a token. <code>ContinuationToken</code> is obfuscated and is not a real key. You can use this <code>ContinuationToken</code> for pagination of the list results.</p>', 'ListTablesResponse$continuationToken' => '<p>You can use this <code>ContinuationToken</code> for pagination of the list results.</p>', ], ], 'NotFoundException' => [ 'base' => '<p>The request was rejected because the specified resource could not be found.</p>', 'refs' => [], ], 'OpenTableFormat' => [ 'base' => NULL, 'refs' => [ 'CreateTableRequest$format' => '<p>The format for the table.</p>', 'GetTableResponse$format' => '<p>The format of the table.</p>', ], ], 'PositiveInteger' => [ 'base' => NULL, 'refs' => [ 'IcebergCompactionSettings$targetFileSizeMB' => '<p>The target file size for the table in MB.</p>', 'IcebergSnapshotManagementSettings$minSnapshotsToKeep' => '<p>The minimum number of snapshots to keep.</p>', 'IcebergSnapshotManagementSettings$maxSnapshotAgeHours' => '<p>The maximum age of a snapshot before it can be expired.</p>', 'IcebergUnreferencedFileRemovalSettings$unreferencedDays' => '<p>The number of days an object has to be unreferenced before it is marked as non-current. <pre><code> &lt;/p&gt; </code></pre>', 'IcebergUnreferencedFileRemovalSettings$nonCurrentDays' => '<p>The number of days an object has to be non-current before it is deleted. <pre><code>&lt;/p&gt; </code></pre>', ], ], 'PutTableBucketMaintenanceConfigurationRequest' => [ 'base' => NULL, 'refs' => [], ], 'PutTableBucketPolicyRequest' => [ 'base' => NULL, 'refs' => [], ], 'PutTableMaintenanceConfigurationRequest' => [ 'base' => NULL, 'refs' => [], ], 'PutTablePolicyRequest' => [ 'base' => NULL, 'refs' => [], ], 'RenameTableRequest' => [ 'base' => NULL, 'refs' => [], ], 'ResourcePolicy' => [ 'base' => NULL, 'refs' => [ 'GetTableBucketPolicyResponse$resourcePolicy' => '<p>The name of the resource policy.</p>', 'GetTablePolicyResponse$resourcePolicy' => '<p>The name of the resource policy.</p>', 'PutTableBucketPolicyRequest$resourcePolicy' => '<p>The name of the resource policy.</p>', 'PutTablePolicyRequest$resourcePolicy' => '<p>The name of the resource policy.</p>', ], ], 'String' => [ 'base' => NULL, 'refs' => [ 'GetTableResponse$managedByService' => '<p>The service that manages the table.</p>', 'TableMaintenanceJobStatusValue$failureMessage' => '<p>The failure message of a failed job.</p>', ], ], 'SyntheticTimestamp_date_time' => [ 'base' => NULL, 'refs' => [ 'GetNamespaceResponse$createdAt' => '<p>The date and time the namespace was created at.</p>', 'GetTableBucketResponse$createdAt' => '<p>The date and time the table bucket was created.</p>', 'GetTableResponse$createdAt' => '<p>The date and time the table bucket was created at.</p>', 'GetTableResponse$modifiedAt' => '<p>The date and time the table was last modified on.</p>', 'NamespaceSummary$createdAt' => '<p>The date and time the namespace was created at.</p>', 'TableBucketSummary$createdAt' => '<p>The date and time the table bucket was created at.</p>', 'TableMaintenanceJobStatusValue$lastRunTimestamp' => '<p>The date and time that the maintenance job was last run.</p>', 'TableSummary$createdAt' => '<p>The date and time the table was created at.</p>', 'TableSummary$modifiedAt' => '<p>The date and time the table was last modified at.</p>', ], ], 'TableARN' => [ 'base' => NULL, 'refs' => [ 'CreateTableResponse$tableARN' => '<p>The Amazon Resource Name (ARN) of the table.</p>', 'GetTableMaintenanceConfigurationResponse$tableARN' => '<p>The Amazon Resource Name (ARN) of the table.</p>', 'GetTableMaintenanceJobStatusResponse$tableARN' => '<p>The Amazon Resource Name (ARN) of the table.</p>', 'GetTableResponse$tableARN' => '<p>The Amazon Resource Name (ARN) of the table.</p>', 'TableSummary$tableARN' => '<p>The Amazon Resource Number (ARN) of the table.</p>', 'UpdateTableMetadataLocationResponse$tableARN' => '<p>The Amazon Resource Number (ARN) of the table.</p>', ], ], 'TableBucketARN' => [ 'base' => NULL, 'refs' => [ 'CreateNamespaceRequest$tableBucketARN' => '<p>The Amazon Resource Name (ARN) of the table bucket to create the namespace in.</p>', 'CreateNamespaceResponse$tableBucketARN' => '<p>The Amazon Resource Name (ARN) of the table bucket the namespace was created in.</p>', 'CreateTableBucketResponse$arn' => '<p>The Amazon Resource Name (ARN) of the table bucket.</p>', 'CreateTableRequest$tableBucketARN' => '<p>The Amazon Resource Name (ARN) of the table bucket to create the table in.</p>', 'DeleteNamespaceRequest$tableBucketARN' => '<p>The Amazon Resource Name (ARN) of the table bucket associated with the namespace.</p>', 'DeleteTableBucketPolicyRequest$tableBucketARN' => '<p>The Amazon Resource Number (ARN) of the table bucket.</p>', 'DeleteTableBucketRequest$tableBucketARN' => '<p>The Amazon Resource Name (ARN) of the table bucket.</p>', 'DeleteTablePolicyRequest$tableBucketARN' => '<p>The Amazon Resource Number (ARN) of the table bucket that contains the table.</p>', 'DeleteTableRequest$tableBucketARN' => '<p>The Amazon Resource Name (ARN) of the table bucket that contains the table.</p>', 'GetNamespaceRequest$tableBucketARN' => '<p>The Amazon Resource Name (ARN) of the table bucket.</p>', 'GetTableBucketMaintenanceConfigurationRequest$tableBucketARN' => '<p>The Amazon Resource Name (ARN) of the table bucket associated with the maintenance configuration.</p>', 'GetTableBucketMaintenanceConfigurationResponse$tableBucketARN' => '<p>The Amazon Resource Name (ARN) of the table bucket associated with the maintenance configuration.</p>', 'GetTableBucketPolicyRequest$tableBucketARN' => '<p>The Amazon Resource Number (ARN) of the table bucket.</p>', 'GetTableBucketRequest$tableBucketARN' => '<p>The Amazon Resource Name (ARN) of the table bucket.</p>', 'GetTableBucketResponse$arn' => '<p>The Amazon Resource Name (ARN) of the table bucket.</p>', 'GetTableMaintenanceConfigurationRequest$tableBucketARN' => '<p>The Amazon Resource Name (ARN) of the table bucket.</p>', 'GetTableMaintenanceJobStatusRequest$tableBucketARN' => '<p>The Amazon Resource Name (ARN) of the table bucket.</p>', 'GetTableMetadataLocationRequest$tableBucketARN' => '<p>The Amazon Resource Name (ARN) of the table bucket.</p>', 'GetTablePolicyRequest$tableBucketARN' => '<p>The Amazon Resource Number (ARN) of the table bucket that contains the table.</p>', 'GetTableRequest$tableBucketARN' => '<p>The Amazon Resource Name (ARN) of the table bucket associated with the table.</p>', 'ListNamespacesRequest$tableBucketARN' => '<p>The Amazon Resource Name (ARN) of the table bucket.</p>', 'ListTablesRequest$tableBucketARN' => '<p>The Amazon resource Number (ARN) of the table bucket.</p>', 'PutTableBucketMaintenanceConfigurationRequest$tableBucketARN' => '<p>The Amazon Resource Name (ARN) of the table bucket associated with the maintenance configuration.</p>', 'PutTableBucketPolicyRequest$tableBucketARN' => '<p>The Amazon Resource Number (ARN) of the table bucket.</p>', 'PutTableMaintenanceConfigurationRequest$tableBucketARN' => '<p>The Amazon Resource Name (ARN) of the table associated with the maintenance configuration.</p>', 'PutTablePolicyRequest$tableBucketARN' => '<p>The Amazon Resource Number (ARN) of the table bucket that contains the table.</p>', 'RenameTableRequest$tableBucketARN' => '<p>The Amazon Resource Name (ARN) of the table bucket. </p>', 'TableBucketSummary$arn' => '<p>The Amazon Resource Number (ARN) of the table bucket.</p>', 'UpdateTableMetadataLocationRequest$tableBucketARN' => '<p>The Amazon Resource Name (ARN) of the table bucket. </p>', ], ], 'TableBucketMaintenanceConfiguration' => [ 'base' => NULL, 'refs' => [ 'GetTableBucketMaintenanceConfigurationResponse$configuration' => '<p>Details about the maintenance configuration for the table bucket.</p>', ], ], 'TableBucketMaintenanceConfigurationValue' => [ 'base' => '<p>Details about the values that define the maintenance configuration for a table bucket.</p>', 'refs' => [ 'PutTableBucketMaintenanceConfigurationRequest$value' => '<p>Defines the values of the maintenance configuration for the table bucket.</p>', 'TableBucketMaintenanceConfiguration$value' => NULL, ], ], 'TableBucketMaintenanceSettings' => [ 'base' => '<p>Contains details about the maintenance settings for the table bucket.</p>', 'refs' => [ 'TableBucketMaintenanceConfigurationValue$settings' => '<p>Contains details about the settings of the maintenance configuration.</p>', ], ], 'TableBucketMaintenanceType' => [ 'base' => NULL, 'refs' => [ 'PutTableBucketMaintenanceConfigurationRequest$type' => '<p>The type of the maintenance configuration.</p>', 'TableBucketMaintenanceConfiguration$key' => NULL, ], ], 'TableBucketName' => [ 'base' => NULL, 'refs' => [ 'CreateTableBucketRequest$name' => '<p>The name for the table bucket.</p>', 'GetTableBucketResponse$name' => '<p>The name of the table bucket</p>', 'TableBucketSummary$name' => '<p>The name of the table bucket.</p>', ], ], 'TableBucketSummary' => [ 'base' => '<p>Contains details about a table bucket.</p>', 'refs' => [ 'TableBucketSummaryList$member' => NULL, ], ], 'TableBucketSummaryList' => [ 'base' => NULL, 'refs' => [ 'ListTableBucketsResponse$tableBuckets' => '<p>A list of table buckets.</p>', ], ], 'TableMaintenanceConfiguration' => [ 'base' => NULL, 'refs' => [ 'GetTableMaintenanceConfigurationResponse$configuration' => '<p>Details about the maintenance configuration for the table bucket.</p>', ], ], 'TableMaintenanceConfigurationValue' => [ 'base' => '<p>Contains the values that define a maintenance configuration for a table.</p>', 'refs' => [ 'PutTableMaintenanceConfigurationRequest$value' => '<p>Defines the values of the maintenance configuration for the table.</p>', 'TableMaintenanceConfiguration$value' => NULL, ], ], 'TableMaintenanceJobStatus' => [ 'base' => NULL, 'refs' => [ 'GetTableMaintenanceJobStatusResponse$status' => '<p>The status of the maintenance job.</p>', ], ], 'TableMaintenanceJobStatusValue' => [ 'base' => '<p>Details about the status of a maintenance job.</p>', 'refs' => [ 'TableMaintenanceJobStatus$value' => NULL, ], ], 'TableMaintenanceJobType' => [ 'base' => NULL, 'refs' => [ 'TableMaintenanceJobStatus$key' => NULL, ], ], 'TableMaintenanceSettings' => [ 'base' => '<p>Contains details about maintenance settings for the table.</p>', 'refs' => [ 'TableMaintenanceConfigurationValue$settings' => '<p>Contains details about the settings for the maintenance configuration.</p>', ], ], 'TableMaintenanceType' => [ 'base' => NULL, 'refs' => [ 'PutTableMaintenanceConfigurationRequest$type' => '<p>The type of the maintenance configuration.</p>', 'TableMaintenanceConfiguration$key' => NULL, ], ], 'TableName' => [ 'base' => NULL, 'refs' => [ 'CreateTableRequest$name' => '<p>The name for the table.</p>', 'DeleteTablePolicyRequest$name' => '<p>The table name.</p>', 'DeleteTableRequest$name' => '<p>The name of the table.</p>', 'GetTableMaintenanceConfigurationRequest$name' => '<p>The name of the table.</p>', 'GetTableMaintenanceJobStatusRequest$name' => '<p>The name of the maintenance job.</p>', 'GetTableMetadataLocationRequest$name' => '<p>The name of the table.</p>', 'GetTablePolicyRequest$name' => '<p>The name of the table.</p>', 'GetTableRequest$name' => '<p>The name of the table.</p>', 'GetTableResponse$name' => '<p>The name of the table.</p>', 'PutTableMaintenanceConfigurationRequest$name' => '<p>The name of the maintenance configuration.</p>', 'PutTablePolicyRequest$name' => '<p>The name of the table.</p>', 'RenameTableRequest$name' => '<p>The current name of the table.</p>', 'RenameTableRequest$newName' => '<p>The new name for the table.</p>', 'TableSummary$name' => '<p>The name of the table.</p>', 'UpdateTableMetadataLocationRequest$name' => '<p>The name of the table.</p>', 'UpdateTableMetadataLocationResponse$name' => '<p>The name of the table.</p>', ], ], 'TableSummary' => [ 'base' => '<p>Contains details about a table.</p>', 'refs' => [ 'TableSummaryList$member' => NULL, ], ], 'TableSummaryList' => [ 'base' => NULL, 'refs' => [ 'ListTablesResponse$tables' => '<p>A list of tables.</p>', ], ], 'TableType' => [ 'base' => NULL, 'refs' => [ 'GetTableResponse$type' => '<p>The type of the table.</p>', 'TableSummary$type' => '<p>The type of the table.</p>', ], ], 'TooManyRequestsException' => [ 'base' => '<p>The limit on the number of requests per second was exceeded.</p>', 'refs' => [], ], 'UpdateTableMetadataLocationRequest' => [ 'base' => NULL, 'refs' => [], ], 'UpdateTableMetadataLocationResponse' => [ 'base' => NULL, 'refs' => [], ], 'VersionToken' => [ 'base' => NULL, 'refs' => [ 'CreateTableResponse$versionToken' => '<p>The version token of the table.</p>', 'DeleteTableRequest$versionToken' => '<p>The version token of the table.</p>', 'GetTableMetadataLocationResponse$versionToken' => '<p>The version token.</p>', 'GetTableResponse$versionToken' => '<p>The version token of the table.</p>', 'RenameTableRequest$versionToken' => '<p>The version token of the table.</p>', 'UpdateTableMetadataLocationRequest$versionToken' => '<p>The version token of the table. </p>', 'UpdateTableMetadataLocationResponse$versionToken' => '<p>The version token of the table.</p>', ], ], 'WarehouseLocation' => [ 'base' => NULL, 'refs' => [ 'GetTableMetadataLocationResponse$warehouseLocation' => '<p>The warehouse location.</p>', 'GetTableResponse$warehouseLocation' => '<p>The warehouse location of the table.</p>', ], ], ],];
