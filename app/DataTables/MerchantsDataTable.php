<?php

namespace App\DataTables;

use App\Models\Merchant;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class MerchantsDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     * @return \Yajra\DataTables\EloquentDataTable
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        $query = Merchant::query();
        return (new EloquentDataTable($query))
            ->editColumn('updated_at', function($row){
                return $row->updated_at;
            })->addColumn('full_name', function($row){
                return $row->full_name;
            })->addColumn('action', function($row){
                return $this->action($row);
            })->filter(function ($model) {
                return $model->filter();
            });
    }

    public function getColumns(): array
    {
        return [
            Column::make('full_name'),
            Column::make('email'),
            Column::make('contact'),
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
                'modal'     => route('admin.merchant.show', $row->id)
            ],
        ];

        $actions['edit'] = [
            'icon'      => 'simple-icon-pencil',
            'modal'     => route('admin.merchant.edit', $row->id)
        ];

        $actions['delete'] = [
            'size'      => 'md', //[sm, md, lg]
            'class'     => 'text-danger',
            'icon'      => 'simple-icon-trash',
            'modal'     => route('admin.merchant.delete', $row->id)
        ];

        return view('components.admin.datatable.action', compact('actions'))->render();
    }

    public function query(Merchant $model): QueryBuilder
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
                    ->orderBy(3)
                    ->selectStyleSingle();
    }
}
