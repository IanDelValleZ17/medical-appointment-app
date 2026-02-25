<?php

namespace App\Livewire\Admin\Datatables;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Spatie\Permission\Models\Role;

class RoleTable extends DataTableComponent
{
    protected $model = Role::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id')
            ->setDefaultSort('id', 'asc')
            ->setTableRowUrl(function($row) {
                return null;
            })
            ->setPerPageAccepted([10, 25, 50, 100])
            ->setPerPage(10)
            ->setSearchEnabled()
            ->setSearchPlaceholder('Buscar')
            ->setEmptyMessage('No se encontraron roles');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function columns(): array
    {
        //
        return [
            Column::make('ID', 'id')
                ->sortable()
                ->searchable(),
            Column::make('NOMBRE', 'name')
                ->sortable()
                ->searchable(),
            Column::make('FECHA', 'created_at')
                ->sortable()
                ->format(function($value, $column, $row) {
                    return $value->format('d/m/Y ');
                }),
        ];
    }

} 