document.addEventListener('DOMContentLoaded', function () {
    const medico = document.getElementById('medico');
    const especialidadInput = document.getElementById('especialidad');

    medico.addEventListener('change', function () {
        const id = this.value;

        if (!id) {
            especialidadInput.value = "";
            return;
        }

        fetch(`index.php?accion=obtenerEspecialidad&id=${id}`)
            .then(res => res.json())
            .then(data => {
                if (data) {
                    especialidadInput.value = data.especialidad;
                }
            });
    });
});