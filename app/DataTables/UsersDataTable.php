<?php

namespace App\DataTables;

use App\Models\User;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class UsersDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     * @return \Yajra\DataTables\EloquentDataTable
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        $query = User::query();
        return (new EloquentDataTable($query))
            // ->addIndexColumn()
            ->editColumn('updated_at', function($row){
                return $row->updated_at;
            })->addColumn('full_name', function($row){
                return $row->full_name;
            })->addColumn('action', function($row){
                return $this->action($row);
            })->editColumn('nationality', function($row){
                return $row->nationality_explain;
            })->editColumn('dob', function($row){
                return $row->dob_with_age;
            })->editColumn('phone', function($row){
                return $row->phone_format;
            })->editColumn('nric', function($row){
                return nricFormat($row->nric);
            })->editColumn('gender', function($row){
                return $row->gender_explain;
            })->filter(function ($model) {
                return $model->filter();
            })->rawColumns(['image', 'action'])
            ->orderColumn('full_name', function ($query, $order) {
                $query->orderByRaw("ISNULL(name_en), name_en $order");
            })->editColumn('group_id', function($row){
                return $row->group->full_name ?? '-';
            });
    }

    public function getColumns(): array
    {
        return [
            Column::make('nric')->title('NRIC/Passport'),
            Column::make('group_id')->title('Group'),
            Column::make('full_name'),
            Column::make('phone'),
            Column::make('gender'),
            Column::make('nationality'),
            Column::make('dob')->title('DOB (Age)'),
            Column::make('updated_at'),
            Column::computed('action')
                ->exportable(false)
                ->printable(false)
        ];
    }

    public function action($row): string
    {
        $actions = [
            'view' => [
                'icon'      => 'simple-icon-eye',
                'modal'     => route('admin.user.show', $row->id)
            ],
        ];

        if(auth()->user()->hasPermissionTo( 'queue.create' ) ){
            $actions['queue'] = [
                'icon'      => 'simple-icon-ghost',
                'modal'     => route('admin.queue.create', 'user_id='.$row->id)
            ];
        }

        if(auth()->user()->hasPermissionTo( 'consultation.index' ) ){
            $actions['history'] = [
                'icon'      => 'simple-icon-event',
                'redirect'     => route('admin.consultation.index', 'nric='.$row->nric)
            ];
        }

        if(auth()->user()->hasPermissionTo( 'consultation.create' ) ){
            $actions['consultation'] = [
                'icon'      => 'simple-icon-calendar',
                'redirect'  => route('admin.consultation.edit', $row->id)
            ];
        }

        if(auth()->user()->hasPermissionTo( 'patient.edit' ) ){
            $actions['edit'] = [
                'icon'      => 'simple-icon-pencil',
                'modal'     => route('admin.user.edit', $row->id)
            ];
        }
        if(auth()->user()->hasPermissionTo( 'patient.delete' ) ){
            $actions['delete'] = [
                'size'      => 'md', //[sm, md, lg]
                'class'     => 'text-danger',
                'icon'      => 'simple-icon-trash',
                'modal'     => route('admin.user.delete', $row->id)
            ];
        }


        return view('components.admin.datatable.action', compact('actions'))->render();
    }

    public function query(User $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('dataTable')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->orderBy(7)
                    //->dom('Bfrtip')
                    ->selectStyleSingle()
//                    ->parameters([
//                        'language' => [
//                            'info' => "Showing <b>_START_ to _END_</b> (of _TOTAL_)",
//                            'infoEmpty' => "No records found",
//                            'infoFiltered' => "",
//                            'lengthMenu' => "Items Per Page _MENU_",
//                            'processing' => "<div class='spinner'>Loading...</div>",
//                            'loadingRecords' => "Loading data...",
//                            'zeroRecords' => "Sorry no records found",
//                            'search' => "_INPUT_",
//                            'searchPlaceholder' => "Search...",
//                            'paginate' => [
//                                'previous' => "<i class='simple-icon-arrow-left'></i>",
//                                'next' => "<i class='simple-icon-arrow-right'></i>",
//                            ]
//                        ],
//                    ])
                    ->buttons([
                        Button::make('excel'),
                        Button::make('csv'),
                        Button::make('pdf'),
                        Button::make('print'),
//                        Button::make('reset'),
                        // Button::make('reload')
                    ]);
    }



    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename(): string
    {
        return 'Transactions_' . date('YmdHis');
    }
}
