# Hello World PHP

Prosta strona w PHP przygotowana do wrzucenia do repozytorium GitHub i wdrożenia na Microsoft Azure App Service.

## Uruchomienie lokalne

Jeśli masz PHP zainstalowane lokalnie:

```bash
php -S localhost:8000
```

Następnie otwórz:

```bash
http://localhost:8000
```

## Wdrożenie na Azure App Service

1. Utwórz repozytorium na GitHub i wypchnij ten kod.
2. W Azure Portal utwórz App Service.
3. Wybierz runtime PHP.
4. Podepnij repozytorium GitHub jako źródło wdrożenia.
5. Po deployu strona główna będzie dostępna z pliku `index.php`.

## Zawartość

- `index.php` - strona główna
- `.gitignore` - podstawowe ignorowane pliki
- `README.md` - instrukcja uruchomienia i wdrożenia
