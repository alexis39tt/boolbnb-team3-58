<nav>
    <section class="title-border">
        <div class="title flex-between">
            <div class="flex margin-nav">
                @include('layouts.navbar-side')
            </div>

            <div class="nav-logo" href="{{ url('/') }}"><a href="/" style="margin-left: 100px; text-decoration: none; color:inherit">
                    <img style="height: 50px; width: 50px;" src="{{ asset('img/airbnb-logo.png') }}" alt="tag">
                    <span class="title">BoolBnB</span></a>
            </div>

                <div class="flex align-center">
                    <div>
                        <a class="text_decoration_none button_accent" href="{{ route('admin.apartments.create') }}">
                            Aggiungi appartamento
                        </a>
                    </div>
                    <div style="margin-top: 2px; margin-left: 10px;" class="flex-between query-changes">
                        <a class="button_accent" href="/" style="margin-right: 20px;">Cerca una casa</a>
                    </div>
                </div>

        </div>
    </section>
</nav>
