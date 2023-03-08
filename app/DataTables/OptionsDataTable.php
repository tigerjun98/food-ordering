<?php

namespace App\DataTables;

use App\Entity\Enums\StatusEnum;
use App\Models\Admin;
use App\Models\Medicine;
use App\Models\Option;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class OptionsDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     * @return \Yajra\DataTables\EloquentDataTable
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        $query = Option::query()->where('type', request()->type);
        return (new EloquentDataTable($query))
            // ->addIndexColumn()
            ->editColumn('updated_at', function($row){
                return dateFormat($row->updated_at, 'r');
            })->editColumn('status', function($row){
                return $row->status
                    ? '<span class="badge badge-pill badge-'.StatusEnum::getClass($row->status).' mr-1">'.$row->status_explain.'</span>'
                    : '-';
            })->editColumn('type', function($row){
                return $row->type_explain;
            })->addColumn('full_name', function($row){
                return $row->full_name;
            })->addColumn('description', function($row){
                return '<p class="max-line-2 text-xs">'.$row->{'desc_'. app()->getLocale()}.'</p>';
            })->addColumn('action', function($row){
                return $this->action($row);
            })->filter(function ($model) {
                return $model->filter();
            })->rawColumns(['image', 'action', 'description', 'status']);
    }

    public function getColumns(): array
    {
        return [
            Column::make('full_name')->title('Name'),
            Column::make('type'),
            Column::make('status'),
            Column::make('description')->width(450),
            Column::make('updated_at')->width(450),
            Column::computed('action')
                ->exportable(false)
                ->printable(false)
        ];
    }

    public function action($row): string
    {
        $actions = [
            'edit' => [
                'icon' => 'iconsminds-pen-2',
                'modal' => route('admin.option.edit', $row->id),
                'modalHeader' => $row->type. ' details'
            ],
            'delete' => [
                'size'      => 'md', //[sm, md, lg]
                'class'     => 'text-danger',
                'icon'      => 'simple-icon-trash',
                'modal'     => route('admin.option.destroy', $row->id)
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
    public function query(Admin $model): QueryBuilder
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
                    ->orderBy(4)
//                    ->autoWidth(false)
                    //->dom('Bfrtip')
//                    ->orderBy(0)
                    ->selectStyleSingle()
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
