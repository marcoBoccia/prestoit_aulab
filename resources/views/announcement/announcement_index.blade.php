<x-layout>
@if (session("status"))
        <div class="alert alert-warning">
            {{session("status")}}
        </div>
    @endif



    <div class="container">
        <div class="row">
            <div class="">

            </div>
        </div>
    </div>
</x-layout>