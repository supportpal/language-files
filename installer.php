<?php

return array(

    // Pre installation check
    "requirements_failed"       => "Wymagania systemowe nie powiodły się",

    // Index
    "supportpal_installer"      => "SupportPal Instalator",
    "select_language"           => "Wybierz język",
    "install_type"              => "Typ instalacji",
    "install"                   => "Świeża instalacja",
    "upgrade"                   => "Uaktualnij istniejącą instalację",
    "support"                   => "Kod licencyjny użyty do tej instalacji nie ma prawidłowego wsparcia &amp; uaktualnia subskrypcję i jako taka nie kwalifikuje się do zainstalowania tej wersji SupportPal. <a href='https://www.supportpal.com/manage/cart.php?gid=addons' target='_blank'>odnów</a> wsparcie &amp; subskrypcja aktualizacji lub przywróć pliki instalacyjne.",

    // Upgrade
    "successfully_updated"      => "Gratulacje, SupportPal został pomyślnie uaktualniony.",

    // Install
    // Step 1
    "step_1"                    => "Krok 1 z 7: Zaakceptuj umowę EULA",
    "step_1_desc"               => "Przeczytaj naszą umowę licencyjną na oprogramowanie poniżej. Kontynuując, zgadzasz się na licencję.",
    "i_accept_and_continue"     => "Akceptuję i kontynuuję",

    // Step 2
    "step_2"                    => "Krok 2 z 7: Wymagania systemowe",
    "not_available"             => "Niedostępne",
    "php_version"               => "Wersja PHP",
    "php_version_not_found"     => "Niedostępne, znaleziono wersję PHP: :version",
    "php_extensions"            => "Rozszerzenia PHP",
    "file_writeable"            => "Uprawnienia do plików",
    "file_writeable_desc"       => "Wszystkie poniższe elementy powinny być dostępne do zapisu przez serwer WWW. Zalecamy korzystanie z uprawnień do plików 755, chociaż niektóre systemy mogą wymagać uprawnień 777, jeśli pliki nie są własnością użytkownika serwera WWW. Katalogi powinny być możliwe do zapisania rekurencyjnie.",

    // Step 3
    "step_3"                    => "Krok 3 z 7: Baza danych",
    "step_3_desc"               => "Wprowadź szczegóły bazy danych skonfigurowanej dla SupportPal.",
    "hostname"                  => "Nazwa hosta",
    "port"                      => "Port",
    "port_desc"                 => "(Zmień tylko, jeśli nie jest to domyślny port 3306)",
    "database"                  => "Baza danych",
    "database_not_empty"        => "Baza danych nie może zawierać żadnych tabel.",

    // Step 4
    "step_4"                    => "Krok 4 z 7: Twórz tabele",
    "step_4_desc"               => "Migracja zostanie wykonana w tle, a szczegółowy dziennik zostanie zapisany poniżej, może to potrwać kilka minut. Po zakończeniu kliknij przycisk Kontynuuj, który się pojawi.",

    // Step 5
    "step_5"                    => "Krok 5 z 7: Konto operatora",
    "step_5_desc"               => "SupportPal wymaga ważnej licencji do działania, wprowadź ją poniżej.",
    "license_desc"              => "Twój klucz licencyjny SupportPal ma 23 znaki i zaczyna się od SP-",
    "operator_desc"             => "Utwórz konto administratora dla panelu operatora, wprowadzając wszystkie poniższe dane.",
    "validating_license"        => "Weryfikuję licencję...",

    // Step 6
    "step_6"                    => "Krok 6 z 7: Szybka konfiguracja",
    "step_6_desc"               => "Wpisz poniżej dane swojej firmy i witryny.",
    "locale_desc"               => "Ustaw ustawienia regionalne dla swojego systemu.",
    "operator_success"          => "Twoje konto administratora zostało utworzone.",

    // Step 7
    "step_7"                    => "Krok 7 z 7: Zainstalowano!",
    "successfully_installed"    => "Gratulacje, SupportPal został pomyślnie zainstalowany.",
    "operator_panel"            => "Panel operatora",
    "help_desc"                 => "Jeśli potrzebujesz pomocy w konfiguracji lub korzystaniu z SupportPal, mamy dwa główne źródła informacji:",
    "submit_a_ticket"           => "Prześlij zgłoszenie",

    /*
     * 2.0.1
     */

    "post_install"              => "Aby system działał poprawnie, należy skonfigurować zadanie cron. Przeczytaj nasze <a href='https://docs.supportpal.com/current/New+Installation#PostInstallationSteps'>kroki po instalacji</a>, aby uzyskać szczegółowe informacje na temat tego i innych zalecanych działań mających na celu poprawę funkcjonalności i bezpieczeństwa.",

    /*
     * 2.0.2
     */
    "required_requirements"     => "Spełniasz :required :całkowite wymagane wymagania.",
    "optional_requirements"     => "Spełniasz :optional z :total opcjonalnych wymagań.",
    "both_requirements"         => "Spełniasz :required z :total_required wymagane wymagania i :optional z :total_optional wymagań.",
    "php_version_is"            => "Twoja wersja PHP to :version.",
    "enabled"                   => "Włączony",
    "disabled"                  => "Wyłączony",
    "php_settings"              => "Ustawienia PHP",
    "ipv6_support"              => "Obsługa IPv6",
    "memory_limit"              => ">= 128 MB pamięci",
    "memory_limit_error"        => "Twój limit pamięci to „:limit”.",
    "permission_denied"         => "Odmowa dostępu",
    "writable"                  => "Możliwy do zapisania",
    "help_php_version"          => "Aby uzyskać pomoc dotyczącą instalacji nowej wersji PHP, skontaktuj się z dostawcą usług hostingowych lub administratorem serwera.",
    "help_php_extensions"       => "Rozszerzenia PHP różnią się w zależności od serwera, hosta i innych zmiennych systemowych. Aby uzyskać pomoc dotyczącą instalacji brakujących rozszerzeń, skontaktuj się z dostawcą usług hostingowych lub administratorem serwera.",
    "help_php_settings"         => "Aby uzyskać dodatkową pomoc, przeczytaj <a target=\"_blank\" href=\"https://docs.supportpal.com/current/System+Requirements#PHPSettings\">Pomoc dotycząca ustawień PHP</a>.",
    "disabled_functions"        => "Funkcje wyłączone",
    "help_mysql_version"        => "Aby uzyskać pomoc w instalacji nowej wersji MySQL, skontaktuj się z dostawcą usług hostingowych lub administratorem serwera.",
    "mysql_version"             => "Wersja MySQL",
    "mysql_version_not_found"   => "Niedostępne, znaleziono wersję MySQL: :version",

    /*
     * 2.1.0
     */
    "ipv6_failure"              => "Jeśli twój serwer obsługuje sieć IPv6, zainstaluj rozszerzenie php-sockets.",
    "email_address_desc"        => "Wprowadź swój główny firmowy adres e-mail, zostanie on ustawiony jako domyślny adres e-mail do wysyłania i adres e-mail w pierwszym dziale. Później będziesz mógł dodać inne adresy e-mail.",

    /*
     * 2.2.0
     */
    "ioncube_version"           => "Wersja Loadera ionCube :required lub wyższa. Znaleziono: ':version'.",

    /*
     * 2.3.0
     */
    "png_jpg_support"           => "Obsługa formatu PNG i JPEG",
    "allow_url_fopen"           => "„allow_url_fopen” włączone",
    "allow_url_fopen_failure"   => "Włącz opcję „allow_url_fopen” w pliku php.ini, aby korzystać z Gravatara i innych funkcji.",
    "allowed_methods"           => "Dozwolone metody HTTP",
    "help_allowed_methods"      => "Twój serwer sieciowy musi zezwalać na wszystkie poniższe metody HTTP. Więcej informacji znajdziesz w naszej <a href='https://docs.supportpal.com/current/New+Installation#PostInstallationSteps' target='_blank'>dokumentacji nowej instalacji</a>.",

    /*
     * 2.4.0
     */
    "mysql_server_version"      => "Wersja serwera >= :min",
    "mysql_server_version_desc" => "Do uruchomienia SupportPal wymagany jest MySQL :min lub nowszy. Znaleziono: ':version'.",
    "mysql_client_version"      => "Wersja klienta >= :min (:mysqlnd_min dla MySQLnd)",
    "mysql_client_version_desc" => "Do uruchomienia SupportPal wymagana jest wersja klienta MySQL :min lub nowsza (:mysqlnd_min dla MySQLnd). Znaleziono: ':version'.",

    "upgrade_step"              => "Krok :num z :total: ",
    "accept_eula"               => "Zaakceptuj umowę EULA",
    "system_requirements"       => "Wymagania systemowe",
    "update_database"           => "Zaktualizuj bazę danych",
    "upgrade_complete"          => "Uaktualnienie zakończone",

    "upgrade_support"           => "Jeśli znajdziesz jakieś problemy lub potrzebujesz pomocy przy korzystaniu z nowych funkcji w SupportPal, przeczytaj naszą dokumentację lub otwórz zgłoszenie z nami.",

    /*
     * 2.5.0
     */
    "press_to_begin"            => "Aby rozpocząć, naciśnij poniższy przycisk.",
    "locked"                    => "Instalacja/aktualizacja w toku",
    "locked_desc"               => "Wykryto plik blokady (:path).\nSprawdź, czy instalator nie jest już uruchomiony.\n\nMożesz usunąć ten plik, jeśli masz pewność, że inna instalacja lub aktualizacja nie jest w toku.",

    "error_and_empty_database"  => "Wystąpił błąd. Może być konieczne opróżnienie bazy danych przed ponownym rozpoczęciem.",
    "login_with_details"        => "Możesz się zalogować, korzystając z podanych wcześniej danych.",
    "command_not_available"     => "Polecenie niedostępne. Jeśli uważasz, że zostało to pokazane błędnie, uruchom 'php artisan cache:clear', a następnie ponownie uruchom to polecenie.",
    "read_upgrade_guide"        => "Nasz przewodnik po uaktualnieniu zawiera przydatne informacje dotyczące wprowadzania zmian i najlepszych praktyk dotyczących uaktualniania:\nhttps://docs.supportpal.com/current/Upgrade+Guide://docs.supportpal.com/current/Upgrade+Guide",
    "confirm_backup_taken"      => "[OSTRZEŻENIE] Przed kontynuowaniem upewnij się, że wykonałeś kopię zapasową bazy danych SupportPal i plików aplikacji.\nPotwierdź wykonanie kopii zapasowej, sprawdzenie, czy nie jest uszkodzona i jesteś gotowy do kontynuowania.",
    "error_and_revert_database" => "Wystąpił błąd. Przywróć bazę danych do kopii zapasowej przed ponownym rozpoczęciem.",

    /*
     * 2.6.0
     */
    "database_config_exists"    => "Plik konfiguracyjny bazy danych już istnieje. Jeśli jesteś pewien, że aplikacja nie jest jeszcze zainstalowana, usuń /config/:environment/database.php i zacznij od nowa./config/:environment/database.php and start again.",

    /*
     * 3.0.0
     */
    "index_desc"                => "Dziękujemy za wybranie SupportPal. Sprawdź, czy poniższy typ instalacji jest poprawny, a następnie kliknij przycisk Kontynuuj.",

    /*
     * 3.4.0
     */
    "seeding"                   => "Seeding",
    "seeded"                    => "Seeded",
    "migrating"                 => "Migrowanie",
    "migrated"                  => "Zmigrowano",
    "database_setup_complete"   => "Konfiguracja bazy danych zakończona.",
    "created_repository"        => "Utworzono repozytorium ':name' pomyślnie.",

    /*
     * 3.6.0
     */
    "suggest_run_update"        => "Polecenie niedostępne. Uruchom app:update, aby pobrać i zaktualizować do najnowszej dostępnej wersji: %s.",
    "suggest_run_upgrade"       => "Aktualizacja jest już w toku. Zamiast tego uruchom app:upgrade.",
    "failed_to_download"        => "Nie udało się pobrać pliku: :message",
    "backup_failed_abort"       => "Tworzenie kopii zapasowej nie powiodło się. Przerywam aktualizację.",
    "command_failed"            => "Polecenie :command, nie powiodło się z wynikiem: :message.",
    "already_latest_version"    => "Korzystasz już z najnowszej wersji (:version).",
    "update_not_supported"      => "Automatyczna aktualizacja do najnowszej wersji (:version) nie jest obsługiwana.",
    "current_and_new_version"   => "Masz wersję :current_version. Najnowsza dostępna wersja to :new_version.",
    "update_to_version"         => "Masz wersję :current_version. Czy chcesz zaktualizować do :new_version?",
    "downloading_version"       => "Pobieranie wersji :version do :path...",
    "checksum_not_matched"      => "Pobrany plik nie przeszedł weryfikacji sumy kontrolnej.",

    "check_readiness"           => "Sprawdzam, czy aplikacja jest w stanie zaktualizować...",
    "read_only"                 => "System plików w \":path\" jest tylko do odczytu. Aktualizacje nie mogą być stosowane w systemie plików tylko do odczytu.",
    "file_ownership"            => "Plik \":path\" należy do \":owner\", ale PHP działa jako \":actual\". Właściciel pliku i użytkownik PHP muszą być tacy sami podczas aktualizacji wszystkich plików aplikacji.",
    "minimum_disk_space"        => "Katalog \":path\" ma niewystarczającą ilość miejsca. Musi być co najmniej :space w megabajtach.",

    /*
     * 3.6.1
     */
    "upgrade_via_docker"        => "Wykryto wdrożenie platformy Docker. Aby dokonać aktualizacji, śledź https://docs.supportpal.com/current/Upgrade+Guide#docker",

    /*
     * 3.7.0
     */
    "troubleshooting_tips"      => "Uzyskaj wskazówki dotyczące rozwiązywania problemów",
);
