 <div class="row">
    <div class="col-3">
       <label class="form-label">Tên bệnh nhân </label>
       <input type="text" name="Patient[name]" id="<?= $model->id ?>" value="<?= $model->name ?>" class="form-control" disabled>
    </div>
    <div class="col-3">
       <label class="form-label">Tuổi </label>
       <input type="text" name="Patient[age]" id="<?= $model->id ?>" value="<?= $model->age ?>" class="form-control" disabled>
    </div>
    <div class="col-3">
       <label class="form-label">Thu nhập hàng tháng </label>
       <input type="text" name="Patient[monthly_income]" id="<?= $model->id ?>" value="<?= $model->monthly_income ?>" class="form-control" disabled>
    </div>
    <div class="col-3">
       <label class="form-label">Thành viên gia đình </label>
       <input type="text" name="Patient[family_members]" id="<?= $model->id ?>" value="<?= $model->family_members ?>" class="form-control" disabled>
    </div>
    
 </div>
 