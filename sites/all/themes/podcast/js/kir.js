(function ($) {
    Drupal.behaviors.kir = {
        attach: function (context, settings) {
            $('.page-task-new select').select2();
            $('.section-task select').select2();
            $('.view-tasks select').select2();
        }}
})(jQuery)