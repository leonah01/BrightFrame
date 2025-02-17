#!/bin/bash

# Project Root Directory
PROJECT_ROOT="brightframe-project"

# List of Directories to Create
DIRS=(
    "$PROJECT_ROOT/app/Http/Controllers"
    "$PROJECT_ROOT/app/Http/Middleware"
    "$PROJECT_ROOT/app/Http/Requests"
    "$PROJECT_ROOT/app/Models"
    "$PROJECT_ROOT/app/Services"
    "$PROJECT_ROOT/app/Providers"
    "$PROJECT_ROOT/bootstrap"
    "$PROJECT_ROOT/config"
    "$PROJECT_ROOT/database/migrations"
    "$PROJECT_ROOT/database/seeders"
    "$PROJECT_ROOT/database/factories"
    "$PROJECT_ROOT/public/css"
    "$PROJECT_ROOT/public/js"
    "$PROJECT_ROOT/public/images"
    "$PROJECT_ROOT/resources/views/layouts"
    "$PROJECT_ROOT/resources/views/components"
    "$PROJECT_ROOT/resources/views/auth"
    "$PROJECT_ROOT/resources/views/pages"
    "$PROJECT_ROOT/resources/lang"
    "$PROJECT_ROOT/resources/css"
    "$PROJECT_ROOT/resources/js"
    "$PROJECT_ROOT/routes"
    "$PROJECT_ROOT/storage"
    "$PROJECT_ROOT/tests"
    "$PROJECT_ROOT/vendor"
)

# List of Files to Create
FILES=(
    "$PROJECT_ROOT/public/index.php"
    "$PROJECT_ROOT/routes/web.php"
    "$PROJECT_ROOT/routes/api.php"
    "$PROJECT_ROOT/.env"
    "$PROJECT_ROOT/.gitignore"
    "$PROJECT_ROOT/composer.json"
    "$PROJECT_ROOT/artisan"
    "$PROJECT_ROOT/README.md"
    "$PROJECT_ROOT/LICENSE"
    "$PROJECT_ROOT/resources/views/layouts/master.blade.php"
    "$PROJECT_ROOT/resources/views/dashboard.blade.php"
    "$PROJECT_ROOT/resources/views/projects.blade.php"
    "$PROJECT_ROOT/resources/views/clients.blade.php"
    "$PROJECT_ROOT/resources/views/sales.blade.php"
)

# Create directories
echo "📂 Creating project directories..."
for dir in "${DIRS[@]}"; do
    mkdir -p "$dir"
done

# Create files
echo "📄 Creating project files..."
for file in "${FILES[@]}"; do
    touch "$file"
done

# Laravel .gitignore content
cat <<EOL > "$PROJECT_ROOT/.gitignore"
vendor/
node_modules/
storage/
.env
EOL

# Default README content
cat <<EOL > "$PROJECT_ROOT/README.md"
# BrightFrame Project Management System

## Overview
This is a Laravel-based project management system designed for BrightFrame employees.

## Installation
1. Clone the repository:
   \`\`\`
   git clone https://github.com/your-repo/brightframe-project.git
   \`\`\`
2. Install dependencies:
   \`\`\`
   composer install
   \`\`\`
3. Set up the environment:
   \`\`\`
   cp .env.example .env
   php artisan key:generate
   \`\`\`

## Features
- User Authentication & Roles
- Project & Work Tracking
- Chat System (WebSockets)
- Client & Sales Management
- Blog Management System

## License
MIT License
EOL

# Make artisan executable
chmod +x "$PROJECT_ROOT/artisan"

echo "✅ Laravel project structure created successfully!"
