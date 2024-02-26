<?php

declare(strict_types=1);

namespace Forumify\PerscomPlugin\Admin\Component;

use Symfony\UX\LiveComponent\Attribute\AsLiveComponent;

#[AsLiveComponent('PerscomQualificationTable', '@Forumify/components/table/table.html.twig')]
class PerscomQualificationTable extends AbstractPerscomTable
{
    protected function buildTable(): void
    {
        $this
            ->addColumn('name', [
                'field' => '[name]'
            ])
            ->addColumn('actions', [
                'label' => '',
                'renderer' => fn () => '',
                'searchable' => false,
                'sortable' => false,
            ]);
    }

    protected function getResource(): string
    {
        return 'qualifications';
    }
}