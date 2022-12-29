<x-layout title="Nova série">
    <form action="/series/salvar" method="post">
        @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">Nome: </label>
            <input type="text" id="nome" name="nome" class="form-control"></input>
        </div>
        <button type="submit" class="btn btn-primary">submit</button>
    </form>
</x-layout>
