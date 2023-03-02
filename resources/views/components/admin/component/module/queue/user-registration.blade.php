<label class="form-group has-float-label tooltip-center-bottom mb-3">
    <div class="input-group typeahead-container">
        <input type="text" class="form-control"
               name="query" id="query"
               placeholder="Start typing something to search..."
               autocomplete="off">
        <div class="input-group-append">
            <button type="submit" class="btn btn-primary default">
                <i class="simple-icon-magnifier"></i>
            </button>
        </div>
    </div>
    <span>{{ trans('label.nric_or_passport') }}</span>
</label>

<script type="text/javascript">
    const searchPatient = () => {

    }
</script>
