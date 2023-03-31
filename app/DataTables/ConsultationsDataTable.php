<?php

namespace App\DataTables;

use App\Models\Consultation;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class ConsultationsDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     * @return \Yajra\DataTables\EloquentDataTable
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        $query = Consultation::query();
        return (new EloquentDataTable($query))
            // ->addIndexColumn()
//            ->editColumn('specialists', function($row){
//                $arr = '';
//                foreach ($row->specialists_explain as $item){
//                    $arr.= '<span class="badge badge-pill badge-outline-secondary mr-1">'.$item.'</span>';
//                }
//                return $arr;
//            })
            ->editColumn('symptom', function($row){
                return '<p class="max-line-2 text-xs">'.$row->symptom.'</p>';
            })->addColumn('consulted_at', function($row){
                return $row->consulted_at ? dateFormat($row->consulted_at, 'd M, Y') : '-';
            })->addColumn('full_name', function($row){
                return $row->patient ? $row->patient->full_name_with_group : '-';
            })->addColumn('action', function($row){
                return $this->action($row);
            })->filter(function ($model) {
                return $model->filter();
            })->rawColumns(['image', 'action', 'symptom'])
            ->orderColumn('consulted_at', function ($query, $order) {
                $query->orderByRaw("ISNULL(consulted_at), consulted_at $order");
            });
//            ->orderColumn('created_at', function ($query, $order) {
//                $query->orderBy('created_at', 'desc');
//            });
    }

    public function getColumns(): array
    {
        return [
            Column::make('ref_id'),
            Column::make('consulted_at'),
            Column::make('full_name'),
            Column::make('symptom'),
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
                'modal'     => route('admin.consultation.show', $row->id)
            ],
            'print' => [
                'icon'      => 'simple-icon-printer',
                'modal'     => route('admin.consultation.print.option', $row->id)
            ],
//            'print' => [
//                'icon'      => 'simple-icon-printer',
//                'onclick'   => '$(this).printConsultation({url: "'.route('admin.consultation.print.index', $row->id).'"})'
//            ],
            'edit' => [
                'icon'      => 'simple-icon-pencil',
                'redirect'  => route('admin.consultation.edit', $row->id)
            ],
            'delete' => [
                'size'      => 'md', //[sm, md, lg]
                'class'     => 'text-danger',
                'icon'      => 'simple-icon-trash',
                'modal'     => route('admin.consultation.destroy', $row->id)
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
                     ->orderBy(1)
                    //->dom('Bfrtip')
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
