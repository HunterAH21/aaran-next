@props([
    'left' => false,
    'center' => false,
    'right' => false,
     'colspan' => 0,
    'href' => '#',
])
<td colspan="{{$colspan}}" {{$attributes->class(['px-3 py-2 border-r border-neutral-300', 'text-left'=>$left,
    'text-center'=>$center,
    'text-right'=>$right,])}}>
    <a href="{{ $href }}">
    {{$slot}}
    </a>
</td>
