<?php

return array(

    "customfield"               => "Pole niestandardowe|Pola niestandardowe",

    // Options
    "boolean"                   => "Prawda/fałsz",
    "checkbox"                  => "Checkbox",
    "checklist"                 => "Check lista",
    "date"                      => "Dane",
    "multiple"                  => "Wielokrotny wybór",
    "options"                   => "Opcje",
    "radio"                     => "Jednokrotny wybór",
    "rating"                    => "Ocena (1 do 5)",
    "text"                      => "Tekst",
    "textarea"                  => "Pole tekstowe",

    "public"                    => "Publiczne",
    "public_desc"               => "Jeśli pole niestandardowe jest pokazywane publicznie w interfejsie lub jest przeznaczone tylko dla personelu.",
    "encrypted"                 => "Zaszyfrowane",
    "purge_desc"                => "Jeśli wartość pola niestandardowego powinna zostać automatycznie wyczyszczona po rozwiązaniu zgłoszenia.",
    "locked"                    => "Zablokowany",
    "locked_desc"               => "Jeżeli użytkownik nie może zmienić raz ustawionej wartości pola niestandardowego.",
    "department_desc"           => "Wybierz, w których działach pole jest dostępne.",

    /*
     * 2.0.2
     */
    "please_select"             => "Proszę wybrać...",

    /*
     * 2.0.3
     */
    "description_desc"          => "Tekst pomocy, który pojawi się pod niestandardowym polem i opcjonalnie może pozostać pusty.",

    /*
     * 2.1.0
     */
    "brand_desc"                => "Wybierz marki, w których dostępne jest pole.",

    /*
     * 2.3.0
     */
    "option_warning"            => "Usunięcie istniejących opcji wyczyści wszystkie zapisane pola, które mają aktualnie wybrane te wartości.",
    "regex_basic_desc"          => "Opcjonalnie określ wyrażenie regularne, aby zweryfikować wartość pola niestandardowego.",
    "regex_desc"                => "W wyrażeniu regularnym rozróżniana jest wielkość liter, nie ma potrzeby określania ograniczników wyrażeń regularnych, a ukośniki zostaną automatycznie zmienione. Przykład: ^[a-z0-9_-]{6,18}$ wymusiłoby że wartość ma długość 6-18 znaków i zawiera tylko mieszankę znaków alfanumerycznych, podkreśleń i myślników.",
    "regex_error_message"       => "Komunikat o błędzie walidacji",
    "regex_error_message_desc"  => "Opcjonalnie określ niestandardowy komunikat o błędzie, który będzie wyświetlany, jeśli wartość nie pasuje do walidacji wyrażenia regularnego, w przeciwnym razie zostanie wyświetlony ogólny komunikat. Komunikat zostanie wyświetlony dokładnie tak, jak został wprowadzony, dlatego zalecamy dodanie niestandardowego nazwa pola, aby komunikat o błędzie był bardziej oczywisty.",
    "custom_field_values"       => "Wartości pól niestandardowych",
    "depends_on"                => "Zależy od",
    "depends_on_desc"           => "Jeśli zaznaczone, to pole będzie widoczne dla użytkownika tylko po wybraniu określonej wartości pola. Widoczność marki i działu zostanie automatycznie odziedziczona z pola, od którego zależy.",
    "select_option"             => "Wybierz opcję...",
    "purge"                     => "Usuń",
    "encrypted_desc"            => "Jeśli wartość pola niestandardowego jest poufna i powinna zostać zapisana w zaszyfrowanej bazie danych. Nie można tego zmienić po utworzeniu pola niestandardowego.",

    /*
     * 2.3.1
     */
    "required_desc"             => "Jeśli pole niestandardowe musi zostać wypełnione. W przypadku pola wyboru, listy kontrolnej lub wielu typów opcji, użytkownik będzie musiał wybrać co najmniej jedną opcję.",

    /*
     * 3.3.0
     */
    "encrypted_value"           => "** ZASZYFROWANE **",
);
