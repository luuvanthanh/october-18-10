<?php

use Mequy\Leabio\Models\Patient;
use Illuminate\Support\Facades\Request;

Block::put('breadcrumb') ?>
<ul>
    <li><a href="<?= Backend::url('mequy/leabio/patient') ?>">Patient</a></li>
    <li><?= e($this->pageTitle) ?></li>
</ul>
<?php Block::endPut() ?>

<?php if (!$this->fatalError) : ?>

    <?= Form::open(['class' => 'layout']) ?>

    <div class="layout-row">
        <?php
        $id = Request::segment(count(Request::segments()));
        $object = Patient::find($id);
        ?>
        <!-- start detail patient -->
        <!-- <div class="row">
            <div class="col-2">
                <div class="card" style="width: 18rem;">
                    <div class="" style="display: flex;justify-content:center;">
                        <img style="width: 100px;height: 100px;border-radius: 50%;object-fit: cover;" src="https://images.unsplash.com/photo-1527980965255-d3b416303d12?auto=format&fit=crop&q=80&w=2080&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="Card image cap">
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-center">
                            <h5 class="card-title">Nguyễn Khánh Hưng</h5>
                        </div>
                        <div class="d-flex justify-content-center">
                            <p class="card-text">Giới tính</p>&nbsp;
                            <h5 class="card-title">Nam</h5>
                        </div>
                        <div class="d-flex justify-content-center">
                            <p class="card-text">Chiều cao</p>&nbsp;
                            <h5 class="card-title">170 cm</h5>
                        </div>
                        <div class="d-flex justify-content-center">
                            <p class="card-text">Cân nặng</p>&nbsp;
                            <h5 class="card-title">58 kg</h5>
                        </div>
                        <div class="d-flex justify-content-center">
                            <h5 class="card-text">800 Điện Biên Phủ</h5>&nbsp;
                        </div>
                        <div class="d-flex justify-content-center mt-3">
                            <h5 class="card-text">(+84)23659874</h5>&nbsp;
                        </div>
                    </div>
                </div>
            </div>
            <div class="card text-center col-10">
                <div class="card-header">
                    Số khám bệnh: <span>45867</span>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-4">
                            <p class="card-text">Tên</p>
                            <h5 class="card-title">20 đến 25 tuổi</h5>
                        </div>
                        <div class="col-4">
                            <p class="card-text">Thu nhập hàng tháng</p>
                            <h5 class="card-title">20 triệu đồng ~ 25 triêu đồng</h5>
                        </div>
                        <div class="col-4">
                            <p class="card-text">Thành viên gia đình</p>
                            <h5 class="card-title">5</h5>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-4">
                            <p class="card-text">Giới tính</p>
                            <h5 class="card-title">Nam</h5>
                        </div>
                        <div class="col-4">
                            <p class="card-text">Chiều cao</p>
                            <h5 class="card-title">170 cm</h5>
                        </div>
                        <div class="col-4">
                            <p class="card-text">Cân nặng</p>
                            <h5 class="card-title">58 kg</h5>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-4">
                            <p class="card-text">Địa chỉ</p>
                            <h5 class="card-title">Da Nang</h5>
                        </div>
                        <div class="col-4">
                            <p class="card-text">Số điện thoại</p>
                            <h5 class="card-title">0123456789</h5>
                        </div>
                        <div class="col-4">
                            <p class="card-text">Đi làm</p>
                            <h5 class="card-title">Có</h5>
                        </div>
                    </div>

                </div>
            </div>
        </div> -->
        <!-- end detail patient -->
        <!-- start tab -->
        <!-- <div class="row">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a style="cursor:pointer" class="nav-link active" onclick="onChangeTab(this)" aria-current="page">Kiểm tra sức khỏe</a>
                </li>
                <li class="nav-item">
                    <a style="cursor:pointer" class="nav-link" onclick="onChangeTab(this)">Kiểm tra natri</a>
                </li>
                <li class="nav-item">
                    <a style="cursor:pointer" class="nav-link" onclick="onChangeTab(this)">Ăn uống</a>
                </li>
                <li class="nav-item">
                    <a style="cursor:pointer" class="nav-link" onclick="onChangeTab(this)">Vận động</a>
                </li>
            </ul>
            <ul class="list-group">
                <li class="list-group-item">Cau hoi 1</li>
                <li class="list-group-item">Cau hoi 2</li>
                <li class="list-group-item">Cau hoi 3</li>
                <li class="list-group-item">Cau hoi 4</li>
                <li class="list-group-item">Cau hoi 5</li>
            </ul>
        </div> -->
        <!-- end tab -->
        <?= $this->formRenderPreview() ?>
    </div>

    <div class="form-buttons">
        <div class="loading-indicator-container">
            <button type="submit" data-request="onSave" data-request-data="redirect:0" data-hotkey="ctrl+s, cmd+s" data-load-indicator="<?= e(trans('backend::lang.form.saving')) ?>" class="btn btn-primary">
                <?= e(trans('backend::lang.form.save')) ?>
            </button>
            <button type="button" data-request="onSave" data-request-data="close:1" data-hotkey="ctrl+enter, cmd+enter" data-load-indicator="<?= e(trans('backend::lang.form.saving')) ?>" class="btn btn-default">
                <?= e(trans('backend::lang.form.save_and_close')) ?>
            </button>
            <button type="button" class="oc-icon-trash-o btn-icon danger pull-right" data-request="onDelete" data-load-indicator="<?= e(trans('backend::lang.form.deleting')) ?>" data-request-confirm="<?= e(trans('backend::lang.form.confirm_delete')) ?>">
            </button>

            <span class="btn-text">
                <?= e(trans('backend::lang.form.or')) ?> <a href="<?= Backend::url('mequy/leabio/patient') ?>"><?= e(trans('backend::lang.form.cancel')) ?></a>
            </span>
        </div>
    </div>
    <?= Form::close() ?>

<?php else : ?>
    <p class="flash-message static error"><?= e(trans($this->fatalError)) ?></p>
    <p><a href="<?= Backend::url('mequy/leabio/patient') ?>" class="btn btn-default"><?= e(trans('backend::lang.form.return_to_list')) ?></a></p>
<?php endif ?>
<script>
    function onChangeTab(element) {
        var menuItems = document.getElementsByClassName("nav-link");
        for (var i = 0; i < menuItems.length; i++) {
            menuItems[i].classList.remove("active");
        }
        element.classList.add("active");
    }
</script>