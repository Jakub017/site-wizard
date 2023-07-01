@extends('dashboard.layouts.main')

@section('content')

<h2 class="section-heading">Edytuj dane klienta</h2>
<div class="dashboard-block block-50">
    <form method="POST" action="{{route('clients.update', $client->id)}}" class="dashboard-form">
        @csrf
        @method('PUT')
        <div class="dashboard-form-group">
            <label for="name" class="dashboard-label">Imię i nazwisko (wymagane)</label>
            <input name="name" type="text" class="dashboard-input" placeholder="Zacznij wprowadzać..."
                value="{{$client->name}}">
            @error('name')
            <p>Błąd</p>
            @enderror
        </div>
        <div class="dashboard-form-group">
            <label for="company" class="dashboard-label">Nazwa firmy</label>
            <input name="company" type="text" class="dashboard-input" placeholder="Zacznij wprowadzać..."
                value="{{$client->company}}">
            @error('company')
            <p>Błąd</p>
            @enderror
        </div>
        <div class="dashboard-form-group">
            <label for="country" class="dashboard-label">Kraj (wymagane)</label>
            <select class="dashboard-input" id="country" name="country">
                <option value="">Wybierz kraj</option>
                <option value="Afganistan">Afganistan</option>
                <option value="Albania">Albania</option>
                <option value="Algieria">Algieria</option>
                <option value="Andora">Andora</option>
                <option value="Angola">Angola</option>
                <option value="Anguilla">Anguilla</option>
                <option value="Antarktyka">Antarktyka</option>
                <option value="Antigua i Barbuda">Antigua i Barbuda</option>
                <option value="Arabia Saudyjska">Arabia Saudyjska</option>
                <option value="Argentyna">Argentyna</option>
                <option value="Armenia">Armenia</option>
                <option value="Aruba">Aruba</option>
                <option value="Australia">Australia</option>
                <option value="Austria">Austria</option>
                <option value="Azerbejdżan">Azerbejdżan</option>
                <option value="Bahamy">Bahamy</option>
                <option value="Bahrajn">Bahrajn</option>
                <option value="Bangladesz">Bangladesz</option>
                <option value="Barbados">Barbados</option>
                <option value="Belgia">Belgia</option>
                <option value="Belize">Belize</option>
                <option value="Benin">Benin</option>
                <option value="Bermudy">Bermudy</option>
                <option value="Bhutan">Bhutan</option>
                <option value="Białoruś">Białoruś</option>
                <option value="Boliwia">Boliwia</option>
                <option value="Bośnia i Hercegowina">Bośnia i Hercegowina</option>
                <option value="Botswana">Botswana</option>
                <option value="Brazylia">Brazylia</option>
                <option value="Brunei">Brunei</option>
                <option value="Brytyjskie Wyspy Dziewicze">Brytyjskie Wyspy Dziewicze</option>
                <option value="Bułgaria">Bułgaria</option>
                <option value="Burkina Faso">Burkina Faso</option>
                <option value="Burundi">Burundi</option>
                <option value="Chile">Chile</option>
                <option value="Chiny">Chiny</option>
                <option value="Chorwacja">Chorwacja</option>
                <option value="Cypr">Cypr</option>
                <option value="Czad">Czad</option>
                <option value="Czarnogóra">Czarnogóra</option>
                <option value="Czechy">Czechy</option>
                <option value="Dania">Dania</option>
                <option value="Demokratyczna Republika Konga">Demokratyczna Republika Konga</option>
                <option value="Dominika">Dominika</option>
                <option value="Dominikana">Dominikana</option>
                <option value="Dżibuti">Dżibuti</option>
                <option value="Egipt">Egipt</option>
                <option value="Ekwador">Ekwador</option>
                <option value="Erytrea">Erytrea</option>
                <option value="Estonia">Estonia</option>
                <option value="Etiopia">Etiopia</option>
                <option value="Falklandy (Malwiny)">Falklandy (Malwiny)</option>
                <option value="Fidżi">Fidżi</option>
                <option value="Filipiny">Filipiny</option>
                <option value="Finlandia">Finlandia</option>
                <option value="Francja">Francja</option>
                <option value="Gabon">Gabon</option>
                <option value="Gambia">Gambia</option>
                <option value="Georgia">Georgia</option>
                <option value="Ghana">Ghana</option>
                <option value="Gibraltar">Gibraltar</option>
                <option value="Grecja">Grecja</option>
                <option value="Grenada">Grenada</option>
                <option value="Grenlandia">Grenlandia</option>
                <option value="Gruzja">Gruzja</option>
                <option value="Guam">Guam</option>
                <option value="Guernsey">Guernsey</option>
                <option value="Gujana">Gujana</option>
                <option value="Gujana Francuska">Gujana Francuska</option>
                <option value="Gwadelupa">Gwadelupa</option>
                <option value="Gwatemala">Gwatemala</option>
                <option value="Gwinea">Gwinea</option>
                <option value="Gwinea Bissau">Gwinea Bissau</option>
                <option value="Gwinea Równikowa">Gwinea Równikowa</option>
                <option value="Haiti">Haiti</option>
                <option value="Hiszpania">Hiszpania</option>
                <option value="Holandia">Holandia</option>
                <option value="Honduras">Honduras</option>
                <option value="Hongkong">Hongkong</option>
                <option value="Indie">Indie</option>
                <option value="Indonezja">Indonezja</option>
                <option value="Irak">Irak</option>
                <option value="Iran">Iran</option>
                <option value="Irlandia">Irlandia</option>
                <option value="Islandia">Islandia</option>
                <option value="Izrael">Izrael</option>
                <option value="Jamajka">Jamajka</option>
                <option value="Japonia">Japonia</option>
                <option value="Jemen">Jemen</option>
                <option value="Jersey">Jersey</option>
                <option value="Jordan">Jordan</option>
                <option value="Kajmany">Kajmany</option>
                <option value="Kambodża">Kambodża</option>
                <option value="Kamerun">Kamerun</option>
                <option value="Kanada">Kanada</option>
                <option value="Katar">Katar</option>
                <option value="Kazachstan">Kazachstan</option>
                <option value="Kenia">Kenia</option>
                <option value="Kirgistan">Kirgistan</option>
                <option value="Kiribati">Kiribati</option>
                <option value="Kolumbia">Kolumbia</option>
                <option value="Komory">Komory</option>
                <option value="Kongo">Kongo</option>
                <option value="Korea Południowa">Korea Południowa</option>
                <option value="Korea Północna">Korea Północna</option>
                <option value="Kostaryka">Kostaryka</option>
                <option value="Kuba">Kuba</option>
                <option value="Kuwejt">Kuwejt</option>
                <option value="Laos">Laos</option>
                <option value="Lesotho">Lesotho</option>
                <option value="Liban">Liban</option>
                <option value="Liberia">Liberia</option>
                <option value="Libia">Libia</option>
                <option value="Liechtenstein">Liechtenstein</option>
                <option value="Litwa">Litwa</option>
                <option value="Luksemburg">Luksemburg</option>
                <option value="Łotwa">Łotwa</option>
                <option value="Macedonia">Macedonia</option>
                <option value="Madagaskar">Madagaskar</option>
                <option value="Majotta">Majotta</option>
                <option value="Makau">Makau</option>
                <option value="Malawi">Malawi</option>
                <option value="Malediwy">Malediwy</option>
                <option value="Malezja">Malezja</option>
                <option value="Mali">Mali</option>
                <option value="Malta">Malta</option>
                <option value="Mariany Północne">Mariany Północne</option>
                <option value="Maroko">Maroko</option>
                <option value="Martynika">Martynika</option>
                <option value="Mauretania">Mauretania</option>
                <option value="Mauritius">Mauritius</option>
                <option value="Meksyk">Meksyk</option>
                <option value="Mikronezja">Mikronezja</option>
                <option value="Mołdawia">Mołdawia</option>
                <option value="Monako">Monako</option>
                <option value="Mongolia">Mongolia</option>
                <option value="Montserrat">Montserrat</option>
                <option value="Mozambik">Mozambik</option>
                <option value="Myanmar">Myanmar</option>
                <option value="Namibia">Namibia</option>
                <option value="Nauru">Nauru</option>
                <option value="Nepal">Nepal</option>
                <option value="Niemcy">Niemcy</option>
                <option value="Niger">Niger</option>
                <option value="Nigeria">Nigeria</option>
                <option value="Nikaragua">Nikaragua</option>
                <option value="Niue">Niue</option>
                <option value="Norfolk">Norfolk</option>
                <option value="Norwegia">Norwegia</option>
                <option value="Nowa Kaledonia">Nowa Kaledonia</option>
                <option value="Nowa Zelandia">Nowa Zelandia</option>
                <option value="Oman">Oman</option>
                <option value="Pakistan">Pakistan</option>
                <option value="Palau">Palau</option>
                <option value="Palestyna">Palestyna</option>
                <option value="Panama">Panama</option>
                <option value="Papua-Nowa Gwinea">Papua-Nowa Gwinea</option>
                <option value="Paragwaj">Paragwaj</option>
                <option value="Peru">Peru</option>
                <option value="Pitcairn">Pitcairn</option>
                <option value="Polinezja Francuska">Polinezja Francuska</option>
                <option value="Polska">Polska</option>
                <option value="Portoryko">Portoryko</option>
                <option value="Portugalia">Portugalia</option>
                <option value="Republika Południowej Afryki">Republika Południowej Afryki</option>
                <option value="Republika Środkowoafrykańska">Republika Środkowoafrykańska</option>
                <option value="Republika Zielonego Przylądka">Republika Zielonego Przylądka</option>
                <option value="Reunion">Reunion</option>
                <option value="Rosja">Rosja</option>
                <option value="Rumunia">Rumunia</option>
                <option value="Rwanda">Rwanda</option>
                <option value="Sahara Zachodnia">Sahara Zachodnia</option>
                <option value="Saint Kitts i Nevis">Saint Kitts i Nevis</option>
                <option value="Saint Lucia">Saint Lucia</option>
                <option value="Saint Vincent i Grenadyny">Saint Vincent i Grenadyny</option>
                <option value="Saint-Barthélemy">Saint-Barthélemy</option>
                <option value="Saint-Martin">Saint-Martin</option>
                <option value="Saint-Pierre i Miquelon">Saint-Pierre i Miquelon</option>
                <option value="Salwador">Salwador</option>
                <option value="Samoa">Samoa</option>
                <option value="San Marino">San Marino</option>
                <option value="Senegal">Senegal</option>
                <option value="Serbia">Serbia</option>
                <option value="Seszele">Seszele</option>
                <option value="Sierra Leone">Sierra Leone</option>
                <option value="Singapur">Singapur</option>
                <option value="Sint Maarten">Sint Maarten</option>
                <option value="Słowacja">Słowacja</option>
                <option value="Słowenia">Słowenia</option>
                <option value="Somalia">Somalia</option>
                <option value="Sri Lanka">Sri Lanka</option>
                <option value="Stany Zjednoczone">Stany Zjednoczone</option>
                <option value="Suazi">Suazi</option>
                <option value="Sudan">Sudan</option>
                <option value="Sudan Południowy">Sudan Południowy</option>
                <option value="Surinam">Surinam</option>
                <option value="Svalbard i Jan Mayen">Svalbard i Jan Mayen</option>
                <option value="Syria">Syria</option>
                <option value="Szwajcaria">Szwajcaria</option>
                <option value="Szwecja">Szwecja</option>
                <option value="Tadżykistan">Tadżykistan</option>
                <option value="Tajlandia">Tajlandia</option>
                <option value="Tajwan">Tajwan</option>
                <option value="Tanzania">Tanzania</option>
                <option value="Timor Wschodni">Timor Wschodni</option>
                <option value="Togo">Togo</option>
                <option value="Tokelau">Tokelau</option>
                <option value="Tonga">Tonga</option>
                <option value="Trynidad i Tobago">Trynidad i Tobago</option>
                <option value="Tunezja">Tunezja</option>
                <option value="Turcja">Turcja</option>
                <option value="Turkmenistan">Turkmenistan</option>
                <option value="Turks i Caicos">Turks i Caicos</option>
                <option value="Tuvalu">Tuvalu</option>
                <option value="Uganda">Uganda</option>
                <option value="Ukraina">Ukraina</option>
                <option value="Urugwaj">Urugwaj</option>
                <option value="Uzbekistan">Uzbekistan</option>
                <option value="Vanuatu">Vanuatu</option>
                <option value="Wallis i Futuna">Wallis i Futuna</option>
                <option value="Watykan">Watykan</option>
                <option value="Wenezuela">Wenezuela</option>
                <option value="Węgry">Węgry</option>
                <option value="Wielka Brytania">Wielka Brytania</option>
                <option value="Wietnam">Wietnam</option>
                <option value="Włochy">Włochy</option>
                <option value="Wybrzeże Kości Słoniowej">Wybrzeże Kości Słoniowej</option>
                <option value="Wyspa Bouveta">Wyspa Bouveta</option>
                <option value="Wyspa Bożego Narodzenia">Wyspa Bożego Narodzenia</option>
                <option value="Wyspa Man">Wyspa Man</option>
                <option value="Wyspy Cooka">Wyspy Cooka</option>
                <option value="Wyspy Dziewicze Stanów Zjednoczonych">Wyspy Dziewicze Stanów Zjednoczonych</option>
                <option value="Wyspy Dziewicze Wielkiej Brytanii">Wyspy Dziewicze Wielkiej Brytanii</option>
                <option value="Wyspy Owcze">Wyspy Owcze</option>
                <option value="Wyspy Świętego Tomasza i Książęca">Wyspy Świętego Tomasza i Książęca</option>
                <option value="Yemen">Jemen</option>
                <option value="Zambia">Zambia</option>
                <option value="Zimbabwe">Zimbabwe</option>
            </select>
            @error('country')
            <p>Błąd</p>
            @enderror
        </div>
        <div class="form-half-group">
            <div class="dashboard-form-group">
                <label for="phone" class="dashboard-label">Numer telefonu (wymagane)</label>
                <input name="phone" type="text" class="dashboard-input" placeholder="Zacznij wprowadzać..."
                    value="{{$client->phone}}">
                @error('phone')
                <p>{{ $message }}</p>
                @enderror
            </div>

            <div class="dashboard-form-group">
                <label for="email" class="dashboard-label">Adres email (wymagane)</label>
                <input name="email" type="text" class="dashboard-input" placeholder="adres@email.com"
                    value="{{$client->email}}">
                @error('email')
                <p>{{ $message }}</p>
                @enderror
            </div>

        </div>
        <div class="dashboard-form-group">
            <label for="tags" class="dashboard-label">Grupy</label>
            <select class="dashboard-input groups-select" name="groups[]" multiple id="">
                @foreach ($groups as $group)
                <option value="{{ $group->id }}" {{ $client->groups->contains($group) ? 'selected' : '' }}>
                    {{ $group->name }}
                </option>
                @endforeach
            </select>
            @error('groups')
            <p>Błąd</p>
            @enderror
        </div>

        <div class="form-buttons">
            <a class="cancel-button" href="{{route('clients.index')}}">Anuluj</a>
            <button type="submit" class="add-button">Zapisz</button>
        </div>
    </form>
</div>


@endsection
