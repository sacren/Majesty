@props(['id' => null, 'message' => null])

@error($id)
<p {{ $attributes->merge(['class' => 'text-xs text-red-500 font-bold mt-1']) }}>{{ $message }}</p>
@enderror
