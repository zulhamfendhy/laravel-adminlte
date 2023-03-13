@foreach($items as $item)
    <li @lm_attrs($item) class="nav-item" @lm_endattrs>
        <a @lm_attrs($item->link) class="nav-link" @lm_endattrs href="{!! $item->url() !!}">
            <i class="nav-icon fas {{ $item->data('icon') }}"></i>
            &nbsp;
            <p>
                {!! $item->title !!}
                @if($item->hasChildren()) <i class="right fas fa-angle-left"></i> @endif
            </p>
        </a>
        @if($item->hasChildren())
        <ul class="nav nav-treeview">
            @include(config('laravel-menu.views.custom-items'), array('items' => $item->children()))
        </ul>
        @endif
    </li>
@endforeach
