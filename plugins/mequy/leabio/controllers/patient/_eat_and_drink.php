<div class="control-list">
    <table class="table data" data-control="rowlink">
        <thead>
            <tr>
                <th><span>No</span></th>
                <th><span>Thức ăn</span></th>
                <th><span>Đơn vị</span></th>
                <th><span>Calo</span></th>
                <th><span>Béo</span></th>
                <th><span>Đường</span></th>
                <th><span>Đạm</span></th>
                <th><span>Xơ</span></th>
                <th><span>Hình ảnh</span></th>
            </tr>
        </thead>
        <tbody>
            <tr class="row">
                <td class="col-12">BUỔI SÁNG</td>
            </tr>
            <?php foreach ($model->meals as $key => $meal) : ?>

                <tr>
                    <td><?= $key + 1 ?></td>
                    <td><?= $meal->name  ?></td>
                    <td><?= $meal->pivot->quantity . ' ' . $meal->unit ?></td>
                    <td><?= $meal->calo * $meal->pivot->quantity ?></td>
                    <td><?= $meal->fat * $meal->pivot->quantity ?></td>
                    <td><?= $meal->road * $meal->pivot->quantity ?></td>
                    <td><?= $meal->protein * $meal->pivot->quantity ?></td>
                    <td><?= $meal->fiber * $meal->pivot->quantity ?></td>
                    <td>&nbsp;</td>
                </tr>
            <?php endforeach; ?>
            <tr class="row">
                <td class="col-12">BUỔI TRƯA</td>
            </tr>
            <?php foreach ($model->meals as $key => $meal) : ?>

                <tr>
                    <td><?= $key + 1 ?></td>
                    <td><?= $meal->name  ?></td>
                    <td><?= $meal->pivot->quantity . ' ' . $meal->unit ?></td>
                    <td><?= $meal->calo * $meal->pivot->quantity ?></td>
                    <td><?= $meal->fat * $meal->pivot->quantity ?></td>
                    <td><?= $meal->road * $meal->pivot->quantity ?></td>
                    <td><?= $meal->protein * $meal->pivot->quantity ?></td>
                    <td><?= $meal->fiber * $meal->pivot->quantity ?></td>
                    <td>&nbsp;</td>
                </tr>
            <?php endforeach; ?>
            </body>
    </table>
    <div class="list-footer">
        <div class="list-pagination">
            <div class="control-pagination">
                <span class="page-iteration">1-5 of 20</span>
                <a href="#" class="page-back" title="Previous page"></a><a href="#" class="page-next" title="Next page"></a>
            </div>
        </div>
    </div>
</div>