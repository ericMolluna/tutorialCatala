<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="text-primary">Tutorials de iFixit</h1>

        <form method="GET" action="{{ route('guides.index') }}" class="d-flex">
            <input type="text" name="search" class="form-control search-bar" placeholder="Cerca un tutorial..." value="{{ request('search') }}">
        </form>
    </div>

    <div class="list-group">
        @foreach($guides as $guide)
            <a href="{{ route('guides.show', $guide) }}" class="list-group-item list-group-item-action shadow-sm mb-3 rounded guide-card">
                <h2 class="text-primary">{{ $guide->title_translated ?? $guide->title }}</h2>
                <h3 class="text-muted">{{ $guide->summary_translated ?? $guide->summary }}</h3>
            </a>
        @endforeach
    </div>

    <div class="mt-4 text-center">
        {{ $guides->links() }}
    </div>
</div>

<style>
    /* Estilos sutiles y elegantes */
    body {
        font-family: 'Inter', sans-serif;
        background-color: #f4f4f9;
        color: #333;
    }

    h1 {
        font-size: 2rem;
        font-weight: 600;
        color: #0056b3;
    }

    .search-bar {
        font-size: 1rem;
        padding: 10px;
        border-radius: 8px;
        border: 1px solid #ccc;
        transition: all 0.3s ease;
        width: 280px;
    }
    .search-bar:focus {
        border-color: #0056b3;
        box-shadow: 0px 0px 5px rgba(0, 86, 179, 0.3);
    }

    .guide-card {
        padding: 15px;
        border-radius: 10px;
        background: #fff;
        transition: all 0.3s ease;
        border-left: 4px solid #0056b3;
    }
    .guide-card:hover {
        background-color: #f8f9fc;
        transform: translateY(-3px);
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.05);
    }
</style>