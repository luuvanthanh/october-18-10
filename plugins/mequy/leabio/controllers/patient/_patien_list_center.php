 <div class="row">
    <div class="col-3">
       <label class="form-label">
          Giới tính </label>
       <input type="text" name="Patient[gender]" id="<?= $model->id ?>" value="<?= $model->gender ?>" class="form-control" disabled>
    </div>
    <div class="col-3">
       <label class="form-label">
          Chiều cao </label>
       <input type="text" name="Patient[height]" id="<?= $model->id ?>" value="<?= $model->height ?>" class="form-control" disabled>
    </div>
    <div class="col-3">
       <label class="form-label">
          Cân nặng </label>
       <input type="text" name="Patient[weight]" id="<?= $model->id ?>" value="<?= $model->weight ?>" class="form-control" disabled>
    </div>
    <div class="col-3">
       <label class="form-label">
          Địa chỉ </label>
       <input type="text" name="Patient[address]" id="<?= $model->id ?>" value="<?= $model->address ?>" class="form-control" disabled>
    </div>
 </div>
