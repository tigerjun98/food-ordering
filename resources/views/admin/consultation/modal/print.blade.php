@php
    $data = $data ?? null;
    $nav = ['print'];

    if( auth()->user()->hasPermissionTo( 'setting-other.print' ) ){
        $nav[] = 'details';
    }

@endphp
<x-admin.component.modal
    :title="'Print details'"
    :nav="$nav"
    :submit="route('admin.print-template.store')"
    :submitBtn="false"
>
    @slot('print')
        @foreach($templates as $template)
            <div class="d-flex flex-row mb-3 pb-3 border-bottom justify-content-between align-items-center">
                <div>
                    <h5 class="text-capitalize mb-1">{{ $template->full_name }}</h5>
                    <p class="text-muted mb-0 text-small">{{ $template->remark }}</p>
                </div>
                <div>
                    <a class="btn btn-outline-primary btn-xs" href="javascript:print({{ $template->id }})">PRINT</a>
                </div>
            </div>
        @endforeach


        <script>
            function print(id){
                let printUrl = `{{ route('admin.consultation.print.index', $consultation->id) }}?print_template_id=${id}`;
                $(this).printConsultation({url: printUrl})
                $(this).closeModal({closeLatestModal: true})
            }
        </script>
    @endslot

    @slot('details')
        <input type="hidden" value="{{ \App\Models\PrintTemplate::CONSULTATION }}" name="type">
        <div class="row mb-2">
            <x-admin.form.select
                :col="'md-12'"
                :name="'name'"
                :selectJs="true"
                :label="trans('template')"
            >
                @slot('customOption')
                    @foreach($templates as $template)
                        <option class="text-capitalize" value="{{ $template->id }}">{{ ucfirst($template->full_name) }}</option>
                    @endforeach
                    <option value="new">{{ trans('common.new_template') }}</option>
                @endslot
            </x-admin.form.select>

            <script type="text/javascript">
                $(document).on('change', '#name', async function (event){
                    var $this = $(this);
                    if( $this.val() === 'new' || $this.val().length === 1 ) {
                        resetForm()
                        return true;
                    }
                    let url = `{{ route('admin.print-template.get-checked-item', ':id') }}`.replace(':id', $this.val())
                    $('#optionSection').setHtml({url});
                });

                function resetForm(){
                    uncheckAll();
                    const refs = document.getElementsByClassName(`reset-print-option`);
                    Array.prototype.forEach.call(refs, function (el) { // loop classes
                        $(el).val('')
                    });
                }
            </script>
        </div>

        <div id="optionSection">
            @include('admin.print-template.form.create-items')
        </div>

        <div class="border-top pt-3">
            <x-admin.component.button
                :class="'btn-primary'"
                :lang="'submit'"
                :type="'submit'"
            />
        </div>
    @endslot
</x-admin.component.modal>
