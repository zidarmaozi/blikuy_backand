<x-layout title="Profil Pengguna" active="profil">

    <x-slot:styles>
        <style>
            .profile-wrapper {
                flex: 1;
                display: flex;
                align-items: center;
                justify-content: center;
                padding: 60px 20px;
            }

            .profile-card {
                background: #ffffff;
                border-radius: 16px;
                padding: 44px 32px;
                box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.08), 0 8px 10px -6px rgba(0, 0, 0, 0.04);
                text-align: center;
                max-width: 480px;
                width: 100%;
                border: 1px solid var(--border);
            }

            .badge {
                display: inline-block;
                background-color: #e0e7ff;
                color: #4f46e5;
                font-size: 12px;
                font-weight: 600;
                padding: 6px 14px;
                border-radius: 50px;
                margin-bottom: 20px;
                letter-spacing: 0.5px;
                text-transform: uppercase;
            }

            .profile-card h1 {
                font-size: 26px;
                font-weight: 700;
                margin-bottom: 12px;
                color: #0f172a;
            }

            .profile-card p {
                font-size: 15px;
                color: #64748b;
                margin-bottom: 28px;
                line-height: 1.6;
            }

            .btn {
                display: inline-flex;
                align-items: center;
                justify-content: center;
                gap: 8px;
                background: var(--primary);
                color: #ffffff;
                text-decoration: none;
                padding: 12px 28px;
                font-size: 15px;
                font-weight: 600;
                border-radius: 10px;
                transition: all 0.2s ease;
                box-shadow: 0 4px 12px rgba(79, 70, 229, 0.25);
            }

            .btn:hover {
                background: var(--primary-hover);
                transform: translateY(-2px);
                box-shadow: 0 6px 16px rgba(79, 70, 229, 0.35);
            }

            .btn svg {
                transition: transform 0.2s ease;
            }

            .btn:hover svg {
                transform: translateX(-3px);
            }
        </style>
    </x-slot:styles>

    <div class="profile-wrapper">
        <div class="profile-card">
            <span class="badge">Profil Pengguna</span>
            <h1>Halaman Profil</h1>
            <p>Selamat datang di halaman profil. Halaman ini menggunakan komponen header dan footer yang sama secara otomatis tanpa harus membuat ulang!</p>
            <a href="{{ route('home') }}" class="btn">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="19" y1="12" x2="5" y2="12"></line>
                    <polyline points="12 19 5 12 12 5"></polyline>
                </svg>
                Kembali ke Beranda
            </a>
        </div>
    </div>

</x-layout>