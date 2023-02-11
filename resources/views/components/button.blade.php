@props([
	'href'=>null,
])


<{{$href? 'a': 'button'}} {{$href? 'href='.$href : ''}}
	{{$attributes->merge(['class'=>'flex items-center px-0.5 py-0.5 rounded '])}}>
{{$slot}}
</{{$href? 'a': 'button'}}>