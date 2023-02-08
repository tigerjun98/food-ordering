<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\AuctionsDataTable;
use App\Http\Controllers\Controller;
use App\Modules\Admin\Transaction\DataTables\TransactionsDataTable;

class TransactionController extends Controller
{
    public function create()
    {

    }

    public function index(TransactionsDataTable $dataTable){
        $filter = Transaction::Filter();
        return $dataTable->render('admin.transaction.datatable', compact('filter'));
    }

}
