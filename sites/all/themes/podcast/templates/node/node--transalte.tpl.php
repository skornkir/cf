<?php
/**
 * @file
 * Returns the HTML for a node.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728164
 */
?>
<article class="<?php print $classes; ?> clearfix node-<?php print $node->nid; ?>"<?php print $attributes; ?>>


    <div class="title">
        <?php print $title; ?>
        <div class="line"></div>
    </div>

    <div class="img">
        <?php print render($content['field_image_translate']); ?>
    </div>

    <div class="body">
        <?php print render($content['body']); ?>
    </div>
    <!--    <div class="youtube">-->
    <!--        --><?php //print render($content['field_youtube']); ?>
    <!--    </div>-->


    <!--    --><?php
    //    // We hide the comments and links now so that we can render them later.
    //    hide($content['comments']);
    //    hide($content['links']);
    //    print render($content);
    //    ?>
    <!---->
    <!--    --><?php //print render($content['links']); ?>
    <!---->
    <!--    --><?php //print render($content['comments']); ?>

</article>
