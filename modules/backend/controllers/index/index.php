<?= Form::open(['class'=>'layout-relative dashboard-container']) ?>
    <div id="dashReportContainer" class="report-container loading">

        <!-- Loading -->
        <div class="loading-indicator-container">
            <div class="loading-indicator indicator-center">
                <span></span>
                <div><?= e(trans('backend::lang.list.loading')) ?></div>
            </div>
        </div>

    </div>
<?= Form::close() ?>

<script>
    jQuery(function() {
        oc.ajax('onInitReportContainer').done(function() {
            document.getElementById('dashReportContainer').classList.remove('loading');
        });
    });
</script>
