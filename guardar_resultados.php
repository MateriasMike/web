<form id="quiz-form" action="guardar_resultados.php" method="post">
    <input type="hidden" name="materia" value="Inglés I">
    <ol>
        <li>
            <p>Pregunta 1</p>
            <input type="radio" name="q1" value="1"> Opción 1<br>
            <input type="radio" name="q1" value="0"> Opción 2<br>
            <input type="radio" name="q1" value="0"> Opción 3<br>
        </li>
        <!-- Repite las preguntas hasta 10 -->
    </ol>
    <input type="hidden" id="aciertos" name="aciertos" value="0">
    <button type="button" onclick="calcularResultados()">Enviar</button>
</form>

<script>
function calcularResultados() {
    let form = document.getElementById('quiz-form');
    let inputs = form.getElementsByTagName('input');
    let aciertos = 0;

    for (let i = 0; i < inputs.length; i++) {
        if (inputs[i].type === 'radio' && inputs[i].checked && inputs[i].value == '1') {
            aciertos++;
        }
    }

    document.getElementById('aciertos').value = aciertos;
    form.submit();
}
</script>
