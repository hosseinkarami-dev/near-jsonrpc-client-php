<?php
declare(strict_types=1);

namespace Near\JsonRpc\Examples;

use Near\JsonRpc\Generated\Models\AccessKeyPermissionView;
use Near\JsonRpc\Generated\Models\AccessKeyPermissionViewGasKeyFunctionCallPayload;
use Near\JsonRpc\Generated\Models\NearToken;

require_once dirname(__DIR__) . '/vendor/autoload.php';

/** Build and round-trip one explicitly selected AccessKeyPermissionView union case. */
function createGasKeyFunctionCallPermission(): AccessKeyPermissionView
{
    return AccessKeyPermissionView::gasKeyFunctionCall(new AccessKeyPermissionViewGasKeyFunctionCallPayload(
        balance: new NearToken('1000000000000000000000000'),
        methodNames: ['transfer'],
        numNonces: 4,
        receiverId: 'wrap.near',
    ));
}

function runTypedUnionExample(): void
{
    $permission = createGasKeyFunctionCallPermission();
    $decoded = AccessKeyPermissionView::fromJson($permission->toJson());
    printf("Variant: %s\n%s\n", $decoded->variant(), $decoded->toJson());
}

if (PHP_SAPI === 'cli' && realpath($_SERVER['SCRIPT_FILENAME'] ?? '') === __FILE__) runTypedUnionExample();
