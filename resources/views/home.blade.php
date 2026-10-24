<x-layout title="Katalog Produk & Kategori" active="home">

    <x-slot:styles>
        <style>
            /* Hero Banner */
            .hero {
                background: linear-gradient(135deg, #1e1b4b 0%, #312e81 50%, #4338ca 100%);
                color: #ffffff;
                padding: 56px 24px 64px;
                text-align: center;
                position: relative;
                overflow: hidden;
            }

            .hero::before {
                content: '';
                position: absolute;
                top: -50%;
                left: -20%;
                width: 140%;
                height: 200%;
                background: radial-gradient(circle, rgba(255,255,255,0.08) 0%, transparent 60%);
                pointer-events: none;
            }

            .hero-container {
                max-width: 800px;
                margin: 0 auto;
                position: relative;
                z-index: 1;
            }

            .hero-badge {
                display: inline-block;
                background: rgba(255, 255, 255, 0.15);
                backdrop-filter: blur(8px);
                border: 1px solid rgba(255, 255, 255, 0.25);
                color: #ffffff;
                font-size: 13px;
                font-weight: 600;
                padding: 6px 16px;
                border-radius: 50px;
                margin-bottom: 16px;
                letter-spacing: 0.5px;
            }

            .hero h1 {
                font-size: 36px;
                font-weight: 700;
                line-height: 1.25;
                margin-bottom: 14px;
            }

            .hero p {
                font-size: 16px;
                color: #e0e7ff;
                max-width: 620px;
                margin: 0 auto;
                opacity: 0.95;
            }

            /* Main Container */
            .main-container {
                max-width: 1200px;
                margin: -32px auto 48px;
                padding: 0 24px;
                width: 100%;
                position: relative;
                z-index: 2;
            }

            /* Categories Section */
            .category-filter-card {
                background: var(--card-bg);
                border-radius: var(--radius-md);
                padding: 20px 24px;
                box-shadow: var(--shadow-md);
                margin-bottom: 32px;
                border: 1px solid var(--border);
            }

            .category-header {
                display: flex;
                align-items: center;
                justify-content: space-between;
                margin-bottom: 14px;
                flex-wrap: wrap;
                gap: 10px;
            }

            .category-header h2 {
                font-size: 16px;
                font-weight: 600;
                color: var(--dark);
                display: flex;
                align-items: center;
                gap: 8px;
            }

            .category-header h2 svg {
                color: var(--primary);
            }

            .category-pills {
                display: flex;
                flex-wrap: wrap;
                gap: 10px;
            }

            .pill-btn {
                display: inline-flex;
                align-items: center;
                gap: 8px;
                text-decoration: none;
                padding: 8px 18px;
                border-radius: 50px;
                font-size: 14px;
                font-weight: 500;
                background: #f1f5f9;
                color: var(--slate);
                border: 1px solid transparent;
                transition: all 0.2s ease;
            }

            .pill-btn:hover {
                background: var(--primary-light);
                color: var(--primary);
                border-color: rgba(79, 70, 229, 0.2);
            }

            .pill-btn.active {
                background: var(--primary);
                color: #ffffff;
                box-shadow: 0 4px 12px rgba(79, 70, 229, 0.35);
            }

            .pill-count {
                display: inline-flex;
                align-items: center;
                justify-content: center;
                font-size: 11px;
                font-weight: 600;
                padding: 2px 7px;
                border-radius: 20px;
                background: rgba(0, 0, 0, 0.08);
            }

            .pill-btn.active .pill-count {
                background: rgba(255, 255, 255, 0.25);
                color: #ffffff;
            }

            /* Section Title & Result Count */
            .section-header {
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin-bottom: 24px;
                flex-wrap: wrap;
                gap: 12px;
            }

            .section-header h2 {
                font-size: 22px;
                font-weight: 700;
                color: var(--dark);
            }

            .product-count {
                font-size: 14px;
                color: var(--muted);
                background: #ffffff;
                padding: 6px 14px;
                border-radius: 50px;
                border: 1px solid var(--border);
            }

            /* Product Grid */
            .product-grid {
                display: grid;
                grid-template-columns: repeat(auto-fill, minmax(270px, 1fr));
                gap: 24px;
            }

            .product-card {
                background: var(--card-bg);
                border-radius: var(--radius-md);
                overflow: hidden;
                border: 1px solid var(--border);
                box-shadow: var(--shadow-sm);
                transition: all 0.25s ease;
                display: flex;
                flex-direction: column;
            }

            .product-card:hover {
                transform: translateY(-6px);
                box-shadow: var(--shadow-hover);
                border-color: rgba(79, 70, 229, 0.3);
            }

            .card-img-wrapper {
                position: relative;
                width: 100%;
                height: 200px;
                background: #e2e8f0;
                overflow: hidden;
            }

            .card-img {
                width: 100%;
                height: 100%;
                object-fit: cover;
                transition: transform 0.4s ease;
            }

            .product-card:hover .card-img {
                transform: scale(1.05);
            }

            .category-tag {
                position: absolute;
                top: 12px;
                left: 12px;
                background: rgba(15, 23, 42, 0.75);
                backdrop-filter: blur(4px);
                color: #ffffff;
                font-size: 11px;
                font-weight: 600;
                padding: 4px 10px;
                border-radius: 6px;
                text-transform: uppercase;
                letter-spacing: 0.5px;
            }

            .stock-badge {
                position: absolute;
                bottom: 12px;
                right: 12px;
                background: rgba(255, 255, 255, 0.95);
                backdrop-filter: blur(4px);
                color: var(--success);
                font-size: 11px;
                font-weight: 600;
                padding: 4px 10px;
                border-radius: 50px;
                box-shadow: 0 2px 6px rgba(0,0,0,0.1);
                display: inline-flex;
                align-items: center;
                gap: 5px;
            }

            .stock-dot {
                width: 6px;
                height: 6px;
                border-radius: 50%;
                background-color: var(--success);
            }

            .card-body {
                padding: 20px;
                display: flex;
                flex-direction: column;
                flex-grow: 1;
            }

            .product-name {
                font-size: 16px;
                font-weight: 600;
                color: var(--dark);
                margin-bottom: 8px;
                line-height: 1.4;
                display: -webkit-box;
                -webkit-line-clamp: 2;
                -webkit-box-orient: vertical;
                overflow: hidden;
                min-height: 44px;
            }

            .product-desc {
                font-size: 13px;
                color: var(--muted);
                margin-bottom: 18px;
                line-height: 1.5;
                display: -webkit-box;
                -webkit-line-clamp: 2;
                -webkit-box-orient: vertical;
                overflow: hidden;
            }

            .card-footer {
                margin-top: auto;
                display: flex;
                align-items: center;
                justify-content: space-between;
                padding-top: 14px;
                border-top: 1px solid #f1f5f9;
            }

            .price-label {
                font-size: 11px;
                color: var(--muted);
                text-transform: uppercase;
                letter-spacing: 0.5px;
            }

            .product-price {
                font-size: 18px;
                font-weight: 700;
                color: var(--primary);
            }

            .btn-detail {
                display: inline-flex;
                align-items: center;
                justify-content: center;
                padding: 8px 14px;
                background: var(--primary-light);
                color: var(--primary);
                border-radius: var(--radius-sm);
                text-decoration: none;
                font-size: 13px;
                font-weight: 600;
                transition: all 0.2s ease;
            }

            .btn-detail:hover {
                background: var(--primary);
                color: #ffffff;
            }

            /* Empty State */
            .empty-state {
                background: var(--card-bg);
                border-radius: var(--radius-md);
                padding: 56px 24px;
                text-align: center;
                border: 1px dashed var(--border);
            }

            .empty-icon {
                width: 64px;
                height: 64px;
                margin: 0 auto 16px;
                background: #f1f5f9;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                color: var(--muted);
            }

            .empty-state h3 {
                font-size: 18px;
                font-weight: 600;
                color: var(--dark);
                margin-bottom: 8px;
            }

            .empty-state p {
                font-size: 14px;
                color: var(--muted);
                margin-bottom: 20px;
            }

            .btn-reset {
                display: inline-flex;
                align-items: center;
                gap: 8px;
                background: var(--primary);
                color: #ffffff;
                padding: 10px 20px;
                border-radius: 8px;
                text-decoration: none;
                font-size: 14px;
                font-weight: 500;
                transition: background 0.2s;
            }

            .btn-reset:hover {
                background: var(--primary-hover);
            }

            @media (max-width: 640px) {
                .hero h1 {
                    font-size: 26px;
                }
                .hero {
                    padding: 40px 16px 50px;
                }
                .main-container {
                    padding: 0 16px;
                }
            }
        </style>
    </x-slot:styles>

    <!-- Hero Banner -->
    <section class="hero">
        <div class="hero-container">
            <span class="hero-badge">E-Commerce</span>
            <h1>Katalog Produk & Kategori</h1>
            <p>Jelajahi berbagai pilihan produk berkualitas terbaik dengan mudah. Pilih kategori di bawah untuk menyaring produk.</p>
        </div>
    </section>

    <!-- Main Container -->
    <main class="main-container">

        <!-- Kategori Section / Filter Pills -->
        <section class="category-filter-card">
            <div class="category-header">
                <h2>
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="3" y="3" width="7" height="7"></rect>
                        <rect x="14" y="3" width="7" height="7"></rect>
                        <rect x="14" y="14" width="7" height="7"></rect>
                        <rect x="3" y="14" width="7" height="7"></rect>
                    </svg>
                    Kategori Pilihan
                </h2>
                <span style="font-size: 13px; color: var(--muted);">
                    Total {{ $categories->count() }} Kategori
                </span>
            </div>

            <div class="category-pills">
                <a href="{{ route('home') }}" 
                   class="pill-btn {{ empty($selectedCategoryId) ? 'active' : '' }}">
                    Semua Kategori
                    <span class="pill-count">{{ $categories->sum('products_count') }}</span>
                </a>

                @foreach($categories as $category)
                    <a href="{{ route('home', ['category' => $category->category_id]) }}" 
                       class="pill-btn {{ $selectedCategoryId == $category->category_id ? 'active' : '' }}">
                        {{ $category->category }}
                        <span class="pill-count">{{ $category->products_count }}</span>
                    </a>
                @endforeach
            </div>
        </section>

        <!-- Product Grid Header -->
        <div class="section-header">
            <h2>
                @if($selectedCategoryId)
                    Produk Kategori: {{ $categories->firstWhere('category_id', $selectedCategoryId)->category ?? 'Terpilih' }}
                @else
                    Daftar Semua Produk
                @endif
            </h2>
            <div class="product-count">
                Menampilkan <strong>{{ $products->count() }}</strong> produk
            </div>
        </div>

        <!-- Product Grid -->
        @if($products->count() > 0)
            <div class="product-grid">
                @foreach($products as $product)
                    <article class="product-card">
                        <div class="card-img-wrapper">
                            <img src="{{ $product->img ?: 'https://images.unsplash.com/photo-1523275335684-37898b6baf30?auto=format&fit=crop&w=600&q=80' }}" 
                                 alt="{{ $product->name }}" 
                                 class="card-img"
                                 onerror="this.onerror=null;this.src='https://images.unsplash.com/photo-1523275335684-37898b6baf30?auto=format&fit=crop&w=600&q=80';">
                            
                            @if($product->category)
                                <span class="category-tag">{{ $product->category->category }}</span>
                            @endif

                            <span class="stock-badge">
                                <span class="stock-dot"></span>
                                Stok: {{ $product->stock }}
                            </span>
                        </div>

                        <div class="card-body">
                            <h3 class="product-name" title="{{ $product->name }}">
                                {{ $product->name }}
                            </h3>
                            <p class="product-desc" title="{{ $product->description }}">
                                {{ $product->description ?: 'Tidak ada deskripsi produk.' }}
                            </p>

                            <div class="card-footer">
                                <div>
                                    <div class="price-label">Harga</div>
                                    <div class="product-price">
                                        Rp {{ number_format($product->price, 0, ',', '.') }}
                                    </div>
                                </div>
                                <a href="{{ url('/api/products/' . $product->product_id) }}" target="_blank" class="btn-detail">
                                    Detail API
                                </a>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        @else
            <!-- Empty State -->
            <div class="empty-state">
                <div class="empty-icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"></circle>
                        <line x1="8" y1="12" x2="16" y2="12"></line>
                    </svg>
                </div>
                <h3>Belum Ada Produk</h3>
                <p>Tidak ada produk ditemukan untuk kategori ini.</p>
                <a href="{{ route('home') }}" class="btn-reset">
                    Tampilkan Semua Produk
                </a>
            </div>
        @endif

    </main>

</x-layout>
