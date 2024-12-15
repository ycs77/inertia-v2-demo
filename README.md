# Inertia v2 範例

使用 Composer 安裝：

```bash
composer install
```

設定 `.env` 文件：

```bash
cp .env.example .env
php artisan key:generate
```

安裝 npm 依賴套件：

```bash
npm install
```

編譯資產：

```bash
npm run build
```

啟動伺服器：

```bash
php artisan serve
```

現在在瀏覽器中打開 [http://localhost:8000/](http://localhost:8000/)。

