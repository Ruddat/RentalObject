<!-- resources/views/livewire/custom-pagination-links-view.blade.php -->
<div class="pagination-container">
    @if ($paginator->hasPages())
        <nav-paginate role="navigation" aria-label="Pagination Navigation" class="pagination-nav">
            <span class="pagination-prev">
                @if ($paginator->onFirstPage())
                    <span class="pagination-button disabled">Previous</span>
                @else
                    <button wire:click="previousPage" wire:loading.attr="disabled" rel="prev" class="pagination-button active">Previous</button>
                @endif
            </span>
            
            <span class="pagination-info">
                Page {{ $paginator->currentPage() }} of {{ $paginator->lastPage() }}
            </span>

            <span class="pagination-next">
                @if ($paginator->onLastPage())
                    <span class="pagination-button disabled">Next</span>
                @else
                    <button wire:click="nextPage" wire:loading.attr="disabled" rel="next" class="pagination-button active">Next</button>
                @endif
            </span>
        </nav>
    @endif
</div>