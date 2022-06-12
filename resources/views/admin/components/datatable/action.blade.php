<td>
    <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
        <button type="button" class="btn-xs btn btn-outline-primary dropdown-toggle"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="simple-icon-options"></i>
        </button>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="btnGroupDrop1">
            {{ $list ?? '' }}
        </div>
    </div>
</td>

