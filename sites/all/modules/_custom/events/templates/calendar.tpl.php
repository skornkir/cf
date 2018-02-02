<div id="content" class="we-main   we-calendar-view we-default-month col-md-9">
    <div id="primary" class="content-area twentysixteen">
        <main id="main" class="site-main" role="main">
            <h1 class="page-title">События</h1>
            <div class="we-calendar -style" data-id="9492" id="9492">
                <div id="calendar" class="fc fc-ltr fc-unthemed">
                    <div class="fc-toolbar">
                        <div class="fc-left"><h2><?php print date("F Y", $data['ts']); ?></h2></div>
                        <div class="fc-right">
                            <div class="fc-button-group">
                                <button type="button" class="fc-prev-button fc-button fc-state-default fc-corner-left">
                                    <span class="fc-icon fc-icon-left-single-arrow"></span></button>
                                <button type="button" class="fc-next-button fc-button fc-state-default fc-corner-right">
                                    <span class="fc-icon fc-icon-right-single-arrow"></span></button>
                            </div>
                        </div>
                        <div class="fc-center"></div>
                        <div class="fc-clear"></div>
                    </div>
                    <div class="fc-view-container" style="">
                        <div class="fc-view fc-month-view fc-basic-view" style="">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="fc-day-header fc-widget-header fc-mon">ПН</th>
                                        <th class="fc-day-header fc-widget-header fc-tue">ВТ</th>
                                        <th class="fc-day-header fc-widget-header fc-wed">СР</th>
                                        <th class="fc-day-header fc-widget-header fc-thu">ЧТ</th>
                                        <th class="fc-day-header fc-widget-header fc-fri">ПТ</th>
                                        <th class="fc-day-header fc-widget-header fc-sat">СБ</th>
                                        <th class="fc-day-header fc-widget-header fc-sun">ВС</th>
                                    </tr>
                                </thead>
                                <tbody class="fc-body">
                                <?php $i = 0; foreach($data['days'] as $day => $day_info): $i++ ?>
                                    <?php if($i % 7 == 1): ?>
                                        <tr>
                                    <?php endif;?>
                                        <td class="fc-day-number fc-mon fc-past
                                            <?php if($day_info['is_current_month'] == false){ print 'noactive-mohth ';}?>
                                            <?php if($day_info['today']){ print 'today';}?>"
                                            data-date="<?php print $day_info['date']; ?>">
                                            <?php if(!empty($day_info['events'])) : ?>
                                                <div class="events">
                                                    <?php foreach($day_info['events'] as $event): ddl($event); ?>
                                                        <div class="event">
                                                            <div class="preview"><?php print $event['title']; ?></div>
                                                            <div class="extend-data-wrapper">
                                                                <div class="extend-data">
                                                                    <div class="title"><?php print $event['title']; ?></div>
                                                                    <div class="day"><?php print $day; ?></div>
                                                                    <div class="place"><?php print $event['place']; ?></div>
                                                                    <div class="body"><?php print $event['body']; ?></div>
                                                                    <i class="fab fa-amazon-pay"></i>
                                                                </div>
                                                                <div class="triangle"></div>
                                                            </div>
                                                        </div>
                                                    <?php endforeach; ?>
                                                </div>
                                            <?php endif; ?>
                                                <div class="content">
                                                    <div class="day"><?php print $day_info['day']; ?></div>
                                                </div>

                                        </td>
                                    <?php if($i % 7 == 7): ?>
                                         </tr>
                                    <?php endif;?>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="ajax_url" value="http://exthemes.net/wooevents/wp-admin/admin-ajax.php">
            </div>


        </main>
    </div>
</div>