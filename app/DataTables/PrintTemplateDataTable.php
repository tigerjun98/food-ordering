<?php

namespace App\DataTables;

use App\Models\Admin;
use App\Models\Consultation;
use App\Models\PrintTemplate;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class PrintTemplateDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     * @return \Yajra\DataTables\EloquentDataTable
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        $query = PrintTemplate::query();
        return (new EloquentDataTable($query))
            // ->addIndexColumn()
            ->editColumn('type', function($row){
                return $row->type_explain;
            })->editColumn('updated_at', function($row){
                return dateFormat($row->updated_at, 'r');
            })->addColumn('full_name', function($row){
                return $row->fullName;
            })->addColumn('action', function($row){
                return $this->action($row);
            })->filter(function ($model) {
                return $model->filter();
            })->rawColumns(['image', 'action', 'roles'])
            ->orderColumn('full_name', function ($query, $order) {
                $query->orderByRaw("ISNULL(name_en), name_en $order");
            });
    }

    public function getColumns(): array
    {
        return [
            Column::make('full_name'),
            Column::make('type'),
            Column::make('updated_at'),
            Column::computed('action')
                ->exportable(false)
                ->printable(false)
        ];
    }

    public function action($row): string
    {
        $consultationId = Consultation::all()->random()->id;
        $printUrl = route('admin.consultation.print.index', $consultationId).'?print_template_id='.$row->id;
        $actions = [
            'view' => [
                'icon'      => 'simple-icon-eye',
                'onclick' => '$(this).printConsultation({url: "'.$printUrl.'&read_only=true"})'
            ],
//            'print' => [
//                'icon' => 'iconsminds-printer',
//                'onclick' => '$(this).printConsultation({url: "'.$printUrl.'"})'
//            ],
            'edit' => [
                'icon' => 'iconsminds-pen-2',
                'modal' => route('admin.print-template.show', $row->id)
            ],
            'delete' => [
                'size'      => 'md', //[sm, md, lg]
                'class'     => 'text-danger',
                'icon'      => 'simple-icon-trash',
                'modal'     => route('admin.print-template.delete', $row->id)
            ]
        ];

        return view('components.admin.datatable.action', compact('actions'))->render();
    }

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
                    //->dom('Bfrtip')
                    ->orderBy(2)
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
