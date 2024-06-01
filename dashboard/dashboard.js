function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
}
document.addEventListener('DOMContentLoaded', (event) => {
    // Define a data atual ao carregar a página
    const dataInput = document.getElementById('data');
    const today = new Date().toISOString().split('T')[0];
    dataInput.value = today;

    let clickCount = 0;

    document.getElementById('registrar-horario').addEventListener('click', () => {
        clickCount++;
        const now = new Date();
        const timeString = now.toTimeString().split(' ')[0].substring(0, 5); // Formato HH:MM

        if (clickCount === 1) {
            document.getElementById('entrada').value = timeString;
        } else if (clickCount === 2) {
            document.getElementById('inicio_almoco').value = timeString;
        } else if (clickCount === 3) {
            document.getElementById('fim_almoco').value = timeString;
        } else if (clickCount === 4) {
            document.getElementById('saida').value = timeString;
            // Submeter o formulário após preencher o campo de saída
            document.querySelector('form').submit();
        }
    });
});