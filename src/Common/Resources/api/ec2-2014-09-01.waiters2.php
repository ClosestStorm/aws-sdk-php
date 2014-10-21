<?php return [
  'version' => 2,
  'waiters' => [
    'BundleTaskComplete' => [
      'delay' => 15,
      'operation' => 'DescribeBundleTasks',
      'maxAttempts' => 40,
      'acceptors' => [
        [
          'expected' => 'complete',
          'matcher' => 'pathAll',
          'state' => 'success',
          'argument' => 'BundleTasks[].State',
        ],
        [
          'expected' => 'failed',
          'matcher' => 'pathAny',
          'state' => 'failure',
          'argument' => 'BundleTasks[].State',
        ],
      ],
    ],
    'ConversionTaskCancelled' => [
      'delay' => 15,
      'operation' => 'DescribeConversionTasks',
      'maxAttempts' => 40,
      'acceptors' => [
        [
          'expected' => 'cancelled',
          'matcher' => 'pathAll',
          'state' => 'success',
          'argument' => 'ConversionTasks[].State',
        ],
      ],
    ],
    'ConversionTaskCompleted' => [
      'delay' => 15,
      'operation' => 'DescribeConversionTasks',
      'maxAttempts' => 40,
      'acceptors' => [
        [
          'expected' => 'completed',
          'matcher' => 'pathAll',
          'state' => 'success',
          'argument' => 'ConversionTasks[].State',
        ],
        [
          'expected' => 'cancelled',
          'matcher' => 'pathAny',
          'state' => 'failure',
          'argument' => 'ConversionTasks[].State',
        ],
        [
          'expected' => 'cancelling',
          'matcher' => 'pathAny',
          'state' => 'failure',
          'argument' => 'ConversionTasks[].State',
        ],
      ],
    ],
    'ConversionTaskDeleted' => [
      'delay' => 15,
      'operation' => 'DescribeConversionTasks',
      'maxAttempts' => 40,
      'acceptors' => [
        [
          'expected' => 'deleted',
          'matcher' => 'pathAll',
          'state' => 'success',
          'argument' => 'ConversionTasks[].State',
        ],
      ],
    ],
    'CustomerGatewayAvailable' => [
      'delay' => 15,
      'operation' => 'DescribeCustomerGateways',
      'maxAttempts' => 40,
      'acceptors' => [
        [
          'expected' => 'available',
          'matcher' => 'pathAll',
          'state' => 'success',
          'argument' => 'CustomerGateways[].State',
        ],
        [
          'expected' => 'deleted',
          'matcher' => 'pathAny',
          'state' => 'failure',
          'argument' => 'CustomerGateways[].State',
        ],
        [
          'expected' => 'deleting',
          'matcher' => 'pathAny',
          'state' => 'failure',
          'argument' => 'CustomerGateways[].State',
        ],
      ],
    ],
    'ExportTaskCancelled' => [
      'delay' => 15,
      'operation' => 'DescribeExportTasks',
      'maxAttempts' => 40,
      'acceptors' => [
        [
          'expected' => 'cancelled',
          'matcher' => 'pathAll',
          'state' => 'success',
          'argument' => 'ExportTasks[].State',
        ],
      ],
    ],
    'ExportTaskCompleted' => [
      'delay' => 15,
      'operation' => 'DescribeExportTasks',
      'maxAttempts' => 40,
      'acceptors' => [
        [
          'expected' => 'completed',
          'matcher' => 'pathAll',
          'state' => 'success',
          'argument' => 'ExportTasks[].State',
        ],
      ],
    ],
    'InstanceRunning' => [
      'delay' => 15,
      'operation' => 'DescribeInstances',
      'maxAttempts' => 40,
      'acceptors' => [
        [
          'expected' => 'running',
          'matcher' => 'pathAll',
          'state' => 'success',
          'argument' => 'Reservations[].Instances[].State.Name',
        ],
        [
          'expected' => 'shutting-down',
          'matcher' => 'pathAny',
          'state' => 'failure',
          'argument' => 'Reservations[].Instances[].State.Name',
        ],
        [
          'expected' => 'terminated',
          'matcher' => 'pathAny',
          'state' => 'failure',
          'argument' => 'Reservations[].Instances[].State.Name',
        ],
        [
          'expected' => 'stopping',
          'matcher' => 'pathAny',
          'state' => 'failure',
          'argument' => 'Reservations[].Instances[].State.Name',
        ],
      ],
    ],
    'InstanceStopped' => [
      'delay' => 15,
      'operation' => 'DescribeInstances',
      'maxAttempts' => 40,
      'acceptors' => [
        [
          'expected' => 'stopped',
          'matcher' => 'pathAll',
          'state' => 'success',
          'argument' => 'Reservations[].Instances[].State.Name',
        ],
        [
          'expected' => 'pending',
          'matcher' => 'pathAny',
          'state' => 'failure',
          'argument' => 'Reservations[].Instances[].State.Name',
        ],
        [
          'expected' => 'terminated',
          'matcher' => 'pathAny',
          'state' => 'failure',
          'argument' => 'Reservations[].Instances[].State.Name',
        ],
      ],
    ],
    'InstanceTerminated' => [
      'delay' => 15,
      'operation' => 'DescribeInstances',
      'maxAttempts' => 40,
      'acceptors' => [
        [
          'expected' => 'terminated',
          'matcher' => 'pathAll',
          'state' => 'success',
          'argument' => 'Reservations[].Instances[].State.Name',
        ],
        [
          'expected' => 'pending',
          'matcher' => 'pathAny',
          'state' => 'failure',
          'argument' => 'Reservations[].Instances[].State.Name',
        ],
        [
          'expected' => 'stopping',
          'matcher' => 'pathAny',
          'state' => 'failure',
          'argument' => 'Reservations[].Instances[].State.Name',
        ],
      ],
    ],
    'SnapshotCompleted' => [
      'delay' => 15,
      'operation' => 'DescribeSnapshots',
      'maxAttempts' => 40,
      'acceptors' => [
        [
          'expected' => 'completed',
          'matcher' => 'pathAll',
          'state' => 'success',
          'argument' => 'Snapshots[].State',
        ],
      ],
    ],
    'SubnetAvailable' => [
      'delay' => 15,
      'operation' => 'DescribeSubnets',
      'maxAttempts' => 40,
      'acceptors' => [
        [
          'expected' => 'available',
          'matcher' => 'pathAll',
          'state' => 'success',
          'argument' => 'Subnets[].State',
        ],
      ],
    ],
    'VolumeAvailable' => [
      'delay' => 15,
      'operation' => 'DescribeVolumes',
      'maxAttempts' => 40,
      'acceptors' => [
        [
          'expected' => 'available',
          'matcher' => 'pathAll',
          'state' => 'success',
          'argument' => 'Volumes[].State',
        ],
        [
          'expected' => 'deleted',
          'matcher' => 'pathAny',
          'state' => 'failure',
          'argument' => 'Volumes[].State',
        ],
      ],
    ],
    'VolumeDeleted' => [
      'delay' => 15,
      'operation' => 'DescribeVolumes',
      'maxAttempts' => 40,
      'acceptors' => [
        [
          'expected' => 'deleted',
          'matcher' => 'pathAll',
          'state' => 'success',
          'argument' => 'Volumes[].State',
        ],
      ],
    ],
    'VolumeInUse' => [
      'delay' => 15,
      'operation' => 'DescribeVolumes',
      'maxAttempts' => 40,
      'acceptors' => [
        [
          'expected' => 'in-use',
          'matcher' => 'pathAll',
          'state' => 'success',
          'argument' => 'Volumes[].State',
        ],
        [
          'expected' => 'deleted',
          'matcher' => 'pathAny',
          'state' => 'failure',
          'argument' => 'Volumes[].State',
        ],
      ],
    ],
    'VpcAvailable' => [
      'delay' => 15,
      'operation' => 'DescribeVpcs',
      'maxAttempts' => 40,
      'acceptors' => [
        [
          'expected' => 'available',
          'matcher' => 'pathAll',
          'state' => 'success',
          'argument' => 'Vpcs[].State',
        ],
      ],
    ],
    'VpnConnectionAvailable' => [
      'delay' => 15,
      'operation' => 'DescribeVpnConnections',
      'maxAttempts' => 40,
      'acceptors' => [
        [
          'expected' => 'available',
          'matcher' => 'pathAll',
          'state' => 'success',
          'argument' => 'VpnConnections[].State',
        ],
        [
          'expected' => 'deleting',
          'matcher' => 'pathAny',
          'state' => 'failure',
          'argument' => 'VpnConnections[].State',
        ],
        [
          'expected' => 'deleted',
          'matcher' => 'pathAny',
          'state' => 'failure',
          'argument' => 'VpnConnections[].State',
        ],
      ],
    ],
    'VpnConnectionDeleted' => [
      'delay' => 15,
      'operation' => 'DescribeVpnConnections',
      'maxAttempts' => 40,
      'acceptors' => [
        [
          'expected' => 'deleted',
          'matcher' => 'pathAll',
          'state' => 'success',
          'argument' => 'VpnConnections[].State',
        ],
        [
          'expected' => 'pending',
          'matcher' => 'pathAny',
          'state' => 'failure',
          'argument' => 'VpnConnections[].State',
        ],
      ],
    ],
  ],
];
