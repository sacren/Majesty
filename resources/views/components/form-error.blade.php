@props(['id' => null, 'message' => null])

@error($id)
<p {{ $attributes->merge(['class' => 'text-xs text-red-500 font-bold']) }}>{{ $message }}</p>
@enderror
