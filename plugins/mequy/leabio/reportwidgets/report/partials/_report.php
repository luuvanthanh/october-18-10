<!-- <div class="report-widget">
    <h3><?= e($this->property('title')) ?></h3>

    <?php if (!isset($error)): ?>
        <p>This is the default partial content.</p>
    <?php else: ?>
        <p class="flash-message static warning"><?= e($error) ?></p>
    <?php endif ?>
</div> -->
<div class="report-widget">
    <h3>Traffic sources</h3>

    <div
        class="control-chart"
        data-control="chart-pie"
        data-size="200"
        data-center-text="180">
        <ul>
            <li>Direct <span>1000</span></li>
            <li>Social networks <span>800</span></li>
        </ul>
    </div>
</div>
<div
    data-control="chart-line"
    data-time-mode="weeks"
    style="height: 200px"
    data-chart-options="xaxis: {mode: 'time'}">
    <span
        data-chart="dataset"
        data-set-color="#008dc9"
        data-set-data="[1478029882000, 340], [1478116282000, 540], [1478202682000, 440], [1478289082000, 360], [1478375482000, 220]"
        data-set-name="Visits">
    </span>
</div>