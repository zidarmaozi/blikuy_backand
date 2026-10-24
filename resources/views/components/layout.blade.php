@props(['title' => 'Belajar Laravel', 'active' => ''])

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }} - Belajar Laravel</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --primary: #4f46e5;
            --primary-hover: #4338ca;
            --primary-light: #eef2ff;
            --secondary: #0ea5e9;
            --dark: #0f172a;
            --slate: #334155;
            --muted: #64748b;
            --border: #e2e8f0;
            --bg-page: #f8fafc;
            --card-bg: #ffffff;
            --success: #10b981;
            --success-light: #ecfdf5;
            --radius-sm: 8px;
            --radius-md: 14px;
            --radius-lg: 20px;
            --shadow-sm: 0 1px 3px rgba(0, 0, 0, 0.05);
            --shadow-md: 0 10px 25px -5px rgba(15, 23, 42, 0.08), 0 8px 10px -6px rgba(15, 23, 42, 0.04);
            --shadow-hover: 0 20px 30px -10px rgba(79, 70, 229, 0.15), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--bg-page);
            color: var(--slate);
            line-height: 1.6;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* Navbar */
        .navbar {
            background: #ffffff;
            border-bottom: 1px solid var(--border);
            position: sticky;
            top: 0;
            z-index: 50;
            box-shadow: var(--shadow-sm);
        }

        .navbar-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 16px 24px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar-brand {
            display: flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
            color: var(--dark);
            font-weight: 700;
            font-size: 20px;
        }

        .navbar-nav {
            display: flex;
            align-items: center;
            gap: 12px;
            list-style: none;
        }

        .nav-link {
            text-decoration: none;
            color: var(--muted);
            font-weight: 500;
            font-size: 14px;
            padding: 8px 16px;
            border-radius: var(--radius-sm);
            transition: all 0.2s ease;
        }

        .nav-link:hover, .nav-link.active {
            color: var(--primary);
            background-color: var(--primary-light);
        }

        /* Footer */
        footer {
            margin-top: auto;
            background: #ffffff;
            border-top: 1px solid var(--border);
            padding: 24px;
            text-align: center;
            font-size: 13px;
            color: var(--muted);
        }

        .footer-container {
            max-width: 1200px;
            margin: 0 auto;
        }
    </style>
    
    {{ $styles ?? '' }}
</head>
<body>

    <!-- Header Component -->
    <x-header :active="$active" />

    <!-- Main Page Content -->
    {{ $slot }}

    <!-- Footer Component -->
    <x-footer />

    {{ $scripts ?? '' }}
</body>
</html>
