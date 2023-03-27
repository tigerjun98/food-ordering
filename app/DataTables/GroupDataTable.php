<?php

namespace App\DataTables;

use App\Entity\Enums\StatusEnum;
use App\Models\Admin;
use App\Models\Group;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class GroupDataTable extends DataTable
{
    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Admin $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Admin $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Build DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     * @return \Yajra\DataTables\EloquentDataTable
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        $query = Group::query();
        return (new EloquentDataTable($query))
            ->editColumn('full_name', function($row) {
                return $row->full_name;
            })->editColumn('type', function ($row) {
                return $row->type_explain;
            })->editColumn('status', function($row) {
                return $row->status
                    ? '<span class="badge badge-pill badge-'.StatusEnum::getClass($row->status).' mr-1">'.$row->status_explain.'</span>'
                    : '-';
            })->editColumn('updated_at', function($row) {
                return dateFormat($row->updated_at, 'r');
            })->addColumn('action', function($row) {
                return $this->action($row);
            })->filter(function ($model) {
                return $model->filter();
            })->rawColumns(['action', 'status']);
    }

    public function getColumns(): array
    {
        return [
            Column::make('full_name'),
            Column::make('type'),
            Column::make('status'),
            Column::make('remark')->width(300),
            Column::make('updated_at'),
            Column::computed('action')->exportable(false)->printable(false)
        ];
    }

    public function action($row): string
    {
        $actions = [
            'edit' => [
                'icon' => 'simple-icon-pencil',
                'modal' => route('admin.group.edit', $row->id)
            ],
            'delete' => [
                'size'      => 'md', //[sm, md, lg]
                'class'     => 'text-danger',
                'icon'      => 'simple-icon-trash',
                'modal'     => route('admin.group.destroy', $row->id)
            ]
        ];

        return view('components.admin.datatable.action', compact('actions'))->render();
    }

    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('dataTable')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->orderBy(4)
                    ->selectStyleSingle()
                    ->buttons([
                        Button::make('excel'),
                        Button::make('csv'),
                        Button::make('pdf'),
                        Button::make('print'),
                    ]);
    }
}
