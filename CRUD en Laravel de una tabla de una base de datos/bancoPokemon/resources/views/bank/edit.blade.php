@extends('bank.base')

@section('basecontent')

    <form action="{{url('pokemon/' . $pokemon->id)}}" method="post">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="name">Name</label>
            <input value="{{ old('name', $pokemon->name) }}" required type="text" class="form-control" id="name" name="name" placeholder="name">
        </div>
        <div class="form-group">
            <label for="weight">Weight (kg)</label>
            <input value="{{ old('weight', $pokemon->weight) }}" required type="number" step="0.01" class="form-control" id="weight" name="weight" placeholder="weight">
        </div>
        <div class="form-group">
            <label for="height">Height (m)</label>
            <input value="{{ old('height', $pokemon->height) }}" required type="number" step="0.01" class="form-control" id="height" name="height" placeholder="height">
        </div>
        <div class="form-group">
            <label for="type">Type</label>
            <select required class="form-control" id="type" name="type">
                <option value="bug" {{ old('type', $pokemon->type) == 'bug' ? 'selected' : '' }}>bug</option>
                <option value="dark" {{ old('type', $pokemon->type) == 'dark' ? 'selected' : '' }}>dark</option>
                <option value="dragon" {{ old('type', $pokemon->type) == 'dragon' ? 'selected' : '' }}>dragon</option>
                <option value="electric" {{ old('type', $pokemon->type) == 'electric' ? 'selected' : '' }}>electric</option>
                <option value="fairy" {{ old('type', $pokemon->type) == 'fairy' ? 'selected' : '' }}>fairy</option>
                <option value="fighting" {{ old('type', $pokemon->type) == 'fighting' ? 'selected' : '' }}>fighting</option>
                <option value="fire" {{ old('type', $pokemon->type) == 'fire' ? 'selected' : '' }}>fire</option>
                <option value="flying" {{ old('type', $pokemon->type) == 'flying' ? 'selected' : '' }}>flying</option>
                <option value="ghost" {{ old('type', $pokemon->type) == 'ghost' ? 'selected' : '' }}>ghost</option>
                <option value="grass" {{ old('type', $pokemon->type) == 'grass' ? 'selected' : '' }}>grass</option>
                <option value="ground" {{ old('type', $pokemon->type) == 'ground' ? 'selected' : '' }}>ground</option>
                <option value="ice" {{ old('type', $pokemon->type) == 'ice' ? 'selected' : '' }}>ice</option>
                <option value="normal" {{ old('type', $pokemon->type) == 'normal' ? 'selected' : '' }}>normal</option>
                <option value="poison" {{ old('type', $pokemon->type) == 'poison' ? 'selected' : '' }}>poison</option>
                <option value="psychic" {{ old('type', $pokemon->type) == 'psychic' ? 'selected' : '' }}>psychic</option>
                <option value="rock" {{ old('type', $pokemon->type) == 'rock' ? 'selected' : '' }}>rock</option>
                <option value="steel" {{ old('type', $pokemon->type) == 'steel' ? 'selected' : '' }}>steel</option>
                <option value="water" {{ old('type', $pokemon->type) == 'water' ? 'selected' : '' }}>water</option>
            </select>
        </div>
        <div class="form-group">
            <label for="evolution">Evolutions</label>
            <input value="{{ old('evolution', $pokemon->evolution) }}" required type="number" step="1" class="form-control" id="evolution" name="evolution" placeholder="number of evolutions">
        </div>
        <button type="submit" class="btn btn-primary">edit</button>
    </form>
    <br>
    <div class="form-group">
    <a href="{{url()->previous()}}">back</a>
    </div>

@endsection