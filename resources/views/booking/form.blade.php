<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Agendar com {{ $user->name }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Estilos rápidos --}}
    <style>
        body { font-family: sans-serif; max-width: 600px; margin: 30px auto; padding: 20px; background: #f9f9f9; }
        h2 { text-align: center; }
        form { display: flex; flex-direction: column; gap: 15px; margin-top: 20px; }
        label { font-weight: bold; }
        select, input, textarea, button {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }
        button {
            background-color: #3b82f6;
            color: white;
            font-weight: bold;
            border: none;
            cursor: pointer;
        }
        .success {
            background: #d1fae5;
            border: 1px solid #10b981;
            padding: 10px;
            margin-bottom: 15px;
            color: #065f46;
            border-radius: 6px;
        }
    </style>
</head>
<body>

<h2>Agendar com {{ $user->name }}</h2>

@if(session('success'))
    <div class="success">{{ session('success') }}</div>
@endif

<form method="POST">
    @csrf

    <label for="nome">O seu nome</label>
    <input type="text" id="nome" name="nome" required>

    <label for="email">O seu email</label>
    <input type="email" id="email" name="email" required>

    <label for="dia">Escolha o dia</label>
    <select name="dia" id="dia" required>
        <option value="">-- Selecione o dia --</option>
        @foreach(array_keys($slots) as $dia)
            <option value="{{ $dia }}">{{ ucfirst($dia) }}</option>
        @endforeach
    </select>

    <label for="hora">Escolha o horário</label>
    <select name="hora" id="hora" required>
        <option value="">-- Selecione o horário --</option>
    </select>

    <button type="submit">Confirmar Reunião</button>
</form>

<script>
    const slots = @json($slots);

    const diaSelect = document.getElementById('dia');
    const horaSelect = document.getElementById('hora');

    diaSelect.addEventListener('change', function () {
        const dia = this.value;
        const horas = slots[dia] || [];

        horaSelect.innerHTML = '<option value="">-- Selecione o horário --</option>';

        horas.forEach(hora => {
            const opt = document.createElement('option');
            opt.value = hora;
            opt.textContent = hora;
            horaSelect.appendChild(opt);
        });
    });
</script>

</body>
</html>
