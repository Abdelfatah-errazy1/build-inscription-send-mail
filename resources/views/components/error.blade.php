@props(['field'])
@error($field)
<span class="text-danger my-2">
  {{ $message }}
</span>
@enderror