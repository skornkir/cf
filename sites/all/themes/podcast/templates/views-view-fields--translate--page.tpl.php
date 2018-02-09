<?php

/**
 * @file
 * Default simple view template to all the fields as a row.
 *
 * - $view: The view in use.
 * - $fields: an array of $field objects. Each one contains:
 *   - $field->content: The output of the field.
 *   - $field->raw: The raw data for the field, if it exists. This is NOT output safe.
 *   - $field->class: The safe class id to use.
 *   - $field->handler: The Views field handler object controlling this field. Do not use
 *     var_export to dump this object, as it can't handle the recursion.
 *   - $field->inline: Whether or not the field should be inline.
 *   - $field->inline_html: either div or span based on the above flag.
 *   - $field->wrapper_prefix: A complete wrapper containing the inline_html to use.
 *   - $field->wrapper_suffix: The closing tag for the wrapper.
 *   - $field->separator: an optional separator that may appear before a field.
 *   - $field->label: The wrap label text to use.
 *   - $field->label_html: The full HTML of the label to use including
 *     configured element type.
 * - $row: The raw result object from the query, with all data it fetched.
 *
 * @ingroup views_templates
 */
?>
<?php //ddl($fields); foreach ($fields as $id => $field): ?>
<!--    --><?php //if (!empty($field->separator)): ?>
<!--        --><?php //print $field->separator; ?>
<!--    --><?php //endif; ?>
<!--    --><?php //print $field->wrapper_prefix; ?>
<!--    --><?php //print $field->label_html; ?>
<!--    --><?php //print $field->content; ?>
<!--    --><?php //print $field->wrapper_suffix; ?>
<?php //endforeach; ?>

<div class="title">
    <?php if (!empty($fields['title']->separator)): ?>
        <?php print $fields['title']->separator; ?>
    <?php endif; ?>
    <?php print $fields['title']->wrapper_prefix; ?>
    <?php print $fields['title']->label_html; ?>
    <?php print $fields['title']->content; ?>
    <div class="line"></div>
    <?php print $fields['title']->wrapper_suffix; ?>
</div>
<div class="content-views">
    <div class="left">
        <?php if (!empty($fields['field_image_translate']->separator)): ?>
            <?php print $fields['field_image_translate']->separator; ?>
        <?php endif; ?>
        <?php print $fields['field_image_translate']->wrapper_prefix; ?>
        <?php print $fields['field_image_translate']->label_html; ?>
        <?php print $fields['field_image_translate']->content; ?>
        <?php print $fields['field_image_translate']->wrapper_suffix; ?>
    </div>
    <div class="right">
        <?php if (!empty($fields['body']->separator)): ?>
            <?php print $fields['body']->separator; ?>
        <?php endif; ?>
        <?php print $fields['body']->wrapper_prefix; ?>
        <?php print $fields['body']->label_html; ?>
        <?php print $fields['body']->content; ?>
        <?php print $fields['body']->wrapper_suffix; ?>
        <div class="shadow"></div>
    </div>
</div>
