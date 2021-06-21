<?php

declare(strict_types=1);

return [
    // Set to null to make Phan assume the version it"s running on is the
    // target one. Make sure to run phan through docker-compose.
    "target_php_version" => null,

    "directory_list" => [
        "."
    ],

    "exclude_analysis_directory_list" => [
        "vendor/"
    ],

    "plugins" => [
        "DuplicateConstantPlugin",
        "SleepCheckerPlugin",
        "NotFullyQualifiedUsagePlugin",
        "AvoidableGetterPlugin",
        "InvalidVariableIssetPlugin",
        "NonBoolBranchPlugin",
        "NonBoolInLogicalArithPlugin",
        "UnknownClassElementAccessPlugin",
        "AlwaysReturnPlugin",
        "DollarDollarPlugin",
        "UnreachableCodePlugin",
        "DuplicateArrayKeyPlugin",
        "PregRegexCheckerPlugin",
        "PrintfCheckerPlugin",
        "PHPUnitAssertionPlugin",
        "UseReturnValuePlugin",
        "UnknownElementTypePlugin",
        "DuplicateExpressionPlugin",
        "WhitespacePlugin",
        "InlineHTMLPlugin",
        "NoAssertPlugin",
        "HasPHPDocPlugin",
        "PHPDocToRealTypesPlugin",
        "PHPDocRedundantPlugin",
        "PreferNamespaceUsePlugin",
        "EmptyStatementListPlugin",
        "EmptyMethodAndFunctionPlugin",
        "LoopVariableReusePlugin",
        "RedundantAssignmentPlugin",
        "StrictComparisonPlugin",
        "StrictLiteralComparisonPlugin",
        "ShortArrayPlugin",
        "SimplifyExpressionPlugin",
        "RemoveDebugStatementPlugin",
        "UnsafeCodePlugin",
        "DeprecateAliasPlugin",
        "PHPDocInWrongCommentPlugin",
    ],

    "suppress_issue_types" => [
        "PhanPluginNoCommentOnClass",
        "PhanPluginRedundantReturnComment",
    ],
];
