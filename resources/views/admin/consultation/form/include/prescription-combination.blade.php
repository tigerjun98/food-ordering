<div class="row medicine">
    <div class="col-md-8">
        <label class="form-group has-float-label tooltip-center-bottom mb-3">
            <select data-width="100%" name="medicine_id[*009b*][]" class="medicine_opt"></select>
            <span>Medicine
                <span class="text-danger">*</span>
            </span>
        </label>
    </div>

    <div class="col-md-4">
        <label class="form-group has-float-label tooltip-center-bottom mb-3">
            <div class="input-group">
                <input type="number" name="quantity[*009b*][]" min="1" max="9999" class="form-control metric-val-*009b*"
                       onkeydown="countTotalMetric('*009b*')"
                       onchange="countTotalMetric('*009b*')"
                >
                <span class="input-group-text input-group-append input-group-addon metric-unit-*009b*"></span>
            </div>
            <span>Medicine
                <span class="text-danger">*</span>
            </span>
        </label>
    </div>
</div>
