@forelse ($posts as $post)
{{$post->id}}- {{$post->title}} ~ {{$post->user->name}} ({{ $post->user->posts->count() }})<br>
@empty
Post not found
@endforelse
