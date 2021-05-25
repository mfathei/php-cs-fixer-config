<?php

/**
 * Config for PHP-CS-Fixer ver3.
 */
$rules = [
    '@PhpCsFixer' => true,
    '@PhpCsFixer:risky' => true,
    // additional rules
    'array_syntax' => ['syntax' => 'short'],
    'binary_operator_spaces' => true,
    'blank_line_after_opening_tag' => true,
    'blank_line_before_statement' => [
        'statements' => ['return'],
    ],
    'cast_spaces' => true,
    'concat_space' => ['spacing' => 'none'],
    'declare_equal_normalize' => true,
    'function_typehint_space' => true,
    //    'hash_to_slash_comment' => true,//-----------------
    'heredoc_to_nowdoc' => true,
    'include' => true,
    'lowercase_cast' => true,
    'magic_constant_casing' => true,
    'method_argument_space' => true,
    //    'method_separation' => true,//--------------------
    'native_function_casing' => true,
    'no_alias_functions' => true,
    'no_blank_lines_after_class_opening' => true,
    'no_blank_lines_after_phpdoc' => true,
    'no_empty_phpdoc' => true,
    'no_empty_statement' => true,
    //    'no_extra_consecutive_blank_lines' => ['tokens' => [//-------------------------------
    //        'extra',
    //        'use',
    //        'use_trait',
    //    ]],
    'no_leading_import_slash' => true,
    'no_leading_namespace_whitespace' => true,
    'no_mixed_echo_print' => true,
    'no_multiline_whitespace_around_double_arrow' => true,
    //    'no_multiline_whitespace_before_semicolons' => true,//-------------------------
    'no_short_bool_cast' => true,
    'no_singleline_whitespace_before_semicolons' => true,
    'no_spaces_around_offset' => ['positions' => ['inside']],
    'no_trailing_comma_in_list_call' => true,
    'no_trailing_comma_in_singleline_array' => true,
    'no_unneeded_control_parentheses' => true,
    'no_unreachable_default_argument_value' => true,
    'no_unused_imports' => true,
    'no_useless_return' => true,
    'no_whitespace_before_comma_in_array' => true,
    'no_whitespace_in_blank_line' => true,
    'normalize_index_brace' => true,
    'not_operator_with_successor_space' => true,
    'object_operator_without_whitespace' => true,
    //    'ordered_imports' => ['sortAlgorithm' => 'alpha'],//----------------------
    'phpdoc_add_missing_param_annotation' => true,
    'phpdoc_align' => true,
    'phpdoc_indent' => true,
    //    'phpdoc_inline_tag' => true,//-------------------
    'phpdoc_no_access' => true,
    'phpdoc_no_alias_tag' => ['replacements' => [
        'type' => 'var',
    ]],
    'phpdoc_no_package' => true,
    'phpdoc_no_useless_inheritdoc' => true,
    'phpdoc_order' => true,
    'phpdoc_scalar' => true,
    'phpdoc_single_line_var_spacing' => true,
    'phpdoc_summary' => true,
    'phpdoc_to_comment' => true,
    'phpdoc_trim' => true,
    'phpdoc_types' => true,
    'phpdoc_var_without_name' => true,
    'self_accessor' => true,
    'short_scalar_cast' => true,
    'simplified_null_return' => false,
    'single_blank_line_before_namespace' => true,
    'single_quote' => true,
    'space_after_semicolon' => true,
    'standardize_not_equals' => true,
    'ternary_operator_spaces' => true,
    //    'trailing_comma_in_multiline_array' => true,//---------------------
    'trim_array_spaces' => true,
    'unary_operator_spaces' => true,
    'whitespace_after_comma_in_array' => true,
    'multiline_whitespace_before_semicolons' => false,
    'no_superfluous_phpdoc_tags' => false,
];

$excludes = [
    // add exclude project directory
    'bootstrap/cache',
    'node_modules',
    'storage',
    'vendor',
];

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__)
    ->exclude($excludes)
    ->notName('README.md')
    ->notName('*.blade.php')
    ->notName('*.xml')
    ->notName('*.yml');

return (new PhpCsFixer\Config())
    ->setRiskyAllowed(true)
    ->setRules($rules)
    ->setFinder($finder);
