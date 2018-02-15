<div class="task">
    <div class="actions-wrapper">
        <div class="actions">

<!--            <i class="far fa-edit"></i>-->
<!--            <i class="far fa-trash-alt"></i>-->
<!--            <div class="save-wrapper">-->
<!--                <div class="save action"></div>-->
<!--                <i class="far fa-save"></i>-->
<!--            </div>-->
<!--            <div class="edit-wrapper">-->
<!--                <div class="edit action"></div>-->
<!--            </div>-->
<!--            <div class="delete-wrapper">-->
<!--                <div class="delete action"></div>-->
<!--            </div>-->
<!--            <div class="clear"></div>-->
            <div class="contextual">
                <a class="icon icon-edit" accesskey="e" href="/">Редактировать</a>
                <a class="icon icon-copy" href="/">Копировать</a>
                <a class="icon icon-del" rel="nofollow" data-method="delete" href="/">Удалить</a>
            </div>
        </div>
    </div>
    <div class="body">
        <div class="title-wrapper">
            <div class="nid">
                <?php print "#" . $data['id']; ?>
            </div>
            <div class="title">
                <?php print $data['title']; ?>
            </div>
        </div>
        <div class="info-task">
            <div class="info">
                <label>Опубликована:</label>
                <span><?php print $data['created']; ?></span>
            </div>
            <div class="info">
                <label>Приоритет:</label>
                <span><?php print $data['priority']; ?></span>
            </div>
            <div class="info">
                <label>Исполнитель:</label>
                <span><?php print $data['executor']; ?></span>
            </div>
        </div>
        <div class="description">
            <div class="title-desc">
                Описание задачи
            </div>
            <div class="text">
                <?php print $data['body']; ?>
            </div>
        </div>
        <div class="comments-wrapper">
            <div class="title-comment">
                Комментариии к задаче
            </div>
            <div class="comments">
                <?php
                    $nid = arg(1);
                    $result = db_select('comment')
                        ->fields('comment', array('cid'))
                        ->condition('nid', $nid, '=')
                        ->execute();

                    $cids = $result->fetchCol();
                    $comments=comment_load_multiple($cids);
                    ddl($comments);
                    foreach($comments as $comment): ?>

                     <div class="comment">
                         <div class="about-user">
                             <i class="fas fa-user-circle"></i>
                             <span> Создан пользователем <?php print $comment->name; ?> в <?php print date('d m Y H:i',$comment->created); ?> </span>
                         </div>
                         <div class="body">
                             <?php  print $comment->comment_body ["und"][0] ["value"]; ?>
                         </div>
                     </div>

                     <?php endforeach; ?>

            </div>
        </div>
        <?php print render(drupal_get_form('tasks_comment_form')); ?>
    </div>
</div>