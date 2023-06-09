<?php

namespace App\DataTables;

use App\Models\Admin;
use App\Models\Role;
use App\Models\User;
use App\Entity\Enums\StatusEnum;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class AdminsDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     * @return \Yajra\DataTables\EloquentDataTable
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        $query = Admin::query()->excludeSuperAdmin();
        return (new EloquentDataTable($query))
            // ->addIndexColumn()
            ->addColumn('roles', function($row){
                $arr = '';
                foreach ($row->getRoleNames() as $name){
                    $role = Role::where('name', $name)->first();
                    $arr.= '<span class="badge badge-pill badge-outline-secondary mr-1">'.$role->full_name.'</span>';
                }
                return $arr;
            })->editColumn('updated_at', function($row){
                return dateFormat($row->updated_at, 'r');
            })->addColumn('full_name', function($row){
                return $row->fullName;
            })->addColumn('action', function($row){
                return $this->action($row);
            })->editColumn('gender', function($row){
                return $row->gender_explain;
            })->filter(function ($model) {
                return $model->filter();
            })->rawColumns(['image', 'action', 'roles', 'status'])
            ->orderColumn('full_name', function ($query, $order) {
                $query->orderByRaw("ISNULL(name_en), name_en $order");
            })->editColumn('status', function($row){
                return $row->status
                    ? '<span class="badge badge-pill badge-'.StatusEnum::getClass($row->status).' mr-1">'.$row->status_explain.'</span>'
                    : '-';
            })->editColumn('group_id', function($row) {
                return $row->group->full_name ?? '-';
            });
    }

    public function getColumns(): array
    {
        return [
            Column::make('full_name'),
            Column::make('status'),
            Column::make('roles')->orderable(false),
            Column::make('group_id')->title('Group'),
            Column::make('phone'),
            Column::make('email'),
            Column::make('updated_at'),
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
                'modal' => route('admin.account.edit', $row->id)
            ],
            'delete' => [
                'size'      => 'md', //[sm, md, lg]
                'class'     => 'text-danger',
                'icon'      => 'simple-icon-trash',
                'modal'     => route('admin.account.delete', $row->id)
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
                    ->orderBy(6)
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
