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
            ->addColumn('full_name', function($row){
                return $row->full_name;
            })->addColumn('action', function($row){
                return $this->action($row);
            })->editColumn('state', function($row){
                return $row->state_name;
            })->editColumn('gender', function($row){
                return $row->gender_explain;
            })->filter(function ($model) {
                return $model->filter();
            })->rawColumns(['image', 'action'])
            ->orderColumn('created_at', 'desc');
    }

    public function getColumns(): array
    {
        return [
            Column::make('nric'),
            Column::make('full_name'),
            Column::make('phone'),
            Column::make('gender'),
            Column::make('state'),
            Column::computed('action')
                ->exportable(false)
                ->printable(false)
        ];
    }

    public function action($row): string
    {
        $actions = [
            'edit' => [
                'icon' => 'simple-icon-pencil',
                'modal' => route('admin.user.edit', $row->id)
            ],
            'delete' => [
                'size'      => 'md', //[sm, md, lg]
                'class'     => 'text-danger',
                'icon'      => 'simple-icon-trash',
                'modal'     => route('admin.user.destroy', $row->id)
            ]
        ];

        return view('components.admin.datatable.action', compact('actions'))->render();
    }
    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Transaction $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
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
                    //->dom('Bfrtip')
                    ->orderBy(0)
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
