<?php //ddl($fields); foreach ($fields as $id => $field): ?>
<!--    --><?php //if (!empty($field->separator)): ?>
<!--        --><?php //print $field->separator; ?>
<!--    --><?php //endif; ?>
<!---->
<!--    --><?php //print $field->wrapper_prefix; ?>
<!--    --><?php //print $field->label_html; ?>
<!--    --><?php //print $field->content; ?>
<!--    --><?php //print $field->wrapper_suffix; ?>
<?php //endforeach; ?>

<div class="last-podcast">
    <div class="left">
        <div class="title-block">
            Последний подкаст
        </div>
        <div class="title-podcast">
            <?php print $fields['title']->content; ?>
        </div>
        <div class="desc-podcast">
            <?php print $fields['body']->content; ?>
        </div>
    </div>
    <div class="right">
        <?php print $fields['field_image_episode']->content; ?>
    </div>
</div>