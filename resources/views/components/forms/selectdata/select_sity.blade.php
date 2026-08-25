<li data-option="" class="select__item">--</li>
{{-- Список городов берётся из config/selects/data_sity.php: он страновой,
     при переезде сайта на другую страну правится только конфиг. --}}
@foreach(config('selects.data_sity') as $sity)
    <li data-option="{{ $sity['value'] }}" class="select__item">{{ $sity['text'] }}</li>
@endforeach
