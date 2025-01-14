@extends('layouts.backOffice')
@section('title')
    I tuoi appartamenti
@endsection
@section('content')
    @if (session('deleted'))
        <div class="alert alert-deleted">
            {{ session('deleted') }}
        </div>
    @elseif (session('edited'))
        <div class="alert alert-success">
            {{ session('modified') }}
        </div>
    @elseif (session('created'))
        <div class="alert alert-created">
            {{ session('created') }}
        </div>
    @endif
    <div class="flex-center padding-dashboard">
        <div class="custom apartment-padding">
            <div class="flex-between section-padding">
                <div style="display: block">
                    <h2 class="text-center h2-color">Appartamenti</h2>
                </div>
            </div>

            <table class="table flex">
                <tbody>
                    @foreach ($apartments as $apartment)
                        <tr>
                            <td><img src="{{ asset("/storage/$apartment->cover_image") }}" alt="{{ $apartment->title }}"
                                    class="listaptimg"></td>
                            <td style="padding-right: 30px; padding-left: 10px; font-weight: bold;">
                                {{ $apartment->title }}</td>
                            <td style="padding-right: 30px; padding-left: 10px;">{{ $apartment->description }}</td>
                            <td style="padding-right: 30px; padding-left: 10px;">{{ $apartment->address }}</td>
                            <td class="between-tables">
                                <button class="button_crud">
                                    <a href="{{ route('admin.apartments.show', $apartment->id) }}"
                                        class="button-crud link-hover text_decoration_none">
                                        Visualizza
                                    </a>
                                </button>
                                <button class="button_crud">
                                    <a href="{{ route('admin.apartments.edit', $apartment->id) }}"
                                        class="button-crud link-hover text_decoration_none">
                                        Modifica
                                    </a>
                                </button>
                                {{-- DELETE --}}
                                <form action="{{ route('admin.apartments.destroy', $apartment->id) }}" method="POST"
                                    class="delete-form">
                                    @csrf
                                    @method('DELETE')
                                    <button title="Elimina" class=" delete " type="submit" class="delete-form">
                                        Elimina
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
@section('script')
    <script src="{{ asset('js/confirmDelete.js') }}"></script>
@endsection
