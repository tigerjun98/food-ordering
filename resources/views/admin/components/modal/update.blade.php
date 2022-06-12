<div class="modal fade modal-right" id="updateModal" tabindex="-1" role="dialog"
         aria-labelledby="rightModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="rightModalLabel">{{$formTitle ?? 'UPDATE'}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p> {{ $formDescription ?? '' }}</p>

                <form class="tooltip-right-top" id="updateForm" novalidate>
                    {{ $formLayout ?? '' }}
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                        <button type="submit" id="submitBtn" class="btn btn-primary">Save</button>
                    </div>
                    {{ $formAction ?? '' }}
                </form>
            </div>
        </div>
    </div>
</div>
