<?php

namespace App\DataTables;

use App\Entity\Enums\ProcessStatusEnum;
use App\Models\Appointment;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class AppointmentsDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     * @return \Yajra\DataTables\EloquentDataTable
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        $query = Appointment::query();
        return (new EloquentDataTable($query))
            ->editColumn('full_name', function($row) {
                return $row->patient->full_name;
            })->editColumn('datetime', function($row) {
                return dateFormat($row->datetime, 'r');
            })->editColumn('status', function($row) {
                return $row->status
                    ? '<span class="badge badge-pill badge-'.ProcessStatusEnum::getClass($row->status).' mr-1">'.$row->status_explain.'</span>'
                    : '-';
            })->editColumn('doctor', function($row) {
                return $row->doctor->full_name;
            })->editColumn('updated_at', function($row) {
                return dateFormat($row->updated_at, 'r');
            })->addColumn('action', function($row) {
                return $this->action($row);
            })->filter(function ($model) {
                return $model->filter();
            })->rawColumns(['action', 'status']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Appointment $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Appointment $model): QueryBuilder
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
                    ->orderBy(1)
                    ->selectStyleSingle()
                    ->buttons([
                        Button::make('excel'),
                        Button::make('csv'),
                        Button::make('pdf'),
                        Button::make('print'),
                    ]);
    }

    /**
     * Get the dataTable columns definition.
     *
     * @return array
     */
    public function getColumns(): array
    {
        return [
            Column::make('full_name'),
            Column::make('datetime'),
            Column::make('remark')->width(300),
            Column::make('status'),
            Column::make('doctor'),
            Column::make('updated_at'),
            Column::computed('action')->exportable(false)->printable(false)
        ];
    }

    /**
     * Get filename for export.
     *
     * @return view
     */
    public function action($row): string
    {
        $actions = [];

        if (auth()->user()->hasPermissionTo('appointment-management.show')) {
            $actions['view'] = [
                'icon'      => 'simple-icon-eye',
                'modal'     => route('admin.appointment.show', $row->id)
            ];
        }

        if (auth()->user()->hasPermissionTo('appointment-management.edit')) {
            $actions['edit'] = [
                'icon'      => 'simple-icon-pencil',
                'modal'     => route('admin.appointment.edit', $row->id)
            ];
        }

        if (auth()->user()->hasPermissionTo('appointment-management.delete')) {
            $actions['delete'] = [
                'size'      => 'md', //[sm, md, lg]
                'class'     => 'text-danger',
                'icon'      => 'simple-icon-trash',
                'modal'     => route('admin.appointment.destroy', $row->id)
            ];
        }

        return view('components.admin.datatable.action', compact('actions'))->render();
    }
}
