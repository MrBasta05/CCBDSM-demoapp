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

### Wymagane ustawienia dla GitHub Actions

Komunikat "add or update the azure app service build and deployment workflow config" najczęściej oznacza brak poprawnej konfiguracji workflow albo brak danych dostępowych.

Ustaw w repozytorium GitHub:

1. `Settings -> Secrets and variables -> Actions -> New repository secret`
2. Dodaj sekret `AZURE_WEBAPP_PUBLISH_PROFILE`
3. Wklej zawartość Publish Profile pobraną z Azure Portal (App Service -> Overview -> Get publish profile)
4. `Settings -> Secrets and variables -> Actions -> Variables`
5. Dodaj zmienną `AZURE_WEBAPP_NAME` z dokładną nazwą App Service

Po dodaniu sekretu i zmiennej zrób commit i push, a workflow `deploy.yml` uruchomi się automatycznie po zmianach na gałęzi `main`.

## Zawartość

- `index.php` - strona główna
- `.gitignore` - podstawowe ignorowane pliki
- `README.md` - instrukcja uruchomienia i wdrożenia
