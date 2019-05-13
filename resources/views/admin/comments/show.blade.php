@extends('admin.layouts.main')

@section('title',__('admin.show-comments'))

@section('content')
    @include('admin.includes.title')
    <ul class="nav mb-md-3">
        <li>
            <a href="{{ route('comments.index') }}" class="btn btn-dark">{{ __('admin.back') }}</a>
            <a href="{{ route('comments.edit', $main->id) }}" class="btn btn-primary">{{ __('admin.update') }}</a>
            <form action="{{ route('comments.destroy', $main->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="if(!confirm('{{ __('admin.trash') }}')) return false;">{{ __('admin.delete') }}</button>
            </form>
        </li>
    </ul>
    <table class="table">
        <tr>
            <th>{{ __('admin.comments-id') }}</th>
            <td>{{ $main->id }}</td>
        </tr>
        <tr>
            <th>{{ __('admin.comments-user') }}</th>
            <td>{{ $main->user->name }}</td>
        </tr>
        <tr>
            <th>{{ __('admin.comments-article') }}</th>
            <td>{{ $main->article->title.' ('.$main->article->id.')' }}</td>
        </tr>
        <tr>
            <th>{{ __('admin.comments-text') }}</th>
            <td>{{ $main->body }}</td>
        </tr>
        <tr>
            <th>{{ __('admin.status') }}</th>
            <td>
                @if($main->status)
                    {{ __('admin.enabled') }}
                @else
                    {{ __('admin.disabled') }}
                @endif
            </td>
        </tr>
        <tr>
            <th>{{ __('admin.created') }}</th>
            <td>{{ $main->created_at }}</td>
        </tr>
        <tr>
            <th>{{ __('admin.update') }}</th>
            <td>{{ $main->updated_at }}</td>
        </tr>
    </table>
@endsection