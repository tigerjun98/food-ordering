<?php

namespace App\DataTables;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class CategoriesDataTable extends DataTable
{
    public function query(Category $model): QueryBuilder
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
        return (new EloquentDataTable($query))
            ->editColumn('updated_at', function($row){
                return $row->updated_at;
            })->addColumn('action', function($row){
                return $this->action($row);
            })->filter(function ($model) {
                return $model->filter();
            });
    }

    public function getColumns(): array
    {
        return [
            Column::make('name_en')->title('name'),
            Column::make('updated_at'),
            Column::computed('action')
                ->exportable(false)
                ->printable(false)
        ];
    }

    public function action($row): string
    {
        $actions['edit'] = [
            'icon'      => 'simple-icon-pencil',
            'modal'     => route('admin.category.edit', $row->id)
        ];

        $actions['delete'] = [
            'size'      => 'md', //[sm, md, lg]
            'class'     => 'text-danger',
            'icon'      => 'simple-icon-trash',
            'modal'     => route('admin.category.delete', $row->id)
        ];

        return view('components.admin.datatable.action', compact('actions'))->render();
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
                    ->orderBy(0)
                    ->selectStyleSingle();
    }
}
