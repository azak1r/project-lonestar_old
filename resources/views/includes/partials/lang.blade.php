<div class="dropdown-menu">
<ul role="menu">
    @foreach (array_keys(config('locale.languages')) as $lang)
        <li>{{ link_to('lang/'.$lang, trans('menus.language-picker.langs.'.$lang)) }}</li>
    @endforeach
</ul>
    </div>