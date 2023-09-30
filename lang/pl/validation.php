<?php

declare(strict_types=1);

return [
    'accepted'             => 'Pole :attribute musi zostać zaakceptowane.',
    'accepted_if'          => 'Pole :attribute musi zostać zaakceptowane gdy :other ma wartość :value.',
    'active_url'           => 'Pole :attribute jest nieprawidłowym adresem URL.',
    'after'                => 'Pole :attribute musi być datą późniejszą od :date.',
    'after_or_equal'       => 'Pole :attribute musi być datą nie wcześniejszą niż :date.',
    'alpha'                => 'Pole :attribute może zawierać jedynie litery.',
    'alpha_dash'           => 'Pole :attribute może zawierać jedynie litery, cyfry i myślniki.',
    'alpha_num'            => 'Pole :attribute może zawierać jedynie litery i cyfry.',
    'array'                => 'Pole :attribute musi być tablicą.',
    'ascii'                => 'Pole :attribute może zawierać tylko jednobajtowe znaki alfanumeryczne i symbole.',
    'before'               => 'Pole :attribute musi być datą wcześniejszą od :date.',
    'before_or_equal'      => 'Pole :attribute musi być datą nie późniejszą niż :date.',
    'between'              => [
        'array'   => 'Pole :attribute musi składać się z :min - :max elementów.',
        'file'    => 'Pole :attribute musi zawierać się w granicach :min - :max kilobajtów.',
        'numeric' => 'Pole :attribute musi zawierać się w granicach :min - :max.',
        'string'  => 'Pole :attribute musi zawierać się w granicach :min - :max znaków.',
    ],
    'boolean'              => 'Pole :attribute musi mieć wartość logiczną prawda albo fałsz.',
    'can'                  => 'Pole :attribute zawiera nieautoryzowaną wartość.',
    'confirmed'            => 'Potwierdzenie pola :attribute nie zgadza się.',
    'current_password'     => 'Hasło jest nieprawidłowe.',
    'date'                 => 'Pole :attribute nie jest prawidłową datą.',
    'date_equals'          => 'Pole :attribute musi być datą równą :date.',
    'date_format'          => 'Pole :attribute nie jest w formacie :format.',
    'decimal'              => 'Pole :attribute musi mieć :decimal miejsc po przecinku.',
    'declined'             => 'Pole :attribute musi zostać odrzucony.',
    'declined_if'          => 'Pole :attribute musi zostać odrzucony, gdy :other ma wartość :value.',
    'different'            => 'Pole :attribute oraz :other muszą się różnić.',
    'digits'               => 'Pole :attribute musi składać się z :digits cyfr.',
    'digits_between'       => 'Pole :attribute musi mieć od :min do :max cyfr.',
    'dimensions'           => 'Pole :attribute ma niepoprawne wymiary.',
    'distinct'             => 'Pole :attribute ma zduplikowane wartości.',
    'doesnt_end_with'      => 'Pole :attribute nie może kończyć się jednym z następujących wartości: :values.',
    'doesnt_start_with'    => 'Pole :attribute nie może zaczynać się od jednego z następujących wartości: :values.',
    'email'                => 'Pole :attribute nie jest poprawnym adresem e-mail.',
    'ends_with'            => 'Pole :attribute musi kończyć się jedną z następujących wartości: :values.',
    'enum'                 => 'Pole :attribute ma niepoprawną wartość.',
    'exists'               => 'Zaznaczone pole :attribute jest nieprawidłowe.',
    'file'                 => 'Pole :attribute musi być plikiem.',
    'filled'               => 'Pole :attribute nie może być puste.',
    'gt'                   => [
        'array'   => 'Pole :attribute musi mieć więcej niż :value elementów.',
        'file'    => 'Pole :attribute musi być większe niż :value kilobajtów.',
        'numeric' => 'Pole :attribute musi być większe niż :value.',
        'string'  => 'Pole :attribute musi być dłuższe niż :value znaków.',
    ],
    'gte'                  => [
        'array'   => 'Pole :attribute musi mieć :value lub więcej elementów.',
        'file'    => 'Pole :attribute musi być większe lub równe :value kilobajtów.',
        'numeric' => 'Pole :attribute musi być większe lub równe :value.',
        'string'  => 'Pole :attribute musi być dłuższe lub równe :value znaków.',
    ],
    'image'                => 'Pole :attribute musi być obrazkiem.',
    'in'                   => 'Zaznaczony element :attribute jest nieprawidłowy.',
    'in_array'             => 'Pole :attribute nie znajduje się w :other.',
    'integer'              => 'Pole :attribute musi być liczbą całkowitą.',
    'ip'                   => 'Pole :attribute musi być prawidłowym adresem IP.',
    'ipv4'                 => 'Pole :attribute musi być prawidłowym adresem IPv4.',
    'ipv6'                 => 'Pole :attribute musi być prawidłowym adresem IPv6.',
    'json'                 => 'Pole :attribute musi być poprawnym ciągiem znaków JSON.',
    'lowercase'            => ':Attribute musi być pisany małymi literami.',
    'lt'                   => [
        'array'   => 'Pole :attribute musi mieć mniej niż :value elementów.',
        'file'    => 'Pole :attribute musi być mniejsze niż :value kilobajtów.',
        'numeric' => 'Pole :attribute musi być mniejsze niż :value.',
        'string'  => 'Pole :attribute musi być krótsze niż :value znaków.',
    ],
    'lte'                  => [
        'array'   => 'Pole :attribute musi mieć :value lub mniej elementów.',
        'file'    => 'Pole :attribute musi być mniejsze lub równe :value kilobajtów.',
        'numeric' => 'Pole :attribute musi być mniejsze lub równe :value.',
        'string'  => 'Pole :attribute musi być krótsze lub równe :value znaków.',
    ],
    'mac_address'          => 'Pole :attribute musi być prawidłowym adresem MAC.',
    'max'                  => [
        'array'   => 'Pole :attribute nie może mieć więcej niż :max elementów.',
        'file'    => 'Pole :attribute nie może być większe niż :max kilobajtów.',
        'numeric' => 'Pole :attribute nie może być większe niż :max.',
        'string'  => 'Pole :attribute nie może być dłuższe niż :max znaków.',
    ],
    'max_digits'           => 'Pole :attribute nie może mieć więcej niż :max cyfr.',
    'mimes'                => 'Pole :attribute musi być plikiem typu :values.',
    'mimetypes'            => 'Pole :attribute musi być plikiem typu :values.',
    'min'                  => [
        'array'   => 'Pole :attribute musi mieć przynajmniej :min elementów.',
        'file'    => 'Pole :attribute musi mieć przynajmniej :min kilobajtów.',
        'numeric' => 'Pole :attribute musi być nie mniejsze od :min.',
        'string'  => 'Pole :attribute musi mieć przynajmniej :min znaków.',
    ],
    'min_digits'           => 'Pole :attribute musi mieć co najmniej :min cyfr.',
    'missing'              => 'Musi brakować pola :attribute.',
    'missing_if'           => 'Jeśli :other to :value, musi brakować pola :attribute.',
    'missing_unless'       => 'Musi brakować pola :attribute, chyba że :other to :value.',
    'missing_with'         => 'Jeśli występuje wartość :values, musi brakować pola :attribute.',
    'missing_with_all'     => 'Jeśli występuje :values, musi brakować pola :attribute.',
    'multiple_of'          => 'Pole :attribute musi być wielokrotnością wartości :value',
    'not_in'               => 'Zaznaczony :attribute jest nieprawidłowy.',
    'not_regex'            => 'Format pola :attribute jest nieprawidłowy.',
    'numeric'              => 'Pole :attribute musi być liczbą.',
    'password'             => [
        'letters'       => 'Pole :attribute musi zawierać przynajmniej jedną literę.',
        'mixed'         => 'Pole :attribute musi zawierać przynajmniej jedną wielką i jedną małą literę.',
        'numbers'       => 'Pole :attribute musi zawierać przynajmniej jedną liczbę.',
        'symbols'       => 'Pole :attribute musi zawierać przynajmniej jeden symbol.',
        'uncompromised' => 'Podany :attribute pojawił się w wycieku danych. Proszę wybrać inną wartość :attribute.',
    ],
    'present'              => 'Pole :attribute musi być obecne.',
    'prohibited'           => 'Pole :attribute jest zabronione.',
    'prohibited_if'        => 'Pole :attribute jest zabronione, gdy :other to :value.',
    'prohibited_unless'    => 'Pole :attribute jest zabronione, chyba że :other jest w :values.',
    'prohibits'            => 'Pole :attribute zabrania obecności :other.',
    'regex'                => 'Format pola :attribute jest nieprawidłowy.',
    'required'             => 'Pole :attribute jest wymagane.',
    'required_array_keys'  => 'Pole :attribute musi zawierać wartości: :values.',
    'required_if'          => 'Pole :attribute jest wymagane gdy :other ma wartość :value.',
    'required_if_accepted' => 'To pole jest wymagane gdy :other jest zaakceptowane.',
    'required_unless'      => 'Pole :attribute jest wymagane jeżeli :other nie znajduje się w :values.',
    'required_with'        => 'Pole :attribute jest wymagane gdy :values jest obecny.',
    'required_with_all'    => 'Pole :attribute jest wymagane gdy wszystkie :values są obecne.',
    'required_without'     => 'Pole :attribute jest wymagane gdy :values nie jest obecny.',
    'required_without_all' => 'Pole :attribute jest wymagane gdy żadne z :values nie są obecne.',
    'same'                 => 'Pole :attribute i :other muszą być takie same.',
    'size'                 => [
        'array'   => 'Pole :attribute musi zawierać :size elementów.',
        'file'    => 'Pole :attribute musi mieć :size kilobajtów.',
        'numeric' => 'Pole :attribute musi mieć :size.',
        'string'  => 'Pole :attribute musi mieć :size znaków.',
    ],
    'starts_with'          => 'Pole :attribute musi zaczynać się jedną z następujących wartości: :values.',
    'string'               => 'Pole :attribute musi być ciągiem znaków.',
    'timezone'             => 'Pole :attribute musi być prawidłową strefą czasową.',
    'ulid'                 => 'Pole :attribute musi być prawidłowym identyfikatorem ULID.',
    'unique'               => 'Taki :attribute już występuje.',
    'uploaded'             => 'Nie udało się wgrać pliku :attribute.',
    'uppercase'            => ':Attribute musi być pisany wielkimi literami.',
    'url'                  => 'Format pola :attribute jest nieprawidłowy.',
    'uuid'                 => 'Pole :attribute musi być poprawnym identyfikatorem UUID.',
    'attributes'           => [
        'address'                  => 'adres',
        'age'                      => 'wiek',
        'amount'                   => 'ilość',
        'area'                     => 'obszar',
        'available'                => 'dostępny',
        'birthday'                 => 'urodziny',
        'body'                     => 'treść',
        'city'                     => 'miasto',
        'content'                  => 'zawartość',
        'country'                  => 'kraj',
        'created_at'               => 'utworzono',
        'creator'                  => 'twórca',
        'current_password'         => 'aktualne hasło',
        'date'                     => 'data',
        'date_of_birth'            => 'data urodzenia',
        'day'                      => 'dzień',
        'deleted_at'               => 'skasowano',
        'description'              => 'opis',
        'district'                 => 'dzielnica',
        'duration'                 => 'czas trwania',
        'email'                    => 'adres e-mail',
        'excerpt'                  => 'wyjątek',
        'filter'                   => 'filtr',
        'first_name'               => 'imię',
        'gender'                   => 'płeć',
        'group'                    => 'grupa',
        'hour'                     => 'godzina',
        'image'                    => 'obrazek',
        'last_name'                => 'nazwisko',
        'lesson'                   => 'lekcja',
        'line_address_1'           => 'adres 1',
        'line_address_2'           => 'adres 2',
        'message'                  => 'wiadomość',
        'middle_name'              => 'drugie imię',
        'minute'                   => 'minuta',
        'mobile'                   => 'numer telefonu komórkowego',
        'month'                    => 'miesiąc',
        'name'                     => 'nazwa',
        'national_code'            => 'kod kraju',
        'number'                   => 'numer',
        'password'                 => 'hasło',
        'password_confirmation'    => 'potwierdzenie hasła',
        'phone'                    => 'numer telefonu',
        'photo'                    => 'zdjęcie',
        'postal_code'              => 'kod pocztowy',
        'price'                    => 'cena',
        'province'                 => 'prowincja',
        'recaptcha_response_field' => 'pole odpowiedzi recaptcha',
        'remember'                 => 'zapamiętaj',
        'restored_at'              => 'odtworzono',
        'result_text_under_image'  => 'wynikowy tekst pod obrazkiem',
        'role'                     => 'rola',
        'second'                   => 'sekunda',
        'sex'                      => 'płeć',
        'short_text'               => 'krótki tekst',
        'size'                     => 'rozmiar',
        'state'                    => 'stan',
        'street'                   => 'ulica',
        'student'                  => 'uczeń',
        'subject'                  => 'temat',
        'teacher'                  => 'nauczyciel',
        'terms'                    => 'warunki',
        'test_description'         => 'testowy opis',
        'test_locale'              => 'testowa lokalizacja',
        'test_name'                => 'testowe imię',
        'text'                     => 'tekst',
        'time'                     => 'czas',
        'title'                    => 'tytuł',
        'updated_at'               => 'zaktualizowano',
        'username'                 => 'nazwa użytkownika',
        'year'                     => 'rok',
        'bring'                    => 'przyniosę',
        'fullName'                => 'imię i nazwisko',
    ],
];
