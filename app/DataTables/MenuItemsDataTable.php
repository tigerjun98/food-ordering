<?php

namespace App\DataTables;

use App\Models\Category;
use App\Models\MenuItem;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class MenuItemsDataTable extends DataTable
{
    public function query(MenuItem $model): QueryBuilder
    {
        return $model->where('merchant_id', auth()->id())->newQuery();
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
            ->addColumn('image', function($row){
                return $this->thumbnail($row);
            })->addColumn('category', function($row){
                return $row->category->name_en;
            })->editColumn('updated_at', function($row){
                return $row->updated_at;
            })->addColumn('action', function($row){
                return $this->action($row);
            })->filter(function ($model) {
                return $model->filter();
            })->rawColumns(['image', 'action']);
    }

    public function thumbnail($row): string
    {
        return view('components.admin.datatable.thumbnail', [
            'src' => $row->attachments && count($row->attachments) > 0 ? $row->attachments[0]->url : null,
        ])->render();
    }

    public function getColumns(): array
    {
        return [
            Column::make('name_en')->title('name'),
            Column::make('image'),
            Column::make('category'),
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
            'modal'     => route('merchant.menu-item.edit', $row->id)
        ];

        $actions['delete'] = [
            'size'      => 'md', //[sm, md, lg]
            'class'     => 'text-danger',
            'icon'      => 'simple-icon-trash',
            'modal'     => route('merchant.menu-item.delete', $row->id)
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
