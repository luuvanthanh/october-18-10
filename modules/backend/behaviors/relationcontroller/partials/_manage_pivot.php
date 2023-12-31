<div id="relationManagePivotPopup">
    <?= Form::open() ?>
        <input type="hidden" name="_relation_field" value="<?= $relationField ?>" />

        <div class="modal-header">
            <h4 class="modal-title"><?= e($relationManageTitle) ?></h4>
            <button type="button" class="btn-close" data-dismiss="popup"></button>
        </div>
        <?php if (!$relationSearchWidget): ?>
            <div class="modal-body py-3">
                <p class="mb-0 text-muted"><?= e(trans('backend::lang.relation.help')) ?></p>
            </div>
        <?php endif ?>
        <div class="list-flush">
            <?php if ($relationSearchWidget): ?>
                <?= $relationSearchWidget->render() ?>
            <?php endif ?>
            <?php if ($relationManageFilterWidget): ?>
                <?= $relationManageFilterWidget->render() ?>
            <?php endif ?>
            <?= $relationManageWidget->render() ?>
        </div>

        <div class="modal-footer">
            <?php if ($relationManageWidget->showCheckboxes): ?>
                <button
                    type="button"
                    class="btn btn-primary"
                    data-control="popup"
                    data-handler="onRelationManageAddPivot"
                    data-size="<?= $this->popupSize ?>"
                    data-dismiss="popup"
                    data-stripe-load-indicator>
                    <?= e(trans('backend::lang.relation.add_selected')) ?>
                </button>
            <?php endif ?>
            <button
                type="button"
                class="btn btn-default"
                data-dismiss="popup">
                <?= e(trans('backend::lang.relation.cancel')) ?>
            </button>
        </div>
    <?= Form::close() ?>
</div>
<script>
    setTimeout(
        function() { $('#relationManagePivotPopup input.form-control:first').focus() },
        310
    );
</script>
