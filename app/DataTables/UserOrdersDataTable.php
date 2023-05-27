<?php

namespace App\DataTables;

use App\Entity\Enums\StatusEnum;
use App\Models\Order;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class UserOrdersDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     * @return \Yajra\DataTables\EloquentDataTable
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        $query = Order::query();
        return (new EloquentDataTable($query))
            ->editColumn('updated_at', function($row){
                return $row->updated_at;
            })->addColumn('status', function($row){
                return $row->status_explain;
            })->addColumn('full_name', function($row){
                return $row->address->name ?? '-';
            })->addColumn('contact', function($row){
                return $row->address->contact ?? '-';
            })->addColumn('merchant', function($row){
                return $row->merchant->name ?? '-';
            })->editColumn('price', function($row){
                return 'RM '.$row->fundFormat('price');
            })->editColumn('created_at', function($row){
                return $row->dateFormat('created_at', 'r');
            })->addColumn('action', function($row){
                return $this->action($row);
            })->filter(function ($model) {
                return $model->filter();
            });
    }

    public function getColumns(): array
    {
        return [
            Column::make('merchant'),
            Column::make('full_name'),
            Column::make('contact'),
            Column::make('price'),
            Column::make('status'),
            Column::make('created_at'),
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
                'modal'     => route('order.show', $row->id)
            ],
        ];

        if($row->status == StatusEnum::PENDING){
            $actions['edit'] = [
                'icon'      => 'simple-icon-pencil',
                'modal'     => route('order.edit', $row->id)
            ];
        }

        if($row->status == StatusEnum::COMPLETED){
            $actions['edit'] = [
                'icon'      => 'simple-icon-like',
                'modal'     => route('order.edit', $row->id)
            ];
        }


        $actions['delete'] = [
            'size'      => 'md', //[sm, md, lg]
            'class'     => 'text-danger',
            'icon'      => 'simple-icon-trash',
            'modal'     => route('order.delete', $row->id)
        ];

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
                    ->orderBy(3)
                    ->selectStyleSingle();
    }
}
