<x-app>
    <x-app-header-bar />
    <x-app-page-content>
        <x-app-section-breadcrumb />
        <x-app-section-statistic-container>
            <div class="col-lg-8 offset-lg-2">
                <form method="POST" action="{{route('carreteras.update',['carretera'=>$carretera->id])}}">
                    @csrf
                    @method('PUT')
                    <x-app-input-group label="Nombre:" placeholder="Introduzca el nombre de la carretera" name="nombre" :value="$carretera->nombre"/>
                    @error("nombre")
                        <x-app-alert type="danger" label="error" message="{{$message}}"/>
                    @enderror
                    <x-app-input-group label="Categoria:" placeholder="Introduzca la categoria de la carretera" name="categoria" :value="$carretera->categoria"/>
                    @error("categoria")
                        <x-app-alert type="danger" label="error" message="{{$message}}"/>
                    @enderror
                    <x-app-button color="green" text="Guardar Cambios"/>
                </form>
            </div>
        </x-app-section-statistic-container>
        <x-app-section-copyright />
    </x-app-page-content>
</x-app>