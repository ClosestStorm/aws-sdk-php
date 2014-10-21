<?php return [
  'version' => 2,
  'waiters' => [
    'DBInstanceAvailable' => [
      'delay' => 30,
      'operation' => 'DescribeDBInstances',
      'maxAttempts' => 60,
      'acceptors' => [
        [
          'expected' => 'available',
          'matcher' => 'pathAll',
          'state' => 'success',
          'argument' => 'DBInstances[].DBInstanceStatus',
        ],
        [
          'expected' => 'deleted',
          'matcher' => 'pathAny',
          'state' => 'failure',
          'argument' => 'DBInstances[].DBInstanceStatus',
        ],
        [
          'expected' => 'deleting',
          'matcher' => 'pathAny',
          'state' => 'failure',
          'argument' => 'DBInstances[].DBInstanceStatus',
        ],
        [
          'expected' => 'failed',
          'matcher' => 'pathAny',
          'state' => 'failure',
          'argument' => 'DBInstances[].DBInstanceStatus',
        ],
        [
          'expected' => 'incompatible-restore',
          'matcher' => 'pathAny',
          'state' => 'failure',
          'argument' => 'DBInstances[].DBInstanceStatus',
        ],
        [
          'expected' => 'incompatible-parameters',
          'matcher' => 'pathAny',
          'state' => 'failure',
          'argument' => 'DBInstances[].DBInstanceStatus',
        ],
        [
          'expected' => 'incompatible-parameters',
          'matcher' => 'pathAny',
          'state' => 'failure',
          'argument' => 'DBInstances[].DBInstanceStatus',
        ],
        [
          'expected' => 'incompatible-restore',
          'matcher' => 'pathAny',
          'state' => 'failure',
          'argument' => 'DBInstances[].DBInstanceStatus',
        ],
      ],
    ],
    'DBInstanceDeleted' => [
      'delay' => 30,
      'operation' => 'DescribeDBInstances',
      'maxAttempts' => 60,
      'acceptors' => [
        [
          'expected' => 'deleted',
          'matcher' => 'pathAll',
          'state' => 'success',
          'argument' => 'DBInstances[].DBInstanceStatus',
        ],
        [
          'expected' => 'creating',
          'matcher' => 'pathAny',
          'state' => 'failure',
          'argument' => 'DBInstances[].DBInstanceStatus',
        ],
        [
          'expected' => 'modifying',
          'matcher' => 'pathAny',
          'state' => 'failure',
          'argument' => 'DBInstances[].DBInstanceStatus',
        ],
        [
          'expected' => 'rebooting',
          'matcher' => 'pathAny',
          'state' => 'failure',
          'argument' => 'DBInstances[].DBInstanceStatus',
        ],
        [
          'expected' => 'resetting-master-credentials',
          'matcher' => 'pathAny',
          'state' => 'failure',
          'argument' => 'DBInstances[].DBInstanceStatus',
        ],
      ],
    ],
  ],
];
